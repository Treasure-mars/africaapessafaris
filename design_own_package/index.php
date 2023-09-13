<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  
	<title>Africa Apes Safaris</title>
	<meta content="" name="description">
	<meta content="" name="keywords">
	<meta name="author" content="TMars Studio">
  
	<!-- Favicons -->
	<link href="../assets/img/logo.jpg" rel="icon">
	<link href="../assets/img/logo.jpg" rel="apple-touch-icon">

<!-- Stylesheets -->
<link href="../assets/link_files/bootstrap.css" rel="stylesheet">
<link href="../assets/link_files/style.css" rel="stylesheet">
<link href="../assets/link_files/slick.css" rel="stylesheet">
<link href="../assets/link_files/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="../assets/link_files/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="../assets/link_files/default-theme.css" rel="stylesheet">

<!-- site metas -->
 <!-- Shareble To social media meat-->
   	<!-- site metas -->
 <!-- Shareble To social media meat-->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="../assets/css/style.css" rel="stylesheet">
<style>
    .first a:hover {
          color: #168b3f !important;
      }

      .second {
        position: relative;
        padding: 15px 85px;
        margin-top: -22px;
        top: -9px;
        display: inline-block;
        background-color: #4d6f1d;
      }

      .breadcrumb-outer .second:before {
          position: absolute;
          content: '';
          top: 43%;
          left: 57px;
          width: 37px;
          height: 15px;
          margin-top: -8px;
          border-radius: 0;
          background-color: white;
      }
      .breadcrumb-outer .second:after {
        position: absolute;
        content: '';
        top: 43%;
        right: 60px;
        width: 37px;
        height: 15px;
        margin-top: -8px;
        border-radius: 0;
        background-color: #ffffff;
    }

    .breadcrumb-item .active-2 {
          color: #168b3f !important;
      }

      .breadcrumb-item .active-2 span:hover {
        padding-bottom: 10px !important;
        border-bottom: 3px solid black !important;
      }
      
      .active-2 {
          color: #168b3f !important;
      }

      .first span:hover {
          padding-bottom: 21px !important;
          border-bottom: 3px solid #168b3f !important;

      }

      .breadcrumb>li+li:before {
          content: "" !important;
      }

      .breadcrumb {
          padding: 19px ;
          font-size: 14px;
          color: #aaa !important;
          letter-spacing: 2px ;
          border-radius: 5px !important;
      }

   

      .bi-chevron-double-right {
          color: #aaa !important;
      }



      .first a {
          text-decoration: none !important;
          color: #aaa !important;
      }

      .first a:focus,
      .first a:active {
          outline: none !important;
          box-shadow: none !important;
      }


      .bi-chevron-double-right {
          font-size: 20px !important;
      }

      .sidebar .search-box .form-group input[type="number"],
      .sidebar .search-box .form-group input[type="date"],
      .sidebar .search-box .form-group textarea{
        position:relative;
        line-height:24px;
        padding:10px 10px 10px 20px;
        border:1px solid #cccccc;
        color:#222222;
        display:block;
        font-size:14px;
        width:100%;
        transition:all 500ms ease;
        -moz-transition:all 500ms ease;
        -webkit-transition:all 500ms ease;
        -ms-transition:all 500ms ease;
        -o-transition:all 500ms ease;
      }
      .sidebar .search-box .form-group input[type="number"],
      .sidebar .search-box .form-group input[type="date"]{
        height: 35px;
      }
  </style>
</head>

<body class="hidden-bar-wrapper" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<?php 
  
  include('../users/connect.php');
  
  $sql = "select * from experiences order by category";
  $experiences = mysqli_query($conn, $sql);

  $sql = "select * from packages order by category";
  $packages = mysqli_query($conn, $sql);

  $sql = "select * from itenaries";
  $itenaries = mysqli_query($conn, $sql);

  ?>
