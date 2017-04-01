<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;
use App\Pkl;
use App\Prodi;
use App\Perusahaan;
//use App\Http\Request;
use App\Http\Controllers\Controllers;

/**
* 
*/
class PklController extends Controller
{
	public function index()
	{
		$pkls = DB::table('pkl')
        		->leftJoin('prodi', 'pkl.id_prodi', '=', 'prodi.id')
        		->leftJoin('perusahaan','pkl.perusahaan_id', '=', 'perusahaan.id')
                ->select('*')
                ->paginate(5);
        return view('pkl.index', ['pkls' => $pkls]);
	}
	public function create()
	{
        $prodi= DB::table('prodi')->get();
        $perusahaan= DB::table('perusahaan')->get();
		return view('pkl.create',['prodi'=>$prodi,'perusahaan'=>$perusahaan]);
	}
	public function store(Request $request)
	{
		$this->validate($request, [
        'id' => 'required',
        'nim' => 'required|number',
        'semester' => 'required',
        'id_prodi' => 'required',
        'tahun_ajaran' => 'required|number',
        'perusahaan_id' => 'required',
    ]);
		$pkl = new Pkl;
        $pkl->nim = $request->nim;
        $pkl->semester = $request->semester;
        $pkl->id_prodi = $request->id_prodi;
        $pkl->tahun_ajaran = $request->tahun_ajaran;
        $pkl->perusahaan_id = $request->perusahaan_id;
        $pkl->save();

        return redirect('pkl')->with('message','profile pkl updated!');
	}
	public function show($pkl)
	{
        $pkl=Pkl::where('id',$pkl)->first();
		if(!$pkl){
			abort(503);
		}
		return view('pkl.singe')->with('pkl',$pkl);
	}
	public function edit($pkl)
	{
        $prodi = Prodi::get();
        $perusahaan = Perusahaan::get();

        $pkl=Pkl::where('id',$id)->first();
		if(!$pkl){
			abort(503);
		}
		return view('pkl.edit',[
            'pkl' => $pkl,
            'prodi' => $prodi,
            'perusahaan' => $perusahaan,
        ]);
	}
	public function update(Request $request, $id)
	{
		$this->validate($request, [
        'id' => 'required',
        'nim' => 'required|number',
        'semester' => 'required',
        'id_prodi' => 'required',
        'tahun_ajaran' => 'required|number',
        'perusahaan_id' => 'required',
    ]);
		$pkl = Pkl::where('id','=',$id);
        $paramsUpdate =[
        'nim' => $request->nim,
        'semester' => $request->semester,
        'id_prodi' => $request->id_prodi,
        'tahun_ajaran' => $request->tahun_ajaran,
        'perusahaan_id' => $request->perusahaan_id,
        ];
        $pkl->update($paramsUpdate);
        return redirect('pkl')->with('message','profile pkl telah di edit!');
	}
	public function destroy($pkl)
	{
		$pkl=Pkl::where('id','=',$id);
		$pkl->delete();
		return redirect('pkl')->with('message','Data telah di dihapus!');
	}
	
}