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
        </div>
 
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
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Descreption</th>
                <th scope="col">Category Name</th>
  
                <th scope="col">Image</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $value)
                <tr>
                    <td scope="row">{{$value['id']}}</td> 
                     <td>{{$value['name']}}</td> 
                     <td>{{$value['price']}} JD</td> 
                    <td style="word-wrap: break-word;">{{$value['desc']}}</td>
                    @foreach( $categories as $cat)
                    @if ($cat['id']== $value['category_id'])
                    <td>{{$cat['name']}}</td> 
                    @endif
                    @endforeach
                    <td><img width="70px" src="/images/{{$value['image']}}"></td>
                     <td>
                        <a class="btn-sm btn-warning" href="editproduct/{{$value['id']}}" role="button"> Edit </a>
                    </td> 
                    <td><a class="btn-sm btn-danger" href="deleteproduct/{{$value['id']}}" role="button">Delete</a></td> 
                </tr>
             @endforeach 
        </tbody>
      </table>
    </div>
</div>

<!--table End -->

@endsection
