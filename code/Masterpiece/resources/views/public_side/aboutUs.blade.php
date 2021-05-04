@extends('public_side.layout')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@section('content')
<style>
    .social-link {
  width: 30px;
  height: 30px;
  border: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #666;
  border-radius: 50%;
  transition: all 0.3s;
  font-size: 0.9rem;
}

.social-link:hover,
.social-link:focus {
  background: #ddd;
  text-decoration: none;
  color: #555;
}
    </style>

  
  <div class="bg-white py-5">
    <div class="container py-5">
      <div class="row align-items-center mb-5">
        <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
          <h2 style="font-size: 1em !important" >Our Mission</h2>
          <p style="font-size: 1.8em" class="font-italic text-muted mb-4">YardSale is a platform that  provides a safe and trusted online environment to connect directly sellers and buyers without the need of having a medium or to pay any kind of commission. We have over 8 categories such as Autos, cars, electronics, video games, cell phones, furniture, clothes and fashion items, books, magazines and all different kinds of services and sectors as well. </p>
        </div>
        <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="/images/aboutUss.png" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-5 px-5 mx-auto"><img src="https://www.klelawcollege.org/blog/wp-content/uploads/2018/10/Received-a-Fake-Product-From-an-Online-Shopping-Website.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
        <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
          <h2 style="font-size: 1em" >Our Vision</h2>
          <p style="font-size: 1.8em" class="font-italic text-muted mb-4">Our vision is about making people’s lives easier and more comfortable by providing a safe and trusted online environment to connect directly sellers and buyers without the need of having a medium or to pay any kind of commission.</p>
        </div>
      </div>
    </div>
  </div>

@endsection
