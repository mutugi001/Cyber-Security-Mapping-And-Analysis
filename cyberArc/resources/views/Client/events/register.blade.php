<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AI.Tech - Artificial Intelligence HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">
  <link rel="icon" href="{{asset('assets/client/images/img_2.png')}}">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/client/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/client/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/client/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/client/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div style="background-color: black" class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <div style="margin-right: 5px"  class="logo">
        <img src="{{asset('assets/client/images/logo.png')}}" alt="" width="230" height="50" class="logo-image">
      </div>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div  class="collapse navbar-collapse" id="navbarCollapse" >
                    <div class="navbar-nav ms-auto">
                        <a href="{{route('web.index')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{route('web.learn')}}" class="nav-item nav-link">Learn</a>
                        <a href="{{route('web.solution')}}" class="nav-item nav-link" onclick="loadContent('solution')">Solution</a>
                        <a href="{{route('web.events')}}" class="nav-item nav-link">Events</a>
                        <a href="{{route('web.about')}}" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <button type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
<!--    <div class="container-fluid pt-5 bg-primary hero-header">-->
<!--        <div class="container pt-5">-->
<!--            <div class="row g-5 pt-5">-->
<!--                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">-->
<!--                    <h1 class="display-4 text-white mb-4 animated slideInRight">Contact Us</h1>-->
<!--                    <nav aria-label="breadcrumb">-->
<!--                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">-->
<!--                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>-->
<!--                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>-->
<!--                            <li class="breadcrumb-item text-white active" aria-current="page">Contact Us</li>-->
<!--                        </ol>-->
<!--                    </nav>-->
<!--                </div>-->
<!--                <div class="col-lg-6 align-self-end text-center text-lg-end">-->
<!--                    <img class="img-fluid" src="images/robot.png" alt="" style="max-height: 500px; width: 400px">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="mb-4">Fill in the details to register for the event</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <p class="text-center mb-4"></p>
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <form action="{{route('event.store')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="contact" id="contact" placeholder="Your Phone Number">
                                        <label for="contact">Your Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="event" id="event" value="{{$event_for_register['Name']}}" disabled>
                                        <input type="hidden" name="event_id" value="{{$event_for_register['id']}}">
                                        <label for="name">Event</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="terms" id="terms" required>
                                    <label for="terms">
                                        I agree to the <a href="#" data-toggle="modal" data-target="#termsModal">Terms and Conditions</a>
                                    </label>
                                </div>
                                <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Add your terms and conditions text here -->

By providing your personal information on our website, you hereby consent to the collection, processing, and storage of your data as described in these terms and conditions.

We collect personal information including your name, email address, and contact information (such as phone number or address) for the purpose of providing and improving our services, as well as for communication with you regarding our products, services, promotions, and updates.

We are committed to ensuring that your information is secure. We have implemented appropriate technical and organizational measures to safeguard and secure the information we collect online.

We do not sell, trade, or otherwise transfer your personal information to outside parties unless we have your consent or are required by law to do so. However, we may use third-party services to process or store your data, and these third parties are obligated to maintain the confidentiality of your information.

We may use cookies to enhance your experience on our website. You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer.

Our website may contain links to other websites. Once you leave our site, we are not responsible for the protection and privacy of any information you provide on those sites. Exercise caution and review the privacy statements of any website you visit.

By using our website and providing your personal information, you acknowledge that you have read, understood, and agree to these terms and conditions regarding the collection and use of your data. If you do not agree with these terms, please do not provide any personal information on our website.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">register</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
        

    <!-- Newsletter Start -->
    <div class="container-fluid bg-primary newsletter py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid" src="{{asset('assets/client/img/newsletter.png')}}" alt="">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Newsletter</div>
                    <h1 class="text-white mb-4">Let's subscribe our cybersecurity newsletter</h1>
                    <div class="position-relative w-100 mt-3 mb-2">
                        <form action="{{route('feed.subscription')}}" method="POST">
                            @csrf
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" name="email" id="email" type="text"
                                placeholder="Enter Your Email" style="height: 48px;">
                            <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </form>
                </div>
<!--                    <small class="text-white-50">Diam sed sed dolor stet amet eirmod</small>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <h1 class="text-white">Cyber<span class="text-primary"></span>Arc</h1>
                    </a>
                    <p class="mb-0">Cyber Arc: Turning the Tide Against Cyber Threats by Turning Threats into Triumphs</p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>JHUB Africa J.K.U.A.T</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+254718452611</p>
                    <p><i class="fa fa-envelope me-3"></i>cyberarc06@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://x.com/JHUBAfrica?t=Bd7_43H1oWauDM3beEv73g&s=08"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/JHUBAfrica/?_rdr"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/jhubafrica"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/jhubafrica/?originalSubdomain=ke"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <!--
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-white mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Career</a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4">Our Services</h5>
                    <a class="btn btn-link" href="">Robotic Automation</a>
                    <a class="btn btn-link" href="">Machine learning</a>
                    <a class="btn btn-link" href="">Predictive Analysis</a>
                    <a class="btn btn-link" href="">Data Science</a>
                    <a class="btn btn-link" href="">Robot Technology</a>
                </div>-->
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{route('web.index')}}">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="{{route('web.faq')}}">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/client/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/client/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/client/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/client/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/client/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/client/js/main.js')}}"></script>
</body>

</html>