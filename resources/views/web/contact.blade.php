@extends('web.layout.main')
@section('content')
<!-- start banner Area -->

<section class="banner-area relative" id="home">
    <!--<div class="overlay overlay-bg"></div>-->
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center dir-rtl">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    تواصل معنا
                </h1>
                <p class="text-white link-nav"><a href="{{ LaravelLocalization::localizeUrl('/') }}">الرئيسية </a>  <span class="lnr lnr-arrow-left"></span><a href="#">تواصل معنا </a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start event-details Area -->
<section class="event-details-area contact-area">
    <div class="container">
        <div class="row pt-50 pb-50 dir-rtl">
            <div class="col-lg-4 text-center p-10-40">
                <div class="icon">
                    <span class="lnr lnr-home"></span>
                </div>
                <div>
                    <h3 class="pt-10 pb-10 clr-green">المكتب الرئيسي</h3>
                </div>
                <div>
                    <p class="clr-green">
                     {{$contact->address}}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 text-center p-10-40 v-line">
                <div class="icon">
                    <span class="lnr lnr-phone-handset"></span>
                </div>
                <div>
                    <h3 class="pt-10 pb-10 clr-green">تواصل معنا</h3>
                </div>
                <div>
                    <p class="clr-green">
                        {{$contact->phone}}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 text-center p-10-40">
                <div class="icon">
                    <span class="lnr lnr-envelope"></span>
                </div>
                <div>
                    <h3 class="pt-10 pb-10 clr-green">البريد الالكتروني</h3>
                </div>
                <div>
                    <p class="clr-green">
                        {{$contact->email}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src=" {{$contact->google_map}}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br>
        <style>
            .mapouter {
                position: relative;
                text-align: right;
                height: 500px;
                width: 100%;
            }
        </style><a href="https://www.embedgooglemap.net">google maps iframe code</a>
        <style>
            .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 500px;
                width: 100%;
            }
        </style></div></div>
    </div>
    @if(Session::has('flash_success'))
    <div class="col-lg-12">
        <div class="alert alert-success alert-block {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">
        <button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
        <strong ><i class="fa fa-check-circle"></i> {{session('flash_success') }}</strong>
        </div>
    </div>
@endif
@if(Session::has('flash_danger'))
    <div class="col-lg-12">
        <div class="alert alert-danger alert-block {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">
        <button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
        <strong ><i class="fa fa-info-circle"></i> {{session('flash_danger')}}</strong>
        </div>
    </div>
@endif
    <div class="container">
        <h4 class="text-right mt-30">تواصل معنا</h4>
        <div class="row dir-rtl mb-50">
            <div class="col-lg-8 event-details-left">
                <div class="row pl-15 pr-15">
                    <h3 class="mb-10 mt-30 clr-green">إرسال رسالة</h3>
                    <form class="contact-form" action="{{ LaravelLocalization::localizeUrl('/contact-message') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-10">
                                    <input type="text" name="name" placeholder="الإسم" onfocus="this.placeholder = ''" onblur="this.placeholder = 'الإسم'" required class="single-input">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-10">
                                    <input type="text" name="email" placeholder="البريد الالكتروني" onfocus="this.placeholder = ''" onblur="this.placeholder = 'البريد الالكتروني'" required class="single-input">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-10">
                                    <input type="text" name="mobile" placeholder="رقم التليفون" onfocus="this.placeholder = ''" onblur="this.placeholder = 'رقم التليفون'" required class="single-input">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group-icon mt-10">
                                    <div class="form-select" id="default-select">
                                        <select>
                                            <option value="1">اختار الخدمة</option>
                                            @foreach ( $types as $type)
                                            <option value="{{$type->id}}">{{$type->ar_message_type}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mt-10">
                                    <input type="text" name="address" placeholder="العنوان" onfocus="this.placeholder = ''" onblur="this.placeholder = 'العنوان'" required class="single-input">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mt-10">
                                    <textarea class="single-textarea" name="message" placeholder="الرسالة" onfocus="this.placeholder = ''" onblur="this.placeholder = 'الرسالة'" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10">
                                <button type="submit" class="primary-btn" style="float: right;">إرسال الرسالة</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End event-details Area -->
@endsection
