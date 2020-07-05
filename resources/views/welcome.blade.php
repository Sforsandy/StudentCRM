<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plugin Solution</title>
         <link rel="shortcut icon" href="{{ asset('public/public/images/favicon.ico') }}">
        <!-- App css -->
        <link href="{{ asset('public/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/css/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('public/css/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>.footer-icons li a {
    height: 36px;
    width: 36px;
    color: #7c8bad;
    text-align: center;
    font-size: 16px;
    display: inline-block;
    line-height: 34px;
    border-radius: 50%;
    border: 1px solid rgba(124, 139, 173, 0.5);
    transition: all 0.5s;
}</style>
        <!-- Styles -->
    </head>
    <!-- <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <body class="loading" data-layout-config='{"darkMode":false}'>

        <!-- NAVBAR START -->
        <nav class="navbar navbar-expand-lg py-lg-3 navbar-dark">
            <div class="container">

                <!-- logo -->
                <a href="index.html" class="navbar-brand">
                    <img src="{{ asset('public/images/pluginlogo1.png') }}" alt="" class="logo-dark" height="70" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <!-- menus -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <!-- left menu -->
                    <ul class="navbar-nav mr-auto align-items-center">
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link active" href="{{ url('/home') }}">Home</a>
                        </li>
                        
                        @else
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="#About us">About us</a>
                        </li>
                        
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="#Our Service">Our Service</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="#blogs">Blogs</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endauth
                    @endif
                    </ul>

                    <!-- right menu -->
                     @if (Route::has('register'))
                    <ul class="navbar-nav ml-auto align-items-center">
                        <li class="nav-item mr-0">
                            <a href="{{ route('register') }}" class="btn btn-sm btn-light btn-rounded d-none d-lg-inline-flex">
                                <i class="mdi mdi-basket mr-2"></i> Register
                            </a>
                        </li>
                    </ul>
                     @endif
                </div>
            </div>
        </nav>
        <!-- NAVBAR END -->

        <!-- START HERO -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="mt-md-4">
                            <div>
                              <!--   <a href="" target="_blank" class="btn btn-success">About <i
                                    class="mdi mdi-arrow-right ml-1"></i></a>
                                <span class="text-white-50 ml-1">Welcome to new landing page</span> -->
                            </div>
                            <h2 class="text-white font-weight-normal mb-4 mt-3 hero-title">
                                We are Providing Best Business Service
                            </h2>

                            <p class="mb-4 font-16 text-white-50">Highly in house Experienced Designer, Developers and Marketing Team.</p>

                            <a href="#About us"  class="btn btn-success">About <i
                                    class="mdi mdi-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="text-md-right mt-3 mt-md-0">
                            <img src="{{ asset('public/images/startup.svg') }}" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HERO -->

        <!-- START SERVICES -->
        <section class="py-5" id="About us">
            <div class="container">
                <div class="row py-4">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 class="mt-0">About Us</h1>
                            <h3>We provide a complete <span class="text-primary">IT solution</span> which includes making all types of websites <span
                                    class="text-primary">customize</span></h3>
                            <p class="text-muted mt-2">interactive mobile apps, interactive designs, portal development, digital marketing, corporate identity, motion graphics, and motion videos.
                                <br>describing your app, agency or business.</p>


                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-desktop text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Vision</h4>
                            <p class="text-muted mt-2 mb-0">We aim to become a prominent web solution providing company which can stay updated with all the latest technology by providing a cost-effective and quality service.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-vector-square text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Mission</h4>
                            <p class="text-muted mt-2 mb-0">Once a project is taken from our client, we give a very priority to give the best solution to the clients. We take each of the problems associated with the work on a very quick way to find the solution to them.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-presentation text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Values</h4>
                            <p class="text-muted mt-2 mb-0">Completing the project in the given deadline
