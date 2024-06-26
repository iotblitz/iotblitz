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
          <div class="header-text mt-5">

            {{-- <span class="category text-white">Our Courses</span> --}}
            <h1 class="text-white">ABOUT US</h1>
            {{-- <p class="text-white">At IoTBlitz LLP, we are pioneers in harnessing the power of cutting-edge technologies to revolutionize businesses across industries. With over 1 year of invaluable experience, we have successfully completed 20 projects and delighted 50 clients with our innovative solutions.</p> --}}

          </div>
        </div>
        <div class="col-lg-5 d-none d-md-block">
          <div class="lottie-animation" style="padding: 10px">
            <lottie-player src="{{ asset('public/public_page') }}/assets/lottiefiles/Animation - 1716382593643.json" background="transparent" speed="1" style="width: 70%; height: 100%;" loop autoplay ></lottie-player>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            {{-- <h6>About Us</h6> --}}
            <p>At IoTBlitz LLP, we are pioneers in harnessing the power of cutting-edge technologies to revolutionize businesses across industries. With over 1 year of invaluable experience, we have successfully completed 20 projects and delighted 50 clients with our innovative solutions.</p>

        <h2>Our Expertise</h2>
        <ul>
            <li><strong>AI & Automation:</strong> Embrace the future with our AI-driven solutions that optimize processes, boost efficiency, and foster innovation. We integrate advanced automation technologies to streamline operations and empower your business.</li>
            <li><strong>IoT Solutions:</strong> Explore limitless possibilities with our IoT solutions. We specialize in seamlessly connecting devices, extracting meaningful data, and enhancing operational efficiencies through robust Internet of Things technology.</li>
            <li><strong>Design & Development:</strong> From ideation to implementation, we excel in crafting bespoke web, Android, and iOS applications tailored to meet your specific requirements. Our focus is on delivering intuitive designs and seamless user experiences.</li>
        </ul>

        <h2>Commitment to Excellence</h2>
        <p>At IoTBlitz LLP, our mission is to drive your success through innovative solutions that propel your business forward. We combine technical expertise with a deep understanding of industry dynamics to deliver measurable results and exceed expectations.</p>

        <h2>Why Choose Us?</h2>
        <ul>
            <li><strong>Expertise:</strong> Our team of skilled professionals brings a wealth of experience and knowledge to every project.</li>
            <li><strong>Innovation:</strong> We stay ahead of the curve by embracing emerging technologies and industry trends.</li>
            <li><strong>Client-Centric Approach:</strong> Your satisfaction is our priority. We collaborate closely with you to ensure our solutions align with your goals.</li>
        </ul>

        <h2>Get in Touch</h2>
        <p>Discover how IoTBlitz LLP can transform your business. Partner with us to unlock new opportunities and achieve unparalleled growth through advanced technology solutions.</p>
            {{-- <div class="special-offer">
              <span class="offer">off<br><em>50%</em></span>
              <h6>Valide: <em>24 April 2036</em></h6>
              <h4>Special Offer <em>50%</em> OFF!</h4>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div> --}}
          </div>
        </div>
        <div class="col-lg-6">
          {{-- <div class="contact-us-content"> --}}

            <lottie-player src="{{ asset('public/public_page') }}/assets/lottiefiles/Animation - 1716383597225.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay ></lottie-player>



            {{-- <form id="contact-form" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                  </fieldset>
                </div>
              </div>
            </form> --}}
          {{-- </div> --}}
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


