<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Bidang;
//use App\Http\Request;
use App\Http\Controllers\Controller;

class BidangController extends Controller
{
	public function index()
	{
		//$bidangs = bidang::all();
		$bidangs = DB::table('bidang')->paginate(5);
        return view('bidang.index', ['bidangs' => $bidangs]);
	}
	public function create()
	{
		return view('bidang.create');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
        'id' => 'required',
        'bidang' => 'required',
    ]);
		$bidang = new Bidang;
        $bidang->bidang = $request->bidang;
        $bidang->save();

        return redirect('bidang')->with('message','bidang inserted!');
	}
	public function show($bidang)
	{
		$bidang=Bidang::where('id',$bidang)->first();
		if(!$bidang){
			abort(503);
		}
		return view('bidang.singe')->with('bidang',$bidang);
	}
	public function edit($id)
	{
		$bidang=Bidang::where('id',$id)->first();
		if(!$bidang){
			abort(503);
		}
		return view('bidang.edit')->with('bidang',$bidang);
	}
	public function update(Request $request, $id)
	{
		$this->validate($request, [
        'id' => 'required',
        'bidang' => 'required',
    ]);
		$bidang=Bidang::where('id', '=', $id);
        $paramsUpdate = [
        'bidang' => $request->bidang,
        ];
        $bidang->update($paramsUpdate);
        return redirect('bidang')->with('message','profile bidang telah di edit!');
	}
	public function destroy($bidang)
	{
		$bidang=Bidang::find($bidang);
		$bidang->delete();
		return redirect('bidang')->with('message','Data telah di dihapus!');
	}
	
}