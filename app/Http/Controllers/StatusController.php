<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Status;
//use App\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
	public function index()
	{
		$statuss = DB::table('status')->paginate(5);
        return view('status.index', ['statuss' => $statuss]);
	}
	public function create()
	{
		return view('status.create');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
        'id' => 'required',
        'status' => 'required',
    ]);
		$status = new Status;
        $status->status = $request->status;
        $status->save();

        return redirect('status')->with('message','status inserted!');
	}
	public function show($status)
	{
        $status=Status::where('id',$status)->first();
		if(!$status){
			abort(503);
		}
		return view('status.singe')->with('status',$status);
	}
	public function edit($id)
	{
        $status=Status::where('id',$id)->first();
		if(!$status){
			abort(503);
		}
		return view('status.edit')->with('status',$status);
	}
	public function update(Request $request, $id)
	{
		$this->validate($request, [
        'id' => 'required',
        'status' => 'required',
    ]);
		$status=Status::where('id', '=', $id);
        $paramsUpdate = [
        'status' => $request->status,
        ];
        $status->update($paramsUpdate);
        return redirect('status')->with('message','profile status telah di edit!');
	}
	public function destroy($status)
	{
		$status=Status::find($status);
		$status->delete();
		return redirect('status')->with('message','Data telah di dihapus!');
	}
	
}