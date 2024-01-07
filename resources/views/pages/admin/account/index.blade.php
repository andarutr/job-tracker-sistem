@extends('layouts.app')

@section('title', 'Account')

@section('content')
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ $menu }}
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="/admin/account/create" class="btn btn-primary shadow-md mr-2">Daftarkan Akun</a>
        </div>
    </div>
    @if(session('msg'))
    <div class="alert alert-{{ session('color') }} alert-dismissible show flex items-center mb-2 mt-3" role="alert"> <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> {{ session('msg') }} <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button></div>
    @endif
    <div class="intro-y box mt-3">
        <div class="p-5" id="basic-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <table class="table table-striped mt-3">
                         <thead>
                             <tr>
                                 <th class="whitespace-nowrap">Nama</th>
                                 <th class="whitespace-nowrap">Email</th>
                                 <th class="whitespace-nowrap">Role</th>
                                 <th class="whitespace-nowrap">Dibuat Pada</th>
                                 <th class="whitespace-nowrap">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                            @foreach($users as $user)
                            @if($user->id !== Auth::user()->id)
                             <tr>
                                 <td>{{ $user->name }}</td>
                                 <td>{{ $user->email }}</td>
                                 <td>{{ $user->is_admin === 1 ? 'Admin' : 'User' }}</td>
                                 <td>{{ \Carbon\Carbon::parse($user->updated_at)->format('d F Y') }}</td>
                                 <td>
                                    <a href="/admin/account/pass/{{ $user->id }}" class="btn btn-sm btn-primary text-white"><i data-lucide="lock"></i></a>
                                    <a href="/admin/account/edit/{{ $user->id }}" class="btn btn-sm btn-success text-white"><i data-lucide="edit"></i></a>
                                    <a href="/admin/account/destroy/{{ $user->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i data-lucide="trash"></i></a>
                                 </td>
                             </tr>
                             @endif
                             @endforeach
                         </tbody>
                     </table>
                 </div>
             </div> 
        </div> 
    </div> 
     {{ $users->links() }}
</div>
@endsection