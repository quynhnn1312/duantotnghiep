@extends('frontend.layout.main')

@section('banner')
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Liên Hệ
                    </h1>
                    <p class="text-white link-nav">
                        <a href="{{ route('get.home.page') }}">Trang chủ </a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="{{ route('get.contact.page') }}"> Liên Hệ</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop

@section('content')
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <div class="map-wrap" style="width: 100%; height: 445px;" id="map"></div>
                <div class="col-lg-12 d-flex justify-content-between text-center address-wrap">
                    <div class="single-contact-address">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Binghamton, New York</h5>
                            <p>
                                4343 Hinkle Deegan Lake Road
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-address">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>00 (958) 9865 562</h5>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                    </div>
                    <div class="single-contact-address">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <h5><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                   data-cfemail="d4a7a1a4a4bba6a094b7bbb8bba6b8bdb6fab7bbb9">[email&#160;protected]</a></h5>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

