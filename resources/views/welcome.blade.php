<!DOCTYPE html>
<html lang="de">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="onlineshop, meinshop, PC, computer, mac, macbook, handy, iphone, samsung, konsole, playstation 5, ps5, playstation 4, ps4, ps 4 controller, ">
    <meta name="Description" content="Bei MeinShop finden Sie Handys, PC, Spielekonsolen und Zubehör. Angebote, Service, Beratung uvm . im Onlineshop. ">
    <title> Prolab - Product Landing Page </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <!-- Flat Icon -->
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- AOS css -->
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body class="home7">

<!-- preloader area start -->
{{--<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="cube-wrapper">
            <div class="cube-folding">
                <span class="leaf1"></span>
                <span class="leaf2"></span>
                <span class="leaf3"></span>
                <span class="leaf4"></span>
            </div>
            <span class="loading" data-name="Loading">Loading</span>
        </div>
    </div>
</div>--}}
<!-- preloader area end -->

<!-- Navebar Area start -->
<header class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-0">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('assets/images/icon.png')}}" alt=""height="50" width="50">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu"
                            aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainmenu">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">Über Uns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pricing">Produkte</a>
                            </li>
                            {{--<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{asset('blog-grid.html')}}"><i class="fas fa-chevron-right"></i> Blog 3 Grid</a>
                                    <a class="dropdown-item" href="{{asset('blog-sidebar.html')}}"><i class="fas fa-chevron-right"></i>Blog With Sidebar</a>
                                    <a class="dropdown-item" href="{{asset('blog-details-with-sidebar.html')}}"><i class="fas fa-chevron-right"></i>Blog Details With Sidebar</a>
                                    <a class="dropdown-item" href="{{asset('blog-details.html')}}"><i class="fas fa-chevron-right"></i>Blog Details</a>
                                    <a class="dropdown-item" href="{{asset('login.html')}}"><i class="fas fa-chevron-right"></i>Login</a>
                                    <a class="dropdown-item" href="{{asset('register.html')}}"><i class="fas fa-chevron-right"></i>Register</a>
                                    <a class="dropdown-item" href="{{asset('forgot-pass.html')}}"><i class="fas fa-chevron-right"></i>Forgot Password</a>
                                    <a class="dropdown-item" href="{{asset('404.html')}}"><i class="fas fa-chevron-right"></i>404</a>
                                </div>
                            </li>--}}

                            <li class="nav-item">
                                <a class="nav-link" href="#faq">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Kontakt</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Navebar Area End -->

<!-- Hero Area Start -->
<div id="home" class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-self-center">
                <div class="left-content">
                    <div class="content">
                        <h1 class="title">
                            "Jedes Labyrinth hat einen Ausgang"
                        </h1>

                        <p class="subtitle">
                            <h3> In unserem Shop findet jeder das passende für sich!</h3>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-first order-lg-last">
                <div>
                    <img class="img-fluid img" src="{{asset('assets/images/labyrinth.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

<!-- About Area Start -->
<section class="about" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title extra">
                    <h2 class="title">Über Uns?</h2>
                    <p>
                        Wir MeinShop bieten dir einen super Support an. Durch unsere App kannst du dir dein passendes gerät aussuchen.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="box" data-aos="fade-right">
                    <div class="inner-box">
                        <div class="icon">
                            <i class="flaticon-art"></i>
                        </div>
                        <h4 class="title">Produkte</h4>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box" data-aos="fade-up">
                    <div class="inner-box">
                        <div class="icon">
                            <i class="flaticon-apps"></i>
                        </div>
                        <h4 class="title">App</h4>

                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="box" data-aos="fade-right">
                    <div class="inner-box">
                        <div class="icon">
                            <i class="flaticon-speech-bubble"></i>
                        </div>
                        <h4 class="title">Live Chat Support</h4>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- About Area End -->

