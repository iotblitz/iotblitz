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
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-text">

                        {{-- <span class="category text-white">Our Courses</span> --}}
                        <h2 class="text-white">{{ $case_study->case_study_title }}</h2>
                        <p class="text-white">Scholar is a free CSS template designed by TemplateMo for online educational
                            related websites. This layout is based on the famous Bootstrap v5.3.0 framework.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="space-10"></div>
                    {{-- <h1 class="single-blog-h1">{{ $case_study->case_study_title }}</h1> --}}
                    <img src="{{ asset('public/case_study_images') }}/{{$case_study->case_study_image}}" style="height: auto; width: 100%;" alt="Blog Image" style="border-radius: 80px !">
                    <div class="space-10"></div>
                    <small>by IoTBlitz <span><i class="fa fa-clock-o"></i> {{ $case_study->created_at }}</span></small>
                    <div class="space-50"></div>
                    <div class="single-blog-image"
                        style="background:url('{{ asset('public/blog_images') }}/{{ $case_study->case_study_image }}')">
                    </div>
                    {{-- <img src="{{ asset('blog_images') }}/{{$case_study->blog_image}}" style="height: auto; width: 100%;" alt="Blog Image"> --}}




                    {!! $case_study->case_study_description !!}





                    <div class="space-50"></div>

                    <div class="single-blog-contact">
                        <h4>leave a comment</h4>
                        <div class="space-30"></div>
                        <form action="{{ route('public_comments', [$case_study->case_study_id]) }}" method="POST"
                            id="myform">
                            @csrf
                            <input type="hidden" name="comment_by_page" value="CS">
                            <input type="hidden" name="blog_id" value="{{ $case_study->case_study_id }}">
                            <input type="text" placeholder="your name" name="name" required>
                            <input type="email" placeholder="email" name="email" required>
                            <div class="space-30"></div>
                            <textarea cols="30" rows="10" placeholder="say something" name="comments"></textarea>
                        </form>
                        <div class="space-30"></div>
                        <a href="javascript:void(0)" onclick="document.getElementById('myform').submit()"
                            class="gradient-btn">comment now</a>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-9 offset-1">


                    <div class="blog-comment">
                        <h4>{{ $case_study_count }} comments</h4>
                        <div class="space-30"></div>



                        @foreach ($case_study->public_comments as $comments)
                            <div class="single-comment" style="height: 200px !important">
                                <div class="comment-img">
                                    <img src="{{ asset('public/public_page') }}/lottiefiles/profile.png" alt="">
                                    <div class="space-10"></div>
                                    <p>{{ $comments->name }}</p>
                                </div>
                                <div class="comment-text-form">
                                    <small>{{ $comments->created_at }}</small>
                                    <div class="space-10"></div>
                                    <p>{{ $comments->comments }}</p>
                                    <div class="space-10"></div>

                                </div>
                            </div>
                            <div class="space-10"></div>
                        @endforeach





                    </div>
                    <div class="space-50"></div>

                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}








    </div>
    </div>
    <!--blog area end-->




    </div>
    <!--team bg area end-->
@endsection
@section('page_script')
@endsection
