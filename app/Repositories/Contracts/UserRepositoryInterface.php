<?php

namespace App\Repositories\Contracts;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface UserRepositoryInterface
{
    public function getPaginatedExcept(int $exceptUserId, int $perPage = 25): LengthAwarePaginator;

    public function findById(int $id): ?User;

    public function create(array $data): User;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;

    public function updatePassword(int $id, string $newPassword): bool;

    public function updateProfile(int $userId, array $data): bool;
}
