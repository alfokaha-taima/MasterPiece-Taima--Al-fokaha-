@extends('public_side.layout')

@section('content')
<div class="login-page">
    <div class="container"> 
        <h3 class="w3ls-title w3ls-title1">Edit Your Account</h3>  
        <div class="login-body">
            <form method="POST" action="/edit/user" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <input type="text" class="user @error('name') is-invalid @enderror"  placeholder="Enter your Name" name="name" value="{{$user['name']}}" required autocomplete="name" autofocus name="name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <input type="text" name="email" placeholder="Enter your Email" class="lock  @error('password') is-invalid @enderror" name="email" value="{{$user['email']}}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="text" name="mobile"  placeholder="Enter your Number" class="lock   @error('mobile') is-invalid  @enderror"  value="{{$user['mobile']}}" required autocomplete="mobile">
            @error('mobile')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="password" name="password" placeholder="Enter Password" class="lock  @error('password') is-invalid @enderror"  required autocomplete="password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
             <input type="file"  name="image" placeholder="upload your image" class="lock">

                <input type="submit" value="Update Profile ">
                <div class="forgot-grid">
                    
                    <h6>Return back to your profle?<a href="{{ '/Profile' }}">Profile</a> </h6>  
                </div>
            </form>
        </div>  
    </div>
</div>

@endsection
