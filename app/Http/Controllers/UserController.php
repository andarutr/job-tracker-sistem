<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	$data['menu'] = 'Dashboard';
    	return view('pages.user.dashboard', $data);
    }

    public function applied()
    {
    	$data['menu'] = 'Lamaran';
    	$data['applications'] = \DB::table('applications')->orderByDesc('id')->paginate(25);

    	return view('pages.user.applied.index', $data);
    }

    public function applied_create()
    {
    	$data['menu'] = 'Tambah Data Lamaran';
    	return view('pages.user.applied.create', $data);
    }

    protected function applied_store(Request $req)
    {
    	$this->validate($req, [
    		'company' => 'required',
    		'role' => 'required',
    		'description' => 'required',
    		'platform' => 'required',
    		'apply_at' => 'required',
    		'status' => 'required',
    		'link' => 'required'
    	]);

    	$store = \DB::table('applications')->insert([
    		'user_id' => Auth::user()->id,
    		'company' => $req->company,
    		'role' => $req->role,
    		'description' => $req->description,
    		'platform' => $req->platform,
    		'apply_at' => $req->apply_at,
    		'status' => $req->status,
    		'link' => $req->link,
    		'created_at' => now(),
    		'updated_at' => now()
    	]);

    	return redirect('/user/applied')->with([
    		'msg' => 'Berhasil menambah data!',
    		'color' => 'primary'
    	]);
    }
}
