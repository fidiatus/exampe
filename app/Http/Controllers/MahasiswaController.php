<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;
use App\Mahasiswa;
use App\Prodi;
//use App\Http\Request;
use App\Http\Controllers\Controllers;
class MahasiswaController extends Controller
{
     
	public function index()
	{
		$mahasiswas = DB::table('mahasiswa')
        ->leftJoin('roles', 'mahasiswa.roles_id', '=', 'roles.id')
        ->leftJoin('prodi', 'mahasiswa.prodi', '=', 'prodi.id')
        ->select('*')
        ->paginate(5);

        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
	}
	public function create()
	{
        $prodi= DB::table('prodi')->get();
        $roles= DB::table('roles')->get();
		return view('mahasiswa.create',['prodi'=>$prodi,'roles'=>$roles]);
	}
	public function store(Request $request)
	{
        $this->validate($request, [
        'nama' => 'required',
        'panggilan' => 'required',
        'tempat_lahir' => 'required',
        'tgl_lahir' => 'required',
        'golongan_darah' => 'required',
        'jenis_kelamin' => 'required',
        'agama' => 'required',
        'telepon' => 'required|number',
        'hp' => 'required|number',
        'email' => 'required|email|unique:mahasiswa,email',
        'alamat' => 'required',
        'anak_ke' => 'required|number',
        'daerah_asal' => 'required',
        'sekolah_asal' => 'required',
        'status_sekolah' => 'required',
        'jurusan_sekolah' => 'required',
        'prodi_sekolah' => 'required',
        'nama_ayah' => 'required',
        'nama_ibu' => 'required',
        'pekerjaan_ayah' => 'required',
        'pekerjaan_ibu' => 'required',
        'alamat_ortu' => 'required',
        'jalur_masuk' => 'required',
        'tanggal_masuk' => 'required',
        'prodi' => 'required',
        'username' => 'required',
        'password' => 'required',
        'aktif' => 'required',
    ]);
    	$mahasiswa = new Mahasiswa;
        $mahasiswa->roles_id = $request->roles_id;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->panggilan = $request->panggilan;
        $mahasiswa->tempat_lahir = $request->tempat_lahir;
        $mahasiswa->tgl_lahir = $request->tgl_lahir;
        $mahasiswa->golongan_darah = $request->golongan_darah;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->agama= $request->agama;
        $mahasiswa->telepon= $request->telepon;
        $mahasiswa->hp = $request->hp;
        $mahasiswa->email = $request->email;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->jumlah_saudara = $request->jumlah_saudara;
        $mahasiswa->anak_ke = $request->anak_ke;
        $mahasiswa->daerah_asal = $request->daerah_asal;
        $mahasiswa->sekolah_asal = $request->sekolah_asal;
        $mahasiswa->status_sekolah = $request->status_sekolah;
        $mahasiswa->jurusan_sekolah = $request->jurusan_sekolah;
        $mahasiswa->prodi_sekolah = $request->prodi_sekolah;
        $mahasiswa->nama_ayah = $request->nama_ayah;
        $mahasiswa->nama_ibu = $request->nama_ibu;
        $mahasiswa->pekerjaan_ayah = $request->pekerjaan_ayah;
        $mahasiswa->pekerjaan_ibu = $request->pekerjaan_ibu;
        $mahasiswa->alamat_ortu = $request->alamat_ortu;
        $mahasiswa->jalur_masuk = $request->jalur_masuk;
        $mahasiswa->tanggal_masuk = $request->tanggal_masuk;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->username = $request->username;
        $mahasiswa->password = $request->password;
        $mahasiswa->aktif = $request->aktif;
        $mahasiswa->save();

        return redirect('mahasiswa')->with('message','profile mahasiswa updated!');
	}
	public function show($mahasiswa)
	{
		$mahasiswa=Mahasiswa::where('id',$mahasiswa)->first();
		if(!$mahasiswa){
			abort(503);
		}
		return view('mahasiswa.singe')->with('mahasiswa',$mahasiswa);
	}
	public function edit($id)
	{
        $prodi = Prodi::get();
        
        $mahasiswa= Mahasiswa::find($id);
        if(!$mahasiswa){
            abort(503);
        }
        return view('mahasiswa.edit',[
            'mahasiswa' => $mahasiswa,
            'prodi' => $prodi,
        ]);
	}
	public function update(Request $request, $id)
	{
		$this->validate($request, [
        'nama' => 'required',
        'panggilan' => 'required',
        'tempat_lahir' => 'required',
        'tgl_lahir' => 'required',
        'golongan_darah' => 'required',
        'jenis_kelamin' => 'required',
        'agama' => 'required',
        'telepon' => 'required|number',
        'hp' => 'required|number',
        'email' => 'required',
        'alamat' => 'required',
        'anak_ke' => 'required|number',
        'daerah_asal' => 'required',
        'sekolah_asal' => 'required',
        'status_sekolah' => 'required',
        'jurusan_sekolah' => 'required',
        'prodi_sekolah' => 'required',
        'nama_ayah' => 'required',
        'nama_ibu' => 'required',
        'pekerjaan_ayah' => 'required',
        'pekerjaan_ibu' => 'required',
        'alamat_ortu' => 'required',
        'jalur_masuk' => 'required',
        'tanggal_masuk' => 'required',
        'prodi' => 'required',
        'username' => 'required',
        'password' => 'required',
        'aktif' => 'required',
    ]);
		$mahasiswa = Mahasiswa::where('id','=',$id);
        $paramsUpdate = [
        'nama' => $request->nama,
        'panggilan' => $request->panggilan,
        'tempat_lahir' => $request->tempat_lahir,
        'tgl_lahir' => $request->tgl_lahir,
        'golongan_darah' => $request->golongan_darah,
        'jenis_kelamin' => $request->jenis_kelamin,
        'agama'=> $request->agama,
        'telepon'=> $request->telepon,
        'hp' => $request->hp,
        'email' => $request->email,
        'alamat' => $request->alamat,
        'jumlah_saudara' => $request->jumlah_saudara,
        'anak_ke' => $request->anak_ke,
        'daerah_asal' => $request->daerah_asal,
        'sekolah_asal' => $request->sekolah_asal,
        'status_sekolah' => $request->status_sekolah,
        'jurusan_sekolah' => $request->jurusan_sekolah,
        'prodi_sekolah' => $request->prodi_sekolah,
        'nama_ayah' => $request->nama_ayah,
        'nama_ibu' => $request->nama_ibu,
        'pekerjaan_ayah' => $request->pekerjaan_ayah,
        'pekerjaan_ibu' => $request->pekerjaan_ibu,
        'alamat_ortu' => $request->alamat_ortu,
        'jalur_masuk' => $request->jalur_masuk,
        'tanggal_masuk' => $request->tanggal_masuk,
        'prodi' => $request->prodi,
        'username' => $request->username,
        ];
        $mahasiswa->update($paramsUpdate);
        return redirect('mahasiswa','prodi')->with('message','profile mahasiswa telah di edit!');
	}
	public function destroy($mahasiswa)
	{
		$mahasiswa=Mahasiswa::find($id);
		$mahasiswa->delete();
		return redirect('mahasiswa')->with('message','Data telah di dihapus!');
	}
	
}