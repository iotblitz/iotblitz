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
                        <li class="scroll-to-section"><a href="{{route('home')}}" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="">About</a></li>
                        <li class="scroll-to-section"><a href="{{route('case_study')}}">Case Study</a></li>
                        <li class="scroll-to-section"><a href="">Products</a></li>


                        <li class="scroll-to-section dropdown">
                            <a href="javascript:void(0);">More</a>
                            <ul class="submenu">
                                <li><a href="">Solutions</a></li>
                                <li><a href="{{route('blogs')}}">Blogs</a></li>
                                <li><a href="">FAQ</a></li>
                                <li><a href="">Careers</a></li>
                            </ul>
                        </li>

                        <li class="scroll-to-section"><a href="#contact">Contact</a></li>
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
