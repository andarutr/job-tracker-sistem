@extends('layouts.app')

@section('title', 'Update Account')

@section('content')
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ $menu }}
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
                    <form action="/admin/account/edit/{{ $user->id }}" method="POST">@csrf
                    <div class="mt-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}">
                        @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}">
                        @error('email')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="is_admin" class="form-label">Role</label>
                        <select class="form-control" name="is_admin">
                            <option value="{{ $user->is_admin }}">{{ $user->is_admin === 1 ? 'Admin' : 'User' }}</option>
                            <option value="1">Admin</option>
                            <option value="0">User</option>
                        </select>
                        @error('is_admin')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-5">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Vertical Form -->
    </div>
</div>
@endsection
