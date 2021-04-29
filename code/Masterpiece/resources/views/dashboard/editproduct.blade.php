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
            <form action="/updateproduct/{{$product['id']}}" method="post" class="" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="username" name="name" placeholder="Product Name" class="form-control" value="{{$product['name']}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="number" id="price" name="price" placeholder="price" class="form-control" value="{{$product['price']}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-asterisk"></i>
                        </div>
                        <input type="text" id="password" name="desc" placeholder="Descreption" class="form-control" value="{{$product['desc']}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-align-justify" aria-hidden="true"></i>
                        </div>
                        <select type="text" name="category_id" placeholder="Category" class="form-control">
                            @foreach($categories as $cat)
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

</div>
<!--table End -->

@endsection
