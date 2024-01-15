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
        $data['send_cv'] = \DB::table('applications')
                                    ->where([
                                        'user_id' => Auth::user()->id,
                                        'status' => 'Send CV'
                                    ])->count();
        $data['viewed'] = \DB::table('applications')
                                    ->where([
                                        'user_id' => Auth::user()->id,
                                        'status' => 'Viewed'
                                    ])->count();
        $data['interview_hrd'] = \DB::table('applications')
                                    ->where([
                                        'user_id' => Auth::user()->id,
                                        'status' => 'Interview HRD'
                                    ])->count();
        $data['interview_user'] = \DB::table('applications')
                                    ->where([
                                        'user_id' => Auth::user()->id,
                                        'status' => 'Interview User'
                                    ])->count();
        $data['failed'] = \DB::table('applications')
                                    ->where([
                                        'user_id' => Auth::user()->id,
                                        'status' => 'Failed'
                                    ])->count();
        $data['success'] = \DB::table('applications')
                                    ->where([
                                        'user_id' => Auth::user()->id,
                                        'status' => 'Success'
                                    ])->count();

    	return view('pages.user.dashboard', $data);
    }

    // Settings
    public function profile()
    {
        $data['menu'] = 'Profile';
        return view('pages.settings.profile', $data);
    }

    protected function profile_backend(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'email' => 'required'
        ]);

        $update = \DB::table('users')->where('id', Auth::user()->id)
                        ->update([
                            'name' => $req->name,
                            'email' => $req->email,
                            'updated_at' => now()
                        ]);
                        
        return redirect()->back()->with([
                'msg' => 'Berhasil memperbarui biodata!',
                'color' => 'success'
            ]);
    }

    public function change_password()
    {
        $data['menu'] = 'Change Password';
        return view('pages.settings.change_password', $data);
    }

    protected function change_password_backend(Request $req)
    {
        $this->validate($req, [
            'old_password' => 'required',
            'new_password' => 'required|min:8'
        ]);        

        if(Auth::attempt(['email' => Auth::user()->email, 'password' => $req->old_password]))
        {
            \DB::table('users')
                ->where('id', Auth::user()->id)
                ->update([
                    'password' => \Hash::make($req->new_password),
                    'updated_at' => now()
                ]);
            
            Auth::logout();
            
            return redirect('/login')->with([
                'msg' => 'Berhasil memperbarui password!'
            ]);
        }else{
            return redirect()->back()->with([
                'msg' => 'Password anda salah!',
                'color' => 'danger'
            ]);
        }
    }

    public function applied()
    {
    	$data['menu'] = 'Lamaran';
    	$data['applications'] = \DB::table('applications')->orderByDesc('id')->paginate(10);

    	return view('pages.user.applied.index', $data);
    }

    public function applied_search(Request $req)
    {
        $data['menu'] = 'Lamaran';
        $data['search'] = $req->search;
        $data['applications'] = \DB::table('applications')
                                    ->orderByDesc('id')
                                    ->where('company','like','%'.$data['search'].'%')
                                    ->orwhere('role','like','%'.$data['search'].'%')
                                    ->orwhere('platform','like','%'.$data['search'].'%')
                                    ->orwhere('status','like','%'.$data['search'].'%')
                                    ->paginate(10);

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
