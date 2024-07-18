@php
    $title="Contact Us";
    $meta_author="IoTBlitz";
    $meta_keywords="contact us, contact us IoTBlitz, contact";
    $meta_description="IoTBlitz is here to assist you with all your IoT needs. Whether you have a question about our products, need technical support, or want to discuss a potential project, we are ready to help.";
@endphp
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
                        <p class="text-white"><strong>IoTBlitz</strong>  is here to assist you with all your IoT needs. Whether you have a question about our products, need technical support, or want to discuss a potential project, we are ready to help.</p>

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




    <div class="section mb-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">

                        <h2 style="color: #7a6ad8;">Connect With IoTBlitz Today</h2>
                        {{-- <div class="contact-details">
                            <p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> Green Valley Residency,Boral Main Road,Kolkata 700154,India</p>
                            <p><i class="fas fa-phone-alt"></i> Phone: +123 456 7890</p>
                            <p><i class="fas fa-envelope"></i> Email: info@company.com</p>
                        </div> --}}


                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start mb-5 mt-5">
                                <i class="fa fa-map-marker mt-1 mr-2" style="color: #7a6ad8;"></i>
                                <div style="margin-left:20px">
                                    Green Valley Residency,<br>
                            Boral Main Road,<br>
                            Kolkata 700154,<br>
                            India
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-5">
                                <i class="fa fa-phone mt-1 mr-2" style="color: #7a6ad8;"></i>
                                <div style="margin-left:20px" title="mail:info@iotblitz.com"
                                    title="tel:+86 13911890238">
                                    +91 7890833920
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-5">
                                <i class="fa fa-envelope mt-1 mr-2" style="color: #7a6ad8;"></i>
                                <div style="margin-left:20px" title="mail:info@iotblitz.com">
                                    info@iotblitz.com
                                </div>
                            </li>
                        </ul>


                      <p class="mb-2">We look forward to connecting with you and exploring how IoTBlitz can help you support your IoT and business goals.</p>
                      <p>Give us a call or reach out to us through our contact form.</p>

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


<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(event) {
            event.preventDefault();
            var formData = {
                'name': $('#name').val(),
                'email': $('#email').val(),
                'mobile_no': $('#mobile').val(),
                'message': $('#message').val(),
                'g-recaptcha-response': grecaptcha.getResponse()
            };

            $.ajax({
                type: 'POST',
                url: 'process_form.php', // PHP script to verify and send email
                data: formData,
                dataType: 'json',
                encode: true,
                success: function(response) {
                    $('#response').html(response.message);
                    grecaptcha.reset(); // Reset reCAPTCHA after submission
                }
            });
        });
    });
    </script>


@endsection
