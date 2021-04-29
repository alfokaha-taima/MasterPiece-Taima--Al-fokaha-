@extends('public_side.layout')

@section('content')

<!-- products -->
<div class="products">	 
    <div class="container">
        <div class="col-md-9 product-w3ls-right">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
            @endif
            <!-- breadcrumbs --> 
            <ol class="breadcrumb breadcrumb1">
                <li><a href="index.html">Home</a></li>
                <li class="active">Products</li>
            </ol> 
            <div class="clearfix"> </div>
            <!-- //breadcrumbs -->
            <div class="product-top">
                {{-- <h4>{{$categories['name']}}</h4> --}}
                <ul> 
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Filter By<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Low price</a></li> 
                            <li><a href="#">High price</a></li>
                            <li><a href="#">Latest</a></li> 
                            <li><a href="#">Popular</a></li> 
                        </ul> 
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Samsung</a></li> 
                            <li><a href="#">LG</a></li>
                            <li><a href="#">Sony</a></li> 
                            <li><a href="#">Other</a></li> 
                        </ul> 
                    </li>
                </ul> 
                <div class="clearfix"> </div>
            </div>
            @if($products->isNotEmpty())
            @foreach ($products as $product)
            <div class="col-md-3 product-grids">
                <div class="agile-products">
                    {{-- <div class="new-tag"><h6>New</h6></div> --}}
                    <a href="/singleproduct/{{$product['id']}}"><img src="/images/{{$product['image']}}" class="img-responsive" alt="img"></a>
                    <div class="agile-product-text">              
                        <h5><a href="single.html">{{$product['title']}}</a></h5> 
                        <h6>{{$product['price']}} JOD</h6> 
                        <form action="/add-to-cart" method="POST">
                            @csrf
                           
                            <input type="hidden" name="product_id" value="{{$product['id']}}"/>
                            <input type="hidden" name="add" value="1"/> 
                            <input type="hidden" name="w3ls_item" value="Gourmet Food"/> 
                            <input type="hidden" name="amount" value="100.00"/> 
                            <button class="btn btn-danger addToWishlist  w3ls-cart pw3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to vaforite</i></button> 
                            <button class="btn btn-danger addToWishlist  w3ls-cart pw3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to vaforite</i></button> 
                        
                            {{-- <a class="addToWishlist"
                            href="/add-to-cart"  
                          
                                                        ><i type="submit" class=" addToWishlist  w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to vaforite</i></a>  --}}

                            
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
        <div class="col-md-3 rsidebar">
        <div class="rsidebar-top">
            <div class="slider-left">

        <h4>Filter By Price</h4>   
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
    </div>

    
</div>


@include('public_side.not-logged')



@endsection

{{-- <script>
    $.ajaxSetup({
        headers:{
    'X-CSRF-TOKEN':$('meta[name='csrf-token']').attr('content')
        }
    });
    $(document).on('click','.addToWishlist',function(e){
        @guest()
        $('.not-loggedin-model').css('display','block');
        @endguest
        $.ajax({
            type:'post',
            url:"{{Route('wishlist.store')}}",
            data:{
                'productId':$(this).attr('data-product-id'),
    
            },
            success:function(data){
    
            }
        });
    });
    
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}