{{--<!-- Pricing Area Start -->
<section class="pricing" id="pricing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title">
                    <h2 class="title">Our Awesome Products</h2>
                    <p>
                        Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. His secure called esteem praise.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-slider" data-aos="fade-up">
                    <div class="item">
                        <div class="single-product">
                            <div class="img">
                                <img src="assets/images/w1.png" alt="">

                                <div class="links">
                                    <a href="#" class="mybtn3 mybtn-bg"><span>Buy Now</span> </a>
                                </div>
                            </div>
                            <div class="content">
                                <ul class="stars">
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star-half"></i>
                                    </li>
                                </ul>
                                <div class="price">
                                    <p class="new-price">
                                        $135
                                    </p>
                                    <small>
                                        <del>
                                            $193
                                        </del>
                                    </small>
                                </div>

                                <h4 class="title">
                                    Prolab Blue
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product">
                            <div class="img">
                                <img src="assets/images/w2.png" alt="">

                                <div class="links">
                                    <a href="#" class="mybtn3 mybtn-bg"><span>Buy Now</span> </a>
                                </div>
                            </div>
                            <div class="content">
                                <ul class="stars">
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star-half"></i>
                                    </li>
                                </ul>
                                <div class="price">
                                    <p class="new-price">
                                        $135
                                    </p>
                                    <small>
                                        <del>
                                            $193
                                        </del>
                                    </small>
                                </div>

                                <h4 class="title">
                                    Prolab Blue
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product">
                            <div class="img">
                                <img src="assets/images/w3.png" alt="">

                                <div class="links">
                                    <a href="#" class="mybtn3 mybtn-bg"><span>Buy Now</span> </a>
                                </div>
                            </div>
                            <div class="content">
                                <ul class="stars">
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star-half"></i>
                                    </li>
                                </ul>
                                <div class="price">
                                    <p class="new-price">
                                        $135
                                    </p>
                                    <small>
                                        <del>
                                            $193
                                        </del>
                                    </small>
                                </div>

                                <h4 class="title">
                                    Prolab Blue
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product">
                            <div class="img">
                                <img src="assets/images/w4.png" alt="">

                                <div class="links">
                                    <a href="#" class="mybtn3 mybtn-bg"><span>Buy Now</span> </a>
                                </div>
                            </div>
                            <div class="content">
                                <ul class="stars">
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star-half"></i>
                                    </li>
                                </ul>
                                <div class="price">
                                    <p class="new-price">
                                        $135
                                    </p>
                                    <small>
                                        <del>
                                            $193
                                        </del>
                                    </small>
                                </div>

                                <h4 class="title">
                                    Prolab Blue
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing part End -->--}}


<!-- Pricing Area Start -->
<section class="pricing" id="pricing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title">
                    <h2 class="title">Unsere Produkte</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-slider" data-aos="fade-up">
                    <div class="item">
                        <div class="single-product">
                            <div class="img">
                                <img src="{{asset('assets/images/phone.png')}}" alt="">

                                <div class="links">
                                    <a href="#" class="mybtn3 mybtn-bg"><span>Suchen</span> </a>
                                </div>
                            </div>
                            <div class="content">


                                <h4 class="title">
                                    Smartphone
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product">
                            <div class="img">
                                <img src="{{asset('assets/images/monitor.png')}}" alt="">

                                <div class="links">
                                    <a href="#" class="mybtn3 mybtn-bg"><span>Suchen</span> </a>
                                </div>
                            </div>
                            <div class="content">

                                <h4 class="title">
                                    Computer
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product">
                            <div class="img">
                                <img src="{{asset('assets/images/controller.png')}}" alt="">

                                <div class="links">
                                    <a href="#" class="mybtn3 mybtn-bg"><span>Suchen</span> </a>
                                </div>
                            </div>
                            <div class="content">


                                <h4 class="title">
                                    Konsolen
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-product">
                            <div class="img">
                                <img src="{{asset('assets/images/zubehoer.png')}}" alt="">

                                <div class="links">
                                    <a href="#" class="mybtn3 mybtn-bg"><span>Suchen</span> </a>
                                </div>
                            </div>
                            <div class="content">

                                <h4 class="title">
                                    Zubehör
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing part End -->

