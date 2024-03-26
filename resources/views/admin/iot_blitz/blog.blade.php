@extends('admin.common.layout')
@section('admin_page_content')








<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Blog List</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Page</a></li>
                    <li class="breadcrumb-item"><a href="{{route('super_admin.page.blog')}}">Blog</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->
<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <!-- support-section start -->



        <div class="row">






            <!-- [ accordion-collapse ] start -->
            <div class="col-sm-12">

                <div class="accordion" id="accordionExample">




                    @foreach ( $blogs as $blogdata)


                    <div class="card mb-0">
                        <div class="card-header" id="headingOne{{$blogdata->blog_id}}">
                            <h5 class="mb-0"><a href="#!" data-toggle="collapse" data-target="#collapseOne{{$blogdata->blog_id}}" aria-expanded="true" aria-controls="collapseOne{{$blogdata->blog_id}}">{{$blogdata->blog_title}} #{{$blogdata->created_at}}</a></h5>
                        </div>
                        <div id="collapseOne{{$blogdata->blog_id}}" class="collapse" aria-labelledby="headingOne{{$blogdata->blog_id}}" data-parent="#accordionExample">
                            <div class="row no-gutters">
                                <!-- Left side: Content and buttons -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        {!! $blogdata->blog_description !!}

                                        <p>Keywords</p>
                                        @foreach(explode(",",$blogdata->blog_keywords) as $string)
                                        <span class="badge badge-info">{{ $string }}</span>

                                        @endforeach
                                        <div class="mt-3">
                                            {{-- <button type="button" class="btn btn-primary">Edit</button> --}}
                                            <button type="button" class="btn btn-danger">Delete</button>
                                            <a href="{{route('super_admin.page.blog_edit',$blogdata->blog_id)}}" class="btn btn-success">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right side: Image -->
                                @if ($blogdata->blog_image != null)


                                <div class="col-md-4 p-5">
                                    <img src="{{ asset('public/blog_images') }}/{{$blogdata->blog_image}}" class="card-img" alt="Image">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    @endforeach







                </div>
            </div>
        </div>
        <!-- [ accordion-collapse ] end -->




    </div>
</div>

<!-- Latest Customers end -->
</div>
<!-- [ Main Content ] end -->







@endsection
@section('admin_page_script')


@endsection
