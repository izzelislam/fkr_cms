@extends('admin.layouts.app')

@section('title','Dashboard')

@section('content')
 @section('title','Dashboard')
 <div class="row">
   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
     <div class="card border-left-primary shadow h-100 py-2">
       <div class="card-body">
         <div class="row no-gutters align-items-center">
           <div class="col mr-2">
             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">User</div>
             <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user->count() }}</div>
           </div>
           <div class="col-auto">
             <i class="fas fa-calendar fa-2x text-gray-300"></i>
           </div>
         </div>
       </div>
     </div>
   </div>

   <!-- Earnings (Annual) Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
     <div class="card border-left-success shadow h-100 py-2">
       <div class="card-body">
         <div class="row no-gutters align-items-center">
           <div class="col mr-2">
             <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Artikel</div>
             <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $article->count() }}</div>
           </div>
           <div class="col-auto">
             <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
           </div>
         </div>
       </div>
     </div>
   </div>

   <!-- Tasks Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
     <div class="card border-left-info shadow h-100 py-2">
       <div class="card-body">
         <div class="row no-gutters align-items-center">
           <div class="col mr-2">
             <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah category</div>
             <div class="row no-gutters align-items-center">
               <div class="col-auto">
                 <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $category->count() }}</div>
               </div>
               <div class="col">
                 <div class="progress progress-sm mr-2">
                   <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-auto">
             <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
           </div>
         </div>
       </div>
     </div>
   </div>

   <!-- Pending Requests Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
     <div class="card border-left-warning shadow h-100 py-2">
       <div class="card-body">
         <div class="row no-gutters align-items-center">
           <div class="col mr-2">
             <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Comment</div>
             <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $comment->count() }}</div>
           </div>
           <div class="col-auto">
             <i class="fas fa-comments fa-2x text-gray-300"></i>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection
