@extends('admin.layouts.app')

@section('title','Category')

@section('content')
 @section('title','Category')
    <div>
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Category</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th width="200">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $category->name }}</td>
                      <td>
                        <a href="{{ route('category.edit',$category['id'])}}" class="btn btn-warning {{ $category->name =='Uncategorized' ? 'disabled' :'' }} " >Edit</a>
                        <form class="d-inline" method="POST" action="{{ route('category.destroy',$category->id) }}">
                          @csrf
                          @method('DELETE')
                            <button class="btn btn-danger" {{ $category->name =='Uncategorized' ? 'disabled':'' }} >Delete</button>
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
