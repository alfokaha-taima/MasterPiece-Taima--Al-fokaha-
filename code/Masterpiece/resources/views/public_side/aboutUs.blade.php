@extends('public_side.layout')

@section('content')
<style>
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Oswald:600,700');
figure.snip0078 {
    font-family: 'Oswald', Arial, sans-serif;
    color: #fff;
    position: relative;
    float: left;
    margin: 10px 1%;
    min-width: 220px;
    max-width: 350px;
    max-height: 310px;
    width: 100%;
    text-align: center;
}

figure.snip0078 * {
    -webkit-box-sizing: padding-box;
    box-sizing: padding-box;
}

figure.snip0078 img {
    opacity: 1;
    max-width: 100%;
    border: 10px solid #000000;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    -webkit-transform: scale(0.85);
    transform: scale(0.85);
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
}

figure.snip0078 figcaption {
    bottom: 0;
    width: 60%;
    right: 0;
    position: absolute;
    background: #000000;
    padding: 12px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    -webkit-transform: translateY(0);
    transform: translateY(0);
    box-shadow: 0 0px 10px -10px #000000;
}

figure.snip0078 figcaption h2,
figure.snip0078 figcaption p {
    margin: 0;
    color: #ffffff;
}

figure.snip0078 figcaption h2 {
    font-weight: 400;
    text-transform: uppercase;
}

figure.snip0078 figcaption h2 span {
    font-weight: 800;
}

figure.snip0078 figcaption p {
    font-size: 0.9em;
    font-weight: 500;
    opacity: 0.65;
}

figure.snip0078 a {
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    position: absolute;
    z-index: 1;
}

figure.snip0078.blue figcaption {
    background: #315e95;
}

figure.snip0078.blue img {
    border: 10px solid #315e95;
}

figure.snip0078.red figcaption {
    background: #81261d;
}

figure.snip0078.red img {
    border: 10px solid #81261d;
}

figure.snip0078.yellow figcaption {
    background: #a85913;
}

figure.snip0078.yellow img {
    border: 10px solid #a85913;
}

figure.snip0078:hover figcaption,
figure.snip0078.hover figcaption {
    -webkit-transform: translateY(-8px);
    transform: translateY(-8px);
    box-shadow: 0 15px 15px -15px #000000;
}

figure.snip0078:hover.blue img,
figure.snip0078.hover.blue img {
    border: 10px solid #2980b9;
}

figure.snip0078:hover.red img,
figure.snip0078.hover.red img {
    border: 10px solid #c0392b;
}

figure.snip0078:hover.yellow img,
figure.snip0078.hover.yellow img {
    border: 10px solid #e67e22;
}


.snip1374 {
    position: relative;
    float: left;
    overflow: hidden;
    margin: 10px 1%;
    min-width: 240px;
    max-width: 500px;
    width: 100%;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    border-radius: 50%;
}

.snip1374 img {
    max-width: 100%;
    vertical-align: top;
    -webkit-transition: all 2s ease-out;
    transition: all 2s ease-out;
    -webkit-transform: scale(1.4);
    transform: scale(1.4);
}

.snip1374:hover img,
.snip1374.hover img {
    -webkit-transform: scale(1);
    transform: scale(1);
}
.info-text{
  top: 50%;
}
.info-text p {
    display: table-cell;
    margin: 0;
    vertical-align: middle;
    text-align: left;
    font-size: 26px;
    line-height: 1.4;
    font-family: 'Open Sans', sans-serif;
    padding: 16% 4%;
    vertical-align: middle;
}
.info-text .right {
  float: right;
}
</style>

<!-- CONTENT
=================================-->

<!-- /header container-->
<!-- CONTENT
=================================-->
<div class="container" style="max-width: 1200px;">
    <div class="row">
        <div class="col-xs-10" style="text-align:center;">
            <h2>– About Us –</h2></div>
        <div class="col-xs-12 col-sm-8 col-md-6">
            <div class="info-text">
                <p>We make the process of buying or selling substantially easier and faster than the norm, as the platform is built to be safe and accessible to everyone, whether you are a company or an individual,strives to provide a safe and trusted online environment to connect directly sellers and buyers without the need of having a medium or to pay any kind of commission.</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-6">
            <div class="col-xs-12">
                <figure class="snip1374"><a href="#"><img src="https://scontent.famm6-1.fna.fbcdn.net/v/t1.6435-9/116872306_626105264976293_2077094604297198385_n.jpg?_nc_cat=105&ccb=1-3&_nc_sid=174925&_nc_ohc=GogxEoOIIB8AX-Kt4BB&tn=jvgMWv8LGTaiO0S0&_nc_ht=scontent.famm6-1.fna&oh=593e448e8321d2c5c995b83ddbf36251&oe=60ADCFB7" alt="sample66" /></a></figure>
            </div>
        </div>
        <div style="clear: both;"></div>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-push-4 col-md-6 col-md-push-6">
                <div class="info-text right">
                    <p>Our vision is about making people’s lives easier and more comfortable,by making the process of buying or selling substantially easier and faster than the norm, as the platform is built to be safe and accessible to everyone, whether you are a company or an individual.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-sm-pull-8 col-md-6 col-md-pull-6">
                <div class="col-xs-12 col-sm-12">
                    <figure class="snip1374"><a href="#"><img src="https://cdn.shopify.com/s/files/1/2204/2817/files/featurette-5-1000x1000.jpg?98122347912348223" alt="sample57" /></a></figure>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
        <hr>
        <div class="row">
            <div class="col-xs-12" style="text-align:center;padding-top:25px;">
                <h3 style="padding-bottom:10px;text-transform:uppercase;">Contact us today for:</h3>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <figure class="snip0078 blue"><img src="https://cdn.shopify.com/s/files/1/2204/2817/files/hottest_trends_2-0078.jpg?1369754927576680618" alt="sampl45" />
                        <figcaption>
                            <h2>The Hottest <span> Trends</span></h2>
                        </figcaption>
                        <a href="#"></a></figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <figure class="snip0078 red"><img src="https://cdn.shopify.com/s/files/1/2204/2817/files/budget_friendly_ideas_3-0078.jpg?15005372342585381625" alt="sample50" />
                        <figcaption>
                            <h2>Budget Friendly <span>Ideas</span></h2>
                        </figcaption>
                        <a href="#"></a></figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <figure class="snip0078 yellow"><img src="https://cdn.shopify.com/s/files/1/2204/2817/files/custom_proposals_2-0078.jpg?1369754927576680618" alt="sample46" />
                        <figcaption>
                            <h2>Customized <span> Proposals</span></h2>
                        </figcaption>
                        <a href="#"></a></figure>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection