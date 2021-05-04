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
 
     
<h2 style="text-align: center;">Products</h2>

<div class="row"  style="padding: 2rem;">
   
    
    @forelse ($products as $value)
  
    @foreach ($cities as $city)
    @if ($city['id']==  $value['city_id'])
   
    <div  class="col-lg-4">
    <div class="card"   style="box-shadow: rgba(226, 28, 28, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;width: 18rem;">
        <img  class="card-img-top" style="padding:1rem;width:18rem;height:15rem" src="/images/{{$value['image']}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$value['title']}}</h5>
          <h5 class="card-title">{{$value['price']}} JD</h5>
          <td> {{$city['city_name']}}</td>
            @endif
        @endforeach
         
          <p class="card-text"><span id="dots"></span><span id="more">{{$value['desc']}}</span></p>
          <a onclick="myFunction()" id="myBtn">read more</a>
          
        <div class="row" style="position: relative;top:10px">
          <td><a href='deleteProduct/{{$value['id']}}' class='btn btn-danger' style="height: 3.2em;">Delete</a></td>
          <form action="/toggole-approve" method="POST">
            @csrf
            <input type="hidden" name="commentId" value="{{$value['id']}}">
            <input class="btn btn-success" style="margine-left:10px" type="submit" value="Done">
            <input <?php if($value->approve==1){echo"checked";}?>  type="checkbox" name="approve">
         </form>
        </div>
        </div>
  
{{-- <div>{!! $package->package_validity !!}</div> --}}

<div class="card-body" style="display: flex; flex-direction: row; margin-top: 1rem">
</div>
</div>

</div>
@empty
<h4>No Prduct</h4>  
@endforelse

<!--table End -->

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");
    
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
      }
    }
    </script>
