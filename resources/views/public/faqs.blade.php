@extends('public.common.layout')
@section('page_style')
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

        .nav-pills .nav-link {
            cursor: pointer;
        }

        .list-group-item-action {
            cursor: pointer;
        }

        /* .faq-answer {
            display: none;
        } */
        /* .faq-answer.show {
            display: none;
        } */
    </style>

@endsection
@section('page_content')


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
                <div class="list-group nav-pills leftitem" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action" id="list-general-list" data-bs-toggle="list"
                        href="#list-general" role="tab" aria-controls="general">General</a>



                    <a class="list-group-item list-group-item-action" id="list-products-list" data-bs-toggle="list"
                        href="#list-products" role="tab" aria-controls="products">Products</a>



                    <a class="list-group-item list-group-item-action" id="list-services-list" data-bs-toggle="list"
                        href="#list-services" role="tab" aria-controls="services">Services</a>

                    <a class="list-group-item list-group-item-action" id="list-payment-list" data-bs-toggle="list"
                        href="#list-payment" role="tab" aria-controls="payment">Payment</a>


                    {{-- <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list"
                        href="#list-settings" role="tab" aria-controls="settings">Shipping</a> --}}
                </div>
            </div>
            <!-- Right content area -->
            <div class="col-lg-9">
                <div class="tab-content" id="nav-tabContent">
                    <!-- General FAQs -->
                    <div class="tab-pane fade show active" id="list-general" role="tabpanel" aria-labelledby="list-general-list">
                        <div class="faq-container">
                            <h2 class="faq-category">General FAQs</h2>
                            <!-- FAQ items -->
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">1. What is IoT?</h5>
                                    <div class="faq-answer">
                                        <p>The Internet of Things (IoT) is a network of multiple physical devices embedded with software, sensors, hardware and other technologies. They communicate with each other and the cloud. It helps them to collect and exchange data.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">2. What is an IoT example?
                                    </h5>
                                    <div class="faq-answer">
                                        <p>Some examples of IoT include smart home devices(lights, home and kitchen appliances), healthcare devices(pacemakers, remote monitoring devices), wearables(smartbands, smartwatches), security devices (smart security cameras) etc. </p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">3. What are the 4 layers of IoT?</h5>
                                    <div class="faq-answer">
                                        <p>The four layers of IoT are sensing, connectivity, data processing, and user interface.</p>
                                    </div>
                                </div>



                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">4. Why is IoT used?</h5>
                                    <div class="faq-answer">
                                        <p>IoT helps in optimizing and automating the process. IoT reduces the operational cost and enhances the business productivity and efficiency.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">5. What are the benefits of IoT?</h5>
                                    <div class="faq-answer">
                                        <p>The Internet of Things (IoT) has several benefits. Those are data-driven insights, cost savings, improved efficiency, remote monitoring, safety, enhanced customer experience, new business opportunities etc.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">6. Is Alexa an IoT device?</h5>
                                    <div class="faq-answer">
                                        <p>Amazon Echo is an IoT device. Alexa is a virtual voice assistant embedded in the Amazon Echo.
                                        </p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">7. Is Netflix an IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Netflix uses AI (Artificial Intelligence) and IoT (Internet of Things) devices to enhance your experience. With these technologies, Netflix provides personalization and content recommendations to optimize user experience.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">8. Is a smartphone an IoT device?</h5>
                                    <div class="faq-answer">
                                        <p>The four layers of IoT are sensing, connectivity, data processing, and user interface.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">9. Is TV an IoT device?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">10. What is the difference between IoT and AI?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">11. What is IoT with real time example?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">12. What is an IoT dashboard?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">13. What is IoT visualization?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">14. What is IoT monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">15. What is display in IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">16. What is IoT full form?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">17. What is IoT software?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">18. Is IoT a good career?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">19. Does IoT need 5G?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">20. Which IoT platform is best?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">21. Which IoT platform is free?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">22. Is Amazon a IoT platform?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">23. What is IoT price?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">24. What is the Industry 4.0 concept?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">25. What is Industry 4.0 platform?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">26. What are Industry 4.0 steps?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">27. What is Industry 4.0 being driven by?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">28. What is Industry 4.0 artificial intelligence?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">29. How is Industry 4.0 used?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">30. What are Industry 4.0 key trends?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">31. What is Industry 4.0 in the supply chain?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">32. What is the purpose of IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">33. What are the 7 characteristics of IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">34. What are the applications of IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">35. What is IoT monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">36. Is CCTV an IoT device?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">37. Is Tubelight an IoT device?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">38. Is Google Cloud an IoT platform?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">39. Which cloud is best for IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">40.  Is Azure an IoT platform?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">41. Which software is used in IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">42. Is AWS IoT free?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">43. Which language is used in IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">44. Is IoT a tool?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">45. Does IoT need coding?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">46. Does IoT use AI?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">47. Does IoT need Python?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">48. Does IoT require WIFI?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">49. Does IoT use 4G?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">50. Is IoT wired or wireless?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <!-- Add more tabs for other categories -->




                    <div class="tab-pane fade show active" id="list-products" role="tabpanel" aria-labelledby="list-products-list">
                        <div class="faq-container">
                            <h2 class="faq-category">Products FAQs</h2>
                            <!-- FAQ items -->
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">1. What is energy meter in IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">2. What is smart energy monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">3. What is an example of an energy monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>



                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">4. What is the app for energy monitoring devices?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">5. What is an example of an energy monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">6. How is IoT used in energy?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur. </p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">7. What is IoT based energy monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">8. How IoT is used in energy management?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">9. What is smart home energy consumption and monitoring using IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">10. What is the application of remote monitoring?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">11. What is solar monitoring system using IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">12. What is solar remote monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">13. What is the use of IoT in solar energy?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">14. What is solar system monitoring?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">15. What is the use of IoT in solar energy?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">16. Which sensor is used in solar tracker?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">17. What is smart solar energy monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">18. What is solar tracker technology?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">19. Do I need solar monitoring?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">20. What is the future of solar tracker?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">21. What is IoT based fuel monitoring for future vehicles?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">22. How can you monitor fuel usage?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">23. How does fuel monitoring system work?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">24. How does fuel monitoring system work?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">25. What is IoT fuel efficiency?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">26. What technology improves fuel efficiency?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">27. What is IoT in oil and gas?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">28. Which fuel has highest fuel efficiency?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">29. Which fuel system is more efficient?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">30. How to calculate fuel consumption?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">31. What is UPS monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">32. What is the full form of UPS?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">33. What type of device is a UPS?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">34. How does UPS work?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">35. How does a smart UPS work?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">36. What is UPS for WiFi?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">37. What is the principle of UPS?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">38. How many types of UPS are there?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">39. What is UPS management software?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">40. What is the free software for UPS monitoring?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">41. What is IoT based water monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">42. What are IoT devices for water?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">43. What is a smart water monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">44. What is IoT water meter?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">45. How do we use technology to monitor water?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">46. What are two ways to monitor the use of water?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">47. hy do we do water monitoring?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">48. What is the objective of water level monitoring system using IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">49. What is a budget Water Monitoring IoT Platform?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">50. What is the need of water level monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, harum? Rem sint iusto esse, recusandae distinctio optio obcaecati. Adipisci rerum doloremque exercitationem iure, dicta reiciendis similique minima suscipit tempora consectetur.</p>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>





                     <!-- General FAQs -->
                     <div class="tab-pane fade show active" id="list-services" role="tabpanel" aria-labelledby="list-services-list">
                        <div class="faq-container">
                            <h2 class="faq-category">Services FAQs</h2>
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



                    <div class="tab-pane fade show active" id="list-payment" role="tabpanel" aria-labelledby="list-payment-list">
                        <div class="faq-container">
                            <h2 class="faq-category">Payment FAQs</h2>
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



