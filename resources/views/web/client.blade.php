@extends('web.layout.main')
@section('content')
	<!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <!--<div class="overlay overlay-bg"></div>-->
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center dir-rtl">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        عملاء حدائق الخليج
                    </h1>
                    <p class="text-white link-nav"><a href="{{ LaravelLocalization::localizeUrl('/') }}">الرئيسية </a>  <span class="lnr lnr-arrow-left"></span><a href="#">عملائنا </a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->


    <style>
/* Slider */

.slick-slide {
margin: 50px 20px;
}

.slick-slide img {
width: 100%;
}

.slick-slider
{
position: relative;
display: block;
box-sizing: border-box;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
    user-select: none;
-webkit-touch-callout: none;
-khtml-user-select: none;
-ms-touch-action: pan-y;
touch-action: pan-y;
-webkit-tap-highlight-color: transparent;
margin-top:-50px;
}

.slick-list
{
position: relative;
display: block;
overflow: hidden;
margin: 0;
padding: 0;
}
.slick-list:focus
{
outline: none;
}
.slick-list.dragging
{
cursor: pointer;
cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
-webkit-transform: translate3d(0, 0, 0);
-moz-transform: translate3d(0, 0, 0);
-ms-transform: translate3d(0, 0, 0);
 -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.slick-track
{
position: relative;
top: 0;
left: 0;
display: block;
}
.slick-track:before,
.slick-track:after
{
display: table;
content: '';
}
.slick-track:after
{
clear: both;
}
.slick-loading .slick-track
{
visibility: hidden;
}

.slick-slide
{
display: none;
float: left;
height: 100%;
min-height: 1px;
}
[dir='rtl'] .slick-slide
{
float: right;
}
.slick-slide img
{
display: block;
}
.slick-slide.slick-loading img
{
display: none;
}
.slick-slide.dragging img
{
pointer-events: none;
}
.slick-initialized .slick-slide
{
display: block;
}
.slick-loading .slick-slide
{
visibility: hidden;
}
.slick-vertical .slick-slide
{
display: block;
height: auto;
border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
display: none;
}
    </style>
    <div class="container">
        <section class="customer-logos slider bg-white">
            @foreach ($clients as $client)

                <div class="slide"><img style="height: 120px" src="{{ asset('uploads/clients') }}/{{ $client->logo }}"></div>

            @endforeach

        </section>
    </div>

    <!-- Start upcoming-event Area -->
    <section class="upcoming-event-area clients-sec">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10 pt-50 clr-green">عملاء حدائق الخليج</h1>
                        <p> عملاء حدائق الخليج سعداء بتقديم أفضل خدماتنا لعملاء حدائق الخليج</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-upcoming-event-carusel">
                    @foreach ($clients as $client)
                    <div class="single-carusel row align-items-center dir-rtl">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" style="height: 200px"  src="{{ asset('uploads/clients') }}/{{ $client->logo }}" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>عميل مميز</p>
                            <a href="#">
                                <h4 class="clr-green">{{$client->ar_name}}</h4>
                                <h6>{{$client->ar_brief}} </h6>
                            </a>
                            <p>
                                {{$client->ar_overview}}                            </p>
                        </div>
                    </div>
                 @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End upcoming-event Area -->


<style>
.client-img{height:100px;}
.clients-sec .widget-wrap .single-sidebar-widget{
margin:0 30px;
}
.clients-sec .widget-wrap .user-info-widget a h4{
margin-top:5px;
color:#2bbd61;
font-size:20px;
}
.clients-sec .sidebar-widgets{
padding-bottom:30px;
}
.clients-sec .thumb img{
border-radius:.5rem;
}
.clients-sec .detials h6{
font-size:20px;
color:#808080;
padding-bottom:5px;
}
.clients-sec .detials p{
color:#808080;
}
</style>
    <section class="post-content-area single-post-area clients-sec">
        <div class="container">
            <div class="row dir-rtl">
                @foreach ($clientsRand as $client)
                <div class="col-lg-3 sidebar-widgets">
                    <div class="widget-wrap bg-white">
                        <div class="single-sidebar-widget user-info-widget">
                            <img class="client-img w-100"  src="{{ asset('uploads/clients') }}/{{ $client->logo }}" alt="">

                            {{-- <img class="client-img" src="imgs/37.webp" alt=""> --}}
                            <a href="#"><h4>{{$client->ar_name}}</h4></a>
                            <ul class="social-links">
                                <li><a href="{{$client->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$client->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$client->instgram}}"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{$client->youtube}}"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                            <p>
                                {{$client->ar_brief}}                            </p>
                            <p>
                                {{$client->ar_overview}}                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row justify-content-center align-items-center mt-30">
                {{-- <a href="blog.html" class="primary-btn text-uppercase">...تحميل المزيد</a> --}}
            </div>
        </div>
    </section>

@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
			<script>
				$(document).ready(function () {
					$('.customer-logos').slick({
						slidesToShow: 6,
						slidesToScroll: 1,
						autoplay: true,
						autoplaySpeed: 1500,
						arrows: false,
						dots: false,
						pauseOnHover: false,
						responsive: [{
							breakpoint: 768,
							settings: {
								slidesToShow: 4
							}
						}, {
							breakpoint: 520,
							settings: {
								slidesToShow: 3
							}
						}]
					});
				});
			</script>
@endsection
