@extends('admin.layouts.admin-dash-layout')

@section('content')
<br></br>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="margin-top: 4px;">{{ __('Tutor Applications') }}  </h3>               
                    </div>

                    <div class="card-body table-responsive p-0">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Academic Verification</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tutorApplications as $tutor)
                                    <tr>
                                        <td>{{ $tutor->name }}</td>
                                        <td>{{ $tutor->email }}</td>
                                        <td>
                                            @if($tutor->resume_path)
                                                <embed src="{{ asset('storage/' . $tutor->resume_path) }}" type="application/pdf" width="200" height="200"/>
                                            @else
                                                No resume uploaded
                                            @endif
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('admin.approveTutor', $tutor->id) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Approve</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
