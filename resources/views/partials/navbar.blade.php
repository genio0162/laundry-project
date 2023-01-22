 <!-- Header Start -->
 <div class="header-area">
    <div class="main-header">
        <!-- Logo -->
        <div class="header-left">
            <div class="logo">
                <a href="/"><img src="../assets/img/logo/logo.png" alt=""></a>
            </div>
            <div class="menu-wrapper  d-flex align-items-center">
                <!-- Main-menu -->
                <div class="main-menu d-none d-lg-block">
                    <nav>
                        <ul id="navigation">
                            <li class="{{ ($active === "home")  ? 'active' : '' }}"><a href="/">Home</a></li>
                            <li  class="{{ ($active === "about")  ? 'active' : '' }}"><a href="/about">About</a></li>
                            <li  class="{{ ($active === "services")  ? 'active' : '' }}"><a href="/services">Services</a></li>
                            <li class="{{ ($active === "blog" || $active === "categories")  ? 'active' : '' }}"><a href="/blog">Blog</a>
                                <ul class="submenu">
                                    <li><a href="/categories">Categories</a></li>
                                </ul>
                            </li>
                            <li  class="{{ ($title === "Contact")  ? 'active' : '' }}"><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        @auth
        <div class="header-left">
            <div class="menu-wrapper  d-flex align-items-center">
                <!-- Main-menu -->
                <div class="main-menu  d-lg-block mr-90">
                    <nav>
                        <ul id="navigation">
                            <li><a href="/blog">Welcome back, {{ auth()->user()->name }}</a>
                                <ul class="submenu">
                                    <li><a href="/dashboard" class="">My Dashboard <i class="fa-solid fa-house-user ml-10"></i></a></li>
                                    <li><hr></li>

                                    <li class="ml-0" id="button">
                                        <form action="/logout" method="post">
                                            @csrf
                                        <button type="submit" class="dropdown-item mb-10">Logout<i class="fa-solid fa-right-from-bracket ml-80"></i></button>
                                        {{-- <a href="/logout" class="mt-40 mb-40">Logout <i class="fa-solid fa-right-from-bracket ml-40"></i></a> --}}
                                    </form>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
            @else
            <div class="header-right d-lg-block">
                <small class="mb-100 ml-200">Already Have account?<br>
                <a href="/login" class="header-btn1 ml-200">Sign in</a>
            </small>
        </div>
        <div class="header-right d-lg-block">
                <a href="/register" class="header-btn2">Sign Up</a>
            </div>
        @endauth


        <!-- Mobile Menu -->
        <div class="col-12">
            <div class="mobile_menu d-block d-lg-none">
            </div>
        </div>
    </div>
</div>
<!-- Header End -->