<div class="page-wrapper">
 	
	<header id="header" class="fixed-top">

		<div class="container d-flex align-items-center justify-content-between">
			<a href="../"><img src="../assets/img/logo.jpg" width="50px" height="50px" class="img-fluid" style="margin-right: 10px;"/></a>
			<a class="btn btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" style="background-color: #467758;color:white;" href="." rel="noopener">Book now</a>
			<nav id="navbar" class="navbar" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
        <ul>
          <li><a class="nav-link scrollto" href="../about_us/">ABOUT US</a></li>
          <li class="dropdown"><a class="nav-link scrollto" href="#" data-target="experiences"><span>EXPERIENCES</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
					<?php

					$categories = array();

					if (mysqli_num_rows($experiences) > 0) {
						while ($row = mysqli_fetch_assoc($experiences)) {
							$category = $row['category'];
							$title = $row['title'];

							// Add the title to the category array
							if (!isset($categories[$category])) {
								$categories[$category] = array();
							}
							$categories[$category][] = $title;
						}
					}

					// Generate the HTML
					foreach ($categories as $category => $titles) {
						echo '<li class="dropdown"><a href="#" data-target="experiences" data-category-target="' . htmlspecialchars($category, ENT_QUOTES, 'UTF-8') . '"><span>' . strtoupper($category) . '</span> <i class="bi bi-chevron-right"></i></a>';
						echo '<ul>';
						foreach ($titles as $title) {
							echo '<li><a href="#" data-target="experiences" data-category-target="' . htmlspecialchars($category, ENT_QUOTES, 'UTF-8') . '" data-title-target="' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '">' . $title . '</a></li>';
						}
						echo '</ul>';
						echo '</li>';
					}
					?>
					</ul>
				</li>
				<li class="dropdown"><a class="nav-link scrollto" href="#" data-target="packages"><span>TOUR PACKAGES</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
					<?php

					$categories = array();
					if (mysqli_num_rows($packages) > 0) {
						while ($row = mysqli_fetch_assoc($packages)) {
              $rowsPackages[] = $row;
							$category = $row['category'];
							$title = $row['title'];

							// Add the title to the category array
							if (!isset($categories[$category])) {
								$categories[$category] = array();
							}
							$categories[$category][] = $title;
						}
					}

					// Generate the HTML
					foreach ($categories as $category => $titles) {
						echo '<li class="dropdown"><a href="#" data-target="packages" data-category-target="' . htmlspecialchars($category, ENT_QUOTES, 'UTF-8') . '"><span>' . strtoupper($category) . '</span> <i class="bi bi-chevron-right"></i></a>';
						echo '<ul>';
						foreach ($titles as $title) {
							echo '<li><a href="#" data-target="packages" data-category-target="' . htmlspecialchars($category, ENT_QUOTES, 'UTF-8') . '" data-title-target="' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '">' . $title . '</a></li>';
						}
						echo '</ul>';
						echo '</li>';
					}
					?>
					</ul>
				</li>
				<li class="dropdown"><a class="nav-link scrollto" href="#" data-target="itenaries"><span>SUGGESTED ITENARIES</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
					<?php

					if (mysqli_num_rows($itenaries) > 0) {
						while ($row = mysqli_fetch_assoc($itenaries)) {
							$title = $row['title'];
							echo '<li><a href="#" data-target="itenaries" data-title-target="' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '">' . $title . '</a></li>';
						}
					}
					?>
					</ul>
				</li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
		
		  </div>	
		</header>
    <!--End Main Header -->
	<!--Page Title-->
		<section class="page-title" style="background-image:url('../assets/img/bg-design.jpg')" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
    	<div class="auto-container">
        	<h2 style="color: white; text-shadow: none;">DESIGN YOUR OWN PACKAGE</h2>
      </div>
    </section>
    <!--End Page Title-->
    
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container first">
        	<ol class="bread-crumb text-center breadcrumb shadow-lg px-md-4 indigo lighten-6" style="background-color: black;">
            	<li class="breadcrumb-item font-weight-bold " ><a class="black-text text-uppercase  " href="../"><span class="mr-md-3 mr-2">HOME</span></a><i class="bi bi-chevron-double-right" aria-hidden="true"></i></li>
              <li class="breadcrumb-item font-weight-bold"><label class="black-text text-uppercase active-2"><span class="mr-md-3 mr-2">CHAT WITH AN EXPERT</span></label></li>
            </ol>
            <!-- <nav aria-label="breadcrumb " class="second " >
              <ol class="breadcrumb indigo lighten-6 first shadow-lg px-md-4">
                  <li class="breadcrumb-item font-weight-bold " ><a class="black-text text-uppercase  " href="#"><span class="mr-md-3 mr-2">Home</span></a><i class="bi bi-chevron-double-right" aria-hidden="true"></i></li>
                  <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2" href="#"><span class="mr-md-3 mr-2">Community Tours</span></a></li>
              </ol>
          </nav> -->
        </div>
    </div>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix" style="justify-content: center;">
							
				<!--Sidebar Side-->
                <div class="sidebar-side sticky-container col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar default-sidebar">
						<div class="inner sticky-box">

							<!--Blog Category Widget-->
							<!--Donate Help Widget-->
							<div class="sidebar-widget donate-help-widget" style="background-color: #467758;">
								<div class="inner-box" style="background-color: #467758;">
									<h3 class="theme-btn btn-style-three" style="text-align: center;">BOOK US NOW</h3>
								</div>
							</div>
							<!-- Search Form -->
              <form method="post" action="book.php" id="booking">
							<div class="sidebar-widget search-box">
																		 <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                            <div class="field-label"> <sub>Package Name</sub></div>
                                            <select name="package_name">
                                              <option value="" disabled selected>Choose Package</option>
                                              <?php 
                                                foreach ($rowsPackages as $row) {
                                                  echo '<option value="' . $row['title'] . '">' . $row['title'] . '</option>';
                                                }
                                              ?>
                                            </select>
                                        </div>
                                         <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                            <div class="field-label"> <sub>Full Name</sub></div>
                                            <input type="text" placeholder="Full Name" name="full_names" required>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                          <div class="field-label"> <sub>Nationality</sub></div>
                                            <input type="text" placeholder="Nationality" name="nationality" required>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                           <div class="field-label"> <sub>Email</sub></div>
                                            <input type="text" placeholder="Email" name="email" required>
                                        </div>
                                        
                                         <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                           <div class="field-label"> <sub>Number of Guest</sub></div>
                                            <input type="number" placeholder="Number of Guest" oninput="validate();" min=1 name="number_of_guest" required>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                          <div class="field-label"> <sub>Check In</sub></div>
                                            <input type="date" placeholder="Check In" min="<?= date('Y-m-d', strtotime('+1 day')) ?>" name="check_in" required>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                            <div class="field-label"> <sub>Message</sub></div>
                                            <textarea name="message" rows="5" placeholder="Type Message"></textarea>
                                        </div>
							</div>
							<br>
							<!-- End Search Form -->
							<!--Brochure-->
							<div class="sidebar-widget-two brochure-widget">
                
                <div class="brochure-box" style="background-color: #467758;">
									<div class="inner">
										<h1><i class="bi bi-journal-check"></i></h1>
										<p><input type="submit" value="Book Now" style="background: transparent;display: block;margin-block-start: -50px;margin-block-end: unset;margin-inline-start: 54px;color: white;"></p>
									</div>
								
								</div>

							</div>
										
            </form>					
						</div>					
					</aside>
				</div>			
			</div>
		</div>
	</div>

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq" style="padding: 10px;">
  <div class="container pt-4 py-5" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
    <h2 class="pb-2 border-bottom text-center" style="color: #467758;text-shadow: none;">FREQUENTLY ASKED QUESTION</h2> 

    <ul class="faq-list g-5 py-5">

      <li>
        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What currency is used in Rwanda? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
          <p>
            Rwandan Franc (RWF)
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">What time zone is Rwanda in? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
          <p>
            Rwanda shares the same time zone as the rest of Southern Africa, which is two hours ahead of Greenwich Mean Time (GMT) +2 hours, in the Central Africa Time Zone (CAT)
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Can I use my credit cards in Rwanda? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
          <p>
            Yes, MasterCard and Visa are usually accepted throughout Rwanda, including Wilderness destinations. Unfortunately we are unable to accept American Express and Diners Club cards at our Wilderness properties.
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">What do I pack for a safari in Rwanda? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
          <p>
            There may be luggage weight or size restrictions on your journey – so please check the details with your Travel Designer. While Rwanda has no strict dress code, women travellers are advised to dress conservatively. Warm clothing is recommended for the cooler months, and light clothing for summer. Bright colours and white are not advisable on safari.
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">What to see in Rwanda? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
          <p>
            Rwanda is a land of staggering beauty with extraordinary biodiversity, iconic wildlife, volcanoes, montane rainforest and sweeping plains. Discover our areas by boat or 4x4 vehicle in Akagera National Park. Gorilla trekking is a must-do, as well as golden monkey trekking in Volcanoes National Park. Besides the rich wildlife, you can also explore Kigali, the bustling capital city, alive with tradition and culture. The country has many other exceptional national parks, natural forests and volcanic lakes, including Lake Kivu, one of Africa's Great Lakes. 
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Why should I visit Rwanda? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
          <p>
            Rwanda is famous for its mountain gorillas, birdwatching, classic East African safari encounters, cultural experiences, hiking, and our award-winning luxury camps. All set in exclusive, breath-taking regions of Rwanda, ideal for discovering the country’s iconic wildlife.
          </p>
        </div>
      </li>

    </ul>

  </div>
