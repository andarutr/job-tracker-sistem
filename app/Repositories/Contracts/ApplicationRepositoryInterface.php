<?php

namespace App\Repositories\Contracts;

use App\Models\Application;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ApplicationRepositoryInterface
{
    public function getPaginatedByUser(?int $userId, ?string $search = null, int $perPage = 10): LengthAwarePaginator;

    public function findById(int $id): ?Application;

    public function create(array $data): Application;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;

    public function getPlatformStats(?int $userId = null): array;

    public function getStatusStats(?int $userId = null): array;
}
