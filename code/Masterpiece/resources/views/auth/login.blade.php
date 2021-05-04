@extends('public_side.layout')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('js/app.js') }}" defer></script>


<div class="login-page">
    
    <div class="container">
       
     
        <h3 class="w3ls-title w3ls-title1">Login to your account</h3> 
        
 
        <div class="login-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <span>{{$error}}</span>
                <br>
                @endforeach
            </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                 
                <input type="text" class="user  @error('email') is-invalid @enderror"  name="email" placeholder="Enter your email"  value="{{ old('email') }}" required autocomplete="email" autofocus>
             
                <input type="password"  class="lock  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Password" >
              
                <input type="submit" value="Login">
               

                <div class="form-check">

                   
                    <h6> Not a Member? <a href="{{ route('register') }}">Sign Up Now »</a> </h6> 
                </div>
              
            </form>
        </div>  
       
    </div>
</div>
<!-- //login-page --> 
@endsection
