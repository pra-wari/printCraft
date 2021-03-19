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
                        <img src="assets/img/print_logo.png" alt="Logo">
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
                    <img src="assets/img/print_logo.png" alt="Logo">
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
                                    <a href="/" class="nav-link active">
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
                                    <a href="/product" class="nav-link">
                                        Product 
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/product" class="nav-link active">
                                        My Orders 
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/contact" class="nav-link">
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
                            <div >
                                <!-- Authentication -->
                                <form method="POST" action="{{ url('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="url('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="contact-wrap-form">
            <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>Product Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Size (cm)</th>
                <th>Address</th>
                <th>Status</th>
            </tr>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{$booking->name}}</td>
                    <td>{{$booking->email}}</td>
                    <td>{{$booking->mobile}}</td>
                    <td>{{$booking->size}}</td>
                    <td>{{$booking->address}}</td>
                    <td>{{$booking->status}}</td>
                </tr>
            @endforeach
        </table>
            </div>
            
        </div>
        
      
                   
      
       
       
        
       
        
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
                                <h3>Naya tola opp. Bank of baroda</h3>
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
                                        <a href="/contact">Contact</a>
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
                                        <a href="mailto:info@utechpl.com">support@printcraft.in</a>
                                    </li>
                                     <li>
                                        <i class='bx bxl-telegram'></i>
                                        <a href="mailto:info@utechpl.com">info@printcraft.in</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                       Naya tola opp. Bank of baroda
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


