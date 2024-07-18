@php
    $title="About Us";
    $meta_author="IoTBlitz";
    $meta_keywords="about us,about us IoTBlitz,about us IoTBlitz LLP,IotBlitz, IoTBlitz LLP, IoTBlitz about us";
    $meta_description="Since its founding and establishment in 2024, IoTBlitz has expanded rapidly, serving both local and foreign customers. Our team of highly skilled experts uses cutting-edge technology to deliver the finest IoT Platform and Remote Monitoring Systems.";
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

            <ul>
                <li>Since its founding and establishment in 2024, IoTBlitz has expanded rapidly, serving both local and foreign customers. Our team of highly skilled experts uses cutting-edge technology to deliver the finest IoT Platform and Remote Monitoring Systems.</li>
            </ul>

        <h2>Our Expertise</h2>
        <ul>
            <li class="mb-2"><strong>IoT Solutions:</strong> Use our IoT solutions to discover almost endless possibilities. Our expertise lies in easily integrating devices, collecting essential information, and optimizing operational effectiveness with strong Internet of Things (IoT) technology</li>

            <li class="mb-2"><strong>Design & Development:</strong> We are experts in creating custom web, Android, and iOS apps that are made to match precisely your requirements. From conceptualization to execution, our goal is to provide smooth user experiences and designs that are easy to understand.</li>

            <li class="mb-2"><strong>IoT Hardware:</strong> We have unmatched expertise and experience in IoT Hardware manufacturing. Our Hardware division, Techavo Systems, can provide end-to-end customized IoT hardware solutions that fit your business and operational requirements.</li>

        </ul>
        <h2>Why Choose Us?</h2>
        <ul>
            <li class="mb-2"><strong>Competitive Edge:</strong> Our team of designers and developers goes above and beyond to satisfy your objectives and determine the ideal solution. With the help of our IIoT Platforms and Industry 4.0 dashboards, your company can gain a competitive advantage and reach new heights of efficiency and accuracy.</li>

            <li class="mb-2"><strong>Commitment to Excellence:</strong> IoTBlitz is committed to pushing beyond what is possible. Our experienced teams are equipped with the knowledge and skills necessary to tackle any technological problem, no matter how big or small, with unparalleled agility and proficiency.</li>

            <li class="mb-2"><strong>Client-Centric Approach:</strong> We at IotBlitz take client satisfaction very seriously. Our team of engineers, designers, and developers collaborates closely with our clients to maintain transparency at all stages of production and ensures our solutions meet their needs perfectly. IoTBlitz provides a personalized IoT Remote Monitoring System designed to meet your specific demands and goals.</li>

            <li class="mb-2"><strong>Diverse Portfolio:</strong> We offer solutions across diverse industry verticals, especially in the Energy, Water, Fuel, Solar, and UPS domains. In Hardware, we have acquired unmatched expertise in embedded systems, remote monitoring systems, PCB, remote terminal units, LoRawan gateway, and more.</li>
        </ul>

        <h2>Get in Touch</h2>
        <ul>
            <li>Discover how IoTBlitz can transform your business with the power of IoT. Partner with us today to unlock new opportunities and achieve unparalleled growth through advanced technology solutions.</li>
        </ul>
            {{-- <div class="special-offer">
              <span class="offer">off<br><em>50%</em></span>
              <h6>Valide: <em>24 April 2036</em></h6>
              <h4>Special Offer <em>50%</em> OFF!</h4>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div> --}}
          </div>
        </div>
        <div class="col-lg-6">
            <lottie-player src="{{ asset('public/public_page') }}/assets/lottiefiles/Animation - 1716383597225.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay ></lottie-player>
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


