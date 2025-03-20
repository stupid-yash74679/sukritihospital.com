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
                    <h1>News & Media</h1>
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0 text-lg-end">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="bi bi-house-door me-1"></i>Home </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">News</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">News & Media</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--page title end-->


    <!--body content start-->

    <div class="page-content">

        <!--team end-->

        <section>
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="post-card style-2">
                            <div class="post-image ht-img-effect-image">
                                <img class="img-fluid" src="{{$item['thumbnail-image']}}" alt="">
                            </div>
                            <div class="post-desc">
                                <ul class="list-inline post-bottom">
                                    <li class="list-inline-item">
                                        <i class="bi bi-calendar3"></i>
                                        <span class="posted-on">
                                            <a href="#">{{ $item['blog-date'] }}</a>
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="bi bi-tag"></i>
                                        <span class="cat-links">
                                            <a href="#">{{ explode(',', $item['blog-categories'])[0] }}</a>
                                        </span>
                                    </li>
                                </ul>
                                <div class="post-title">
                                    <h4>
                                        <a href="/blogs/{{ $item['id'] }}">{{ $item['blog-title'] }}</a>
                                    </h4>
                                </div>
                                <a class="themeht-link-btn" href="/blogs/{{ $item['id'] }}">
                                    <span>Read More</span>
                                    <i class="flaticon-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!--team end-->

    </div>

    <!--body content end-->
@endsection
