@extends('layouts.app')

@section('content')
<div class="content" ng-controller="AccountController" ng-init="initPassword({{ $user->id }}, '{{ $user->name }}', '{{ $user->email }}')">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Change Password Account
        </h2>
    </div>
    <div class="intro-y col-span-12 lg:col-span-6 mt-4">
        <!-- BEGIN: Vertical Form -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    @{{ account.name }} | @{{ account.email }}
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <div class="preview">
                    <form ng-submit="updateAccountPassword()">
                    <div class="mt-3">
                        <label for="new_password" class="form-label">Password Baru</label>
                        <input id="new_password" type="password" class="form-control" ng-model="account.new_password">
                        <p class="text-danger" ng-if="errors.new_password">@{{ errors.new_password[0] }}</p>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5" ng-disabled="loading">
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
