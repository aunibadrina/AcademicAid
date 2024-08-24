@extends('admin.layouts.admin-dash-layout')
@section('title' , 'User Lists')
@section('content')

<br><br>
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title" style="margin-top: 4px;">User List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap" style="width: 100%;">
                <!-- table content -->
                <thead>
                  <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Phone</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($User as $user)
                    <tr>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->role }}</td>
                      <td>{{ $user->phone }}</td>
                      <td>
                            <a href="{{ route('admin.editUser', ['user' => $user]) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form method="post" action="{{ route('destroyUser', ['user' => $user]) }}" style="display: inline;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                            </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
</div>
<!-- /.content -->
@endsection