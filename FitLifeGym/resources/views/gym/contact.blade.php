<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gutim Template">
    <meta name="keywords" content="Gutim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FitLifeGym</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
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
                        <li class="scroll-to-section"><a href="{{url('/index') }}" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="{{route('about') }}">About</a></li>
                        <li class="scroll-to-section"><a href="{{route('classe') }}">Classes</a></li>
                        <li class="scroll-to-section"><a href="{{route('calendrier') }}">Schedules</a></li>
                        <li class="scroll-to-section"><a href="{{route('contact') }}">Contact</a></li>
                    </ul>
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
                        <h2>Contact</h2>
                        <div class="breadcrumb-option">
                            <a href="/index"><i class="fa fa-home"></i> Home</a>
                            <span>Contact</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6646.858533453378!2d-7.678499209063284!3d33.59416493024223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d30daf658fe7%3A0x2c395bb9cd53ac7b!2sLa%20Corniche%2C%20Casablanca!5e0!3m2!1sfr!2sma!4v1685177301305!5m2!1sfr!2sma" width="600" height="450" style="border:0;height: 674px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <img src="img/icon/location.png" alt="">
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h4>Contacts Us</h4>
                        <div class="contact-address">
                            <div class="ca-widget">
                                <div class="cw-icon">
                                    <img src="img/icon/icon-1.png" alt="">
                                </div>
                                <div class="cw-text">
                                    <h5>Our Location</h5>
                                    <p>CASA, rue 12 Dominant la Corniche </p>
                                </div>
                            </div>
                            <div class="ca-widget">
                                <div class="cw-icon">
                                    <img src="img/icon/icon-2.png" alt="">
                                </div>
                                <div class="cw-text">
                                    <h5>Phone:</h5>
                                    <p>212 6 55 66 83 00</p>
                                </div>
                            </div>
                            <div class="ca-widget">
                                <div class="cw-icon">
                                    <img src="img/icon/icon-3.png" alt="">
                                </div>
                                <div class="cw-text">
                                    <h5>Mail</h5>
                                    <p>FitLife Gym@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <h4>Leave A Comment</h4>
                        <form action="{{route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text"  name="name" placeholder="Your name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email"  placeholder="Your email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Your messages" name="message"  ></textarea>
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Banner Section End -->
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
                        <a href="{{ route ( 'registre') }}" class="primary-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <p>FitLife Gym@gmail.com</p>
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
