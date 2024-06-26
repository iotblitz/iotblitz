@extends('public.common.layout')
@section('page_style')
    <style>
        .main-banner {
            padding: 50px 0;
        }

        .header-text {
            text-align: left;
        }

        .buttons {
            margin-top: 20px;
        }

        .lottie-animation {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
    </style>

@endsection
@section('page_content')

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="header-text  mt-5">

                        {{-- <span class="category text-white">Our Courses</span> --}}
                        <h2 class="text-white">CONTACT US</h2>
                        <p class="text-white"><strong>IoTBlitz LLP</strong> is here to assist you with all your IoT needs. Whether you have
                            questions about our products, need technical support, or want to discuss a potential project, we
                            are ready to help.</p>

                    </div>
                </div>
                <div class="col-lg-5 d-none d-md-block">
                    <div class="lottie-animation">
                        <lottie-player
                            src="{{ asset('public/public_page') }}/assets/lottiefiles/Animation - 1716381326931.json"
                            background="transparent" speed="1" style="width: 70%; height: 100%;" loop
                            autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">
                        <h2>Connect with IoTBlitz LLP Today</h2>
                        <p><strong>Address:</strong><br>
                            Green Valley Residency,<br>
                            Boral Main Road,<br>
                            Kolkata 700154,<br>
                            India</p>
                        <p><strong>Phone:</strong><br>
                            +91 7890833920</p>
                        <p><strong>Email:</strong><br>
                            <a href="mailto:info@iotblitz.com">info@iotblitz.com</a>
                        </p>
                        <p>We look forward to connecting with you and exploring how IoTBlitz LLP can support your IoT
                            initiatives. Feel free to reach out to us through any of the contact methods above, and our team
                            will get back to you promptly.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <form id="contact-form" action="{{ route('contact_public') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="name" name="name" id="name" placeholder="Your Name..."
                                            autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your E-mail..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="text" name="mobile_no" id="mobile"
                                            placeholder="Your Mobile no..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </fieldset>
                                </div>

                                <div class="col-md-12">


                                    <div class="custom-file mb-3">
                                        <fieldset>
                                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="orange-button">Send Message
                                            Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






    </div>
    </div>
    <!--blog area end-->




    </div>
    <!--team bg area end-->
@endsection
@section('page_script')
@endsection
