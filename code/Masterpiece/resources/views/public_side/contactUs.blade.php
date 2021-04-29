@extends('public_side.layout')

@section('content')

<!-- contact-page -->
<div class="contact">
    <div class="container"> 
        <h3 class="w3ls-title w3ls-title1">Contact Us</h3>  
       
        <div class="contact-form-row">
            <div class="col-md-7 contact-left">
                <form action="/contact_Us" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Name" required="">
                    <input class="email" type="text" name="email" placeholder="Email" required="">
                    <textarea placeholder="Message" name="message" required=""></textarea>
                    <input type="submit" value="SUBMIT">
                </form>
            </div> 
            <div class="col-md-4 contact-right">
                <div class="cnt-w3agile-row">
                    <div class="col-md-3 contact-w3icon">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 contact-w3text">
                        <p>Manage Your Orders <br>Easily Track Orders & Returns </p> 
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="cnt-w3agile-row cnt-w3agile-row-mdl">
                    <div class="col-md-3 contact-w3icon">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 contact-w3text">
                        <p>Notifications <br>Get Relevant Alerts & Recommendations</p> 
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="cnt-w3agile-row">
                    <div class="col-md-3 contact-w3icon">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 contact-w3text">
                        <p>Requirements<br> With Wishlists, Reviews, Ratings</p> 
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div> 
            <div class="clearfix"> </div>	
        </div>
    </div>
</div>
@endsection