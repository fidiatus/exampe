<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;
use App\Dosen;
use App\Status;
use App\Bidang;
// use App\Http\Request;
use App\Http\Controllers\Controllers;
class dosenController extends Controller
{
	public function index()
	{
		$dosens = DB::table('dosen')
        ->leftJoin('status', 'dosen.status_id', '=', 'status.id')
        ->leftJoin('bidang', 'dosen.bidang_id', '=', 'bidang.id')
        ->select('*')
        ->paginate(5);
        return view('dosen.index', ['dosens' => $dosens]);
	}
	public function create()
	{
        $bidang= DB::table('bidang')->get();
        $status= DB::table('status')->get();
		return view('dosen.create',['bidang'=>$bidang,'status'=>$status]);
	}
	public function store(Request $request)
	{
        $this->validate($request, [
        'id' => 'required',
        'nip' => 'required|number',
        'nama_dosen' => 'required',
        'status_id' => 'required',
        'bidang_id' => 'required',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required|number',
        'username' => 'required',
        'email' => 'required|email|unique:dosen,email',
        'password' => 'required',
    ]);
		$dosen = new Dosen;
        $dosen->nip= $request->nip;
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->status_id = $request->status_id;
        $dosen->bidang_id = $request->bidang_id;
        $dosen->jenis_kelamin = $request->jenis_kelamin;
        $dosen->tanggal_lahir = $request->tanggal_lahir;
        $dosen->alamat = $request->alamat;
        $dosen->no_hp = $request->no_hp;
        $dosen->username = $request->username;
        $dosen->email = $request->email;
        $dosen->password = $request->password;
        $dosen->save();

        return redirect('dosen')->with('message','profile dosen updated!');
	}
	public function show($dosen)
	{
		$dosen=Dosen::where('id',$dosen)->first();
		if(!$dosen){
			abort(503);
		}
		return view('dosen.singe')->with('dosen',$dosen);
	}
	public function edit($id)
	{
        $status = Status::get();
        $bidang = Bidang::get();

        $dosen=Dosen::where('id',$id)->first();
		if(!$dosen){
			abort(503);
		}		
        return view('dosen.edit',[
            'dosen' => $dosen,
            'status' => $status,
            'bidang' => $bidang,
        ]);
	}
	public function update(Request $request, $id)
	{
		$this->validate($request, [
        'id' => 'required',
        'nip' => 'required|number',
        'nama_dosen' => 'required',
        'status_id' => 'required',
        'bidang_id' => 'required',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required|number',
        'username' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);
		$dosen=Dosen::where('id', '=', $id);
        $paramsUpdate = [
        'nip' => $request->nip,
        'nama_dosen' => $request->nama_dosen,
        'status_id' => $request->status_id,
        'bidang_id' => $request->bidang_id,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tanggal_lahir' => $request->tanggal_lahir,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
        'username' => $request->username,
        'email' => $request->email,
        'password' =>$request->password,
        ];
        $dosen->update($paramsUpdate);
        return redirect('dosen')->with('message','profile dosen telah di edit!');
	}
	public function destroy($id)
	{
		$dosen=Dosen::where('id', '=', $id);
		$dosen->delete();
		return redirect('dosen')->with('message','Data telah di dihapus!');
	}
	
}