@php
    $title="BLOGS";
    $meta_author="iotblitz";
    $meta_keywords="iotblitz, blogs, iotblitz blogs";
    $meta_description="Discover IoTBlitz LLP's expertise in AI & Automation, IoT Solutions, and Design & Development. Optimize processes, enhance efficiency, and innovate with our advanced, tailored solutions.";
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
        .badge {
            background-color: #7a6ad8 !important;
            padding: 5px 10px;

            color: #fff; /* Text color */
            text-decoration: none;
            border-radius: 5px;
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
                        <h2 class="text-white">BLOGS</h2>
                        <p class="text-white">What is Industry 4.0? What is remote monitoring? How is IoT changing the world?
                            Are these questions keeping you awake at night? Find out all the answers in our blogs.</p>

                    </div>
                </div>
                <div class="col-lg-5  d-none d-md-block">
                    <div class="lottie-animation" style="padding: 40px">
                        <lottie-player
                            src="{{ asset('public/public_page') }}/assets/lottiefiles/Animation - 1716380048303.json"
                            background="transparent" speed="1" style="width: 100%; height: 100%;" loop
                            autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="section events" id="events">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                {{-- <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Case Study</h6>
            <h2>Upcoming Case Study</h2>
          </div>
        </div> --}}
                @foreach ($blogs as $blogdata)
                    <div class="col-lg-12 col-md-6">
                        <div class="item"
                            onclick="location.href = '{{ route('single_blogs', [str_replace(' ', '-', $blogdata->blog_title) . '-' . $blogdata->blog_id]) }}';">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="image">
                                        <img src="{{ asset('public/blog_images') }}/{{ $blogdata->blog_image }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <h4>{{ $blogdata->blog_title }}</h4>
                                    <p>{{ substr($blogdata->blog_excerpt, 0, 205) }}</p>
                                </div>
                                {{-- <div class="col-lg-3">
                                    <span>Date:</span>
                                    <h6>{{ date('j F, Y', strtotime($blogdata->created_at)) }}</h6>
                                </div> --}}
                                <a href="{{ route('single_blogs', [str_replace(' ', '-', $blogdata->blog_title) . '-' . $blogdata->blog_id]) }}"><i
                                        class="fa fa-angle-right"></i></a>

                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 col-lg-12">
                    <div class="space-50"></div>
                    {!! $blogs->links('vendor.pagination.my_public_bootstrap-4') !!}
                </div>
                </div>
                <div class="col-md-3 mt-5">
                    <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                        <h5>Recent Posts</h5>
                        @foreach ($latest_posts as $ltdata)
                            <div class="media border-bottom py-3" style="display: flex;  align-items: flex-start;">
                                <a href="#"><img class="mr-4"
                                        src="{{ asset('public/blog_images') }}/{{ $ltdata->blog_image }}" alt=""
                                        style="width: 80px; height : 80px; object-fit: cover; margin-right: 1.5rem !important; border-radius: 5px"></a>
                                <div class="media-body" style=" flex: 1;">
                                    <h6 class="my-1"><a href="#" class="text-body">{{ $ltdata->blog_title }}</a>
                                    </h6>
                                    <p class="my-1"><a href="#" class="text-body text-justify">{{ substr($ltdata->text_description, 0, 37) }}...</a>
                                    </p>
                                    <span
                                        class="text-sm text-muted">{{ date('j F, Y', strtotime($ltdata->created_at)) }}</span>
                                </div>
                            </div>
                        @endforeach
                            <a href="{{ route('blogs') }}" class="btn btn-primary mt-3" style="background-color: #7a6ad8 !important">View All</a>
                    </div>




                    <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                        <h5 class="card-title">Popular Tags</h5>
                        <div class="d-flex flex-wrap justify-content-between">
                            @foreach ($tags as $tagdata)


                            <a href="{{route('public_blog_tags', ['tags' => str_replace(' ', '-',$tagdata->tags_name)])}}" class="text-decoration-none mb-2">
                                <span class="badge">{{$tagdata->tags_name}}</span>
                            </a>
                            @endforeach

                        </div>

                    </div>




                </div>



            </div>

        </div>
    </div>






@endsection
@section('page_script')
@endsection
