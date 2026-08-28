<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Http\Requests\Profile\ChangePasswordRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    protected UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function showProfile()
    {
        return view('settings.profile', ['title' => 'Profile']);
    }

    public function showChangePassword()
    {
        return view('settings.change_password', ['title' => 'Change Password']);
    }

    // API: Update Profile
    public function updateProfile(UpdateProfileRequest $request)
    {
        $this->userRepository->updateProfile(Auth::id(), $request->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil memperbarui biodata!'
        ]);
    }

    // API: Update Password
    public function updatePassword(ChangePasswordRequest $request)
    {
        if (Auth::attempt(['email' => Auth::user()->email, 'password' => $request->old_password])) {
            $this->userRepository->updatePassword(Auth::id(), $request->new_password);
            Auth::logout();

            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil memperbarui password!',
                'redirect' => '/login'
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Password anda salah!'
        ], 400);
    }
}