<!--  Video Area Start -->
<section class="video" id="video">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title">
                    <h2 class="title">Wieso MeinShop?</h2>
                    <p>
                        Du solltest von MeinShop kaufen da bei uns die Kundenzufriedenheit die oberste Priorität ist.
                        Neben 2 Jahre Garantie, Kostenloser Versand bieten wir dir auch einen Live Chat Support an.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6">
                <div class="row" data-aos="fade-left">
                    <div class="col-lg-6">
                        <div class="fun-box">
                            <div class="inner-content inner-content1">
                                <div class="icon">
                                    <i class="flaticon-guarantee"></i>
                                </div>
                                <h5 class="categori">2 Jahre Garantie</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fun-box">
                            <div class="inner-content inner-content2">
                                <div class="icon">
                                    <i class="flaticon-delivery-truck"></i>
                                </div>
                                <h5 class="categori">Kostenloser Versand</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fun-box">
                            <div class="inner-content inner-content3">
                                <div class="icon">
                                    <i class="flaticon-return"></i>
                                </div>
                                <h5 class="categori">Rücksendung möglich</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fun-box">
                            <div class="inner-content inner-content4">
                                <div class="icon">
                                    <i class="flaticon-support-2"></i>
                                </div>
                                <h5 class="categori">Support</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Area End -->


<!-- Compare Area Start -->
<section class="compare-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title extra">
                    <h2 class="title">Unsere Bestseller</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="compare-table table table-responsive-lg table-bordered table-striped"  data-aos="fade-up">
                    <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">
                            <div class="product-image">
                                <img src="{{asset('assets/images/iphone.jpg')}}" alt="">
                            </div>
                            <h3 class="product-title">Apple</h3>
                            <p class="product-subtitle">IPhone 12 Pro</p>
                        </th>
                        <th class="text-center">
                            <div class="product-image">
                                <img src="{{asset('assets/images/macbook.jpg')}}" alt="">
                            </div>
                            <h3 class="product-title">Apple</h3>
                            <p class="product-subtitle">13" MacBook Pro</p>
                        </th>
                        <th class="text-center">
                            <div class="product-image">
                                <img src="{{asset('assets/images/ps5.jpg')}}" alt="">
                            </div>
                            <h3 class="product-title">Sony</h3>
                            <p class="product-subtitle">Playstation 5</p>
                        </th>
                        <th class="text-center">
                            <div class="product-image">
                                <img src="{{asset('assets/images/ps4controller.jpg')}}" alt="">
                            </div>
                            <h3 class="product-title">Sony</h3>
                            <p class="product-subtitle">Playstation 4 Controller</p>
                        </th>
                    </tr>
                    <tr>
                        <th>Preis</th>
                        <th class="price text-center">1149€</th>
                        <th class="price text-center">$1449€</th>
                        <th class="price text-center">499€</th>
                        <th class="price text-center">55€</th>
                    </tr>
                    </thead>

                    <tfoot>

                    <th></th>
                    <td class="text-center"><a href="#" class="mybtn3 mybtn-bg"><span>Details Anzeigen</span></a></td>
                    <td class="text-center"><a href="#" class="mybtn3 mybtn-bg"><span>Details Anzeigen</span></a></td>
                    <td class="text-center"><a href="#" class="mybtn3 mybtn-bg"><span>Details Anzeigen</span></a></td>
                    <td class="text-center"><a href="#" class="mybtn3 mybtn-bg"><span>Details Anzeigen</span></a></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Compare Area End -->


