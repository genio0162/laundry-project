@extends('layouts.main')
@section('main')
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2 hero-overly" data-background="assets/img/hero/hero2.png">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>About us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? About Area  -->
        <section class="about-area2 section-padding40">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="assets/img/gallery/about1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>About company</h2>
                            </div>
                            <p class="mb-20">
                                The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!
                            </p>
                            <p class="mb-30">The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>

                            <a href="about.html" class="btn">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Services Area Start -->
        <section class="services-area border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Our Process</span>
                            <h2>This is how we work</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services-icon1.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">We collect your clothes</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services-icon2.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Wash your clothes</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services-icon3.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Get delivery</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? Want To work -->
        <section class="container">
            <section class="wantToWork-area" data-background="assets/img/gallery/section_bg01.png">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-9 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Call us for a service</h2>
                                <p>We deliver the goods to the most complicated places on earth</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="#" class="btn wantToWork-btn"><img src="assets/img/icon/call2.png" alt=""> Learn More</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- Want To work End -->
        <!--? Testimonials_start -->
        <section class="testimonials-area testimonials-overly  position-relative">
            <div class="container">
                <div class="border-bottom section-padding40 ">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <!-- testmonial-image -->
                            <div class="testmonial-nav text-center">
                                <div class="testmonial-thumb">
                                    <img src="assets/img/gallery/{{ $img }}" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="assets/img/gallery/testimonila2.png" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="assets/img/gallery/testimonila3.png" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="assets/img/gallery/testimonila2.png" alt="">
                                </div>
                            </div>
                            <div class="testmonial-item-active text-center">
                                <!-- testimonial-single-items -->
                                <div class="testmonial-item ">
                                    <p class="pera">{{ $bio }}</p>
                                    <p> {{ $name }} - {{ $position }}</p>
                                </div>
                                <!-- testimonial-single-items -->
                                <div class="testmonial-item ">
                                    <p class="pera">The automated process starts as soon as your clothes go into the<br> machine. The outcome is gleaming clothes!</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p> - Rupaya</p>
                                </div>
                                <!-- testimonial-single-items -->
                                <div class="testmonial-item ">
                                    <p class="pera">The automated process starts as soon as your clothes go into the<br> machine. The outcome is gleaming clothes!</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p> - Rupaya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials_end -->
        <!--? Company achievement Start -->
        <section class="services-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Fun Fact</span>
                            <h2>Company achievement</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-cap">
                                <span>4000</span>
                                <p>The automated process starts as soon as your clothes go into the machine.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-cap">
                                <span>300+</span>
                                <p>The automated process starts as soon as your clothes go into the machine.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-cap">
                                <span>95%</span>
                                <p>The automated process starts as soon as your clothes go into the machine.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bottom-bt">
                                <img src="assets/img/gallery/company-bg.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Company achievement End -->
        <!--?  Map Area start  -->
        <div class="Map-area">
            <img src="assets/img/gallery/Map.png" alt="" class="w-100">
        </div>
        <!-- Map Area End -->
        @endsection