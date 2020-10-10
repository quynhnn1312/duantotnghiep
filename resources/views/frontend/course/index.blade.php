@extends('frontend.layout.main')

@section('banner')
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Khóa học
                    </h1>
                    <p class="text-white link-nav">
                        <a href="{{ route('get.home.page') }}">Trang chủ </a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="{{ route('get.course.page') }}"> Khóa học</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop

@section('content')
    <section class="popular-courses-area section-gap courses-page">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Popular Courses we offer</h1>
                        <p>There is a moment in the life of any aspiring.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="single-popular-carusel col-lg-3 col-md-6">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid"  src="{{ asset('frontends/img/p1.jpg')}}" alt="" />
                        </div>
                        <div class="meta d-flex justify-content-between">
                            <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                            <h4>$150</h4>
                        </div>
                    </div>
                    <div class="details">
                        <a href="course-details.html">
                            <h4>
                                Learn Designing
                            </h4>
                        </a>
                        <p>
                            When television was young, there was a hugely popular show based on the still popular fictional characte
                        </p>
                    </div>
                </div>
                <div class="single-popular-carusel col-lg-3 col-md-6">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid"  src="{{ asset('frontends/img/p2.jpg')}}" alt="" />
                        </div>
                        <div class="meta d-flex justify-content-between">
                            <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                            <h4>$150</h4>
                        </div>
                    </div>
                    <div class="details">
                        <a href="course-details.html">
                            <h4>
                                Learn React js beginners
                            </h4>
                        </a>
                        <p>
                            When television was young, there was a hugely popular show based on the still popular fictional characte
                        </p>
                    </div>
                </div>
                <div class="single-popular-carusel col-lg-3 col-md-6">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid"  src="{{ asset('frontends/img/p3.jpg')}}" alt="" />
                        </div>
                        <div class="meta d-flex justify-content-between">
                            <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                            <h4>$150</h4>
                        </div>
                    </div>
                    <div class="details">
                        <a href="course-details.html">
                            <h4>
                                Learn Photography
                            </h4>
                        </a>
                        <p>
                            When television was young, there was a hugely popular show based on the still popular fictional characte
                        </p>
                    </div>
                </div>
                <div class="single-popular-carusel col-lg-3 col-md-6">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid"  src="{{ asset('frontends/img/p4.jpg')}}" alt="" />
                        </div>
                        <div class="meta d-flex justify-content-between">
                            <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                            <h4>$150</h4>
                        </div>
                    </div>
                    <div class="details">
                        <a href="course-details.html">
                            <h4>
                                Learn Surveying
                            </h4>
                        </a>
                        <p>
                            When television was young, there was a hugely popular show based on the still popular fictional characte
                        </p>
                    </div>
                </div>
                <div class="single-popular-carusel col-lg-3 col-md-6">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid"  src="{{ asset('frontends/img/p1.jpg')}}" alt="" />
                        </div>
                        <div class="meta d-flex justify-content-between">
                            <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                            <h4>$150</h4>
                        </div>
                    </div>
                    <div class="details">
                        <a href="course-details.html">
                            <h4>
                                Learn Designing
                            </h4>
                        </a>
                        <p>
                            When television was young, there was a hugely popular show based on the still popular fictional characte
                        </p>
                    </div>
                </div>
                <div class="single-popular-carusel col-lg-3 col-md-6">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid"  src="{{ asset('frontends/img/p2.jpg')}}" alt="" />
                        </div>
                        <div class="meta d-flex justify-content-between">
                            <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                            <h4>$150</h4>
                        </div>
                    </div>
                    <div class="details">
                        <a href="course-details.html">
                            <h4>
                                Learn React js beginners
                            </h4>
                        </a>
                        <p>
                            When television was young, there was a hugely popular show based on the still popular fictional characte
                        </p>
                    </div>
                </div>
                <div class="single-popular-carusel col-lg-3 col-md-6">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid"  src="{{ asset('frontends/img/p3.jpg')}}" alt="" />
                        </div>
                        <div class="meta d-flex justify-content-between">
                            <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                            <h4>$150</h4>
                        </div>
                    </div>
                    <div class="details">
                        <a href="course-details.html">
                            <h4>
                                Learn Photography
                            </h4>
                        </a>
                        <p>
                            When television was young, there was a hugely popular show based on the still popular fictional characte
                        </p>
                    </div>
                </div>
                <div class="single-popular-carusel col-lg-3 col-md-6">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid"  src="{{ asset('frontends/img/p4.jpg')}}" alt="" />
                        </div>
                        <div class="meta d-flex justify-content-between">
                            <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                            <h4>$150</h4>
                        </div>
                    </div>
                    <div class="details">
                        <a href="course-details.html">
                            <h4>
                                Learn Surveying
                            </h4>
                        </a>
                        <p>
                            When television was young, there was a hugely popular show based on the still popular fictional characte
                        </p>
                    </div>
                </div>
                <a href="#" class="primary-btn text-uppercase mx-auto">Load More Courses</a>
            </div>
        </div>
    </section>

    <section class="search-course-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-6 search-course-left">
                    <h1 class="text-white">
                        Get reduced fee <br />
                        during this Summer!
                    </h1>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
                        especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond
                        reproach.
                    </p>
                    <div class="row details-content">
                        <div class="col single-detials">
                            <span class="lnr lnr-graduation-hat"></span>
                            <a href="#">
                                <h4>Expert Instructors</h4>
                            </a>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                        <div class="col single-detials">
                            <span class="lnr lnr-license"></span>
                            <a href="#">
                                <h4>Certification</h4>
                            </a>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 search-course-right section-gap">
                    <form class="form-wrap" action="#">
                        <h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4>
                        <input type="text" class="form-control" name="name" placeholder="Your Name"
                               onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''"
                               onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Your Name'"
                               data-cf-modified-9456ced4f7d0dc2610d34f1f-="" />
                        <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number"
                               onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''"
                               onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Your Phone Number'"
                               data-cf-modified-9456ced4f7d0dc2610d34f1f-="" />
                        <input type="email" class="form-control" name="email" placeholder="Your Email Address"
                               onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''"
                               onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Your Email Address'"
                               data-cf-modified-9456ced4f7d0dc2610d34f1f-="" />
                        <div class="form-select" id="service-select">
                            <select>
                                <option datd-display="">Choose Course</option>
                                <option value="1">Course One</option>
                                <option value="2">Course Two</option>
                                <option value="3">Course Three</option>
                                <option value="4">Course Four</option>
                            </select>
                        </div>
                        <button class="primary-btn text-uppercase">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop

