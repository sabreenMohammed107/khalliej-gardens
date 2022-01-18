<header id="header">
    <div class="container main-menu dir-rtl">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img src="{{ asset('webassets/imgs/logo.webp')}}" alt="{{ asset('webassets/imgs/logo.webp')}}" title="" /><span>حدائق الخليج</span></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu pl-3">
                    <li><a href="{{ LaravelLocalization::localizeUrl('/') }}" class="{{ Request::segment(1) == null ? 'active' : null }}">{{ __('links.home') }}</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/about') }}" class="{{ Request::segment(1) == 'about' ? 'active' : null }}" >عن حدائق الخليج</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/web-service') }}" class="{{ Request::segment(1) == 'web-service' ? 'active' : null }}" >خدمتنا</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/web-gallery') }}" class="{{ Request::segment(1) == 'web-gallery' ? 'active' : null }}" >مكتبة الصور والفيديوهات</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/web-blogs') }}" class="{{ Request::segment(1) == 'web-blogs' ? 'active' : null }}" >المدونة</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/web-client') }}" class="{{ Request::segment(1) == 'web-client' ? 'active' : null }}" >عملائنا</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/contact') }}" class="{{ Request::segment(1) == 'contact' ? 'active' : null }}" >تواصل معنا </a></li>
                    {{-- @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        @if (LaravelLocalization::getCurrentLocale() != 'ar' && $localeCode == 'ar')
                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                        <!--{{ $properties['native'] }}-->

                        {{ __('links.ar') }}
                    </a>

                        @endif
                        @if (LaravelLocalization::getCurrentLocale() != 'en' && $localeCode == 'en')
                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                        {{ __('links.en') }} </a>

                        @endif
                        <!--|-->
                    </li>
                @endforeach --}}

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>

    </div>
    <a href="https://api.whatsapp.com/send?phone=+966547463140&text=khalliej-gardens" class="float-whatsapp" target="_blank">
        <i class="fa fa-whatsapp icon-whatsapp"></i>
    </a>
    <a href="tel:+966547463140" class="float-phone" target="_blank">
        <i class="fa fa-phone icon-phone"></i>
    </a>
    <style>
        .float-whatsapp{
	position:fixed;
	width:60px;
	height:60px;
	top:220px;
	left:30px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.icon-whatsapp{
	margin-top:16px;
}
.float-whatsapp:hover i{
color: #1A4416;
}
.float-phone{
	position:fixed;
	width:60px;
	height:60px;
	top:150px;
	left:30px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}
.float-phone:hover i{
color: #1A4416;
}
.icon-phone{
	margin-top:16px;
}
    </style>
</header>
<!-- #header -->
