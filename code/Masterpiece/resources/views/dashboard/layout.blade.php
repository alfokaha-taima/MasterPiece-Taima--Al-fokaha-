<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>
  <title>YardSale</title>
  <link href="{{asset('images/aboutUss.png')}}" rel="icon">
  <style>
   .hover:hover {
  background-color: #F44336 !important;
  color: white !important;
}
.header-logo h1,.footer-logo.header-logo h2{
    font-size: 3em; 
    font-weight: 900;
}
.header-logo h1 a ,.footer-logo.header-logo h2 a{
    display: inline-block;
    color: #000;
    text-decoration: none;
    position: relative;
}
.header-logo h1 a span,.footer-logo.header-logo h2 a span{
    font-family: 'Lovers Quarrel', cursive;
    font-size: 2em;
    color:#F44336;
    vertical-align: sub;
	margin-right: 3px;
}
.header-logo h1 a i,.footer-logo.header-logo h2 a i{
    display: block;
    position: absolute;
    bottom: 25%;
    right: 2%;
    font-size: 0.5em; 
} 
.header-logo h6 {
    font-size: 0.8em;
    color: #000;
    letter-spacing: 1px;
    margin-top: -1em;
}  

/* .hover{
  background-color: #faf0ef !important;
  color: rgb(19, 18, 18) !important;
} */
  </style>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('assets/img/brand/favicon.png" type="image/png')}}">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css" type="text/css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/argon.css?v=1.2.0" type="text/css')}}">
</head>


  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
    	<div class="header-logo">
        <h1><a href="{{url('/')}}"><span>Y</span>ard <i style="margin:1.1em;color:red ">Sale</i></a></h1>
        <h6>Your stores. Your place.</h6> 
      </div>	
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link hover {{ Route::currentRouteNamed('dashboard') ? ' text-light bg-danger' : '' }}"  href="/dashboard">
                <i class="fas fa-tachometer-alt aria-hidden="true""></i>
                <span  class="nav-link-text ">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover {{ Route::currentRouteNamed('adminn') ? ' text-light bg-danger' : '' }}"  href="/admin">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span  class="nav-link-text ">Manage Admin</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover {{ Route::currentRouteNamed('manageUser') ? ' text-light bg-danger' : '' }}"  href="/manageUser">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span class="nav-link-text">Mange User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover {{ Route::currentRouteNamed('Category') ? ' text-light bg-danger' : '' }}" href="/Category">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <span class="nav-link-text">Manage Category</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover {{ Route::currentRouteNamed('Product') ? ' text-light bg-danger' : '' }}" href="/Product">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <span class="nav-link-text">Manage Product</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover {{ Route::currentRouteNamed('contactUs') ? ' text-light bg-danger' : '' }}" href="/contactUs">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span class="nav-link-text">Manage Contact Us</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover {{ Route::currentRouteNamed('contactUs') ? ' text-light bg-danger' : '' }}" href="/City">
                <i class="fas fa-city" aria-hidden="true"></i>
                <span class="nav-link-text">Manage City</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover  {{ Route::currentRouteNamed('/') ? ' text-light bg-danger' : '' }}" href="/">
                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                <span class="nav-link-text">Public Site</span>
              </a>
            </li>
           
           
          </ul>
          <!-- Divider -->
         
          <!-- Heading -->
          <!-- Navigation -->
        
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div  class="main-content" id="panel">
    <!-- Topnav -->
    <nav  class="navbar navbar-top navbar-expand navbar-dark bg-dark border-bottom">
      <div class="container-fluid">
        <div  class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
         
          <form   action="{{ route('searchuser') }}" method="GET" class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div  class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" name="search" type="search">
              </div>
              </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div  class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
           
           
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="images/{{Auth::guard('admin')->user()->image}}">
                  </span>
                  
              
               
              <div  class="dropdown-divider"></div>
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{Auth::guard('admin')->user()->name}}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item hover" href='/admin/logout'
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="/admin/logout" method="POST" class="d-none">
                        @csrf
                    </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div   class="header bg-dark ">
      <div  class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div  class="col-lg-6 col-7">
              {{-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav> --}}
            </div>
        </div>
      </div>
      </div>
    </div>
    <div class="pd-10 card-box mb-10">
        <div class="clearfix">
            @yield('content')
        </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets{{('/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="assets{{('/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="assets{{('/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="assets{{('/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="assets{{('/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="assets{{('/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="assets{{('/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="assets{{('/js/argon.js?v=01.2.0')}}"></script>
</body>

</html>
