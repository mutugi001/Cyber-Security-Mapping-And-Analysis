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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('assets/images/img_2.png')}}">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/client/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/client/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/client/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/client/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/client/css/cyber.css')}}">


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div style="background-color: black" class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <div style="margin-right: 5px" class="logo">
                    <img src="{{asset('assets/client/images/logo.png')}}" alt="" width="230" height="50" class="logo-image">
                </div>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{route('web.index')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{route('web.learn')}}" class="nav-item nav-link">Learn</a>
                        <a href="{{route('web.solution')}}" class="nav-item nav-link" onclick="loadContent('solution')">Solution</a>
                        <a href="{{route('web.events')}}" class="nav-item nav-link">Events</a>
                        <a href="{{route('web.about')}}" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <button type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <!-- Commented out Hero section if not needed -->
    <!-- <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Our Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Our Services</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/hero-img.png" alt="" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Hero End -->

    <br>
    <section id="solution" class="tab-content">
        <h3 style="
    margin-left: 250px;
    text-align: left;"> Cyber Security Solutions</h3>
        <div class="solutions-container">
            <div class="solution-item">
                <i class="fas fa-shield-virus solution-icon"></i>
                <div class="solution-details">
                    <h3>Antivirus and Anti-Malware Software</h3>
                    <p>These programs detect, prevent, and remove malware, including viruses, worms, and Trojans. They offer real-time protection and regular system scans to identify and mitigate threats. Modern antivirus software also provides advanced features like behavior-based detection to identify new and unknown threats.</p>
                </div>
            </div>

            <div class="solution-item">
                <i class="fas fa-shield-alt solution-icon"></i>
                <div class="solution-details">
                    <h3>Firewalls</h3>
                    <p>Firewalls act as a barrier between the internal network and external sources, monitoring and controlling incoming and outgoing network traffic based on security rules. They can prevent unauthorized access to or from private networks and provide a layer of protection against various types of cyber attacks.</p>
                </div>
            </div>

            <div class="solution-item">
                <i class="fas fa-lock solution-icon"></i>
                <div class="solution-details">
                    <h3>Data Encryption</h3>
                    <p>Encryption transforms readable data into an unreadable format using algorithms and encryption keys. This ensures that sensitive information, whether stored (data at rest) or transmitted over networks (data in transit), remains secure and inaccessible to unauthorized users.</p>
                </div>
            </div>

            <div class="solution-item">
                <i class="fas fa-cloud solution-icon"></i>
                <div class="solution-details">
                    <h3>Cloud Security Solutions</h3>
                    <p>Cloud security involves protecting cloud-based infrastructure, applications, and data. Solutions include cloud access security brokers (CASBs), secure web gateways (SWGs), and cloud workload protection platforms (CWPPs) to ensure secure and compliant cloud usage.</p>
                </div>
            </div>

            <div class="solution-item">
                <i class="fas fa-virus solution-icon"></i>
                <div class="solution-details">
                    <h3>Virus Protection</h3>
                    <p>Virus protection is critical for maintaining data integrity and system functionality. This involves using specialized software to detect, quarantine, and remove viruses, ensuring they don't spread to other parts of the system or network.</p>
                </div>
            </div>

            <div class="solution-item">
                <i class="fas fa-user-shield solution-icon"></i>
                <div class="solution-details">
                    <h3>Identity and Access Management (IAM)</h3>
                    <p>IAM solutions manage and control user identities and their access to critical information within an organization. These solutions ensure that only authorized individuals can access specific resources, reducing the risk of data breaches.</p>
                </div>
            </div>

            <div class="solution-item">
                <i class="fas fa-user-secret solution-icon"></i>
                <div class="solution-details">
                    <h3>Intrusion Detection Systems (IDS)</h3>
                    <p>IDS monitor network or system activities for malicious activities or policy violations. They provide detailed information about the types of attacks being attempted and can alert administrators to take appropriate action.</p>
                </div>
            </div>

            <div class="solution-item">
                <i class="fas fa-shield-check solution-icon"></i>
                <div class="solution-details">
                    <h3>Security Information and Event Management (SIEM)</h3>
                    <p>SIEM systems collect and analyze security data from various sources across the network. They provide real-time analysis of security alerts generated by applications and network hardware, helping to detect and respond to potential threats more effectively.</p>
                </div>
            </div>
        </div>
    </section>
    
        <div id="news-container" class="news-box">
            <h2>Latest Hacking Incidents</h2>
            <div class="scrollable-content">
                <ul>
                    <span class="date-display">{{$date}}</span>
                    @foreach($news as $article)
                    <li><i class="fas fa-clock"></i> <strong>{{$article['title']}}</strong> {{$article['description']}}</li>
                    @endforeach
                    <!-- Add more news cases as needed -->
                </ul>
            </div>
        </div>
    

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
    <script src="{{asset('assets/client/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/client/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/client/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/client/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/client/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/client/js/cyber.js')}}"></script>
    <script src="{{asset('assets/client/js/main.js')}}"></script>



  <script>
        $(document).ready(function() {
            // Hide all tab contents initially
            $('.tab-content').hide();

            // Show the solution section if "Solution" link is clicked
            $('a.nav-link[data-target="#solution"]').on('click', function(event) {
                event.preventDefault();
                $('.tab-content').hide(); // Hide all tab contents
                $($(this).data('target')).show(); // Show the targeted tab content
            });

            // Load content if directly accessed via solution.html
            
                $('#solution').show();
                $('#news-container').show();
        });

        // Function to animate solution icons on hover
        document.addEventListener('DOMContentLoaded', function() {
            const solutionIcons = document.querySelectorAll('.solution-icon');

            solutionIcons.forEach(icon => {
                icon.addEventListener('mouseenter', function() {
                    this.classList.add('animate_animated', 'animate_bounce');
                    this.style.cursor = 'pointer';
                });

                icon.addEventListener('mouseleave', function() {
                    this.classList.remove('animate_animated', 'animate_bounce');
                    this.style.cursor = 'default';
                });
            });
        });

        function getCurrentDate() {
            const now = new Date();
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            return now.toLocaleDateString('en-US', options);
        }

        // Update the date display
        function updateDateDisplay() {
            const dateDisplay = document.querySelectorAll('.date-display');
            if (dateDisplay.length) {
                dateDisplay.forEach(display => {
                    display.textContent = getCurrentDate();
                });
            }
        }

        // Update date display when the page loads
        window.onload = function() {
            updateDateDisplay();
        }

        // Update date display every second to keep it current
        setInterval(updateDateDisplay, 1000);

    </script>

</body>

</html>