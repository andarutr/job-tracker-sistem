<?php

use function Livewire\Volt\{state, layout, title, with};

layout('layouts.app');

title('Detail Lamaran');

with(fn() => [
    'apply' => \DB::table('applications')
                ->where(['id' => Request::segment(4), 'user_id' => auth()->user()->id])
                ->first()
    ]);

$backTo = function(){
    return redirect('/user/applied');
}

?>

<div class="content">
    <p class="mt-4">Data Mutakhir : {{ \Carbon\Carbon::parse($apply->updated_at)->format('d F Y, H:i') }}</p>
    <button class="btn btn-sm btn-success mt-1 text-white" wire:click="backTo">kembali</button>
    <div class="intro-y box mt-3">
        <div class="p-5" id="basic-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <table class="table table-striped mt-3">
                         <thead>
                             <tr>
                                 <th>Perusahaan</th>
                                 <td>{{ $apply->company }}</td>
                             </tr>
                             <tr>
                                 <th>Role</th>
                                 <td>{{ $apply->role }}</td>
                             </tr>
                             <tr>
                                 <th>Status</th>
                                 <td>{{ $apply->status }}</td>
                             </tr>
                             <tr>
                                 <th>AppliedAt</th>
                                 <td>{{ \Carbon\Carbon::parse($apply->apply_at)->format('d F Y') }}</td>
                             </tr>
                             <tr>
                                 <th>Platform</th>
                                 <td>{{ $apply->platform }}</td>
                             </tr>
                             <tr>
                                 <th>Link</th>
                                 <td>{{ $apply->link }}</td>
                             </tr>
                             <tr>
                                 <th>Deskripsi Pekerjaan</th>
                                 <td>
                                    <div>
                                        {!! $apply->description !!}
                                    </div>
                                </td>
                             </tr>
                         </thead>
                     </table>
                 </div>
             </div> 
        </div> 
    </div> 
</div>
