@extends('public_side.layout')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<!-- banner -->
<div class="banner">
    <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
        <!-- Wrapper-for-Slides -->
        <div class="carousel-inner" role="listbox">  
            <div class="item active"><!-- First-Slide -->
                <img src="{{asset("public_assets/images/5.jpg")}}" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <h3 data-animation="animated flipInX">Easy Way To Sell Your Product</h3>
                    {{-- <h4 data-animation="animated flipInX">Hot Offer Today Only</h4> --}}
                </div>
            </div>  
            <div class="item"> <!-- Second-Slide -->
                <img src="{{asset("public_assets/images/8.jpg")}}" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <h3 data-animation="animated fadeInDown">Easy Way To Find What You Want</h3>
                    {{-- <h4 data-animation="animated fadeInUp">cupidatat non proident</h4> --}}
                </div>
            </div> 
            <div class="item"><!-- Third-Slide -->
                <img src="{{asset("public_assets/images/3.jpg")}}" alt="" class="img-responsive"/>
                <div class="carousel-caption kb_caption kb_caption_center">
                    <h3 data-animation="animated fadeInLeft">Best Prices Ever</h3>
                    {{-- <h4 data-animation="animated flipInX">cupidatat non proident</h4> --}}
                </div>
            </div> 
        </div> 
        <!-- Left-Button -->
        <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
            <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> 
        <!-- Right-Button -->
        <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
            <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> 
    </div>
    <script src="{{asset("public_assets/js/custom.js")}}"></script>
</div>
<!-- //banner -->  
<!-- welcome -->
<div class="welcome"> 
    <div class="container"> 
        <div class="welcome-info">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                {{-- <ul id="myTab" class=" nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" >
                        <i class="fa fa-laptop" aria-hidden="true"></i> 
                        <h5>Electronics</h5>
                    </a></li>
                    <li role="presentation"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab"> 
                        <i class="fa fa-female" aria-hidden="true"></i>
                        <h5>Fashion</h5>
                    </a></li>
                    <li role="presentation"><a href="#james" role="tab" id="james-tab" data-toggle="tab"> 
                        <i class="fa fa-gift" aria-hidden="true"></i>
                        <h5>Photo & Gifts</h5>
                    </a></li>
                    <li role="presentation"><a href="#decor" role="tab" id="decor-tab" data-toggle="tab"> 
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <h5>Home Decor</h5>
                    </a></li>
                    <li role="presentation"><a href="#sports" role="tab" id="sports-tab" data-toggle="tab"> 
                        <i class="fa fa-motorcycle" aria-hidden="true"></i>
                        <h5>Sports</h5>
                    </a></li> 
                </ul> --}}
                <div class="clearfix"> </div>
                <h3 class="w3ls-title">Leates Products</h3>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="tabcontent-grids">  
                            <div id="owl-demo" class="owl-carousel"> 
                                @foreach ($products as $product)
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits"> 
                                        
                                        <a href="singleproduct/{{$product['id']}}"><img src="images/{{$product['image']}}" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">           
                                            <h4><a href="singleproduct/{{$product['id']}}">{{$product['title']}}</a></h4>
                                            <p>{{Str::limit($product['desc'],15)}}</p>
                                            <h5>{{$product['price']}}jd</h5> 
                                            <form action="singleproduct/{{$product['id']}}" method="post">
                                                {{-- <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" /> 
                                                <input type="hidden" name="w3ls_item" value="Audio speaker" /> 
                                                <input type="hidden" name="amount" value="100.00" />  --}}
                                                <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Vaforite</button>
                                            </form>  
                                        </div>   
                                    </div>   
                                </div>
                                @endforeach
                                
                                
                                
                            </div>    
                        </div>
                    </div> 
                </div>   
               
            </div>  
        </div>  	
    </div>  	
</div> 
<!-- //welcome -->
<!-- add-products -->
<div class="add-products"> 
    <div class="container">  
        <div class="add-products-row">
            <div class="w3ls-add-grids">
                <a href="category/products/1"> 
                    <h4>Easy Way To Sell Your Product</h4>
                    <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                </a>
            </div>
            <div class="w3ls-add-grids w3ls-add-grids-mdl">
                <a href="category/products/1"> 
                    <h4>Easy Way To Find What You Want</h4>
                    <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                </a>
            </div>
            <div class="w3ls-add-grids w3ls-add-grids-mdl1">
                <a href="category/products/1"> 
                    <h4>Best Prices Ever </h4>
                    <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                </a>
            </div>
            <div class="clerfix"> </div>
        </div>  	
    </div>  	
</div>
<!-- //add-products -->
<!-- coming soon -->
<div class="soon">
    <div class="container">
        <h3>Mega Deal Of the Week</h3>
        <h4>Coming Soon Don't Miss Out</h4>  
        <div id="countdown1" class="ClassyCountdownDemo"></div>
    </div> 
</div>
<!-- //coming soon -->
<!-- deals -->
<div class="deals"> 
    <div class="container"> 
        <h3 class="w3ls-title">DEALS OF THE DAY </h3>
        <div class="deals-row">
            @foreach ($categories as $category)
            <div class="col-md-3 focus-grid"> 
                <a href="{{route("category.product",$category->id)}}" class="wthree-btn"> 
                    <div class="focus-image"><img  style="width:20px;highet:20px" src="images/{{$category['image']}}"/> </div>
                    <h4 class="clrchg">{{$category['name']}}</h4> 
                </a>
            </div>
            @endforeach
            </div>  	
    </div> 
   	
</div> 
<!-- //deals --> 
@endsection
