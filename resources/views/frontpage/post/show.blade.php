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
                <div>
                    <div class="card p-3">
                        <img src="/img/{{ $post->image_file }}" style="width: 99.5%;">
               
                          <h2 class="font-weight-bold my-4">{{ $post->title }}</h2>
                          <div class="mb-4">category : <span class="badge badge-danger p-2">{{ $post->Category->name }}</span></div>
                          <div class="my-3 " style="line-height:  1.8; text-align: justify;">
                              {!! $post->content !!}
                          </div>
                          <div class="my-4">
                              <span class="mr-4"><i class="fas fa-comment-alt"></i><small class="ml-2">{{ $comments->count() }}</small></span> 
                              <span class="mr-4"><i class="fas fa-eye"></i><small class="ml-2">{{ $post->views }}</small></span> 
                              <span class="mr-4"><i class="fas fa-user-alt"></i><small class="ml-2">{{ $post->User->name }}</small></span> 
                              <span class="mr-4"><i class="fas fa-calendar"></i><small class="ml-2">{{ $post->created_at->format('d-M-Y') }}</small></span>
                              <span class="mr-4"><a href="#" class="text-decoration-none text-dark"><i class="fas fa-share"></i><small class="ml-2">share</small></a></span>
                          </div>

                    </div>
                </div>
                
                <div class="card px-3 pt-3 my-5">
                     <div class="mb-5">
                         <div><h5 class="font-weight-bold"><i class="fas fa-tag mr-3"></i>Tags</h5><hr></div>
                         <div>
                             @foreach ($post->Tag as $ta)
                                 <span class="badge badge-dark p-3 mx-1">{{ $ta->name }}</span>
                             @endforeach
                         </div>
                     </div>
                     <hr class="mt-5">
                    <h5 class="font-weight-bold"><i class="fas fa-comment-alt mr-3"></i>komentar</h5>
                     <div class="row">
                         <div class="col-md-12 card-header p-3">
                             <form method="POS" action="{{ route('comment.store',$post->id) }}">
                                 @csrf
                                   <div class="form-group">
                                     <label for="inputAddress">Name</label>
                                     <input type="text" name="name" class="form-control" id="inputAddress" placeholder="Main St">
                                   </div>
                                   <div class="form-group">
                                       <label for="exampleFormControlTextarea1">Komentar</label>
                                       <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                   </div>
                                   <button type="submit" class="btn btn-dark">Kirim</button>
                             </form>
                             <hr class="my-5">
                             <div>
                                 @foreach ($comments as $comment)
                                     <div class="p-2">
                                         <span class="font-weight-bold mr-2">{{ $comment->name }}</span>
                                         <small>{{ $comment->created_at->format('d-M-Y') }}</small>
                                     </div>
                                     <div class="card p-2">{{ $comment->body }}</div> 
                                     <a href=""><small class="p-2">hapus komentar</small></a>
                                     <hr>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                </div>
            </div>
            <div class="col-md-4">
               <div class="card p-3">
                   <h3 class="text-center font-weight-bold">Latest<span class="text-danger">Post</span></h3>
                   <hr>
                   @foreach ($latest as $late)
                       <div class="row mb-3">
                           <div class="col-md-5">
                               <img src="/img/{{ $late->image_file }}" class="w-100">
                           </div>
                           <div class="col-md-7">
                               <a href="/readmore/{{ $late->id }}/{{ $late->slug }}" class="text-decoration-none"><span class="font-weight-bold"><small>{{ $late->title }}</small></span></a>
                               <small class="d-block mb-2">{{ $late->created_at->format('d-M-Y') }}</small>
                               <span class=" badge badge-danger p-1">{{ $late->Category->name }}</span>
                           </div>
                       </div>
                   @endforeach
               </div>
                <div class="my-5">
                    <img src="https://www.bagas31.info/wp-content/uploads/2020/06/netfree-gratis-min-1.png">
                </div>
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