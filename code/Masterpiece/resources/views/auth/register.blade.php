@extends('public_side.layout')



@section('content')

<div class="login-page">
    <div class="container"> 
        <h3 class="w3ls-title w3ls-title1">Create your account</h3>  
        <div class="login-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <span>{{$error}}</span>
                <br>
                @endforeach
            </div>
            @endif
            <form method="POST" action="{{ route('register') }}"  enctype="multipart/form-data">
                @csrf
                <input type="text" class="user @error('name') is-invalid @enderror"  placeholder="Enter your Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus name="name">
              
            
                <input type="text" name="email" placeholder="Enter your Email" class="lock  @error('password') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
               
               
         
            <input type="text" name="mobile"  placeholder="Enter your Number" class="lock   @error('mobile') is-invalid  @enderror"  value="{{ old('mobile') }}" required autocomplete="mobile">
         
            <input type="password" name="password" placeholder="Enter Password" class="lock  @error('password') is-invalid @enderror"  value="{{ old('password') }}" required autocomplete="password">

         
             <input id="password-confirm" type="password" placeholder="confirm your Password" class="lock " name="password_confirmation" required autocomplete="new-password">
             {{-- <input type="file"  name="image" placeholder="upload your image" class="lock"> --}}

                <input type="submit" value="Sign Up ">
                <div class="forgot-grid">
                    
                    <h6>Already have an account? <a href="{{ route('login') }}">Login Now</a> </h6>  
                </div>
            </form>
        </div>  
    </div>
</div>
@endsection
