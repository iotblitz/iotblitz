<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        {{-- <h1>Scholar</h1> --}}
                        <img src="{{ asset('public/public_page') }}/assets/images/logo.png" class="logo" alt=""
                            width="30%" style="position: absolute;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->

                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ route('home') }}"
                                class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                        <li class="scroll-to-section"><a href="{{ route('product') }}"
                                class="{{ request()->routeIs('product') ? 'active' : '' }}">Products</a></li>
                        <li><a href="{{ route('blogs') }}"
                                class="{{ request()->routeIs('blogs*') ? 'active' : '' }}">Blogs</a></li>

                        <li class="scroll-to-section"><a href="{{ route('about') }}"
                                class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>



                        <li class="d-block d-md-none"><a href="{{ route('case_study') }}"
                                class="{{ request()->routeIs('case_study') || request()->routeIs('single_case_study') ? 'active' : '' }}">Case
                                Study</a></li>

                        <li class="d-block d-md-none"><a href="{{ route('solutions') }}"
                                class="{{ request()->routeIs('solutions') || request()->routeIs('single_solutions') ? 'active' : '' }}">Solutions</a>
                        </li>

                        <li class="d-block d-md-none"><a href="">FAQ</a></li>
                        <li class="d-block d-md-none"><a href="{{ route('careers') }}"
                                class="{{ request()->routeIs('careers*') ? 'active' : '' }}">Careers</a></li>


                        <li class="scroll-to-section dropdown d-none d-md-block">
                            <a href="javascript:void(0);"
                                class="{{ request()->routeIs('case_study') || request()->routeIs('single_case_study') || request()->routeIs('solutions') || request()->routeIs('single_solutions') || request()->routeIs('careers') || request()->routeIs('single_careers') ? 'active' : '' }}">More
                                <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="{{ route('case_study') }}"
                                        class="{{ request()->routeIs('case_study*') ? 'active' : '' }}">Case Study</a></li>
                                <li><a href="{{ route('solutions') }}"
                                        class="{{ request()->routeIs('solutions') || request()->routeIs('single_solutions') ? 'active' : '' }}">Solutions</a>
                                </li>
                                <li><a href="">FAQ</a></li>
                                <li><a href="{{ route('careers') }}"
                                        class="{{ request()->routeIs('careers*') ? 'active' : '' }}">Careers</a></li>
                            </ul>
                        </li>

                        <li class="scroll-to-section"><a href="{{ route('contact') }}"
                                class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                    </ul>

                    <div class="search-input" style="margin-left: 10%">
                        <div id="search" action="#">
                            <input type="button" value="Contact Now" id='searchText' />
                            {{-- <i class="fa fa-search"></i> --}}
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                    </div>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
