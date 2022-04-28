@extends('newLayout.layouts.newLayout')

@section('title')
     Profile 
@endsection
@section('content')
{{-- {{dd(Auth::user())}} --}}
   <div class="row">
     <div class="col-md-8">
       <div class="card">
         <div class="card-header pb-0">
           <div class="d-flex align-items-center">
             <p class="mb-0">Edit Profile</p>
                <button class="btn btn-primary btn-sm ms-auto" style="background-color:#FF9800;" >Update</button>
           </div>
         </div>
         <div class="card-body">
           <p class="text-uppercase text-sm">User Information</p>
           <div class="row">
             <div class="col-md-6">
               <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Username</label>
                 <input class="form-control" type="text" value="{{Auth::user()->name}}">
               </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Email address</label>
                 <input class="form-control" type="email" value="{{Auth::user()->email}}">
               </div>
             </div>
             {{-- <div class="col-md-6">
               <div class="form-group">
                 <label for="example-text-input" class="form-control-label">First name</label>
                 <input class="form-control" type="text" value="Jesse">
               </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Last name</label>
                 <input class="form-control" type="text" value="Lucky">
               </div>
             </div> --}}
           </div>
           <hr class="horizontal dark">
           <p class="text-uppercase text-sm">Contact Information</p>
           <div class="row">
             <div class="col-md-12">
               <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Address</label>
                 <input class="form-control" type="text" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group">
                 <label for="example-text-input" class="form-control-label">City</label>
                 <input class="form-control" type="text" value="New York">
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Country</label>
                 <input class="form-control" type="text" value="United States">
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Postal code</label>
                 <input class="form-control" type="text" value="437300">
               </div>
             </div>
           </div>
           <hr class="horizontal dark">
           <p class="text-uppercase text-sm">About me</p>
           <div class="row">
             <div class="col-md-12">
               <div class="form-group">
                 <label for="example-text-input" class="form-control-label">About me</label>
                 <input class="form-control" type="text" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="col-md-4">
       <div class="card card-profile">
         <img src="{{asset('uploads/bg-profile.jpg')}}" alt="Image placeholder" class="card-img-top">
         <div class="row justify-content-center">
           <div class="col-4 col-lg-4 order-lg-2">
             <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
               <a href="javascript:;">
                 <img src="{{asset('uploads/1646723234.jpg')}}" class="rounded-circle img-fluid border border-2 border-white">
               </a>
             </div>
           </div>
         </div>
       
         <div class="card-body pt-0">
           
           <div class="text-center mt-4">
             <h5>
               {{Auth::user()->name}}<span class="font-weight-light"></span>
             </h5>
             <div class="h6 font-weight-300">
               <i class="ni location_pin mr-2"></i>Bucharest, Romania
             </div>
             <div class="h6 mt-4">
               <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
             </div>
             <div>
               <i class="ni education_hat mr-2"></i>{{Auth::user()->role}}
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
@endsection

