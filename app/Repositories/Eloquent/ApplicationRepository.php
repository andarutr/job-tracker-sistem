<?php

namespace App\Repositories\Eloquent;

use App\Models\Application;
use App\Repositories\Contracts\ApplicationRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ApplicationRepository implements ApplicationRepositoryInterface
{
    public function getPaginatedByUser(?int $userId, ?string $search = null, int $perPage = 10): LengthAwarePaginator
    {
        $query = Application::query();

        if ($userId !== null) {
            $query->where('user_id', $userId);
        }

        if (!empty($search)) {
            $query->where('company', 'like', '%' . $search . '%');
        }

        return $query->orderByDesc('id')->paginate($perPage);
    }

    public function findById(int $id): ?Application
    {
        return Application::find($id);
    }

    public function create(array $data): Application
    {
        return Application::create([
            'user_id' => $data['user_id'],
            'company' => $data['company'],
            'role' => $data['role'],
            'description' => $data['description'],
            'platform' => $data['platform'],
            'apply_at' => $data['apply_at'],
            'status' => $data['status'],
            'link' => $data['link'] ?? null,
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $application = $this->findById($id);
        if (!$application) {
            return false;
        }

        return $application->update([
            'company' => $data['company'],
            'role' => $data['role'],
            'description' => $data['description'],
            'platform' => $data['platform'],
            'apply_at' => $data['apply_at'],
            'status' => $data['status'],
            'link' => $data['link'] ?? null,
        ]);
    }

    public function delete(int $id): bool
    {
        $application = $this->findById($id);
        if (!$application) {
            return false;
        }

        return (bool) $application->delete();
    }

    public function getPlatformStats(?int $userId = null): array
    {
        $platforms = ['Linkedin', 'Glints', 'Job Street', 'Indeed', 'Pintarnya', 'E-Krut'];
        $stats = [];

        foreach ($platforms as $platform) {
            $query = Application::where('platform', $platform);
            if ($userId !== null) {
                $query->where('user_id', $userId);
            }
            $stats[strtolower(str_replace([' ', '-'], '', $platform))] = $query->count();
        }

        return $stats;
    }

    public function getStatusStats(?int $userId = null): array
    {
        $query = Application::query();
        if ($userId !== null) {
            $query->where('user_id', $userId);
        }

        return [
            'apply_count' => (clone $query)->count(),
            'send_cv' => (clone $query)->where('status', 'Send CV')->count(),
            'viewed' => (clone $query)->where('status', 'Viewed')->count(),
            'interview_hrd' => (clone $query)->where('status', 'Interview HRD')->count(),
            'interview_user' => (clone $query)->where('status', 'Interview User')->count(),
            'failed' => (clone $query)->where('status', 'Failed')->count(),
            'success' => (clone $query)->where('status', 'Success')->count(),
        ];
    }
}
