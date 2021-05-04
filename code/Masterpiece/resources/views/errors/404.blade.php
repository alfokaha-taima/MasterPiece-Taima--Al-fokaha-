<!DOCTYPE HTML>
<html>
	<head>
		<title>How to Create a Custom 404 Page in Laravel 7</title>
		<meta name="keywords" content="404 iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href="{{ asset('css/404.css') }}" rel="stylesheet" type="text/css"  media="all" />

	</head>
    <style>
        .btn{
            background: red !important;
        }
        .btn:hover{
            color: black !important;
        }
        </style>
	<body>
		<!--start-wrap--->
		<div class="wrap">
			<!---start-header---->
				{{-- <div class="header">
					<div class="logo">
						<div class="header-logo">
					<h1><a href="{{url('/')}}"><span>Y</span>ard <i style="margin:1.1em;color:red ">Sale</i></a></h1>
					<h6>Your stores. Your place.</h6> 
				</div>
					</div> --}}
				</div>
			<!---End-header---->
			<!--start-content------>
			<div class="content">
				<img src="https://img.freepik.com/free-vector/error-404-concept-illustration_114360-1811.jpg?size=626&ext=jpg&ga=GA1.2.1937569697.1617235200" title="error" />
				<p><span><label>O</label>hh.....</span>You Requested the page that is no longer There.</p>
				<a class="btn" href="/">Back To Home</a>
   			</div>
			<!--End-Cotent------>
		</div>
		<!--End-wrap--->
	</body>
</html>

