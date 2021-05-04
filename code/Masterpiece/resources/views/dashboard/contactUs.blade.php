@extends('dashboard.layout')
@section('content')
<style>
  .cards {
  position: relative;  
  list-style-type: none;
  padding: 0;
  max-width: 45em;
  margin: 10% auto 0;
}
p{
  color: #000
}

.card {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
  
  background: rgb(176, 226, 240);
  border-radius: 30px;
  padding: 40px;
  box-shadow: 0 0 20px #000;
  transform: translateY(0) rotate(4deg) translateX(25px) scale(1);
  transform-origin: 0 0;
  
  transition: transform 0.6s cubic-bezier(.8,.2,.1,0.8) 0.1s,
    background 0.4s linear;
  
  cursor: pointer;
  user-select: none;
  
  :last-child { margin-bottom: 0; }
}

.card--next { 
  z-index: 5; 
  transform: translateY(-25px) rotate(4deg) translateX(25px) scale(1);
}

.card--out {
  animation: card-out 0.6s cubic-bezier(.8,.2,.1,0.8);
  transform: translateY(-50px) rotate(8deg) translateX(55px) scale(0.95);
  z-index: 1;
  background: #bbb;
}

@keyframes card-out {
  0% { z-index: 20; transform: translateY(0px) rotate(-4deg); }
  50% { transform: translateY(-120%) rotate(-5deg) translateX(-40px); }
  80% { z-index: 1; }
  100% { transform: translateY(-50px) rotate(8deg) translateX(55px) scale(0.95); }
}

.card--current {
  cursor: auto;
  user-select: auto;
  position: relative;
  z-index: 10;
  opacity: 1;
  background: #EEE;
  transform: rotate(-1deg) translateX(0%) scale(1);
}




 { padding: 30px; background: #222232; }
 
@media screen and (max-width: 600px) {
  .cards {
    max-width: 13em;

  }
  .btn-danger{
    width: 50% !important;
  }
  
}
  </style>
<div class="col">

<div class="pro-head">
    <h1 class="text-center" style="margin: 30px">Contact Messages</h1>
</div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


  <ul class="cards">
    
    @forelse($contacts as $contact)

    <li class="card">
      <h1>Name: {{$contact['name']}}</h1>
  
      <h6>Date: {{$contact['created_at']}}</h6>
      <h4>Email:{{$contact['email']}}</h4>
      <p>{{$contact['message']}}</p>
      <form action="" method="POST">
        @csrf
     </form>
    </td>
    <td><a style="width: 10%" class="btn-sm btn-danger" href="deletemessage/{{$contact['id']}}" role="button">Delete</a></td> 
  
    </li>
    {{-- <li class="card">
      <h1>Comment Card 4</h1>
  
      <p></p>
  
    </li> --}}
    
    @empty
         <h4 class="text-center">No Messages Yet</h4>  
       @endforelse
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $.fn.commentCards = function(){
  
  return this.each(function(){
  
    var $this = $(this),
        $cards = $this.find('.card'),
        $current = $cards.filter('.card--current'),
        $next;
  
    $cards.on('click',function(){
      if ( !$current.is(this) ) {
        $cards.removeClass('card--current card--out card--next');
        $current.addClass('card--out');
        $current = $(this).addClass('card--current');
        $next = $current.next();
        $next = $next.length ? $next : $cards.first();
        $next.addClass('card--next');
      }
    });
  
    if ( !$current.length ) {
      $current = $cards.last();
      $cards.first().trigger('click');
    }
  
    $this.addClass('cards--active');
  
  })
  
  };
  
  $('.cards').commentCards();
    </script>

@endsection
