@extends('web.layout.main')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <!--<div class="overlay overlay-bg"></div>-->
    <div class="container dir-rtl">
        <div class="row fullscreen d-flex align-items-center justify-content-between">
            <div class="banner-content col-lg-6 col-md-12 pt-80">
                <h1 class="text-uppercase">
                    حدائق الخليج لتصميم
                    وتنسيق الحدائق
                </h1>
                <p class="pt-10 pb-10 text-white">
                    {{$company->ar_name}}
                </p>
                <a href="{{ LaravelLocalization::localizeUrl('/web-service') }}" class="primary-btn2">خدمات حدائق الخليج</a>
                <a href="{{ LaravelLocalization::localizeUrl('/contact') }}" class="contact_link">تواصل معنا</a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- Start feature Area -->
<section class="feature-area">
    <div class="container">
        <div class="row dir-rtl">
            @foreach ( $categories as $cat)
           <div class="col-lg-3">
                <div class="single-feature">
                    <div class="container-overlay">
                        <div class="content">
                            <a href="">
                                <div class="content-overlay"></div>
                                <img class="content-image f-img" src="{{ asset('uploads/categories') }}/{{ $cat->image }}">
                                <h4 class="main-title">{{$cat->ar_name}}</h4>
                                <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title">{{$cat->ar_name}}</h3>
                                    <p class="content-text">{{$cat->ar_brief}} </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End feature Area -->
<!-- Start info Area -->
<section class="info-area pt-60 pb-60">
    <div class="container">
        <div class="row align-items-top dir-rtl">
            <div class="col-lg-6 info-area-right">
                <img class="img-fluid" src="{{ asset('webassets/imgs/about.webp')}}" alt="">
            </div>
            <div class="col-lg-6 info-area-left">
                <h3>عن حدائق الخليج</h3>
                <br />
                <h4 class="clr-green">{!!$company->ar_about_title!!} </h4>
                <h5 class="pt-20">

                  {!! strip_tags(Illuminate\Support\Str::limit($company->ar_about ?? '', $limit = 500, $end = '...')) !!}
            </h5>
            </div>
        </div>
    </div>
</section>
<!-- End info Area -->
<!-- Start search-course Area -->
<section class="search-course-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center pt-80 pb-20 dir-rtl">
            <div class="col-lg-7 col-md-6 search-course-right">
                <h3>ماذا نفعل ..</h3>
                <h4 class="clr-green">لماذا تختارنا ..</h4>

            </div>
            <div class="col-lg-5 col-md-6 search-course-left">
                <h5>
                    الخبرة الكبيرة في سابقة الاعمال
                    من تنسيق و تصميم الحدائق المنزلية و خدمات تركيب العشب الصناعي
                </h5>
            </div>
        </div>
        <div class="row pb-50 dir-rtl justify-content-between align-items-center">
            @foreach ($whyUs as $why)


            <div class="col-lg-2 p-no our-service">
                <div class="container-overlay p-no">
                    <div class="content content2">
                        <a href="#" class="text-center">
                            <div class="content-overlay content-overlay2"></div>
                            <div class="thumb pt-20">
                                <img src="imgs/Slate.svg" alt="" class="h-55">
                            </div>
                            <h5 class="pt-20 pb-20 clr-green">{{$why->en_title}}</h5>
                            <p class="sub-title">
                                {{$why->ar_brief}}                            </p>
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">{{$why->en_title}}</h3>
                                <p class="content-text">{{$why->ar_brief}} </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End search-course Area -->

<section class="portfolio section mb-80">
    <div class="container">
        <div class="row justify-content-between align-items-center pt-50 dir-rtl">
            <div class="col-lg-5 col-md-6 search-course-right">
                <h3>ماذا نفعل ..</h3>
                <h4 class="clr-green">خدمات الشركة</h4>

            </div>
            <div class="col-lg-7 col-md-6 search-course-left">
                <div class="filters dir-rtl">
                    <ul>
                        <li class="active bg-cat1" data-filter="*">الكل</li>
                        @foreach ($categories as $row)


                        <li class="bg-cat1" data-filter=".{{$row->id}}">{{$row->ar_name}}</li>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="filters-content">
            <div class="row grid">
                @foreach ($categories as $row)

                <div class="col-sm-3 all {{$row->id}}">
                    <div class="item">
                        <div class="hover07 hover13">
                            <figure><img src="{{ asset('uploads/categories') }}/{{ $row->image }}" /></figure>
                        </div>
                        <!--<img src="imgs/1.webp" alt="Work 1">-->
                        <div class="p-inner">
                            <h5><a href="#">{{ $row->ar_name }}</a></h5>
                            <div class="cat">{{ $row->ar_brief }}</div>
                            <h5 class="pt-10"><a href="#" class="btn-more">إقرأ المزيد</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

