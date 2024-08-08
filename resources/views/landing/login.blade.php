@extends("layouts.homepage.app")

@section("title","Login")

@push("styles")

@endpush

@section("content")
<div class="untree_co-login-register">
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-lg-5">
       <div class="custom-box" data-aos="fade-up" data-aos-delay="0">
         <h2 class="heading" >Sign In</h2>
         <form action="#">
           <div class="form-field">
             <label for="email">Email</label>
             <input type="email" class="form-control" id="email">
           </div>
           <div class="form-field">
             <label for="password">Password</label>
             <input type="password" class="form-control" id="password">
           </div>
           <div class="form-field">
             <input type="submit" class="btn btn-primary btn-block" value="Sign in">
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>
 </div>
@endsection

@push("scripts")

@endpush