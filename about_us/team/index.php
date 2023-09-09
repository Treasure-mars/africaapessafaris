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
  <link href="../../assets/img/logo.jpg" rel="icon">
  <link href="../../assets/img/logo.jpg" rel="apple-touch-icon">

<link rel="stylesheet" id="dt-main-css" href="../../assets/css/main.min.css" type="text/css" media="all">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="../../assets/css/style.css" rel="stylesheet">
</head>
<style>
	a {
    	text-decoration: none;
	}
	body {
		font-family: "Open Sans", sans-serif;
		color: #444444;
	}
	#header.header-scrolled, #header.header-inner-pages {
		background: rgba(0, 0, 0, 0.9);
		padding: 12px 0;
	}
</style>
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

</style>
<!-- Stylesheets -->
<link href="../../assets/link_files/style.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="../../assets/link_files/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="../../assets/link_files/default-theme.css" rel="stylesheet">
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<?php 
  
  include('../../users/connect.php');
  
  $sql = "select * from experiences order by category";
  $experiences = mysqli_query($conn, $sql);

  $sql = "select * from packages order by category";
  $packages = mysqli_query($conn, $sql);

  $sql = "select * from itenaries";
  $itenaries = mysqli_query($conn, $sql);

  ?>

	<header id="header" class="fixed-top">

		<div class="container d-flex align-items-center justify-content-between">
			<a href="../../"><img src="../../assets/img/logo.jpg" width="50px" height="50px" class="img-fluid" style="margin-right: 10px;"/></a>
			<a class="btn btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" style="background-color: #467758;color:white;" href="../../design_own_package/" rel="noopener">Book now</a>
			<nav id="navbar" class="navbar" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
				<ul>
				  <li><a class="nav-link scrollto" href="../../">HOME</a></li>
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
							echo '<li class="dropdown"><a href="#" data-target="experiences" data-category-target="' . $category . '"><span>' . strtoupper($category) . '</span> <i class="bi bi-chevron-right"></i></a>';
							echo '<ul>';
							foreach ($titles as $title) {
								echo '<li><a href="#" data-target="experiences" data-category-target="' . $category . '" data-title-target="' . $title . '">' . $title . '</a></li>';
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
							echo '<li class="dropdown"><a href="#" data-target="packages" data-category-target="' . $category . '"><span>' . strtoupper($category) . '</span> <i class="bi bi-chevron-right"></i></a>';
							echo '<ul>';
							foreach ($titles as $title) {
								echo '<li><a href="#" data-target="packages" data-category-target="' . $category . '" data-title-target="' . $title . '">' . $title . '</a></li>';
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
								echo '<li><a href="#" data-target="itenaries" data-title-target="' . $title . '">' . $title . '</a></li>';
							}
						}
						?>
						</ul>
					</li>
				  <li><a class="nav-link scrollto" href="../">ABOUT US</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			  </nav><!-- .navbar -->
	  
		  </div>	
	</header>

  <section class="page-title" style="background-image:url(../../assets/img/teambanner.jpg)" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
    <div class="auto-container">
        <h2 style="color: white; text-shadow: none;">MEET OUR TEAM</h2>
    </div>
  </section>
  <div class="breadcrumb-outer">
    <div class="auto-container first">
        <ol class="bread-crumb text-center breadcrumb shadow-lg px-md-4 indigo lighten-6" style="background-color: black;">
            <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="../"><span class="mr-md-3 mr-2">About Us</span></a><i class="bi bi-chevron-double-right" aria-hidden="true"></i></li>
            <li class="breadcrumb-item font-weight-bold"><label class="black-text text-uppercase active-2" href="#"><span class="mr-md-3 mr-2">Team</span></label></li>
          </ol>
      </div>
  </div>

