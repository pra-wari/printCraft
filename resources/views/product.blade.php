<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Owl Carousel CSS --> 
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">


        <!-- Title -->
        <title>Print Craft</title>
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="pre-img">
                        <img src="assets/img/footer-logo.png" alt="Logo">
                    </div>
                    <div class="spinner">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="/" class="logo">
                    <img src="assets/img/footer-logo.png" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
             <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="/">
                            <img src="assets/img/print_logo.png" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="/" class="nav-link">
                                        Home 
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/about" class="nav-link">
                                        About
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/services" class="nav-link">
                                        Services 
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                       Product
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Contact
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="menu-btn">
                                <a href="tel:+11234567890" class="phone-btn">
                                    <i class='bx bxs-phone'></i>
                                    +1 123 456 7890
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
        
        <!-- Inner Banner -->
        <div class="inner-banner inner-bg7">
            <div class="container">
                <div class="inner-title">
                    <h3>Product</h3>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>Product</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Product Area -->
        <section class="product-area pt-100 pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>Product</span>
                    <h2>We Have Some Pre-ready Demo Product</h2>
                    <p>
                        What indication best sick be project proposal in attempt, train of the showed
                        some a forth. That homeless, won't many of goals thoughts volumes felt.
                    </p>
                </div>
                <div class="row pt-45">
                    @foreach($products as $product)
                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="/product">
                                <img src="storage/products/{{$product->image}}" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="/product">
                                    <h3>{{$product->title}}</h3>
                                </a>
                                <p><span>${{$product->price}}</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="/product">
                                <img src="assets/img/products/2.jpg" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="/product">
                                    <h3>T-shirt Design</h3>
                                </a>
                                <p><span>$20</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="/product">
                                <img src="assets/img/products/3.jpg" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="/product">
                                    <h3>Cover Van</h3>
                                </a>
                                <p><span>$30</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="/product">
                                <img src="assets/img/products/4.jpg" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="/product">
                                    <h3>Mug Design</h3>
                                </a>
                                <p><span>$10</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="/product">
                                <img src="assets/img/products/5.jpg" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="/product">
                                    <h3>Book Cover</h3>
                                </a>
                                <p><span>$15</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="/product">
                                <img src="assets/img/products/6.jpg" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="/product">
                                    <h3>Astronaut Cover</h3>
                                </a>
                                <p><span>$35</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="pagination-area">
                            <nav aria-label="Page navigation example text-center">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link page-links" href="#">
                                            <i class='bx bx-chevrons-left'></i>
                                        </a>
                                    </li>
                                    <li class="page-item current">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class='bx bx-chevrons-right'></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Product Area End -->

        <!-- Price Area -->
        <div class="price-area pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>Pricing Table</span>
                    <h2>We Have Pre-ready Pricing Plan for Our Services</h2>
                    <p>
                        It is a long established fact that a reader will be 
                        distracted by the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-12 pt-45">
                        <div class="tabs-item-list">
                            <ul id="tabs-item" class="text-center">
                                <li class="active">
                                    <a href="#monthly" class="prices-tab">Monthly</a>
                                </li> 
                                <li>
                                    <a href="#yearly" class="prices-tab">Yearly</a>
                                </li> 
                            </ul> 
                        </div>
                    </div>
                </div>
                <div id="prices-conten">
                    <div id="monthly" class="active prices-conten-area animated">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price">
                                    <span>Basic Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>{{$price[0]->basic}}<sub>/month</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Brand Identy</li>
                                        <li>Package Design</li>
                                        <li>Web Application</li>
                                        <li>Bill Board</li>
                                        <li class="color-gray"><del>Tshirt Design</del></li>
                                        <li class="color-gray"><del>Vector Art</del></li>
                                        <li class="color-gray"><del>Print Ready Source</del></li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price current">
                                    <span>Standard Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>{{$price[0]->standard}}<sub>/month</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Brand Identy</li>
                                        <li>Package Design</li>
                                        <li>Web Application</li>
                                        <li>Bill Board</li>
                                        <li>Tshirt Design</li>
                                        <li class="color-gray"><del>Vector Art</del></li>
                                        <li class="color-gray"><del>Print Ready Source</del></li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="single-price">
                                    <span>Premium Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>{{$price[0]->premium}}<sub>/month</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Brand Identy</li>
                                        <li>Package Design</li>
                                        <li>Web Application</li>
                                        <li>Bill Board</li>
                                        <li>Tshirt Design</li>
                                        <li>Vector Art</li>
                                        <li> Print Ready Source</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="yearly" class="animated prices-conten-area">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price">
                                    <span>Basic Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>70<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Brand Identy</li>
                                        <li>Package Design</li>
                                        <li>Web Application</li>
                                        <li>Bill Board</li>
                                        <li class="color-gray"><del>Tshirt Design</del></li>
                                        <li class="color-gray"><del>Vector Art</del></li>
                                        <li class="color-gray"><del>Print Ready Source</del></li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price current">
                                    <span>Standard Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>120<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Brand Identy</li>
                                        <li>Package Design</li>
                                        <li>Web Application</li>
                                        <li>Bill Board</li>
                                        <li>Tshirt Design</li>
                                        <li class="color-gray"><del>Vector Art</del></li>
                                        <li class="color-gray"><del>Print Ready Source</del></li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="single-price">
                                    <span>Premium Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>170<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Brand Identy</li>
                                        <li>Package Design</li>
                                        <li>Web Application</li>
                                        <li>Bill Board</li>
                                        <li>Tshirt Design</li>
                                        <li>Vector Art</li>
                                        <li> Print Ready Source</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price Area End -->

        <!-- Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-contact">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="footer-card">
                                <i class='bx bx-time'></i>
                                <h3>Sun - Thu : 10:00 AM - 06:00 PM</h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="footer-card">
                                <i class='bx bxs-map'></i>
                                <h3>28/A Street, New York City, USA</h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="footer-card">
                                <i class='bx bxs-phone-call'></i>
                                <h3 class="media-tel">
                                    <a href="tel:+19876543210">+1 987 6543 210</a> 
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-top-list pb-70">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="footer-list">
                                <h3>Services</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="/services">Brand Identy</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="/services">Package Design</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="/services">Pattern Design</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="/services">T-shirt Print</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="/services">Book Covers</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="/services">CD-DVD Covers</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <div class="footer-list">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="/services">Service</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="/about">About Us</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="testimonial.html">Testimonial</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-5">
                            <div class="footer-side-list">
                                <h3>Contact Us</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-phone'></i>
                                        <a href="tel:+11234567891">+1 1234 56 7891</a>
                                    </li>
                                    <li>
                                        <i class='bx bxl-telegram'></i>
                                        <a href="mailto:info@utechpl.com">info@utechpl.com</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                        boring road patna-01
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-3">
                            <div class="footer-logo">
                                <img src="assets/img/print_logo.png" alt="Footer Logo">
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-9">
                            <div class="bottom-text">
                                <p>
                                    Copyright ©2021. All Rights Reserved by 
                                    <a href="https://www.utechpl.com/" target="_blank">UiproPitome</a> 
                                </p>

                                <ul class="social-bottom">
                                    <li>
                                        <a href="#"><i class='bx bxl-facebook'></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class='bx bxl-twitter'></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class='bx bxl-instagram'></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


        <!-- Jquery Min JS -->
        <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
        <!-- Popper Min JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/meanmenu.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Nice Select JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
        
    </body>
</html>