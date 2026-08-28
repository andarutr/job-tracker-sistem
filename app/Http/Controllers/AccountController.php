<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Http\Requests\Account\StoreAccountRequest;
use App\Http\Requests\Account\UpdateAccountRequest;
use App\Http\Requests\Account\ChangeAccountPasswordRequest;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    protected UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return view('admin.account.index', ['title' => 'Account']);
    }

    public function create()
    {
        return view('admin.account.create', ['title' => 'Create Account']);
    }

    public function edit(int $id)
    {
        $user = $this->userRepository->findById($id);
        if (!$user) {
            abort(404);
        }
        return view('admin.account.edit', ['title' => 'Update Account', 'user' => $user]);
    }

    public function password(int $id)
    {
        $user = $this->userRepository->findById($id);
        if (!$user) {
            abort(404);
        }
        return view('admin.account.password', ['title' => 'Change Password Account', 'user' => $user]);
    }

    // API Endpoints
    public function apiIndex()
    {
        $users = $this->userRepository->getPaginatedExcept(Auth::id(), 100);
        return response()->json($users);
    }

    public function apiStore(StoreAccountRequest $request)
    {
        $user = $this->userRepository->create($request->validated());
        return response()->json($user, 201);
    }

    public function apiUpdate(UpdateAccountRequest $request, int $id)
    {
        $this->userRepository->update($id, $request->validated());
        return response()->json(['message' => 'Berhasil memperbarui akun!']);
    }

    public function apiUpdatePassword(ChangeAccountPasswordRequest $request, int $id)
    {
        $this->userRepository->updatePassword($id, $request->new_password);
        return response()->json(['message' => 'Berhasil memperbarui password akun!']);
    }

    public function apiDestroy(int $id)
    {
        $this->userRepository->delete($id);
        return response()->json(['message' => 'Berhasil menghapus akun!']);
    }
}
