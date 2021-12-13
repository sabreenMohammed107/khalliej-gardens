<!-- start footer Area -->
<footer class="footer-area pt-50">
    <div class="container">
        <div class="row dir-rtl">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>عن حدائق الخليج</h4>
                    <p class="text-white">
                        لقدد حققت مؤسسة فهد الحكير نجاحاً منذ تأسيسها من حيث نوعة الخدمة، ومعايير الجودة، وتقديم القيمة، ورضى العملاء قد ساهمت في رفع ثقة العملاء ونحن فخورون بما نقدمه من خدمة، لأننا نعلم بأن قيمنا لا تقبل المساومة ولأننا نؤمن بأن الجودة هى معيار التميز .</p>
                </div>
                <div class="footer-bottom row align-items-center justify-content-between dir-rtl mb-20">
                    <div class="col-lg-12 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>روابط سريعة</h4>
                    <ul>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/') }}">الرئيسية</a></li>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/web-blogs') }}">المقالات</a></li>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/web-service') }}">الخدمات</a></li>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/web-gallery') }}">مكتبة الصور والفيديوهات</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4 style="color:#2A5C26">.</h4>
                    <ul>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/web-client') }}">العملاء</a></li>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/about') }}">عن الشركة</a></li>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/contact') }}">تواصل معنا</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>تواصل معنا</h4>
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col-lg-1"><i class="fa fa-map-marker"></i></div>
                                <div class="col-lg-11"><a href="#" class="clr-green">الموقع<br /></a><span>{{$contact->address}}</span></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-lg-1"><i class="fa fa-mobile"></i></div>
                                <div class="col-lg-11 "><a href="tel:+1117615935" class="clr-green">الهاتف<br /></a><span>{{$contact->phone}}</span></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-lg-1"><i class="fa fa-whatsapp"></i></div>
                                <div class="col-lg-11"><a href="#" class="clr-green">البريد الإلكترونى<br /></a><span>{{$contact->email}}</span></div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom align-items-center justify-content-between pb-7 ff-1 dir-rtl" style="background-color:#1A4416;">
        <p class="footer-text text-center text-white">
            جميع الحقوق محفوظة &copy;
            <script>document.write(new Date().getFullYear());</script>  حدائق الخليج |  تمت البرمجة   بواسطة <a href="#" target="_blank">Senior Consulting</a>
        </p>
    </div>
</footer>
<!-- End footer Area -->
