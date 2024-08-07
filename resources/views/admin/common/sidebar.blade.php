	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="@if(auth()->user()->dp){{ asset('public/profile') }}/{{auth()->user()->dp}}@else{{ asset('public/public_page/assets/images/user.webp') }}  @endif" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">{{auth()->user()->name}} <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="{{route('admin.logout')}}"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>

				<ul class="nav pcoded-inner-navbar ">


                    @if (auth()->user()->user_type=='SA')
                        <li class="nav-item pcoded-menu-caption">
                            <label>Dashboard</label>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('super_admin.dashboard')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                        </li>
                    @elseif (auth()->user()->user_type=='C')
                        <li class="nav-item pcoded-menu-caption">
                            <label>Console</label>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('content_writer.dashboard')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Console</span></a>
                        </li>
                    @endif




                    @if ((auth()->user()->user_type=='SA')||(auth()->user()->user_type=='C'))
                        <li class="nav-item pcoded-menu-caption">
                            <label>Public Page</label>
                        </li>

                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Blog</span></a>
                            <ul class="pcoded-submenu">
                                <li><a href="{{route('super_admin.page.blog')}}">List</a></li>
                                <li><a href="{{route('super_admin.page.blog_add')}}">Add</a></li>

                            </ul>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather  icon-file-text"></i></span><span class="pcoded-mtext">Case Study</span></a>
                            <ul class="pcoded-submenu">
                                <li><a href="{{route('super_admin.page.case_study')}}">List</a></li>
                                <li><a href="{{route('super_admin.page.case_study_add')}}">Add</a></li>

                            </ul>
                        </li>


                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Product</span></a>
                            <ul class="pcoded-submenu">
                                <li><a href="{{route('super_admin.page.products')}}">List</a></li>
                                <li><a href="{{route('super_admin.page.product_add')}}">Add</a></li>

                            </ul>
                        </li>



                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Services</span></a>
                            <ul class="pcoded-submenu">
                                <li><a href="{{route('super_admin.page.solutions')}}">List</a></li>
                                <li><a href="{{route('super_admin.page.solution_add')}}">Add</a></li>

                            </ul>
                        </li>

                    @endif

                    @if (auth()->user()->user_type=='SA')
                        <li class="nav-item pcoded-menu-caption">
                            <label>Teams</label>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Careers</span></a>
                            <ul class="pcoded-submenu">
                                <li><a href="{{route('super_admin.page.careerss')}}">List</a></li>
                                <li><a href="{{route('super_admin.page.careers_add')}}">Add</a></li>

                            </ul>
                        </li>

                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Employee</span></a>
                            <ul class="pcoded-submenu">
                                {{-- <li><a href="{{route('super_admin.page.careerss')}}">List</a></li> --}}
                                <li><a href="{{route('employee.register')}}">New</a></li>

                            </ul>
                        </li>


                        <li class="nav-item pcoded-menu-caption">
                            <label>Contact</label>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('super_admin.page.contact')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Contact</span></a>
                        </li>



                    @endif



					{{-- <li class="nav-item pcoded-menu-caption">
					    <label>Forms &amp; table</label>
					</li>
					<li class="nav-item">
					    <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
					</li>
					<li class="nav-item">
					    <a href="tbl_bootstrap.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap table</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Chart & Maps</label>
					</li>
					<li class="nav-item">
					    <a href="chart-apex.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
					</li>
					<li class="nav-item">
					    <a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Pages</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="auth-signup.html" target="_blank">Sign up</a></li>
					        <li><a href="auth-signin.html" target="_blank">Sign in</a></li>
					    </ul>
					</li>
					<li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li> --}}

				</ul>


			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
