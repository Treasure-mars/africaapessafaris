<?php include("connect.php");

// Start the session
session_start();


if(isset($_GET['errorMessage'])) {
  $errorMessage=$_GET['errorMessage'];
}else {
  $errorMessage='';
}

?>
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
  <link href="../assets/img/logo.jpg" rel="icon">
  <link href="../assets/img/logo.jpg" rel="apple-touch-icon">

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

  <!-- <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script> -->
</head>

<body>
  <main id="main">
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact" style="padding: 10px;">
      <div class="container pt-4 py-5" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
        <div class="row">
          <div class="col-4" class="pb-2 border-right" style="border-right: 2px solid #467758;text-align:end;"><img src="../assets/img/logo.jpg" class="img-fluid" style="border-radius: 50%;width:20%;"/></div>
          <div class="col-8" class="pb-2 text-center"><h5> Sign into your account </h5></div>
        </div>
        <hr style="transform: none;">

        <div class="row mt-5">

          <div class="col-lg-5 m-auto">

            <form action="login_action.php" method="post" class="php-email-form">
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="username" class="form-control" id="username" placeholder="Your Username" required="required">
                </div>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required="required">
                </div>
              </div>
              <div class="col-md-12 form-group mt-3 mt-md-0">
                <p class="small mb-0">Forgot Password? <a href="register.php">Password recover</a></p>
              </div>
              <div class="my-3">
                <div class="error-message d-block"><?php echo $errorMessage; ?></div>
              </div>
              <div class="text-center"><button type="submit">Login</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="../assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
 <!-- <script type="text/javascript">
  window.addEventListener("hashchange", () => window.history.pushState({}, "", '/'), {});
 </script> -->
</body>

</html>