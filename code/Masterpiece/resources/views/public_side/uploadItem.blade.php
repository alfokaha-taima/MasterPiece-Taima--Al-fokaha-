@extends('public_side.layout')

@section('content')
<style>
    .select {
  width: 100%;
  min-width: 100%;
  max-width: 50ch;
  border: 1px solid rgb(169, 159, 159);
  
  padding: 0.25em 0.5em;
  font-size: 1.25rem;
  cursor: pointer;
  line-height: 1.1;
  background-color: #fff;
  background-image: linear-gradient(to top, #f9f9f9, #fff 33%);
  
}

    </style>
<div class="login-page"  >
    <div class="container"> 
        <h3 class="w3ls-title w3ls-title1">Upload Your Product</h3>         <div class="login-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <span>{{$error}}</span>
                <br>
                @endforeach
            </div>
            @endif
            <form action="/upload_Item" method="post" class="" enctype="multipart/form-data">
                <input type="hidden" value="{{Session::token()}}" name="_token">

                @csrf
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
               
                            
                      
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Product Name">
                          </div>
                          <div class="form-group">
                          <input type="text" id="price" class="form-control"  name="price" placeholder="price" >
                         </div>
             

                         <div class="form-group">
                    <select type="text" name="city_id" class="form-control" placeholder="City" class="form-control">
                        @foreach( $cities as $city)
                        <option value="{{$city['id']}}"> {{$city['city_name']}}</option>
                        @endforeach
                    </select>
                </div>
          
                <div class="form-group">
                        <textarea type="text" class="form-control" id="password" name="desc" placeholder="Descreption" class="form-control"></textarea>
                    </div>
  
                    <div class="form-group">

                        <select type="text" class="form-control" name="category_id" placeholder="Category" class="select">
                            @foreach( $categories as $cat)
                            <option value="{{$cat['id']}}"> {{$cat['name']}}</option>
                            @endforeach
                        </select>
                    </div>

                
                    <div class="form-group">
                        <input type="file" class="form-control" name="image" placeholder="upload your image" class="form-control">
                    </div>

            
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="text"  class="form-control" name="name" placeholder="Owner Name" class="form-control" value=" {{  Auth::user()->name}}" readonly>
                    </div>
              
                        <input type="text" name="mobile" placeholder="Owner Number" class="form-control" value=" {{ Auth::user()->mobile }}" readonly>
                 
               
                <div class="form-actions form-group">
                    <input type="submit" value="Submit">                </div>
                </div>
            </form>
       
    </div>
    </div>
    @endsection