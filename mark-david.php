<?php
require_once "libs/Mobile_Detect.php";
$detect = new Mobile_Detect;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=600, initial-scale=1">-->
    <?php
    // Exclude tablets.
    if( $detect->isMobile() && !$detect->isTablet() ) {
        ?>
        <meta name="viewport" content="width=600, initial-scale=0.5, maximum-scale=1, user-scalable=no">
        <?php
    }else{
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <?php
    }
    ?>

    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons/site.webmanifest">
    <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Emotiq</title>
    <link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="libs/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="wrapper">
    <div class="page-bg-elements">
        <div class="header-circle"></div>
    </div>
    <div class="wrapper-inner">
        <header class="page-header" id="home">

            <div class="page-header-inner">
                <div class="page-header-main">
                    <div class="container">
                        <div class="page-header-main-left-mobile">
                            <button class="menu-open-btn"></button>
                        </div>
                        <a href="#" class="page-header-logo"><img src="images/logo.png" alt="logo"></a>
                        <div class="page-header-main-right">
                            <ul class="header-social page-header-main-right-list">
                                <!--<li class="page-header-main-right-item lIn">-->
                                <!--<a href="http://www.linkedin.com/in/wenqiang555803156">-->
                                <!--<span>linkedIn</span>-->
                                <!--</a>-->
                                <!--</li>-->
                                <li class="page-header-main-right-item tg">
                                    <a href="http://telegram.me/emotiq_users">
                                        <span>telegram</span>
                                    </a>
                                </li>
                                <li class="page-header-main-right-item tg tg-ru">
                                    <a href="http://telegram.me/emotiq_users_ru">
                                        <span>telegram (ru)</span>
                                    </a>
                                </li>
                                <li class="page-header-main-right-item md">
                                    <a href="https://medium.com/emotiq">
                                        <span>medium</span>
                                    </a>
                                </li>
                                <li class="page-header-main-right-item rd">
                                    <a href="https://www.reddit.com/r/emotiq/">
                                        <span>reddit</span>
                                    </a>
                                </li>

                                <!--<li class="page-header-main-right-item inst">-->
                                <!--<a href="#"></a>-->
                                <!--</li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="page-header-nav">
                    <div class="container">
                        <ul class="page-header-nav-list">
                            <li class="page-header-nav-item">
                                <a href="#home">HOME</a>
                            </li>
                            <li class="page-header-nav-item">
                                <a href="/#platform">PLATFORM</a>
                            </li>
                            <li class="page-header-nav-item">
                                <a href="/#tge">TGE</a>
                            </li>
                            <li class="page-header-nav-item">
                                <a href="/#team">TEAM</a>
                            </li>
                            <li class="page-header-nav-item">
                                <a href="/#whitepaper">WHITEPAPER</a>
                            </li>
                            <li class="page-header-nav-item">
                                <a href="/#roadmap">ROADMAP</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mobile-open-social">
                        <ul class="header-social">
                            <!--<li class="lIn">-->
                            <!--<a href="http://www.linkedin.com/in/wenqiang555803156">-->
                            <!--<span>linkedIn</span>-->
                            <!--</a>-->
                            <!--</li>-->
                            <li class="tg">
                                <a href="http://telegram.me/emotiq_users">
                                    <span>telegram</span>
                                </a>
                            </li>
                            <li class="tg tg-ru">
                                <a href="http://telegram.me/emotiq_users_ru">
                                    <span>telegram (ru)</span>
                                </a>
                            </li>
                            <li class="md">
                                <a href="https://medium.com/emotiq">
                                    <span>medium</span>
                                </a>
                            </li>
                            <li class="rd">
                                <a href="https://www.reddit.com/r/emotiq/">
                                    <span>reddit</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <button class="close-btn menu-close-btn"></button>
            </div>

        </header>
        <main>
            <section class="team-section associate-section content-section">
                <div class="container">
                    <div class="assoc-page-block">
                        <h1 class="page-title">Team</h1>
                        <a href="index.php#mark-david" class="back-link"></a>
                    </div>
                    <div class="associate">
                        <div class="more-info">
                            <div class="associate-top-part">
                                <div class="short-info">
                                    <h6>Mark David</h6>
                                    <p class="position">Senior Software<br/>Architect</p>
                                    <div class="social-info">
                                        <ul>
                                            <li class="lIn">
                                                <a href="https://www.linkedin.com/in/mark-david-75431"></a>
                                            </li>
                                            <!--<li class="inst">-->
                                            <!--<a href="#"></a>-->
                                            <!--</li>-->
                                        </ul>
                                    </div>
                                </div>
                                <div class="photo-wrap">
                                    <img src="images/associates/6.png" alt="">
                                </div>
                            </div>

                            <div class="long-info">
                                <p>Mark brings over twenty-five years of professional Lisp programming experience to Emotiq.</p>
                                <p>He is a seasoned results-oriented software developer, architect, and technology leader with decades of hands-on entrepreneurial, technical, and management expertise in advanced software and product development.</p>
                                <p>Mark was a cofounder of Gensym and a co-architect of its main product, G2, one of the most commercially successful AI/Expert Systems products of all time.</p>
                                <p>In recent years, he has worked as a software developer and architect on many innovative projects, including an airline reservations system, a portable Internet satellite terminal, and a natural language understanding system.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="page-footer">
            <div class="container">
                <div class="text">
                        <span class="copyright">All trademarks, logos and brands are property of their respective owners.<br/>
                        All company, product and service names used in this website are for identification purposes only.<br/>
                            </span>
                    <span class="no-mobile">Responsible Disclosure Policy for Security Researchers</span>
                </div>
                <a href="#" class="foot-logo"><img src="images/icons/logo-small.png" alt="logo"></a>
            </div>
        </footer>
        <div class="overlay"></div>
    </div>
</div>
<script src="libs/jquery/jquery-3.2.1.min.js"></script>
<!--<script src="libs/owl-carousel/owl.support.js"></script>-->
<!--<script src="libs/owl-carousel/owl.carousel.min.js"></script>-->
<script src="libs/bxslider/jquery.bxslider.min.js"></script>
<script src="libs/jquery-validation/jquery.validate.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(document).scroll(function() {
            var y = $(document).scrollTop();
            if (y > 1300) {
                var num = 1;
                $('.associate').eq(0).removeClass('invisible').addClass('animated fadeInLeft');
                setInterval(function(){
                    if (num>=10) return;
                    $('.associate').eq(num++).removeClass('invisible').addClass('animated fadeInLeft');
                },150);
            }

        });
    });
</script>
</body>
</html>
