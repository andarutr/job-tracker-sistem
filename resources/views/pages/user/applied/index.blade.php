@extends('layouts.app')

@section('title', 'Lamaran')

@section('content')
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ $menu }}
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="/user/applied/create" class="btn btn-primary shadow-md mr-2">Tambah Data</a>
        </div>
    </div>
    @if(session('msg'))
    <div class="alert alert-{{ session('color') }} alert-dismissible show flex items-center mb-2 mt-3" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> {{ session('msg') }} <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button></div>
    @endif
    <form action="/user/applied/pencarian" method="GET" class="mt-4">
        <input type="text" name="search" placeholder="Cari data...">
    </form>
    @if(isset($search))
    <p>Anda sedang mencari {{ $search }}</p>
    @endif
    <div class="intro-y box mt-3">
        <div class="p-5" id="basic-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <table class="table table-striped mt-3">
                         <thead>
                             <tr>
                                 <th class="whitespace-nowrap">Perusahaan</th>
                                 <th class="whitespace-nowrap">Role</th>
                                 <th class="whitespace-nowrap">Platform</th>
                                 <th class="whitespace-nowrap">Status</th>
                                 <th class="whitespace-nowrap">AppliedAt</th>
                                 <th class="whitespace-nowrap">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                            @foreach($applications as $ap)
                             <tr>
                                 <td>{{ $ap->company }}</td>
                                 <td>{{ $ap->role }}</td>
                                 <td>{{ $ap->platform }}</td>
                                 <td>
                                    @if($ap->status === 'Success')
                                    <span class="badge badge-success">{{ $ap->status }}</span>
                                    @elseif($ap->status === 'Failed')
                                    <span class="badge badge-danger">{{ $ap->status }}</span>
                                    @else
                                    <span class="badge badge-primary">{{ $ap->status }}</span>
                                    @endif
                                 </td>
                                 <td>{{ \Carbon\Carbon::parse($ap->apply_at)->format('d F Y') }}</td>
                                 <td>
                                    <a href="/user/applied/show/{{ $ap->id }}" class="btn btn-sm btn-primary"><i data-lucide="eye"></i></a>
                                    <a href="/user/applied/edit/{{ $ap->id }}" class="btn btn-sm btn-success text-white"><i data-lucide="edit"></i></a>
                                    <a href="/user/applied/destroy/{{ $ap->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i data-lucide="trash"></i></a>
                                 </td>
                             </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
             </div> 
        </div> 
    </div> 
     {{ $applications->links() }}
</div>
@endsection