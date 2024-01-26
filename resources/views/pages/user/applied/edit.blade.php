@extends('layouts.app')

@section('title', 'Update Apply')

@push('styles')
<script src="https://cdn.tiny.cloud/1/looajco0995ko4gkdnbd5b9hfj9wy3502lybiyf4gp594lpr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
  tinymce.init({
    selector: '#myTextarea',
    height: 400
  });
  </script>
@endpush

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
                    Form Lamaran
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <div class="preview">
                    <form action="/user/applied/update/{{ $apply->id }}" method="POST">@csrf @method('put')
                    <div class="mt-3">
                        <label for="company" class="form-label">Nama Perusahaan</label>
                        <input id="company" type="text" class="form-control" name="company" value="{{ $apply->company }}">
                        @error('company')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="role" class="form-label">Role Pekerjaan</label>
                        <input id="role" type="text" class="form-control" name="role" value="{{ $apply->role }}">
                        @error('role')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="platform" class="form-label">Platform</label>
                        <select class="form-control" name="platform">
                            <option value="{{ $apply->platform }}">{{ $apply->platform }}</option>
                            <option value="Linkedin" @if(old('platform') === 'Linkedin') selected="selected" @endif>Linkedin</option>
                            <option value="Glints" @if(old('platform') === 'Glints') selected="selected" @endif>Glints</option>
                            <option value="Job Street" @if(old('platform') === 'Job Street') selected="selected" @endif>Job Street</option>
                            <option value="Indeed" @if(old('platform') === 'Indeed') selected="selected" @endif>Indeed</option>
                            <option value="Pintarnya" @if(old('platform') === 'Pintarnya') selected="selected" @endif>Pintarnya</option>
                            <option value="E-Krut" @if(old('platform') === 'E-Krut') selected="selected" @endif>E-Krut</option>
                        </select>
                        @error('platform')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="apply_at" class="form-label">Tanggal Lamaran</label>
                        <input id="apply_at" type="date" class="form-control" name="apply_at" value="{{ \Carbon\Carbon::parse($apply->apply_at)->format('Y-m-d') }}">
                        @error('apply_at')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="status" class="form-label">Status Lamaran</label>
                        <select class="form-control" name="status">
                            <option value="{{ $apply->status }}">{{ $apply->status }}</option>
                            <option value="Send CV" @if(old('status') === 'Send CV') selected="selected" @endif>Send CV</option>
                            <option value="Viewed" @if(old('status') === 'Viewed') selected="selected" @endif>Viewed</option>
                            <option value="Interview HRD" @if(old('status') === 'Interview HRD') selected="selected" @endif>Interview HRD</option>
                            <option value="Interview User" @if(old('status') === 'Interview User') selected="selected" @endif>Interview User</option>
                            <option value="Success" @if(old('status') === 'Success') selected="selected" @endif>Success</option>
                            <option value="Failed" @if(old('status') === 'Failed') selected="selected" @endif>Failed</option>
                        </select>
                        @error('status')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="link" class="form-label">Link Eksternal</label>
                        <input id="link" type="text" class="form-control" name="link" value="{{ $apply->link }}">
                        @error('link')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea id="myTextarea" name="description">{{ $apply->description }}</textarea>
                        @error('description')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-5 text-white">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Vertical Form -->
    </div>
</div>
@endsection
