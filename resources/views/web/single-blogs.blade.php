@extends('web.layout.main')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <!--<div class="overlay overlay-bg"></div>-->
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center dir-rtl">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    المدونة
                </h1>
                <p class="text-white link-nav"><a href="{{ LaravelLocalization::localizeUrl('/') }}">الرئيسية </a>  <span class="lnr lnr-arrow-left"></span><a href="#">المدونة </a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
	<!-- Start event-details Area -->
    <section class="event-details-area mt-40 mb-40 blog-area">
        <div class="container">
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
            <div class="row dir-rtl">
                <div class="col-lg-8 event-details-left mb-20">
                    <div class="bg-white">
                        <div class="main-img">
                            <img class="img-fluid  w-100" src="{{ asset('uploads/blogs') }}/{{ $blog->image }}" alt="{{ $blog->image }}">
                        </div>
                        <div class="details-content p-10-40">
                            <a href="#">
                                <h4 class="clr-green"> {{ $blog->ar_title }}</h4>
                            </a>
                            <h5>
                                {!! $blog->ar_text  !!}    </h5>
                        </div>
                        <div class="social-nav row no-gutters p-10-40">
                            <div class="col-lg-6 col-md-6 ">
                                <?php

                                // $blogId = $blog->id;
                                if( LaravelLocalization::getCurrentLocale() === "en"){

                                    $url = 'http://khalliej-gardens.senior-consultingco.com/en/single-blog/'.$blog->id;
                                }else{
                                    $url = 'http://khalliej-gardens.senior-consultingco.com/single-blog/'.$blog->id;
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

                                <a href="@if(App\Models\Blog::where('id',$previous)->first()) {{ LaravelLocalization::localizeUrl('/single-blog/' . $previous) }}  @endif" class="nav-prev"><span class="lnr lnr-arrow-right"></span>الخدمة السابقة</a>
                                <a href="@if(App\Models\Blog::where('id',$next)->first()) {{ LaravelLocalization::localizeUrl('/single-blog/' . $next) }}  @endif " class="nav-next">الخدمة التالية<span class="lnr lnr-arrow-left"></span></a>
                            </div>
                        </div>

                    </div>
                    {{-- comment --}}
                    <div class="row pl-15 pr-15">
                        <h3 class="mb-10 mt-30 clr-green">راسل إدارة الموقع </h3>

                            <form  action="{{ LaravelLocalization::localizeUrl('/send-Comment') }}" method="post">
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
                                {{-- <div class="col-lg-6">
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
                                </div> --}}
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
                                    <button type="submit" class="genric-btn primary-btn" style="float: right;">إرسال الرسالة</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- end --}}
                </div>
                <div class="col-lg-4 sidebar-widgets">
                    <div class="popular-post-list">
                        <div class="row justify-content-between align-items-center pb-20">
                            <div class="col-lg-12 col-md-6 search-course-right">
                                <h3 class="clr-green">مدونات حدائق الخليج</h3>
                            </div>
                        </div>
                        @foreach ($blogsRand as $row)
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb hover15 w-50">
                                        <figure><img class="img-fluid w-100" style="height:120px;width:100%" src="{{ asset('uploads/blogs') }}/{{ $row->image }}" alt="{{ $row->image }}"></figure>
                                    </div>
                                    <div class="details">
                                        <a href="{{ LaravelLocalization::localizeUrl('/single-blog/' . $row->id) }}"><p style="color: #333">{{ $row->ar_title }}</p></a>
                                        {{-- <p>
                                            {!! Illuminate\Support\Str::limit($row->ar_text ?? '', $limit = 35, $end = '...') !!}
                                        </p> --}}
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
                                <a href="{{ LaravelLocalization::localizeUrl('/web-service') }}" class="d-flex justify-content-between">
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
