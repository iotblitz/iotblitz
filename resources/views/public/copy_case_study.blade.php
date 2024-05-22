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
          <div class="header-text">

            {{-- <span class="category text-white">Our Courses</span> --}}
            <h2 class="text-white">With Scholar Teachers, Everything Is Easier</h2>
            <p class="text-white">Scholar is a free CSS template designed by TemplateMo for online educational related websites. This layout is based on the famous Bootstrap v5.3.0 framework.</p>

          </div>
        </div>
        <div class="col-lg-5">
          <div class="lottie-animation">
            <lottie-player src="{{ asset('public/public_page') }}/assets/lottiefiles/Animation - 1715838982563.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
          </div>
        </div>
      </div>
    </div>
  </div>





  <div class="section events" id="events">
    <div class="container">
      <div class="row">
        {{-- <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Case Study</h6>
            <h2>Upcoming Case Study</h2>
          </div>
        </div> --}}
            @foreach ($case_study as $case_study_data)
                <div class="col-lg-12 col-md-6" onclick="location.href = '{{ route('single_case_study', [str_replace(' ', '-', $case_study_data->case_study_title).'-'.$case_study_data->case_study_id])}}';">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="image">
                                    <img src="{{ asset('case_study_images') }}/{{$case_study_data->case_study_image}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <h4>{{$case_study_data->case_study_title}}</h4>
                                <p>{{substr($case_study_data->text_description, 0, 100)}}....</p>
                            </div>
                            <div class="col-lg-3">
                            <span>Date:</span>
                            <h6>January 12th, 2018</h6>
                            </div>
                            <a href="{{ route('single_case_study', [str_replace(' ', '-', $case_study_data->case_study_title).'-'.$case_study_data->case_study_id])}}"><i class="fa fa-angle-right"></i></a>

                        </div>
                    </div>
                </div>
            @endforeach
      </div>
    </div>
  </div>



  <div class="col-12 col-lg-12">

<div class="space-50"></div>
{!! $case_study->links('vendor.pagination.bootstrap-4') !!}
{{-- <div class="blog-blog-btn text-center">

    <a href="#" class="gradient-btn">learn more</a>
</div> --}}
</div>




            </div>
        </div>
        <!--blog area end-->




    </div>
    <!--team bg area end-->
@endsection
@section('page_script')
@endsection
