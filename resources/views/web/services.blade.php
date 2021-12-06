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
    <!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row dir-rtl">
						<div class="col-lg-8 posts-list">
                            @foreach ( $categories as $cat)
							<div class="blog-area">

                                @if(count($cat->service) >= 1)
								<div class="row justify-content-between align-items-center pb-30">
									<div class="col-lg-12 col-md-6 search-course-right">
										<h3 class="clr-green">{{$cat->ar_name}}</h3>
									</div>
								</div>
                                @endif
								<div class="row dir-rtl pb-30">
                                    @foreach ( $cat->service as $service)
									<div class="col-lg-4 col-md-6 single-blog pb-30">
										<div class="thumb hover14 hover07">
											<figure><img class="img-fluid" style="height: 280PX" src="{{ asset('uploads/service') }}/{{ $service->image }}" alt=""></figure>
										</div>
										<div class="text-box">
											<a href="{{ LaravelLocalization::localizeUrl('/single-service/' . $service->id) }}">
												<h4 class="clr-green pt-20 pb-20"> {{ $service->ar_name }}</h4>
											</a>
											<p>
                                                {!! Illuminate\Support\Str::limit($service->ar_desc ?? '', $limit = 80, $end = '...') !!}
											</p>
											<h4><a href="{{ LaravelLocalization::localizeUrl('/single-service/' . $service->id) }}" class="clr-green">إقراء المزيد &gt;&gt;</a></h4>
										</div>
									</div>
                                    @endforeach


								</div>
							</div>
                            @endforeach

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
			<!-- End post-content Area -->
    @endsection
