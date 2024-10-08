@php
    $title="Solutions";
    $meta_author="iotblitz";
    $meta_keywords="Solutions, Solution, iot solutions";
    $meta_description="IoTBlitz specializes in IoT software design and development, IIoT Platforms, and end-to-end IoT Solutions. Our custom-designed IoT Platforms and Remote Monitoring Systems aim to enhance industry efficiency and performance.";
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

        .category {
            background-color: #7a6ad8;
            color: #fff;
            font-size: 25px;
            text-transform: uppercase;
            padding: 5px 15px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 50px;
        }

















        .content-container {
            display: flex;
            align-items: center;
            /* padding: 20px; */
            background-color: #f1f0fe;
            /* border: 1px solid #ccc; */
            /* margin-bottom: 10px; */
            cursor: pointer;
            transition: all 0.3s ease-in-out;


            border-radius: 25px;
            position: relative;
            padding: 40px;
            margin-bottom: 96px;




        }

        .content-container img {
            width: 100%;
            height: 100%;
        }

        .content-head {
            flex-grow: 1;
            margin-left: 15px;
        }

        .arrow-icon {
            /* position: absolute;
            right: 0;
            font-size: 18px;
            background-color: #7a6ad8;
            border-radius: 50%;
            padding: 2%;
            display: inline-block;
            text-align: center;
            width: 1px;
            /* line-height: 120px;
            /* font-size: 18px;
            z-index: 1;
            color: #fff;
            border-radius: 100% 0% 0% 100%; */


            position: absolute;
            right: 0;
            top: 22px;
            background-color: #7a6ad8;
            width: 60px;
            height: 120px;
            display: inline-block;
            text-align: center;
            line-height: 120px;
            font-size: 18px;
            z-index: 1;
            color: #fff;
            border-radius: 60% 0% 0% 60%;;
        }

        .expanded-content {
            display: none;
            margin-top: 10px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
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
                        <h1 class="text-white">OUR SOLUTIONS</h1>
                        <p class="text-white">IoTBlitz specializes in IoT software design and development, IIoT Platforms,
                            and end-to-end IoT Solutions. Our custom-designed IoT Platforms and Remote Monitoring Systems
                            aim to enhance industry efficiency and performance.</p>

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
            {{-- <ul class="event_filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Show All</a>
                </li>
                <li>
                    <a href="#!" data-filter=".design">Webdesign</a>
                </li>
                <li>
                    <a href="#!" data-filter=".development">Development</a>
                </li>
                <li>
                    <a href="#!" data-filter=".wordpress">Wordpress</a>
                </li>
            </ul> --}}
            @foreach ($products as $cattagorydata)
                <h2 class="mb-5 category">{{ $cattagorydata->category }}</h2>












                {{-- <div class="content-container">
                    <div class="row">
                        <div class="col-md-1">
                            <img src="https://via.placeholder.com/40" alt="Icon">
                        </div>
                        <div class="col-md-9">
                            <div class="content-head">
                                <h5 class="mb-0">Content Head This is the expanded content that appears when you click the arrow.</h5>
                                <div class="expanded-content">
                                    <p>This is the expanded content that appears when you click the arrow.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="arrow-icon">
                                <i class="fa-solid fa-arrow-down"></i>
                            </div>
                        </div>
                    </div>



                </div> --}}


                <div class="row event_box">


                    @foreach ($cattagorydata->products as $product_key)
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development"
                            onclick="location.href = '{{ route('single_product', [preg_replace('/[^a-z0-9]+/', '-', strtolower(trim($product_key->product_title))) . '-' . $product_key->product_id]) }}';">
                            <div class="events_item">
                                <div class="thumb">
                                    <a
                                        href="{{ route('single_product', [preg_replace('/[^a-z0-9]+/', '-', strtolower(trim($product_key->product_title))) . '-' . $product_key->product_id]) }}"><img
                                            src="{{ asset('public/product_image') }}/{{ $product_key->product_image }}"
                                            alt=""></a>
                                    {{-- <span class="category"></span> --}}
                                    {{-- <span class="price">

                                <h6><em>$</em>340  <i class="fa-solid fa-globe"></i> </h6>
                            </span> --}}
                                </div>
                                <div class="down-content">
                                    <span class="author"></span>
                                    <h4>{{ $product_key->product_title }}</h4>
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
            @endforeach
            <div class="col-12 col-lg-12">
                <div class="space-50"></div>
                {{-- {!! $products->links('vendor.pagination.my_public_bootstrap-4') !!} --}}
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
                    <div class="item" onclick="location.href = '{{ route('single_blogs', [preg_replace('/[^a-z0-9]+/', '-', $blogdata->blog_title).'-'.$blogdata->blog_id])}}';">
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
                            <a href="{{ route('single_blogs', [preg_replace('/[^a-z0-9]+/', '-', $blogdata->blog_title).'-'.$blogdata->blog_id])}}"><i class="fa fa-angle-right"></i></a>

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
