<!--header area start-->
<div class="header-area wow fadeInDown header-absolate" id="nav" data-0="position:fixed;" data-top-top="position:fixed;top:0;" data-edge-strategy="set">
        <div class="container">
            <div class="row">
                <div class="col-4 d-block d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-4 col-lg-2">
                    <div class="logo-area">
                        <a href="#"><img src="{{ asset('public/public_page') }}/lottiefiles/logo.webp" alt="" width="50%" height="100%"></a>
                    </div>
                </div>
                <div class="col-4 col-lg-8 d-none d-lg-block">
                    <div class="main-menu text-center">
                        <nav>
                            <ul id="slick-nav">
                                <li><a class="scroll" href="{{route('home')}}">home</a>
                                    {{-- <ul>
                                        <li><a href="index.html">Version 1</a></li>
                                        <li><a href="index2.html">Version 2</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="single-blog.html">single blog</a></li>
                                    </ul> --}}
                                </li>
                                <li><a class="scroll" href="#about">About</a>
                                </li>
                                <li><a class="scroll" href="#Paper">Case Study</a></li>
                                <li><a class="scroll" href="#token">Products</a></li>
                                <li><a class="scroll" href="#roadmap">solutions</a></li>
                                <li><a class="scroll" href="{{route('blogs')}}">Blogs</a></li>
                                <li><a class="scroll" href="#faq">FAQ</a></li>
                                <li><a class="scroll" href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-4 col-lg-2 text-right">
                    <a href="#" class="logibtn gradient-btn">Call Now</a>
                </div>

            </div>
        </div>
    </div>
    <!--header area end-->
