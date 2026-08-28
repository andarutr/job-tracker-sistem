<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function getPaginatedExcept(int $exceptUserId, int $perPage = 25): LengthAwarePaginator
    {
        return User::where('id', '!=', $exceptUserId)
            ->orderByDesc('id')
            ->paginate($perPage);
    }

    public function findById(int $id): ?User
    {
        return User::find($id);
    }

    public function create(array $data): User
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'is_admin' => $data['is_admin'],
            'password' => Hash::make($data['password'] ?? 'JTS2024'),
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $user = $this->findById($id);
        if (!$user) {
            return false;
        }

        return $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'is_admin' => $data['is_admin'],
        ]);
    }

    public function delete(int $id): bool
    {
        $user = $this->findById($id);
        if (!$user) {
            return false;
        }

        return (bool) $user->delete();
    }

    public function updatePassword(int $id, string $newPassword): bool
    {
        $user = $this->findById($id);
        if (!$user) {
            return false;
        }

        return $user->update([
            'password' => Hash::make($newPassword),
        ]);
    }

    public function updateProfile(int $userId, array $data): bool
    {
        $user = $this->findById($userId);
        if (!$user) {
            return false;
        }

        return $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);
    }
}
