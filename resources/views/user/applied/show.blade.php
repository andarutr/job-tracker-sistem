@extends('layouts.app')

@section('content')
<div class="content">
    <p class="mt-4">Data Mutakhir : {{ \Carbon\Carbon::parse($application->updated_at)->format('d F Y, H:i') }}</p>
    <a href="/user/applied" class="btn btn-sm btn-success mt-1 text-white">kembali</a>
    <div class="intro-y box mt-3">
        <div class="p-5" id="basic-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <table class="table table-striped mt-3">
                         <thead>
                             <tr>
                                 <th>Perusahaan</th>
                                 <td>{{ $application->company }}</td>
                             </tr>
                             <tr>
                                 <th>Role</th>
                                 <td>{{ $application->role }}</td>
                             </tr>
                             <tr>
                                 <th>Status</th>
                                 <td>{{ $application->status }}</td>
                             </tr>
                             <tr>
                                 <th>AppliedAt</th>
                                 <td>{{ \Carbon\Carbon::parse($application->apply_at)->format('d F Y') }}</td>
                             </tr>
                             <tr>
                                 <th>Platform</th>
                                 <td>{{ $application->platform }}</td>
                             </tr>
                             <tr>
                                 <th>Link</th>
                                 <td>{{ $application->link }}</td>
                             </tr>
                             <tr>
                                 <th>Deskripsi Pekerjaan</th>
                                 <td>
                                     <div>
                                         {!! $application->description !!}
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
@endsection
