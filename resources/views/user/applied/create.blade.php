@extends('layouts.app')

@section('content')
<div class="content" ng-controller="AppliedController">
    <div class="intro-y col-span-12 lg:col-span-6 mt-1">
        <!-- BEGIN: Vertical Form -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-3 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Form Lamaran Pekerjaan
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <div class="preview">
                    <form ng-submit="createApplication()">
                    <div class="">
                        <label for="company" class="form-label">Nama Perusahaan</label>
                        <input id="company" type="text" class="form-control" ng-model="app.company">
                        <p class="text-danger" ng-if="errors.company">@{{ errors.company[0] }}</p>
                    </div>
                    <div class="mt-3">
                        <label for="role" class="form-label">Role Pekerjaan</label>
                        <input id="role" type="text" class="form-control" ng-model="app.role">
                        <p class="text-danger" ng-if="errors.role">@{{ errors.role[0] }}</p>
                    </div>
                    <div class="mt-3">
                        <label for="platform" class="form-label">Platform</label>
                        <select class="form-control" ng-model="app.platform">
                            <option value="">Pilih</option>
                            <option>Linkedin</option>
                            <option>Glints</option>
                            <option>Job Street</option>
                            <option>Karir</option>
                            <option>Pintarnya</option>
                        </select>
                        <p class="text-danger" ng-if="errors.platform">@{{ errors.platform[0] }}</p>
                    </div>
                    <div class="mt-3">
                        <label for="apply_at" class="form-label">Tanggal Lamaran</label>
                        <input id="apply_at" type="date" class="form-control" ng-model="app.apply_at">
                        <p class="text-danger" ng-if="errors.apply_at">@{{ errors.apply_at[0] }}</p>
                    </div>
                    <div class="mt-3">
                        <label for="status" class="form-label">Status Lamaran</label>
                        <select class="form-control" ng-model="app.status">
                            <option value="">Pilih</option>
                            <option>Send CV</option>
                            <option>Viewed</option>
                            <option>Interview HRD</option>
                            <option>Interview User</option>
                            <option>Success</option>
                            <option>Failed</option>
                        </select>
                        <p class="text-danger" ng-if="errors.status">@{{ errors.status[0] }}</p>
                    </div>
                    <div class="mt-3">
                        <label for="link" class="form-label">Link Eksternal</label>
                        <input id="link" type="text" class="form-control" ng-model="app.link">
                        <p class="text-danger" ng-if="errors.link">@{{ errors.link[0] }}</p>
                    </div>
                    <div class="mt-3">
                        <label for="description" class="form-label">Deskripsi</label><br>
                        <textarea class="form-control" ng-model="app.description" rows="10"></textarea>
                        <p class="text-danger" ng-if="errors.description">@{{ errors.description[0] }}</p>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" ng-disabled="loading">
                        <span ng-if="!loading">Submit</span>
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
