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
                        <h2 class="text-white">Services</h2>
                        <p class="text-white">Explore AI & Automation, IoT Solutions, and Design & Development at IoTBlitz LLP. Innovate with tailored applications, diverse IoT offerings, and advanced technology solutions.</p>

                    </div>
                </div>
                <div class="col-lg-5  d-none d-md-block">
                    <div class="lottie-animation" style="padding: 40px">
                        <lottie-player
                            src="{{ asset('public/public_page') }}/assets/lottiefiles/Animation - 1716383634249.json"
                            background="transparent" speed="1" style="width: 100%; height: 100%;" loop
                            autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <section class="section courses" id="courses">
        <div class="container">

            <div class="row event_box">


                @foreach ($solutions as $solutions_key)




                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development" onclick="location.href = '{{ route('single_solutions', [str_replace(' ', '-', $solutions_key->solutions_title) . '-' . $solutions_key->solutions_id]) }}';">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="{{ route('single_solutions', [str_replace(' ', '-', $solutions_key->solutions_title) . '-' . $solutions_key->solutions_id]) }}"><img src="{{ asset('public/solution_image') }}/{{$solutions_key->solutions_image}}"
                                    alt=""></a>
                            {{-- <span class="category">{{$solutions_key->category}}</span> --}}
                            {{-- <span class="price">

                                <h6><em>$</em>340  <i class="fa-solid fa-globe"></i> </h6>
                            </span> --}}
                        </div>
                        <div class="down-content">
                            {{-- <span class="author">{{$solutions_key->category}}</span> --}}
                            <h4>{{$solutions_key->solutions_title}}</h4>
                        </div>
                    </div>
                </div>


                @endforeach




                {{-- <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
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
                </div> --}}
            </div>
            <div class="col-12 col-lg-12">
                <div class="space-50"></div>
                {!! $solutions->links('vendor.pagination.my_public_bootstrap-4') !!}
            </div>
        </div>
    </section>





    <div class="section events" id="events">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Case Study</h6>
            <h2>Upcoming Case Study</h2>
          </div>
        </div> --}}
                {{-- @foreach ($products as $productsdata)
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
            @endforeach --}}
            </div>
            <div class="col-12 col-lg-12">
                <div class="space-50"></div>
                {{-- {!! $blogs->links('vendor.pagination.my_public_bootstrap-4') !!} --}}
            </div>
        </div>
    </div>





@endsection
@section('page_script')
@endsection
