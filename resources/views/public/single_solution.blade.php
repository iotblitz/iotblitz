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
            text-align: justify;
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
        .blog-content i {
            font-style: italic;
        }

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
    </style>
@endsection
@section('page_content')
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-text text-center">


                        {{-- <div class="header-text">
                            <h2 class="text-white">Solution</h2>
                        </div> --}}


                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ route('home') }}" class="text-white-50">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="{{ route('solutions') }}"
                                    class="text-white-50">Solutions</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="#"
                                    class="text-white">{{ ucwords($solutions->solutions_title) }}</a></li>
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
                    <h1 class="blog-title mb-2">{{ $solutions->solutions_title }}</h1>
                    {{-- <img src="https://via.placeholder.com/800x400" alt="Blog Post Image"> --}}
                    <img src="{{ asset('public/solution_image') }}/{{ $solutions->solutions_image }}"
                        style="height: auto; width: 100%;border-radius: 20px; object-fit: cover;" alt="Blog Image"
                        class="mb-2">
                    <div class="blog-content mb-2">
                        {!! $solutions->solutions_description !!}
                    </div>



                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                    <h5>Other Services</h5>
                    @foreach ($solution as $solutions_key)
                        <div class="media border-bottom py-3" style="display: flex;  align-items: flex-start;">
                            <a
                                href="{{ route('single_solutions', [str_replace(' ', '-', $solutions_key->solutions_title) . '-' . $solutions_key->solutions_id]) }}">
                                <img class="mr-4" src="{{ asset('public/solution_image') }}/{{$solutions_key->solutions_image}}"
                                    alt=""
                                    style="width: 80px; height : 80px; object-fit: cover; margin-right: 1.5rem !important; border-radius: 5px">
                            </a>
                            <div class="media-body" style=" flex: 1;">
                                <h6 class="my-1">
                                    <a href="{{ route('single_solutions', [str_replace(' ', '-', $solutions_key->solutions_title) . '-' . $solutions_key->solutions_id]) }}"
                                        class="text-body">{{ $solutions_key->solutions_title }}</a>
                                </h6>
                                <p class="my-1">
                                    <a href="{{ route('single_solutions', [str_replace(' ', '-', $solutions_key->solutions_title) . '-' . $solutions_key->solutions_id]) }}"
                                        class="text-body text-justify">{{ substr($solutions_key->text_description, 0, 37) }}...</a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <a href="{{ route('blogs') }}" class="btn btn-primary mt-3"
                        style="background-color: #7a6ad8 !important">View All</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_script')
@endsection
