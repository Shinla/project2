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
    <link rel="stylesheet" href="./assets/css/p.css">

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

        <section class="terms-and-conditions">
        <div class="container">
            <h5 data-translation-key="pp1" style="color:#4154f1;">BIO MP PLATFORM & MINING SERVICES PRIVACY POLICY
            </h5>
            <p data-translation-key="pp2"></p>
            <p data-translation-key="pp3"></p>
            <p data-translation-key="pp5"></p>

            <h5 data-translation-key="pp6" style="color:#4154f1;">1. DATA WE COLLECT</h5>

            <p data-translation-key="pp7">
                <br> <span data-translation-key="pp8"></span>
                <br> <span data-translation-key="pp9"></span>
            </p>

            <ol>
                <li>
                    <p data-translation-key="pp10"></p>
                </li>
                <li>
                    <p data-translation-key="pp11"></p>
                </li>
                <li>
                    <p data-translation-key="pp12"></p>
                </li>
                <li>
                    <p data-translation-key="pp13">Contact information, namely your email address and phone number
                    </p>
                </li>
                <li>
                    <p data-translation-key="pp14">Contact information, namely your email address and phone number
                    </p>
                </li>
                <li>
                    <p data-translation-key="pp15"></p>
                </li>
            </ol>

            <br>
            <h5 data-translation-key="pp16" style="color:#4154f1;">2. HOW WE USE YOUR DATA</h5>
            <h4 data-translation-key="pp17" style="color:#4154f1;">2.1. SERVICES</h4>

            <p> <span data-translation-key="pp18"></span>
                <br> <span data-translation-key="pp19"></span>
            </p>

            <ol>
                <li>
                    <span data-translation-key="pp20"></span>
                </li>
                <li>
                    <span data-translation-key="pp21"></span>
                </li>
                <li>
                    <span data-translation-key="pp22"></span>
                </li>
                <li>
                    <span data-translation-key="pp23"></span>
                </li>
            </ol>

            <p>
                <span data-translation-key="pp24"></span>
                <br> <span data-translation-key="pp25"></span>
                <br> <span data-translation-key="pp26"></span>
            </p>
            <br>
            <h5 data-translation-key="pp27" style="color:#4154f1;"></h5>

            <p> <span data-translation-key="pp28"></span>
                <br><br> <span data-translation-key="pp29"></span>
            </p>
            <br>
            <h5 data-translation-key="pp30" style="color:#4154f1;"></h5>

            <p><span data-translation-key="pp31"></span></p>

            <br>
            <h5 data-translation-key="pp32" style="color:#4154f1;"></h5>
            <p> <span data-translation-key="pp33"></span> </p>

            <ol>
                <li>
                    <span data-translation-key="pp34"></span>
                </li>
                <li>
                    <span data-translation-key="pp35"></span>
                </li>
                <li>
                    <span data-translation-key="pp36"></span>
                </li>
                <li>
                    <span data-translation-key="pp37"></span>
                </li>
                <li>
                    <span data-translation-key="pp38"></span>
                </li>
            </ol>

            <p> <span data-translation-key="pp39"></span> </p>
            <ol>
                <li>
                    <span data-translation-key="pp40"></span>
                </li>
                <li>
                    <span data-translation-key="pp41"></span>
                </li>
                <li>
                    <span data-translation-key="pp42"></span>
                </li>
                <li>
                    <span data-translation-key="pp43"></span>
                </li>
                <li>
                    <span data-translation-key="pp44"></span>
                </li>
            </ol>

            <p> <span data-translation-key="pp45"></span> </p>

            <br>
            <h5 data-translation-key="pp46" style="color:#4154f1;"></h5>
            <p> <span data-translation-key="pp47"></span> </p>

            <p> <span data-translation-key="pp48"></span></p>
            <br>

            <p> <span data-translation-key="pp49"></span> </p>

            <p> <span data-translation-key="pp50"></span></p>
            <br>
            <h5>
                <span data-translation-key="pp51" style="color:#4154f1;"></span>
            </h5>
            <p> <span data-translation-key="pp52"></span></p>
            <br>
            <h5>
                <span data-translation-key="pp53" style="color:#4154f1;"></span>
            </h5>
            <p> <span data-translation-key="pp54"></span></p>
            <br>
            <h5>
                <span data-translation-key="pp55" style="color:#4154f1;"></span>
            </h5>
            <p> <span data-translation-key="pp56"></span></p>
            <br>
            <h5>
                <span data-translation-key="pp57" style="color:#4154f1;"></span>
            </h5>
            <p> <span data-translation-key="pp58"></span></p>
            <br>
            <h5>
                <span data-translation-key="pp59" style="color:#4154f1;"></span>
            </h5>
            <p> <span data-translation-key="pp60"></span></p>
            <br>
            <h5>
                <span data-translation-key="pp61" style="color:#4154f1;"></span>
            </h5>
            <p> <span data-translation-key="pp62"></span></p>
            <br>
            <h5>
                <span data-translation-key="pp63" style="color:#4154f1;"></span>
            </h5>
            <p> <span data-translation-key="pp64"></span></p>
            <br>
            <h5>
                <span data-translation-key="pp65" style="color:#4154f1;"></span>
            </h5>
            <p> <span data-translation-key="pp66"></span></p>
            <br><br>
            <p>
                <span data-translation-key="pp67" style="display: inline-block;"></span>
                <a href="#" style="color:black">support@biomp.online</a>
            </p>

            <br>
            <h5>
                <span data-translation-key="pp68" style="color:#4154f1;"></span>
            </h5>
            <p> <span data-translation-key="pp70"></span>
                <br><br><span data-translation-key="pp69"></span>
            </p>

            <br>
            <h5>
                <span data-translation-key="pp71" style="color:#4154f1;"></span>
            </h5>

            <p> <span data-translation-key="pp72"></span>
                <br><br><span data-translation-key="pp73"></span>
                <br><br><span data-translation-key="pp74"></span>
            </p>

            <ol>
                <li>
                    <span data-translation-key="pp75"></span>
                </li>
                <li>
                    <span data-translation-key="pp76"></span>
                </li>
                <li>
                    <span data-translation-key="pp77"></span>
                </li>
                <li>
                    <span data-translation-key="pp78"></span>
                </li>
                <li>
                    <span data-translation-key="pp79"></span>
                </li>
                <li>
                    <span data-translation-key="pp80"></span>
                </li>
                <li>
                    <span data-translation-key="pp81"></span>
                </li>
            </ol>

            <p> <span data-translation-key="pp82"></span></p>

            <br>
            <h5>
                <span data-translation-key="pp83" style="color:#4154f1;"></span>
            </h5>

            <p> <span data-translation-key="pp84"></span></p>

            <br>
            <h5>
                <span data-translation-key="pp85" style="color:#4154f1;"></span>
            </h5>

            <p> <span data-translation-key="pp86"></span></p>
            <p> <span data-translation-key="pp87"></span></p>

            <br>
            <h5>
                <span data-translation-key="pp88" style="color:#4154f1;"></span>
            </h5>

            <p> <span data-translation-key="pp89"></span></p>
            <p>
                <span data-translation-key="pp90" style="display: inline-block;"></span>
                <a
                    href="https://www.ip-rs.si/o-pooblascencu/osebna-izkaznica">https://www.ip-rs.si/o-pooblascencu/osebna-izkaznica</a>.
            </p>

            <br>
            <h5>
                <span data-translation-key="pp91" style="color:#4154f1;"></span>
            </h5>

            <p> <span data-translation-key="pp92"></span></p>
            <br>

            <p style="color:#4154f1;" data-translation-key="pp93"><strong>Last updated: February 05, 2024</strong>
            </p>

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

                    <a href="mailto:support@biomp.online" class="footer-contact-link"><span
                            data-translation-key="mail"></span> </a>

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

    <script src="./assets/js/lang.js"></script>
    <script src="./assets/js/script.js" defer></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>