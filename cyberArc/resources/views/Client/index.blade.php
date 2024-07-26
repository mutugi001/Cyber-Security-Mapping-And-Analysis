<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CyberArc</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/client/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

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
    <link rel="stylesheet" href="{{asset('assets/client/cyber.css')}}">
    <link rel="icon" href="{{asset('assets/images/client/img_2.png')}}">
    <style>
        .large {
            font-size: 2em; /* Increase the font size */
        }
        .footer-logo {
            max-width: 40px; /* Set maximum width */
            max-height: 20px; /* Set maximum height */
            width: auto;
            height: auto;
         /* Style the modal */
         .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal content */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        
        }
    </style>
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
    <div style="  background-color: rgba(17,17,17,0.5);" class="container-fluid sticky-top">
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
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight"> <span class="large">C</span>YBER<span class="large">A</span>RC</h1>
                    <!--<div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">CyberArc</div>-->
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Safeguarding Kenya's digital frontier</h1>
                    <p class="text-white mb-4 animated slideInRight">The intricacy of cybersecurity hazards and breaches keeps growing, expanding into more expansive virtual and physical domains. There has never been a more significant need for product cybersecurity and data quality.</p>
                    <a href="{{route("web.learn")}}" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">Read More</a>
                    <a href="{{route('web.about')}}" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="{{asset('assets/client/images/robot.png')}}" width="500" height="600" alt="">
                </div>
            </div>
        </div>
    </div>

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


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="{{asset('assets/client/images/section2.jpg')}}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div>
                    <h1 class="mb-4">We Make Your Business Safer with Cyber Security</h1>
                    <p class="mb-4">In today’s connected world, everyone benefits from advanced cybersecurity solutions. At an individual level, a cybersecurity attack can result in everything from identity theft, to extortion attempts, to the loss of important data like family photos. Everyone relies on critical infrastructure like power plants, hospitals, and financial service companies. </p>
<!--                    <p class="mb-4">Securing these and other organizations is essential to keeping our society functioning.</p>-->
<!--                    <div class="row g-3">-->
<!--                        <div class="col-sm-6">-->
<!--                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>-->
<!--                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>-->
<!--                        </div>-->
<!--                        <div class="col-sm-6">-->
<!--                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>-->
<!--                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="d-flex align-items-center mt-4">-->
<!--                        <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>-->
<!--                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>-->
<!--                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>-->
<!--                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>-->
<!--                        <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Services</div>
                    <h1 class="mb-4">Our Excellent Cyber Security Solutions </h1>
                    <p class="mb-4">The Republic of Kenya recognizes cyberspace as a new strategic high ground in the envisioned fifth industrial revolution that represent much more advanced collaborative interactions between humans, machines, processes and systems. Driven by increased connectivity, cyberspace has become the new nervous system supporting the functioning and delivery of services to citizens by Kenyan Government and businesses.</p>
                    <a class="btn btn-primary rounded-pill px-4" href="about.html">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-robot fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Cyber Threats</h5>
                                        <p>Kenya has seen a rise in the frequency, scale, and sophistication of cyber attacks on its critical information infrastructure. </p>
                                        <a class="btn px-3 mt-auto mx-auto" href="about.html">Read More</a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-power-off fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Strategies</h5>
                                        <p>Our analysis will be instrumental in shaping targeted cybersecurity strategies, policies, and interventions.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="about.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-graduation-cap fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Industries</h5>
                                        <p>The Republic of Kenya recognizes cyberspace as a new strategic high ground in the envisioned fifth industrial revolution.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="service.html">Read More</a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-brain fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Solutions</h5>
                                        <p>Cybersecurity needs to be given top priority and incorporated into every stage of digitalization.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="service.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


<!--     Feature Start -->
    <div class="container-fluid bg-primary feature pt-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
<!--                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Why Choose Us</div>-->
                    <h1 class="text-white mb-4">We're Best in the Industry.</h1>
                    <p class="text-light mb-4">The intricacy of cybersecurity hazards and breaches keeps growing, expanding into more expansive virtual and physical domains.</p>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Secure Today for a Safer Tomorrow"</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Let's protect our systems</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>A Secure Network is a Strong Network</span>
                    </div>
                    <div class="row g-4 pt-3">