</section><!-- End F.A.Q Section -->


   
		<!--Ended Four Item Carousel-->

    <div class="bottom-parallax">
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
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Contact us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Journay</a></li>
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
				<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
				<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
				<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
				<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
			  </div>
			</div>
		  </footer><!-- End Footer -->
		
		  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
		
	</div>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>

  function validate(){
    var inputValue = document.querySelector('input[name = "number_of_guest"]');
    if(inputValue.value < 1) {
      inputValue.value = null;
    }
  }

  // Add an event listener to all links with a data-target attribute
  document.querySelectorAll('a[data-target]').forEach(function(link) {
  link.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default link behavior
    
    // Get the target URL from the data-target attribute
    const targetUrl = this.getAttribute('data-target');

    // Create a hidden form
    const form = document.createElement('form');
    form.method = 'get';
    form.action = '../tours/index.php'; // Your target URL

    // Add an input field for the 'page' data
    const pageInput = document.createElement('input');
    pageInput.type = 'hidden';
    pageInput.name = 'page';
    pageInput.value = targetUrl; // The value you want to send
    form.appendChild(pageInput);

    if(this.hasAttribute('data-category-target')){
      const category = this.getAttribute('data-category-target');
      // Add an input field for the 'page' data
      const categoryInput = document.createElement('input');
      categoryInput.type = 'hidden';
      categoryInput.name = 'category';
      categoryInput.value = category; // The value you want to send
      form.appendChild(categoryInput);
    }
    if(this.hasAttribute('data-title-target')){
      form.action = '../tours/details/index.php'; // Your target URL
      const title = this.getAttribute('data-title-target');
      // Add an input field for the 'page' data
      const titleInput = document.createElement('input');
      titleInput.type = 'hidden';
      titleInput.name = 'title';
      titleInput.value = title; // The value you want to send
      form.appendChild(titleInput);
    }
    

    // Append the form to the document body
    document.body.appendChild(form);

    // Submit the form
    form.submit();

  });
});

