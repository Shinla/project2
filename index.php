<?php  

include("./config/functions.php");
check_login();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bio MP | Home</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="32" height="32" alt="Cryptex logo">
        Bio MP
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">
            <li class="navbar-item">
              <a href="index.php" data-translation-key="home" class="navbar-link active"
                  data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
              <a href="#about" data-translation-key="aboutUs" class="navbar-link" data-nav-link>About</a>
          </li>

          <li class="navbar-item">
              <a href="#secure" data-translation-key="sec" class="navbar-link" data-nav-link>Safety</a>
          </li>

          <li class="navbar-item">
              <a href="#market" data-translation-key="mar" class="navbar-link" data-nav-link>Markets</a>
          </li>

          <li class="navbar-item">
              <a href="logout.php" data-translation-key="loge" class="navbar-link" data-nav-link>Log Out</a>
          </li>

          <li class="language-switch navbar-item">
              <li class="dropdown">
                  <button class="dropbtn"><strong data-translation-key="Language">Language</strong></button>
                  <ul class="dropdown-content">
                      <a href="#" onclick="changeLanguage('en')">English</a>
                      <a href="#" onclick="changeLanguage('zh')">中文</a>
                  </ul>
              </li>
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <a href="wallet.php" class="btn btn-outline" data-translation-key="wallet">Wallet</a>

    </div>
  </header>

  <section class="section announcement" aria-label="announcement" data-section>
    <div class="container">
  
      <div class="announcement-content">
        <p class="announcement-text" data-translation-key="ann">
        
        </p>
      </div>
  
    </div>
  </section>



  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="hero" data-section>
        <div class="container">

          <figure class="hero-banner">
         
          </figure>

          <div class="hero-content">

            <h1 class="h1 hero-title" data-translation-key="ab4"></h1>

            <p class="hero-text" data-translation-key="ab3" style="color: white;"></p>

            <a href="wallet.php" class="btn btn-primary" data-translation-key="sa">Get started now</a>

          </div>

       

        </div>
      </section>
  <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about" data-section id="about">
        <div class="container">

          <figure class="about-banner">
            <video width="648" height="336" controls loop>
              <source src="./assets/images/video.mp4" type="video/mp4">
            </video>
          </figure>

          <div class="about-content">

            <h2 class="h2 section-title"  data-translation-key="ab5">What Is Cryptex</h2>

            <p class="section-text"  data-translation-key="ab6"></p>

            <ul class="section-list">

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 list-title" data-translation-key="ab15">View real-time cryptocurrency prices</h3>
                </div>

                <p class="item-text" data-translation-key="ab16">
     
                </p>
              </li>

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 list-title" data-translation-key="ab13">View real-time cryptocurrency prices</h3>
                </div>

                <p class="item-text" data-translation-key="ab14">
     
                </p>
              </li>

              

            </ul>

            <a href="wallet.php" class="btn btn-primary" data-translation-key="sa">Get started now</a>

          </div>

        </div>
      </section>




      <!-- 
        - #TREND
      -->

      <section class="section trend" aria-label="crypto trend" data-section>
        <div class="container">

          <div class="trend-tab">

            <ul class="tab-nav">

              <li>
                <button class="tab-btn active" data-translation-key="ma1">Crypto</button>
              </li>
            </ul>

            <ul class="tab-content">

              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-1.svg" width="24" height="24" alt="bitcoin logo">

                    <a href="#" class="card-title">
                      Bitcoin <span class="span">BTC/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="46168.95">USD 68,244.52</data>

                  <div class="card-analytics">
                    <data class="current-price" value="36641.20">$ 1.34 trillion</data>

                    <div class="badge green">+1.20%</div>
                  </div>

                </div>
              </li>

              <li>
                <div class="trend-card active">

                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-2.svg" width="24" height="24" alt="ethereum logo">

                    <a href="#" class="card-title">
                      Ethereum <span class="span">ETH/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="3480.04">USD 3915.32</data>

                  <div class="card-analytics">
                    <data class="current-price" value="36641.20">$202.01 billion</data>

                    <div class="badge red">-0.53%</div>
                  </div>

                </div>
              </li>

              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-3.svg" width="24" height="24" alt="tether logo">

                    <a href="#" class="card-title">
                      Tether <span class="span">USDT/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="1.00">USD 1.00</data>

                  <div class="card-analytics">
                    <data class="current-price" value="36641.20">$ 178.15 billion</data>

                    <div class="badge green">+0.07%</div>
                  </div>

                </div>
              </li>

              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-4.svg" width="24" height="24" alt="bnb logo">

                    <a href="#" class="card-title">
                      BNB <span class="span">BNB/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="443.56">USD 487.83</data>

                  <div class="card-analytics">
                    <data class="current-price" value="36641.20">$ 72.52 billion</data>

                    <div class="badge green">+3.51%</div>
                  </div>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #MARKET
      -->

      <section class="section market" aria-label="market update" data-section id="market">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title" data-translation-key="ma2"></h2>
          </div>

          <div class="market-tab">
            <table class="market-table">

              <thead class="table-head">

                <tr class="table-row table-title">

                  <th class="table-heading"></th>

                  <th class="table-heading" scope="col">#</th>

                  <th class="table-heading" scope="col">Name</th>

                  <th class="table-heading" scope="col">Last Price</th>

                  <th class="table-heading" scope="col">24h %</th>

                  <th class="table-heading" scope="col">Market Cap</th>

                  <th class="table-heading" scope="col">Last 7 Days</th>

                  <th class="table-heading"></th>

                </tr>

              </thead>

              <tbody class="table-body">

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">1</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Bitcoin <span class="span">BTC</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$68,244.52</td>

                  <td class="table-data last-update green">+1.20%</td>

                  <td class="table-data market-cap">$ 1.34 trillion</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline"><a href="btc.php">Mine</a></button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">2</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-2.svg" width="20" height="20" alt="Ethereum logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Ethereum <span class="span">ETH</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$3915.32</td>

                  <td class="table-data last-update red">-0.53%</td>

                  <td class="table-data market-cap">$202.01 billion</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline"><a href="eth.php">Mine</a></button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">3</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-3.svg" width="20" height="20" alt="Tether logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Tether <span class="span">USDT/USD</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$1.00</td>

                  <td class="table-data last-update green">+0.07%</td>

                  <td class="table-data market-cap">$ 178.15 billion</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline"><a href="tether.php">Mine</a></button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">4</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-4.svg" width="20" height="20" alt="BNB logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$487.83</td>

                  <td class="table-data last-update green">+3.51%</td>

                  <td class="table-data market-cap">$72.52 billion</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="loss chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline"><a href="bnb.php">Mine</a></button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">5</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-5.svg" width="20" height="20" alt="Solana logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Solana <span class="span">SOL</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$146.86</td>

                  <td class="table-data last-update red">-0.55%</td>

                  <td class="table-data market-cap">$ 65.07 billion</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline"><a href="sol.php">Mine</a></button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">6</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-6.svg" width="20" height="20" alt="XRP logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">XRP <span class="span">XRP</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$0.62</td>

                  <td class="table-data last-update red">-0.31%</td>

                  <td class="table-data market-cap">$34.08 billion</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline"><a href="xrp.php">Mine</a></button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">7</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-7.svg" width="20" height="20" alt="Cardano logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Cardano <span class="span">ADA</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$0.73</td>

                  <td class="table-data last-update red">-0.71%</td>

                  <td class="table-data market-cap">$26.79 billion</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline"><a href="ada.php">Mine</a></button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">8</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-8.svg" width="20" height="20" alt="Avalanche logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Avalanche <span class="span">AVAX</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$43.15</td>

                  <td class="table-data last-update green">+1.41%</td>

                  <td class="table-data market-cap">$16.27 billion</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline"><a href="avax.php">Mine</a></button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">9</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-9.svg" width="20" height="20" alt="Avalanche logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Dogecoin <span class="span">DOGE</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$0.17</td>

                  <td class="table-data last-update red">-1.48%</td>

                  <td class="table-data market-cap">$23.45 billion</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline"><a href="doge.php">Mine</a></button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">10</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/chain.png" width="20" height="20" alt="Avalanche logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Chainlink <span class="span">Link</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$20.01</td>

                  <td class="table-data last-update red">-0.12%</td>

                  <td class="table-data market-cap">$11.75 billion</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline"><a href="link.php">Mine</a></button>
                  </td>

                </tr>

              </tbody>

            </table>

          </div>

        </div>
      </section>





      <section class="section instruction" aria-label="instruction" data-section id="package">
        <div class="container">
      
          <h2 class="h2 section-title" data-translation-key="in32"></h2>
      
          <p class="section-text" data-translation-key="wq">
            Choose a deposit package, add funds to your wallet, start mining, and earn money.
          </p>
      
          <ul class="instruction-list">
      
            <li>
              <div class="instruction-card">
      
                <figure class="card-banner">
                  <img src="./assets/images/300.png" width="96" height="96" loading="lazy" alt="Deposit $300"
                    class="img">
                </figure>
      
                <p class="card-subtitle" data-translation-key="in32"></p>
      
                <h3 class="h3 card-title"><span data-translation-key="300"></span></h3>
      
                <p class="card-text" style="color:white;">
                  <span data-translation-key="in34"></span>0.7%
                  <br>
                  <span data-translation-key="in35"></span>1
                </p>
      
              </div>
            </li>
      
            <li>
              <div class="instruction-card">
      
                <figure class="card-banner">
                  <img src="./assets/images/1000.png" width="96" height="96" loading="lazy" alt="Deposit $1000"
                    class="img">
                </figure>
      
                <p class="card-subtitle" data-translation-key="in32"></p>
      
                <h3 class="h3 card-title"><span data-translation-key="1000"></span></h3>
      
                <p class="card-text" style="color:white;">
                  <span data-translation-key="in34"></span>1.12%
                  <br>
                  <span data-translation-key="in35"></span>1
                </p>
      
              </div>
            </li>
      
            <li>
              <div class="instruction-card">
      
                <figure class="card-banner">
                  <img src="./assets/images/1500.png" width="96" height="96" loading="lazy" alt="Deposit $1500"
                    class="img">
                </figure>
      
                <p class="card-subtitle" data-translation-key="in32"></p>
      
                <h3 class="h3 card-title"><span data-translation-key="1500"></span></h3>
      
                <p class="card-text" style="color:white;">
                  <span data-translation-key="in34"></span>1.57%
                  <br>
                  <span data-translation-key="in35"></span>1
                </p>
      
              </div>
            </li>
      
            <li>
              <div class="instruction-card">
      
                <figure class="card-banner">
                  <img src="./assets/images/5000.png" width="96" height="96" loading="lazy" alt="Deposit $5000"
                    class="img">
                </figure>
      
                <p class="card-subtitle" data-translation-key="in32"></p>
      
                <h3 class="h3 card-title"><span data-translation-key="5000"></span></h3>
      
                <p class="card-text" style="color:white;">
                  <span data-translation-key="in34"></span>3%
                  <br>
                  <span data-translation-key="in35"></span>1
                </p>
      
              </div>
            </li>
      
          </ul>
      
        </div>
      </section>
      


      <section class="section sec" aria-label="sec" data-section id="secure">
        <div class="container">

          <figure class="sec-banner">
          
          </figure>

          <div class="about-content">

            <h2 class="h2 section-title"><span data-translation-key="secu1"></h2>

            <p class="section-text" data-translation-key="secu3">
            </p>

            <ul class="section-list">

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 list-title" data-translation-key="secu8"></h3>
                </div>

                <p class="item-text" data-translation-key="secu9" style="color:white;">
                </p>
              </li>

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 list-title" data-translation-key="secu10">View real-time cryptocurrency prices</h3>
                </div>

                <p class="item-text" data-translation-key="secu11" style="color:white;">
                </p>
              </li>

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 list-title" data-translation-key="secu12">View real-time cryptocurrency prices</h3>
                </div>

                <p class="item-text" data-translation-key="secu13" style="color:white;">
                </p>
              </li>

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 list-title" data-translation-key="secu29">View real-time cryptocurrency prices</h3>
                </div>

                <p class="item-text" data-translation-key="secu19"  style="color:white;">
                </p>
              </li>
            </ul>

            

          </div>

        </div>
      </section>

      




    

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top" data-section>
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="50" height="50" alt="Cryptex logo">
            Bio MP
          </a>

          <h2 class="footer-title" data-translation-key="ab26"> </h2>

          <a href="https://t.me/biomining" class="footer-contact-link">Telegram</a>

          <a href="mailto:support@biomp.online" class="footer-contact-link"><span data-translation-key="mail"></span> </a>

          </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title" data-translation-key="in77"></p>
          </li>

          <li>
            <a href="index.php" class="footer-link" data-translation-key="home"></a>
          </li>

          <li>
            <a href="#about" class="footer-link" data-translation-key="aboutUs"></a>
          </li>

          <li>
            <a href="#secure" class="footer-link" data-translation-key="sec"></a>
          </li>

          <li>
            <a href="#market" class="footer-link" data-translation-key="mar"></a>
          </li>

          <li>
            <a href="#package" class="footer-link" data-translation-key="in78"></a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title" data-translation-key="in76"></p>
          </li>

          <li>
            <a href="#" class="footer-link" data-translation-key="foo2"></a>
          </li>

          <li>
            <a href="#" class="footer-link" data-translation-key="foo3"></a>
          </li>

          <li>
            <a href="#" class="footer-link" data-translation-key="wallet"></a>
          </li>

        </ul>

        <ul class="footer-list">
          
          <li>
            <p class="footer-list-title" data-translation-key="foo5"></p>
          </li>
          
          <!-- Europe - West Server -->
          <li class="server-status">
              <div class="green-dot"></div>
              <div class="server-info">Europe - West</div>
          </li>

          <!-- USA - West Server -->
          <li class="server-status pt-2">
              <div class="green-dot"></div>
              <div class="server-info">USA - West</div>
          </li>

          <!-- Asia - East Server -->
          <li class="server-status pt-2">
              <div class="green-dot"></div>
              <div class="server-info">Asia - East</div>
          </li>

          <!-- Africa - North Server -->
          <li class="server-status pt-2">
              <div class="green-dot"></div>
              <div class="server-info">Africa - North</div>
          </li>
        </ul> 



        

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 All Rights Reserved by Bio Mining Pool</a>
        </p>

       

      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>
  <script src="./assets/js/lang.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>