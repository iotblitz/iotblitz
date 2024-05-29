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




















        ul.job-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        ul.job-list>li.job-preview {
            background: #fff;
            border: 1px solid #d7e2e9;
            -webkit-border-radius: 0.4rem;
            -moz-border-radius: 0.4rem;
            border-radius: 0.4rem;
            padding: 1.5rem 2rem;
            margin-bottom: 1rem;
            float: left;
            width: 100%;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        ul.job-list>li.job-preview:hover {
            cursor: pointer;
            -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
        }

        .job-title {
            margin-top: 0.6rem;
        }

        .company {
            color: #96a4b1;
        }

        .job-preview .btn {
            margin-top: 1.1rem;
        }

        .btn-apply {
            text-transform: uppercase;
            font-size: 0.875rem;
            font-weight: 800;
            letter-spacing: 1px;
            background-color: transparent;
            color: #393a5f;
            border: 2px solid #393a5f;
            padding: 0.6rem 2rem;
            -webkit-border-radius: 2rem;
            -moz-border-radius: 2rem;
            border-radius: 2rem;
        }

        .btn-apply:hover {
            background-color: #393a5f;
            color: #fff;
            border: 2px solid #393a5f;
        }

        @media (max-width: 575px) {
            .job-preview .content {
                width: 100%;
            }
        }
    </style>

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="header-text mt-5">

                        {{-- <span class="category text-white">Our Courses</span> --}}
                        <h2 class="text-white">Careers</h2>
                        <p class="text-white">Scholar is a free CSS template designed by TemplateMo for online educational
                            related websites. This layout is based on the famous Bootstrap v5.3.0 framework.</p>

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



    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <ul class="job-list">
                        <li class="job-preview">
                            <div class="content float-left">
                                <h4 class="job-title">
                                    Senior Web Designer
                                </h4>
                                <h5 class="company">
                                    Seattle, WA
                                </h5>
                            </div>
                            <a href="#" class="btn btn-apply float-sm-right float-xs-left">
                                Apply
                            </a>
                        </li>
                        <li class="job-preview">
                            <div class="content float-left">
                                <h4 class="job-title">
                                    Front-End Engineer
                                </h4>
                                <h5 class="company">
                                    New York, NY
                                </h5>
                            </div>
                            <a href="#" class="btn btn-apply float-sm-right float-xs-left">
                                Apply
                            </a>
                        </li>
                        <li class="job-preview">
                            <div class="content float-left">
                                <h4 class="job-title">
                                    UI/UX Designer
                                </h4>
                                <h5 class="company">
                                    Los Angeles, CA
                                </h5>
                            </div>
                            <a href="#" class="btn btn-apply float-sm-right float-xs-left">
                                Apply
                            </a>
                        </li>
                        <li class="job-preview">
                            <div class="content float-left">
                                <h4 class="job-title">
                                    Web Developer
                                </h4>
                                <h5 class="company">
                                    Los Angeles, CA
                                </h5>
                            </div>
                            <a href="#" class="btn btn-apply float-sm-right float-xs-left">
                                Apply
                            </a>
                        </li>
                        <li class="job-preview">
                            <div class="content float-left">
                                <h4 class="job-title">
                                    Web Designer &amp; Developer
                                </h4>
                                <h5 class="company">
                                    Seattle, WA
                                </h5>
                            </div>
                            <a href="#" class="btn btn-apply float-sm-right float-xs-left">
                                Apply
                            </a>
                        </li>
                        <li class="job-preview">
                            <div class="content float-left">
                                <h4 class="job-title">
                                    Visual Designer
                                </h4>
                                <h5 class="company">
                                    Los Angeles, CA
                                </h5>
                            </div>
                            <a href="#" class="btn btn-apply float-sm-right float-xs-left">
                                Apply
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('page_script')
@endsection