document.getElementById("booking").addEventListener('submit', function(event){
  event.preventDefault();

  if(document.querySelector('select[name = "package_name"]').value === ''){
    alert('choose package');
  }else {
    document.getElementById("booking").submit();
  }

});

</script>


<script language="JavaScript">
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    // document.addEventListener("keydown", function(e) {
    // /*document.onkeydown = function(e) {
    //    "I" key*/
    //   if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
    //     disabledEvent(e);
    //   }
    //   /* "J" key */
    //   if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
    //     disabledEvent(e);
    //   }
    //   /* "S" key + macOS */
    //   if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
    //     disabledEvent(e);
    //   }
    //   /* "U" key */
    //   if (e.ctrlKey && e.keyCode == 85) {
    //     disabledEvent(e);
    //   }
    //   /* "F12" key */
    //   if (event.keyCode == 123) {
    //     disabledEvent(e);
    //   }
    // }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
  
  // <!-- code to disable print screen -->
   document.addEventListener("keyup", function (e) {
    var keyCode = e.keyCode ? e.keyCode : e.which;
            if (keyCode == 44) {
                stopPrntScr();
            }
        });
function stopPrntScr() {

            var inpFld = document.createElement("input");
            inpFld.setAttribute("value", ".");
            inpFld.setAttribute("width", "0");
            inpFld.style.height = "0px";
            inpFld.style.width = "0px";
            inpFld.style.border = "0px";
            document.body.appendChild(inpFld);
            inpFld.select();
            document.execCommand("copy");
            inpFld.remove(inpFld);
        }
       function AccessClipboardData() {
            try {
                window.clipboardData.setData('text', "Access   Restricted");
            } catch (err) {
            }
        }
        setInterval("AccessClipboardData()", 300);
</script>
</body></html>