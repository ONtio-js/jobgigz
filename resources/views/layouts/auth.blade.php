<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gambolthemes.net/html-items/jobby/jobby-freelancer/sign_in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 19:24:20 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Jobby - Sign In</title>

    <link rel="icon" type="image/png" href="images/fav.png">

    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datepicker.min.css" rel="stylesheet">
    <link href="css/jquery.range.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">
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
                        <div class="">
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
                                    <a href="showlogin" class="login_btn"><i class="fas fa-lock"></i> Login</a>
                                </div>
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
                                    src="images/logo.svg" alt=""></a>
                            <button class="navbar-toggler align-self-start" type="button">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav align-self-stretch">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle-no-caret" role="button"
                                            data-toggle="dropdown">Find Jobs</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="/search">Browse Jobs</a>
                                            <a class="link-item" href="/jobs/create">Post a Job</a>
                                        </div>
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
                                <a href="/jobs/create" class="add-post">Post a Job</a>
                                <a href="/search" class="add-task">Browse Jobs</a>
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
                        <a href="/"><img src="images/logo1.svg" alt=""></a>
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
                            @if (!request()->is('showlogin'))
                            <li><a href="sign_in.html">Login</a></li>
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

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="footer-links">
                        <h4>For Candidates</h4>
                        <ul>
                            <li><a href="/jobs">Browese Jobs</a></li>
                            <li><a href="{{route('job-personal')}}">Jobs Alerts</a></li>
                            <li><a href="{{route('job-personal')}}">Applied Jobs</a></li>
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
                            <i class="far fa-copyright"></i>Copyright  {{  date('Y')}} <span>JOBgigz</span> . All Right Reserved.
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


    <script src="js/jquery.min.js"></script>
    <script src="js/datepicker.min.js"></script>
    <script src="js/i18n/datepicker.en.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="vendor/semantic/semantic.min.js"></script>
    <script src="js/jquery.range-min.js"></script>
    <script src="js/custom1.js"></script>
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
