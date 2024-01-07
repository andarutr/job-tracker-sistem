<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	$data['menu'] = 'Dashboard';
    	return view('pages.admin.dashboard', $data);
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

    // Account
    public function account()
    {
    	$data['menu'] = 'Account';
    	$data['users'] = \DB::table('users')->orderByDesc('id')->paginate(25);

    	return view('pages.admin.account.index', $data);
    }

    public function account_create()
    {
    	$data['menu'] = 'Create Account';
    	return view('pages.admin.account.create', $data);
    }

    protected function account_create_backend(Request $req)
    {
    	$this->validate($req, [
    		'name' => 'required',
    		'email' => 'required',
    		'is_admin' => 'required',
    	]);

    	\DB::table('users')->insert([
    		'name' => $req->name,
    		'email' => $req->email,
    		'is_admin' => $req->is_admin,
    		'password' => \Hash::make('JTS2024'),
    		'created_at' => now(),
    		'updated_at' => now()
    	]);

    	return redirect('/admin/account')->with([
                'msg' => 'Berhasil mendaftarkan akun!',
                'color' => 'primary'
            ]);
    }

    public function account_edit($id)
    {
    	$data['menu'] = 'Update Account';
    	$data['user'] = \DB::table('users')->where('id', $id)->first();

    	return view('pages.admin.account.edit', $data);
    }

    protected function account_edit_backend(Request $req, $id)
    {
    	$this->validate($req, [
    		'name' => 'required',
    		'email' => 'required',
    		'is_admin' => 'required',
    	]);

    	\DB::table('users')->where('id', $id)
		->update([
    		'name' => $req->name,
    		'email' => $req->email,
    		'is_admin' => $req->is_admin,
    		'updated_at' => now()
    	]);

    	return redirect('/admin/account')->with([
                'msg' => 'Berhasil memperbarui akun!',
                'color' => 'success'
            ]);
    }

    public function account_pass($id)
    {
    	$data['menu'] = 'Change Password Account';
    	$data['user'] = \DB::table('users')->where('id', $id)->first();

    	return view('pages.admin.account.password', $data);
    }

    protected function account_pass_backend(Request $req, $id)
    {
    	$this->validate($req, [
    		'new_password' => 'required|min:8'
    	]);

    	\DB::table('users')->where('id',$id)
    		->update([
    			'password' => \Hash::make($req->new_password),
    			'updated_at' => now()
    		]);

    	return redirect('/admin/account')->with([
                'msg' => 'Berhasil memperbarui password akun!',
                'color' => 'primary'
            ]);
    }

    protected function account_destroy($id)
    {
    	\DB::table('users')->where('id', $id)->delete();
    	
    	return redirect('/admin/account')->with([
                'msg' => 'Berhasil menghapus akun!',
                'color' => 'primary'
            ]);	
    }
}
