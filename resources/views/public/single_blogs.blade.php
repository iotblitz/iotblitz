@php
    $title="$blogs->blog_title";
    $meta_author=$blogs->name;
    $meta_keywords="iotblitz, blogs, iotblitz blogs";
    $meta_description=$blogs->focus_keyword.', '.$blogs->meta_descriptions;
@endphp

@extends('public.common.layout')
@section('page_style')
    <style>
        .blog-post {
            margin-top: 20px;
        }

        /* Paragraph */
        .blog-content p {
            font-size: 1em;
            line-height: 1.6;
            color: #555;
            margin-bottom: 15px;
            /* text-align: justify; */
        }

        /* Headings */
        .blog-content h1,
        .blog-content h2,
        .blog-content h3,
        .blog-content h4,
        .blog-content h5,
        .blog-content h6 {
            font-weight: bold;
            color: #333;
            /* margin-top: 30px; */
            /* Adjust spacing between headings */
            margin-bottom: 15px;

            /* Adjust spacing between headings */
        }

        /* Lists */
        /* Unordered List */


        /* Links */
        .blog-content a {
            color: #007bff;
            /* Link color */
            text-decoration: underline;
            /* Underline link */
        }

        .blog-content a:hover {
            color: #0056b3;
            /* Hover color */
            text-decoration: none;
            /* Remove underline on hover */
        }

        /* Blockquotes */
        .blog-content blockquote {
            border-left: 5px solid #007bff;
            /* Border color for blockquote */
            padding-left: 15px;
            /* Adjust padding */
            margin-left: 0;
            /* Reset margin */
        }

        /* Horizontal Rule */
        .blog-content hr {
            border: 1px solid #ccc;
            /* Border color */
            margin: 20px 0;
            /* Adjust margin */
        }




        /* Code */
        .blog-content code {
            font-family: 'Courier New', monospace;
            /* Specify code font */
            background-color: #f8f9fa;
            /* Background color */
            padding: 2px 5px;
            /* Adjust padding */
            border-radius: 3px;
            /* Rounded corners */
        }

        /* Preformatted Text */
        .blog-content pre {
            font-family: 'Courier New', monospace;
            /* Specify font */
            background-color: #f8f9fa;
            /* Background color */
            padding: 10px;
            /* Adjust padding */
            border-radius: 5px;
            /* Rounded corners */
            overflow-x: auto;
            /* Add horizontal scroll if needed */
        }


        /* Emphasized Text */
        .blog-content em {
            font-style: italic;
        }

        /* Strong Text */
        .blog-content strong {
            font-weight: bold;
        }

        /* Italics Text */

        /* Bold Text */
        .blog-content b {
            font-weight: bold;
        }

        /* Underline Text */
        .blog-content u {
            text-decoration: underline;
        }

        /* Strikethrough Text */
        .blog-content s {
            text-decoration: line-through;
        }

        /* Superscript */
        .blog-content sup {
            vertical-align: super;
            font-size: 0.8em;
            /* Adjust size if needed */
        }

        /* Subscript */
        .blog-content sub {
            vertical-align: sub;
            font-size: 0.8em;
            /* Adjust size if needed */
        }

        /* Definition Lists */
        .blog-content dl {
            margin-bottom: 15px;
            /* Adjust spacing between definition lists */
        }

        .blog-content dt {
            font-weight: bold;
        }

        .blog-content dd {
            margin-left: 20px;
            /* Adjust indentation */
        }

        /* Address */
        .blog-content address {
            font-style: italic;
        }

        /* Abbreviation */
        .blog-content abbr {
            border-bottom: 1px dotted #000;
            cursor: help;
        }

        /* Marked Text */
        .blog-content mark {
            background-color: #ff0;
            color: #000;
        }

        /* Deleted Text */
        .blog-content del {
            text-decoration: line-through;
        }

        /* Inserted Text */
        .blog-content ins {
            text-decoration: underline;
        }

        /* Details */
        .blog-content details {
            margin-bottom: 15px;
            /* Adjust spacing */
        }

        .blog-content summary {
            font-weight: bold;
            cursor: pointer;
        }

        /* Figure */
        .blog-content figure {
            margin: 0;
        }

        .blog-content figcaption {
            font-style: italic;
        }

        /* Time */
        .blog-content time {
            font-style: italic;
        }

        /* Progress */
        .blog-content progress {
            width: 100%;
            height: 20px;
        }

        /* Meter */
        .blog-content meter {
            display: inline-block;
            vertical-align: baseline;
            width: 100px;
            /* Adjust width as needed */
            height: 10px;
            /* Adjust height as needed */
        }

        /* Data */
        .blog-content data {
            font-weight: bold;
            color: #007bff;
            /* Data color */
        }

        /* Main */
        .blog-content main {
            display: block;
        }

        /* Aside */
        .blog-content aside {
            float: right;
            width: 30%;
            margin-left: 20px;
            /* Adjust spacing from main content */
        }

        /* Article */
        .blog-content article {
            display: block;
        }

        /* Footer */
        .blog-content footer {
            display: block;
            text-align: center;
            margin-top: 20px;
            /* Adjust spacing from main content */
        }

        /* Header */
        .blog-content header {
            display: block;
            text-align: center;
            margin-bottom: 20px;
            /* Adjust spacing from main content */
        }

        /* Section */
        .blog-content section {
            display: block;
        }


        /* Table */
        .blog-content table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
            /* Adjust spacing between tables */
        }

        /* Table Header */
        .blog-content th {
            background-color: #f2f2f2;
            /* Header background color */
            font-weight: bold;
            padding: 8px;
            border: 1px solid #ddd;
            /* Border color */
        }

        /* Table Body */
        .blog-content td {
            padding: 8px;
            border: 1px solid #ddd;
            /* Border color */
        }

        /* Table Striped Rows */
        .blog-content tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
            /* Odd row background color */
        }

        /* Table Hover Effect */
        .blog-content tbody tr:hover {
            background-color: #f2f2f2;
            /* Hover background color */
        }

        /* Table Caption */
        .blog-content caption {
            font-weight: bold;
            margin-bottom: 10px;
            /* Adjust spacing */
            text-align: center;
        }

        /* Table Responsive */
        .blog-content table {
            overflow-x: auto;
            /* Add horizontal scroll if needed */
        }

        .badge {
            background-color: #7a6ad8 !important;
        }
    </style>

