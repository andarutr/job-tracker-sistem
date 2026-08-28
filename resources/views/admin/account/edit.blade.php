@extends('layouts.app')

@section('content')
<div class="content" ng-controller="AccountController" ng-init="initEdit({{ $user->id }}, '{{ $user->name }}', '{{ $user->email }}', {{ $user->is_admin }})">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Update Account
        </h2>
    </div>
    <div class="intro-y col-span-12 lg:col-span-6 mt-4">
        <!-- BEGIN: Vertical Form -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Update Account
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <div class="preview">
                    <form ng-submit="updateAccount()">
                    <div class="mt-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input id="name" type="text" class="form-control" ng-model="account.name">
                        <p class="text-danger" ng-if="errors.name">@{{ errors.name[0] }}</p>
                    </div>
                    <div class="mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="text" class="form-control" ng-model="account.email">
                        <p class="text-danger" ng-if="errors.email">@{{ errors.email[0] }}</p>
                    </div>
                    <div class="mt-3">
                        <label for="is_admin" class="form-label">Role</label>
                        <select class="form-control" ng-model="account.is_admin">
                            <option value="1">Admin</option>
                            <option value="0">User</option>
                        </select>
                        <p class="text-danger" ng-if="errors.is_admin">@{{ errors.is_admin[0] }}</p>
                    </div>
                    <button type="submit" class="btn btn-success mt-5" ng-disabled="loading">
                        <span ng-if="!loading">Update</span>
                        <span ng-if="loading">Loading...</span>
                    </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Vertical Form -->
    </div>
</div>
@endsection
