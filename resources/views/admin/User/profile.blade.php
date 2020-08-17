@extends('admin.layouts.app')

@section('title','User')

@section('content')
 @section('title','User')
    <div>
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profil User</h6>
          </div>
          <div class="card-body container">
            <div class="row">
              <div class="col-md-6">
                
              </div>
              <div class="col-md-6">
               <div>
                 nama :{{ $user->name }}
               </div>

                <div>
                  email :{{ $user->email }}
                </div>
                <div>
                  role :{{ $user->role }}
                </div>

                <div class="my-5">
                  <a href="#" class="btn btn-sm btn-warning">Edit</a>
                </div>

              </div>
              
            </div>
          </div>
        </div>
    </div>
@endsection
