<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>{{ config('app.name') }}</title>

    <link rel="icon" type="image/png" href="images/fav.png">

    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ 'vendor/OwlCarousel/assets/owl.theme.default.min.css' }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/semantic/semantic.min.css') }}">
</head>

<body>

    <div class="modal srch-model fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header sheader">
                    <button type="button" class="close srch-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="srch-input" placeholder="Search Keywords...">
                </div>
            </div>
        </div>
    </div>


    <header>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="top-header-full">
                            <div class="top-left-hd">
                                <ul>
                                    <li>
                                        <div class="wlcm-text">Welcome to Jobby</div>
                                    </li>
                                    <li>
                                        <div class="lang-icon dropdown">
                                            <i class="fas fa-globe ln-glb"></i>
                                            <a href="#" class="icon15 dropdown-toggle-no-caret" role="button"
                                                data-toggle="dropdown">
                                                EN <i class="fas fa-caret-down p-crt"></i>
                                            </a>
                                            <div class="dropdown-menu lanuage-dropdown dropdown-menu-left">
                                                <a class="link-item" href="#">EN</a>
                                                <a class="link-item" href="#">DE</a>
                                                <a class="link-item" href="#">RU</a>
                                                <a class="link-item" href="#">ES</a>
                                                <a class="link-item" href="#">FR</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="top-right-hd">
                                <ul>
                                    <li class="dropdown">
                                        <a href="#" class="icon14 dropdown-toggle-no-caret" role="button"
                                            data-toggle="dropdown">
                                            <i class="fas fa-envelope"></i>
                                            <div class="circle-alrt"></div>
                                        </a>
                                        <div class="dropdown-menu message-dropdown dropdown-menu-right">
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#"><img
                                                                src="{{ asset('images/user-dp-1.jpg') }}"
                                                                alt="">
                                                            <div class="user-title1">Jassica William </div>
                                                            <span>Hey How are you John Doe...</span>
                                                        </a>
                                                    </div>
                                                    <div class="time5">2 min ago</div>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#"><img
                                                                src="{{ asset('images/user-dp-1.jpg') }}"
                                                                alt="">
                                                            <div class="user-title1">Rock Smith </div>
                                                            <span>Interesting Event! I will join this...</span>
                                                        </a>
                                                    </div>
                                                    <div class="time5">5 min ago</div>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#"><img
                                                                src="{{ asset('images/user-dp-1.jpg') }}"
                                                                alt="">
                                                            <div class="user-title1">Joy Doe </div>
                                                            <span>Hey Sir! What about you...</span>
                                                        </a>
                                                    </div>
                                                    <div class="time5">10 min ago</div>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <a href="my_freelancer_messages.html" class="view-all">View All
                                                    Messages</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="icon14 dropdown-toggle-no-caret" role="button"
                                            data-toggle="dropdown">
                                            <i class="fas fa-bell"></i>
                                            <div class="circle-alrt"></div>
                                        </a>
                                        <div class="dropdown-menu message-dropdown dropdown-menu-right">
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#">
                                                            <div class="noti-icon"><i class="fas fa-users"></i></div>
                                                            <div class="user-title1">Rock William </div>
                                                            <span>applied for a <ins class="noti-p-link">Php
                                                                    Developer</ins>.</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#">
                                                            <div class="noti-icon"><i class="fas fa-bullseye"></i>
                                                            </div>
                                                            <div class="user-title1">Johnson Smith</div>
                                                            <span>placed a bid on your <ins class="noti-p-link">I Need
                                                                    a ...</ins></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#">
                                                            <div class="noti-icon"><i class="fas fa-exclamation"></i>
                                                            </div>
                                                            <span class="pt-2">Your job listing <ins
                                                                    class="noti-p-link">Wordpress Developer</ins> is
                                                                expiring.</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <a href="my_freelancer_notifications.html" class="view-all">View All
                                                    Notifications</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="account order-1 dropdown">
                                            <a href="#" class="account-link dropdown-toggle-no-caret"
                                                role="button" data-toggle="dropdown">
                                                <div class="user-dp"><img src="{{ asset('images/dp.jpg') }}"
                                                        alt=""></div>
                                                <span>Hi! @if (session()->has('details'))
                                                        {{ session()->get('details.company') }}
                                                        {{ session()->get('details.freelancer') }}
                                                    @else
                                                        guest
                                                    @endif
                                                </span>
                                                <i class="fas fa-sort-down"></i>
                                            </a>
                                            <div class="dropdown-menu account-dropdown dropdown-menu-right">
                                                @if (session()->has('details.company'))
                                                    <a class="link-item" href="{{ route('profile') }}">Dashboard</a>
                                                    <a class="link-item" href="/members">Employees</a>
                                                    <a class="link-item" href="/freelancers">Freelancers</a>
                                                    <a class="link-item" href="/reviews">Reviews</a>
                                                    <a class="link-item"
                                                        href="{{ route('company.edit', session()->get('details.companyId')) }}">Update Profile</a>
                                                @elseif(session()->has('details.freelance'))
                                                    <a class="link-item"
                                                        href="{{ route('dashboard') }}">Dashboard</a>
                                                    <a class="link-item" href="{{ route('setting') }}">Setting</a>
                                                    <a class="link-item" href="{{ route('messages') }}">My
                                                        Messages</a>
                                                    <a class="link-item" href="{{ route('jobs.index') }}">My Jobs</a>
                                                    <a class="link-item" href="{{ route('bids') }}">My Bids</a>
                                                    <a class="link-item" href="{{ route('portfolio') }}">My
                                                        Portfolio</a>
                                                    <a class="link-item" href="{{ route('bookmarks') }}">My
                                                        Bookmarks</a>
                                                    <a class="link-item" href="{{ route('payments') }}">Payments</a>
                                                @endif
                                                @if (session()->has('details'))
                                                    <a  class="link-item" href="{{ route('passwordresetlinkform') }}">Reset Password</a>
                                                    <a class="link-item" href="{{ route('logout') }}">Logout</a>
                                                @else
                                                    <a class="link-item" href="{{ route('mode') }}">Sign Up</a>
                                                    <a class="link-item" href="{{ route('showlogin') }}">Login</a>
                                                @endif


                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-dark1 justify-content-sm-start">
                            <a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="/"><img
                                    src="{{ asset('images/logo.svg') }}" alt=""></a>
                            <button class="navbar-toggler align-self-start" type="button">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav align-self-stretch">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('home.index') }}">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle-no-caret" role="button"
                                            data-toggle="dropdown">Find Jobs</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="{{ route('jobs.index') }}">Browse Jobs</a>
                                            <a class="link-item" href="{{ route('jobs.create') }}">Post a Job</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        {{-- <a href="#" class="nav-link dropdown-toggle-no-caret" role="button"
                                            data-toggle="dropdown">Find Work</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="browse_projects.html">Browse Projects</a>
                                            <a class="link-item" href="project_single_view.html">Single Project
                                                View</a>
                                            <a class="link-item" href="post_a_project.html">Post a Project</a>
                                        </div> --}}
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle-no-caret" role="button"
                                            data-toggle="dropdown">Find Companies</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="/company">Browse Companies</a>

                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle-no-caret" role="button"
                                            data-toggle="dropdown">Find Freelancers</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="/search">Browse Freelancers</a>
                                        </div>
                                    </li>

                                </ul>
                                <a href="#" class="search-link" role="button" data-toggle="modal"
                                    data-target="#searchModal"><i class="fas fa-search"></i></a>
                                <a href="jobs/create" class="add-post">Post a Job</a>
                                <a href="/jobs" class="add-task">Browse Jobs</a>
                            </div>
                            <div class="responsive-search order-1">
                                <input type="text" class="rsp-search" placeholder="Search...">
                                <i class="fas fa-search r-sh1"></i>
                            </div>
                        </nav>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    @yield('content')

    <footer class="footer">
        <div class="subscribe-newsletter">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-6">
                        <div class="subcribes">
                            <div class="text-step1">
                                <h4>Subscribe to Newsletter</h4>
                                <div class="btext-heading mt-2" style="color:#acacac; font-size:14px;">
                                    <i class="fas fa-check-circle"></i>Cras nunc mauris, rhoncus eu justo at, egestas
                                    sagittis felis. Ut sed feugiat eros.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="subcribe-input">
                            <input class="nltr-input" type="email" placeholder="Your Email Address">
                            <button class="s-btn">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="about-jobby">
                        <a href="/"><img src="{{ asset('images/logo1.svg') }}" alt=""></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu purus et diam blandit
                            vehicula sit amet sed metus. Fusce condimentum non neque at fringilla. Aenean malesuada
                            aliquet tincidunt.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="footer-links">
                        <h4>About</h4>
                        <ul>
                            <li><a href="/about">About Us</a></li>

                            <li><a href="/showlogin">Login</a></li>
                            @if (session()->has('details.freelanceId'))
                                <li><a href="profile">My Account</a></li>
                            @endif

                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/privacy">Privacy Policy</a></li>
                            <li><a href="/terms">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="footer-links">
                        <h4>For Companies</h4>
                        <ul>
                            <li><a href="/search">Browese Freelancers</a></li>
                            <li><a href="/jobs/create">Post a Job</a></li>

                            <li><a href="/helpcenter">Help Center</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="footer-links">
                        <h4>For Candidates</h4>
                        <ul>
                            <li><a href="/jobs">Browese Jobs</a></li>
                            <li><a href="{{ route('job-personal') }}">Jobs Alerts</a></li>
                            <li><a href="{{ route('job-personal') }}">Applied Jobs</a></li>
                            <li><a href="/bookmarks">Bookmarks</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-social">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright">
                            <i class="far fa-copyright"></i>Copyright {{ date('Y') }} <span>JOBgigz</span>. All
                            Right Reserved.
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <button onclick="topFunction()" id="pageup" title="Go to top"><i class="fas fa-arrow-up"></i></button>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/i18n/datepicker.en.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/OwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('vendor/semantic/semantic.min.js') }}"></script>
    <script src="{{ asset('js/custom1.js') }}"></script>
    <script>
        window.oncontextmenu = function() {
            return false;
        }
        $(document).keydown(function(event) {
            if (event.keyCode == 123) {
                return false;
            } else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event
                    .shiftKey && event.keyCode == 74)) {
                return false;
            }
        });
    </script>
</body>

</html>
