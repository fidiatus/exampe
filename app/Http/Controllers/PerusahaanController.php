<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Perusahaan;
//use App\Http\Request;
use App\Http\Controllers\Controllers;

class PerusahaanController extends Controller
{
	public function index()
	{
		$perusahaans = DB::table('perusahaan')->paginate(5);
        return view('perusahaan.index', ['perusahaans' => $perusahaans]);
	}
	public function create()
	{
		return view('perusahaan.create');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
        'nama_perusahaan' => 'required',
        'email' => 'required',
        'telepon' => 'required|number',
        'alamat' => 'required',
    ]);
		$perusahaan=new Perusahaan;
        $perusahaan->nama_perusahaan= $request->nama_perusahaan;
        $perusahaan->email = $request->email;
        $perusahaan->telepon = $request->telepon;
        $perusahaan->alamat = $request->alamat;
        $perusahaan->save();
        return redirect('perusahaan')->with('message','profile perusahaan updated!');
	}
	public function show($perusahaan)
	{
		$perusahaan=Perusahaan::where('id',$perusahaan)->first();
		if(!$perusahaan){
			abort(503);
		}
		return view('perusahaan.singe')->with('perusahaan',$perusahaan);
	}
	public function edit($id)
	{
		$perusahaan=Perusahaan::where('id',$id)->first();
		if(!$perusahaan){
			abort(503);
		}
		return view('perusahaan.edit')->with('perusahaan',$perusahaan);
	}
	public function update(Request $request, $id)
	{
		$this->validate($request, [
        'nama_perusahaan' => 'required',
        'email' => 'required',
        'telepon' => 'required|number',
        'alamat' => 'required',
    ]);
		$perusahaan = Perusahaan::where('id','=',$id);

        $paramsUpdate = [
        'nama_perusahaan' => $request->nama_perusahaan,
        'email' => $request->email,
        'telepon' => $request->telepon,
        'alamat' => $request->alamat,

        ];
        $perusahaan->update($paramsUpdate);
        return redirect('perusahaan')->with('message','profile perusahaan telah di edit!');
	}
	public function destroy($perusahaan)
	{
		$perusahaan=Perusahaan::where('id','=',$id);
		$perusahaan->delete();
		return redirect('perusahaan')->with('message','Data telah di dihapus!');
	}
	
}