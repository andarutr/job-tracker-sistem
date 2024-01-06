<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	$data['menu'] = 'Dashboard';
        $data['apply_count'] = \DB::table('applications')
                                    ->where('user_id', Auth::user()->id)
                                    ->count();

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

    public function applied_show($id)
    {
        $data['menu'] = 'Detail Lamaran';
        $data['apply'] = \DB::table('applications')
                                ->where(['id' => $id, 'user_id' => Auth::user()->id])
                                ->first();
                                
        return view('pages.user.applied.show', $data);
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

    public function applied_edit($id)
    {
        $data['menu'] = 'Perbarui Data Lamaran';
        $data['apply'] = \DB::table('applications')
                                ->where(['id' => $id, 'user_id' => Auth::user()->id])
                                ->first();

        return view('pages.user.applied.edit', $data);
    }

    protected function applied_update(Request $req, $id)
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

        $update = \DB::table('applications')
            ->where(['id' => $id, 'user_id' => Auth::user()->id])
            ->update([
                'company' => $req->company,
                'role' => $req->role,
                'description' => $req->description,
                'platform' => $req->platform,
                'apply_at' => $req->apply_at,
                'status' => $req->status,
                'link' => $req->link,
                'updated_at' => now()
            ]);

        return redirect('/user/applied')->with([
            'msg' => 'Berhasil memperbarui data!',
            'color' => 'success'
        ]);
    }

    protected function applied_destroy($id)
    {
        $apply = \DB::table('applications')
                        ->where(['id' => $id, 'user_id' => Auth::user()->id])
                        ->first();
        if($apply)
        {
            $destroy = \DB::table('applications')
                            ->where(['id' => $id, 'user_id' => Auth::user()->id])
                            ->delete();

            return redirect('/user/applied')->with([
                'msg' => 'Berhasil menghapus data!',
                'color' => 'success'
            ]);
        }else{
            return "Forbidden Access!";
        }
    }
}
