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










        .tab-content {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 1%;
            margin-bottom: 1%;
        }


        .faq-category {

            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 1%;
            margin-bottom: 1%;



            background-color: #7a6ad8;
            color: #ffffff;
            border-radius: 20px 20px 0 0;
            padding: 12px 20px;
            margin-bottom: 0;
        }


        .faq-list-item {
            /* border: none !important; */
            border-radius: 0 0 0px 0px !important;
            border-bottom: 0 0 0 1px solid #dee2e6;
        }



        .leftitem {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .faq-list-item:last-child {
            border-bottom: none;
            border: none !important;
            border-radius: 0 0 20px 20px !important;
        }



        .faq-question {
            cursor: pointer;
            margin-bottom: 0.5% !important;
        }

        .faq-answer {
            /* display: none; */
            padding: 10px 15px;
            background-color: #f8f9fa;
        }

        .faq-list-item:last-child .faq-answer:last-child {
            padding: 10px 15px;
            background-color: #f8f9fa;
            border-radius: 0 0 10px 10px;
        }

        .faq-answer.show {
            display: block;
        }

        .list-group-item.active {
            background-color: #7a6ad8 !important;
        }

        /* .faq-answer {
            display: none;
        }
        .faq-answer.show {
            display: block;
        } */
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
                            <li class="list-inline-item"><a href="#" class="text-white"></a></li>
                        </ul>

                    </div>
                </div>


            </div>
        </div>
    </div>




    <div class="container mb-5">
        <div class="row">





            <!-- Left sidebar for categories -->
            <div class="col-lg-3 mb-4 mt-2">
                <div class="list-group leftitem" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action" id="list-home-list" data-bs-toggle="list"
                        href="#list-home" role="tab" aria-controls="home">General</a>



                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list"
                        href="#list-profile" role="tab" aria-controls="profile">Account</a>



                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list"
                        href="#list-messages" role="tab" aria-controls="messages">Payments</a>


                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list"
                        href="#list-settings" role="tab" aria-controls="settings">Shipping</a>
                </div>
            </div>
            <!-- Right content area -->
            <div class="col-lg-9">
                <div class="tab-content" id="nav-tabContent">
                    <!-- General FAQs -->
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="faq-container">
                            <h2 class="faq-category">General FAQs</h2>
                            <!-- FAQ items -->
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">Question 1</h5>
                                    <div class="faq-answer">
                                        <p>Answer to question 1.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">Question 2</h5>
                                    <div class="faq-answer">
                                        <p>Answer to question 2.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">Question 3</h5>
                                    <div class="faq-answer">
                                        <p>Answer to question 3.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more tabs for other categories -->



                    <!-- General FAQs -->
                    <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="faq-container">
                            <h2 class="faq-category">Account FAQs</h2>
                            <!-- FAQ items -->
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">Question 1</h5>
                                    <div class="faq-answer">
                                        <p>Answer to question 1.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">Question 2</h5>
                                    <div class="faq-answer">
                                        <p>Answer to question 2.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">Question 3</h5>
                                    <div class="faq-answer">
                                        <p>Answer to question 3.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>







                </div>
            </div>




























            {{-- <div class="col-md-3">

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






            </div> --}}

        </div>
    </div>
@endsection
@section('page_script')
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        // Handle FAQ question click to toggle answer visibility
        const faqQuestions = document.querySelectorAll('.faq-question');
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                question.nextElementSibling.classList.toggle('show');
            });
        });

        // Trigger click on the 'Account' tab to show 'Account' FAQs by default
        document.getElementById('list-home-list').click();
    });
</script>
@endsection
