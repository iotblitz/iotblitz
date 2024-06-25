@extends('public.common.layout')
@section('page_content')
    <style>
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


    </style>


    <div class="main-banner" id="top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-text text-center">


                        <div class="header-text">
                            <h2 class="text-white">FAQs</h2>
                        </div>


                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ route('home') }}" class="text-white-50">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="{{ route('faqs') }}" class="text-white-50">FAQs</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="#"
                                    class="text-white"></a></li>
                        </ul>

                    </div>
                </div>


            </div>
        </div>
    </div>




    <div class="container mb-5">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">SDCAS</h1>
                        <p class="card-text">
                            <span class="badge badge-secondary">ASC</span>
                        </p>
                        <p class="card-text">
                            <i class="fas fa-building"></i> IotBlitz
                            <i class="fas fa-map-marker-alt"></i> ASDC,
                           sdcas
                            <i class="fas fa-signal"></i> sdca
                        </p>

                        <div class="d-flex justify-content-between">
                            <div>
                                <a href=""  class="btn btn-primary btn-lg mt-2">Apply</a>

                            </div>
                            <div> erfvwae</div>
                        </div>
                        <hr>
                        <div class="alert alert-info mt-3" role="alert">
                            drtgsrgbrg
                        </div>




                        <h5 class="card-title he-clas">Minimum qualifications:</h5>
                        {
                    </div>
                </div>






            </div>

        </div>
    </div>
@endsection
@section('page_script')

@endsection