<!--                        <div class="col-sm-6">-->
<!--                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">-->
<!--                                <i class="fa fa-users fa-3x text-white"></i>-->
<!--&lt;!&ndash;                                <div class="ms-3">&ndash;&gt;-->
<!--&lt;!&ndash;                                    <h2 class="text-white mb-0" data-toggle="counter-up">9999</h2>&ndash;&gt;-->
<!--&lt;!&ndash;                                    <p class="text-white mb-0">Happy Clients</p>&ndash;&gt;-->
<!--&lt;!&ndash;                                </div>&ndash;&gt;-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-sm-6">-->
<!--                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">-->
<!--                                <i class="fa fa-check fa-3x text-white"></i>-->
<!--                                <div class="ms-3">-->
<!--                                    <h2 class="text-white mb-0" data-toggle="counter-up">9999</h2>-->
<!--                                    <p class="text-white mb-0">Project Complete</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/feature.png" alt="">
                </div>
            </div>
        </div>
    </div>
<!--    &lt;!&ndash; Feature End &ndash;&gt;-->


<!--    &lt;!&ndash; Case Start &ndash;&gt;-->
<!--    <div class="container-fluid bg-light py-5">-->
<!--        <div class="container py-5">-->
<!--            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">-->
<!--                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Case Study</div>-->
<!--                <h1 class="mb-4">Explore Our Recent AI Case Studies</h1>-->
<!--            </div>-->
<!--            <div class="row g-4">-->
<!--                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">-->
<!--                    <div class="case-item position-relative overflow-hidden rounded mb-2">-->
<!--                        <img class="img-fluid" src="img/project-1.jpg" alt="">-->
<!--                        <a class="case-overlay text-decoration-none" href="">-->
<!--                            <small>Robotic Automation</small>-->
<!--                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita-->
<!--                            </h5>-->
<!--                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">-->
<!--                    <div class="case-item position-relative overflow-hidden rounded mb-2">-->
<!--                        <img class="img-fluid" src="img/project-2.jpg" alt="">-->
<!--                        <a class="case-overlay text-decoration-none" href="">-->
<!--                            <small>Machine learning</small>-->
<!--                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita-->
<!--                            </h5>-->
<!--                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">-->
<!--                    <div class="case-item position-relative overflow-hidden rounded mb-2">-->
<!--                        <img class="img-fluid" src="img/project-3.jpg" alt="">-->
<!--                        <a class="case-overlay text-decoration-none" href="">-->
<!--                            <small>Predictive Analysis</small>-->
<!--                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita-->
<!--                            </h5>-->
<!--                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- Case End -->


<!-- FAQs Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Popular FAQs</div>
            <h1 class="mb-4">Frequently Asked Questions</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ1">
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What is a cybersecurity threat?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                A cybersecurity threat is any potential malicious attack that seeks to access data, disrupt operations, or cause damage to a computer network or system.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What are common types of cybersecurity threats?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Common types include malware, phishing, ransomware, denial-of-service (DoS) attacks, man-in-the-middle (MitM) attacks, and SQL injection.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can I protect myself from phishing attacks?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Be cautious of unexpected emails, verify the sender's information, avoid clicking on suspicious links, and use email filtering and antivirus software.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                What is ransomware, and how can I prevent it?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Ransomware is a type of malware that encrypts your data and demands a ransom for its release. Prevent it by regularly backing up data, updating software, and avoiding suspicious email attachments and links.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ2">
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What are the signs of a malware infection?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Common signs include slow performance, frequent crashes, unexpected pop-up ads, and unknown programs starting automatically.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                What is threat analysis in cybersecurity?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Threat analysis involves identifying, assessing, and prioritizing potential threats to a computer system or network to mitigate risks effectively.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                What tools are used for threat analysis?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Common tools include Security Information and Event Management (SIEM) systems, Intrusion Detection Systems (IDS), threat intelligence platforms, and vulnerability scanners.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                How often should threat analysis be conducted?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                It should be an ongoing process, but at a minimum, it should be conducted regularly, such as quarterly, or whenever significant changes occur in the network or system.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs Start -->

 <!-- HIBP start -->
 <div class="container-fluid bg-primary newsletter py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid" src="{{asset('assets/client/img/newsletter.png')}}" alt="">
            </div>
            <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Have i Been Pawned</div>
                <h1 class="text-white mb-4">Have I Been Pawned</h1>
                    <div class="position-relative w-100 mt-3 mb-2">
                        <form action="{{route('check-email')}}" method="POST">
                            @csrf
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" name="email" id="email" type="text"
                                placeholder="Enter Your Email" style="height: 48px;">
                            <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </form>
                        @if(isset($result))
                        <div id="results" class="results">
                            <h3>Results:</h3> 
                            @foreach($result as $result)
                            @if(isset($result['Name']) && count($result) > 0)

                            <p style="color: white;">
                                Name : {{$result['Name']}}<br>
                                Title: {{$result['Title']}}<br>
                                Domain: {{$result['Domain']}}<br>
                                Breach Date: {{$result['BreachDate']}}
                            </p>
                            @else
                            <p style="color: red;">No breach found</p>
                        @endif
                            @endforeach
                            @else
                            @endif
                           
                        
                        </div>
                </div>
                
