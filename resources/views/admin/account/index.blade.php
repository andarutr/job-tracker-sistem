@extends('layouts.app')

@section('content')
<div class="content" ng-controller="AccountController" ng-init="loadAccounts()">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Account
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="/admin/account/create" class="btn btn-primary shadow-md mr-2">Daftarkan Akun</a>
        </div>
    </div>
    
    <div class="intro-y box mt-3">
        <div class="p-5" id="basic-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <table class="table table-striped mt-3">
                         <thead>
                             <tr>
                                 <th class="whitespace-nowrap">Nama</th>
                                 <th class="whitespace-nowrap">Email</th>
                                 <th class="whitespace-nowrap">Role</th>
                                 <th class="whitespace-nowrap">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr ng-repeat="user in users">
                                 <td>@{{ user.name }}</td>
                                 <td>@{{ user.email }}</td>
                                 <td>@{{ user.is_admin === 1 ? 'Admin' : 'User' }}</td>
                                 <td>
                                    <a href="/admin/account/pass/@{{ user.id }}" class="btn btn-sm btn-primary text-white"><i class="bi bi-lock"></i></a>
                                    <a href="/admin/account/edit/@{{ user.id }}" class="btn btn-sm btn-success text-white"><i class="bi bi-pencil-fill"></i></a>
                                    <button ng-click="deleteAccount(user.id)" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                 </td>
                             </tr>
                             <tr ng-if="users.length === 0 && !loading">
                                 <td colspan="4" class="text-center py-4">Belum ada akun terdaftar.</td>
                             </tr>
                             <tr ng-if="loading">
                                 <td colspan="4" class="text-center py-4">Loading data...</td>
                             </tr>
                         </tbody>
                      </table>
                 </div>
             </div> 
        </div> 
    </div> 
</div>
@endsection
