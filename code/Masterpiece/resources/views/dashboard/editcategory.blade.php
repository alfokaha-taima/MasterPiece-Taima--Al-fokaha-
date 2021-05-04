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
            <form action="/updatecategory/{{$category['id']}}" method="post" class="" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" id="username" name="name" placeholder="Username" value="{{$category['name']}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" id="email" name="desc" placeholder="Email" value="{{$category['desc']}}" class="form-control">
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


   




<!--table End -->

@endsection