<!--                    <small class="text-white-50">Diam sed sed dolor stet amet eirmod</small>-->
            </div>
        </div>
    </div>
</div>



    <!-- Team Start -->
  <div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">

                <h1 style="text-align: center" class="mb-4">Meet Our Experienced Team Members</h1>
                <p class="mb-4">Meet our expert cybersecurity analysts, dedicated to safeguarding your digital assets with cutting-edge solutions and proactive strategies.
               They leverage advanced technologies and deep industry knowledge to protect your organization from evolving cyber threats.</p>

            </div>
        </div>
    </div>
    
    

            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                            <img class="img-fluid rounded-circle p-4" src="{{asset('assets/client/images/natasha.jpg')}}" alt="">
                            <h5 class="mb-0">Natasha Wangui</h5>
                            <small>Team Lead</small>
                            <br><small>Data Analyst</small>

                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary m-1" href="https://github.com/natasha-kosh"><i class="fab fa-github"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://x.com/w9ngui"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://instagram.com/natasha.wanguii"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://www.linkedin.com/in/natasha-wangui-61373a249/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                            <img class="img-fluid rounded-circle p-4" src="{{asset('assets/client/images/collo.jpg')}}" alt="">
                            <h5 class="mb-0">Collins Mutugi</h5>
                            <small>Backend Developer</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary m-1" href="https://github.com/mutugi001"><i class="fab fa-github"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://x.com/Collins_mutugi_?t=uM6j-aQz23lMIdEI564QxA&s=09"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://www.instagram.com/.mutugi?igsh=MTRoYzNibXVwaHM0Ng=="><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://www.linkedin.com/in/collins-wachira-83865524b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                            <img class="img-fluid rounded-circle p-4" src="{{asset('assets/client/images/becks.jpg')}}" alt="">
                            <h5 class="mb-0">Rebecca Akalwa</h5>
                            <small>Data Analyst</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary m-1" href="https://github.com/cyb3rr31a"><i class="fab fa-github"></i></a>
                                <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://www.linkedin.com/in/rebecca-akalwa-1a045422a/?trk=opento_sprofile_topcard"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                            <img class="img-fluid rounded-circle p-4" src="{{asset('assets/client/images/jedy.jpg')}}" alt="">
                            <h5 class="mb-0">Jeddy Awuor</h5>
                            <small>Market Researcher</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary m-1" href="https://github.com/jeddy-awuor"><i class="fab fa-github"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://www.instagram.com/jeddy.x/"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://www.linkedin.com/in/jeddy-awuor-28509a175/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                            <img class="img-fluid rounded-circle p-4" src="{{asset('assets/client/images/nixon.jpg')}}" alt="">
                            <h5 class="mb-0">Nixon Mwangi</h5>
                            <small>Front-End Developer</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary m-1" href="https://github.com/NixonMwangi6321"><i class="fab fa-github"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://x.com/otfnixhoe?t=1DnWXvuUO4ZJZo3WPpJjEw&s=08"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://www.instagram.com/otf_nixo/"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://www.linkedin.com/in/nixon-mwangi-gitonga-5006a6310/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                            <img class="img-fluid rounded-circle p-4" src="{{asset('assets/client/images/jjane.jpg')}}" alt="">
                            <h5 class="mb-0">Joyjane Wambui</h5>
                            <small>Front-End Developer</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary m-1" href="https://github.com/wambuiiiii"><i class="fab fa-github"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://x.com/JoyjaneG"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://www.instagram.com/wambuiiii._/"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary m-1" href="https://www.linkedin.com/in/joyjane-githinji/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Team End -->


    <!-- Testimonial Start -->
