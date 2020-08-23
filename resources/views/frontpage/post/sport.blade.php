@extends('frontpage.layouts.app')
@section('title','News.ui')   

@section('head-script')  
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection

@section('content')
    @include('frontpage.layouts.navbar')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-8">
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <h4>Related Post</h4>
        <div class="row">
            <div class="col-md-4">
                
            </div>
        </div>
    </div>
    @include('frontpage.layouts.footer')
@endsection