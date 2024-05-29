@extends('admin.common.layout')
@section('admin_page_content')








<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Solutions List</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Page</a></li>
                    <li class="breadcrumb-item"><a href="{{route('super_admin.page.solutions')}}">Solutions</a></li>
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




                    @foreach ( $solutions as $solutionsdata)


                    <div class="card mb-0">
                        <div class="card-header" id="headingOne{{$solutionsdata->solutions_id}}">
                            <h5 class="mb-0"><a href="#!" data-toggle="collapse" data-target="#collapseOne{{$solutionsdata->solutions_id}}" aria-expanded="true" aria-controls="collapseOne{{$solutionsdata->solutions_id}}">{{$solutionsdata->solutions_title}} #{{$solutionsdata->created_at}}</a></h5>
                        </div>
                        <div id="collapseOne{{$solutionsdata->solutions_id}}" class="collapse" aria-labelledby="headingOne{{$solutionsdata->solutions_id}}" data-parent="#accordionExample">
                            <div class="row no-gutters">
                                <!-- Left side: Content and buttons -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        {!! $solutionsdata->solutions_description !!}
                                        <p>Keywords</p>
                                        @foreach(explode(",",$solutionsdata->solutions_keywords) as $string)
                                        <span class="badge badge-info">{{ $string }}</span>
                                        @endforeach
                                        <div class="mt-3">
                                            {{-- <button type="button" class="btn btn-danger">Delete</button> --}}
                                            <a href="{{route('super_admin.page.solutions_edit',$solutionsdata->solutions_id)}}" class="btn btn-success">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right side: Image -->
                                @if ($solutionsdata->solutions_image != null)


                                <div class="col-md-4 p-5">
                                    <img src="{{ asset('public/solution_image') }}/{{$solutionsdata->solutions_image}}" class="card-img" alt="Image">
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
