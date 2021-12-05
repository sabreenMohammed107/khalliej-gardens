@extends('web.layout.main')
@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <!--<div class="overlay overlay-bg"></div>-->
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center dir-rtl">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        الاستوديو
                    </h1>
                    <p class="text-white link-nav"><a href="{{ LaravelLocalization::localizeUrl('/') }}">الرئيسية </a> <span
                            class="lnr lnr-arrow-left"></span><a href="#">الاستوديو </a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->



    <section class="portfolio section">
        <div class="container">
            <div class="row justify-content-between align-items-center pt-20 dir-rtl">
                <div class="col-lg-5 col-md-6 search-course-right">
                    <h3 class="clr-green">مكتبة الصور والفيديوهات</h3>

                </div>
                <div class="col-lg-7 col-md-6 search-course-left">
                    <div class="filters dir-rtl">
                        <ul>
                            <li class="active bg-cat1" data-filter="*">الكل</li>
                            @foreach ($categories as $row)


                                <li class="close bg-cat1" data-filter=".{{ $row->id }}" onclick="stoping()">{{ $row->ar_category ?? '' }}
                                </li>

                            @endforeach
                            <li class="pl-90"></li>
                            <li class="close bg-cat2" data-filter=".images" onclick="stoping()" ><i class="fa fa-camera-retro"></i> </li>
                            <li class="close bg-cat2" data-filter=".video" onclick="stoping()"><i class="fa fa-play"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="filters-content gallery-area course-mission-area">
                <div class="row grid dir-rtl">
                    @foreach ($galleries as $row)

                        <div
                            class="col-sm-3  all {{ $row->cat->id ?? '' }} @if ($row->type == 1)
                    images
                @else
                video
                @endif">
                            <div class="item">
                                @if ($row->type == 1)
                                <a href="imgs/counter.webp" class="img-gal">
                                    <div class="single-imgs relative">
                                        <div class="container-overlay" style="width:100%" >
                                            <div class="content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image w-100"  src="{{ asset('uploads/categories') }}/{{ $row->image }}">
                                                <div class="content-details fadeIn-bottom">
                                                    <h3 class="content-title">{{ $row->ar_title }}</h3>
                                                    <p class="content-text">{{ $row->ar_text }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @else
                                    <a class="play-btn" href="{{ $row->image }}">
                                        <div class="video-left justify-content-center align-items-center d-flex relative"
                                           >
                                            {{-- <video autoplay muted loop style=" width: 100%;
                                            height: 100%;
                                            position: absolute;
                                            object-fit: cover;
                                            z-index: 0;">
                                                <source src="{{ $row->image }}" type="video/mp4" />
                                            </video> --}}
                                            <iframe src="{{ $row->image }}" style=" width: 100%;
                                                height: 100%;
                                                position: absolute;
                                                object-fit: cover;
                                                z-index: 0;" frameborder="0"></iframe>
                                            <div>
                                                <i class="fa fa-play text-white fz-18"></i>
                                            </div>
                                        </div>
                                    </a>
                                @endif

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <!--<div class="row justify-content-between align-items-center dir-rtl">
                <a href="#" class="text-uppercase primary-btn mx-auto mt-40 mb-20">تحميل المزيد</a>
            </div>-->
        </div>
    </section>



@endsection
@section('scripts')
<script>
$(function(){
    $('.close').click(function(){
        $('iframe').attr('src', $('iframe').attr('src'));
    });
});
</script>

@endsection