@endsection
@section('page_content')


    <div class="main-banner" id="top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-text text-center">


                        <div class="header-text">
                            {{-- <h2 class="text-white">Case Study</h2> --}}
                        </div>


                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ route('home') }}" class="text-white-50">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="{{ route('blogs') }}" class="text-white-50">Blogs</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="#"
                                    class="text-white">{{ ucwords($blogs->blog_title) }}</a></li>
                        </ul>

                    </div>
                </div>


            </div>
        </div>
    </div>




    <div class="container mb-5">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-post">

                    {{-- <img src="https://via.placeholder.com/800x400" alt="Blog Post Image"> --}}
                    <h1 class="blog-title mb-2">{{ $blogs->blog_title }}</h1>
                    <img src="{{ asset('public/blog_images') }}/{{ $blogs->blog_image }}"
                        style="height: auto; width: 100%; border-radius: 20px; " alt="Blog Image" class="mb-2">
                    <div class="blog-content mb-2">
                        <div class="blog-content mb-2">
                            <div class="d-flex align-items-center mb-3">
                                <img src="@if($blogs->dp) {{asset('public/public_page') }}/{{$blogs->dp}} @else {{ asset('public/public_page') }}/assets/images/user.webp  @endif"
                                    alt="{{$blogs->featured_image_alt_text}}" title="{{$blogs->image_title}}" class="rounded-circle me-3" style="width: 50px">
                                <div class="text-center">
                                    <div>
                                        <h5 class="mb-0"> <a href="{{route('public_blog_author', ['author' => preg_replace('/[^a-z0-9]+/', '-',$blogs->name)])}}">{{ ucfirst($blogs->name) }}</a></h5>
                                        <small class="text-muted">{{ date('j F, Y', strtotime($blogs->created_at)) }}</small>
                                    </div>
                                </div>
                            </div>
                            <div id="toc">
                                <h2>Table of Contents</h2>
                                <ul></ul>
                            </div>
                            <div class="content-place">
                                {!! $blogs->blog_description !!}
                            </div>



                            <div class="card" style=" background-color: #7a6ad8 !important; border-radius: 15px; padding: 20px;  color: #ffffff;">
                                <div class="card-body">
                                    {{-- <h5 class="card-title text-white">About the Author</h5> --}}
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="@if($blogs->dp) {{asset('public/public_page') }}/{{$blogs->dp}} @else {{ asset('public/public_page') }}/assets/images/user.webp  @endif" alt="Author Image" class="rounded-circle me-3" style="width: 50%">
                                        <div>
                                            <h5 class="card-title text-white" >{{ ucfirst($blogs->name) }}</h5>
                                            <p class="text-muted">{{
                                                ($blogs->user_type == 'C') ? 'Content Writer' :
                                                (($blogs->user_type == 'E') ? 'Employee' :
                                                (($blogs->user_type == 'M') ? 'Manager' :
                                                (($blogs->user_type == 'AD') ? 'Admin' :
                                                'Super Admin')))
                                            }}</p>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada augue id nibh commodo, eget sodales dui mollis. Vestibulum tincidunt felis quis tortor cursus, sed vehicula arcu ultricies. Nullam eu eros ut nisi rhoncus sollicitudin. Proin id risus ut nulla fringilla gravida.</p>
                                            <div class="social-icons mt-3">
                                                <a href="#" class="text-white me-4"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#" class="text-white me-4"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="text-white me-4"><i class="fab fa-youtube"></i></a>
                                                <a href="#" class="text-white me-4"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="" class="text-white me-4"><i class="fab fa-x-twitter"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                        {{-- <div class=""
                            style=" background-color: #7a6ad8 !important; border-radius: 15px; padding: 20px;  color: #ffffff;">
                            <form action="{{ route('public_comments', [$blogs->blog_id]) }}" method="POST" id="myform"
                                class="main-form">
                                @csrf
                                <input type="hidden" name="comment_by_page" value="B">
                                <input type="hidden" name="blog_id" value="{{ $blogs->blog_id }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input type="text" name="name" id="name" placeholder="Your Name..."
                                                autocomplete="on" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input type="email" name="email" id="email" placeholder="Email"
                                                autocomplete="on" required>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="space-30"></div>

                                <fieldset>
                                    <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Say something..."></textarea>
                                </fieldset>
                                <div class="row">
                                    <div class="col-lg-6  mb-4">
                                        <fieldset>
                                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-md-end  mb-4">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="orange-button">Comment
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>

                            </form>

                            <hr>
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="blog-comment">
                                        <h4 class="text-white">{{ $blogs_count }} comments</h4>
                                        <div class="space-30"></div>
                                        @foreach ($blogs->public_comments as $comments)
                                            <div class="single-comment text-white mt-3" style="max-height: 200px;">
                                                <div class="row no-gutters">
                                                    <div
                                                        class="col-md-2 d-flex align-items-center justify-content-center   d-none d-md-block">
                                                        <img src="{{ asset('public/public_page') }}/assets/images/user.webp"
                                                            class="card-img" alt="Profile Image" width="10px">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="card-body">

                                                            <div class="row">
                                                                <div class="col">
                                                                    <h5 class="card-title mb-0">{{ $comments->name }}</h5>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <p class="card-subtitle mb-0  text-white">
                                                                        <small>{{ date('j F, Y', strtotime($comments->created_at)) }}</small>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <p class="card-text  text-white">{{ $comments->comments }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                        @endforeach

                                    </div>
                                    <div class="space-50"></div>

                                </div>
                            </div>

                        </div> --}}
                    </div>
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
                                <p class="my-1"><a href="#"
                                        class="text-body text-justify">{{ substr($ltdata->text_description, 0, 37) }}...</a>
                                </p>
                                <span
                                    class="text-sm text-muted">{{ date('j F, Y', strtotime($ltdata->created_at)) }}</span>
                            </div>
                        </div>
                    @endforeach
                    <a href="{{ route('blogs') }}" class="btn btn-primary mt-3"
                        style="background-color: #7a6ad8 !important">View All</a>
                </div>


                <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                    <h5 class="card-title">Popular Tags</h5>
                    <div class="d-flex flex-wrap justify-content-between">

                        {{-- @foreach ($blogs->public_tags as $tagdata)


                        <a href="#" class="text-decoration-none mb-2">
                            <span class="badge">{{$tagdata->tag->tags_name}}</span>
                        </a>

                        @endforeach --}}



                        @foreach ($tags as $tagdata)


                            <a href="{{route('public_blog_tags', ['tags' => preg_replace('/[^a-z0-9]+/', '-',$tagdata->tags_name)])}}" class="text-decoration-none mb-2">
                                <span class="badge">{{$tagdata->tags_name}}</span>
                            </a>
                            @endforeach

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
@section('page_script')
    <script>
        $(document).ready(function() {
            const tocContainer = $('#toc');
            const contentPlaces = $('.content-place h1');

            contentPlaces.each(function(index) {
                // Create anchor element with numbered text
                const anchor = $('<a></a>').text((index + 1) + '. ' + $(this).text()).attr('href',
                    `#heading-${index}`);
                $(this).attr('id', `heading-${index}`);

                // Create list item and append the anchor
                const listItem = $('<li></li>').append(anchor);

                // Append list item to TOC container
                tocContainer.append(listItem);
            });

            // Add click event for smooth scrolling
            tocContainer.on('click', 'a', function(event) {
                event.preventDefault();

                const targetId = $(this).attr('href');
                const targetPosition = $(targetId).offset().top - 200; // 200px above the target heading

                $('html, body').animate({
                    scrollTop: targetPosition
                }, 500); // Animation duration in milliseconds
            });
        });
    </script>
@endsection
