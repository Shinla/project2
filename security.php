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

    <title>Bio MP | Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <span>Bio MP</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php" data-translation-key="home">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.php#about" data-translation-key="aboutUs">About</a>
                    </li>
                    <li><a class="nav-link scrollto" href="index.php#services"
                            data-translation-key="services">Services</a></li>
                    <li><a href="market.php" data-translation-key="mar">Derivatives</a></li>
                    <li class="dropdown">
                        <a href="#"><span data-translation-key="Language">Language</span><i
                                class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a href="#" onclick="changeLanguage('en')">English</a></li>
                            <li><a href="#" onclick="changeLanguage('zh')">中文</a></li>
                        </ul>
                    </li>
                    <li><a class="" href="wallet.php" data-translation-key="wallet">Wallet</a></li>
                    <li><a class="nav-link" href="logout.php" data-translation-key="loge"> Log Out</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html" data-translation-key="home">Home</a></li>
                    <li data-translation-key="sec"></li>
                </ol>
                <h2 data-translation-key="sec"></h2>

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
                            <img src="assets/img/sec.jpg" class="img-fluid p-4" alt="">
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
                        <img src="assets/img/staff.jpg" class="img-fluid" alt="">
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
                <h2 data-translation-key="in73">Verify by</h2>
                <p data-translation-key="in74">Professional institution verification</p>
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
      <footer id="footer" class="footer">

<div class="footer-top">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.html" class="logo d-flex align-items-center">
          <span>Bio MP</span>
        </a>
        <p data-translation-key="in75">Empowering Tomorrow's Crypto Landscape with Sustainable Innovation. Redefining Prosperity, Responsibly.</p>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4 data-translation-key="in76">Useful Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php" data-translation-key="home">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php#about" data-translation-key="aboutUs">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php#services" data-translation-key="services">Services</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="tnc.php" data-translation-key="foo2">Terms of service</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="privacy.php" data-translation-key="foo3">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4 data-translation-key="in77">Our Services</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="market.php" data-translation-key="mar">Derivatives</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="security.php" data-translation-key="sec">Security</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php#pricing" data-translation-key="in78">Package</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#faq" data-translation-key="faq">FAQ</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php#features" data-translation-key="in8">Features</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lang.js"></script>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>