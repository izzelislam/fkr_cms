@extends('admin.layouts.app')
@section('title','article')
@section('content')
	@section('title','article')
		<div>
		    <div class="card shadow mb-4">
		      <div class="card-header py-3">
		        <h6 class="m-0 font-weight-bold text-primary">Data Article</h6>
		      </div>
		      <div class="card-body">
		        <div class="table-responsive">
		          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		            <thead>
		              <tr>
		                <th>No</th>
		                <th>Title</th>
		                <th>Category</th>
		                <th>Author</th>
		                <th>Created</th>
		                <th width="200">Action</th>
		              </tr>
		            </thead>
		            <tbody>
		              @foreach ($articles as $category)
		                <tr>
		                  <td>{{ $loop->iteration }}</td>
		                  <td>{{ $category->title }}</td>
		                  <td>{{ $category->category_id }}</td>
		                  <td>{{ $category->user_id }}</td>
		                  <td>{{ $category->created_at }}</td>
		                  <td>
		                    <a href="{{ route('category.edit',$category['id'])}}" class="btn btn-warning">Edit</a>
		                    <form class="d-inline" method="POST" action="{{ route('article.destroy',$category->id) }}">
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