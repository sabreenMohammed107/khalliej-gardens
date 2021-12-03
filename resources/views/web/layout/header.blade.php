<header id="header">
    <div class="container main-menu dir-rtl">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img src="{{ asset('webassets/imgs/logo.webp')}}" alt="" title="" /><span>حدائق الخليج</span></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu pl-3">
                    <li><a href="{{ LaravelLocalization::localizeUrl('/') }}" class="active">{{ __('links.home') }}</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/about') }}">عن حدائق الخليج</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/service') }}">خدمتنا</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/gallery') }}">الصور والفيديوهات</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/blogs') }}">المدونة</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/client') }}">عملائنا</a></li>
                    <li><a href="{{ LaravelLocalization::localizeUrl('/contact') }}">تواصل معنا </a></li>
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
