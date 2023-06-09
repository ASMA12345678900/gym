<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Training Studio - Free CSS Template</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{ asset('css/templatemo-training-studio.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
</head>



<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href='/index' class="logo">FitLife <em> Gym</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{route('about') }}">About</a></li>
                            <li class="scroll-to-section"><a href="{{route('classe') }}">Classes</a></li>
                            <li class="scroll-to-section"><a href="{{route('calendrier') }}">Schedules</a></li>
                            <li class="scroll-to-section"><a href="{{route('contact') }}">Contact</a></li>
                            <li class="main-button"><a href="{{ route ( 'registre') }}">Sign Up Today</a></li>
                        </ul>
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

    <!-- ***** Main Banner Area Start ***** -->

    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="img/gym-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>work harder, get stronger</h6>
                <h2>easy with our <em>gym</em></h2>

            </div>
        </div>


    </div>
    <section class="about-section spad">
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

                            At FitLife Gym, we are committed to helping you achieve your fitness goals and lead a healthier lifestyle. Our state-of-the-art facility and experienced trainers create an environment that is motivating, supportive, and fun..</p>
                        <p class="second-para">EJoin us at FitLife Gym and embark on a transformative fitness journey. Take the first step towards a healthier, stronger, and more confident you. We are here to support you every step of the way.

                            Your fitness success starts here!</p>
                        <a href="#" class="primary-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- services --}}
    <section class="services-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-pic">
                        <img src="img/services/service-pic.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-items">
                        <div class="row">
                            @foreach ($services as $service)
                            <div class="col-md-6">

                                <div class="services-item bg-gray">

                                    <img src="{{ asset('upload/' . $service->image) }}" alt="">
                                    <h4>{{$service->name }}</h4>
                                    <p>{{$service->description }}</p>
                                </div>



                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- Classes Section Begin -->
      <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>UNLIMITED CLASSES</h2>
                    </div>
                </div>
            </div>
            <div class="row classes-slider owl-carousel">
                <div class="col-lg-4">
                    <div class="single-class-item set-bg" data-setbg="img/classes/ogao.jpg">
                        <div class="si-text">
                            <h4>Yoga</h4>

                        </div>
                    </div>
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-4.jpg">
                        <div class="si-text">
                            <h4>Jumping</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-2.jpg">
                        <div class="si-text">
                            <h4>Running</h4>

                        </div>
                    </div>
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-5.jpg">
                        <div class="si-text">
                            <h4>Dance</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-3.jpg">
                        <div class="si-text">
                            <h4>Squat</h4>

                        </div>
                    </div>
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-8.jpg">
                        <div class="si-text">
                            <h4>Cardio</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-7.jpg">
                        <div class="si-text">
                            <h4>Calisthenics</h4>

                        </div>
                    </div>
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


    {{-- price  --}}

    <section class="membership-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>MEMBERSHIP PLANS</h2>
                    </div>
                </div>
            </div>
            @php
            $prices = App\Models\Price::all(); // Assuming you have a Price model and you want to fetch all price records
            @endphp
            <div class="row">
                @foreach($prices as $price )
                <div class="col-lg-4">

                    <div class="membership-item">
                        <div class="mi-title">
                            <h4>{{ $price->planName }}</h4>
                            <div class="triangle"></div>
                        </div>
                        <h2 class="mi-price"><span>{{ $price->price }}</span></h2>
                        <ul>
                            <li>
                                <p>Duration</p>
                                <span>{{ $price->duration}}</span>
                            </li>
                            <li>
                                <p>Personal trainer</p>
                                <span>{{ $price->personnal_Trainer }}</span>
                            </li>
                            <li>
                                <p>Amount of people</p>
                                <span>{{ $price->Amount_of_people}}</span>
                            </li>
                            <li>
                                <p>Number of visits</p>
                                <span>{{ $price->Number_of_visits}}</span>
                            </li>
                        </ul>
                        <a href="{{route('registre') }}" class="primary-btn membership-btn">Start Now</a>
                    </div>
                </div>
                @endforeach


                </div>

            </div>
        </div>
    </section>

    {{-- contact a asma  --}}

    <section class="banner-section set-bg" class="mx-5" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <h2>Get training today</h2>
                        <p>Take the First Step Towards a Healthier You - Sign Up for Training at FitLife Gym Today!.</p>
                        <a href="{{route('registre') }}" class="primary-btn banner-btn">Sign Up Now</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/banner-person.png" alt="">
                </div>
            </div>
        </div>
    </section>

{{--
    footer a asma --}}


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



    <!-- jQuery -->
    <script src="js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imgfix.min.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/accordions.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Global Init -->
    <script src="js/custom.js"></script>
</html>