Meeting all the specifications and the requirements of the client
Providing a high-quality solution the client
Providing 24X7 support to our clients.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-apps text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Multiple Applications</h4>
                            <p class="text-muted mt-2 mb-0">Et harum quidem rerum as expedita distinctio nam libero tempore
                                cum soluta nobis est cumque quo.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-shopping-cart-alt text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Ecommerce Pages</h4>
                            <p class="text-muted mt-2 mb-0">Temporibus autem quibusdam et aut officiis necessitatibus saepe
                                eveniet ut sit et recusandae.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-grids text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Multiple Layouts</h4>
                            <p class="text-muted mt-2 mb-0">Nam libero tempore, cum soluta a est eligendi minus id quod
                                maxime placeate facere assumenda est.
                            </p>
                        </div>
                    </div>
                </div> -->

            </div>
        </section>
        <!-- END SERVICES -->

        <!-- START FEATURES 1 -->
        <section class="py-5 bg-light-lighten border-top border-bottom border-light" id="Our Service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h3>Our <span class="text-primary">Services</span></h3>
                            <p class="text-muted mt-2">We provide one of the best interactive web services which include making static, dynamic, corporate, brand, and e-commerce websites  <br /> modern web
                                application & mobile application.</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-4">
                        <div class="demo-box text-center">
                            <img src="{{ asset('public/images/layouts/layout-1.png') }}" alt="demo-img"
                                class="img-fluid shadow-sm rounded">
                            <h5 class="mt-3 f-17">Static/Portfolio Website</h5>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="demo-box text-center mt-3 mt-lg-0">
                            <img src="{{ asset('public/images/layouts/layout-2.png') }}" alt="demo-img"
                                class="img-fluid shadow-sm rounded">
                            <h5 class="mt-3 f-17">Dyanamic Website</h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="demo-box text-center mt-3 mt-lg-0">
                            <img src="{{ asset('public/images/layouts/layout-3.png') }}" alt="demo-img"
                                class="img-fluid shadow-sm rounded">
                            <h5 class="mt-3 f-17">Custom Portal</h5>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    
                    <div class="col-lg-4">
                        <div class="demo-box text-center">
                            <img src="{{ asset('public/images/layouts/layout-5.png') }}" alt="demo-img"
                                class="img-fluid shadow-sm rounded">
                            <h5 class="mt-3 f-17">Brand Websites</h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="demo-box text-center mt-3 mt-lg-0">
                            <img src="{{ asset('public/images/layouts/layout-6.png') }}" alt="demo-img"
                                class="img-fluid shadow-sm rounded">
                            <h5 class="mt-3 f-17">E-Commerce Websites</h5>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="demo-box text-center mt-3 mt-lg-0">
                            <img src="{{ asset('public/images/layouts/layout-4.png') }}" alt="demo-img"
                                class="img-fluid shadow-sm rounded">
                            <h5 class="mt-3 f-17">Mobile Development Application</h5>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END FEATURES 1 -->

        <!-- START FAQ -->
        <section class="py-5" id="blogs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 class="mt-0"><i class="mdi mdi-frequently-asked-questions"></i></h1>
                            <h3>Frequently Asked <span class="text-primary">Questions</span></h3>
                            <p class="text-muted mt-2">Here are some of the basic types of questions for our customers. For more 
                                <br>information please contact us.</p>

                            <button type="button" class="btn btn-success btn-sm mt-2"><i class="mdi mdi-email-outline mr-1"></i> Email us your question</button>
                            <button type="button" class="btn btn-info btn-sm mt-2 ml-1"><i class="mdi mdi-twitter mr-1"></i> Send us a tweet</button>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-5 offset-lg-1">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question text-body">Can I use this template for my client?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">Yup, the marketplace license allows you to use this theme
                                in any end products.
                                For more information on licenses, please refere <a href="https://themes.getbootstrap.com/licenses/" target="_blank">here</a>.</p>
                        </div>

                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question text-body">How do I get help with the theme?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">Use our dedicated support email (support@coderthemes.com) to send your issues or feedback. We are here to help anytime.</p>
                        </div>

                    </div>
                    <!--/col-lg-5 -->

                    <div class="col-lg-5">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question text-body">Can this theme work with Wordpress?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">No. This is a HTML template. It won't directly with
                                wordpress, though you can convert this into wordpress compatible theme.</p>
                        </div>

                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question text-body">Will you regularly give updates of Hyper?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">Yes, We will update the Hyper regularly. All the
                                future updates would be available without any cost.</p>
                        </div>

                    </div>
                    <!--/col-lg-5-->
                </div>
                <!-- end row -->

            </div> <!-- end container-->
        </section>
        <!-- END FAQ -->

        
        <!-- START CONTACT -->
        <section class="py-5 bg-light-lighten border-top border-bottom border-light" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h3>Get In <span class="text-primary">Touch</span></h3>
                            <p class="text-muted mt-2">Please fill out the following form and we will get back to you shortly. For more 
                                <br>information please contact us.</p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mt-3">
                    <div class="col-md-4">
                        <p class="text-muted"><span class="font-weight-bold">Customer Support:</span><br> <span class="d-block mt-1">+91 7977724451 / 8652427021</span></p>
                        <p class="text-muted mt-4"><span class="font-weight-bold">Email Address:</span><br> <span class="d-block mt-1">sunilofficial@gmail.com</span></p>
                        <p class="text-muted mt-4"><span class="font-weight-bold">Office Address:</span><br> <span class="d-block mt-1">Jai Maharashtra welf soc Sanjay Nagar, Lalji pada, Kandivali, Mumbai, Maharashtra 400067</span></p>
                        <p class="text-muted mt-4"><span class="font-weight-bold">Office Time:</span><br> <span class="d-block mt-1">9:00AM To 6:00PM</span></p>
                    </div>

                    <div class="col-md-8">
                        <form>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fullname">Your Name</label>
                                        <input class="form-control form-control-light" type="text" id="fullname" required="" placeholder="Name...">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="emailaddress">Your Email</label>
                                        <input class="form-control form-control-light" type="email" required="" id="emailaddress" placeholder="Enter you email...">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">Your Subject</label>
                                        <input class="form-control form-control-light" type="text" id="subject" required="" placeholder="Enter subject...">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="comments">Message</label>
                                        <textarea id="comments" rows="4" class="form-control form-control-light" required="" placeholder="Type your message here..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary">Send a Message <i
                                        class="mdi mdi-telegram ml-1"></i> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT -->

        <!-- START FOOTER -->
        <footer class="bg-dark py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('public/images/pluginlogo1.png') }}" alt="" class="logo-dark" height="70" />
                        <p class="text-white-50 mt-4">Plugin Solution makes it easier to build better websites with
                            <br> great speed. Save hundreds of hours of design
                            <br> and development by using it.</p>

                        <ul class="social-list list-inline mt-3">
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                            </li>
                        </ul>

                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-white">Company</h5>

                        <ul class="list-unstyled pl-0 mb-0 mt-3">
                            <li class="mt-2"><a href="#About us" class="text-white-50">About Us</a></li>
                            <li class="mt-2"><a href="#Our Service" class="text-white-50">Our Services</a></li>
                            <li class="mt-2"><a href="#blogs" class="text-white-50">Blog</a></li>
                            <li class="mt-2"><a href="#contact" class="text-white-50">Contact</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-4 mt-6 mt-lg-0">
                    <div class="text-white">
                        <h5 class="mb-4">Find Us</h5>
                        
                        <ul class="list-unstyled footer-icons">
                            <li class="list-inline-item"><a href="https://dribbble.com/coderthemes"><i class="uil uil-facebook"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="https://www.behance.net/coderthemes"><i class="uil uil-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="https://www.behance.net/coderthemes"><i class="uil uil-youtube"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="mailto:support@coderthemes.com"><i class="uil uil-envelope"></i></a></li>
                        </ul>
                    </div>
                    </div>

                    <!-- <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-white">Discover</h5>

                        <ul class="list-unstyled pl-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Help Center</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Our Products</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-white-50">Privacy</a></li>
                        </ul>
                    </div> -->
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-5">
                            <p class="text-white-50 mt-4 text-center mb-0">Copyright © 2018-2019. Plugin Solution | All Rights Reserved. | Privacy Policy | Terms & Conditions</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->

        <!-- bundle -->
        <script src="{{ asset('public/js/vendor.min.js') }}"></script>
        <script src="{{ asset('public/js/app.min.js') }}"></script>

    </body>

</html>
