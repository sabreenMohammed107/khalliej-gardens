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

    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row dir-rtl">
                <div class="col-lg-8 posts-list">
                    <div class="events-list-area event-page-lists">
                        <div class="row align-items-center">
                            @foreach ($blogs as $blog)
                            <div class="col-lg-12">
                                <div class="single-carusel row align-items-center">
                                    <div class="col-12 col-md-5 thumb hover07 hover14">
                                        <figure><img class="img-fluid " src="{{ asset('uploads/blogs') }}/{{ $blog->image }}" alt=""></figure>
                                    </div>
                                    <div class="detials col-12 col-md-7">
                                        <a href="{{ LaravelLocalization::localizeUrl('/single-blog/' . $blog->id) }}">
                                            <h4 class="clr-green">
                                                {{ $blog->ar_title }}
                                            </h4>
                                        </a>
                                        <h5>
                                            {!! Illuminate\Support\Str::limit(($blog->ar_text),  $limit = 100, $end = '...') !!}
                                            {{-- {{ $blog->ar_text }} --}}
                                        </h5>
                                        <h4 class="pt-10"><a href="{{ LaravelLocalization::localizeUrl('/single-blog/' . $blog->id) }}" class="clr-green fz-18">إقراء المزيد &gt;&gt;</a></h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            {{ $blogs->links("pagination::bootstrap-4") }}
                            {{-- <li class="page-item p-no"><a href="#" class="page-link">01</a></li>
                            <li class="page-item p-no active"><a href="#" class="page-link">02</a></li>
                            <li class="page-item p-no"><a href="#" class="page-link">03</a></li>
                            <li class="page-item p-no"><a href="#" class="page-link">04</a></li> --}}

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 sidebar-widgets">
                    <div class="popular-post-list">
                        <div class="row justify-content-between align-items-center pb-20">
                            <div class="col-lg-12 col-md-6 search-course-right">
                                <h3 class="clr-green"> مدونات حدائق الخليج</h3>
                            </div>
                        </div>
                        @foreach ($blogsRand as $blog)
                        <div class="single-post-list d-flex flex-row align-items-center">
                            <div class="thumb hover15">
                                <figure><img class="img-fluid" src="{{ asset('uploads/blogs') }}/{{ $blog->image }}" alt=""></figure>
                            </div>
                            <div class="details">
                                <a href="{{ LaravelLocalization::localizeUrl('/single-blog/' . $blog->id) }}"><span style="color: #333">{{ $blog->ar_title }}</span></a>
                                <p>
                                    {!! Illuminate\Support\Str::limit($blog->ar_text ?? '', $limit = 35, $end = '...') !!}
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
    <!-- End post-content Area -->
@endsection
