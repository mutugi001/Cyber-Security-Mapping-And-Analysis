<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AI.Tech - Artificial Intelligence HTML Template</title>
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
  <link rel="icon" href="{{asset('assets/client/images/img_2.png')}}">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/client/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/client/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/client/css/cyber.css')}}">
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
    <div style="  background-color: rgb(16,15,15);" class="container-fluid sticky-top">
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

    <br><br>
    <!-- Hero Start -->
<!--    <div class="container-fluid pt-5 bg-primary hero-header">-->
<!--        <div class="container pt-5">-->
<!--            <div class="row g-5 pt-5">-->
<!--                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">-->
<!--                    <h1 class="display-4 text-white mb-4 animated slideInRight">About Us</h1>-->
<!--                    <nav aria-label="breadcrumb">-->
<!--                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">-->
<!--                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>-->
<!--                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>-->
<!--                            <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>-->
<!--                        </ol>-->
<!--                    </nav>-->
<!--                </div>-->
<!--                <div class="col-lg-6 align-self-end text-center text-lg-end">-->
<!--                    <img class="img-fluid" src="img/hero-img.png" alt="" style="max-height: 300px;">-->
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


    <!-- About Start -->
      <section id="learn" class="tab-content">

    <div class="message-box">
       <h3 style="color: #007bff" class="page-title">Cyber Security Attacks</h3>
      <h4>What is cyber Attack?</h4>
      <p >A cyberattack is a malicious and deliberate attempt by an individual or organization to breach the information system of another individual or organization. Usually, the attacker seeks some type of benefit from disrupting the victim’s network.</p>
      <br>
      <br>
      <p style="font-family: Arial, sans-serif; font-size: 17px; font-weight: bold; line-height: 1.6;">Kenya has seen a rise in the frequency, scale, and sophistication of cyber attacks on its critical information infrastructure. In the period between July 2022 and June 2023, the National KE-CIRT/CC detected more than 855 million cyber threats, placing Kenya among the top three most targeted countries in the region. </p>
      <br>
      <h4><u>Sources of cyber threats</u></h4>
      <br>

      <div class="card" onclick="toggleContent(this)">
        <div class="card-header">
          <i class="fas fa-bug"></i>
          <h6>Malware</h6>
          <i class="fas fa-chevron-down dropdown arrow" ></i>
        </div>
        <div class="hidden-content">
          <p>Malware, short for malicious software, refers to any software intentionally designed to cause damage to a computer, server, client, or computer network. Types of malware include viruses, worms, Trojan horses, ransomware, spyware, adware, and scareware, among others.</p>
        </div>
      </div>
      <div class="card" onclick="toggleContent(this)">
        <div class="card-header">
          <i class="fas fa-fish"></i>
          <h6>Phishing</h6>
          <i class="fas fa-chevron-down dropdown arrow"></i>
          
        </div>
        <div class="hidden-content">
          <p>Phishing is a type of social engineering attack often used to steal user data, including login credentials and credit card numbers. It occurs when an attacker, masquerading as a trusted entity, dupes a victim into opening an email, instant message, or text message.</p>
        </div>
      </div>

      <div class="card" onclick="toggleContent(this)">
        <div class="card-header">
          <i class="fas fa-users"></i>
          <h6>Social Engineering</h6>
          <i class="fas fa-chevron-down dropdown arrow"></i>
        </div>
        <div class="hidden-content">
          <p>Social engineering is the psychological manipulation of people into performing actions or divulging confidential information. It is a type of confidence trick for the purpose of information gathering, fraud, or system access.</p>
        </div>
      </div>

      <div class="card" onclick="toggleContent(this)">
        <div class="card-header">
          <i class="fas fa-ban"></i>
          <h6>Denial of Service</h6>
          <i class="fas fa-chevron-down dropdown arrow"></i>
        </div>
        <div class="hidden-content">
          <p>A Denial of Service (DoS) attack is a cyber-attack in which the perpetrator seeks to make a machine or network resource unavailable to its intended users by temporarily or indefinitely disrupting services of a host connected to the Internet.</p>
        </div>
      </div>

      <div class="card" onclick="toggleContent(this)">
        <div class="card-header">
          <i class="fas fa-user-secret"></i>
          <h6>Man-in-the-middle</h6>
          <i class="fas fa-chevron-down dropdown arrow"></i>
        </div>
        <div class="hidden-content">
          <p>A Man-in-the-Middle (MitM) attack is a cyber-attack where the attacker secretly intercepts and relays messages between two parties who believe they are directly communicating with each other. The attacker can intercept, send, and receive data meant for someone else or not intended to be sent at all.</p>
        </div>
      </div>

    <br>
    <h3><u>Common Sources of Cyber Threats</u></h3>
    <p>Here are common sources of cyber threats against organisations</p>
    <br>
    <p><b>Cybercriminals:</b>These individuals or groups are primarily motivated by financial gain. They employ tactics such as phishing, ransomware, and malware to steal sensitive data, demand ransoms, or exploit organizational resources.</p>
    <br>
    <p><b>Nation_State Actors:</b>State-sponsored hackers often target organizations for espionage, intellectual property theft, or to disrupt operations. These attacks are typically sophisticated and well-funded, aiming to gather strategic information or sabotage critical infrastructure</p>
    <br>
    <p><b>Hacktivists:</b>These individuals or groups carry out attacks for ideological, political, or social reasons. They often aim to deface websites, leak sensitive information, or disrupt services to draw attention to their causes.</p>
    <br>
    <p><b>Third-Party Vendors and Supply Chain:</b>Vendors and suppliers with weak security measures can become entry points for attackers. Compromising these third parties can allow attackers to gain access to the primary organization’s systems and data.</p>
    <br>
    <p><b>Malicious insiders:</b>Insiders, such as current or former employees, contractors, or business partners, can pose significant threats. They might misuse their access to organizational systems and data intentionally or accidentally, leading to data breaches or other security incidents.</p>
    <br>
    <br>
    <h3><u>Cyber Security Solutions </u></h3>
    <br>
    <p><b>Antivirus and Anti-Malware Software:</b>These programs detect, prevent, and remove malware, including viruses, worms, and Trojans. They offer real-time protection and regular system scans to identify and mitigate threats</p>
    <br>
    <p><b>Firewalls:<br></b><i>Network Firewalls:</i> <br>Act as a barrier between the internal network and external sources, monitoring and controlling incoming and outgoing network traffic based on security rules.<br>
                                                 <i>Web Application Firewalls (WAF):</i><br> Protect web applications by filtering and monitoring HTTP traffic between a web application and the Internet</p>
   <br>
                                                 <p><b>Intrusion Detection and Prevention Systems (IDPS):</b><br><i>Intrusion Detection Systems (IDS): </i>Monitor network traffic for suspicious activity and known threats, alerting administrators when such activity is detected.<br><i>Intrusion Prevention Systems (IPS): </i><br>Similar to IDS but can also take action to prevent detected threats, such as blocking traffic or resetting connections.</p>
   <br>
   <p><b>Encryption Solutions:</b><br><i>Data Encryption: </i><br>Encrypts data at rest and in transit to protect sensitive information from unauthorized access.<br><i>End-to-End Encryption: </i><br>Ensures that data is encrypted from the sender to the receiver, making it unreadable by third parties.</p>
  <br>
  <p><b>Cloud Security Solutions:</b>Protect cloud-based infrastructure, applications, and data. This includes cloud access security brokers (CASBs), secure web gateways (SWGs), and cloud workload protection platforms (CWPPs).</p>
  <br>
  <p><b>Security Awareness Training:</b>Programs designed to educate employees about the importance of cybersecurity, recognizing phishing attempts, safe internet practices, and how to handle sensitive information securely</p>
  <br>
  <p><b>Advanced Bot Protection –</b>Prevent business logic attacks from all access points – websites, mobile apps and APIs. Gain seamless visibility and control over bot traffic to stop online fraud through account takeover or competitive price scraping.</p>
  <br>
  <br>
  <br>
  <p><b><u>Notable Cyber Attack Cases </u></b></p>
  <br>
  <P>Here are some notable cases of cyber attacks, illustrating the diversity and sophistication of modern cyber threats in Kenya and around the globe:</P>
  <br>
  <p><b>Distributed Denial of Service (DDoS) Attack in Kenya:</b>In July 2023, Kenya experienced a major DDoS attack that disrupted critical services for several hours. This attack affected the e-Citizen platform, M-Pesa, Kenya Power, and Kenya Railways, among others. The attack was believed to be orchestrated by a group called Anonymous Sudan.</p>
  <br>
  <p><b>Chinese Hackers Targeting Kenyan Agencies:</b>In May 2023, it was reported that Chinese hackers had targeted various Kenyan government agencies. These attacks were part of a broader pattern of cyber espionage aimed at extracting sensitive information</p>
  <br>
  <p><b>Twitter Bitcoin Scam (2020)</b>High-profile Twitter accounts were hijacked to promote a Bitcoin scam through social engineering techniques. This incident raised significant concerns about social media security and the potential for widespread misinformation campaigns​ </p>
 <br>
 <b>Colonial Pipeline Ransomware Attack (2021)</b>Conducted by the DarkSide group, this attack disrupted fuel supplies across the Eastern U.S. Colonial Pipeline shut down operations to contain the ransomware, highlighting critical vulnerabilities in infrastructure and prompting federal cybersecurity responses​ .</p>
 <br>
 <p><b>SolarWinds Supply Chain Attack (2020)</b>A sophisticated attack attributed to Russian state actors, it inserted malicious code into SolarWinds' Orion software, impacting numerous government agencies and major companies. The attack emphasized vulnerabilities in software supply chains​ </p>
 <br>
 <p><b>WannaCry Ransomware Attack (2017)</b>The WannaCry ransomware attack infected hundreds of thousands of computers globally, encrypting files and demanding a ransom in Bitcoin. It exploited the EternalBlue vulnerability in Windows, affecting major sectors including the UK's NHS, which suffered severe disruptions in healthcare services​ </p>
</div>

              <div class="news-box">
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

  </section>
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

    
    <script src="{{asset('assets/client/js/main.js')}}"></script>
<!--    <script src="js/cyber.js"></script>-->
    <script>
      let lastOpenedCard = null;

      function toggleContent(card) {
          const hiddenContent = card.querySelector('.hidden-content');
          const arrow = card.querySelector('.arrow');

          if (hiddenContent.style.display === 'none' || hiddenContent.style.display === '') {
              if (lastOpenedCard && lastOpenedCard !== card) {
                  const lastHiddenContent = lastOpenedCard.querySelector('.hidden-content');
                  const lastArrow = lastOpenedCard.querySelector('.arrow');
                  lastHiddenContent.style.display = 'none';
                  lastArrow.classList.remove('rotate');
              }
              hiddenContent.style.display = 'block';
              arrow.classList.add('rotate');
              lastOpenedCard = card;
          } else {
              hiddenContent.style.display = 'none';
              arrow.classList.remove('rotate');
              lastOpenedCard = null;
          }
      }
    </script>
</body>

</html>