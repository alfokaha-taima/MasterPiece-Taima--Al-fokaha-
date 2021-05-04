<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unportedf
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>YardSale</title>
<link href="{{asset('images/aboutUss.png')}}" rel="icon">


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
<!-- Custom Theme files -->
<link href="{{asset("public_assets/css/bootstrap.css")}}" rel="stylesheet" type="text/css" media="all" />

<link href="{{asset("public_assets/css/style.css")}}" rel="stylesheet" type="text/css" media="all" /> 
<link href="{{asset("public_assets/css/menu.css")}}" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<link href="{{asset("public_assets/css/ken-burns.css")}}" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="{{asset("public_assets/css/animate.min.css")}}" rel="stylesheet" type="text/css" media="all" /> 
<link href="{{asset("public_assets/css/owl.carousel.css")}}" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="{{asset("public_assets/css/font-awesome.css")}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="{{asset("public_assets/js/jquery-2.2.3.min.js")}}"></script> 
<!-- //js --> 
<!-- web-fonts -->
<link href="{{asset("public_assets/fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic")}}" rel='stylesheet' type='text/css'>
<link href="{{asset("public_assets/fonts.googleapis.com/css?family=Lovers+Quarrel")}}" rel='stylesheet' type='text/css'>
<link href="{{asset("public_assets/fonts.googleapis.com/css?family=Offside")}}" rel='stylesheet' type='text/css'>
<link href="{{asset("public_assets/fonts.googleapis.com/css?family=Tangerine:400,700")}}" rel='stylesheet' type='text/css'>

<style>

.topnav-t {
  overflow: hidden;
  background-color: #222;


}

.topnav-t a {
  float: left;
  display: block;
  color: #Fff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav-t a:hover {
  background-color: #F44336;
  color: white;
}

.topnav-t a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-t .icon {
  display: none;
}
/* .upload{
	float: right !important;	
} */

@media screen and (max-width: 600px) {
  .topnav-t a:not(:first-child) {display: none;}
  .topnav-t a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav-t.responsive {position: relative;}
  .topnav-t.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav-t.responsive a {
    float: none;
    display: block;
    text-align: left;
   }

}
.w3view-cart{
	background: #222;
}
.w3view-cart:hover{
	background: #F44336 ;
}
</style>
<!-- web-fonts --> 
<script src="{{asset("public_assets/js/owl.carousel.js")}}"></script>  
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({ 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items :4,
	  itemsDesktop : [640,5],
	  itemsDesktopSmall : [480,2],
	  navigation : true
 
	}); 
}); 


function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav-t") {
    x.className += " responsive";
  } else {
    x.className = "topnav-t";
  }
}

