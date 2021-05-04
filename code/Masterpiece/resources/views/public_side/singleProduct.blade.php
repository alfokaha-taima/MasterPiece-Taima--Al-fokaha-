@extends('public_side.layout')

@section('content')

<!-- products -->
{{-- <div class="products">	 
    <div class="container">  
        <div class="single-page">
            <div class="single-page-row" id="detail-21">
                <div class="col-md-6 single-top-right">
                    <div class="flexslider">
                       
                           
                                <div class="thumb-image detail_images"> <img src="/images{{$products['image']}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                           
                          
                      
                    </div>
                    <h3 class="item_name">{{$products['title']}}</h3>
                 
                    <div class="single-price">
                        <ul>
                            <li>{{$products['price']}} JD</li>  
                            </ul>	
                    </div> 
                    <p class="single-price-text">{{$products['desc']}} </p>
                    <form action="products.show" method="post">
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" /> 
                        <input type="hidden" name="w3ls_item" value="Snow Blower" /> 
                        <input type="hidden" name="amount" value="540.00" />
                       
                       
                    </form>
                    <button class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</button>
                </div>
               <div class="clearfix"> </div>  
            </div>
           
        </div> 
       
      
    </div>
</div> --}}
<div class="products">	 
    <div class="container">  
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
        @endif
        <div class="single-page">
            <div class="single-page-row" id="detail-21">
                <div class="col-md-6 single-top-right">	
                    
                      <img style="width:300px;highet:300px" src="/images/{{$products['image']}}"/>
                     
                            </div>
                            <div class="col-md-6 single-top-right">
                    <h3 class="item_name">{{$products['title']}}</h3>
                    <p class="item_name">Amman</p>
                   
                    <div class="single-rating">
                       
                    </div>
                    <div class="single-price">
                        <ul>
                            <li>{{$products['price']}} JOD</li>  
                          
                            
                        </ul>	
                    </div> 
                    <p class="single-price-text">{{$products['desc']}} </p>
                    <form action="/add-to-cart" method="POST">
                        @csrf
                        
                        <input type="hidden" name="product_id" value="{{$products['id']}}"/>
                   
        <a class="nav-link"  href="{{ route('login') }}">  
            <button type="submit" class="btn btn-danger" ><i class="fa fa-heart" aria-hidden="true"></i> Add to Wishlist</button>

        </a>
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                           
 @endguest
                           
                    
                    </div>
                <div class="clearfix"> </div>  
                </div>
            
            </div> 
    
    
       
           
          
              
              
           
               
               
               
               
               
            </div>    
        </div>
    
       
       
        <script src="js/minicart.js"></script>
        <script>
            w3ls.render();
    
            w3ls.cart.on('w3sb_checkout', function (evt) {
                var items, len, i;
    
                if (this.subtotal() > 0) {
                    items = this.items();
    
                    for (i = 0, len = items.length; i < len; i++) {
                        items[i].set('shipping', 0);
                        items[i].set('shipping2', 0);
                    }
                }
            });
        </script> 
<!--//products--> 
@endsection 