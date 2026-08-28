<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Http\Requests\Profile\ChangePasswordRequest;
use App\Http\Requests\Account\StoreAccountRequest;
use App\Http\Requests\Account\UpdateAccountRequest;
use App\Http\Requests\Account\ChangeAccountPasswordRequest;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return view('livewire.admin.dashboard', ['menu' => 'Dashboard']);
    }

    public function profile()
    {
        return view('livewire.settings.profile', ['menu' => 'Profile']);
    }

    public function profile_backend(UpdateProfileRequest $request)
    {
        $this->userRepository->updateProfile(Auth::id(), $request->validated());

        return redirect()->back()->with([
            'msg' => 'Berhasil memperbarui biodata!',
            'color' => 'success'
        ]);
    }

    public function change_password()
    {
        return view('livewire.settings.change_password', ['menu' => 'Change Password']);
    }

    public function change_password_backend(ChangePasswordRequest $request)
    {
        if (Auth::attempt(['email' => Auth::user()->email, 'password' => $request->old_password])) {
            $this->userRepository->updatePassword(Auth::id(), $request->new_password);
            Auth::logout();

            return redirect('/login')->with([
                'msg' => 'Berhasil memperbarui password!'
            ]);
        }

        return redirect()->back()->with([
            'msg' => 'Password anda salah!',
            'color' => 'danger'
        ]);
    }

    public function account()
    {
        $users = $this->userRepository->getPaginatedExcept(Auth::id(), 25);
        return view('livewire.admin.account.index', ['menu' => 'Account', 'users' => $users]);
    }

    public function account_create()
    {
        return view('livewire.admin.account.create', ['menu' => 'Create Account']);
    }

    public function account_create_backend(StoreAccountRequest $request)
    {
        $this->userRepository->create($request->validated());

        return redirect('/admin/account')->with([
            'msg' => 'Berhasil mendaftarkan akun!',
            'color' => 'primary'
        ]);
    }

    public function account_edit(int $id)
    {
        $user = $this->userRepository->findById($id);
        if (!$user) {
            abort(404);
        }

        return view('livewire.admin.account.edit', ['menu' => 'Update Account', 'user' => $user]);
    }

    public function account_edit_backend(UpdateAccountRequest $request, int $id)
    {
        $this->userRepository->update($id, $request->validated());

        return redirect('/admin/account')->with([
            'msg' => 'Berhasil memperbarui akun!',
            'color' => 'success'
        ]);
    }

    public function account_pass(int $id)
    {
        $user = $this->userRepository->findById($id);
        if (!$user) {
            abort(404);
        }

        return view('livewire.admin.account.password', ['menu' => 'Change Password Account', 'user' => $user]);
    }

    public function account_pass_backend(ChangeAccountPasswordRequest $request, int $id)
    {
        $this->userRepository->updatePassword($id, $request->new_password);

        return redirect('/admin/account')->with([
            'msg' => 'Berhasil memperbarui password akun!',
            'color' => 'primary'
        ]);
    }

    public function account_destroy(int $id)
    {
        $this->userRepository->delete($id);

        return redirect('/admin/account')->with([
            'msg' => 'Berhasil menghapus akun!',
            'color' => 'primary'
        ]);
    }
}
