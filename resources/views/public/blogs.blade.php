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
            <h2 class="text-white">Blogs</h2>
            <p class="text-white">Scholar is a free CSS template designed by TemplateMo for online educational related websites. This layout is based on the famous Bootstrap v5.3.0 framework.</p>

          </div>
        </div>
        <div class="col-lg-5  d-none d-md-block">
          <div class="lottie-animation" style="padding: 40px">
            <lottie-player src="{{ asset('public/public_page') }}/assets/lottiefiles/Animation - 1716380048303.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay ></lottie-player>
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
            @foreach ($blogs as $blogdata)
                <div class="col-lg-12 col-md-6">
                    <div class="item" onclick="location.href = '{{ route('single_blogs', [str_replace(' ', '-', $blogdata->blog_title).'-'.$blogdata->blog_id])}}';">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="image">
                                    <img src="{{ asset('public/blog_images') }}/{{$blogdata->blog_image}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <h4>{{ $blogdata->blog_title}}</h4>
                                <p>{{substr($blogdata->text_description, 0, 100)}}....</p>
                            </div>
                            <div class="col-lg-3">
                            <span>Date:</span>
                            <h6>{{date('j F, Y', strtotime($blogdata->created_at))}}</h6>
                            </div>
                            <a href="{{ route('single_blogs', [str_replace(' ', '-', $blogdata->blog_title).'-'.$blogdata->blog_id])}}"><i class="fa fa-angle-right"></i></a>

                        </div>
                    </div>
                </div>
            @endforeach
      </div>
      <div class="col-12 col-lg-12">
        <div class="space-50"></div>
        {!! $blogs->links('vendor.pagination.my_public_bootstrap-4') !!}
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


