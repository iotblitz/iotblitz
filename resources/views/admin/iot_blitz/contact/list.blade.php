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
                        <h5 class="m-b-10">Contact List</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Page</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('super_admin.page.blog') }}">Contact List</a></li>
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

                            <h5>Contact List</h5>

                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile No</th>
                                        <th>message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contact as $contact_data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $contact_data->name }}</td>
                                            <td>{{ $contact_data->email }}</td>
                                            <td>{{ $contact_data->mobile }}</td>
                                            <td>{{ $contact_data->message }}</div>
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
