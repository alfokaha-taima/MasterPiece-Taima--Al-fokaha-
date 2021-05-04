@extends('public_side.layout')

@section('content')
<?php
use App\Category;
use App\City;
 $category = new Category();
        $categories =  $category->all();
        $city = new City();
        $cities =  $city->all();
?>
<style>

    </style>
    
<!-- products -->
<div class="products">	 
   
    <div class="container">
        <div class="col-md-3 rsidebar justify-content-item">
            <div class="rsidebar-top ">
                <div  class="slider-left">
    
            <h4>Categories</h4>   
                @foreach ($categories as $category)
                <div class="sidebar-row">
                    <ul class="faq">
    
                        <li class="item1"><a href="#"></</a>
                            <ul>
                                
                                    <li class="subitem1"><a href="{{route("category.product",$category->id)}}">{{$category['name']}}
                                    
                                    ({{$category->products->count()}})</a></li>										
    
        
                            </ul>
                        </li>
                    </ul>
                </div>
            @endforeach       
    
            </div>
            </div>
        </div>
        <div class="col-md-9 product-w3ls-right">
      
        
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
            @endif
            
            <!-- breadcrumbs --> 
            <ol class="breadcrumb breadcrumb1">
                <li><a href="/">Home</a></li>
                <li class="active">Products</li>
            </ol> 
            <div class="clearfix"> </div>
            <!-- //breadcrumbs -->
            <div class="product-top">
                {{-- <h4>{{$categories['name']}}</h4> --}}
                <ul> 
                    {{-- <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Filter By<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Low price</a></li> 
                            <li><a href="#">High price</a></li>
                            <li><a href="#">Latest</a></li> 
                            <li><a href="#">Popular</a></li> 
                        </ul> 
                    </li> --}}
                    {{-- <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Samsung</a></li> 
                            <li><a href="#">LG</a></li>
                            <li><a href="#">Sony</a></li> 
                            <li><a href="#">Other</a></li> 
                        </ul> 
                    </li> --}}
                </ul> 
                <div class="clearfix"> </div>
            </div>
            @if($products->isNotEmpty())
            @foreach ($products as $product)
            @foreach ($cities  as $city)
            @if ($city['id']==  $product['city_id'])
            <div class="col-md-3 product-grids">
                <div class="agile-products">
                    {{-- <div class="new-tag"><h6>New</h6></div> --}}
                    <a href="/singleproduct/{{$product['id']}}"><img style="width: 16rem;height:15rem" src="/images/{{$product['image']}}" class="img-responsive" alt="img"></a>
                    <div class="agile-product-text">              
                        <h5><a href="single.html">{{$product['title']}}</a></h5> 
                        <h6>{{$product['price']}} JOD</h6> 
                        <h6>{{$city['city_name']}}</h6> 
                        @endif
                        @endforeach
                        <form action="/add-to-cart" method="POST">
                            @csrf
                            
                            <input type="hidden" name="product_id" value="{{$product['id']}}"/>
                            <button class="btn btn-danger " ><i class="fa fa-heart" aria-hidden="true"></i></button> 
                            @guest
			<a class="nav-link"  href="{{ route('login') }}"> <button class="btn btn-primary"  ><i class="fa fa-phone" aria-hidden="true"></i></button> 
            </a>
                        </form>
			
			@else

            {{-- <input style="width:95px" class="btn btn-primary" value="{{ Auth::user()->mobile }}">  --}}
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
   <i class="fa fa-phone" aria-hidden="true"></i>
  </button>
  
  <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Owner Number</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            
            {{ Auth::user()->mobile }}
            {{-- <input value={{$users->mobile}}> --}}
            {{-- {{ $users[1]->mobile }} --}}

            {{-- {{$product->user_id()->user()->mobile}} --}}

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>

@endguest

                            
                            
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            @else 
    <div>
        <h2>Not found</h2>
    </div>
@endif
        </div>

        {{$products->Links()}}
       
    </div>
    </div>

    







@endsection

