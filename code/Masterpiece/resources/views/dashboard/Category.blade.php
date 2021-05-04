@extends('dashboard.layout')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Example Form</div>
        <div class="card-body card-block">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <span>{{$error}}</span>
                <br>
                @endforeach
            </div>
            @endif
            <form action="Category" method="post" class="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" id="username" name="name" placeholder="Username" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" id="email" name="desc" placeholder="Descreption" class="form-control">
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="file"  name="image" placeholder="upload your image" class="form-control">
                    </div>
                </div>
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-primary  btn-sm">Submit</button>
                </div>
                
            </form>
        </div>
 
</div>


<div class="row"  style="padding: 2rem;">
   

    @foreach ($category as $value)
    <div  class="col-lg-4">
    <div class="card"   style="box-shadow: rgba(226, 28, 28, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;width: 18rem;">
        <img  class="card-img-top" style="padding:1rem;width:18rem;height:15rem" src="/images/{{$value['image']}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$value['name']}}</h5>
          <h5 class="card-title">{{$value['desc']}}</h5>
          
          
        <div class="row">
          <td><a   href="editcategory/{{$value['id']}}"  class='btn btn-primary'>Edit</a></td>
          <td><a  href="deletecategory/{{$value['id']}}"  class='btn btn-danger'>Delete</a></td>
        
        </div>
        </div>
  
{{-- <div>{!! $package->package_validity !!}</div> --}}

<div class="card-body" style="display: flex; flex-direction: row; margin-top: 1rem">
</div>
</div>
</div>

@endforeach

@endsection
