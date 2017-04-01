<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Prodi;
//use App\Http\Request;
use App\Http\Controllers\Controller;

class ProdiController extends Controller
{
	public function index()
	{
		$prodis = DB::table('prodi')->paginate(5);
        return view('prodi.index', ['prodis' => $prodis]);
	}
	public function create()
	{
		return view('prodi.create');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
        'id' => 'required',
        'nama_prodi' => 'required',
    ]);
		$prodi = new Prodi;
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->save();

        return redirect('prodi')->with('message','prodi inserted!');
	}
	public function show($prodi)
	{
        $prodi=Prodi::where('id',$prodi)->first();
		if(!$prodi){
			abort(503);
		}
		return view('prodi.singe')->with('prodi',$prodi);
	}
	public function edit($prodi)
	{
        $prodi=Prodi::where('id',$prodi)->first();
		if(!$prodi){
			abort(503);
		}
		return view('prodi.edit')->with('prodi',$prodi);
	}
	public function update(Request $request, $id)
	{
		$this->validate($request, [
        'id' => 'required',
        'nama_prodi' => 'required',
    ]);
		$prodi=Prodi::where('id', '=', $id);
        $paramsUpdate = [
        'nama_prodi' => $request->nama_prodi,
        ];
        $prodi->update($paramsUpdate);
        return redirect('prodi')->with('message','prodi Updated!');
	}
	public function destroy($prodi)
	{
		$prodi=Prodi::find($prodi);
		$prodi->delete();
		return redirect('prodi')->with('message','Data telah di dihapus!');
	}
	
}