<footer class="bg-color-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-link">
                    <!-- Logo -->
                    <a href="index.html" style="display: inline-block;">
                        <img src="{{ asset('public/public_page') }}/assets/images/logo.webp" alt="logo"
                            style="max-width: 100px; height: auto;">
                    </a>
                    <!-- Content -->
                    <p class="text-white mt-3">At IoTBlitz, we are pioneers in harnessing the power of cutting-edge technologies to revolutionize businesses across industries. Our team of expert engineers goes above and beyond to provide IIoT Platforms, Websites, Applications, and IoT hardware that are custom-built and designed to meet your business needs.</p>

                    <!-- Social Icons -->
                    <div class="social-icons mt-3 mb-3">
                        <a href="https://www.facebook.com/iotblitzllp" target="_blank" title="Facebook" class="text-white me-4"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/iotblitz/" target="_blank" title="Instagram" class="text-white me-4"><i class="fab fa-instagram"></i></a>
                        {{-- <a href="#" class="text-white me-4"><i class="fab fa-youtube"></i></a> --}}
                        <a href="https://www.linkedin.com/company/iotblitz" target="_blank" title="Linkdin" class="text-white me-4"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://x.com/iotblitz" target="_blank" title="X" class="text-white me-4"><i class="fab fa-x-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-link">
                            <h3 class="text-white" style="margin-bottom: 20px">QUICK LINK</h3>
                            <ul>
                                <li class="mb-2"><a href="{{ route('product') }}" class="text-white">Products</a></li>
                                <li class="mb-2"><a href="{{ route('solutions') }}" class="text-white">Services</a>
                                </li>
                                <li class="mb-2"><a href="{{ route('case_study') }}" class="text-white">Case Study</a>
                                </li>
                                <li class="mb-2"><a href="{{ route('careers') }}" class="text-white">Careers</a></li>
                                <li class="mb-2"><a href="{{ route('contact') }}" class="text-white">Contact Us</a>
                                </li>




                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-link">
                            <h3 class="text-white" style="margin-bottom: 20px">Support</h3>
                            <ul>
                                <li class="mb-2"><a href="{{ route('faqs') }}" class="text-white">FAQ</a></li>
                                {{-- <hr> --}}
                                <li class="mb-2"><a href="{{ route('about') }}" class="text-white">About</a></li>
                                {{-- <hr> --}}

                                <li class="mb-2"><a href="{{ route('blogs') }}" class="text-white">Blogs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-link">
                            <h3 class="text-white" style="margin-bottom: 20px">Legal</h3>
                            <ul>
                                <li class="mb-2"><a href="{{ route('terms_and_conditions') }}"
                                        class="text-white">Terms & Conditions</a></li>
                                <li class="mb-2"><a href="{{ route('privacy_policy') }}" class="text-white">Privacy
                                        Policy</a></li>
                                <li class="mb-2"><a href="{{ route('cookies_policy') }}"
                                        class="text-white">Cookies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-contact">
                            <h3 class="text-white" style="margin-bottom: 20px">Contact Us</h3>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start">
                                    <i class="fa fa-map-marker mt-1 mr-2" style="color: white;"></i>
                                    <div class="text-white" style="margin-left:20px">
                                        Green Valley Residency, Boral Main Road, Kolkata 700154
                                    </div>
                                </li>
                                <hr>
                                <li class="d-flex align-items-start">
                                    <i class="fa fa-phone mt-1 mr-2" style="color: white;"></i>
                                    <div class="text-white" style="margin-left:20px" title="mail:info@iotblitz.com"
                                        title="tel:+86 13911890238">
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

        <div class="col-lg-12 text-center mt-2">
            <p class="text-white">Copyright © 2024 IoTBlitz. All rights reserved</p>
        </div>
    </div>
</footer>