{{-- <script>
    $(document).ready(function () {
        // Ensure the correct tab is shown by default
        $('.tab-pane').removeClass('show active');
        $('#list-general').addClass('show active');
        // Set General tab link as active
        $('.list-group-item').removeClass('active');
        $('#list-general-list').addClass('active');

        // Tab click handler to show the correct tab content
        $('a[data-bs-toggle="list"]').on('click', function (e) {
            e.preventDefault();
            var target = $(this).attr('href');
            $('.tab-pane').removeClass('show active');
            $(target).addClass('show active');
            $('.list-group-item').removeClass('active');
            $(this).addClass('active');
        });
    });
</script> --}}

{{--
<script>
    $(document).ready(function () {
        // Function to show the correct tab based on hash
        function showTabFromHash() {
            var hash = window.location.hash;
            if (hash) {
                var target = hash;
                $('.tab-pane').removeClass('show active');
                $(target).addClass('show active');
                $('.list-group-item').removeClass('active');
                $('a[href="' + target + '"]').addClass('active');

                // Hide all answers initially
                $('.faq-answer').removeClass('show');

                // Show answers for the selected tab
                $(target + ' .faq-answer').addClass('show');
            } else {
                // Default to General tab if no hash
                $('.tab-pane').removeClass('show active');
                $('#list-general').addClass('show active');
                $('.list-group-item').removeClass('active');
                $('#list-general-list').addClass('active');

                // Show answers in General tab
                $('#list-general .faq-answer').addClass('show');
            }
        }

        // Initial call to display tab from hash
        showTabFromHash();

        // Listen for hash change to switch tabs
        $(window).on('hashchange', function () {
            showTabFromHash();
        });

        // Tab click handler to update the hash in the URL
        $('a[data-bs-toggle="list"]').on('click', function (e) {
            e.preventDefault();
            var target = $(this).attr('href');
            window.location.hash = target;
        });
    });
</script> --}}


<script>
    $(document).ready(function () {
        // Function to show the correct tab based on hash
        function showTabFromHash() {
            var hash = window.location.hash;
            if (hash) {
                var target = hash;
                $('.tab-pane').removeClass('show active');
                $(target).addClass('show active');
                $('.nav-link').removeClass('active');
                $('a[href="' + target + '"]').addClass('active');

                // Hide all answers initially
                $('.faq-answer').removeClass('show');

                // Show answers for the selected tab
                $(target + ' .faq-answer').addClass('show');
            } else {
                // Default to General tab if no hash
                $('.tab-pane').removeClass('show active');
                $('#list-general').addClass('show active');
                $('.nav-link').removeClass('active');
                $('#list-general-list').addClass('active');

                // Show answers in General tab
                $('#list-general .faq-answer').addClass('show');
            }
        }

        // Initial call to display tab from hash
        showTabFromHash();

        // Listen for hash change to switch tabs
        $(window).on('hashchange', function () {
            showTabFromHash();
        });

        $('a[data-bs-toggle="list"]').on('click', function (e) {
            e.preventDefault();
            var target = $(this).attr('href');
            history.pushState(null, null, target);  // Update the hash in the URL without scrolling
            showTabFromHash();  // Show the tab content without scrolling
        });
    });
</script>
@endsection
