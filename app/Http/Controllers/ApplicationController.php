<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ApplicationRepositoryInterface;
use App\Http\Requests\Application\StoreApplicationRequest;
use App\Http\Requests\Application\UpdateApplicationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    protected ApplicationRepositoryInterface $applicationRepository;

    public function __construct(ApplicationRepositoryInterface $applicationRepository)
    {
        $this->applicationRepository = $applicationRepository;
    }

    public function dashboard()
    {
        $stats = $this->applicationRepository->getStatusStats(Auth::id());
        return view('user.dashboard', ['title' => 'Dashboard', 'stats' => $stats]);
    }

    public function index()
    {
        return view('user.applied.index', ['title' => 'Lamaran Pekerjaan']);
    }

    public function create()
    {
        return view('user.applied.create', ['title' => 'Tambah Lamaran Kerja']);
    }

    public function show(int $id)
    {
        $application = $this->applicationRepository->findById($id);
        if (!$application || $application->user_id !== Auth::id()) {
            abort(404);
        }
        return view('user.applied.show', ['title' => 'Detail Lamaran', 'application' => $application]);
    }

    public function edit(int $id)
    {
        $application = $this->applicationRepository->findById($id);
        if (!$application || $application->user_id !== Auth::id()) {
            abort(404);
        }
        return view('user.applied.edit', ['title' => 'Update Lamaran Kerja', 'application' => $application]);
    }

    // API Endpoints
    public function apiIndex(Request $request)
    {
        $search = $request->query('search');
        $applications = $this->applicationRepository->getPaginatedByUser(Auth::id(), $search, 100);
        return response()->json($applications);
    }

    public function apiShow(int $id)
    {
        $application = $this->applicationRepository->findById($id);
        if (!$application || $application->user_id !== Auth::id()) {
            return response()->json(['message' => 'Not found'], 404);
        }
        return response()->json($application);
    }

    public function apiStats()
    {
        $stats = $this->applicationRepository->getPlatformStats(Auth::id());
        return response()->json($stats);
    }

    public function apiStore(StoreApplicationRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();

        $application = $this->applicationRepository->create($data);
        return response()->json($application, 201);
    }

    public function apiUpdate(UpdateApplicationRequest $request, int $id)
    {
        $application = $this->applicationRepository->findById($id);
        if (!$application || $application->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $this->applicationRepository->update($id, $request->validated());
        return response()->json(['message' => 'Berhasil memperbarui lamaran kerja!']);
    }

    public function apiDestroy(int $id)
    {
        $application = $this->applicationRepository->findById($id);
        if (!$application || $application->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $this->applicationRepository->delete($id);
        return response()->json(['message' => 'Berhasil menghapus lamaran kerja!']);
    }
}
