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
                        </div>
                    </div>
                    <nav class="page-header-nav">
                        <div class="container">
                            <ul class="page-header-nav-list">
                                <li class="page-header-nav-item">
                                    <a href="#home">HOME</a>
                                </li>
                                <li class="page-header-nav-item">
                                    <a href="#platform">PLATFORM</a>
                                </li>
                                <li class="page-header-nav-item">
                                    <a href="#tge">TGE</a>
                                </li>
                                <li class="page-header-nav-item">
                                    <a href="#team">TEAM</a>
                                </li>
                                <li class="page-header-nav-item">
                                    <a href="#whitepaper">WHITEPAPER</a>
                                </li>
                                <li class="page-header-nav-item">
                                    <a href="#roadmap">ROADMAP</a>
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
                                    <a href="http://telegram.me/emotiq">
                                        <span>telegram</span>
                                    </a>
                                </li>
                                <li class="tg tg-ru">
                                    <a href="http://telegram.me/emotiq_ru">
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
                <section class="multi-asset-section content-section" id="multi-asset">
                    <div class="container section-top-block">
                        <h2 class="section-title">NEXT GENERATION BLOCKCHAIN</h2>
                        <div class="preferences-list">
                            <ul>
                                <li>SCALABLE</li>
                                <li>PRIVATE</li>
                                <li>NATURAL</li>
                            </ul>
                        </div>
                    </div>
                    <div class="svg-image-wrap ">
                        <div class="multi-asset-svg">

                        </div>
                    </div>
                    <div class="container">
                        <div class="article-wrap">
                            <article>
                                
                                <p>Emotiq is a next-generation blockchain with powerful scalability and privacy, combining the latest research in distributed ledger technology with an innovative natural-language approach to smart contracts.</p>
                            </article>
                            <article>
                                <p>We provide on-chain scalability by building upon the latest research in distributed ledger technology.</p>
                            </article>
                        </div>
                    </div>
                </section>
                <section class="platform-section content-section" id="platform">
                    <div class="plattform-bg bg-elements">
                        <div class="line"></div>
                    </div>
                    <div class="platform-slider-controls">
                        <a href="#" id="platform-slider-left" class="arrow-left"></a>
                        <a href="#" id="platform-slider-right" class="arrow-right"></a>
                    </div>
                    <div class="slider-wrap">
                        <div class="container section-top-block">
                            <h2 class="section-title">Platform</h2>
                            <div class="section-switcher platform-slider-nav">
                                <ul>
                                    <li class="platform-slider-nav-item"><a data-slide-index="0" href="javascript:void(0)">Smart Contracts</a></li>
                                    <li class="platform-slider-nav-item"><a data-slide-index="1" href="javascript:void(0)">Ring VM</a></li>
                                    <li class="platform-slider-nav-item"><a data-slide-index="2" href="javascript:void(0)">Oracles</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="container">
                            <div class="platform-slider">
                                <div class="platform-slider-item">
                                    <div class="svg-image-wrap">
                                        <img src="images/temp/slide-mobile.png" alt="">
                                    </div>
                                    <div class="article-wrap">
                                        <article>
                                            <p>
                                                Emotiq reimagines the role of <strong>smart contracts</strong>. Smart contracts are computer programs that detail the conditions under which a transaction or transfer of tokens will occur, and executes them accordingly. <strong>They are the user interface of the blockchain</strong>. These computers programs are only readable by computers, however, not humans. On Ethereum, for example, a developer with expertise in Solidity is required to write a smart contract, and even an exceptionally skilled developer may make fatal security mistakes doing so.
                                            </p>
                                            <p>
                                                This paradigm limits the usefulness of smart contracts and imposes a ceiling on their accessibility. Through Ring, the Emotiq smart contract language, <strong>we offer a ground-breaking solution for non-programmers</strong> and those obliged to program by necessity. We add a ‘natural language’ layer to make smart contracts readable and usable by humans. Ring, in other words, is <strong>smart contracts in plain English</strong>.
                                            </p>
                                        </article>
                                    </div>
                                </div>
                                <div class="platform-slider-item">
                                    <div class="svg-image-wrap">
                                        <img src="images/temp/slide2.png" alt="">
                                    </div>
                                    <div class="article-wrap">
                                        <article>
                                            <p>The Ring VM runs <strong>smart contracts</strong> written<br/>
                                                in the native Ring language as well as most, if not all, <strong>Ethereum contracts</strong> machinetranslated <strong>from Solidity</strong>. Those who program by trade may be well-served by Solidity, but want to leverage Emotiq’s <strong>usability, functionality, or scalability</strong>.</p>
                                            <p>The Ring VM is a sandbox that enables<br/>
                                                Emotiq to experiment with smart contract<br/>
                                                implementations and users to <strong>explore and<br/>
                                                    preview smart contracts</strong>, interactively, prior to committing them to the blockchain.</p>
                                        </article>
                                    </div>
                                </div>
                                <div class="platform-slider-item">
                                    <div class="svg-image-wrap">
                                        <img src="images/temp/slide3.png" alt="">
                                    </div>
                                    <div class="article-wrap">
                                        <article>
                                            <p>Oracles allow smart <strong>contracts to interact<br/>
                                                    with the outside world</strong> and are a <strong>vital part of the Emotiq platform</strong> and ecosystem. Oracles<br/>
                                                retrieve real-world data to provide results in answer to queries made by smart contracts.<br/>
                                                Imagine that smart contracts are formed of<br/>
                                                Lego, built within a small box, and oracles<br/>
                                                are miniature ‘terminal’ or ‘portal’ objects.<br/>
                                                For conditions to be met, and transactions<br/>
                                                confirmed, <strong>the smart contract requires a way<br/>
                                                    to know what is transpiring outside of its box</strong>. This is the role of oracles – to enable smart contracts to access real-world data.</p>
                                            <p>A wide and diverse ecosystem of oracles is<br/>
                                                needed to satisfy the increasingly diverse types of data required by smart contracts.<br/>
                                                A smart contract requiring weather information needs a different oracle than one requiring, for example, local traffic information.
                                                Any data requirement may <strong>warrant the creation of an oracle</strong>; as interfaces into the outside world, the <strong>oracle possibilities are practically infinite</strong>. </p>
                                            <p>We further explain oracles and their role within the Emotiq ecosystem in the following<br/>
                                                Ecosystem chapter.</p>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <section id="team" class="team-section content-section">
                    <div class="team-bg bg-elements">
                        <!--                        <div class="team-line"></div>-->
                        <div class="team-line-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1999.67 562.5">
                                <defs>
                                    <style>.cls-1 {
                                            fill: none;
                                            stroke: #ea5b1c;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 4px;
                                        }</style>
                                </defs>
                                <title>Asset 1</title>
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="layer1" data-name="layer1">
                                        <path class="cls-1" d="M1997.67,2,1567.43,252.52c-22.9,13.34-22.85,35.07.12,48.3l135.16,77.84c23,13.23,23,35,.16,48.38l-210.39,123.4c-22.86,13.4-60.3,13.44-83.19.08L992,307c-22.89-13.36-60.38-13.4-83.3-.1L544,518.51c-22.92,13.3-60.41,13.26-83.3-.11L2,250.63"  stroke-dasharray="2718" stroke-dashoffset="0.00">
                                        </path>                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="container section-top-block">
                        <h2 class="section-title">Team</h2>
                        <!--                        <div class="section-switcher">-->
                        <!--                            <ul>-->
                        <!--                                <li class="team-nav-item"><a href="javascript:void(0)">Main team</a></li>-->
                        <!--                                <li class="team-nav-item"><a href="javascript:void(0)">Researchers</a></li>-->
                        <!--                            </ul>-->
                        <!--                        </div>-->
                    </div>
                    <div class="container team-container">
                        <div class="team team1">
                            <div class="associate" id="joel-reymont">
                                <div class="associate-inner">
                                    <div class="photo-wrap-outer">
                                        <a href="joel-reymont.php" class="photo-wrap">
                                            <img src="images/associates/1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="right-part">
                                        <div class="short-info">
                                            <h6>Joel<br/>Reymont</h6>
                                            <p class="position">CEO</p>
                                            <div class="social-info">
                                                <ul>
                                                    <li class="lIn">
                                                        <a href="https://www.linkedin.com/in/joelreymont/"></a>
                                                    </li>
                                                    <!--<li class="inst">-->
                                                    <!--<a href="#"></a>-->
                                                    <!--</li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-info animated">
                                    <div class="short-info">
                                        <h6>Joel<br/>Reymont</h6>
                                        <p class="position">CEO</p>
                                        <div class="social-info">
                                            <ul>
                                                <li class="lIn">
                                                    <a href="https://www.linkedin.com/in/joelreymont/"></a>
                                                </li>
                                                <!--<li class="inst">-->
                                                <!--<a href="#"></a>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="long-info">
                                        <p>Joel is a seasoned hacker and blockchain pioneer.  He started his career on Wall Street and brings twenty-five years of diverse software engineering and management experience to Emotiq.
                                        <p>Joel was previously Chief Technology Officer at a Top 100 cryptocurrency and blockchain company, where he earned a reputation within the community for his fearsome execution power.
                                        <p>Joel has acted as Director of Prime Brokerage Technology at Deutsche Bank, has run offshore development teams, and has built many scalable and fault tolerant systems over the years.
                                            He now smashes technological boundaries and ventures deep into the unexplored frontiers of crypto to bring unique opportunities to Emotiq contributors.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="associate" id="vladimir-lebedev">
                                <div class="associate-inner">
                                    <div class="photo-wrap-outer">
                                        <a href="vladimir-lebedev.php" class="photo-wrap">
                                            <img src="images/associates/2.png" alt="">
                                        </a>
                                    </div>

                                    <div class="right-part">
                                        <div class="short-info">
                                            <h6>Vladimir<br/>Lebedev</h6>
                                            <p class="position">VP of Engineering</p>
                                            <div class="social-info">
                                                <ul>
                                                    <li class="lIn">
                                                        <a href="https://www.linkedin.com/in/vlebedev"></a>
                                                    </li>
                                                    <!--<li class="inst">-->
                                                    <!--<a href="#"></a>-->
                                                    <!--</li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-info animated">
                                    <div class="short-info">
                                        <h6>Vladimir<br/>Lebedev</h6>
                                        <p class="position">VP of Engineering</p>
                                        <div class="social-info">
                                            <ul>
                                                <li class="lIn">
                                                    <a href="https://www.linkedin.com/in/vlebedev"></a>
                                                </li>
                                                <!--<li class="inst">-->
                                                <!--<a href="#"></a>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="long-info">
                                        <p>Vladimir has over twenty-five years of experience in managing technology in fintech, telecom, and media companies. His pioneering credits include creating the first FidoNet node in Soviet Union, the first remote banking application using asymmetric keys cryptography in Russia, and the first ISP in Western Siberia. </p>
                                        <p>Vladimir was CTO of the Russian stock exchange, where he created its trading system and network infrastructure. Vladimir has held executive roles at VEON (a telecom company with over two hundred millions subscribers), Sberbank (the biggest bank in Eastern Europe), Moscow City Telephone Network, Orange Business Services, Lucent Technologies, and Mail.Ru Group (the biggest Internet-media company in Russia).</p>
                                        <p>Over his career, he has led and successfully delivered many cutting-edge projects, in addition to launching his own companies,<br/>CPM and Cybertonica.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="associate" id="david-mcclain">
                                <div class="associate-inner">
                                    <div class="photo-wrap-outer">
                                        <a href="david-mcclain.php" class="photo-wrap">
                                            <img src="images/associates/3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="right-part">
                                        <div class="short-info">
                                            <h6>David<br/>McClain, PhD</h6>
                                            <p class="position">Chief Rocket<br/>Scientist</p>
                                            <div class="social-info">
                                                <ul>
                                                    <li class="lIn">
                                                        <a href="https://www.linkedin.com/in/david-mcclain-685669155/"></a>
                                                    </li>
                                                    <!--<li class="inst">-->
                                                    <!--<a href="#"></a>-->
                                                    <!--</li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-info animated">
                                    <div class="short-info">
                                        <h6>David<br/>McClain, PhD</h6>
                                        <p class="position">Chief Rocket<br/>Scientist</p>
                                        <div class="social-info">
                                            <ul>
                                                <li class="lIn">
                                                    <a href="https://www.linkedin.com/in/david-mcclain-685669155/"></a>
                                                </li>
                                                <!--<li class="inst">-->
                                                <!--<a href="#"></a>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="long-info">
                                        <p>David is literally a rocket scientist.  Trained in theoretical and observational astrophysics, in addition to computer science, he brings an incomparable and extraordinary five decades of unique programming expertise to the table.</p>
                                        <p>David has served as a Principal Scientist in the aerospace industry where he built airborne LIDAR systems for underwater mine detection, and was a Senior Scientist on the Raytheon ExoAtmospheric Kill Vehicle (EKV) program.</p>
                                        <p>He is a true expert in numerous computer languages, including Lisp, and an authority on signal processing, image processing, guidance and navigation, radio-frequency and infrared target detection systems, and target tracking. He has twice addressed the European Common Lisp Meeting.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="associate" id="shannon-spires">
                                <div class="associate-inner">
                                    <div class="photo-wrap-outer">
                                        <a href="shannon-spires.php" class="photo-wrap">
                                            <img src="images/associates/4.png" alt="">
                                        </a>
                                    </div>
                                    <div class="right-part">
                                        <div class="short-info">
                                            <h6>Shannon<br/>Spires</h6>
                                            <p class="position">Agent Hacker</p>
                                            <div class="social-info">
                                                <ul>
                                                    <li class="lIn">
                                                        <a href="https://www.linkedin.com/in/shannon-spires-66b4ba44"></a>
                                                    </li>
                                                    <!--<li class="inst">-->
                                                    <!--<a href="#"></a>-->
                                                    <!--</li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-info">
                                    <div class="short-info">
                                        <h6>Shannon<br/>Spires</h6>
                                        <p class="position">Agent Hacker</p>
                                        <div class="social-info">
                                            <ul>
                                                <li class="lIn">
                                                    <a href="https://www.linkedin.com/in/shannon-spires-66b4ba44"></a>
                                                </li>
                                                <!--<li class="inst">-->
                                                <!--<a href="#"></a>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="long-info">
                                        <p>Shannon is a systems engineer who enjoys working on multidisciplinary projects.  He spent much of his career as a research engineer at a national laboratory in the US, where he worked on a variety of applied research projects.</p>
                                        <p>He was the Chief Developer of several technologies, including robotic teleoperation controls, real time FPGA-based video signal processors, and intelligent electric power conversion devices.  Much of Shannon’s work has been focused on distributed agent-based systems.</p>
                                        <p>His areas of expertise include machine learning, AI, Common Lisp programming, functional languages, cyber security, and data mining.</p>
                                        <p>His research interests include the design of systems with inherent security and robustness, and navigation and categorization in ultra-large graph-based data sets with decentralized semi-autonomous agents</p>
                                    </div>
                                </div>
                            </div>
                            <div class="associate" id="paul-tarvydas">
                                <div class="associate-inner">
                                    <div class="photo-wrap-outer">
                                        <a href="paul-tarvydas.php" class="photo-wrap">
                                            <img src="images/associates/5.png" alt="">
                                        </a>
                                    </div>
                                    <div class="right-part">
                                        <div class="short-info">
                                            <h6>Paul Tarvydas</h6>
                                            <p class="position">Electronics<br/>and Microprocessor<br/>Guru</p>
                                            <div class="social-info">
                                                <ul>
                                                    <li class="lIn">
                                                        <a href="https://www.linkedin.com/in/paultarvydas/"></a>
                                                    </li>
                                                    <!--<li class="inst">-->
                                                    <!--<a href="#"></a>-->
                                                    <!--</li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-info">
                                    <div class="short-info">
                                        <h6>Paul Tarvydas</h6>
                                        <p class="position">Electronics<br/>and Microprocessor<br/>Guru</p>
                                        <div class="social-info">
                                            <ul>
                                                <li class="lIn">
                                                    <a href="https://www.linkedin.com/in/paultarvydas/"></a>
                                                </li>
                                                <!--<li class="inst">-->
                                                <!--<a href="#"></a>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="long-info">
                                        <p>Paul’s career has spanned three decades of working in microprocessor electronics, compiler and operating system design, and running his own highly-successful software consultancy.</p>
                                        <p>He has taken part in projects with companies such as IBM Canada, Mitel Corp, Cognos, and several start-ups, including Design Recovery Inc., Innovative Systems Group, JetLetter, Sable Technologies, and Alacrity Inc.</p>
                                        <p>Paul has written papers for the ACM and IEEE on techniques for optimizing concurrency, and has open-sourced his work on converting diagrams to code using AI techniques.<br/>
                                            Paul’s research interests include software engineering, visual languages, diagrammatic languages, and reactive software.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="associate" id="mark-david">
                                <div class="associate-inner">
                                    <div class="photo-wrap-outer">
                                        <a href="mark-david.php" class="photo-wrap">
                                            <img src="images/associates/6.png" alt="">
                                        </a>
                                    </div>
                                    <div class="right-part">
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
                                    </div>
                                </div>
                                <div class="more-info">
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
                                    <div class="long-info">
                                        <p>Mark brings over twenty-five years of professional Lisp programming experience to Emotiq.</p>
                                        <p>He is a seasoned results-oriented software developer, architect, and technology leader with decades of hands-on entrepreneurial, technical, and management expertise in advanced software and product development.</p>
                                        <p>Mark was a cofounder of Gensym and a co-architect of its main product, G2, one of the most commercially successful AI/Expert Systems products of all time.</p>
                                        <p>In recent years, he has worked as a software developer and architect on many innovative projects, including an airline reservations system, a portable Internet satellite terminal, and a natural language understanding system.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="associate" id="mark-evenson">
                                <div class="associate-inner">
                                    <div class="photo-wrap-outer">
                                        <a href="mark-evenson.php" class="photo-wrap">
                                            <img src="images/associates/7.png" alt="">
                                        </a>
                                    </div>
                                    <div class="right-part">
                                        <div class="short-info">
                                            <h6>Mark Evenson</h6>
                                            <p class="position">Senior Software<br/>Architect</p>
                                            <div class="social-info">
                                                <ul>
                                                    <li class="lIn">
                                                        <a href="https://www.linkedin.com/in/maevenson"></a>
                                                    </li>
                                                    <!--<li class="inst">-->
                                                    <!--<a href="#"></a>-->
                                                    <!--</li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-info">
                                    <div class="short-info">
                                        <h6>Mark Evenson</h6>
                                        <p class="position">Senior Software<br/>Architect</p>
                                        <div class="social-info">
                                            <ul>
                                                <li class="lIn">
                                                    <a href="https://www.linkedin.com/in/maevenson"></a>
                                                </li>
                                                <!--<li class="inst">-->
                                                <!--<a href="#"></a>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="long-info">
                                        <p>Ever since cobbling together a distributed system to process data reduction on unused nighttime nodes of the Cornell astronomy network in the late 1980s, Mark Evenson has been involved in plumbing the depths of what is possible to compute across the Internet.</p>
                                        <p>From modeling multi-party business process execution orchestration in description logic to hot-patching the hosting infrastructure for surging web traffic across the Western hemisphere, his work has repeatedly combined a future sketched by academic wizardry with the needs of the pragmatic now.</p>
                                        <p>He is excited to solve the problems inherent in developing and deploying a decentralized, planetary-scale sharded ledger.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="associate" id="kieran-costello">
                                <div class="associate-inner">
                                    <div class="photo-wrap-outer">
                                        <a href="kieran-costello.php" class="photo-wrap">
                                            <img src="images/associates/8.png" alt="">
                                        </a>
                                    </div>
                                    <div class="right-part">
                                        <div class="short-info">
                                            <h6>Kieran<br/>Costello</h6>
                                            <p class="position">Chief Wordsmith</p>
                                            <div class="social-info">
                                                <ul>
                                                    <li class="lIn">
                                                        <a href="https://www.linkedin.com/in/kieran-costello-998199134"></a>
                                                    </li>
                                                    <!--<li class="inst">-->
                                                    <!--<a href="#"></a>-->
                                                    <!--</li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-info">
                                    <div class="short-info">
                                        <h6>Kieran<br/>Costello</h6>
                                        <p class="position">Chief Wordsmith</p>
                                        <div class="social-info">
                                            <ul>
                                                <li class="lIn">
                                                    <a href="https://www.linkedin.com/in/kieran-costello-998199134"></a>
                                                </li>
                                                <!--<li class="inst">-->
                                                <!--<a href="#"></a>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="long-info">
                                        <p>Kieran has written for the market’s leading tech companies and start-ups, and has been a core contributor to numerous ground-breaking blockchain projects.</p>
                                        <p>As a writer by habit and trade, he specializes in creating stories and brand identities for ‘edge companies’ – those innovating in uncharted spaces and offering new solutions to legacy problems.</p>
                                        <p>This naturally led him to focus on blockchain-based solutions, and specifically to Emotiq.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="associate" id="emma-cooper">
                                <div class="associate-inner">
                                    <div class="photo-wrap-outer">
                                        <a href="emma-cooper.php" class="photo-wrap">
                                            <img src="images/associates/9.png" alt="">
                                        </a>
                                    </div>
                                    <div class="right-part">
                                        <div class="short-info">
                                            <h6>Emma Cooper</h6>
                                            <p class="position">Community Wrangler and<br/>Cat Herder</p>
                                            <div class="social-info">
                                                <ul>
                                                    <li class="lIn">
                                                        <a href="https://www.linkedin.com/in/emma-cooper-007087156/"></a>
                                                    </li>
                                                    <!--<li class="inst">-->
                                                    <!--<a href="#"></a>-->
                                                    <!--</li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-info">
                                    <div class="short-info">
                                        <h6>Emma Cooper</h6>
                                        <p class="position">Community Wrangler<br/>and<br/>Cat Herder</p>
                                        <div class="social-info">
                                            <ul>
                                                <li class="lIn">
                                                    <a href="https://www.linkedin.com/in/emma-cooper-007087156/"></a>
                                                </li>
                                                <!--<li class="inst">-->
                                                <!--<a href="#"></a>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="long-info">
                                        <p>Emma is the Community Manager for Emotiq.  Prior to joining the team, Emma worked for many years in front-line counterterrorism for the US Department of Homeland Security,<br/>
                                            before which she was a lawyer in the US, focusing primarily on private placements and corporate law.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="associate" id="anna-movchaniuk">
                                <div class="associate-inner">
                                    <div class="photo-wrap-outer">
                                        <a href="anna-movchaniuk.php" class="photo-wrap">
                                            <img src="images/associates/10.png" alt="">
                                        </a>
                                    </div>
                                    <div class="right-part">
                                        <div class="short-info">
                                            <h6>Anna<br/>Movchaniuk</h6>
                                            <p class="position">PR Maven</p>
                                            <div class="social-info">
                                                <ul>
                                                    <li class="lIn">
                                                        <a href="https://www.linkedin.com/in/annamovchaniuk/"></a>
                                                    </li>
                                                    <!--<li class="inst">-->
                                                    <!--<a href="#"></a>-->
                                                    <!--</li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-info">
                                    <div class="short-info">
                                        <h6>Anna<br/>Movchaniuk </h6>
                                        <p class="position">PR Maven</p>
                                        <div class="social-info">
                                            <ul>
                                                <li class="lIn">
                                                    <a href="https://www.linkedin.com/in/annamovchaniuk/"></a>
                                                </li>
                                                <!--<li class="inst">-->
                                                <!--<a href="#"></a>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="long-info">
                                        <p>Anna is a proactive, dedicated, and detail-oriented corporate communications practitioner with extensive public relations experience in Europe and Canada.</p>
                                        <p>She has worked on projects in industries as diverse as finance, sporting events, and film.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="associate" id="wen-qiang">
                                <div class="associate-inner">
                                    <div class="photo-wrap-outer">
                                        <a href="wen-qiang.php" class="photo-wrap">
                                            <img src="images/associates/11.png" alt="">
                                        </a>
                                    </div>
                                    <div class="right-part">
                                        <div class="short-info">
                                            <h6>Wen<br/>Qiang</h6>
                                            <p class="position">China Community Manager</p>
                                            <div class="social-info">
                                                <ul>
                                                    <!--                                                    <li class="lIn">-->
                                                    <!--                                                        <a href="https://www.linkedin.com/in/annamovchaniuk/"></a>-->
                                                    <!--                                                    </li>-->
                                                    <!--<li class="inst">-->
                                                    <!--<a href="#"></a>-->
                                                    <!--</li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-info">
                                    <div class="short-info">
                                        <h6>Wen<br/>Qiang </h6>
                                        <p class="position">China Community Manager</p>
                                        <div class="social-info">
                                            <ul>
                                                <!--                                                <li class="lIn">-->
                                                <!--                                                    <a href="https://www.linkedin.com/in/annamovchaniuk/"></a>-->
                                                <!--                                                </li>-->
                                                <!--<li class="inst">-->
                                                <!--<a href="#"></a>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="long-info">
                                        <p>Wen is the China Community Manager for Emotiq. With a deep knowledge of the Chinese cryptocurrency space and thorough understanding of blockchain projects, he provides the Emotiq team with expert regional advice, in addition to offering Chinese language support across all of Emotiq's social media channels.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="tge" class="token-section content-section">
                    <div class="token-bg bg-elements">
                        <div class="token-line"></div>
                    </div>
                    <div class="container section-top-block">
                        <h2 class="section-title">Token<br/>Generation<br/>Event</h2>
                        <div class="token-top-text">
                            <div class="article-wrap">
                                <article>
                                    <p>Emotiq plans to raise $60M (million) in a two-phase token generation event (TGE). The TGE target has been carefully selected to enable us to reach our development milestones and jumpstart the Emotiq ecosystem. In total, Emotiq will generate one billion EMTQ tokens, distributed as follows:</p>
                                </article>
                            </div>

                        </div>
                    </div>
                    <div class="token-main-part container">
                        <div class="svg-image-wrap ">
                            <div class="svg-text">
                                <div class="graph-element el1">
                                    <span>15 %</span>
                                    <p>sold to seed<br/>
                                        contributors<br/>
                                        (completed <br/>Dec 2017)</p>
                                </div>
                                <div class="graph-element el2">
                                    <span>14 %</span>
                                    <p>sold during<br/>
                                        the pre-TGE<br/>
                                        (private)</p>
                                </div>
                                <div class="graph-element el3">
                                    <span>35 %</span>
                                    <p>to be held <br/>by the Emotiq<br/>team</p>
                                </div>
                                <div class="graph-element el4">
                                    <span>36 %</span>
                                    <p>sold during future TGEs,<br/>
                                        including the public TGE</p>
                                </div>
                            </div>
                            <div class="token-svg">

                            </div>
                        </div>
                        <div class="container">
                            <div class="article-wrap">
                                <article>
                                    
                                    <p class="list-el"><strong>15% sold to seed contributors</strong> through educational programs;</p>
                                    <p class="list-el"><strong>14% sold during the pre-TGE</strong>(private sale);</p>
                                    <p class="list-el"><strong>36% sold during future TGEs,</strong> including the   	  public TGE; and</p>
                                    <p class="list-el"><strong>35% to be held by the Emotiq team,</strong> to be           	  used as detailed later in this paper.</p>
                                    <p>Expand the the Emotiq ecosystem through educational programs;
