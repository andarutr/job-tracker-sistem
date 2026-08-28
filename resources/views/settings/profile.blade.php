@extends('layouts.app')

@section('content')
<div class="content" ng-controller="ProfileController" ng-init="init('{{ Auth::user()->name }}', '{{ Auth::user()->email }}')">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Profile
        </h2>
    </div>
    
    <div ng-if="message" class="alert alert-@{{ message.type }} alert-dismissible show flex items-center mb-2 mt-3" role="alert">
        <i class="bi bi-info-circle-fill mr-2"></i> @{{ message.text }}
    </div>

    <div class="intro-y col-span-12 lg:col-span-6 mt-4">
        <!-- BEGIN: Vertical Form -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    {{ Auth::user()->name }}
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <div class="preview">
                    <form ng-submit="updateProfile()">
                    <div class="mt-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input id="name" type="text" class="form-control" ng-model="user.name">
                        <p class="text-danger" ng-if="errors.name">@{{ errors.name[0] }}</p>
                    </div>
                    <div class="mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="text" class="form-control" ng-model="user.email">
                        <p class="text-danger" ng-if="errors.email">@{{ errors.email[0] }}</p>
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
