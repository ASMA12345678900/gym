<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gutim Template">
    <meta name="keywords" content="Gutim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>asma</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->

{{--  --}}


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">

            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="scroll-to-section"><a href="{{route('index') }}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{route('about') }}">About</a></li>
                            <li class="scroll-to-section"><a href="{{route('classe') }}">Classes</a></li>
                            <li class="scroll-to-section"><a href="{{route('calendrier') }}">Schedules</a></li>
                            <li class="scroll-to-section"><a href="{{route('contact') }}">Contact</a></li>

                </nav>
                <a href="{{ route ( 'registre') }}" class="primary-btn signup-btn">Sign Up Today</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>About</h2>
                        <div class="breadcrumb-option">
                            <a href="/index"><i class="fa fa-home"></i> Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Section Begin -->
    <section class="about-section about-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic">
                        <img src="img/about-pic.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=SlPhMPnQ58k" class="play-btn video-popup">
                            <img src="img/play.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>Story About Us</h2>
                        <p class="first-para">Welcome to FitLife Gym!

                            At FitLife Gym, we are committed to helping you achieve your fitness goals and lead a healthier lifestyle. Our state-of-the-art facility and experienced trainers create an environment that is motivating, supportive, and fun.</p>
                        <p class="second-para">EJoin us at FitLife Gym and embark on a transformative fitness journey. Take the first step towards a healthier, stronger, and more confident you. We are here to support you every step of the way</p>
                        <img src="img/about-signature.png" alt="">
                        <div class="at-author">
                            <h4>Daniel Marks</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- About Counter Section Begin -->

    <!-- About Counter Section End -->

    <!-- Gym Award Section Begin -->
    <section class="gym-award spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="award-text">
                        <h2>Best gym award</h2>
                        <p>We are thrilled to honor FiteLife Gym with the prestigious title of the Best Gym Award. This accolade is a testament to the exceptional commitment, unwavering dedication, and outstanding services provided by FiteLife Gym to its members.</p>
                        <p>FiteLife Gym has set a new benchmark in the fitness industry, embodying excellence in every aspect of its operation. From state-of-the-art facilities to cutting-edge equipment, this gym leaves no stone unturned when it comes to providing an unmatched fitness experience.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="img/award.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Gym Award Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <section class="banner-section set-bg" class="mx-5" data-setbg="img/banner-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-text">
                            <h2>Get training today</h2>
                            <p>Take the First Step Towards a Healthier You - Sign Up for Training at FitLife Gym Today!.</p>
                            <a href="{{ route('registre') }}" class="primary-btn banner-btn">Sign Up Now</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="img/banner-person.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    <!-- Banner Section End -->

    <!-- Trainer Section Begin -->
    <section class="trainer-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>EXPERT TRAINERS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-trainer-item">
                        <img src="img/trainer/trainer-1.jpg" alt="">
                        <div class="trainer-text">
                            <h5>Jim Cortez</h5>
                            <span>Gym Coach</span>
                            <p>is a highly experienced and dedicated fitness coach at Fit Life Gym. With 5 years of industry expertise, he is committed to helping individuals achieve their health and fitness goals  through personalized training programs and motivational guidance.</p>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-trainer-item">
                        <img src="img/trainer/trainer-2.jpg" alt="">
                        <div class="trainer-text">
                            <h5>John Paravilo</h5>
                            <span>Gym coach</span>
                            <p> It will provide guidance on healthy eating habits and make nutritional recommendations that complement your training regimen, especially for weight gain, and promote general well-being.</p>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-trainer-item">
                        <img src="img/trainer/trainer-3.jpg" alt="">
                        <div class="trainer-text">
                            <h5>Sana Wagner</h5>
                            <span>Yoga Dance Instructor</span>
                            <p> is a passionate and skilled yoga dance instructor at Fit Life Gym. With a deep understanding of both yoga and dance, she combines the fluidity of movement and the mindfulness of yoga to create a unique and transformative fitness experience.</p>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainer Section End -->

    <!-- Footer Banner Section Begin -->
    <section class="footer-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-banner-item set-bg" data-setbg="img/footer-banner/footer-banner-1.jpg">
                        <span>New member</span>
                        <h2>7 days for free</h2>
                        <p>Complete the training sessions with us, surely you will be happy</p>
                        <a href="{{ route('registre') }}" class="primary-btn">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-banner-item set-bg" data-setbg="img/footer-banner/footer-banner-2.jpg">
                        <span>contact us</span>
                        <h2>212 6 55 66 83 00</h2>
                        <p>Train Smarter, Train Harder - Join FitLife Gym and Get Started Today!</p>
                        <a href="#" class="primary-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Banner Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-option">
                        <span>Phone</span>
                        <p>212 6 55 66 83 00- 212 5 77 89 03 23</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-option">
                        <span>Address</span>
                        <p>CASA, rue 12 Dominant la Corniche   </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-option">
                        <span>Email</span>
                        <p>FitLife Gym @gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="subscribe-option set-bg" data-setbg="img/footer-signup.jpg">
                <div class="so-text">
                    <h4>Subscribe To Our Mailing List</h4>
                    <p>Sign up to receive the latest information </p>
                </div>
                <form action="#" class="subscribe-form">
                    <input type="text" placeholder="Enter Your Mail">
                    <button type="submit"><i class="fa fa-send"></i></button>
                </form>
            </div>
            <div class="copyright-text">
                <ul>
                    <li><a href="#">Term&Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <p>&copy;<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></p>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->



    <!-- Js Plugins -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
