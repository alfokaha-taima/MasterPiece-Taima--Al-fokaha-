@extends('dashboard.layout')
@section('content')

  

<style>
    #more {display: none;}
    </style>
<div class="col-lg-12">
    <div class="card">
        @csrf
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
        @endif
 
     
<h2 style="text-align: center;">Users</h2>

<div class="row"  style="padding: 2rem;">
   
    @if($user->isNotEmpty())

    @foreach ($user as $value)
    <div  class="col-lg-4">
    <div class="card"   style="box-shadow: rgba(226, 28, 28, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;width: 18rem;">
        <img  class="card-img-top" style="padding:1rem;width:18rem;height:15rem" src="/images/{{$value['image']}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$value['name']}}</h5>
          <h5 class="card-title">{{$value['email']}}</h5>
          
          
        <div class="row">
          <td><a href='deleteProduct/{{$value['id']}}' class='btn btn-danger'>Delete</a></td>
        
        </div>
        </div>
  
{{-- <div>{!! $package->package_validity !!}</div> --}}

<div class="card-body" style="display: flex; flex-direction: row; margin-top: 1rem">
</div>
</div>
</div>

@endforeach
@else 
<div>
    <h3 class="text-center" style="margin: 30px">Not Found</h3>
</div>
@endif
<!--table End -->

@endsection

