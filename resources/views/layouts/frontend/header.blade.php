<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    <!-- Loader Start -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader End -->
    <!-- Start Navbar -->
    <nav id="topnav" class="defaultscroll is-sticky nav-sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="{{ route('home') }}">
                <span class="inline-block dark:hidden">
                    <img src="assets/hospitallogo/logoblue.png" class="l-dark" height="24" alt="" />
                    <img src="assets/hospitallogo/logoblue.png" class="l-light" height="24" alt="" />
                </span>
                <img src="assets/hospitallogo/logoblue.png" height="24" class="hidden dark:inline-block"
                    alt="" />
            </a>

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <!--Login button Start-->
            <ul class="buy-button list-none mb-0">
                <li class="inline pl-1 mb-0">
                    <a href="https://www.facebook.com/NeopolisMedicalCenter" target="_blank">
                        <div class="login-btn-primary">
                            <span
                                class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                    data-feather="facebook" class="h-6 w-6"></i></span>
                        </div>
                        <div class="login-btn-light">
                            <span
                                class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i
                                    data-feather="facebook" class="h-6 w-6"></i></span>
                        </div>
                    </a>
                </li>
                <li class="inline pl-1 mb-0">
                    <a href="https://www.instagram.com/neopolisclinics/" target="_blank">
                        <div class="login-btn-primary">
                            <span
                                class="btn btn-icon  logo-instagram
                                rounded-full hover:bg-red-700 border-red-600 hover:border-red-700 text-white"><i
                                    data-feather="instagram" class="h-6 w-6"></i></span>
                        </div>
                        <div class="login-btn-light">
                            <span
                                class="btn btn-icon  logo-instagram   rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i
                                    data-feather="instagram" class="h-6 w-6"></i></span>
                        </div>
                    </a>
                </li>
                <li class="inline pl-1 mb-0">
                    <a href="https://twitter.com/Neopolisclinics?t=W7mbl-CdGO-v_z5ZT4QycA&s=09" target="_blank">
                        <div class="login-btn-primary">
                            <span
                                class="btn btn-icon rounded-full bg-sky-600 hover:bg-sky-700 border-sky-600 hover:border-sky-700 text-white"><i
                                    data-feather="twitter" class="h-6 w-6"></i></span>
                        </div>
                        <div class="login-btn-light">
                            <span
                                class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i
                                    data-feather="twitter" class="h-6 w-6"></i></span>
                        </div>
                    </a>
                </li>
            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light">
                    <li><a href="{{ route('home') }}" class="sub-menu-item">HOME</a></li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="{{ route('services') }}">SERVICES</a>
                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="{{ route('doctors') }}">DOCTORS</a>
                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="{{ route('blogs') }}">BLOGS</a>
                    </li>
                    <li class="has-submenu parent-menu-item">
                        <a href="{{ route('gallery') }}">Gallery</a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}"class="has-submenu parent-menu-item">Contact
                            Us</a>
                    </li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </nav>
    <!--end header-->
    <!-- End Navbar -->
