
            @extends('public_side.layout')
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
             
                 
            <h2 style="text-align: center;">Your Wish List</h2>
            
            <div class="row"  >
               
              @if($products->isNotEmpty())
                @forelse ($products as $value)
                <div  class="col-lg-2">
                <div class="card"   style="box-shadow: rgba(226, 28, 28, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;width: 18rem;">
                    <img  class="card-img-top" style="padding:1rem;width:18rem;height:15rem" src="/images/{{$value->image}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">{{$value->title}}</h5>
                      <h5 class="card-title text-center">{{$value->price}} JD</h5>
                     
                      <div class="row">
                        <div class="col text-center">
                          <a style="margin: 10px" class="btn btn-danger" href='deletwishlist/{{$value->wishlist_id}}'><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </div>
                      </div>
                   
                     
                  
            </div>
            </div>
            </div>
            @empty
            <h4>No Prduct</h4>  
            @endforelse
            @else 
<div>
    <h3 class="text-center">Not Found</h3>
</div>
@endif
                </div>
                </div>
            </div>
           
            
            @endsection
            
          


