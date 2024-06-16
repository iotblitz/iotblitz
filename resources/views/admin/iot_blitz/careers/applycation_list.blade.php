@extends('admin.common.layout')
@section('admin_page_content')
    <style>
        /* Some additional styling */
        .badge-container {
            display: inline-block;
            margin-right: 5px;
            /* Adjust as needed */
        }
    </style>



    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Application List</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Page</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('super_admin.page.blog') }}">Solutions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5>{{ $jobs_careers->title }}</h5>
                        </div>
                        <div>
                            {{ date('j F, Y', strtotime($jobs_careers->end_date)) }}
                        </div>
                    </div>
                    <div <span class="d-block m-t-5">{{ $jobs_careers->role }}</span>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile No</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($job_applications as $job_applications_data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $job_applications_data->name }}</td>
                                            <td>{{ $job_applications_data->email }}</td>
                                            <td>{{ $job_applications_data->mobile }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ asset('public/resume') }}/{{$job_applications_data->cv_file}}"
                                                        class="btn btn-primary btn-sm m-1">View CV/Resume</a>
                                                    {{-- <a href=""
                                                        class="btn btn-danger btn-sm m-1">Delete</a> --}}
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    @endsection
    @section('admin_page_script')
    @endsection
