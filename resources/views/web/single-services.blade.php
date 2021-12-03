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
                <p class="text-white link-nav"><a href="{{ LaravelLocalization::localizeUrl('/') }}">الرئيسية </a>  <span class="lnr lnr-arrow-left"></span><a href="#">الخدمات </a></p>
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
                            <img class="img-fluid" src="{{ asset('uploads/service') }}/{{ $service->image }}" alt="">
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
                                <ul class="focials">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
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
                                <h3 class="clr-green">المشاركات الشائعة</h3>
                            </div>
                        </div>
                        @foreach ($servicesRand as $row)
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb hover15">
                                        <figure><img class="img-fluid" src="{{ asset('uploads/service') }}/{{ $row->image }}" alt=""></figure>
                                    </div>
                                    <div class="details">
                                        <a href="{{ LaravelLocalization::localizeUrl('/single-service/' . $row->id) }}"><h6> {{ $row->ar_name }}</h6></a>
                                        <p>
                                            {{ strip_tags(Illuminate\Support\Str::limit($row->ar_desc ?? '', $limit = 150, $end = '...')) }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                    </div>
                    <div class="single-sidebar-widget post-category-widget pl-20">
                        <div class="row justify-content-between align-items-center  pt-80 pb-20">
                            <div class="col-lg-12 col-md-6 search-course-right">
                                <h3 class="clr-green">التصنيفات</h3>
                            </div>
                        </div>
                        <ul class="cat-list">
                            @foreach ( $categories as $cat)
                            <li>
                                <a href="{{ LaravelLocalization::localizeUrl('/web-service') }}" class="d-flex justify-content-between">
                                    <h4 class="pb-10"> <i class="fa fa-chevron-left pl-3 fz-12"></i>{{$cat->ar_name}}</h4>
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