<main id="page" class="closed-mobile-header">

	<section id="locate" class="offer" style="background-color: #467758; color: white;padding: 0px;">
		<div class="container" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
		  <div class="row">
			<div class="col-lg-4 col-md-6 col-12 pt-3 content-align-center themed-grid-col">
			  <h1 style="font-size: 32px;"><i class="bi bi-house-door"></i></h1><p style="display: block;margin-block-start: -56px;margin-block-end: unset;margin-inline-start: 54px;">Locate us in: <br>
			  Rusizi, Rwanda</p>
			</div>
			<div class="col-lg-4 col-md-6 col-12 pt-3 content-align-center themed-grid-col">
			  <h1 style="font-size: 32px;"><i class="bi bi-telephone"></i></h1><p style="display: block;margin-block-start: -56px;margin-block-end: unset;margin-inline-start: 54px;">Get us on: <br>
				(+250)781 810 199</p>
			</div>
			<div class="col-lg-4 col-md-12 col-12 pt-3 content-align-center">
			  <h1 style="font-size: 32px;"><i class="bi bi-envelope"></i></h1><p style="display: block;margin-block-start: -56px;margin-block-end: unset;margin-inline-start: 54px;">Send us on: <br>
				africaapessafaris@gmail.com</p>
			</div>
		  </div>
		</div>
	  </section>

<style id="the7-fancy-title-css" type="text/css">
.fancy-header {
  background-image: url('../../assets/img/p-16.jpg');
  background-repeat: no-repeat;
  background-position: center top;
  background-size: cover;
  background-color: #222222;
}
.mobile-false .fancy-header {
  background-attachment: fixed;
}
.fancy-header .wf-wrap {
  min-height: 200px;
  padding-top: 0px;
  padding-bottom: 0px;
}
.fancy-header .fancy-title {
  font-size: 30px;
  line-height: 36px;
  color: #ffffff;
  text-transform: none;
}
.fancy-header .fancy-subtitle {
  font-size: 18px;
  line-height: 26px;
  color: #ffffff;
  text-transform: none;
}
.fancy-header .breadcrumbs {
  color: #ffffff;
}
.fancy-header-overlay {
  background: rgba(0,0,0,0.5);
}
@media screen and (max-width: 778px) {
  .fancy-header .wf-wrap {
    min-height: 70px;
  }
  .fancy-header .fancy-title {
    font-size: 30px;
    line-height: 38px;
  }
  .fancy-header .fancy-subtitle {
    font-size: 20px;
    line-height: 28px;
  }
  .fancy-header.breadcrumbs-mobile-off .breadcrumbs {
    display: none;
  }
  #fancy-header > .wf-wrap {
    -webkit-flex-flow: column wrap;
    flex-flow: column wrap;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    padding-bottom: 0px !important;
  }
  .fancy-header.title-left .breadcrumbs {
    text-align: center;
    float: none;
  }
  .breadcrumbs {
    margin-bottom: 10px;
  }
  .breadcrumbs.breadcrumbs-bg {
    margin-top: 10px;
  }
  .fancy-header.title-right .breadcrumbs {
    margin: 10px 0 10px 0;
  }
  #fancy-header .hgroup,
  #fancy-header .breadcrumbs {
    text-align: center;
  }
  .fancy-header .hgroup {
    padding-bottom: 5px;
  }
  .breadcrumbs-off .hgroup {
    padding-bottom: 5px;
  }
  .title-right .hgroup {
    padding: 0 0 5px 0;
  }
  .title-right.breadcrumbs-off .hgroup {
    padding-top: 5px;
  }
  .title-left.disabled-bg .breadcrumbs {
    margin-bottom: 0;
  }
}

