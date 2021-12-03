@extends('web.layout.main')
@section('content')
	<!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <!--<div class="overlay overlay-bg"></div>-->
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center dir-rtl">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        عن حدائق الخليج
                    </h1>
                    <p class="text-white link-nav"><a href="{{ LaravelLocalization::localizeUrl('/') }}">الرئيسية </a>  <span class="lnr lnr-arrow-left"></span><a href="#">عن حدائق الخليج </a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start info Area -->
    <section class="info-area about-area pt-60 pb-60 pr-20 pl-20">
        <div class="container">
            <div class="row align-items-center dir-rtl">
                <div class="col-lg-6 no-padding text-center mb-10">
                    <img class="img-fluid h-300 br-5" src="{{ asset('webassets/imgs/1.webp')}}" alt="">
                </div>
                <div class="col-lg-6 no-padding text-center mb-10">
                    <img class="img-fluid h-300 br-5" src="{{ asset('webassets/imgs/2.webp')}}" alt="">
                </div>
                <div class="col-lg-12 text-center pt-20">
                    <h3>حدائق الخليج لتصميم وتنسيق الحدائق</h3>
                    <br />
                    <h3 class="clr-green">{!!$company->ar_about_title!!}<br />
                </div>
                <div>
                    <h5>
                        {!!$company->ar_about!!}           </h5>
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
                <div class="col-lg-8 col-md-6 search-course-right">
                    <h3>تنسيق الحدائق </h3>
                    <h4 class="clr-green">تنسيق وتصميم الحديقة المنزلية</h4>

                </div>
                <div class="col-lg-4 col-md-6 search-course-left">
                    <h5>الحديقة المنزلية اليوم من الاماكن الهامة داخل المنزل بل تعتبر الحديقة المنزلية هي الاهم</h5>
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
            <div class="about-tabs">
                <h1 class="text-center clr-green">عن حدائق الخليج</h1>
                <div class="row dir-rtl">
                    <div class="col-md-2 mb-3">
                        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                    <div class="thumb pt-20 text-center">
                                        <img src="imgs/Group382.svg" alt="">
                                        <h5 class="clr-green pt-20">MISSION</h5>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                    <div class="thumb pt-20 text-center">
                                        <img src="imgs/Ideology.svg" alt="">
                                        <h5 class="clr-green pt-20">VISION</h5>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="value-tab" data-toggle="tab" href="#value" role="tab" aria-controls="value" aria-selected="false">
                                    <div class="thumb pt-20 text-center">
                                        <img src="imgs/Slate.svg" alt="">
                                        <h5 class="clr-green pt-20">VALUE</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-md-10">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active clr-gray" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h2>رؤيتنا</h2>
                                <h5>
                                    {!!$company->ar_vision!!}   </h5>
                            </div>
                            <div class="tab-pane fade clr-gray" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <h2>اهدافنا</h2>
                                <h5>
                                    {!!$company->ar_mission!!}        </h5>
                            </div>
                            <div class="tab-pane fade clr-gray" id="value" role="tabpanel" aria-labelledby="value-tab">
                                <h2>قيمتنا</h2>
                                <h5>
                                    {!!$company->ar_value!!}  </h5>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-8 -->
                </div>



            </div>
        </div>
    </section>
    <!-- End search-course Area -->


    <!-- /.container -->
@endsection
