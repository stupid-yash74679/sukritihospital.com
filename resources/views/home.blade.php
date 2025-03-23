@extends('layout.main')
@section('meta-content')
    <title>Sukriti Hospital – Premier Oral Surgery and Maxillofacial Care in Bharuch</title>
    <meta name="description"
        content="Experience top-notch oral surgery and maxillofacial treatments at Sukriti Hospital in Bharuch, led by the renowned Dr. Vihang Sukhadia. Offering advanced procedures including flap surgery, scar revision, and more. Book your consultation today!">
    <meta name="keywords"
        content="Oral Surgery Bharuch, Maxillofacial Surgery Bharuch, Oral Surgeon Bharuch, Dr. Vihang Sukhadia, Periodontal Flap Surgery Bharuch, Flap Surgery Bharuch, Scar Revision Surgery Bharuch, Otoplasty Bharuch, Oral Surgery Hospital Bharuch, Best Oral Surgeon Bharuch, Oral Health Services Bharuch, Dental Surgery Bharuch, Maxillofacial Surgeon Bharuch">
@endsection
@section('main-content')
    <section class="p-0">
        <div class="swiper banner-swiper banner-slider banner-two">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-img" data-bg-img="/images/banner/1.webp"></div>
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="banner-text">
                                        <h1 class="mb-4">Precision <span>Maxillofacial Care</span> since 10 years</h1>
                                        <p>Explore top-tier maxillofacial surgeries at Sukriti Hospital, where Dr. Vihang
                                            Sukhadia leads with innovative care online and in-person.</p>
                                        <div class="btn-box mt-5">
                                            <a class="themeht-btn primary-btn" href="/about">
                                                <span>More About Us</span>
                                                <i class="flaticon-plus"></i>
                                            </a>
                                            <a class="themeht-btn dark-btn" href="doctor-style-01.html">
                                                <span>Contact Us</span>
                                                <i class="flaticon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-img" data-bg-img="images/banner/05.jpg"></div>
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="banner-text">
                                        <h1 class="mb-4">Restoring Function, Enhancing Lives</h1>
                                        <p>Specializing in reconstructive maxillofacial surgery, we provide personalized
                                            online consultations and expert in-person treatments.</p>
                                        <div class="btn-box mt-5">
                                            <a class="themeht-btn primary-btn" href="/about">
                                                <span>More About Us</span>
                                                <i class="flaticon-plus"></i>
                                            </a>
                                            <a class="themeht-btn dark-btn" href="javascript:void(0);" onclick="requestAppointment()">
                                                <span>Book Appointment</span>
                                                <i class="flaticon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="banner-swiper-button-next" class="swiper-button-next"></div>
            <div id="banner-swiper-button-prev" class="swiper-button-prev"></div>
        </div>
    </section>
    <div class="page-content">

        <!--services end-->

        <section>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 col-xl-7">
                        <div class="theme-title ht-split-text">
                            <h6>Our Specialized Services</h6>
                            <h2 data-splitting="chars">Comprehensive Oral Cancer and Maxillofacial Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="swiper service-swiper">
                            <div class="swiper-wrapper">
                                @foreach ($services as $item)
                                    <div class="swiper-slide">
                                        <div class="service-item style-5">
                                            <div class="service-image">
                                                <img class="img-fluid" src="{{ $item['thumbnail-image'] }}"
                                                    alt="{{ $item['alt-text'] }}">
                                            </div>
                                            <div class="service-desc">
                                                <div class="service-icon">
                                                    <i class="flaticon-radiation"></i>
                                                </div>
                                                <div class="service-title">
                                                    <h4>
                                                        <a href="/service/{{ $item['id'] }}">{{ $item['name'] }}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="service-desc-hover">
                                                <div class="service-title">
                                                    <h4>
                                                        <a href="/service/{{ $item['id'] }}">{{ $item['name'] }}</a>
                                                    </h4>
                                                </div>
                                                <ul class="list-unstyled">
                                                    @foreach ($item['services'] as $keypoint => $value)
                                                        @if ($keypoint < 4)
                                                            <li><i class="flaticon-tick"></i>{{ $value['name'] }}</li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                                <a href="/service/{{ $item['id'] }}" class="themeht-btn dark-btn mt-3">
                                                    <span>Read More</span>
                                                    <i class="flaticon-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div id="service-pagination" class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--services end-->


        <!--category start-->

        <section class="light-bg">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 col-xl-7">
                        <div class="theme-title ht-split-text">
                            <h6>Why Sukriti Hospital?</h6>
                            <h2 data-splitting="chars">Dedicated to Superior Patient Outcomes</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg col-md-6">
                        <div class="category-icon-item">
                            <div class="category-icon-box-inner">
                                <div class="category-icon-box-front">
                                    <i class="fa fa-hospital"></i>
                                    <h5>State-of-the-Art <br>Facilities</h5>
                                </div>
                                <div class="category-icon-box-back">
                                    <i class="fa fa-hospital"></i>
                                    <h5>Equipped for Advanced Surgeries</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 mt-4 mt-md-0">
                        <div class="category-icon-item">
                            <div class="category-icon-box-inner">
                                <div class="category-icon-box-front">
                                    <i class="fa fa-user-doctor"></i>
                                    <h5>Expert <br> Surgical Team</h5>
                                </div>
                                <div class="category-icon-box-back">
                                    <i class="fa fa-user-doctor"></i>
                                    <h5>Highly Qualified Professionals</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 mt-4 mt-lg-0">
                        <div class="category-icon-item">
                            <div class="category-icon-box-inner">
                                <div class="category-icon-box-front">
                                    <i class="fa fa-medal"></i>
                                    <h5>Proven <br>Track Record</h5>
                                </div>
                                <div class="category-icon-box-back">
                                    <i class="fa fa-medal"></i>
                                    <h5>Excellence in <br>Patient Care</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 mt-4 mt-lg-0">
                        <div class="category-icon-item">
                            <div class="category-icon-box-inner">
                                <div class="category-icon-box-front">
                                    <h1>600+</h1>
                                    <h5>Major <br>Surgeries</h5>
                                </div>
                                <div class="category-icon-box-back">
                                    <i class="fa fa-heartbeat"></i>
                                    <h5>End-to-End Patient Support</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 mt-4 mt-lg-0">
                        <div class="category-icon-item">
                            <div class="category-icon-box-inner">
                                <div class="category-icon-box-front">
                                    <i class="fa fa-calendar"></i>
                                    <h5>Timely Treatments</h5>
                                </div>
                                <div class="category-icon-box-back">
                                    <i class="fa fa-calendar"></i>
                                    <h5>Minimal Waiting Times</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--category end-->


        <!--about start-->

        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 position-relative">
                        <div class="about-text round-text">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%"
                                viewBox="0 0 180 180" enable-background="new 0 0 180 180" xml:space="preserve">
                                <defs>
                                    <path id="circlePath" d="M 90, 90 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 ">
                                    </path>
                                </defs>
                                <circle cx="90" cy="90" r="75" fill="none"></circle>
                                <g>
                                    <use xlink:href="#circlePath" fill="none"></use>
                                    <text>
                                        <textPath xlink:href="#circlePath">About Us • About Us • About Us • About Us •
                                        </textPath>
                                    </text>
                                </g>
                            </svg>
                        </div>
                        <div class="mt-10 pe-10 ht-img-effect">
                            <div class="ht-img-effect-image">
                                <img class="img-fluid w-100 rounded" src="/images/about/1.webp" alt="">
                            </div>
                        </div>
                        <div class="about-text2 theme-bg rounded p-5 d-inline-block">
                            <div class="counter counter-lg">
                                <div class="counter-top">
                                    <div class="counter-desc">
                                        <span class="count-number odometer odometer-auto-theme" data-count="10">
                                            <div class="odometer-inside"><span class="odometer-digit"><span
                                                        class="odometer-digit-spacer">10</span><span
                                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                                class="odometer-ribbon-inner"><span
                                                                    class="odometer-value">0</span></span></span></span></span><span
                                                    class="odometer-digit"><span
                                                        class="odometer-digit-spacer">5</span><span
                                                        class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                                class="odometer-ribbon-inner"><span
                                                                    class="odometer-value">0</span></span></span></span></span>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <h4>Years Of Experience</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-10 mt-5 mt-lg-0">
                        <div class="theme-title ht-split-text">
                            <h6>Expert Care in Bharuch</h6>
                            <h2 data-splitting="chars">We're Experienced and Trusted in <span class="title-text">Oral
                                    Surgery</span> Care.</h2>
                            <p class="mb-0">Sukriti Hospital integrates advanced technologies and expert staff to provide
                                unparalleled oral surgery services. Experience personalized care tailored to meet each
                                patient’s unique needs.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="featured-item style-3">
                                    <div class="featured-desc">
                                        <div class="featured-title">
                                            <h5>Mission</h5>
                                        </div>
                                        <p>To deliver exceptional oral health services by combining advanced surgical
                                            techniques with compassionate patient care.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="featured-item style-3">
                                    <div class="featured-desc">
                                        <div class="featured-title">
                                            <h5>Values</h5>
                                        </div>
                                        <p>We are committed to ethical practices, ongoing professional development, and
                                            staying at the forefront of the oral surgery field.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--about end-->



        <section class="p-0">
            <div class="container">
                <div class="row gx-0 rounded overflow-hidden">
                    <div class="col-lg-4 col-md-12">
                        <div class="theme-icon-box theme-bg h-100">
                            <i class="flaticon flaticon-working-hours"></i>
                            <div class="icon-right-lg">
                                <i class="flaticon flaticon-working-hours"></i>
                            </div>
                            <h4 class="text-white">Opening Hours</h4>
                            <div>
                                <div class="working-hours-item">
                                    <span class="working-day">Monday - Saturday</span>
                                    <span class="working-time">9:00 AM to 1:00 PM <br/> 5:00 PM to 8:30 PM</span>
                                </div>
                                <div class="working-hours-item">
                                    <span class="working-day">Sunday</span>
                                    <span class="working-time"> For Emergency Only </span>
                                </div>
                                <div class="working-hours-item">
                                    <span class="working-day">Emergency</span>
                                    <span class="working-time">24x7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="theme-icon-box dark-bg h-100">
                            <i class="flaticon flaticon-doctor-appointment"></i>
                            <div class="icon-right-lg">
                                <i class="flaticon flaticon-doctor-appointment"></i>
                            </div>
                            <h4 class="text-white">24x7 Care</h4>
                            <p class="text-white">Qualified doctors available six days a week, view our timetable to make
                                an appointment. 24x7 Available For Booking</p>
                            <a href="javascript:void(0);" onclick="requestAppointment()" class="themeht-btn white-btn"><span>Book Appointment Now</span><i class="flaticon-plus"></i></a>
                            <a href="https://wa.me/919879139561" class="themeht-btn white-btn"><span>Send Whatsapp</span><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="theme-icon-box secondary-bg h-100">
                            <i class="flaticon flaticon-oncology-9 text-black"></i>
                            <div class="icon-right-lg">
                                <i class="flaticon flaticon-oncology-9 text-black"></i>
                            </div>
                            <h4 class="text-black">Emergency Cases</h4>
                            <p class="text-black">Been in an accident resulting in injuries to the face, mouth, or jaw?  Every second counts. Our expert team is available around the clock to provide immediate and specialized care.</p>
                            <h3 class="mb-0 fw-bold">
                                <a href="tel:{{ $BasicsInfo['mobile-number'] }}"> {{ $BasicsInfo['mobile-number'] }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--marquee start-->

        <section>
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col">
                        <div class="swiper marquee-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="marquee-text">
                                        <i class="fa fa-hashtag"></i>
                                        <span>Periodontal Flap Surgery</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="marquee-text">
                                        <i class="fa fa-hashtag"></i>
                                        <span>Oral Surgery Procedures</span>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active">
                                    <div class="marquee-text">
                                        <i class="fa fa-hashtag"></i>
                                        <span>Scar Revision Surgery</span>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next">
                                    <div class="marquee-text">
                                        <i class="fa fa-hashtag"></i>
                                        <span>Otoplasty</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="marquee-text">
                                        <i class="fa fa-hashtag"></i>
                                        <span>Flap Surgery</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--marquee end-->


        <section class="ht-bg-move-effect" data-bg-img="images/bg/1.webp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 p-lg-10 white-bg rounded">
                        <div class="theme-title ht-split-text">
                            <h6>Appointment</h6>
                            <h2 data-splitting="chars">Book Your <span class="title-text">First Appointment</span>
                            </h2>
                        </div>
                        <form id="contact-form" method="post" action="#">
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input class="form-control" id="form_name" type="text" name="txtName"
                                            placeholder="Enter Your Name" required="required"
                                            data-error="Name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input class="form-control" id="form_phone" type="tel" name="txtPhone"
                                            placeholder="Enter Phone Number" required="required"
                                            data-error="Phone is required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <input class="form-control" id="datepicker" type="tel" name="txtDate"
                                            placeholder="dd/mm/yyyy" required="required" data-error="Date is required">
                                        <i class="date-icon bi bi-calendar3"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="txtMessage" class="form-control h-auto" placeholder="Message" rows="4"
                                            required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-5">
                                        <button class="themeht-btn primary-btn">
                                            <span>Book An Appointment</span>
                                            <i class="flaticon-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <!--team end-->
        <section>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 col-xl-7">
                        <div class="theme-title ht-split-text">
                            <h6>Gallery</h6>
                            <h2 data-splitting="chars">A Visual Journey Through <span class="title-text">Sukriti
                                    Hospital</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row popup-gallery">
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="gallery-item">
                            <img class="img-fluid" src="/images/gallery/g9.webp" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-icon">
                                    <a class="popup popup-img" href="images/gallery/g9.webp">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <img class="img-fluid" src="/images/gallery/g1.webp" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-icon">
                                    <a class="popup popup-img" href="images/gallery/g1.webp">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                        <div class="gallery-item">
                            <img class="img-fluid" src="/images/gallery/g2.webp" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-icon">
                                    <a class="popup popup-img" href="images/gallery/g2.webp">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                        <div class="gallery-item">
                            <img class="img-fluid" src="/images/gallery/g3.webp" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-icon">
                                    <a class="popup popup-img" href="images/gallery/g3.webp">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="gallery-item">
                            <img class="img-fluid" src="/images/gallery/g4.jpg" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-icon">
                                    <a class="popup popup-img" href="images/gallery/g4.jpg">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="gallery-item">
                            <img class="img-fluid" src="/images/gallery/g5.webp" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-icon">
                                    <a class="popup popup-img" href="images/gallery/g5.webp">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="gallery-item">
                            <img class="img-fluid" src="/images/gallery/g6.webp" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-icon">
                                    <a class="popup popup-img" href="images/gallery/g6.webp">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="gallery-item">
                            <img class="img-fluid" src="/images/gallery/g7.webp" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-icon">
                                    <a class="popup popup-img" href="images/gallery/g7.webp">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="gallery-item">
                            <img class="img-fluid" src="/images/gallery/g8.webp" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-icon">
                                    <a class="popup popup-img" href="images/gallery/g8.webp">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="gallery-item">
                            <img class="img-fluid" src="/images/gallery/g10.webp" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-icon">
                                    <a class="popup popup-img" href="images/gallery/g10.webp">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="gallery-item">
                            <img class="img-fluid" src="/images/gallery/g11.webp" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-icon">
                                    <a class="popup popup-img" href="images/gallery/g11.webp">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5">
                        <div class="gallery-item">
                            <img class="img-fluid" src="/images/gallery/g12.webp" alt="">
                            <div class="gallery-hover">
                                <div class="gallery-icon">
                                    <a class="popup popup-img" href="images/gallery/g12.webp">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--team end-->


        <!--case studies start-->

        <section class="py-0">
            <div class="container-fluid px-0">
                <div class="row gx-0">
                    <div class="col-lg-4 theme-bg p-8">
                        <div class="theme-title ht-split-text">
                            <h6 class="text-white">Best Treatment</h6>
                            <h2 data-splitting="chars" class="text-white">The Trusted And <span
                                    class="title-text">Friendly Oral Care </span> guaranteed </h2>
                        </div>
                        <a href="/contact   " class="themeht-btn white-btn">
                            <span>Contact Us Now</span>
                            <i class="flaticon-plus"></i>
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="swiper portfolio-swiper2">
                            <div class="swiper-wrapper">
                                @foreach ($services as $item)
                                    <div class="swiper-slide">
                                        <div class="portfolio-item style-1">
                                            <div class="portfolio-img">
                                                <img class="img-fluid" src="{{ $item['thumbnail-image'] }}"
                                                    alt="">
                                            </div>
                                            <div class="portfolio-desc">
                                                <div class="portfolio-title">
                                                    <div class="portfolio-cat">
                                                        <a href="javascript:void(0);">Best in Bharuch</a>
                                                    </div>
                                                    <h4>
                                                        <a href="/service/{{ $item['id'] }}">{{ $item['name'] }}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-nav-arrow">
                                <div id="portfolio-swiper-button-next" class="swiper-button-next"></div>
                                <div id="portfolio-swiper-button-prev" class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--case studies end-->


        <!--blog start-->

        <section>
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <div class="theme-title ht-split-text mb-0">
                            <h6>News & Blogs</h6>
                            <h2 data-splitting="chars">Read Our Latest <span class="title-text">Blog Articles</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0 text-lg-end">
                        <a class="themeht-btn primary-btn" href="blog-style-one.html"><span>See More News</span><i
                                class="flaticon-plus"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="swiper post-swiper">
                            <div class="swiper-wrapper">
                                @foreach (App\Models\BlogModel::orderBy('id', 'desc')->take(5)->get() as $blog)
                                <div class="swiper-slide">
                                    <div class="post-card style-2">
                                        <div class="post-image ht-img-effect-image">
                                            <img class="img-fluid" src="{{ $blog['thumbnail-image'] }}" alt="">
                                        </div>
                                        <div class="post-desc">
                                            <ul class="list-inline post-bottom">
                                                <li class="list-inline-item">
                                                    <i class="bi bi-calendar3"></i>
                                                    <span class="posted-on">
                                                        <a href="#">
                                                            {{ $blog['blog-date'] }}
                                                        </a>
                                                    </span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="bi bi-tag"></i>
                                                    <span class="cat-links">
                                                        <a href="#">{{ explode(',', $blog['blog-categories'])[0] }}</a>
                                                    </span>
                                                </li>
                                            </ul>
                                            <div class="post-title">
                                                <h4>
                                                    <a href="/blogs/{{ $blog['id'] }}">{{ $blog['blog-title'] }}</a>
                                                </h4>
                                            </div>
                                            <a class="themeht-link-btn" href="/blogs/{{ $blog['id'] }}"><span>Read More</span><i
                                                    class="flaticon-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div id="post-pagination" class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--blog end-->

    </div>
@endsection
