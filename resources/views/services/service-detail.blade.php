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
                    <h1>{{ $product['name'] }}</h1>
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0 text-lg-end">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="bi bi-house-door me-1"></i>Home </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Services</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $product['name'] }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--page title end-->


    <!--body content start-->

    <div class="page-content">
        <style>
            .card {
                display: flex;
                flex-direction: row;
                box-shadow: 0 5px 22px 0px rgba(15, 53, 103, .1);
                border-radius: 20px;
                overflow: hidden;
                opacity: 0.9;
                margin: 20px;
                --bs-card-border-width: 0px;
            }

            .card img {
                width: 100%;
                height: auto;
                object-fit: cover;
                flex: 1;
            }

            .card-content {
                padding: 20px;
                flex: 2;
                display: flex;
                flex-direction: column;
            }

            .card-content h3 {
                margin-top: 0;
            }

            .card-content p {
                text-align: justify;
                flex-grow: 1;
            }

            @media (max-width: 768px) {
                .card {
                    flex-direction: column;
                }

                .card img {
                    order: 2;
                }

                .card-content h3 {
                    order: 1;
                    text-align: center;
                }

                .card-content p {
                    order: 3;
                }
            }
        </style>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mb-6 mb-lg-0 order-lg-1">
                        <div class="service-image mb-5">
                            <img class="img-fluid rounded" src="{{ $product['banner-image'] }}"
                                alt="{{ $product['alt-text'] }}">
                        </div>
                        <h3>Best Treatment for {{ $product['name'] }} in Bharuch</h3>
                        <p>{{ $product['description'] }}</p>
                        @foreach ($product['services'] as $item)
                            <div class="card">
                                <div class="col-md-3">
                                    <img src="{{ $item['image'] }}" alt="{{ $item['alt-text'] }}">
                                </div>
                                <div class="card-content">
                                    <h3>{{ $item['name'] }}</h3>

                                    <p>{{ $item['description'] }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="service-page-sidebar">
                            <div class="service-widget">
                                <ul class="service-menu list-unstyled mb-0">
                                    @foreach ($services as $item)
                                        <li><a href="/service/{{ $item['id'] }}">{{ $item['name'] }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="service-widget">
                                <h4 class="widget-title mb-4">Book Appointment</h4>
                                <form id="contact-form" method="post"
                                    action="https://themeht.com/template/lifeplus/ltr/php/contact.php">
                                    <div class="messages"></div>
                                    <div class="form-group mb-4">
                                        <input class="form-control" id="form_name" type="text" name="name"
                                            placeholder="Your Name" required="required" data-error="Name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <input class="form-control" id="form_phone" type="tel" name="phone"
                                            placeholder="Phone Number" required="required" data-error="Phone is required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <input class="form-control" id="datepicker" type="tel" name="phone"
                                            placeholder="dd/mm/yyyy" required="required" data-error="Date is required">
                                        <i class="date-icon bi bi-calendar3"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" class="form-control h-auto" placeholder="Message" rows="4"
                                            required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="mt-5">
                                        <button class="themeht-btn primary-btn">
                                            <span>Book An Appointment</span>
                                            <i class="flaticon-plus"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!--body content end-->
@endsection