</script>
<script src="{{asset("public_assets/js/jquery-scrolltofixed-min.js")}}" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="{{asset("public_assets/js/move-top.js")}}"></script>
<script type="text/javascript" src="{{asset("public_assets/js/easing.js")}}"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
<script src="{{asset("public_assets/js/bootstrap.js")}}"></script>	
</head>
<body>
	
			
		
	
	{{-- <script>
		$('#myModal88').modal('show');
	</script>  --}}
	<!-- header -->
      <!-- Scripts -->
      <script src="{{asset("public_assets/js/app.js")}}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="{{asset("public_assets//fonts.gstatic.com") }}">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
      <!-- Styles -->
      <link href="{{asset("public_assets/css/app.css") }}" rel="stylesheet">
  </head>
  <body>
     

	  <div class="topnav-t header-sticky" id="myTopnav">
		
		  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
		  	<i class="fa fa-bars"></i>
		  </a>
		  <a href="{{url('/')}}" style="  background-color: #F44336;
		  " >Home</a>
		  <a href="{{url('/about_Us')}}"  >About Us</a>
		  <a href="category/products/1" >Store</a>

		  <a  href="{{url('/contact_Us')}}"> Contact Us</a>	
					



			<a class="upload" href="{{url('/upload_Item')}}">Upload Your Product Here</a>
			@guest
			<a class="nav-link"  href="{{ route('login') }}">{{ __('Login') }}</a>
			@if (Route::has('register'))
			<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
			{{-- <a href="{{url('/')}}"  >Home</a> --}}
			@endif
			@else
		
		
				
	
		
		
			{{-- <a id="navbarDropdown" style="color: white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
				{{ Auth::user()->name }} --}}
				
		
			<a  href="{{url('/Profile')}}">
				My Profile
				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			   </a>
			   <a  href='/user/logout'
				onclick="event.preventDefault();
							  document.getElementById('logout-form').submit();">
				 {{ __('Logout') }}
			 </a>
			
			@endguest


		
	   </div>
	</div>
	
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="{{url('/')}}"><span>Y</span>ard <i style="margin:1.1em;color:red ">Sale</i></a></h1>
					<h6>Your stores. Your place.</h6> 
				</div>	
				<div class="header-search">
					<form action="{{ route('search') }}" method="GET">
						<input type="search" name="search"  placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
						
					</form>
                    
				</div>
				<div class="header-cart"> 
					
					<div class="cart"> 
							 
							
							<button  class="w3view-cart" type="submit" name="submit" value=""><a href="{{url('/add-to-wishlist')}}"><i class="fa fa-heart" aria-hidden="true"></i></a></button>
						  
					</div>
					 
				</div> 
				
			</div>		
		</div><!-- //header-two -->
		
	
	<!-- //header -->
   
    @yield('content')

    <!-- footer-top -->

	<!-- //footer-top --> 
	<!-- subscribe -->
	<div class="subscribe"> 
		<div class="container">
			{{-- <div class="col-md-6 social-icons w3-agile-icons">
				<h4>Keep in touch</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul> 
				<ul class="apps"> 
					<li><h4>Download Our app : </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul> 
			</div>  --}}
			{{-- <div class="col-md-6 subscribe-right">
				<h4>Sign up for email and get 25%off!</h4>  
				<form action="#" method="post"> 
					<input type="text" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="clearfix"> </div> 
			</div> --}}
			{{-- <div class="clearfix"> </div> --}}
		</div>
	</div>
	<!-- //subscribe --> 
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="/" ><span>Y</span>ard<i  style="margin:1.1em;color:red ">Sale</i></a></h2>
						<h6>Your stores. Your place.</h6>
					</div>
				
				</div>
				<div class="col-md-8 ">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="{{url('/about_Us')}}">About Us</a></li>
							<li><a href="{{url('/Profile')}}">My Profile</a></li>  
							<li><a href="category/products/1">Store</a></li>
							
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Services</h3>
						<ul>
							<li><a href="{{url('/contact_Us')}}">Contact Us</a></li>
							<li><a href="{{url('/add-to-wishlist')}}">My Favorite</a></li>
							<li><a href="{{url('/upload_Item')}}">Upload Item</a></li>
						</ul> 
					</div>
					{{-- <div class="col-md-4 footer-grids">
						<h3>Payment Methods</h3>
						<ul>
							<li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
							<li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
							<li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
							<li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
							<li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>
						</ul>  
					</div> --}}
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<!-- //footer -->		
	<div class="copy-right"> 
		<div class="container">
			<p>© 2016 Yard Sale . All rights reserved | Design by <a href="https://github.com/alfokaha-taima"> Taima' Al-Fokaha'.</a></p>
		</div>
	</div> 
	<!-- cart-js -->
	<script src="{{asset("public_assets/js/minicart.js")}}"></script>
	{{-- <script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>   --}}
	<!-- //cart-js -->	
	<!-- countdown.js -->	
	<script src="{{asset("public_assets/js/jquery.knob.js")}}"></script>
	<script src="{{asset("public_assets/js/jquery.throttle.js")}}"></script>
	<script src="{{asset("public_assets/js/jquery.classycountdown.js")}}"></script>
		<script>
			$(document).ready(function() {
				$('#countdown1').ClassyCountdown({
					end: '1388268325',
					now: '1387999995',
					labels: true,
					style: {
						element: "",
						textResponsive: .5,
						days: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#1abc9c",
								lineCap: 'round'
							},
							textCSS: 'font-weight:300; color:#fff;'
						},
						hours: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#05BEF6",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						minutes: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#8e44ad",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						},
						seconds: {
							gauge: {
								thickness: .10,
								bgColor: "rgba(0,0,0,0)",
								fgColor: "#f39c12",
								lineCap: 'round'
							},
							textCSS: ' font-weight:300; color:#fff;'
						}

					},
					onEndCallback: function() {
						console.log("Time out!");
					}
				});
			});
		</script>
	<!-- //countdown.js -->
	<!-- menu js aim -->
	<script src="{{asset("public_assets/js/jquery.menu-aim.js")}}"> </script>
	{{-- <script src="js/app.js" defer></script> --}}
	<script src="{{asset("public_assets/js/app.js")}} defer></script>
	<script src="{{asset("public_assets/js/main.js")}}"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
</body>
</html>