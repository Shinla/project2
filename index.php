<?php 
session_start();

include("./config/conn.php");
include("./config/function.php");

$user_data = check_login($con);

?>
  


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bio MP</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="index.php" style="color:#ffd584;">Bio MP</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php" data-translation-key="home">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.php#about" data-translation-key="aboutUs">About</a>
                    </li>
                    <li class="dropdown"><a href="#"><span data-translation-key="services">Services</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="market.php" data-translation-key="mar">Market</a></li>
                            <li><a href="#pricing" data-translation-key="pak">Package</a></li>
                            <li><a href="wallet.php" data-translation-key="wallet">Wallet</a></li>  
                        </ul>
                    </li>
                    <li><a href="security.php" data-translation-key="sec">Security</a></li>
                    <li class="dropdown">
                        <a href="#"><span data-translation-key="Language"></span><i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu-left">
                            <li><a href="#" onclick="changeLanguage('en')">English</a></li>
                            <li><a href="#" onclick="changeLanguage('zh')">中文</a></li>
                        </ul>
                    </li>

                


                    <!-- Logout Icon with Link -->
                    <li><a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right"></i></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1 data-aos="fade-up" data-translation-key="in1"></h1>
                    <h2 data-aos="fade-up" data-aos-delay="400" data-translation-key="in2"></h2>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-store-line"></i>
                        <h3 data-translation-key="in10" style="color:#fff;">Technology and Innovation</h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-bar-chart-box-line"></i>
                        <h3 data-translation-key="in11" style="color:#fff;">Safety Standards</h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-calendar-todo-line"></i>
                        <h3 data-translation-key="in12" style="color:#fff;">Security Measures</h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-paint-brush-line"></i>
                        <h3 data-translation-key="in13" style="color:#fff;">Wallet Security</h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-database-2-line"></i>
                        <h3 data-translation-key="in14" style="color:#fff;">Community Involvement</h3>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about" style="background-color:#222;">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <h1 data-translation-key="ab5" style="color:#ffd584;">Who We Are</h1>
                        <p data-translation-key="ab6" style="color:white;"></p>
                        <p data-translation-key="ab7" style="color:white;"></p>
                        <ul>
                            <li><i class="bi bi-check"></i> <span data-translation-key="ab8" style="color:white;"></span></li>
                            <li><i class="bi bi-check"></i> <span data-translation-key="ab9" style="color:white;"></span></li>
                            <li><i class="bi bi-check"></i> <span data-translation-key="ab10" style="color:white;"></span></li>
                        </ul>
                        <p><span data-translation-key="ab11" style="color:white;"></span></p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2 data-translation-key="in73" style="color:#ffd584;">Verify by Professional institution
                        verification</h2>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/galaxy.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/bi.jfif" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/ma.jfif" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/sq.jpg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/by.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/bina.png" class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section><!-- End Clients Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing" style="background-color:#222;">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3 data-translation-key="in32" style="color:#ffd584;">Check out our Packages</h3>
                </header>

                <div class="row gy-4" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <h3 style="color: #07d5c0;" data-translation-key="in33">Bronze</h3>
                            <div class="price"><sup>$</sup>300<span> USD</span></div>
                            <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                            <ul>
                                <li><strong style="color: #07d5c0;"><span data-translation-key="in34"></span>:
                                        0.7%</strong></li>
                                <li><strong style="color: #07d5c0;"><span data-translation-key="in35"></span>:
                                        8</strong></li>
                            </ul>
                            <a href="wallet.php" class="btn-buy" data-translation-key="in41">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <h3 style="color: #65c600;" data-translation-key="in31">Silver</h3>
                            <div class="price"><sup>$</sup>1000<span> USD</span></div>
                            <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
                            <ul>
                                <li><strong style="color: #65c600;"><span data-translation-key="in34"></span>:
                                        1.12%</strong></li>
                                <li style="color: #65c600;"><strong><span data-translation-key="in35"></span>:
                                        6</strong></li>
                            </ul>
                            <a href="wallet.php" class="btn-buy" data-translation-key="in41">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <h3 style="color: #ff901c;" data-translation-key="in37">Gold</h3>
                            <div class="price"><sup>$</sup>1500<span> USD</span></div>
                            <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
                            <ul>
                                <li><strong style="color: #ff901c;"><span data-translation-key="in34"></span>:
                                        1.57%</strong></li>
                                <li><strong style="color: #ff901c;"><span data-translation-key="in35"></span>:
                                        2</strong></li>
                            </ul>
                            <a href="wallet.php" class="btn-buy" data-translation-key="in41">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="box">
                            <h3 style="color: #ff0071;" data-translation-key="in38">Platinum </h3>
                            <div class="price"><sup>$</sup>5000<span> USD</span></div>
                            <img src="assets/img/pricing-ultimate.png" class="img-fluid" alt="">
                            <ul>
                                <li><strong style="color: #ff0071;"><span data-translation-key="in34"></span>:
                                        3%</strong></li>
                                <li><strong style="color: #ff0071;"><span data-translation-key="in35"></span>:
                                        1</strong></li>
                            </ul>
                            <a href="wallet.php" class="btn-buy" data-translation-key="in41">Buy Now</a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Pricing Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                        data-aos="fade-right" data-aos-delay="100"></div>
                    <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left"
                        data-aos-delay="100">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3 data-translation-key="ab19">Our platform in numbers</h3>
                            <div class="row">
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-emoji-smile"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="8165"
                                            data-purecounter-duration="2" class="purecounter"></span>
                                        <p><strong data-translation-key="ab20">Number of miners</strong></p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-journal-richtext"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="85"
                                            data-purecounter-duration="2" class="purecounter"></span>
                                        <p><strong data-translation-key="ab21">Countries served</strong></p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-award"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="35"
                                            data-purecounter-duration="4" class="purecounter"></span>
                                        <p><strong data-translation-key="ab23">Crypto adoption</strong></p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-clock"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="4"
                                            data-purecounter-duration="4" class="purecounter"></span>
                                        <p><strong data-translation-key="ab22">Years of experience</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Counts Section -->

        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h1 data-translation-key="in53" style="color:white;"></h1>
                    <p data-translation-key="in54"  style="color:white;"></p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="assets/img/team/me.webp" class="img-fluid" alt="" width="240px">
                                    </div>
                                    <div class="member-info">
                                        <h4 data-translation-key="in55"></h4>
                                        <p data-translation-key="in56"></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="member">
                                    <div class="member-img">
                                    <img src="assets/img/team/ro.png" class="img-fluid" alt="" width="240px">
                                    </div>
                                    <div class="member-info">
                                        <h4 data-translation-key="in57"></h4>
                                        <p data-translation-key="in58"></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="member">
                                    <div class="member-img">
                                    <img src="assets/img/team/mu.png" class="img-fluid" alt="" width="240px">
                                    </div>
                                    <div class="member-info">
                                        <h4 data-translation-key="in59"> Kylian Mbappé</h4>
                                        <p data-translation-key="in60"></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="member">
                                    <div class="member-img">
                                    <img src="assets/img/team/allen.png" class="img-fluid" alt="" width="240px">
                                    </div>
                                    <div class="member-info">
                                        <h4 data-translation-key="in61">Allen Iverson</h4>
                                        <p data-translation-key="in62"></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="member">
                                    <div class="member-img">
                                    <img src="assets/img/team/jo.png" class="img-fluid" alt="" width="240px">
                                    </div>
                                    <div class="member-info">
                                        <h4 data-translation-key="in63">Michael Jordan</h4>
                                        <p data-translation-key="in64"></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="member">
                                    <div class="member-img">
                                    <img src="assets/img/team/curry.png" class="img-fluid" alt="" width="240px">
                                    </div>
                                    <div class="member-info">
                                        <h4 data-translation-key="in65">Stephen Curry</h4>
                                        <p data-translation-key="in66"></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="member">
                                    <div class="member-img">
                                    <img src="assets/img/team/sha.png" class="img-fluid" alt="" width="240px">
                                    </div>
                                    <div class="member-info">
                                        <h4 data-translation-key="in67"></h4>
                                        <p data-translation-key="in68"></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="member">
                                    <div class="member-img">
                                    <img src="assets/img/team/cn1.png" class="img-fluid" alt="" width="240px">
                                    </div>
                                    <div class="member-info">
                                        <h4 data-translation-key="in69">Zhang Ruoyun</h4>
                                        <p data-translation-key="in70"></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="member">
                                    <div class="member-img">
                                    <img src="assets/img/team/cn2.png" class="img-fluid" alt="" width="240px">
                                    </div>
                                    <div class="member-info">
                                        <h4 data-translation-key="in71">Zanilia Zhao</h4>
                                        <p data-translation-key="in72"></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->


        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p data-translation-key="in36">Frequently Asked Questions</p>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <!-- F.A.Q List 1-->
                        <div class="accordion accordion-flush" id="faqlist1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1" data-translation-key="in39">
                                        What is Bitcoin?
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body" data-translation-key="in40">

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <span data-translation-key="in42"></span>
                                    </button>
                                </h2>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        <span data-translation-key="in43"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <span data-translation-key="in44"></span>
                                    </button>
                                </h2>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        <span data-translation-key="in45"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-1">
                                        <span data-translation-key="in46"></span>
                                    </button>
                                </h2>
                                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        <span data-translation-key="in47"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2-content-3">
                                        <span data-translation-key="in48"></span>
                                    </button>
                                </h2>
                                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        <span data-translation-key="in49"></span>
                                        <ul>
                                            <li><strong> <span data-translation-key="in50"></span>:</strong>
                                                support@example.com</li>
                                            <li><strong> <span data-translation-key="in51"></span>:</strong> [Your
                                                Contact Number]</li>
                                        </ul>
                                        <span data-translation-key="in52"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>

            </div>

        </section><!-- End F.A.Q Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3 style="color: #ffc451;">BIO MP</h3>
                            <p>
                                <strong><span data-translation-key="foo7"></span></strong> +1 5589 55488 55<br>
                                <strong><span data-translation-key="foo8"></span></strong> info@example.com<br>
                            </p><br>
                            <strong data-translation-key="in75"></strong>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4 data-translation-key="foo1">Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php" data-translation-key="home">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#about" data-translation-key="aboutUs">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#services" data-translation-key="services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="tnc.php" data-translation-key="foo2">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="privacy.php" data-translation-key="foo3">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4 data-translation-key="foo6">Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#counts" data-translation-key="in8">Features</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#pricing" data-translation-key="in78">Package</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="security.php" data-translation-key="sec">Security</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#faq" data-translation-key="faq">FAQ</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="market.php" data-translation-key="mar">Derivatives</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4 data-translation-key="foo5">Server Status</h4>

                        <!-- Europe - West Server -->
                        <div class="server-status">
                            <div class="green-dot"></div>
                            <div class="server-info">Europe - West</div>
                        </div>

                        <!-- USA - West Server -->
                        <div class="server-status pt-2">
                            <div class="green-dot"></div>
                            <div class="server-info">USA - West</div>
                        </div>

                        <!-- Asia - East Server -->
                        <div class="server-status pt-2">
                            <div class="green-dot"></div>
                            <div class="server-info">Asia - East</div>
                        </div>

                        <!-- South America - South Server -->
                        <div class="server-status pt-2">
                            <div class="green-dot"></div>
                            <div class="server-info">South America - South</div>
                        </div>

                        <!-- Africa - North Server -->
                        <div class="server-status pt-2">
                            <div class="green-dot"></div>
                            <div class="server-info">Africa - North</div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Bio Mining Pool</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lang.js"></script>

</body>

</html>