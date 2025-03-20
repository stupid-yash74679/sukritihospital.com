@extends('layout.main')
@section('meta-content')
    <title>Sukriti Hospital – Premier Oral Surgery and Maxillofacial Care in Bharuch</title>
    <meta name="description"
          content="Experience top-notch oral surgery and maxillofacial treatments at Sukriti Hospital in Bharuch, led by the renowned Dr. Vihang Sukhadia. Offering advanced procedures including flap surgery, scar revision, and more. Book your consultation today!">
    <meta name="keywords"
          content="Oral Surgery Bharuch, Maxillofacial Surgery Bharuch, Oral Surgeon Bharuch, Dr. Vihang Sukhadia, Periodontal Flap Surgery Bharuch, Flap Surgery Bharuch, Scar Revision Surgery Bharuch, Otoplasty Bharuch, Oral Surgery Hospital Bharuch, Best Oral Surgeon Bharuch, Oral Health Services Bharuch, Dental Surgery Bharuch, Maxillofacial Surgeon Bharuch">
@endsection
@section('main-content')
    <!--page title start-->

    <section class="page-title">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>Contact</h1>
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0 text-lg-end">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="bi bi-house-door me-1"></i>Home </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--page title end-->


    <!--body content start-->

    <div class="page-content">

        <section class="section-py contact-page">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="theme-title ht-split-text">
                            <h2 data-splitting="chars">Have Any Questions? <span class="title-text d-block">Get In Touch!</span>
                            </h2>
                        </div>
                        <ul class="contact-media list-unstyled">
                            <li>
                                <i class="flaticon-location"></i>
                                <p class="mb-0">{{$BasicsInfo['address']}}</p>
                            </li>
                            <li>
                                <i class="flaticon-chat"></i>
                                <a href="mailto:{{$BasicsInfo['email']}}">{{$BasicsInfo['email']}}</a>
                            </li>
                            <li>
                                <i class="flaticon-doctor-consultation"></i>
                                <a href="tel:{{$BasicsInfo['phone-number']}}">{{$BasicsInfo['phone-number']}}</a>&nbsp; |&nbsp;
                                <a href="tel:{{$BasicsInfo['mobile-number']}}">{{$BasicsInfo['mobile-number']}}</a>
                            </li>
                            <li>
                                <i class="flaticon-working-hours"></i>
                                <div>
                                    <p class="mb-2">Mon - Sat: 09:00 AM to 1:00 PM | 05: PM to 08:30 PM</p>
                                    <p class="mb-0">Sunday: For Emergency Only</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 mt-6 mt-lg-0">
                        <div class="box-shadow p-5 rounded">
                            <form id="contact-form" method="post" action="/send-whatsapp-message">
                                <div class="messages"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <input class="form-control" id="form_name" type="text" name="txtName" placeholder="Enter Your Name" required="required" data-error="Name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <input class="form-control" id="form_phone" type="tel" name="txtPhone" placeholder="Enter Phone Number" required="required" data-error="Phone is required">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <input class="form-control" id="datepicker" type="tel" name="txtDate" placeholder="dd/mm/yyyy" required="required" data-error="Date is required">
                                            <i class="date-icon bi bi-calendar3"></i>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="txtMessage" class="form-control h-auto" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
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
            </div>
        </section>

        <section class="overflow-hidden p-0">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="map iframe-h">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14827.858522687426!2d72.9934505!3d21.7040981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be020b51aa0e305%3A0xe04de05cecdcbf4d!2sSukriti%20Hospital!5e0!3m2!1sen!2sin!4v1715324290680!5m2!1sen!2sin" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!--body content end-->
@endsection
