@extends('admin.layouts.app')

@section('title','Profile User')

@section('content')
 @section('title','Profile User')
    <div>
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profile User</h6>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 pl-5">
                <img src="https://images.unsplash.com/source-404?fit=crop&fm=jpg&h=800&q=60&w=1200" class="rounded-circle " style="width:200px;height:200px;">
              </div>
              <div class="col-md-6">
                <div class="card-header">
                  <span>Nama  </span><span class="ml-3">{{ $user->name }}</span>
                </div>
                <div class="card-header my-4">
                  <span>Email  </span><span class="ml-3">{{ $user->email }}</span>
                </div>
                <div class="card-header">
                  <span>Role  </span><span class="ml-3">{{ $user->role }}</span>
                </div>
                <div class="my-5">
                  <a href="" class="btn btn-sm btn-primary mr-4">Kembali</a> <a href="" class="btn btn-sm btn-primary">Edit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
