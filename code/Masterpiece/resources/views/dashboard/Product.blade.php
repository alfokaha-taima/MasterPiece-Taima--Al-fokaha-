@extends('dashboard.layout')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Example Form</div>
        {{-- <div class="card-body card-block">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <span>{{$error}}</span>
                <br>
                @endforeach
            </div>
            @endif
            <form action="/Product" method="post" class="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="username" name="name" placeholder="Product Name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="number" id="price" name="price" placeholder="price" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-asterisk"></i>
                        </div>
                        <input type="desc" id="password" name="desc" placeholder="Descreption" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-align-justify" aria-hidden="true"></i>
                        </div>
                        <select type="text" name="category_id" placeholder="Category" class="form-control">
                            @foreach( $categories as $cat)
                            <option value="{{$cat['id']}}"> {{$cat['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="file"  name="image" placeholder="upload your image" class="form-control">
                    </div>
                </div>
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-primary  btn-sm">Submit</button>
                </div>
                
            </form>
        </div> --}}
 
    </div>
 <!-- table  start -->
    <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue h4">Admins table</h4>
        </div>
    </div>
    <div class="col-lg-12" style="overflow-x:auto;">
      <table class="table table-bordered" >
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">Price</th>
                <th scope="col">Descreption</th>
                <th scope="col">Category Name</th>
                <th scope="col">City Name</th>
  
                <th scope="col">Image</th>
                <th scope="col">Approve</th>
                <th scope="col">Delete</th>
                
            </tr>
        </thead>
        <tbody>
           @forelse ($products as $value)
           <tr>
               <td>{{$value['id']}}</td>
               <td>{{$value['title']}}</td>
               <td>{{$value['price']}} JD</td>
               <td>{{$value['desc']}}</td>
               @foreach( $categories as $cat)
               @if ($cat['id']== $value['category_id'])
                    <td>{{$cat['name']}}</td> 
                    @endif
                    @endforeach
                    @foreach( $cities as $city)
                    @if ($city['id']== $value['city_id'])
                         <td>{{$city['city_name']}}</td> 
                         @endif
                         @endforeach
                    <td><img width="70px" src="/images/{{$value['image']}}"></td>
              
                    <td>
             <form action="/toggole-approve" method="POST">
                @csrf
                <input <?php if($value->approve==1){echo"checked";}?>  type="checkbox" name="approve">
                <input type="hidden" name="commentId" value="{{$value['id']}}">
                <input class="btn-btn-primary" type="submit" value="Done">
             </form>
            </td>
            <td><a class="btn-sm btn-danger" href="deleteproduct/{{$value['id']}}" role="button">Delete</a></td> 
            </tr>
               
           @empty
             <h4>No Prduct</h4>  
           @endforelse
        </tbody>
      </table>
    </div>
</div>

<!--table End -->

@endsection
