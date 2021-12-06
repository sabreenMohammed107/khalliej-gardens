@extends('web.layout.main')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <!--<div class="overlay overlay-bg"></div>-->
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center dir-rtl">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    الخدمات
                </h1>
                <p class="text-white link-nav"><a href="{{ LaravelLocalization::localizeUrl('/') }}">الرئيسية </a>  <span class="lnr lnr-arrow-left"></span><a href="#">جدمات حدائق الخليج </a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
	<!-- Start event-details Area -->
    <section class="event-details-area mt-40 mb-40 blog-area">
        <div class="container">
            <div class="row dir-rtl">
                <div class="col-lg-8 event-details-left mb-20">
                    <div class="bg-white">
                        <div class="main-img">
                            <img class="img-fluid w-100" src="{{ asset('uploads/service') }}/{{ $service->image }}" alt="">
                        </div>
                        <div class="details-content p-10-40">
                            <a href="#">
                                <h4 class="clr-green">{{ $service->ar_name }}</h4>
                            </a>
                            <h5>
                                {!! $service->ar_desc  !!}    </h5>
                        </div>
                        <div class="social-nav row no-gutters p-10-40">
                            <div class="col-lg-6 col-md-6 ">
                                <?php

                                // $blogId = $blog->id;
                                if( LaravelLocalization::getCurrentLocale() === "en"){

                                    $url = 'http://khalliej-gardens.senior-consultingco.com/en/single-service/'.$service->id;
                                }else{
                                    $url = 'http://khalliej-gardens.senior-consultingco.com/single-service/'.$service->id;
                                }


                                ?>
                                                            <ul  class="focials">
                                                                <li class="ftco-animate"><a <a href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}"  target="popup" onclick="window.open('https://twitter.com/intent/tweet?url={{ urlencode($url) }}','popup','width=600,height=600'); return false;" class="border-white"><i class="fa fa-twitter"></i></a></li>
                                                                <li class="ftco-animate"><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="popup" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u={{urlencode($url)}}','popup','width=600,height=600'); return false;" class="border-white"><i class="fa fa-facebook"></i></a></li>

                                                                <li class="ftco-animate"> <a href="https://wa.me/?text={{ urlencode($url) }}"  target="popup" onclick="window.open('https://wa.me/?text={{ urlencode($url) }}','popup','width=600,height=600'); return false;" class="border-white"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                                                </li>
                                                            </ul>
                                {{-- <ul class="focials">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul> --}}
                            </div>
                            <div class="col-lg-6 col-md-6 navs mb-20">

                                <a href="@if(App\Models\Service::where('id',$previous)->first()) {{ LaravelLocalization::localizeUrl('/single-service/' . $previous) }}  @endif" class="nav-prev"><span class="lnr lnr-arrow-right"></span>الخدمة السابقة</a>
                                <a href="@if(App\Models\Service::where('id',$next)->first()) {{ LaravelLocalization::localizeUrl('/single-service/' . $next) }}  @endif " class="nav-next">الخدمة التالية<span class="lnr lnr-arrow-left"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sidebar-widgets">
                    <div class="popular-post-list">
                        <div class="row justify-content-between align-items-center pb-20">
                            <div class="col-lg-12 col-md-6 search-course-right">
                                <h3 class="clr-green">أعمال حدائق الخليج</h3>
                            </div>
                        </div>
                        @foreach ($servicesRand as $row)
                        <div class="single-post-list d-flex flex-row align-items-center">
                            <div class="thumb hover15 w-50">
                                <figure><img class="img-fluid w-100" style="height:120px;width:100%" src="{{ asset('uploads/service') }}/{{ $row->image }}" alt=""></figure>
                            </div>
                            <div class="details">
                                <a href="{{ LaravelLocalization::localizeUrl('/single-service/' . $row->id) }}"><p style="margin: 0"> {{ $row->ar_name }}</p></a>
                                {{-- <span>
                                    {!! Illuminate\Support\Str::limit($row->ar_desc ?? '', $limit = 35, $end = '...') !!}
                                </span> --}}
                            </div>
                        </div>

                        @endforeach


                    </div>
                    <div class="single-sidebar-widget post-category-widget pl-20">
                        <div class="row justify-content-between align-items-center  pt-80 pb-20">
                            <div class="col-lg-12 col-md-6 search-course-right">
                                <h3 class="clr-green">خدمات حدائق الخليج</h3>
                            </div>
                        </div>
                        <ul class="cat-list">
                            @foreach ( $categories as $cat)
                            <li>
                                <a  href="{{ LaravelLocalization::localizeUrl('/web-service') }}" class="d-flex justify-content-between">
                                    <h4 style="color: #333;font-size:20px" class="pb-10"> <i class="fa fa-chevron-left pl-3 fz-12"></i>{{$cat->ar_name}}</h4>
                                </a>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End event-details Area -->
@endsection
