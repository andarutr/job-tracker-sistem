@extends('layouts.app')

@section('content')
<div class="content" ng-controller="AppliedController" ng-init="loadApplications(); loadStats()">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Lamaran Pekerjaan
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="/user/applied/create" class="btn btn-primary shadow-md mr-2">Tambah Data</a>
        </div>
    </div>
    <div class="col-span-12 mt-8">
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5 text-center">
                        <div class="text-3xl font-medium leading-8 mt-6">@{{ stats.linkedin }}</div>
                        <div class="text-base text-slate-500 mt-1">LINKEDIN</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5 text-center">
                        <div class="text-3xl font-medium leading-8 mt-6">@{{ stats.glints }}</div>
                        <div class="text-base text-slate-500 mt-1">GLINTS</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5 text-center">
                        <div class="text-3xl font-medium leading-8 mt-6">@{{ stats.jobstreet }}</div>
                        <div class="text-base text-slate-500 mt-1">JOBSTREET</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5 text-center">
                        <div class="text-3xl font-medium leading-8 mt-6">@{{ stats.indeed }}</div>
                        <div class="text-base text-slate-500 mt-1">INDEED</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5 text-center">
                        <div class="text-3xl font-medium leading-8 mt-6">@{{ stats.pintarnya }}</div>
                        <div class="text-base text-slate-500 mt-1">PINTARNYA</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-2 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5 text-center">
                        <div class="text-3xl font-medium leading-8 mt-6">@{{ stats.ekrut }}</div>
                        <div class="text-base text-slate-500 mt-1">E-KRUT</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p class="mt-5" ng-if="search">Anda sedang mencari: <strong>@{{ search }}</strong></p>

    <div class="intro-y box mt-5">
        <div class="p-5" id="basic-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <input type="text" class="form-control w-72 mb-4" ng-model="search" ng-change="loadApplications()" placeholder="Cari data perusahaan...">
                    <table class="table table-striped mt-3">
                         <thead>
                             <tr>
                                 <th class="whitespace-nowrap">Perusahaan</th>
                                 <th class="whitespace-nowrap">Role</th>
                                 <th class="whitespace-nowrap">Platform</th>
                                 <th class="whitespace-nowrap">Status</th>
                                 <th class="whitespace-nowrap" width="20%">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr ng-repeat="ap in applications">
                                 <td>@{{ ap.company }}</td>
                                 <td>@{{ ap.role }}</td>
                                 <td>@{{ ap.platform }}</td>
                                 <td>
                                    <span class="btn btn-sm btn-primary" ng-if="ap.status === 'Send CV'">@{{ ap.status }}</span>
                                    <span class="btn btn-sm btn-dark" ng-if="ap.status === 'Viewed'">@{{ ap.status }}</span>
                                    <span class="btn btn-sm btn-warning" ng-if="ap.status === 'Interview HRD' || ap.status === 'Interview User'">@{{ ap.status }}</span>
                                    <span class="btn btn-sm btn-danger" ng-if="ap.status === 'Failed'">@{{ ap.status }}</span>
                                    <span class="btn btn-sm btn-success" ng-if="ap.status === 'Success'">@{{ ap.status }}</span>
                                 </td>
                                 <td>
                                    <a href="/user/applied/show/@{{ ap.id }}" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></a>
                                    <a href="/user/applied/edit/@{{ ap.id }}" class="btn btn-sm btn-success text-white"><i class="bi bi-pencil-fill"></i></a>
                                    <button ng-click="deleteApplication(ap.id)" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                 </td>
                             </tr>
                             <tr ng-if="applications.length === 0 && !loading">
                                 <td colspan="5" class="text-center py-4">Belum ada data lamaran pekerjaan.</td>
                             </tr>
                             <tr ng-if="loading">
                                 <td colspan="5" class="text-center py-4">Loading data...</td>
                             </tr>
                         </tbody>
                      </table>
                 </div>
             </div> 
        </div> 
    </div> 
</div>
@endsection
