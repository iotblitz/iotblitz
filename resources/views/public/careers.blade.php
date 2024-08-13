@php
    $title="Careers";
    $meta_author="iotblitz";
    $meta_keywords="Careers, jobs, job openings, job opportunities, job postings, applications jobs, job vacancies, job listings, job search, job sites, job recruitment, job application, job opportunities, job posting sites, job search sites";
    $meta_description="Explore exciting career opportunities at IoTBlitz. Join our team of techies and innovators to create apps, IoT devices, and industry 4.0 solutions to shape the future of technology.";
@endphp
@extends('public.common.layout')
@section('page_style')
    <style>
        .main-banner {
            padding: 50px 0;
        }

        .header-text {
            text-align: left;
        }

        .buttons {
            margin-top: 20px;
        }

        .lottie-animation {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
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

        .badge-secondary {
            background-color: #6c757d;
        }

        /* ul {
                    list-style-type: none;
                    padding-left: 0;
                }

                ul li {
                    padding-left: 1.5rem;
                    position: relative;
                    font-size: 1rem;
                    color: #6c757d;
                }

                ul li::before {
                    content: "\2022";
                    color: #7a6ad8;
                    font-weight: bold;
                    display: inline-block;
                    width: 1rem;
                    margin-left: -1.5rem;
                } */

        .btn-primary {
            background-color: #7a6ad8;
            border-color: #7a6ad8;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            font-size: 1rem;
        }





        /* Position the toast notification */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000; /* Ensure it's on top of everything */
        }
        .toast-custom {
            background-color: rgba(0, 0, 0, 0.5); /* Transparent background */
        }

    </style>

@endsection
@section('page_content')

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="header-text mt-5">

                        {{-- <span class="category text-white">Our Courses</span> --}}
                        <h2 class="text-white">CAREERS</h2>
                        <p class="text-white">Explore exciting career opportunities at IoTBlitz. Join our team of techies and innovators to create apps, IoT devices, and industry 4.0 solutions to shape the future of technology. </p>

                    </div>
                </div>
                <div class="col-lg-5  d-none d-md-block">
                    <div class="lottie-animation" style="padding: 40px">
                        <lottie-player
                            src="{{ asset('public/public_page') }}/assets/lottiefiles/Animation - 1716383634249.json"
                            background="transparent" speed="1" style="width: 100%; height: 100%;" loop
                            autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section>



        <div class="container mt-4 mb-4">
            @foreach ($careers as $careers_data)
                <div class="card mb-4">
                    <div class="card-body">


                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title">{{ $careers_data->title }}</h4>
                                {{-- <p class="card-text"><strong>Google</strong></p> --}}
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i>
                                    {{ $careers_data->countries_name }},
                                    {{ $careers_data->state_name }}, {{ $careers_data->citi_name }}</p>
                                <p class="card-text"><span class="badge badge-secondary">{{ $careers_data->role }}</span>
                                    <span class="badge badge-secondary">{{ $careers_data->experience }}</span>
                                </p>
                            </div>
                            <div>
                                {{-- <button class="btn btn-light"><i class="fas fa-save"></i></button> --}}
                                <button class="btn btn-light shareButton" id="shareButton"
                                    job_title="{{ $careers_data->title }}"
                                    joburl="{{ route('single_careers', [preg_replace('/[^a-z0-9]+/', '-', strtolower(trim($careers_data->title))) . '-' . $careers_data->careers_id]) }}"
                                    min_qua=" {{ $careers_data->minimum_qualifications }}"><i
                                        class="fas fa-share"></i></button>

                                <button class="btn btn-light copyButton" id="copyButton"
                                    job_title="{{ $careers_data->title }}"
                                    joburl="{{ route('single_careers', [preg_replace('/[^a-z0-9]+/', '-', strtolower(trim($careers_data->title))) . '-' . $careers_data->careers_id]) }}"
                                    min_qua="{{ $careers_data->minimum_qualifications }}">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>



                        <h5>Minimum qualifications</h5>
                        {!! $careers_data->minimum_qualifications !!}
                        <br>
                        <a href="{{ route('single_careers', [preg_replace('/[^a-z0-9]+/', '-', strtolower(trim($careers_data->title))) . '-' . $careers_data->careers_id]) }}"
                            class="btn btn-primary mt-2">Learn more</a>
                    </div>
                </div>
            @endforeach


            {!! $careers->links('vendor.pagination.my_public_bootstrap-4') !!}

        </div>
    </section>
@endsection
@section('page_script')

<!-- Toast Notification HTML -->
<div class="toast-container">
    <div id="copyToast" class="toast align-items-center text-white bg-primary border-0 toast-custom" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
        <div class="d-flex">
            <div class="toast-body">
                Job title copied to clipboard!
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>


    <script>
        $(document).ready(function() {
            $('.shareButton').on('click', async function() {

                const title = $(this).attr('job_title')
                const url = $(this).attr('joburl')
                const min_qua = $(this).attr('min_qua')

                if (navigator.share) {
                    try {
                        await navigator.share({
                            title: title,
                            text: min_qua,
                            url: url
                        });
                    } catch (error) {
                        console.error('Error sharing', error);
                    }
                } else {
                    // Fallback for browsers that do not support the Web Share API
                    const shareUrl =
                        `mailto:?subject=${encodeURIComponent(title)}&body=Check out this job posting: ${encodeURIComponent(url)}`;
                    window.location.href = shareUrl;
                }
            });
        });




        $(document).ready(function() {
            // Copy Job Title Button Click Handler
            $('.copyButton').click(function() {
                // Get the job title from the button's attribute
                var jobTitle = $(this).attr('job_title');


                const title = $(this).attr('job_title')
                const url = $(this).attr('joburl')
                const min_qua = $(this).attr('min_qua')

                // Create a temporary input element
                var tempInput = $('<input>');
                $('body').append(tempInput);

                // Set the input value to the job title
                tempInput.val(url).select();

                // Copy the job title to clipboard
                document.execCommand('copy');

                // Remove the temporary input element
                tempInput.remove();

               // Remove the temporary input element
            tempInput.remove();

// Show the toast notification
var copyToast = new bootstrap.Toast(document.getElementById('copyToast'));
copyToast.show();
            });
        });
    </script>
@endsection
