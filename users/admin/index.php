<?php 

// Start the session
session_start();

if( isset( $_SESSION['username'] ) && ($_SESSION['user_level'] == "Admin")) {
  $_SESSION['user'] = $_SESSION['username'];
}else {
  $location = "../";
  header("location: $location");
}


//include the database connection
include("../connect.php");

$tbl_name="users"; // Table name 

$user = stripslashes($_SESSION['user']);
$user = mysqli_real_escape_string($conn,$user);
//Query
$sql="SELECT id,full_names,profile_photo,username,user_level,twitter_link,instagram_link,linkedin_link,facebook_link FROM $tbl_name where username='{$user}';";
$result=mysqli_query($conn,$sql);
// mysqli_num_rows is counting table row
if(mysqli_num_rows($result) > 0){
  if ($row = mysqli_fetch_assoc($result)) {
    // Access data from each row
    $profilePhotoURLWithOutTimestamp = $row['profile_photo'];


    $timestamp = time(); // Get the current timestamp
    $profile_photo = $profilePhotoURLWithOutTimestamp . "?t=" . $timestamp;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Africa Apes Safaris</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/logo.jpg" rel="icon">
  <link href="../../assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.9);">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../../assets/img/logo.jpg" alt="">
        <span class="d-none d-lg-block" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Africa Apes Safaris</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <!-- <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button> -->
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../<?php echo $profile_photo ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['user']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['user']; ?></h6>
              <span><?php echo $_SESSION['user_level']; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="#">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Website UI</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="experiences">
              <i class="bi bi-circle"></i><span>Experiences</span>
            </a>
          </li>
          <li>
            <a href="packages">
              <i class="bi bi-circle"></i><span>Packages</span>
            </a>
          </li>
          <li>
            <a href="itenaries">
              <i class="bi bi-circle"></i><span>Itenaries</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed " data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="createusers">
              <i class="bi bi-circle"></i><span>Create New User</span>
            </a>
          </li>
          <li>
            <a href="modifyusers">
              <i class="bi bi-circle"></i><span>Modify User's Credentials</span>
            </a>
          </li>
        </ul>
      </li><!-- End Dashboard Nav -->


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <form action="../logout.php" method="POST">
          <input type="hidden" name="location" value=".">
          <button class="nav-link collapsed" type="submit">
            <i class="bi bi-envelope"></i>
            <span>Logout</span>
          </button>
        </form>
      </li><!-- End Logout Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main main-content" style="background: rgba(0, 0, 0, .1);">

    <div class="pagetitle">
      <h1 style="color: #467758;">Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Temperature Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <!-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">Tomorrow</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div> -->

                <div class="card-body">
                  <h5 class="card-title">Experiences</h5>
                  <?php
                      //include the database connection
                      include("../connect.php");

                      //Query
                      $sql="SELECT count(*) as count from experiences;";
                      $result=mysqli_query($conn,$sql);
                      // mysqli_num_rows is counting table row
                      if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_assoc($result);
                      }
                    ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <img src="" alt="" class="icon_temperature">
                    </div>
                    <div class="ps-3">
                      <h6 class="temp"><?php echo $row['count'];?> Records</h6>
                      <span class="text-success small pt-1 fw-bold"><div class="block"></div></span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Temperature Card -->

            <!-- Wind Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <!-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">Tomorrow</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div> -->

                <div class="card-body">
                  <h5 class="card-title">Packages</h5>
                  <?php
                      $sql="SELECT count(*) as count from packages;";
                      $result=mysqli_query($conn,$sql);
                      // mysqli_num_rows is counting table row
                      if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_assoc($result);
                      }
                    ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <img src="../images/icons/partly_cloudy.png" alt="">
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $row['count'];?> Records</h6>
                      <span class="text-success small pt-1 fw-bold"><div class="block"></div></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Wind Card -->

            <!-- Chance of Rain -->
            <div class="col-xxl-4 col-md-6">

              <div class="card info-card customers-card">

                <!-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">Tomorrow</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div> -->

                <div class="card-body">
                  <h5 class="card-title">Itenaries</h5>
                  <?php
                      $sql="SELECT count(*) as count from itenaries;";
                      $result=mysqli_query($conn,$sql);
                      // mysqli_num_rows is counting table row
                      if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_assoc($result);
                      }
                    ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="" alt="" class="icon_rain">
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $row['count'];?> Records</h6>
                      <span class="text-success small pt-1 fw-bold"><div class="block"></div></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Chance of Rain -->

             <!-- crop yield Card -->
          <div class="col-xxl-4 col-md-6">

            <div class="card info-card customers-card">

              <!-- <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">Tomorrow</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div> -->

              <div class="card-body">
                <h5 class="card-title">Team</span></h5>
                <?php
                      $sql="SELECT count(*) as count from users;";
                      $result=mysqli_query($conn,$sql);
                      // mysqli_num_rows is counting table row
                      if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_assoc($result);
                      }
                    ?>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <img src="../images/icons/kilogram_icon.png" alt="" width=40>
                  </div>
                  <div class="ps-3">
                  <h6><?php echo $row['count'];?> Records</h6>
                      <span class="text-success small pt-1 fw-bold"><div class="block"></div></span>

                  </div>
                </div>

              </div>
            </div>

            </div><!-- crop yield Card -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

        <!-- Schedule Card -->
          <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">

            <!-- <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">Tomorrow</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div> -->

            <div class="card-body">
              <h5 class="card-title">Bookings</span></h5>
              <?php
                      $sql="SELECT count(*) as count from booking;";
                      $result=mysqli_query($conn,$sql);
                      // mysqli_num_rows is counting table row
                      if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_assoc($result);
                      }
                    ?>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <img src="../images/icons/calendar_icon.png" alt="" width=40>
                </div>
                <div class="ps-3">
                <h6><?php echo $row['count'];?> Records</h6>
                      <span class="text-success small pt-1 fw-bold"><div class="block"></div></span>

                </div>
              </div>

            </div>
          </div>

          </div><!-- End Schedule Card -->

          <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">

            <!-- <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">Tomorrow</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div> -->

            <div class="card-body">
              <h5 class="card-title">Pending Bookings</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <img src="../images/icons/calendar_icon.png" alt="" width=40>
                </div>
                <div class="ps-3">
                <h6><?php echo $row['count'];?> Records</h6>
                      <span class="text-success small pt-1 fw-bold"><div class="block"></div></span>

                </div>
              </div>

            </div>
          </div>

          </div>

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
  <div class="error-msg"></div>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="background-color: #1b1919;font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
    <div class="copyright" style="color:#444444">
      &copy; Copyright <strong><span>Yves Tresor</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>

<?php 
                  }
                    // Close the database connection
                    mysqli_close($conn);
                  } 
                ?>