<!--    <div class="container-xxl py-5">-->
<!--        <div class="container py-5">-->
<!--            <div class="row g-5">-->
<!--                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">-->
<!--                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Testimonial</div>-->
<!--                    <h1 class="mb-4">What Say Our Clients!</h1>-->
<!--                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam-->
<!--                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus-->
<!--                        clita duo justo et tempor eirmod magna dolore erat amet</p>-->
<!--                    <a class="btn btn-primary rounded-pill px-4" href="">Read More</a>-->
<!--                </div>-->
<!--                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">-->
<!--                    <div class="owl-carousel testimonial-carousel border-start border-primary">-->
<!--                        <div class="testimonial-item ps-5">-->
<!--                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>-->
<!--                            <p class="fs-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>-->
<!--                            <div class="d-flex align-items-center">-->
<!--                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"-->
<!--                                    style="width: 60px; height: 60px;">-->
<!--                                <div class="ps-3">-->
<!--                                    <h5 class="mb-1">Client Name</h5>-->
<!--                                    <span>Profession</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="testimonial-item ps-5">-->
<!--                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>-->
<!--                            <p class="fs-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>-->
<!--                            <div class="d-flex align-items-center">-->
<!--                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg"-->
<!--                                    style="width: 60px; height: 60px;">-->
<!--                                <div class="ps-3">-->
<!--                                    <h5 class="mb-1">Client Name</h5>-->
<!--                                    <span>Profession</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="testimonial-item ps-5">-->
<!--                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>-->
<!--                            <p class="fs-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>-->
<!--                            <div class="d-flex align-items-center">-->
<!--                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg"-->
<!--                                    style="width: 60px; height: 60px;">-->
<!--                                <div class="ps-3">-->
<!--                                    <h5 class="mb-1">Client Name</h5>-->
<!--                                    <span>Profession</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    &lt;!&ndash; Testimonial End &ndash;&gt;-->


    <!-- Newsletter Start -->
    <div class="container-fluid bg-primary newsletter py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid" src="{{asset('assets/client/img/newsletter.png')}}" alt="">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Newsletter</div>
                    <h1 class="text-white mb-4">Subscribe to our Cybersecurity Newsletter</h1>
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
                    <a href="{{route('web.index')}}" class="d-inline-block mb-3">
                        <h1 class="text-white">Cyber<span class="text-primary"></span>Arc</h1>
                    </a>
                    <p class="mb-0"> Turning the Tide Against Cyber Threats by Turning Threats into Triumphs</p>
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
                
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-white mb-4">Popular Links </h5>
                    <a class="btn btn-link" href="{{route('web.index')}}">Home</a>
                    <a class="btn btn-link" href="{{route('web.learn')}}">Learn</a>
                    <a class="btn btn-link" href="{{('web.about')}}">Contact Us</a>
                    <a class="btn btn-link" href="{{route('web.solution')}}">Solution</a>
                    <a class="btn btn-link" href="{{route('web.events')}}">Events</a>
                   
                </div>
                   
                
             <!--    
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <p class="partnership-text" style="font-weight: bold;"> In partnership with:</p>
                  
                        <a href="https://jhubafrica.com" target="_blank">
                            <img src="img/JHUB Africa.png" alt="JHUB Africa Logo">
                        </a>
                        <a href="https://www.jkuat.ac.ke/" target="_blank">
                            <img src="img/JKUAT.png" alt="JKUAT Logo">
                        </a>
                </div>
             -->
        
        </div>
        
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Cyber Arc</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
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
    <script src="{{asset('assets/client/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/client/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/client/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/client/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/client/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/client/js/main.js')}}"></script>
    <script>
        document.getElementById('emailForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const email = document.getElementById('email').value;

            fetch('/check-email', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ email: email }),
            })
            .then(response => response.json())
            .then(data => {
                const resultsDiv = document.getElementById('results');
                const resultContent = document.getElementById('resultContent');
                resultContent.textContent = JSON.stringify(data, null, 2);
                resultsDiv.style.display = 'block';
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        });
    </script>
</body>

</html>