<!-- Testimonial Area Start -->
<section class="testimonial-area" id="testimonial-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title extra">
                    <h2 class="title">Kunden Rezension</h2>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-7">
                <div class="testimonial-img" data-aos="fade-up">
                    <img class="img1" src="{{asset('assets/images/testimonialimage/1.jpg')}}" alt="">
                    <img class="img2" src="{{asset('assets/images/testimonialimage/2.jpg')}}" alt="">
                    <img class="img3" src="{{asset('assets/images/testimonialimage/1.jpg')}}" alt="">
                    <img class="img4" src="{{asset('assets/images/testimonialimage/2.jpg')}}" alt="">
                    <img class="img5" src="{{asset('assets/images/testimonialimage/1.jpg')}}" alt="">
                    <img class="img6" src="{{asset('assets/images/testimonialimage/2.jpg')}}" alt="">
                </div>
                <div class="testimonial-slider" data-aos="fade-up">
                    <div class="item">
                        <div class="client">
                            <div class="client-image">
                                <img src="{{asset('assets/images/testimonialimage/1.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <p class="client-say">
                                Habe mir vor 5 Monaten ein Iphone gekauft. Vor dem Kauf hatte ich ein paar Fragen.
                                Der Live Chat Support hat mir super dabei geholfen das richtige für mich zu finden.
                            </p>
                            <h4 class="client-name">
                                <a href="#">
                                    Peter Meyer
                                </a>
                            </h4>

                                <ul class="stars">
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star-half"></i>
                                    </li>
                                </ul>



                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="client">
                            <div class="client-image">
                                <img src="{{asset('assets/images/testimonialimage/2.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <p class="client-say">
                                Zum Geburtstag von meinem Mann habe ich eine Playstation 5 gekauft. Die Bestellung und der Versand
                                ging Reibungslos.
                            </p>
                            <h4 class="client-name">
                                <a href="#">
                                    Anna Schmidt
                                </a>
                            </h4>

                        </div>
                    </div>

                    <div class="item">
                        <div class="client">
                            <div class="client-image">
                                <img src="{{asset('assets/images/testimonialimage/2.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <p class="client-say">
                                Ich habe ein neues PC gebraucht. Mir wurde diese Seite empfohlen und ich kann es nur weiter empfehlen.
                            </p>
                            <h4 class="client-name">
                                <a href="#">
                                    Susi Peter
                                </a>
                            </h4>

                        </div>
                    </div>

                    <div class="item">
                        <div class="client">
                            <div class="client-image">
                                <img src="{{asset('assets/images/testimonialimage/1.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <p class="client-say">
                                Versand war sehr schnell.
                            </p>
                            <h4 class="client-name">
                                <a href="#">
                                    Peter Anders
                                </a>
                            </h4>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Area End -->

<!-- Subscribe Area Start -->
<div class="subscribe-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title extra">
                    <h2 class="title">Newsletter abbonieren</h2>
                    <p>
                        Abboniere jetzt Kostenlos unseren Newsletter, um spannende Angebote nicht zu verpassen.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="newsletter-form-area" data-aos="fade-up">
                    <form action="#">
                        <input type="email" placeholder="E-Mmail address...">
                        <button type="submit">
                            <span>Abbonieren</span> <i class="far fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="download-buttons">
                    <p class="text">Downloade unsere App  </p>
                    <a href="#">
                        <i class="fab fa-android"></i> Play Store
                    </a>
                    <a href="#">
                        <i class="fab fa-apple"></i> App Store
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe Area End -->

