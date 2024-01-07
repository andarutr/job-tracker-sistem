@extends('layouts.app')

@section('title', 'Change Password')

@section('content')
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ $menu }}
        </h2>
    </div>
    @if(session('msg'))
    <div class="alert alert-{{ session('color') }} alert-dismissible show flex items-center mb-2 mt-3" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> {{ session('msg') }} <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button></div>
    @endif
    <div class="intro-y col-span-12 lg:col-span-6 mt-4">
        <!-- BEGIN: Vertical Form -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Ganti Password
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <div class="preview">
                    <form action="/{{ Request::segment(1) }}/settings/change-password" method="POST">@csrf
                    <div class="mt-3">
                        <label for="old_password" class="form-label">Password Lama</label>
                        <input id="old_password" type="password" class="form-control" name="old_password">
                        @error('old_password')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="new_password" class="form-label">Password Baru</label>
                        <input id="new_password" type="password" class="form-control" name="new_password">
                        @error('new_password')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Vertical Form -->
    </div>
</div>
@endsection
