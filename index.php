<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Africa Apes Safaris</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="author" content="TMars Studio">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Heebo:wght@900&display=swap");
    .scroll-down-btn {
        display: inline-block;
        text-decoration: none;
      }
      hr{
        transform: rotate(90deg);
      }
      body{
        font-family: "Heebo", sans-serif;
      }
      .scroll-down-btn p {
        margin-top: 1.25rem;
        color: white;
        font-size: .875rem;
        font-weight: 500;
        letter-spacing: .375rem;
        text-indent: .375rem;
        animation: colorText 5s ease-out infinite, nudgeText 5s ease-out infinite;
      }
    .mouse {
      background: #2c333e linear-gradient(transparent 0%, transparent 50%, white 50%, white 100%);
      position: relative;
      width: 38px;
      height: 65px;
      margin: 0 auto;
      border-radius: 6rem;
      background-size: 100% 200%;
      animation: colorSlide 5s linear infinite, nudgeMouse 5s ease-out infinite;
    }
    .mouse:before, .mouse:after {
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      margin: auto;
    }
    .mouse:before {
      width: 34px;
      height: 61px;
      background-color: #121519;
      border-radius: 6rem;
    }
    .mouse:after {
      background-color: white;
      width: .375rem;
      height: .375rem;
      border-radius: 100%;
      animation: trackBallSlide 5s linear infinite;
    }
    @keyframes colorSlide {
      0% { background-position: 0% 100%; }
      20% { background-position: 0% 0%; }
      21% { background-color: #2c333e; }
      29.99% {
        background-color: white;
        background-position: 0% 0%;
      }
      30% {
        background-color: #2c333e;
        background-position: 0% 100%;
      }
      50% { background-position: 0% 0%; }
      51% { background-color: #2c333e; }
      59% {
        background-color: white;
        background-position: 0% 0%;
      }
      60% {
        background-color: #2c333e;
        background-position: 0% 100%;
      }
      80% { background-position: 0% 0%; }
      81% { background-color: #2c333e; }
      90%, 100% {
        background-color: white;
      }
    }
    @keyframes trackBallSlide {
      0% {
        opacity: 1;
        transform: scale(1) translateY(-20px);
      }
      6% {
        opacity: 1;
        transform: scale(0.9) translateY(5px);
      }
      14% {
        opacity: 0;
        transform: scale(0.4) translateY(40px);
      }
      15%, 19% {
        opacity: 0;
        transform: scale(0.4) translateY(-20px);
      }
      28%, 29.99% {
        opacity: 1;
        transform: scale(1) translateY(-20px);
      }
      30% {
        opacity: 1;
        transform: scale(1) translateY(-20px);
      }
      36% {
        opacity: 1;
        transform: scale(0.9) translateY(5px);
      }
      44% {
        opacity: 0;
        transform: scale(0.4) translateY(40px);
      }
      45%, 49% {
        opacity: 0;
        transform: scale(0.4) translateY(-20px);
      }
      58%, 59.99% {
        opacity: 1;
        transform: scale(1) translateY(-20px);
      }
      60% {
        opacity: 1;
        transform: scale(1) translateY(-20px);
      }
      66% {
        opacity: 1;
        transform: scale(0.9) translateY(5px);
      }
      74% {
        opacity: 0;
        transform: scale(0.4) translateY(40px);
      }
      75%, 79% {
        opacity: 0;
        transform: scale(0.4) translateY(-20px);
      }
      88%, 100% {
        opacity: 1;
        transform: scale(1) translateY(-20px);
      }
    }
    @keyframes nudgeMouse {
      0%, 30%, 60%, 90% { transform: translateY(0); }
      20%, 50%, 80% { transform: translateY(8px); }
    }
    @keyframes nudgeText {
      0%, 30%, 60%, 90% { transform: translateY(0); }
      20%, 50%, 80% { transform: translateY(2px); }
    }
    @keyframes colorText {
      21%, 51%, 81% { color: #2c333e; }
      30%, 60%, 90% { color: white; }
    }
  </style>
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Heebo:wght@900&display=swap");
    :root {
  --duration: 6s;
  --wave-duration: calc(var(--duration) * 0.25);
  --text-in-delay: calc(var(--duration) * 0.275);
  --text-in-duration: calc(var(--duration) * 0.1);
  --easing: cubic-bezier(0.5, 0, 0.5, 1);
  --dot-color: #168b3f;
  --dot-color-dark: #977a12;
}

.container1 {
  display: grid;
  align-items: center;
  justify-items: center;
}

.container1 > * {
    grid-area: 1 / 1;
}

.title {
  font-size: 10vmin;
  margin: 0;
}


@media only screen and (max-width: 600px) {
  body {
    animation: none !important;
  }
}
  </style>
  <!-- <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script> -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="."><img src="assets/img/logo.jpg" width="50px" height="50px" class="img-fluid" style="margin-right: 10px;"/></a>
      <a class="btn btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex scrollto" style="background-color: #467758;color:white;" href="#ownpackage" rel="noopener">Book now</a>
      <nav id="navbar" class="navbar" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
        <ul>
          <li><a class="nav-link scrollto" href="about_us/">ABOUT US</a></li>
          <li class="dropdown"><a class="nav-link scrollto" href="#experiences"><span>EXPERIENCES</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="experiences/Safari/"><span>SAFARI</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="experiences/Safari/Gorilla trekking/">Gorilla trekking</a></li>
                  <li><a href="experiences/Safari/Chimpanzee trekking/">Chimpanzee trekking</a></li>
                  <li><a href="experiences/Safari/Game drives/">Game drives</a></li>
                  <li><a href="experiences/Safari/Night games drives/">Night games drives</a></li>
                  <li><a href="experiences/Safari/Boat safari/">Boat safari</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="experiences/Wellness/"><span>WELLNESS</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="experiences/Wellness/Guided walking safaris/">Guided walking safaris</a></li>
                  <li><a href="experiences/Wellness/Nature walks/">Nature walks</a></li>
                  <li><a href="experiences/Wellness/Birds watching/">Birds watching</a></li>
                  <li><a href="experiences/Wellness/Canopy walk way/">Canopy walk way</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="experiences/Culture/"><span>CULTURE</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="experiences/Culture/Local culture/">Local culture</a></li>
                  <li><a href="experiences/Culture/Conservation experience/">Conservation experience</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto" href="#tours"><span>TOUR PACKAGES</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="packages/Community tours/"><span>Community Tours</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="packages/Community tours/kigali_city_walk/">Kigali city walk</a></li>
                  <li><a href="packages/Community tours/karisoke research center/">Karisoke research center</a></li>
                  <li><a href="packages/Community tours/diana fossy fund/">Diana fossy fund</a></li>
                  <li><a href="packages/Community tours/traditional culture/">Traditional culture</a></li>
                  <li><a href="packages/Community tours/poetry making/">Poetry making</a></li>
                  <li><a href="packages/Community tours/ibyi wacu village/">Ibyi wacu village</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="packages/Adventure tours/"><span>Adventure Tours</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="packages/Adventure tours/hiking/">Hiking</a></li>
                  <li><a href="packages/Adventure tours/biking/">Biking</a></li>
                  <li><a href="packages/Adventure tours/cycling/">Cycling</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="packages/Agrotourism experience/"><span>Agrotourism Experience</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="packages/Agrotourism experience/coffee tour experience/">Coffee Tour Experience</a></li>
                  <li><a href="packages/Agrotourism experience/tea tour experience/">Tea Tour Experience</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="packages/heritage tours/"><span>Heritage Tours</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="packages/heritage tours/ethnographic museum/">Ethnographic museum</a></li>
                  <li><a href="packages/heritage tours/kings palace museum/">Kings palace museum</a></li>
                  <li><a href="packages/heritage tours/environmental museum/">Environmental museum</a></li>
                  <li><a href="packages/heritage tours/rwanda arts museum/">Rwanda arts museum</a></li>
                  <li><a href="packages/heritage tours/richard kandt museum/">Richard kandt museum</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto" href="#itenaries"><span>SUGGESTED ITENARIES</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="itenaries/Rwanda - 6 days Virunga mountain gorilla spectacular/">Rwanda - 6 days Virunga mountain gorilla spectacular</a></li>
              <li><a href="itenaries/Rwanda - 7 days Rwanda's rain forests, apes and primates/">Rwanda - 7 days Rwanda's rain forests, apes and primates</a></li>
              <li><a href="itenaries/Rwanda - 8 days Big games and mountain gorillas/">Rwanda - 8 days Big games and mountain gorillas</a></li>
              <li><a href="itenaries/Uganda - 9 days Uganda classic - gorilla, chimpanzee and big game/">Uganda - 9 days Uganda classic - gorilla, chimpanzee and big game</a></li>
              <li><a href="itenaries/Burundi - 3 days Burundi sightseeing tour/">Burundi - 3 days Burundi sightseeing tour</a></li>
              <li><a href="itenaries/DRC - 7 days Giant gorillas and lava lakes in the eastern congo/">DRC - 7 days Giant gorillas and lava lakes in the eastern congo</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">CONTACT US</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container position-relative zindex-5 text-center pt-5 mt-lg-4 mt-xl-5">
      <div class="container1">

        <h1 class="title pt-4 mt-sm-3" style="text-transform: none;">Africa Apes Safaris</h1>
      </div>
      <p class="fs-xl mb-5" style="color: #a4d3b5;">Experience the Adventure of a Lifetime in the Heart of Africa</p><a class="scroll-down-btn scrollto" href="#experiences" data-scroll="" data-scroll-offset="20">
        <div class="mouse mb-3"></div>
        <p class="text-white">Book Your Rwanda Adventure Now!</p></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Offer Section ======= -->
    <section id="locate" class="offer" style="background-color: #467758; color: white;padding: 0px;">
      <div class="container" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12 pt-3 content-align-center themed-grid-col">
            <h1><i class="bi bi-house-door"></i></h1><p style="display: block;margin-block-start: -56px;margin-block-end: unset;margin-inline-start: 54px;">Locate us in: <br>
            Rusizi, Rwanda</p>
          </div>
          <div class="col-lg-4 col-md-6 col-12 pt-3 content-align-center themed-grid-col">
            <h1><i class="bi bi-telephone"></i></h1><p style="display: block;margin-block-start: -56px;margin-block-end: unset;margin-inline-start: 54px;">Get us on: <br>
              (+250) 781 810 199</p>
          </div>
          <div class="col-lg-4 col-md-12 col-12 pt-3 content-align-center">
            <h1><i class="bi bi-envelope"></i></h1><p style="display: block;margin-block-start: -56px;margin-block-end: unset;margin-inline-start: 54px;">Send us on: <br>
              africaapessafaris@gmail.com</p>
          </div>
        </div>
      </div>
    </section>

    <section id="offer" class="about" style="padding: 10px;">
      <div class="container pt-4 py-5">
        <h2 class="pb-2 border-bottom text-center" style="color: #467758;">WHAT WE OFFER</h2>
    
        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
          <div class="col d-flex flex-column align-items-start gap-2">
            <h3 class="fw-bold">WE OFFER REAL ADVENTURE</h3>
            <h6 class="text-body-secondary">Africa Apes Safaris welcomes you to Rwanda, home of the great apes and the Gateway to East Africa. A land of surprising diverse scenery - from the Community Experience.</h6>
          </div>
    
          <div class="col">
            <div class="row row-cols-1 row-cols-sm-2 g-4">
              <div class="col d-flex flex-column gap-2">
                <div class="feature-icon-small d-inline-flex align-items-center justify-content-center fs-4 rounded-3" style="color: white;background-color: #467758;">
                  <i class="bi bi-check2-square"></i>
                </div>
                <h4 class="fw-semibold mb-0">
                  Best Selection</h4>
                <h6 class="text-body-secondary">It is a good option for first-time visitors to Rwanda with a wide choice of accommodation</h6>
              </div>
    
              <div class="col d-flex flex-column gap-2">
                <div class="feature-icon-small d-inline-flex align-items-center justify-content-center fs-4 rounded-3" style="color: white;background-color: #467758;">
                  <i class="bi bi-coin"></i>
                </div>
                <h4 class="fw-semibold mb-0">
                  Best Price Guarantee</h4>
                <h6 class="text-body-secondary">We arrange adventurous Rwanda Tours in a reasonable price with departure Guarantee.</h6>
              </div>
    
              <div class="col d-flex flex-column gap-2">
                <div class="feature-icon-small d-inline-flex align-items-center justify-content-center fs-4 rounded-3" style="color: white;background-color: #467758;">
                  <i class="bi bi-wallet"></i>
                </div>
                <h4 class="fw-semibold mb-0">
                  Secure Payments</h4>
                <h6 class="text-body-secondary">This section deals with bookings and payments needed in securing a holiday arrangement with us.</h6>
              </div>
    
              <div class="col d-flex flex-column gap-2">
                <div class="feature-icon-small d-inline-flex align-items-center justify-content-center fs-4 rounded-3" style="color: white;background-color: #467758;">
                  <i class="bi bi-hourglass-split"></i>
                </div>
                <h4 class="fw-semibold mb-0">
                  24/7 Support</h4>
                <h6 class="text-body-secondary">24/7 On trip support. ... Whatever your travel needs and wishes we support you to achieve your dreams.</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="b-example-divider"></div>


    <section id="experiences" class="experiences" style="padding: 10px;">
        <div class="container pt-4 py-5">
          <div class="row">
            <div class="col-9">
              <h2 class="pb-2 border-bottom text-center" style="color: #467758;">TOURISM PRODUCT WE OFFER</h2> 
            </div>
            <div class="col-3">
              <a class="btn d-inline-flex align-items-center" type="button" href="experiences/" style="background-color: #467758;color:white;">
                Browse more
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-3 align-items-md-center g-5 py-5">
            <div class="col">
              <a href="experiences/Wellness/Birds watching/"><div class="profile-card-4 text-center"><img src="assets/img/tour-1-cover.jpg" alt="Tour 1" class="card__picture-img" width="300px" height="300px">
                  <div class="profile-content">
                      <div class="profile-name" style="background-color: #467758;">Bird watching tour
                      </div>
                      <div class="row" style="padding: 0;margin: 0;">
                          <div class="col" style="padding: 0;margin: 0;">
                              <div class="profile-overview">
                                  <h6>4 nights</h6></div>
                          </div>
                          <div class="col" style="padding: 0;margin: 0;">
                              <div class="profile-overview">
                                  <h6>3 camps</h6></div>
                          </div>
                      </div>
                  </div>
              </div></a>
            </div>

            <div class="col">
              <a href="experiences/Safari/Gorilla trekking/"><div class="profile-card-4 text-center"><img src="assets/img/tour-2-cover.jpg" alt="Tour 2" class="card__picture-img" width="300px" height="300px">
                  <div class="profile-content">
                      <div class="profile-name" style="background-color: #467758;">Gorilla Trekking tour
                      </div>
                      <div class="row" style="padding: 0;margin: 0;">
                          <div class="col" style="padding: 0;margin: 0;">
                              <div class="profile-overview">
                                  <h6>4 nights</h6></div>
                          </div>
                          <div class="col" style="padding: 0;margin: 0;">
                              <div class="profile-overview">
                                  <h6>3 camps</h6></div>
                          </div>
                      </div>
                  </div>
              </div></a>
            </div>

            <div class="col">
              <a href="experiences/Culture/Local culture/"><div class="profile-card-4 text-center"><img src="assets/img/bg-local-culture.jpg" alt="Tour 3" class="card__picture-img" width="300px" height="300px">
                  <div class="profile-content">
                      <div class="profile-name" style="background-color: #467758;">Local Culture Tour
                      </div>
                      <div class="row" style="padding: 0;margin: 0;">
                          <div class="col" style="padding: 0;margin: 0;">
                              <div class="profile-overview">
                                  <h6>4 nights</h6></div>
                          </div>
                          <div class="col" style="padding: 0;margin: 0;">
                              <div class="profile-overview">
                                  <h6>3 camps</h6></div>
                          </div>
                      </div>
                  </div>
              </div></a>
            </div>
          </div>
        </div>
    </section>

    <section style="background-color: rgba(0, 0, 0, .1);" id="ownpackage">
      <div class="container pt-4 py-5">
        <div class="row">
          <div class="col-lg-8">
            <div class><h1 style="color: #467758;">DESIGN YOUR OWN TRIP</h1>
            <hr style="transform: none;"><br>
            <h6 style="font-style: italic;font-family: Verdana, Geneva, Tahoma, sans-serif;">We've Spent More Than 11 Years Helping Travellers To Plan Their Next Adventures</h6><br>
            <h6>Africa Apes Safaris welcomes you to Rwanda, home of the safari and the Gateway to East Africa. Contact us, we’ll create custom tours and Tours packages & help you plan your dream safari.</h6>
          </div>
          </div>
          <div class="col-lg-4">
            <div class="container">
              <div class="row text-center">
                <div class="card-container">
                  <div class="card card-flip border">
                    <div class="front card-block">
                      <table class="p-2">
                        <tr><h4 class="card-title p-2">Chat To An Expert</h4></tr>
                        <tr><h6 class="card-subtitle p-2" style="background-color: rgba(0, 0, 0, .1);color: rgba(37, 31, 31, 0.8);">Click here to get advice and recommendation from our Safari Expert</h6></tr>
                        <tr><h6 class="card-text p-2"><label class="border p-2">Enguire Now</label></h6></tr>
                      </table>
                    </div>
                    <div class="back card-block" style="position: absolute;">
                      <a href="design_own_package/"><table class="p-2">
                        <tr><h4 class="card-title p-2">Chat To An Expert</h4></tr>
                        <tr><h6 class="card-subtitle p-2" style="background-color: #467758;color: white;">Click here to get advice and recommendation from our Safari Expert</h6></tr>
                        <tr><h6 class="card-text p-2 btn btn-outline-successes">Enguire Now</h6></tr>
                      </table></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="tours" class="tours" style="padding: 10px;">
      <div class="container pt-4 py-5 text-center contenedor">
        <div class="row">
          <div class="col-9">
            <h2 class="pb-2 border-bottom text-center" style="color: #467758;">UNIQUE ADVENTURE TOUR PACKAGES</h2>
          </div>
          <div class="col-3">
            <a class="btn d-inline-flex align-items-center" type="button" href="packages/" style="background-color: #467758;color:white;">
              Browse more
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div> 
        <div class="row row-cols-1 row-cols-md-3 align-items-md-center g-5 py-5">
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1 container_foto">
                <img src="assets/img/kcc.jpg" alt="" width="300px" height="300px">
                <article class="text-left lh-1 fw-bold" style="position: absolute;bottom:0px;">
                  <h5>KIGALI CITY <br>WALK</h5>
                  <hr style="transform: none;">
                  <h6>The Kigali Genocide Memorial, Campaign against Genocide Museum</h6>
               </article>
               <div class="ver_mas text-center">
                <a href="packages/Community tours/kigali_city_walk/">READ MORE >></a>
              </div>
              </div>
            </div>
          </div>
    
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1 container_foto">
                <img src="assets/img/hiking.jpg" alt="" width="300px" height="300px">
                <article class="text-left lh-1 fw-bold" style="position: absolute;bottom:0px;">
                  <h5>HIKING <br>TOUR</h5>
                  <hr style="transform: none;">
                  <h6>Hiking sticks, food, drinks and camping option</h6>
               </article>
               <div class="ver_mas text-center">
                <a href="packages/Adventure tours/hiking/">READ MORE >></a>
              </div>
              </div>
            </div>
          </div>
    
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
              <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1 container_foto">
                <img src="assets/img/kingspalace.jpg" alt="" width="300px" height="300px">
                <article class="text-left lh-1 fw-bold" style="position: absolute;bottom:0px;">
                  <h5>KINGS PALACE <br>MUSEUM</h5>
                  <hr style="transform: none;">
                  <h6>Historic Sites, Points of Interest & Landmarks</h6>
               </article>
               <div class="ver_mas text-center">
                <a href="packages/heritage tours/kings palace museum/">READ MORE >></a>
              </div>
              </div>
            </div>
          </div>

        </div>
      </div>
  </section>

  <div class="b-example-divider"></div>

  <section id="itenaries" class="itenaries" style="padding: 10px;">
    <div class="container pt-4 py-5 text-center contenedor">
      <div class="row">
        <div class="col-9">
          <h2 class="pb-2 border-bottom text-center" style="color: #467758;">SUGGESTED ITENARIES</h2>
        </div>
        <div class="col-3">
          <a class="btn d-inline-flex align-items-center" type="button" href="itenaries/" style="background-color: #467758;color:white;">
            Browse more
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div> 
      <div class="row row-cols-1 row-cols-md-3 align-items-md-center g-5 py-5">
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
            <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1 container_foto">
              <img src="assets/img/kcc.jpg" alt="" width="300px" height="300px">
              <article class="text-left lh-1 fw-bold" style="position: absolute;bottom:0px;">
                <h5>Rwanda - 6 days Virunga mountain gorilla spectacular<br>gorilla spectacular</h5>
                <hr style="transform: none;">
                <h6>No sleep, wake up</h6>
             </article>
             <div class="ver_mas text-center">
              <a href="itenaries/Rwanda - 6 days Virunga mountain gorilla spectacular/">READ MORE >></a>
            </div>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
            <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1 container_foto">
              <img src="assets/img/hiking.jpg" alt="" width="300px" height="300px">
              <article class="text-left lh-1 fw-bold" style="position: absolute;bottom:0px;">
                <h5>Rwanda - 7 days Rwanda's rain forests, <br>apes and primates</h5>
                <hr style="transform: none;">
                <h6>Hiking sticks, food, drinks and camping option</h6>
             </article>
             <div class="ver_mas text-center">
              <a href="itenaries/Rwanda - 7 days Rwanda's rain forests, apes and primates/">READ MORE >></a>
            </div>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
            <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1 container_foto">
              <img src="assets/img/kingspalace.jpg" alt="" width="300px" height="300px">
              <article class="text-left lh-1 fw-bold" style="position: absolute;bottom:0px;">
                <h5>Rwanda - 8 days Big games and <br>mountain gorillas</h5>
                <hr style="transform: none;">
                <h6>Historic Sites, Points of Interest & Landmarks</h6>
             </article>
             <div class="ver_mas text-center">
              <a href="itenaries/Rwanda - 8 days Big games and mountain gorillas/">READ MORE >></a>
            </div>
            </div>
          </div>
        </div>

      </div>
    </div>
</section>

<div class="b-example-divider"></div>


    <!-- ======= Team Section ======= -->
    <section id="team" class="team" style="padding: 10px;">
      <div class="container pt-4 py-5" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
        <div class="row">
          <div class="col-4" class="pb-2 border-right" style="border-right: 2px solid #467758;"><h3 style="color: #467758;text-align: end;">OUR TOUR <br>GUIDING TEAM</h3></div>
          <div class="col-8" class="pb-2 text-center"><h5> We are a top tier destination management company , we offer custom tailored<br> different tourism products in East Africa</h5></div>
        </div>
        <hr style="transform: none;">

        <div class="row g-5 py-5">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ngezahayo Pacifique</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ndungutse Gilbert</h4>
                <span>Marketing Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Tuyishime Clement</h4>
                <span>General Manager</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <div class="b-example-divider"></div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="padding: 10px;">
      <div class="container pt-4 py-5" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
        <div class="row">
          <div class="col-4" class="pb-2 border-right" style="border-right: 2px solid #467758;"><h3 style="color: #467758;text-align: end;">REACH <br>OUT TO US</h3></div>
          <div class="col-8" class="pb-2 text-center"><h5> Please do not hesitate to contact us if you have any questions<br> regarding the services that we offer.</h5></div>
        </div>
        <hr style="transform: none;">

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31890.210214315106!2d29.05498056989028!3d-2.414460770004889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c2c034af750ee1%3A0x88409731098976ba!2sBushekeri!5e0!3m2!1sen!2srw!4v1688559272033!5m2!1sen!2srw" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <h6 style="margin-inline-start: 61px;">Rusizi</h6>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <h6 style="margin-inline-start: 61px;">africaapessafaris@gmail.com</h6>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <h6 style="margin-inline-start: 61px;">(+250) 781 810 199</h6>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="home.jsp?" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="required">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="required">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="required">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required="required"></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color: #1b1919; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-12 col-sm-12 footer-contact">
            <h3>Africa Apes Safaris</h3>
            <p>
              Africa Apes Safaris is a tourism company based in Rwanda (The country of thousand hills). It operates in the whole country but it has head office in Rusizi District located in the Western Province/Rwanda.
            </p>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#locate">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="about_us/">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#contact">Contact us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#experiences">Journay</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 footer-links">
            <h4>Need Help?</h4>
            <p>
              Working hours <br>
              <strong>24/7</strong> <br>
              Contact Reservations  <br>
              <strong>(+250) 781 810 199</strong>   <br> 
              Email for Us   <br>
              <strong>africaapessafaris@gmail.com</strong> <br>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Africa Apes Safaris</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="#">TreasureMars</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100063592643186" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/africa_apes_safaris/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/africa-apes-safaris-674a3626a/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
 <script type="text/javascript">
  window.addEventListener("hashchange", () => window.history.pushState({}, "", '/'), {});
 </script>
</body>

</html>