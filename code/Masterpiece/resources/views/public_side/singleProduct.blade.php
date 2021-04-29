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
        <div class="single-page">
            <div class="single-page-row" id="detail-21">
                <div class="col-md-6 single-top-right">	
                    
                      <img style="width:300px;highet:300px" src="/images/{{$products['image']}}"/>
                     
                            </div>
                            <div class="col-md-6 single-top-right">
                    <h3 class="item_name">{{$products['title']}}</h3>
                   
                    <div class="single-rating">
                       
                    </div>
                    <div class="single-price">
                        <ul>
                            <li>{{$products['price']}} JOD</li>  
                          
                            
                        </ul>	
                    </div> 
                    <p class="single-price-text">{{$products['desc']}} </p>
                    <form action="#" method="post">
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" /> 
                        <input type="hidden" name="w3ls_item" value="Snow Blower" /> 
                        <input type="hidden" name="amount" value="540.00" /> 
                        <button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to favorite</button>
                    </form>
                  
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