</style>

		<section id="team" class="team" style="padding: 10px;">
			<div class="container pt-4 py-5" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
			  <div class="row">
				<div class="col-4" class="pb-2 border-right" style="border-right: 2px solid #467758;"><h3 style="color: #467758;text-align: end;">OUR TOUR <br>GUIDING TEAM</h3></div>
				<div class="col-8" class="pb-2 text-center"><h5> We are a top tier destination management company , we offer custom tailored<br> Primate and Safaris Tours in East Africa</h5></div>
			  </div>
			  <hr style="transform: none;">
	  
			  <div class="row g-5 py-5">
	  
			  <?php

				$sql = "select * from users";
				$experience = mysqli_query($conn, $sql);

				if (mysqli_num_rows($experience) > 0) {
					while ($row = mysqli_fetch_assoc($experience)) {
						$full_names = $row['full_names'];
						$user_level = $row['user_level'];
						$twitter_link = $row['twitter_link'];
						$instagram_link = $row['instagram_link'];
						$facebook_link = $row['facebook_link'];
						$linkedin_link = $row['linkedin_link'];
						$profile_photo = $row['profile_photo'];
						$timestamp = time(); // Get the current timestamp
						$photo = $profile_photo . "?t=" . $timestamp;
						$trimmedString = str_replace("../", "../../", $photo);

						echo "
						<div class='col-lg-4 col-md-6 d-flex align-items-stretch'>
						<div class='member'>
							<div class='member-img'>
							<img src='$trimmedString' class='img-fluid' alt=''>
							<div class='social'>
								<a href='$twitter_link'><i class='bi bi-twitter'></i></a>
								<a href='$facebook_link'><i class='bi bi-facebook'></i></a>
								<a href='$instagram_link'><i class='bi bi-instagram'></i></a>
								<a href='$linkedin_link'><i class='bi bi-linkedin'></i></a>
							</div>
							</div>
							<div class='member-info'>
							<h4>$full_names</h4>
							<span>$user_level</span>
							</div>
						</div>
						</div>
						
						";
						
					}
				}
				?>

			  </div>
	  
			</div>
</section>
	
</main>
	
	<!-- !Footer -->
	<footer id="footer" style="background-color: #1b1919; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">

		<div class="footer-top">
		  <div class="container">
			<div class="row">
	
			  <div class="col-lg-4 col-md-12 col-sm-12 footer-contact">
				<h3>Africa Apes Safaris</h3>
				<p>
				  Africa Apes Safaris is a tourism company based in vicinity of Volcanoes National Park (VNP). It operates in the whole country but it has head office in Rusizi District located in the Western Province/Rwanda.
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
	  </footer><!-- #footer -->


	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- #page -->

				<!-- Vendor JS Files -->
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>
  <script>

$(document).ready(function() {
  var front = document.getElementsByClassName("front");
  var back = document.getElementsByClassName("back");

  var highest = 0;
  var absoluteSide = "";

  for (var i = 0; i < front.length; i++) {
    if (front[i].offsetHeight > back[i].offsetHeight) {
      if (front[i].offsetHeight > highest) {
        highest = front[i].offsetHeight;
        absoluteSide = ".front";
      }
    } else if (back[i].offsetHeight > highest) {
      highest = back[i].offsetHeight;
      absoluteSide = ".back";
    }
  }
  $(".front").css("height", highest);
  $(".back").css("height", highest);
  $(absoluteSide).css("position", "absolute");
});
    console.clear();

Splitting();

// Replay animation by hiding & showing the element again
let el = document.body;
el.addEventListener("click", function (e) {
  el.hidden = true;
  requestAnimationFrame(() => {
    el.hidden = false;
  });
});

// Small helper to make sure the animation stays in sync.
requestAnimationFrame(() => {
  document.body.dataset.play = true;
});
  </script> 
<script>
  // Add an event listener to all links with a data-target attribute
  document.querySelectorAll('a[data-target]').forEach(function(link) {
  link.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default link behavior
    
    // Get the target URL from the data-target attribute
    const targetUrl = this.getAttribute('data-target');

    // Create a hidden form
    const form = document.createElement('form');
    form.method = 'get';
    form.action = '../../tours/index.php'; // Your target URL

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
      form.action = '../../tours/details/index.php'; // Your target URL
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

</script>

<script language="JavaScript">
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    /*document.onkeydown = function(e) {
       "I" key*/
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      /* "J" key */
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      /* "S" key + macOS */
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      /* "U" key */
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      /* "F12" key */
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
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

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="pswp__bg"></div>
	<div class="pswp__scroll-wrap">
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>
		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<div class="pswp__counter"></div>
				<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
				<button class="pswp__button pswp__button--share" title="Share"></button>
				<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div> 
			</div>
			<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
			</button>
			<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
			</button>
			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>
		</div>
	</div>
</div>



<div class="mobile-sticky-header-overlay"></div><div class="iso-preloader dt-posts-preload dt-posts-preload-active" style="display: none;"><div class="dt-posts-preload-activity"></div></div>
</body>
</html>