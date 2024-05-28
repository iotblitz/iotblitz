@extends('public.common.layout')
@section('page_content')
    <!--welcome area start-->


    <!--single blog area start-->
    <div class="single-blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9 offset-1">
                    {{-- <a href="#" class="single-blog-top">Lifestyle hacks</a> --}}
                    <div class="space-10"></div>
                    <h1 class="single-blog-h1">{{$blogs->blog_title}}</h1>
                    <div class="space-10"></div>
                    <small>by IoTBlitz <span><i class="fa fa-clock-o"></i> {{$blogs->created_at}}</span></small>
                    <div class="space-50"></div>
                    <div class="single-blog-image" style="background:url('{{ asset('public/blog_images') }}/{{$blogs->blog_image}}')"></div>
                    {{-- <img src="{{ asset('blog_images') }}/{{$blogs->blog_image}}" style="height: auto; width: 100%;" alt="Blog Image"> --}}




                    {!! $blogs->blog_description !!}





                    <div class="space-50"></div>

                    <div class="single-blog-contact">
                        <h4>leave a comment</h4>
                        <div class="space-30"></div>
                        <form action="{{route('public_comments',[$blogs->blog_id])}}" method="POST" id="myform">
                            @csrf
                            <input type="hidden" name="comment_by_page" value="B">
                            <input type="hidden" name="blog_id" value="{{$blogs->blog_id}}">
                            <input type="text" placeholder="your name" name="name" required>
                            <input type="email" placeholder="email" name="email" required>
                            <div class="space-30"></div>
                            <textarea cols="30" rows="10" placeholder="say something" name="comments"></textarea>
                        </form>
                        <div class="space-30"></div>
                        <a href="javascript:void(0)"  onclick="document.getElementById('myform').submit()" class="gradient-btn">comment now</a>

                    </div>
                </div>
            </div>
            <div class="space-50"></div>
            <div class="row">
                <div class="col-12 col-lg-9 offset-1">


                    <div class="blog-comment">
                        <h4>{{$blogs_count}} comments</h4>
                        <div class="space-30"></div>



                        @foreach ($blogs->public_comments as $comments)


                        <div class="single-comment" style="height: 200px !important">
                            <div class="comment-img">
                                <img src="{{ asset('public/public_page') }}/lottiefiles/profile.png" alt="">
                                <div class="space-10"></div>
                                <p>{{$comments->name}}</p>
                            </div>
                            <div class="comment-text-form">
                                <small>{{$comments->created_at}}</small>
                                <div class="space-10"></div>
                                <p>{{$comments->comments}}</p>
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
    <!--single blog area end-->
@endsection
@section('page_script')
@endsection
