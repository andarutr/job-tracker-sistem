@extends('layouts.app')

@section('title', 'Create Apply')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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
                    <form action="/user/applied/store" method="POST">@csrf
                    <div class="mt-3">
                        <label for="company" class="form-label">Nama Perusahaan</label>
                        <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}">
                        @error('company')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="role" class="form-label">Role Pekerjaan</label>
                        <input id="role" type="text" class="form-control" name="role" value="{{ old('role') }}">
                        @error('role')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="platform" class="form-label">Platform</label>
                        <select class="form-control" name="platform">
                            <option value="">Pilih</option>
                            <option value="Linkedin" @if(old('platform') === 'Linkedin') selected="selected" @endif>Linkedin</option>
                            <option value="Glints" @if(old('platform') === 'Glints') selected="selected" @endif>Glints</option>
                            <option value="Job Street" @if(old('platform') === 'Job Street') selected="selected" @endif>Job Street</option>
                            <option value="Karir" @if(old('platform') === 'Karir') selected="selected" @endif>Karir</option>
                            <option value="Pintarnya" @if(old('platform') === 'Pintarnya') selected="selected" @endif>Pintarnya</option>
                        </select>
                        @error('platform')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="apply_at" class="form-label">Tanggal Lamaran</label>
                        <input id="apply_at" type="date" class="form-control" name="apply_at" value="{{ old('apply_at') }}">
                        @error('apply_at')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="status" class="form-label">Status Lamaran</label>
                        <select class="form-control" name="status">
                            <option value="">Pilih</option>
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
                        <input id="link" type="text" class="form-control" name="link" value="{{ old('link') }}">
                        @error('link')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea id="summernote" name="description">{{ old('description') }}</textarea>
                        @error('description')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Vertical Form -->
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script> 
@endpush