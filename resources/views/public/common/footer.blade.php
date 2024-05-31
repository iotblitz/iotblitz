<footer class="bg-color-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-link">
                    <!-- Logo -->
                    <a href="index.html" style="display: inline-block;">
                        <img src="{{ asset('public/public_page') }}/assets/images/logo.png" alt="logo" style="max-width: 100px; height: auto;">
                    </a>
                    <!-- Content -->
                    <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat illum saepe doloribus! Ipsa repellendus quaerat exercitationem.</p>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-link">
                            <h3 class="text-white" style="margin-bottom: 20px">QUICK LINK</h3>
                            <ul>
                                <li><a href="{{ route('about') }}" class="text-white">About</a></li>
                                <li><a href="{{ route('case_study') }}" class="text-white">Case Study</a></li>
                                <li><a href="{{ route('product') }}" class="text-white">Products</a></li>
                                <li><a href="{{ route('contact') }}" class="text-white">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-link">
                            <h3 class="text-white" style="margin-bottom: 20px">Support</h3>
                            <ul>
                                <li><a href="" class="text-white">FAQ</a></li>
                                 <hr>
                                <li><a href="" class="text-white">Careers</a></li>
                                <hr>
                                <li><a href="{{route('solutions')}}" class="text-white">Solutions</a></li>
                                <hr>
                                <li><a href="{{ route('blogs') }}" class="text-white">Blogs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-link">
                            <h3 class="text-white" style="margin-bottom: 20px">Legal</h3>
                            <ul>
                                <li><a href="" class="text-white">Terms & Conditions</a></li>

                                <li><a href="" class="text-white">Privacy Policy</a></li>

                                <li><a href="" class="text-white">Cookies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-contact">
                            <h3 class="text-white" style="margin-bottom: 20px">Contact Us</h3>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start">
                                    <i class="fa fa-map-marker mt-1 mr-2" style="color: white;"></i>
                                    <div class="text-white"  style="margin-left:20px">
                                        123 Street, New York, USA 123 Street, New York, USA 123 Street, New York, USA
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex align-items-start">
                                    <i class="fa fa-phone mt-1 mr-2" style="color: white;"></i>
                                    <div class="text-white"  style="margin-left:20px" title="mail:info@iotblitz.com" title="tel:+86 13911890238">
                                        +91 7890833920
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex align-items-start">
                                    <i class="fa fa-envelope mt-1 mr-2" style="color: white;"></i>
                                    <div class="text-white" style="margin-left:20px" title="mail:info@iotblitz.com">
                                        info@iotblitz.com
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 text-center">
            <p class="text-white">Copyright © 2024 IoTBlitz. All rights reserved</p>
        </div>
    </div>
</footer>
