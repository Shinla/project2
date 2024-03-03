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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
            <li><a class="nav-link scrollto" href="index.php#about" data-translation-key="aboutUs">About</a></li>
            <li><a class="nav-link scrollto" href="index.php#services" data-translation-key="services">Services</a></li>
            <li><a href="market.php" data-translation-key="mar">Derivatives</a></li>
            <li class="dropdown">
              <a href="#"><span data-translation-key="Language">Language</span><i class="bi bi-chevron-down"></i></a>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up" data-translation-key="in1">Mining In The Bio MP</h1>
            <h2 data-aos="fade-up" data-aos-delay="400" data-translation-key="in2">Experience the easiest, safest, and fastest crypto mining</h2>
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a href="deposit.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span data-translation-key="in3">Get Started</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/fu.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>

    </section><!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">

        <div class="container" data-aos="fade-up">
          <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h1 data-translation-key="ab5">Who We Are</h1>
                <h2 data-translation-key="ab6"></h2>
                <p data-translation-key="ab7"></p>
                <div class="text-center text-lg-start">
                  <a href="deposit.php" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span data-translation-key="in3">Get Started</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>

          </div>
        </div>

      </section><!-- End About Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts" style="background-color: white;">
        <div class="container" data-aos="fade-up">

          <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class='bx bx-certification'></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
                      <p data-translation-key="in4">Years Of Experience</p>
                  </div>
              </div>
          </div>
          

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="701" data-purecounter-duration="1" class="purecounter"></span>
                  <p data-translation-key="in5">Daily People Mining</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-headset" style="color: #15be56;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                  <p data-translation-key="in6">Hours Of Support</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-people" style="color: #bb0852;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="19401" data-purecounter-duration="1" class="purecounter"></span>
                  <p data-translation-key="in7">Clients</p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Counts Section -->

      <!-- ======= Features Section ======= -->
      <section id="features" class="features">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <p data-translation-key="in9">What features do we focus on?</p>
          </header>

          <div class="row">

            <div class="col-lg-6">
              <img src="assets/img/cta-mobile.svg" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
              <div class="row align-self-center gy-4">

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3 data-translation-key="in10">Technology and Innovation</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3 data-translation-key="in11">Safety Standards</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3 data-translation-key="in12">Security Measures</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3 data-translation-key="in13">Wallet Security</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3 data-translation-key="in14">Community Involvement</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3 data-translation-key="in15">Continuous Monitoring</h3>
                  </div>
                </div>

              </div>
            </div>

          </div> <!-- / row -->

      
        </div>

      </section><!-- End Features Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services" style="background-color: white;">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <p data-translation-key="services"></p>
          </header>

          <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box blue">
                <i class="ri-discuss-line icon"></i>
                <h3 data-translation-key="in18">Community Building and Support</h3>
                <p data-translation-key="in19" >Foster a supportive community, offering forums, customer support, and collaborative initiatives.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-box orange">
                <i class='bx bx-bar-chart-alt-2 icon'></i>
                <h3 data-translation-key="in20">Real-Time Mining Analytics</h3>
                <p data-translation-key="in21">Provide detailed analytics and reporting for clients to monitor mining performance.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-box green">
                <i class='bx bxs-hourglass-bottom icon' ></i>
                <h3 data-translation-key="in22">Automated Mining Software</h3>
                <p data-translation-key="in23">Develop and offer user-friendly software for automated mining operations.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-box red">
                <i class='bx bx-cloud icon'></i>
                <h3 data-translation-key="in24">Cloud Mining Solutions</h3>
                <p data-translation-key="in25">Offer cloud-based mining services for users without the need for physical hardware.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
              <div class="service-box purple">
                <i class='bx bxs-server icon'></i>
                <h3 data-translation-key="in26">Cross-Chain Mining Integration</h3>
                <p data-translation-key="in27">Explore opportunities for mining across multiple blockchain networks.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
              <div class="service-box pink">
                <i class="bx bx-cart icon"></i>
                <h3 data-translation-key="in29">Subscription-Based Mining Services</h3>
                <p data-translation-key="in30">Introduce subscription models for mining services, offering flexibility to clients.</p>
              </div>
            </div>

          </div>

        </div>

      </section><!-- End Services Section -->

      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <p data-translation-key="in32">Check out our Packages</p>
          </header>

          <div class="row gy-4" data-aos="fade-left">

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="box">
                <h3 style="color: #07d5c0;" data-translation-key="in33">Bronze</h3>
                <div class="price"><sup>$</sup>300<span> USD</span></div>
                <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                <ul>
                  <li><strong style="color: #07d5c0;"><span data-translation-key="in34"></span>: 0.7%</strong></li>
                  <li><strong style="color: #07d5c0;"><span data-translation-key="in35"></span>: 8</strong></li>
                </ul>
                <a href="deposit.php" class="btn-buy" data-translation-key="in41">Buy Now</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="box">
                <h3 style="color: #65c600;" data-translation-key="in31">Silver</h3>
                <div class="price"><sup>$</sup>1000<span> USD</span></div>
                <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
                <ul>
                  <li ><strong style="color: #65c600;"><span data-translation-key="in34"></span>: 1.12%</strong></li>
                  <li style="color: #65c600;"><strong><span data-translation-key="in35"></span>: 6</strong></li>
                </ul>
                <a href="deposit.php"class="btn-buy" data-translation-key="in41">Buy Now</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="box">
                <h3 style="color: #ff901c;" data-translation-key="in37">Gold</h3>
                <div class="price"><sup>$</sup>1500<span> USD</span></div>
                <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
                <ul>
                  <li><strong style="color: #ff901c;"><span data-translation-key="in34"></span>: 1.57%</strong></li>
                  <li><strong style="color: #ff901c;"><span data-translation-key="in35"></span>: 2</strong></li>
                </ul>
                <a href="deposit.php" class="btn-buy" data-translation-key="in41">Buy Now</a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
              <div class="box">
                <h3 style="color: #ff0071;" data-translation-key="in38">Platinum </h3>
                <div class="price"><sup>$</sup>5000<span> USD</span></div>
                <img src="assets/img/pricing-ultimate.png" class="img-fluid" alt="">
                <ul>
                  <li><strong style="color: #ff0071;"><span data-translation-key="in34"></span>: 3%</strong></li>
                  <li><strong style="color: #ff0071;"><span data-translation-key="in35"></span>: 1</strong></li>
                </ul>
                <a href="deposit.php" class="btn-buy" data-translation-key="in41" >Buy Now</a>
              </div>
            </div>

          </div>

        </div>

      </section><!-- End Pricing Section -->

      <!-- ======= F.A.Q Section ======= -->
      <section id="faq" class="faq"  style="background-color: white;">

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

      <section id="testimonials" class="testimonials" >

        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h1 data-translation-key="in53"></h1>
            <p data-translation-key="in54"></p>
          </header>
  
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/me.webp" class="img-fluid" alt="">
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
                      <img src="assets/img/ro.png" class="img-fluid" alt="">
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
                      <img src="assets/img/mu.png" class="img-fluid" alt="">
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
                      <img src="assets/img/allen.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                      <h4 data-translation-key="in61">Allen Iverson</h4>
                      <p data-translation-key="in62">Bio MP delivers excellence! Efficient, determined, and a true game-changer. Highly recommend!</p>
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/jo.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                      <h4 data-translation-key="in63">Michael Jordan</h4>
                      <p data-translation-key="in64">Michael Jordan here. Big shoutout to Bio MP – they're top-notch in mining. Trust the best, go with Bio MP!</p>
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/curry.png" class="img-fluid" alt="">
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
                      <img src="assets/img/sha.png" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                      <h4 data-translation-key="in67">Shaquille O'Neal Shaq</h4>
                      <p data-translation-key="in68"></p>
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/cn1.png" class="img-fluid" alt="">
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
                      <img src="assets/img/cn2.png" class="img-fluid" alt="">
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

      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients" style="background-color: white;">


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
                <li><i class="bi bi-chevron-right"></i> <a href="index.php#faq" data-translation-key="faq">FAQ</a></li>
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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