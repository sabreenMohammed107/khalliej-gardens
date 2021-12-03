<header id="header">
    <div class="container main-menu dir-rtl">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img src="{{ asset('webassets/imgs/logo.webp')}}" alt="" title="" /><span>حدائق الخليج</span></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu pl-3">
                    <li><a href="{{ LaravelLocalization::localizeUrl('/') }}" class="{{ Request::segment(1) == null ? 'active' : null }}">{{ __('links.home') }}</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/about') }}" class="{{ Request::segment(1) == 'about' ? 'active' : null }}" >عن حدائق الخليج</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/web-service') }}" class="{{ Request::segment(1) == 'web-service' ? 'active' : null }}" >خدمتنا</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/web-gallery') }}" class="{{ Request::segment(1) == 'web-gallery' ? 'active' : null }}" >الصور والفيديوهات</a></li>
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
</header>
<!-- #header -->