Build a world-class in-house research team;
Explore the different implementations of smart contract languages and their usability, to accelerate blockchain adoption across the mass-market and enterprise; and
Provide venture funding for early projects on the Emotiq blockchain.
Emotiq will aggressively pursue development, acquire the best talent, and explore new solutions. Its vision is ambitious, with equally ambitious goals.
                                    </p>
                                   
                                </article>

                            </div>
                        </div>
                           <!-- <p>
                                        The pre-TGE (private sale) will raise <strong>$15MM</strong> from institutional and large private
                                        contributors. It will be limited to two weeks and start on February 15. The public TGE will
                                        commence three to four months after, and will raise at least <strong>$69MM</strong> (at a per-token price
                                        at least <strong>20% greater</strong> than that of the private TGE). Combined, the TGEs are intended to
                                        raise <strong>$86-100MM</strong>.</p>-->
                    </div>

                </section>
                <section id="whitepaper" class="whitepaper-section content-section">
                    <div class="container section-top-block">
                        <h2 class="section-title">Whitepaper</h2>
                    </div>
                    <div class="container whitepaper-container">
                        <!-- <div class="form-wrap">
                            <h3 class="subtitle">Learn More About Our Products </h3>
                            <form action="https://formspree.io/info@emotiq.ch" class="whitepaper-form validate-form" method="post">
                                <label>
                                    <input class="name-field" name="name" type="text" placeholder="First Name*">
                                </label>
                                <label>
                                    <input class="last-name-field" name="lastName" type="text" placeholder="Last Name*">
                                </label>
                                <label>
                                    <input class="company-field field-required" name="company" type="text" placeholder="Company*">
                                </label>
                                <label>
                                    <input class="email-field email-field-required" name="email" type="email" placeholder="Email*">
                                </label>
                                <div class="text-area-wrap">
                                    <textarea class="textarea" name="message" placeholder="Message"></textarea>
                                </div>
                                <input type="submit" value="contact us" class="button">
                            </form>
                        </div> -->
                        <div class="download-block-wrap">
                            <span class="pdf-icon"></span>
                            <div>
                                <h3 class="subtitle">Download the documents</h3>
                                <p>Viewly Whitepaper.pdf <br/> (14 MB)</p>
                            </div>
                            <a href="pdf/WP_Emotiq_1.6.pdf" target="_blank" class="button">download</a>
                        </div>
                    </div>
                </section>
                <section id="roadmap" class="roadmap-section content-section">
                    <div class="container section-top-block">
                        <h2 class="section-title">Roadmap</h2>
                    </div>
                    <div class="roadmap-wrap">
                        <div class="svg-wrap-outer">
                            <div class="svg-wrap"></div>
                            <div class="road-map-first">

                            </div>
                            <div class="road-map-second">

                            </div>

                        </div>
                        <div class="roadmap-dots">
                            <div class="dot d1">
                                <h6 class="dot-title"><span>Q1</span> 2018</h6>
                                <p>Private token
                                    generation
                                    event (TGE)</p>
                            </div>
                            <div class="dot d2">
                                <h6 class="dot-title"><span>Q2</span> 2018</h6>
                                <p>Public TGE</p>
                            </div>
                            <div class="dot d3">
                                <h6 class="dot-title"><span>Q3</span> 2018</h6>
                            </div>
                            <div class="dot d4">
                                <h6 class="dot-title"><span>Q4</span> 2018</h6>
                                <p><strong>Mainnet</strong>
                                    <br/>
                                    <span class="color">Native EMTQ token</span></p>
                            </div>
                            <!--<div class="dot d5">-->
                            <!--<h6 class="dot-title"><span>Q1</span> 2019</h6>-->
                            <!--<p>Convert temporary-->
                            <!--ERC20 token-->
                            <!--to native EMTQ</p>-->
                            <!--</div>-->
                        </div>
                        <div class="roadmap-text">
                            <div class="roadmap-text-item first">
                                <h4>Blockchain prototype:</h4>
                                <div class="list-el">
                                    <p>Strongly<br/>
                                        consistent, public<br/>
                                        blockchain;<br/>
                                        PBFT atop collective<br/>
                                        signing (CoSi);<br/>
                                        open consensus<br/>
                                        group membership;</p>
                                    <p>two parallel
                                        blockchains:</p>
                                    <p class="list-el">primary (keyblocks,<br/>
                                        Proof-of-Stake)</p>
                                    <p class="list-el">secondary<br/>
                                        (microblocks,<br/>
                                        transaction<br/>
                                        commits with<br/>
                                        collective signature)</p>
                                </div>
                                <p class="list-el">
                                    UTXO model
                                </p>
                                <p class="list-el">Confidential<br/>
                                    transactions and<br/>
                                    privacy via<br/>
                                    Bulletproofs</p>
                                <p class="list-el">Bias-resistant<br/>
                                    distributed randomness<br/>
                                    protocol</p>
                            </div>
                            <div class="roadmap-text-item second">
                                <h4>Testnet:</h4>
                                <p class="list-el">All prototype<br/>
                                    features, plus</p>
                                <p class="list-el">Delegated<br/>
                                    Proof-of-Stake (dPOS)</p>
                                <p class="list-el">Trust-but-verify<br/>
                                    two tier processing<br/>
                                    (fast, slow)</p>
                                <h4>Prototype applications:</h4>
                                <p class="list-el">Ring VM</p>
                                <p class="list-el">Lisp smart contracts</p>
                                <p class="list-el">UI console</p>
                            </div>
                            <div class="roadmap-text-item third">
                                <h4>Testnet improvements:
                                </h4>
                                <p class="list-el">Sharding via bias-resistant<br/>
                                    distributed randomness<br/>
                                    protocol</p>
                                <p class="list-el">Cross-shard commits</p>
                                <p class="list-el">Enhance pBFT performance<br/>
                                    under Byzantine denial<br/>
                                    of service attacks</p>
                                <p class="list-el">Blockchain checkpointing<br/>
                                    (state blocks) and<br/>
                                    compression</p>
                                <h4>Applications:</h4>
                                <p class="list-el">Ring (natural language)<br/>
                                    smart contracts</p>
                                <p class="list-el">UI console with interactive<br/>
                                    contract simulator</p>
                            </div>
                            <div class="roadmap-text-item fourth">
                                <h4>Further improvements:
                                </h4>
                                <p class="list-el">MimbleWimble implementation,                                 including secure purging of old and spent transactions</p>
                                <p class="list-el">Cross-shard commits</p>
                                <p class="list-el">Real-time trust-but-verify transaction validation</p>
                                <p class="list-el">User-friendly UI for Ring and Emotiq development tools</p>
                            </div>
                        </div>
                    </div>

                </section>
            </main>
			<footer class="page-footer">
				<div class="container">
                    <div class="page-header-main-right">
                        <ul class="header-social page-header-main-right-list">
                            <!--<li class="page-header-main-right-item lIn">-->
                                <!--<a href="http://www.linkedin.com/in/wenqiang555803156">-->
                                    <!--<span>linkedIn</span>-->
                                <!--</a>-->
                            <!--</li>-->
                            <li class="page-header-main-right-item tg">
                                <a href="http://telegram.me/emotiq">
                                    <span>telegram</span>
                                </a>
                            </li>
                            <li class="page-header-main-right-item tg tg-ru">
                                <a href="http://telegram.me/emotiq_ru">
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
                    <div class="text">
                        <span class="copyright">All trademarks, logos and brands are property of their respective owners.<br/>
                        All company, product and service names used in this website are for identification purposes only.<br/>
                        </span>
                        <span class="no-mobile">Responsible Disclosure Policy for Security Researchers</span>
                        <a href="mailto:info@emotiq.ch " class="mail-link">info@emotiq.ch</a>
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
    <script src="js/svg.js"></script>
	<script src="js/script.js"></script>
<!--    --><?php
//    if( !$detect->isMobile()) {
//    ?>
<!--        <script type="text/javascript">-->
<!--            $(document).ready(function() {-->
<!--                $(document).scroll(function() {-->
<!--                    var y = $(document).scrollTop();-->
<!--                    if (y > 1300) {-->
<!--                        var num = 1;-->
<!--                        $('.associate').eq(0).removeClass('invisible').addClass('animated fadeInLeft');-->
<!--                        setInterval(function(){-->
<!--                            if (num>=11) return;-->
<!--                            $('.associate').eq(num++).removeClass('invisible').addClass('animated fadeInLeft');-->
<!--                        },150);-->
<!--                    }-->
<!---->
<!--                });-->
<!--            });-->
<!--        </script>-->
<!--    --><?php
//    }
//    ?>

</body>
</html>
