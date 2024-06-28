@extends('public.common.layout')
@section('page_style')
    <style>
        h3.count-number {
            color: #FFFF !important;
        }
    </style>
@endsection


@section('page_content')
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class="header-text">
                                {{-- <span class="category">Automation</span> --}}
                                <h2>Are You Ready for Industry 4.0?</h2>
                                <p>Connect your devices and be at the forefront of the Industry 4.0 revolution with the
                                    effortless power of IoT. </p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="{{ route('contact') }}">Request Demo</a>
                                    </div>
                                    {{-- <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> What's Scholar?</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="item item-2">
                            <div class="header-text">
                                {{-- <span class="category">Automation</span> --}}
                                <h2>Real-Time Alerts Using Industrial IoT Platform</h2>
                                <p>Stay ahead of the curve with real-time alerts using our IoT Platform powered by Cloud and
                                    Industrial IoT.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="{{ route('contact') }}">Request Demo</a>
                                    </div>
                                    {{-- <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> What's the best result?</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="item item-3">
                            <div class="header-text">
                                {{-- <span class="category">Smart Technology Solutions</span> --}}
                                <h2>Real-Time Monitoring and Optimization</h2>
                                <p>Track your energy, fuel, water, solar, and voltage consumption in real-time and optimize
                                    it according to your needs.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="{{ route('contact') }}">Request Demo</a>
                                    </div>
                                    {{-- <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> What's Online Course?</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services section" id="services">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('public/public_page') }}/assets/images/service-01.webp" alt="online degrees">
                        </div>
                        <div class="main-content">
                            <h4>Our IoT Platforms</h4>
                            <p>Leverage our remote IoT platforms for energy, fuel, water, and UPS monitoring to unlock your
                                full potential and save power costs.</p>
                            <div class="main-button">
                                <a href="{{ route('product') }}">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('public/public_page') }}/assets/images/service-03.webp" alt="web experts">
                        </div>
                        <div class="main-content">
                            <h4>Our Services</h4>
                            <p>Enter the world of Industry 4.0 with us and transform your business with the power of IoT and
                                Seamless end-to-end services.</p>
                            <div class="main-button">
                                <a href="{{ route('solutions') }}">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('public/public_page') }}/assets/images/service-02.webp" alt="short courses">
                        </div>
                        <div class="main-content">
                            <h4>Our IoT Hardware</h4>
                            <p>We provide custom IoT hardware that fits your needs. From Conceptualization to seamless
                                integration, we do it all.</p>
                            <div class="main-button">
                                <a href="https://www.techavo.in/products/" target="_blank">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- <div class="section about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Where shall we begin?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod
                                    tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do we work together?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod
                                    tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Why SCHOLAR is the best?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are more than one hundred responsive HTML templates to choose from
                                    <strong>Template</strong>Mo website. You can browse by different tags or categories.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do we get the best support?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can also search on Google with specific keywords such as <code>templatemo business
                                        templates, templatemo gallery templates, admin dashboard templatemo, 3-column
                                        templatemo, etc.</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>Welcome to IoTBlitz
                            We have a strong desire to provide our clients with cutting-edge, meaningful solutions..</h2>
                        <p>At IoTBlitz, our mission is to empower businesses by leveraging the latest technologies and industry best practices. We strive to deliver innovative software solutions that optimize efficiency..........</p>
                        <div class="main-button">
                            <a href="{{route('product')}}">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <section class="section courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Latest Courses</h6>
                        <h2>Latest Courses</h2>
                    </div>
                </div>
            </div>
            <ul class="event_filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Show All</a>
                </li>
                <li>
                    <a href="#!" data-filter=".design">Webdesign</a>
                </li>
                <li>
                    <a href="#!" data-filter=".development">Development</a>
                </li>
                <li>
                    <a href="#!" data-filter=".wordpress">Wordpress</a>
                </li>
            </ul>
            <div class="row event_box">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('public/public_page') }}/assets/images/course-01.jpg"
                                    alt=""></a>
                            <span class="category">Webdesign</span>
                            <span class="price">
                                <h6><em>$</em>160</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Stella Blair</span>
                            <h4>Learn Web Design</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('public/public_page') }}/assets/images/course-02.jpg"
                                    alt=""></a>
                            <span class="category">Development</span>
                            <span class="price">
                                <h6><em>$</em>340</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Cindy Walker</span>
                            <h4>Web Development Tips</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('public/public_page') }}/assets/images/course-03.jpg"
                                    alt=""></a>
                            <span class="category">Wordpress</span>
                            <span class="price">
                                <h6><em>$</em>640</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">David Hutson</span>
                            <h4>Latest Web Trends</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('public/public_page') }}/assets/images/course-04.jpg"
                                    alt=""></a>
                            <span class="category">Development</span>
                            <span class="price">
                                <h6><em>$</em>450</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Stella Blair</span>
                            <h4>Online Learning Steps</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('public/public_page') }}/assets/images/course-05.jpg"
                                    alt=""></a>
                            <span class="category">Wordpress</span>
                            <span class="price">
                                <h6><em>$</em>320</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Sophia Rose</span>
                            <h4>Be a WordPress Master</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('public/public_page') }}/assets/images/course-06.jpg"
                                    alt=""></a>
                            <span class="category">Webdesign</span>
                            <span class="price">
                                <h6><em>$</em>240</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">David Hutson</span>
                            <h4>Full Stack Developer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            {{--  <div class="col-lg-3 col-md-6">
                                <div class="counter">

                                    <h2 class="timer count-title count-number" data-to="365" data-speed="1000"></h2>
                                    <p class="count-text ">Days of Support</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="2" data-speed="1000"></h2>
                                    <p class="count-text ">Years of Warranty</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                                    <p class="count-text ">Happy Clients</p>
                                </div>
                            </div> --}}

                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h3 class="count-title count-number"
                                        style="content: none !important; margin-left: 0 !important;">365</h3>
                                    <h3 class="count-title count-number"
                                        style="content: none !important; margin-left: 0 !important;">DAYS OF SUPPORT</h3>
                                    {{-- <p class="count-text ">Days Of Support</p> --}}
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h3 class="count-title count-number"
                                        style="content: none !important; margin-left: 0 !important;">2</h3>
                                    <h3 class="count-title count-number"
                                        style="content: none !important; margin-left: 0 !important;">YEARS OF WARRANTY
                                    </h3>
                                    {{-- <p class="count-text ">Days Of Support</p> --}}
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h3 class="count-title count-number"
                                        style="content: none !important; margin-left: 0 !important;">AFFORDABLE</h3>
                                    <h3 class="count-title count-number"
                                        style="content: none !important; margin-left: 0 !important;">PRICING</h3>
                                    {{-- <p class="count-text ">Days Of Support</p> --}}
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h3 class="count-title count-number"
                                        style="content: none !important; margin-left: 0 !important;">CUSTOM SOFTWARE AND
                                        HARDWARE</h3>
                                    {{-- <p class="count-text ">Days Of Support</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="team section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="{{ asset('public/public_page') }}/assets/images/member-01.jpg" alt="">
                            <span class="category">co-founder</span>
                            <h4>Srijit Mitra</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="{{ asset('public/public_page') }}/assets/images/member-02.jpg" alt="">
                            <span class="category">co-founder</span>
                            <h4>Amit Mondal</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="{{ asset('public/public_page') }}/assets/images/member-04.jpg" alt="">
                            <span class="category">co-founder</span>
                            <h4>Suparna Dutta</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="{{ asset('public/public_page') }}/assets/images/member-04.jpg" alt="">
                            <span class="category">Digital Animator</span>
                            <h4>Partha Maity</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="section testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-testimonials">
                        <div class="item">
                            <p>“Please tell your friends or collegues about TemplateMo website. Anyone can access the
                                website to download free templates. Thank you for visiting.”</p>
                            <div class="author">
                                <img src="{{ asset('public/public_page') }}/assets/images/testimonial-author.jpg"
                                    alt="">
                                <span class="category">Full Stack Master</span>
                                <h4>Claude David</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”</p>
                            <div class="author">
                                <img src="{{ asset('public/public_page') }}/assets/images/testimonial-author.jpg"
                                    alt="">
                                <span class="category">UI Expert</span>
                                <h4>Thomas Jefferson</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Scholar is free website template provided by TemplateMo for educational related websites.
                                This CSS layout is based on Bootstrap v5.3.0 framework.”</p>
                            <div class="author">
                                <img src="{{ asset('public/public_page') }}/assets/images/testimonial-author.jpg"
                                    alt="">
                                <span class="category">Digital Animator</span>
                                <h4>Stella Blair</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>TESTIMONIALS</h6>
                        <h2>What they say about us?</h2>
                        <p>You can search free CSS templates on Google using different keywords such as templatemo
                            portfolio, templatemo gallery, templatemo blue color, etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="section events" id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Schedule</h6>
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="{{ asset('public/public_page') }}/assets/images/event-01.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Web Design</span>
                                        <h4>UI Best Practices</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>16 Feb 2036</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>22 Hours</h6>
                                    </li>
                                    <li>
                                        <span>Price:</span>
                                        <h6>$120</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="{{ asset('public/public_page') }}/assets/images/event-02.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Front End</span>
                                        <h4>New Design Trend</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>24 Feb 2036</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>30 Hours</h6>
                                    </li>
                                    <li>
                                        <span>Price:</span>
                                        <h6>$320</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="{{ asset('public/public_page') }}/assets/images/event-03.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Full Stack</span>
                                        <h4>Web Programming</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>12 Mar 2036</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>48 Hours</h6>
                                    </li>
                                    <li>
                                        <span>Price:</span>
                                        <h6>$440</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">
                        <h6>Visit IoTBlitz</h6>
                        <h3 class="mt-2">Find Us at the Forefront of IoT Innovation</h3>
                        <p>Located in the heart of innovation, IoTBlitz is situated strategically to serve global clients
                            seeking cutting-edge IoT solutions. Join us at our headquarters to explore the future of
                            technology-driven efficiency and growth.</p>
                        {{-- <div class="special-offer">
                            <span class="offer">off<br><em>50%</em></span>
                            <h6>Valide: <em>24 April 2036</em></h6>
                            <h4>Special Offer <em>50%</em> OFF!</h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- <div class="contact-us-content">
                        <div id="contact-form"> --}}


                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.4300796987472!2d88.37257297436688!3d22.450466979578902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0271b97eb603bd%3A0x3f972575249e099!2sGreen%20Valley%20Residency%2C%20486%2C%20Boral%20Main%20Road%2C%20near%20To...wheelz%2C%20Banerjee%20Para%2C%20Kamdahari%2C%20West%20Bengal%20700084!5e0!3m2!1sen!2sin!4v1719463781784!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;border-radius: 20px!important;"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        title="Google Map showing a specific location">
                    </iframe>
                    {{-- </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_script')
@endsection
