@extends('admin.common.layout')
@section('admin_page_content')








<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Careers List</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Page</a></li>
                    <li class="breadcrumb-item"><a href="{{route('super_admin.page.careerss')}}">Careers</a></li>
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




                    @foreach ( $careers as $careersdata)


                    <div class="card mb-0">
                        <div class="card-header" id="headingOne{{$careersdata->careers_id}}">
                            <h5 class="mb-0"><a href="#!" data-toggle="collapse" data-target="#collapseOne{{$careersdata->careers_id}}" aria-expanded="true" aria-controls="collapseOne{{$careersdata->careers_id}}">{{$careersdata->title}} #{{$careersdata->created_at}}</a></h5>
                        </div>
                        <div id="collapseOne{{$careersdata->careers_id}}" class="collapse" aria-labelledby="headingOne{{$careersdata->careers_id}}" data-parent="#accordionExample">
                            <div class="row no-gutters">
                                <!-- Left side: Content and buttons -->
                                <div class="col-md-12">
                                    <div class="card-body">
                                        {!! $careersdata->minimum_qualifications !!}

                                        <hr>
                                        {!! $careersdata->preferred_qualifications !!}
                                        <hr>
                                        {!! $careersdata->about_job !!}
                                        <hr>
                                        {!! $careersdata->responsibilities !!}
                                        <hr>
                                        {!! $careersdata->note !!}


                                        <h6>Etc</h6>

                                        <span class="badge badge-info">{{ $careersdata->experience }}</span>
                                        <span class="badge badge-info">{{ $careersdata->end_date }}</span>

                                        <div class="mt-3">
                                            {{-- <button type="button" class="btn btn-danger">Delete</button> --}}
                                            <a href="{{route('super_admin.page.careerss_edit',$careersdata->careers_id)}}" class="btn btn-success">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right side: Image -->

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
