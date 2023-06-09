<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gutim Template">
    <meta name="keywords" content="Gutim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gutim | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
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
                <a href="#" class="primary-btn signup-btn">Sign Up Today</a>
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
                        <h2>Classes</h2>
                        <div class="breadcrumb-option">
                            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                            <span>Class</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Register Section Begin -->

    <!-- Register Section End -->

    <!-- Classes Section Begin -->
    <section class="classes-section classes-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>UNLIMITED CLASSES</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/ogao.jpg">
                        <div class="si-text">
                            <h4>Yoga</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-4.jpg">
                        <div class="si-text">
                            <h4>Jumping</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-2.jpg">
                        <div class="si-text">
                            <h4>Running</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-5.jpg">
                        <div class="si-text">
                            <h4>Dance</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-3.jpg">
                        <div class="si-text">
                            <h4>Squat</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-6.jpg">
                        <div class="si-text">
                            <h4>Calisthenics</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-7.jpg">
                        <div class="si-text">
                            <h4>Warrior </h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-8.jpg">
                        <div class="si-text">
                            <h4>Cardio</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-9.jpg">
                        <div class="si-text">
                            <h4>Zumba</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->

    <!-- Classes Timetable Section Begin -->
    <section class="classes-timetable spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Class Timetable</h2>
                    </div>
                    <div class="nav-controls">
                        <ul>
                            <li class="active" data-tsfilter="all">All Class</li>
                            <li data-tsfilter="gym">Weight Gain</li>
                            <li data-tsfilter="crossfit">Cardio</li>
                            <li data-tsfilter="cardio">Weight Loss</li>
                            <li data-tsfilter="body">Dance</li>
                            <li data-tsfilter="yoga">Yoga</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-table">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="workout-time">10.00</td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Weight Gain</h6>
                                        <span>10.00 - 11.00</span>

                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="yoga">
                                        <h6>Yoga</h6>
                                        <span>10.00 - 12.00</span>

                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="body">
                                        <h6>Dance</h6>
                                        <span>10.00 - 12.00</span>

                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="cardio">
                                        <h6>Weight Loss</h6>
                                        <span>10.00 - 11.00</span>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time">14.00</td>
                                    <td></td>
                                    <td class="hover-bg ts-item">
                                        <h6>Running</h6>
                                        <span>14.00 - 16.00</span>

                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item">
                                        <h6>Cardio</h6>
                                        <span>14.00 - 15.00</span>

                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Weight Gain</h6>
                                        <span>14.00 - 16.00</span>

                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="workout-time">16.00</td>
                                    <td class="hover-bg ts-item" data-tsmeta="cardio">
                                        <h6>Weight Loss</h6>
                                        <span>16.00 - 18.00</span>

                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Weight Gain</h6>
                                        <span>16.00 - 19.00</span>

                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="yoga">
                                        <h6>Yoga</h6>
                                        <span>16.00 - 18.00</span>

                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Weight Gain</h6>
                                        <span>16.00 - 20.00</span>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time">18.00</td>
                                    <td class="hover-bg ts-item">
                                        <h6>Yoga</h6>
                                        <span>18.00 - 22.00</span>

                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="body">
                                        <h6>Dance</h6>
                                        <span>18.00 - 20.00</span>

                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                        <h6>Cardio</h6>
                                        <span>18.00 - 21.00</span>

                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="cardio">
                                        <h6>Weight Loss</h6>
                                        <span>18.00 - 22.00</span>

                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="workout-time">20.00</td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Weight Gain</h6>
                                        <span>20.00 - 12.00</span>

                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="body">
                                        <h6>Dance</h6>
                                        <span>20.00 - 21.00</span>

                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="cardio">
                                        <h6>Weight Loss</h6>
                                        <span>20.00 - 22.00</span>

                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                        <h6>Cardio</h6>
                                        <span>20.00 - 21.00</span>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>




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
