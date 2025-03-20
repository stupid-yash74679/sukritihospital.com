<footer class="footer">
    <div class="primary-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 pe-lg-5">
                    <a class="footer-logo d-inline-block logo mb-5" href="/">
                        <img class="img-fluid" src="/images/logo-white.webp" alt="Logo Img">
                    </a>
                    <div class="footer-subscribe">
                        <div class="mc4wp-form-fields">
                            <form id="newsletter-form" method="post" action="#">
                                <div class="subscribe-form">
                                    <input type="email" name="email" placeholder="Your Email Address"
                                        required="">
                                    <button type="submit" value="Sign up">
                                        <i class="bi bi-bell"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="list-inline ps-0 ms-0 social-icons footer-social">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/sukritihospital">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/sukritihospital/">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://wa.me/919879139561">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                    <a class="themeht-btn white-btn" href="{{ $BasicsInfo['appointment-link'] }}">
                        <span>Book An Appointment</span>
                        <i class="flaticon-plus"></i>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <h5 class="widget-title">Get In Touch</h5>
                    <div class="footer-cntct">
                        <ul class="media-icon list-unstyled">
                            <li>
                                <i class="flaticon-location"></i>
                                <p class="mb-0">{{ $BasicsInfo['address'] }} <br>
                                <a target="_blank" style="text-decoration: underline;" href="https://www.google.com/maps/place/Sukriti+Hospital/@21.7040981,72.9934505,15z/data=!4m6!3m5!1s0x3be020b51aa0e305:0xe04de05cecdcbf4d!8m2!3d21.7040981!4d72.9934505!16s%2Fg%2F1z44_ckgn?entry=ttu&g_ep=EgoyMDI0MTEwNi4wIKXMDSoASAFQAw%3D%3D">Get Directions</a></p>
                            </li>
                            <li>
                                <i class="flaticon-chat"></i>
                                <a href="mailto:{{ $BasicsInfo['email'] }}">{{ $BasicsInfo['email'] }}</a>
                            </li>
                            <li>
                                <i class="flaticon-doctor-consultation"></i>
                                <a href="tel:{{ $BasicsInfo['phone-number'] }}">{{ $BasicsInfo['phone-number'] }}</a> &nbsp; | &nbsp;
                                <a href="tel:{{ $BasicsInfo['mobile-number'] }}">{{ $BasicsInfo['mobile-number'] }}</a>
                            </li>
                            <li>
                                <i class="flaticon-working-hours"></i>
                                <div>
                                    <p class="mb-2">Mon - Sat: <br/>09:00AM to 1:00PM <br/>05:00 PM to 08:30 PM</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="widget-title">Useful Links</h5>
                            <ul class="list-unstyled mb-0 footer-menu">
                                @foreach ($services as $key => $value)
                                    @if ($key <= 4)
                                        <li><a href="/service/{{ $value['id'] }}">{{ $value['name'] }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-4 mt-5 mt-md-0">
                            <h5 class="widget-title">Useful Links</h5>
                            <ul class="list-unstyled mb-0 footer-menu">
                                @foreach ($services as $key => $value)
                                    @if ($key > 4)
                                        <li><a href="/service/{{ $value['id'] }}">{{ $value['name'] }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-4 mt-5 mt-md-0">
                            <h5 class="widget-title">Resource</h5>
                            <ul class="list-unstyled mb-0 footer-menu">
                                <li>
                                    <a href="/gallery">Our Gallery</a>
                                </li>
                                <li>
                                    <a href="/contact">Our Location</a>
                                </li>
                                <li>
                                    <a href="javascript.void(0);">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="javascript.void(0);">Terms and Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="secondary-footer">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="copyright">Copyright © 2024 All Rights Reserved | Sukriti Hospital</div>
                </div>
            </div>
        </div>
    </div>
</footer>
