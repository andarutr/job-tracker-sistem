<?php

use function Livewire\Volt\{state, layout, title, mount, rules};

layout('layouts.app');

title('Update Lamaran Kerja');

state(['apply_id','company','role','platform','description','apply_at','status','link']);

rules([
    'company' => 'required',
    'role' => 'required',
    'platform' => 'required',
    'description' => 'required',
    'apply_at' => 'required',
    'status' => 'required',
    'link' => 'required'
]);

mount(function(){
    $this->apply_id = \DB::table('applications')->where('id', Request::segment(4))->first();
    $this->company = $this->apply_id->company;
    $this->role = $this->apply_id->role;
    $this->platform = $this->apply_id->platform;
    $this->description = strip_tags($this->apply_id->description);
    $this->apply_at = $this->apply_id->apply_at;
    $this->status = $this->apply_id->status;
    $this->link = $this->apply_id->link;
});

$update = function(){
    $this->validate();
    
    \DB::table('applications')->where('id', $this->apply_id->id)
        ->update([
            'company' => $this->company,
            'role' => $this->role,
            'description' => $this->description,
            'platform' => $this->platform,
            'apply_at' => $this->apply_at,
            'status' => $this->status,
            'link' => $this->link,
            'updated_at' => now()
        ]);

    toastr()->success('Berhasil memperbarui lamaran kerja!');
    return redirect('/user/applied');
}

?>

<div class="content">
    <div class="intro-y col-span-12 lg:col-span-6 mt-1">
        <!-- BEGIN: Vertical Form -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-3 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Form Lamaran
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <div class="preview">
                    <form wire:submit="update">
                    <div class="">
                        <label for="company" class="form-label">Nama Perusahaan</label>
                        <input id="company" type="text" class="form-control" wire:model="company">
                        @error('company')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="role" class="form-label">Role Pekerjaan</label>
                        <input id="role" type="text" class="form-control" wire:model="role">
                        @error('role')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="platform" class="form-label">Platform</label>
                        <select class="form-control" wire:model="platform">
                            <option value="">Pilih</option>
                            <option>Linkedin</option>
                            <option>Glints</option>
                            <option>Job Street</option>
                            <option>Karir</option>
                            <option>Pintarnya</option>
                        </select>
                        @error('platform')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="apply_at" class="form-label">Tanggal Lamaran</label>
                        <input id="apply_at" type="date" class="form-control" wire:model="apply_at">
                        @error('apply_at')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="status" class="form-label">Status Lamaran</label>
                        <select class="form-control" wire:model="status">
                            <option value="">Pilih</option>
                            <option>Send CV</option>
                            <option>Viewed</option>
                            <option>Interview HRD</option>
                            <option>Interview User</option>
                            <option>Success</option>
                            <option>Failed</option>
                        </select>
                        @error('status')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="link" class="form-label">Link Eksternal</label>
                        <input id="link" type="text" class="form-control" wire:model="link">
                        @error('link')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="mt-3">
                        <label for="description" class="form-label">Deskripsi</label><br>
                            <textarea class="form-control" wire:model="description" rows="10">
                            </textarea>
                        @error('description')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Vertical Form -->
    </div>
</div>
