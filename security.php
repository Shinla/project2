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

    <title>Bio MP | Security</title>
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

    <style>
    section.terms-and-conditions {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        margin: 30px 0;
    }

    h3 {
        font-size: 32px;
        color: #333;
        margin-bottom: 20px;
    }

    h5 {
        font-size: 18px;
        color: #555;
        margin-bottom: 20px;
        border-bottom: 2px solid #ccc;
        padding-bottom: 10px;
    }

    ol {
        list-style-type: decimal;
        margin-left: 20px;
    }

    ol li {
        font-size: 16px;
        margin-bottom: 10px;
        color: #666;
    }

    p {
        margin-bottom: 10px;
        color: #777;
    }

    @media (max-width: 768px) {
        section.terms-and-conditions {
            padding: 20px;
        }

        h3 {
            font-size: 28px;
        }

        h5 {
            font-size: 16px;
        }

        ol li {
            font-size: 14px;
        }

        p {
            font-size: 14px;
        }
    }
    </style>
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


    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.php" data-translation-key="home">Home</a></li>
                <li data-translation-key="sec"></li>
            </ol>

        </div>
    </section><!-- End Breadcrumbs -->



           <!-- ======= Features Section ======= -->
           <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <!-- Feature Icons -->
                <div class="row feature-icons" data-aos="fade-up">
                    <div class="inline-content">
                        <h3 data-translation-key="secu4"></h3>
                        <span data-translation-key="secu5"></span>
                    </div>


                    <div class="row">

                        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="assets/img/team/sec.jpg" class="img-fluid p-4" alt="">
                        </div>

                        <div class="col-xl-8 d-flex content">
                            <div class="row align-self-center gy-4">

                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                    <i class="ri-line-chart-line"></i>
                                    <div>
                                        <h4 data-translation-key="secu6"></h4>
                                        <p><span data-translation-key="secu7"></span></p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="ri-stack-line"></i>
                                    <div>
                                        <h4 data-translation-key="secu8"></h4>
                                        <p><span data-translation-key="secu9"></span></p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="ri-brush-4-line"></i>
                                    <div>
                                        <h4 data-translation-key="secu10"></h4>
                                        <p><span data-translation-key="secu11"></span></p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="ri-magic-line"></i>
                                    <div>
                                        <h4 data-translation-key="secu12"></h4>
                                        <p><span data-translation-key="secu13"></span></p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="ri-command-line"></i>
                                    <div>
                                        <h4 data-translation-key="secu14"></h4>
                                        <p><span data-translation-key="secu15"></span></p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                    <i class="ri-radar-line"></i>
                                    <div>
                                        <h4 data-translation-key="secu16"></h4>
                                        <p><span data-translation-key="secu17"></span></p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div><!-- End Feature Icons -->
                <br>


                <div class="row">
                    <header class="section-header">

                        <p><span data-translation-key="secu18"></span></p>
                    </header>
                    <div class="col-lg-6">
                        <img src="assets/img/team/staff.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3 data-translation-key="secu19"></h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3 data-translation-key="secu20"></h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3 data-translation-key="secu21"></h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3 data-translation-key="secu22"></h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3 data-translation-key="secu23"></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- / row -->

                <br><br>
                <div class="row">
                    <header class="section-header">

                        <p><span data-translation-key="secu24"></span></p>
                    </header>


                    <div class="col-lg-12 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3 data-translation-key="secu25"></h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3 data-translation-key="secu26"></h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3 data-translation-key="secu27"></h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3 data-translation-key="secu28"></h3>
                                </div>
                            </div>
                        </div>
                    </div>




                </div> <!-- / row -->

            </div>

        </section><!-- End Features Section -->

    </main><!-- End #main -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2 data-translation-key="in73">Verify by Professional institution verification</h2>
            </header>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/galaxy.jpg" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/bi.jfif" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/ma.jfif" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/sq.jpg" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/by.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/bina.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section><!-- End Clients Section -->

       <!-- ======= F.A.Q Section ======= -->
       <section id="faq" class="faq">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <p  data-translation-key="in36">Frequently Asked Questions</p>
  </header>

  <div class="row">
    <div class="col-lg-12">
      <!-- F.A.Q List 1-->
      <div class="accordion accordion-flush" id="faqlist1">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1" data-translation-key="in39">
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
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2" >
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
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
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
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
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
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                <span data-translation-key="in48"></span>  
              </button>
          </h2>
          <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
              <div class="accordion-body">
                <span data-translation-key="in49"></span>  
                  <ul>
                      <li><strong> <span data-translation-key="in50"></span>:</strong> support@example.com</li>
                      <li><strong> <span data-translation-key="in51"></span>:</strong> [Your Contact Number]</li>
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
                            <li><i class="bx bx-chevron-right"></i> <a href="#faq" data-translation-key="faq">FAQ</a></li>
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