<!-- Partner Area Start -->
<section id="faq" class="faq">
    <div class="container">
        <div class="section-title extra">
            <h2 class="title">Meist gestellten Fragen</h2>
            <p>
                Du hast eine Frage? Schau einfach mal in unserem Fragenkatalog rein.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel-group accordion" id="accordion-1" data-aos="fade-right">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 data-toggle="collapse" aria-expanded="true" data-target="#one" aria-controls="one"
                                class="panel-title">
                                Wie lange ist die Lieferzeit?
                            </h4>
                        </div>
                        <div id="one" class="panel-collapse collapse show" aria-labelledby="one" data-parent="#accordion-1">
                            <div class="panel-body">
                                <p>
                                    Die Lieferung beträgt 3-5 Werktage.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 data-toggle="collapse" aria-expanded="false" data-target="#two" aria-controls="two"
                                class="panel-title">
                                Gibt es Garantieverlängerungen ?
                            </h4>
                        </div>
                        <div id="two" class="panel-collapse collapse" aria-labelledby="two" data-parent="#accordion-1">
                            <div class="panel-body">
                                <p>
                                    Ein Garantieverlängerung kannst du bis zu 14 tage nach Bestellung der Ware abschließen.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 data-toggle="collapse" aria-expanded="false" data-target="#three" aria-controls="three"
                                class="panel-title">
                                Welche Bezahlungsarten haben wir?
                            </h4>
                        </div>
                        <div id="three" class="panel-collapse collapse" aria-labelledby="three" data-parent="#accordion-1">
                            <div class="panel-body">
                                <p>
                                    Wir haben verschiedene Bezahlarten. Du kannst es auf Rechnung kaufen, du kannst mit der Kreditkarte bezahlen aber wir akzeptieren auch PayPal bezahlungen.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 data-toggle="collapse" aria-expanded="false" data-target="#four" aria-controls="four"
                                class="panel-title">
                                Was machst du wenn dein Bestelltes Produkt im Garantiefall nicht mehr funktioniert?
                            </h4>
                        </div>
                        <div id="four" class="panel-collapse collapse" aria-labelledby="four" data-parent="#accordion-1">
                            <div class="panel-body">
                                <p>
                                    Am besten schreibst du uns sofort an oder rufst uns an und wir versuchen so schnell wie möglich dir eine Lösung anzubieten.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 data-toggle="collapse" aria-expanded="false" data-target="#four2" aria-controls="four2"
                                class="panel-title">
                                Wie gehe ich bei Rückversand vor?
                            </h4>
                        </div>
                        <div id="four2" class="panel-collapse collapse" aria-labelledby="four2" data-parent="#accordion-1">
                            <div class="panel-body">
                                <p>
                                    Wenn du ein Artikel zurückschicken willst, musst du uns anschreiben und du bekommst einen Rücksendeschein von uns.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <div class="faq-img" data-aos="fade-left">
                    <img src="{{asset('assets/images/fragezeichen.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partner Area End -->

<!-- Contact Area Start -->
<section class="contact" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title">
                    <h2 class="title">Kontakt</h2>
                    <p>
                       Du kannst uns ganz einfach kontaktieren.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="info-box box1" data-aos="fade-right">
                    <div class="left">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                    </div>
                    <div class="right">
                        <div class="content">
                            <p>+333 123 4565 7898</p>
                            <p>+333 153 4575 7893</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="info-box box2" data-aos="fade-up">
                    <div class="left">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div class="right">
                        <div class="content">
                            <p>mein@shop.de</p>
                            <p>supportmein@Shop.de</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="info-box box3" data-aos="fade-left">
                    <div class="left">
                        <div class="icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                    </div>
                    <div class="right">
                        <div class="content">
                            <p>Mein-Shop Str.15, 12345 Buxdehude, Deutschland</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form-wrapper" data-aos="fade-right">
                    <form id="contact-form" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="input-field borderd" id="name" placeholder="Dein Name" required>
                            </div>
                            <div class="col-md-12">
                                <input type="email" class="input-field borderd" id="email" placeholder="E-Mail" required>
                            </div>
                            <div class="col-12">
                  <textarea class="input-field borderd textarea" rows="3" id="message"
                            placeholder="Schreibe deine Nachricht hier" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="mybtn3 mybtn-bg"> <span>Nachricht schicken</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact Area End -->


<!-- Footer Section Start -->
<footer class="footer" id="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="footer-info-area">
                    <div class="footer-logo">
                        <a href="#" class="logo-link">
                            <img src="{{asset('assets/images/icon.png')}}" alt=""height="100" width="100">
                        </a>
                    </div>

                </div>
                <div class="fotter-social-links">
                    <ul>
                        <li>
                            <a href="#" class="facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-bg text-center">
        <p>Copyright © 2020. All rights reserved by
            <a href="index.html">MeinShop</a>
        </p>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Back to Top Start -->
<div class="bottomtotop">
    <i class="fa fa-chevron-right"></i>
</div>
<!-- Back to Top End -->


<!-- jquery -->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<!-- popper -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- way poin js-->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
<!-- aos js-->
<script src="{{asset('assets/js/aos.js')}}"></script>
<!-- counterup js-->
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<!-- easing js-->
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<!-- Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7eALQrRUekFNQX71IBNkxUXcz-ALS-MY&sensor=false"></script>
<script src="{{asset('assets/js/gmap.js')}}"></script>
<!-- main -->
<script src="{{asset('assets/js/contact.js')}}"></script>
<!-- main -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
