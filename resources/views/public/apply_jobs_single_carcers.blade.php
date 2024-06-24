@extends('public.common.layout')
@section('page_content')
    <style>
        .he-clas {
            color: #7a6ad8 !important;
        }






        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 2rem;
        }

        .card-title {
            font-size: 1.75rem;
            font-weight: bold;
            color: #343a40;
        }

        .card-text strong {
            color: #343a40;
        }

        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }




        .btn-primary {
            background-color: #7a6ad8;
            border-color: #7a6ad8;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            font-size: 1rem;
            --bs-btn-hover-bg: #6a5bbf;
        }

        .badge-secondary {
            background-color: #6c757d;
        }












        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
            display: none;
        }

        .custom-file-input::before {
            content: 'Select File';
            display: none !important;
            background: #007bff;
            color: #fff;
            border-radius: 5px;
            padding: 8px 12px;
            outline: none;
            white-space: nowrap;
            cursor: pointer;
        }

        .custom-file-input:hover::before {
            background: #0056b3;
        }

        .custom-file-input:active::before {

            background: #0056b3;
        }

        .custom-file-input:disabled::before {

            background: #ddd;
            cursor: not-allowed;
        }

        .custom-file-label {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .form-control {
            background-color: #7a6ad8 !important;
        }

        .main-form input {
            background-color: #7a6ad8 !important;
        }
    </style>


    <div class="main-banner" id="top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-text text-center">


                        <div class="header-text">
                            <h2 class="text-white">Apply Job</h2>
                        </div>


                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ route('home') }}" class="text-white-50">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="{{ route('careers') }}" class="text-white-50">careers</a>
                            </li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="{{ route('single_careers', [str_replace(' ', '-', $product->title) . '-' . $product->careers_id]) }}" class="text-white-50">{{ ucwords($product->title) }}</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="#" class="text-white">Apply</a></li>
                        </ul>

                    </div>
                </div>


            </div>
        </div>
    </div>







    <div class="container mb-5">
        <div class="row">
            <div class="col-md-9 mt-5">



                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">{{ $product->title }}</h1>

                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="card-text">
                                    <span class="badge badge-secondary">{{ $product->role }}</span>
                                </p>
                            </div>
                            <div> {{ date('j F, Y', strtotime($product->end_date)) }}</div>
                        </div>



                        <p class="card-text">
                            <i class="fas fa-building"></i> IotBlitz
                            <i class="fas fa-map-marker-alt"></i> {{ $product->countries_name }},
                            {{ $product->state_name }}, {{ $product->citi_name }}
                            <i class="fas fa-signal"></i> {{ $product->experience }}
                        </p>

                        <div class="d-flex justify-content-between">

                            <hr>

                            <div class="mt-5">
                                {{-- <div style="background-color: #7a6ad8 !important"> --}}

                                <form action="{{ route('apply_jobs_save', [$carcers_id]) }}" method="POST" id="myform"
                                    class="main-form" enctype="multipart/form-data">
                                    <div class="modal-body row">
                                        @csrf
                                        <div class="col-md-6">


                                            <div class="form-group">

                                                <input type="text" class="form-control" id="name" required
                                                    placeholder="Enter your name" name="name"
                                                    style="background-color:#7a6ad8 !important">
                                            </div>
                                        </div>
                                        <div class="col-md-6">


                                            <div class="form-group">

                                                <input type="email" class="form-control" id="email" required
                                                    placeholder="Enter your email" name="email">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="tel" class="form-control" id="mobile_no" required
                                                    placeholder="Enter your mobile number" name="mobile_no">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="about" id="message" class="form-control" placeholder="About yourself" spellcheck="false" required></textarea>
                                            </div>
                                        </div>


                                        <div class="col-md-6">



                                            <div class="form-group">
                                                <div class="custom-file mb-3">
                                                    <input type="file" class="custom-file-input" id="customFile"
                                                        required="" name="uploadfile" accept=".doc,.docx,.txt,.pdf">
                                                    {{-- <label class="custom-file-label" for="customFile">Upload CV</label> --}}
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">


                                            <div class="custom-file mb-3">
                                                <fieldset>
                                                    <div class="g-recaptcha"
                                                        data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                                </fieldset>
                                            </div>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #7a6ad8 !important; color: #fff">Submit</button>
                                    {{-- <input type="submit" value="Submit"> --}}

                                </form>
                            </div>



                        </div>
                        <hr>
                        <div class="alert alert-info mt-3" role="alert">
                            {!! $product->note !!}
                        </div>




                        <h5 class="card-title he-clas">Minimum qualifications:</h5>
                        {!! $product->minimum_qualifications !!}
                    </div>
                </div>

                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <h5 class="card-title he-clas">Preferred qualifications:</h5>
                        {!! $product->preferred_qualifications !!}
                    </div>
                </div>


                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <h5 class="card-title he-clas">About the job:</h5>
                        {!! $product->about_job !!}
                    </div>
                </div>

                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <h5 class="card-title he-clas">Responsibilities</h5>
                        {!! $product->responsibilities !!}
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                    <h5>Active Jobs</h5>
                    @foreach ($latest_posts_carcers as $ltdata)
                        <div class="media border-bottom py-3" style="display: flex;  align-items: flex-start;"
                            onclick="location.href = '{{ route('single_careers', [str_replace(' ', '-', $ltdata->title) . '-' . $ltdata->careers_id]) }}';">
                            {{-- <a href="#">
                                <img class="mr-4" src="{{ asset('public/blog_images') }}/{{ $ltdata->blog_image }}"
                                    alt=""
                                    style="width: 80px; height : 80px; object-fit: cover; margin-right: 1.5rem !important; border-radius: 5px">
                            </a> --}}
                            <div class="media-body" style=" flex: 1;">
                                <h6 class="my-1"><a href="#" class="text-body">{{ $ltdata->title }}</a>
                                </h6>
                                <p class="my-1"><a href="#"
                                        class="text-body text-justify">{!! $product->minimum_qualifications !!}</a>
                                </p>
                                <span class="text-sm text-muted">{{ date('j F, Y', strtotime($ltdata->end_date)) }}</span>
                            </div>
                        </div>
                    @endforeach
                    <a href="{{ route('careers') }}" class="btn btn-primary mt-3"
                        style="background-color: #7a6ad8 !important">View All</a>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('page_script')
@endsection
