@extends('public.common.layout')
@section('page_content')

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

<div class="main-banner" id="top">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="header-text mt-5">

            {{-- <span class="category text-white">Our Courses</span> --}}
            <h2 class="text-white">About</h2>
            <p class="text-white">Scholar is a free CSS template designed by TemplateMo for online educational related websites. This layout is based on the famous Bootstrap v5.3.0 framework.</p>

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




  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Contact Us</h6>
            <h2>Feel free to contact us anytime</h2>
            <p>Thank you for choosing our templates. We provide you best CSS templates at absolutely 100% free of charge. You may support us by sharing our website to your friends.</p>
            <div class="special-offer">
              <span class="offer">off<br><em>50%</em></span>
              <h6>Valide: <em>24 April 2036</em></h6>
              <h4>Special Offer <em>50%</em> OFF!</h4>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>
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


