@php
    $title="FAQs";
    $meta_author="iotblitz";
    $meta_keywords="FAQs";
    $meta_description="General FAQs";
@endphp

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
            background-color: #f0eeff;
            border-radius: 8px 8px 8px 8px;

        }

        .faq-answer p {
            font-size:16px
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
                                        <p>The Internet of Things (IoT) is a network of multiple physical devices embedded with software, sensors, hardware, and other technologies. These devices communicate with each other and the cloud, helping them collect and exchange data.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">2. What is an IoT example?
                                    </h5>
                                    <div class="faq-answer">
                                        <p>Some examples of IoT include smart home devices (lights, home and kitchen appliances), healthcare devices (pacemakers, remote monitoring devices), wearables (smart bands, smartwatches), and security devices (smart security cameras).</p>
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
                                        <p>IoT helps optimize and automate processes, reduce operational costs, and enhance business productivity and efficiency.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">5. What are the benefits of IoT?</h5>
                                    <div class="faq-answer">
                                        <p>The Internet of Things (IoT) has several benefits, including data-driven insights, cost savings, improved efficiency, remote monitoring, safety, enhanced customer experience, and new business opportunities.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">6. Is Alexa an IoT device?</h5>
                                    <div class="faq-answer">
                                        <p>Amazon Echo is an IoT device. Alexa is a virtual voice assistant embedded in the Amazon Echo.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">7. Is Netflix an IoT?</h5>
                                    <div class="faq-answer">
                                        <p>No, Netflix is not an IoT device in itself. However, Netflix uses AI (Artificial Intelligence) and IoT (Internet of Things) devices to enhance your experience. These technologies provide personalization and content recommendations to optimize user experience.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">8. Is a smartphone an IoT device?</h5>
                                    <div class="faq-answer">
                                        <p>Smartphones have sensors and can communicate data to the cloud. However, they require human control and interaction to operate. Therefore, whether to call a smartphone an IoT device is debatable.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">9. Is TV an IoT device?</h5>
                                    <div class="faq-answer">
                                        <p>Yes. A smart TV is an IoT device that connects to the internet with Wi-Fi or ethernet. The internet connection helps the device stream shows. A smart TV can be controlled by voice, remote, and other means.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">10. What is the difference between IoT and AI?</h5>
                                    <div class="faq-answer">
                                        <p>The Internet of Things (IoT) and Artificial Intelligence (AI) are separate technologies but complement each other. IoT focuses on connecting devices and automation. On the other hand, AI focuses on understanding and making decisions based on collected data. AI modules can make decisions based on the data collected by IoT devices.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">11. What is IoT with real time example?</h5>
                                    <div class="faq-answer">
                                        <p>Examples of IoT are smart security cameras, self-driving cars, home appliances, and wearables such as smartwatches.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">12. What is an IoT dashboard?</h5>
                                    <div class="faq-answer">
                                        <p>An Internet of Things (IoT) dashboard is a web-based user interface in the IoT platform that enables users to organize, visualize, and monitor the data collected by connected devices. It helps the user to manage and monitor the device and the inventory.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">13. What is IoT visualization?</h5>
                                    <div class="faq-answer">
                                        <p>The Internet of Things (IoT) visualization represents the data collected by IoT devices in visual formats, such as charts, graphs, maps, etc.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">14. What is IoT monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>The Internet of Things (IoT) monitoring system is a process for monitoring, managing, and controlling assets and infrastructure with sensors and connected devices.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">15. What is display in IoT?</h5>
                                    <div class="faq-answer">
                                        <p>The display is an integral part of an IoT device. It can help the user visualize the data collected from IoT sensors and interact with devices through the user interface.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">16. What is IoT full form?</h5>
                                    <div class="faq-answer">
                                        <p>The full form of IoT is ‘Internet of Things.’</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">17. What is IoT software?</h5>
                                    <div class="faq-answer">
                                        <p>IoT software is a collection of software and services that collect data from IoT devices. IoT software focuses on analyzing the collected data using machine learning and artificial intelligence (AI). The software can make data-driven decisions and communicate with other devices.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">18. Is IoT a good career?</h5>
                                    <div class="faq-answer">
                                        <p>IoT promises diverse career opportunities, attractive salaries, and efficient growth. This field’s dynamic approach requires flexibility, adaptation, and optimism about your career.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">19. Does IoT need 5G?</h5>
                                    <div class="faq-answer">
                                        <p>Yes, 5G can be an essential aspect of IoT. 5G can efficiently deliver data and connect with IoT devices, making the process easy and faster.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">20. Which IoT platform is best?</h5>
                                    <div class="faq-answer">
                                        <p>The best IoT platform depends on your needs. Several useful IoT platforms exist, including Amazon Web Services (AWS), Microsoft Azure, Google Cloud, and Oracle.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">21. Which IoT platform is free?</h5>
                                    <div class="faq-answer">
                                        <p>There are a few free IoT platforms. Those are Thingsboard, OpenRemote, Kaa IoT platform, etc.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">22. Is Amazon a IoT platform?</h5>
                                    <div class="faq-answer">
                                        <p>Amazon Web Services is an IoT platform that offers IoT solutions and services.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">23. What is IoT price?</h5>
                                    <div class="faq-answer">
                                        <p>The price of IoT can vary depending on several factors. From low-cost devices for your home to high-priced industrial devices, there is a range of IoT devices in multiple price segments. The price is dependent on the type of device, the brands, features, and functionality.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">24. What is the Industry 4.0 concept?</h5>
                                    <div class="faq-answer">
                                        <p>Industry 4.0 is the phase of manufacturing digitization. This smart manufacturing concept aims to deliver efficiency, flexibility, productivity, and scalability in operations. It also enables users to emphasize customization and data-driven decision-making.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">25. What is Industry 4.0 platform?</h5>
                                    <div class="faq-answer">
                                        <p>Industry 4.0 is a platform that focuses on smart manufacturing and factories. It boosts productivity, flexibility, and efficiency.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">26. What are Industry 4.0 steps?</h5>
                                    <div class="faq-answer">
                                        <p>The steps of Industry 4.0 are the foundation and evaluation of the existing processes and technology, technological integration, advanced technologies, and transformation and optimization of businesses.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">27. What is Industry 4.0 being driven by?</h5>
                                    <div class="faq-answer">
                                        <p>Industry 4.0 is driven by numerous trends and technologies, such as data, connectivity, the Internet of Things, robotics, machine learning, and augmented reality.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">28. What is Industry 4.0 artificial intelligence?</h5>
                                    <div class="faq-answer">
                                        <p>Artificial intelligence is a crucial part of Industry 4.0. In Industry 4.0, artificial intelligence integrates with technology to provide intelligence, sense, and power to learn from the environment.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">29. How is Industry 4.0 used?</h5>
                                    <div class="faq-answer">
                                        <p>Industry 4.0 uses real-time data, automation, and interconnected devices to help businesses monitor, manage, and optimize business operations and supply chains.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">30. What are Industry 4.0 key trends?</h5>
                                    <div class="faq-answer">
                                        <p>Some critical trends of Industry 4.0 are artificial intelligence, the Internet of Things, robots, 5G-based technologies, augmented reality, big data analytics, etc.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">31. What is Industry 4.0 in the supply chain?</h5>
                                    <div class="faq-answer">
                                        <p>Industry 4.0 is a smart manufacturing and intelligent factory management tool. This tool is embedded with digital technologies to help the business supply chains manage production and operations. It enhances the efficiency and effectiveness of the supply chain and other related processes.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">32. What is the purpose of IoT?</h5>
                                    <div class="faq-answer">
                                        <p>The primary purpose of IoT is to share, exchange, and analyze data in real time to improve operational efficiency without human intervention.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">33. What are the 7 characteristics of IoT?</h5>
                                    <div class="faq-answer">
                                        <p>The seven characteristics of IoT are connectivity, architecture, data-driven, identity and intelligence, embedded Sensors and actuators, communication, and dynamic changes.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">34. What are the applications of IoT?</h5>
                                    <div class="faq-answer">
                                        <p>The list of IoT applications is endless. These include smart homes, smart agriculture, smart grids, smart security, smart healthcare, smart vehicles, remote monitoring and control, wearables, etc.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">35. What is IoT monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>A remote monitoring system uses interconnected devices and IoT sensors to monitor, manage, and control operations and systems remotely.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">36. Is CCTV an IoT device?</h5>
                                    <div class="faq-answer">
                                        <p>Yes. CCTV can be considered an IoT device as it remotely monitors areas. CCTV cameras can be integrated with other IoT sensors to create a comprehensive system.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">37. Is Tubelight an IoT device?</h5>
                                    <div class="faq-answer">
                                        <p>Traditional Tubelight is not an IoT device. However, Smart Tubelights, which Wi-Fi and remote control operate, are IoT devices.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">38. Is Google Cloud an IoT platform?</h5>
                                    <div class="faq-answer">
                                        <p>Yes. Google Cloud Platform (GCP) is an IoT platform that offers businesses multiple IoT solutions and services.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">39. Which cloud is best for IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Multiple cloud platforms, including Amazon Web Services (AWS), Microsoft Azure, Google Cloud, and Oracle, work well with the Internet of Things.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">40.  Is Azure an IoT platform?</h5>
                                    <div class="faq-answer">
                                        <p>Yes. Microsoft Azure is an IoT platform that assists users in connecting, monitoring, and controlling their devices and equipment. Microsoft Azure offers various Solutions and services to customers.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">41. Which software is used in IoT?</h5>
                                    <div class="faq-answer">
                                        <p>The software used in IoT is Microsoft Azure IoT Suite, Kaa, Thingsboard, Arduino, etc.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">42. Is AWS IoT free?</h5>
                                    <div class="faq-answer">
                                        <p>AWS IoT is a paid platform. But with the free tier offered by AWS, you can get a few perks.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">43. Which language is used in IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Several programming languages are used in IoT. A few examples of Programming languages used in IoT are C, C++, Python, Java, PHP, and many more.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">44. Is IoT a tool?</h5>
                                    <div class="faq-answer">
                                        <p>Yes. IoT (Internet of Things) is a tool combined with software or hardware components that can assist businesses in analyzing, developing, deploying, and managing solutions. It reduces complexity and provides faster development, enhanced security, efficiency, and effectiveness in operations.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">45. Does IoT need coding?</h5>
                                    <div class="faq-answer">
                                        <p>Yes. IoT-embedded devices have microprocessors and microcontrollers. They require programming (coding) to perform specific tasks, control devices, manage data, etc.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">46. Does IoT use AI?</h5>
                                    <div class="faq-answer">
                                        <p>Yes. IoT uses artificial intelligence (AI) to make the whole system efficient and intelligent. With AI, IoT devices can learn from the environment and make decisions based on learned data.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">47. Does IoT need Python?</h5>
                                    <div class="faq-answer">
                                        <p>Python is an excellent choice for IoT. Most developers choose it because it is easy to learn, versatile, and has a vast online community that assists each other. However, using Python in IoT is optional. You can use different programming languages.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">48. Does IoT require WIFI?</h5>
                                    <div class="faq-answer">
                                        <p>WIFI is one of the popular technologies for IoT, but there are also multiple options, such as Bluetooth, cellular networks, Zigbee, etc.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">49. Does IoT use 4G?</h5>
                                    <div class="faq-answer">
                                        <p>Yes. IoT uses 4G networks. Though having a 5G network is better due to ease and speed, 4G is still a good option in rural areas.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">50. Is IoT wired or wireless?</h5>
                                    <div class="faq-answer">
                                        <p>The Internet of Things (IoT) can use both wired and wireless connections, depending on the needs of the applications.</p>
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
                                        <p>An IoT Energy meter is a device that uses IT technology to monitor and record energy consumption. It can provide schedule and real-time analytics on energy usage and easily share information with businesse</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">2. What is smart energy monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>The smart energy monitoring system is the process of monitoring and controlling energy use in real-time using the Internet of Things (IoT). This system can be used in businesses, manufacturing, plants, and smart homes.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">3. What is an example of an energy monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>An example of an energy monitoring system is the smart meter.</p>
                                    </div>
                                </div>



                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">4. What is the app for energy monitoring devices?</h5>
                                    <div class="faq-answer">
                                        <p>There are multiple applications available to monitor energy usage. The apps for energy monitoring devices are OWL Intuition-E Online Energy Monitor, Loop, Emporia Energy, etc.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">5. What is an example of an energy monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Examples of remote energy monitoring systems are cloud platforms, smart meters, IoT gateways, etc.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">6. How is IoT used in energy?</h5>
                                    <div class="faq-answer">
                                        <p>The Internet of Things (IoT) can be used in the energy sector to monitor energy consumption, improve energy efficiency and reduce energy consumption. IoT-connected devices are used in smart homes, smart grids, industries, Transportation, oil, gas, and renewable energy generation plants.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">7. What is IoT based energy monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>An IoT energy monitoring system connects with devices and appliances to collect and share real-time data on energy use. This data can be used to gain insights into energy consumption patterns.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">8. How IoT is used in energy management?</h5>
                                    <div class="faq-answer">
                                        <p>The Internet of Things (IoT) can be used in energy management to monitor consumption, reduce cost and energy wastage, and promote sustainability.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">9. What is smart home energy consumption and monitoring using IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Smart home energy consumption and IoT monitoring use IoT sensors to track, monitor, and manage energy use in the home in real-time. This system can help the user reduce energy consumption and electricity costs and enable sustainability.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">10. What is the application of remote monitoring?</h5>
                                    <div class="faq-answer">
                                        <p>Remote monitoring is used in multiple industries, including healthcare, smart agriculture, energy control, logistics and management, IIoT, and others.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">11. What is solar monitoring system using IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Solar monitoring systems embedded with the Internet of Things (IoT) collect real-time data from IoT sensors in a solar power system. They analyze the data and provide insights to improve the system's efficiency and performance. They also reduce management and maintenance problems.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">12. What is solar remote monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>A solar remote monitoring system is a solution for solar systems that tracks and analyzes the energy production and consumption of the solar system in real-time.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">13. What is the use of IoT in solar energy?</h5>
                                    <div class="faq-answer">
                                        <p>The Internet of Things (IoT) is used in solar systems to monitor, manage, control, and optimize solar panels, increasing efficiency and overall performance.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">14. What is solar system monitoring?</h5>
                                    <div class="faq-answer">
                                        <p>Solar system monitoring devices collect and analyze the data of solar energy production and usage in real-time.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">15. What is the use of IoT in solar energy?</h5>
                                    <div class="faq-answer">
                                        <p>The Internet of Things (IoT) is used in solar energy systems to monitor, manage, control, and optimize solar panels remotely. The Internet of Things (IoT) can help homes and businesses reduce costs, improve efficiency, and provide real-time data for proactive maintenance.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">16. Which sensor is used in solar tracker?</h5>
                                    <div class="faq-answer">
                                        <p>Solar trackers use Light-dependent resistors (LDRs), Photodiodes, Electronic compasses, GPS, and ionic liquid-based photodetectors, among other things.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">17. What is smart solar energy monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>A smart solar energy monitoring system is a combination of hardware and software monitors that monitor and manage solar plants, reduce costs, and improve the efficiency and effectiveness of the overall system.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">18. What is solar tracker technology?</h5>
                                    <div class="faq-answer">
                                        <p>Solar tracker technology is a set of mechanical systems or devices that track and follow the sun’s movement to maximize the solar energy in the sonar panels and receivers.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">19. Do I need solar monitoring?</h5>
                                    <div class="faq-answer">
                                        <p>Yes, you need solar monitoring because a solar monitoring system can help you understand the condition of your solar panels, identify potential issues, and determine the solar system's performance. It can track energy production and usage in real-time and provide data over a specific time period.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">20. What is the future of solar tracker?</h5>
                                    <div class="faq-answer">
                                        <p>A solar tracker is an essential part of the solar monitoring system. The solar tracker market is expected to grow at a CAGR of 13.5% from 2024 to 2031 and reach a value of $16.73 billion by 2031.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">21. What is IoT based fuel monitoring for future vehicles?</h5>
                                    <div class="faq-answer">
                                        <p>IoT-based fuel monitoring systems use IoT sensors and the Internet to track fuel consumption in vehicles. These systems can help users reduce fuel wastage, fuel cost, and fuel theft and improve efficiency.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">22. How can you monitor fuel usage?</h5>
                                    <div class="faq-answer">
                                        <p>The fuel monitoring system can assist you in tracking and analyzing full fuel use in vehicles and storage chambers. You can use the data to identify problems and inefficiencies and make information-driven decisions to improve fuel efficiency.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">23. How does fuel monitoring system work?</h5>
                                    <div class="faq-answer">
                                        <p>The fuel tank monitoring system uses sensors.</p>
                                    </div>
                                </div>
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">24. How does fuel monitoring system work?</h5>
                                    <div class="faq-answer">
                                        <p>The fuel monitoring system tracks and analyzes the values in the vehicles. It can help individuals or businesses monitor consumption, identify problems, reduce cost and efficiency, and prevent fuel theft and leakage.</p>
                                    </div>
                                </div>

                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">25. What is IoT fuel efficiency?</h5>
                                    <div class="faq-answer">
                                        <p>IoT energy can help improve fuel efficiency. With fuel monitoring and management, the IoT system will analyze full consumption patterns, reducing unnecessary expenses and improving efficiency.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">26. What technology improves fuel efficiency?</h5>
                                    <div class="faq-answer">
                                        <p>A few technologies improve fuel efficiency, such as direct injection, fuel management systems, electronic fuel injection (EFI), and energy management systems.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">27. What is IoT in oil and gas?</h5>
                                    <div class="faq-answer">
                                        <p>The Internet of Things (IoT) is a </p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">28. Which fuel has highest fuel efficiency?</h5>
                                    <div class="faq-answer">
                                        <p>Hydrogen has the highest fuel efficiency.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">29. Which fuel system is more efficient?</h5>
                                    <div class="faq-answer">
                                        <p>Sequential fuel injection is the most efficient and effective fuel system available in the automotive industry.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">30. How to calculate fuel consumption?</h5>
                                    <div class="faq-answer">
                                        <p>The easiest way to calculate fuel consumption is by dividing the distance traveled by fuel usage.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">31. What is UPS monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>A UPS monitoring system monitors different metrics of UPS devices in a network to ensure they are always working properly.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">32. What is the full form of UPS?</h5>
                                    <div class="faq-answer">
                                        <p>The full form of UPS is an Uninterruptible Power Supply.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">33. What type of device is a UPS?</h5>
                                    <div class="faq-answer">
                                        <p>UPS is a backup power supply for the devices and systems that works during power cuts and power failures. It protects the devices from damage and maintains a power supply during power-related issues.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">34. How does UPS work?</h5>
                                    <div class="faq-answer">
                                        <p>UPS constantly monitors the power it receives from the mains. In case of power fluctuations, high or low voltage, it automatically switches to battery power, protecting the connected devices.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">35. How does a smart UPS work?</h5>
                                    <div class="faq-answer">
                                        <p>Smart-UPS provides a few extra functions than regular UPS. It can shut down equipment before power is completely lost and reboot it when power is back. It can choose to shut down less essential equipment first so crucial equipment can stay powered for longer.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">36. What is UPS for WiFi?</h5>
                                    <div class="faq-answer">
                                        <p>UPS is the backup power supply that ensures uninterrupted and reliable internet connectivity.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">37. What is the principle of UPS?</h5>
                                    <div class="faq-answer">
                                        <p>UPS works by converting AC power to DC and then reconverting it to stable AC power.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">38. How many types of UPS are there?</h5>
                                    <div class="faq-answer">
                                        <p>There are three types of UPS available: line-interactive UPS, standby (offline)UPS, and online double-conversion UPS.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">39. What is UPS management software?</h5>
                                    <div class="faq-answer">
                                        <p>UPS management software is an application that tracks the performance of UPS devices and keeps them functional.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">40. What is the free software for UPS monitoring?</h5>
                                    <div class="faq-answer">
                                        <p>The free software for UPS monitoring is ION UPS, WinMust, Vertiv™ Power Assist etc, and many more.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">41. What is IoT based water monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>The IoT-based water monitoring system focuses on monitoring and managing the quality of water and water usage from remote locations.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">42. What are IoT devices for water?</h5>
                                    <div class="faq-answer">
                                        <p>The IoT devices for water monitoring systems are IoT sensors, IoT controllers, and IoT smart water meters which are connected to taps, pipes, irrigation systems, flood detection systems, and water distribution networks.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">43. What is a smart water monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>A smart water monitoring system monitors the quality of the water and checks water availability.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">44. What is IoT water meter?</h5>
                                    <div class="faq-answer">
                                        <p>An IoT water meter is a device that measures water consumption and enhances water management efficiency with real-time data and remote reading.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">45. How do we use technology to monitor water?</h5>
                                    <div class="faq-answer">
                                        <p>Technologies like IoT sensors, smart water metering, remote monitoring systems, etc., help water monitoring systems monitor and manage water availability and quality and make data-driven decisions.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">46. What are two ways to monitor the use of water?</h5>
                                    <div class="faq-answer">
                                        <p>Traditional water metering and smart water monitoring systems are the two ways to monitor water use.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">47. hy do we do water monitoring?</h5>
                                    <div class="faq-answer">
                                        <p>Water monitoring is essential to measuring water usage and wastage, water quality, pipeline leakage detection, predictive maintenance, etc.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">48. What is the objective of water level monitoring system using IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Water level monitoring systems using IoT have multiple objectives. Those objectives are real-time monitoring, water conservation, predictive maintenance, tracking, and alerts of water levels.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">49. What is a budget Water Monitoring IoT Platform?</h5>
                                    <div class="faq-answer">
                                        <p>There is no one-size-fits-all solution for the water monitoring IoT platform. The budget depends on multiple factors, including technical skills, requirements, platform charges, hardware, and software.</p>
                                    </div>
                                </div>


                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">50. What is the need of water level monitoring system?</h5>
                                    <div class="faq-answer">
                                        <p>Water level monitoring systems can mitigate water-related challenges. They help with water conservation, groundwater monitoring, resource management, early leak detection, flood monitoring, and more.</p>
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
                                    <h5 class="faq-question mb-0">1. What is IoT in software development?</h5>
                                    <div class="faq-answer">
                                        <p>IoT software development involves integrating hardware and software to connect devices to a network and creating software components to power interconnected devices and IoT systems.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">2. How to create IoT software?</h5>
                                    <div class="faq-answer">
                                        <p>Before creating IoT software, you need to find its purpose. Then, you need to choose the right hardware and components, select a connectivity protocol, develop firmware, choose a cloud platform, build the app, and test and secure the IoT Software.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">3. Which programming language for IoT?</h5>
                                    <div class="faq-answer">
                                        <p>C and C++, Python, Java, Javascript, PHP, Rust, and other programming languages used for IoT.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">4. Is coding required for IoT?</h5>
                                    <div class="faq-answer">
                                        <p>Yes, coding is essential for coding. Programming is needed for IoT devices to function. With programming, microprocessors and microcontrollers can perform specific tasks. Coding powers these systems and enables them to communicate with each other and process data.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">5. What is IoT platform design?</h5>
                                    <div class="faq-answer">
                                        <p>IoT platform design is a process of constructing a software structure that connects, manages, monitors, and analyzes the IoT-connected devices and generated data.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">6. What are the 4 types of IoT platforms?</h5>
                                    <div class="faq-answer">
                                        <p>The 4 types of IoT platforms are IoT Connectivity Platforms, IoT Device Management Platforms, IoT Application Enablement Platforms, and IoT Analytics Platforms.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">7. How many IoT platforms are there?</h5>
                                    <div class="faq-answer">
                                        <p>There are thousands of IoT platforms available in the market. The IoT platforms mostly come under 4 main types.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">8. How is IoT used in management?</h5>
                                    <div class="faq-answer">
                                        <p>IoT is used in management to reduce operation costs, improve operations, enhance profitability, and maintain workflow.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">9. What is predictive maintenance in IoT?</h5>
                                    <div class="faq-answer">
                                        <p>predictive maintenance in IoT is monitoring the IoT devices using sensors, software, machine learning, and data analysis. After analyzing data, Predictive maintenance offers predictions about the maintenance of the devices and equipment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">10. What are IoT device controls?</h5>
                                    <div class="faq-answer">
                                        <p>IoT device control is a process of accessing and managing IoT devices remotely. You can do multiple things, such as changing the settings, implementing access control, updating software, etc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">11. What is AI?</h5>
                                    <div class="faq-answer">
                                        <p>Artificial Intelligence (AI) is a branch of computer science that uses software, algorithms, data, and other technologies to create devices and machines that can perform tasks without the human touch.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">12. What is Automation?</h5>
                                    <div class="faq-answer">
                                        <p>Automation is a technological process that performs tasks without human intervention. It emphasizes operating the whole work automatically. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">13. What is service automation through AI?</h5>
                                    <div class="faq-answer">
                                        <p>Service automation through AI is a process of using AI, software, and other technologies to automate repetitive tasks, services, and operations.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">14. How do I start an app development?</h5>
                                    <div class="faq-answer">
                                        <p>To start app development, you have to follow a few steps. Those are determining your goal, studying the market, designing a wireframe, creating an app prototype, and publishing the app.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">15. What are the 5 steps of developing an app?</h5>
                                    <div class="faq-answer">
                                        <p>The 5 app development steps are planning, design, development, testing, and deployment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">16. Can I develop an app for both Android and iOS?</h5>
                                    <div class="faq-answer">
                                        <p>Yes. You can develop an app for both Android and iOS and follow Cross-platform and Native development processes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">17. What is a dashboard in IoT?</h5>
                                    <div class="faq-answer">
                                        <p>IoT dashboards are the central user interface that allows the user to monitor and interact with IoT-connected devices.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">18. What is the primary purpose of a dashboard?</h5>
                                    <div class="faq-answer">
                                        <p>The main purpose of a dashboard is to present data collected by devices according to the needs of viewers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">19. How does the IoT dashboard differ from an IoT server?</h5>
                                    <div class="faq-answer">
                                        <p>The IoT dashboard is a system that shows the stats and conditions of the IoT in real-time.  It presents data for interaction in a user-friendly way. On the other hand, an IoT server is a hub that Collects, manages, stores, analyzes, and processes data from serval devices.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group faq-list">
                                <div class="list-group-item faq-list-item">
                                    <h5 class="faq-question mb-0">20. What is a remote monitoring dashboard?</h5>
                                    <div class="faq-answer">
                                        <p>A remote monitoring dashboard is an interface of the monitoring system that shows real-time data collected from sensors and devices. It provides multiple insights into the devices' condition and function.</p>
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
                                {{-- <div class="list-group-item faq-list-item">
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
                                </div> --}}
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
