<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('pages.admin.dashboard');
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
}
