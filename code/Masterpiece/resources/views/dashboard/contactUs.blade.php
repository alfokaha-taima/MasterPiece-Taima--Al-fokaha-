@extends('dashboard.layout')
@section('content')
<div class="col">

<div class="pro-head">
    <h2>Contact Messages:</h2>
</div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="clearfix mb-20">
    <div class="pull-left">
        <h4 class="text-blue h4">Admins table</h4>
    </div>
</div>
<div class="col-lg-12" style="overflow-x:auto;">
  <table class="table table-bordered" >
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
           

          
            <th scope="col">Delete</th>
            
        </tr>
    </thead>
    <tbody>
      @forelse($contacts as $contact)
       <tr>
          
           <td>{{$contact['name']}}</td>
           <td>{{$contact['email']}} JD</td>
           <td>{{$contact['message']}}</td>
       
              
          
          
              
         <form action="" method="POST">
            @csrf
         </form>
        </td>
        <td><a class="btn-sm btn-danger" href="deleteproduct/{{$contact['id']}}" role="button">Delete</a></td> 
        </tr>
           
       @empty
         <h4>No Prduct</h4>  
       @endforelse
    </tbody>
  </table>




@endsection