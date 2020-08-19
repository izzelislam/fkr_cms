@extends('admin.layouts.app')

@section('title','User')

@section('content')
 @section('title','User')
    <div>
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>email</th>
                    <th>role</th>
                    <th width="200">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $category)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $category->name }}</td>
                      <td>{{ $category->email }}</td>
                      <td>{{ $category->role }}</td>
                      <td>
                        <a href="{{ route('user.edit',$category->id)}}" class="btn btn-warning">Edit</a>
                        <form class="d-inline" method="POST" action="{{ route('user.destroy',$category->id) }}">
                          @csrf
                          @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
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
@endsection
