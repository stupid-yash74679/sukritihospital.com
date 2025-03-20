<header id="site-header" class="header">
    <div class="header-top">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <div class="topbar-link">
                        <ul class="list-inline">
                            <li>
                                <i class="flaticon-working-hours"></i>
                                <span>Monday - Saturday 09:00 AM to 1:00 PM | 5:00 PM to 8:30 PM</span>
                            </li>
                            <li>
                                <i class="flaticon-location"></i>
                                <span>RK Casta, Station Road, Bharuch (GJ)</span>
                            </li>
                            <li>
                                <i class="flaticon-chat"></i>
                                <a href="tel:{{ $BasicsInfo['mobile-number'] }}">{{ $BasicsInfo['mobile-number'] }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 d-flex align-items-center justify-content-lg-end mt-3 mt-lg-0">
                    <div class="social-icons">
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/sukritihospital">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/sukritihospital/">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/919879139561">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-wrap">
        <div class="container-fluid p-0">
            <div class="row">
                <!--menu start-->
                <div class="col">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand logo" href="/">
                            <img src="/images/logo.webp" alt="" width="100%" height="100px">
                        </a>
                        <button class="navbar-toggler ht-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <svg width="100" height="100" viewBox="0 0 100 100">
                                <path class="line line1"
                                    d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
                                </path>
                                <path class="line line2" d="M 20,50 H 80"></path>
                                <path class="line line3"
                                    d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
                                </path>
                            </svg>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item "><a class="nav-link" href="/">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                        data-bs-toggle="dropdown">About Us</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/story">Our Story</a></li>
                                        <li><a href="/drvinhangsukhadia">Dr. Vihang Sukhadia</a></li>
                                        <li><a href="/gallery">Gallery</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Services</a>
                                    <ul class="dropdown-menu">
                                        @foreach ($services as $item)
                                            <li><a href="/service/{{ $item['id'] }}">{{ $item['name'] }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item "><a class="nav-link" href="/testimonials">Testimonials</a></li>
                                <li class="nav-item "><a class="nav-link" href="/blogs">News & Media</a></li>
                                <li class="nav-item "><a class="nav-link" href="/contact">Contact Us</a></li>

                            </ul>
                        </div>
                        <div class="right-nav align-items-center d-flex justify-content-end">
                            <a class="themeht-btn primary-btn" href="{{ $BasicsInfo['appointment-link'] }}">
                                <span>Book Appointment </span>
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </nav>
                </div>
                <!--menu end-->
            </div>
        </div>
    </div>
</header>
