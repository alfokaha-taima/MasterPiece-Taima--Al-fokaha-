@extends('dashboard.layout')
@section('content')
<div class="col-lg-13">
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
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="username" name="name" placeholder="Username" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="text" id="email" name="desc" placeholder="Descreption" class="form-control">
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
 <div class="pd-20 card-box mb-30">
    <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue h4">Category table</h4>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">image</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($category as $value)
                <tr>
                    <td scope="row">{{$value['id']}}</td> 
                     <td>{{$value['name']}}</td> 
                    <td>{{$value['desc']}}</td>
                    <td>  <img width="70px" src="/images/{{$value['image']}}"></td>
                  
                     <td>
                        <a class="btn-sm btn-warning" href="editcategory/{{$value['id']}}" role="button"> Edit </a>
                    </td> 
                    <td><a class="btn-sm btn-danger" href="deletecategory/{{$value['id']}}" role="button">Delete</a></td> 
                </tr>
             @endforeach 
        </tbody>
    </table>
</div>
</div>
<!--table End -->

@endsection
