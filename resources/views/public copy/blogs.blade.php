@extends('public.common.layout')
@section('page_content')
    <!--welcome area start-->
    <div class="welcome-area wow fadeInUp" id="home">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6 align-self-center">
                    <div class="welcome-right">
                        <div class="welcome-text">
                            <h1>Blogs</h1>
                            <h4>Sifting through teaspoons of clay and sand scraped from the
                                floors of caves, German researchers have managed.</h4>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="welcome-img">
                        <lottie-player src="{{ asset('public/public_page') }}/lottiefiles/content.json" background="transparent"
                            speed="1" style="width: 80%; height: auto;" loop autoplay
                            class="img-fluid"></lottie-player>
                        <!-- <img src="{{ asset('public_page') }}/assets/img/welcome-img.png" alt=""> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--welcome area end-->


    <!--blog area start-->
    <div class="blog-v wow fadeInUp section-padding" id="blog">
        <div class="container">
            <div class="row">

                @foreach ($blogs as $blogdata)


                {{-- <div class="col-12 col-lg-4">
                    <div class="single-blog wow fadeInUp">
                        <div class="single-blog-image" style="background:url('{{ asset('blog_images') }}/{{$blogdata->blog_image}}')"></div>
                        <div class="single-blog-text">
                            <a href="single-blog.html">{{$blogdata->blog_title}}</a>
                            <div class="space-10"></div>
                            <small> <i class="fa fa-clock-o"></i> January 12th, 2018</small>
                        </div>
                    </div>
                </div> --}}

                <div class="col-12 col-lg-4">
                    <div class="single-blog wow fadeInUp">
                        <div class="single-blog-image" style="background:url('{{ asset('public/blog_images') }}/{{$blogdata->blog_image}}')"></div>
                        <div class="single-blog-text">
                            <a href="{{ route('single_blogs', [preg_replace('/[^a-z0-9]+/', '-', strtolower(trim($blogdata->blog_title))).'-'.$blogdata->blog_id])}}">{{substr($blogdata->text_description, 0, 100)}}....</a>
                            <div class="space-10"></div>
                            <small> <i class="fa fa-clock-o"></i> January 12th, 2018</small>
                            <!-- Add the blog title here -->
                            <h4><a href="{{ route('single_blogs', [preg_replace('/[^a-z0-9]+/', '-', strtolower(trim($blogdata->blog_title))).'-'.$blogdata->blog_id])}}">{{$blogdata->blog_title}}</a></h4>
                        </div>
                    </div>
                </div>

                @endforeach



                <div class="col-12 col-lg-12">

                    <div class="space-50"></div>
                    {!! $blogs->links('vendor.pagination.bootstrap-4') !!}
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
