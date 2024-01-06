@extends('layouts.app')

@section('title', 'Detail Lamaran')

@section('content')
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ $menu }}
        </h2>
    </div>
    <p class="mt-4">Data Mutakhir : {{ \Carbon\Carbon::parse($apply->updated_at)->format('d F Y, H:i') }}</p>
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
                         <!-- <tbody>
                             <tr>
                                 <td>{{ $apply->company }}</td>
                                 <td>{{ $apply->role }}</td>
                                 <td>{{ $apply->platform }}</td>
                                 <td>
                                    @if($apply->status === 'Success')
                                    <span class="badge badge-success">{{ $apply->status }}</span>
                                    @elseif($apply->status === 'Failed')
                                    <span class="badge badge-danger">{{ $apply->status }}</span>
                                    @else
                                    <span class="badge badge-primary">{{ $apply->status }}</span>
                                    @endif
                                 </td>
                                 <td>{{ \Carbon\Carbon::parse($apply->apply_at)->format('d-m-y') }}</td>
                             </tr>
                         </tbody> -->
                     </table>
                 </div>
             </div> 
        </div> 
    </div> 
</div>
@endsection