<section class="search-course-area bg-1 relative pt-80 pb-80">
    <div class="overlay overlay-bg"></div>
    <div class="counter">
        <div class="container">
            <div class="row rtl">
                @foreach ($numbers as $number)


                <div class="col-12 col-lg-3 mb-30">
                    <div class="count-up">
                        <p class="counter-count">{{$number->no_value}}</p>
                        <h3 class="text-white">{{$number->ar_name}}</h3>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

<!-- Start gallery Area -->
<section class="gallery-area pb-50">
    <div class="container">
        <div class="row justify-content-between align-items-center pt-80 dir-rtl">
            <div class="col-lg-7 col-md-6 search-course-right pb-10">
                <h3>تنسيق الحدائق </h3>
                <h4 class="clr-green">جاليري حدائق الخليج</h4>

            </div>
            <div class="col-lg-5 col-md-6 search-course-left">
                <h5>الحديقة المنزلية اليوم من الاماكن الهامة داخل المنزل بل تعتبر الحديقة المنزلية هي الاهم</h5>
            </div>
        </div>
        <div class="row dir-rtl">
            @foreach ($galleries as $row)


            <div class="col-lg-4">
                <a href="imgs/counter.webp" class="img-gal">
                    <div class="single-imgs relative">
                        <div class="container-overlay">
                            <div class="content">
                                <div class="content-overlay"></div>
                                <img class="content-image" src="{{ asset('uploads/galleries') }}/{{ $row->image }}">
                                <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title">{{ $row->ar_title }}</h3>
                                    <p class="content-text">{{ $row->ar_text }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
        <div class="row justify-content-center align-items-center">
            <a href="{{ LaravelLocalization::localizeUrl('/gallery') }}" class="primary-btn3">...المزيد</a>
        </div>
    </div>
</section>
<!-- End gallery Area -->

<section class="search-course-area bg-2 relative">
    <div class="overlay overlay-bg"></div>
    <div class="counter">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-12 col-md-6">
                    <h3 class="text-white">الخبرة الكبيرة في سابقة الاعمال
                    <br />
                        من تصميم الحدائق المنزلية
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-area mb-80">
    <div class="container">
        <div class="row justify-content-between align-items-center pt-80 pb-30 dir-rtl blog-header">
            <div class="col-lg-7 col-md-6 search-course-right pb-10">
                <h3>تنسيق الحدائق </h3>
                <h4 class="clr-green">مقالات حدائق الخليج</h4>

            </div>
            <div class="col-lg-5 col-md-6 search-course-left">
                <h5>الحديقة المنزلية اليوم من الاماكن الهامة داخل المنزل بل تعتبر الحديقة المنزلية هي الاهم</h5>
            </div>
        </div>
        <div class="row dir-rtl">
            @foreach ($blogs as $row)
            <div class="col-lg-4 col-md-6 single-blog">
                <div class="thumb hover07  hover13">
                    <figure><img class="img-fluid" src="{{ asset('uploads/blogs') }}/{{ $row->image }}" alt=""></figure>
                </div>
                <div class="text-box">
                    <a href="{{ LaravelLocalization::localizeUrl('/single-blog/' . $row->id) }}">
                        <h4 class="clr-green pt-20 pb-20">{{ $row->ar_title }}</h4>
                    </a>
                    <p>
                        {{ $row->ar_text }}
                    </p>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row justify-content-center align-items-center mt-30">
            <a href="{{ LaravelLocalization::localizeUrl('/web-blogs') }}" class="primary-btn3 text-uppercase">...المزيد</a>
        </div>
    </div>
</section>

<section class="search-course-area bg-3 relative pt-50 pb-50">
    <!--<div class="overlay overlay-bg"></div>-->
    <div id="ourclients">
        <center><h3 class="clr-green">عملاء حدائق الخليخ</h3></center>
        <div class="clients-wrap">
            <ul id="clientlogo" class="clearfix">
                @foreach ($clients as $client)
                <li>
                    <img src="{{ asset('uploads/clients') }}/{{ $client->logo }}" alt="Logo">
                </li>
                @endforeach


            </ul>
        </div>
    </div>
</section>
@endsection
