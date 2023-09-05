<?php 

// Start the session
session_start();

if( isset( $_SESSION['username'] ) && ($_SESSION['user_level'] == "Admin")) {
  $_SESSION['user'] = $_SESSION['username'];
}else {
  $location = "../";
  header("location: $location");
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

  <!-- Favicons -->
  <link href="../../../assets/img/logo.jpg" rel="icon">
  <link href="../../../assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.9);">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../../../assets/img/logo.jpg" alt="">
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
            <img src="../../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
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
        <a class="nav-link collapsed" href="../">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Website UI</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="#" class="active">
              <i class="bi bi-circle"></i><span>Experiences</span>
            </a>
          </li>
          <li>
            <a href="../packages">
              <i class="bi bi-circle"></i><span>Packages</span>
            </a>
          </li>
          <li>
            <a href="../itenaries">
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
            <a href="../createusers">
              <i class="bi bi-circle"></i><span>Create New User</span>
            </a>
          </li>
          <li>
            <a href="../modifyusers">
              <i class="bi bi-circle"></i><span>Modify User's Credentials</span>
            </a>
          </li>
        </ul>
      </li><!-- End Dashboard Nav -->


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <form action="../../logout.php" method="POST">
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
      <h1 style="color: #467758;">Experiences</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Experiences</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Experiences<span>| <button id="exportButton" data-bs-toggle='modal' data-bs-target='#verticalycentered' class="btn btn-primary">Add Experience</button></span></h5>

              <!-- Experiences -->
              <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        <th scope="col">Title</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Elevation</th>
                        <th scope="col">Package_includes</th>
                        <th scope="col">Summary</th>
                        <th scope="col">Details</th>
                        <th scope="col">Photo</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      //include the database connection
                      include("../../connect.php");

                      //Query
                      $sql="select * from experiences;";
                      $result=mysqli_query($conn,$sql);
                      // mysqli_num_rows is counting table row
                      if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)) {
                          // Access data from each row
                          $id = $row['id'];
                          $category = $row['category'];
                          $title = $row['title'];
                          $duration = $row['duration'];
                          $elevation = $row['elevation'];
                          $package_includes = $row['package_includes'];
                          $summary = $row['summary'];
                          $details = $row['details'];
                          $photo = $row['photo'];
                          // Do something with the data, e.g., print or process
                          echo "<tr><td><a href='#' class='text-primary'>$id</a></td><td>$category</td><td>$title</td><td>$duration</td><td>$elevation</td><td>$package_includes</td><td>$summary</td><td>$details</td><td>$photo</td></tr>";
                      }
                      // Close the database connection
                      mysqli_close($conn);
                    } 
                    ?>

                    </tbody>
                  </table><!-- End Experiences -->

                  <!-- Vertically centered Modal-->
                  <div class="modal fade" id="verticalycentered" tabindex="-1">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Add Experience</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="modalBody">
                          <form action="">
                          <div class="row mb-3">
                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Image</label>
                            <!-- <div class="col-md-8 col-lg-9">
                              <img src="../../assets/img/profile-img.jpg" alt="Profile">
                              <div class="pt-2">
                                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                              </div>
                            </div> -->
                            <div class="col-md-8 col-lg-9">
                              <img id="profileImage" src="../../assets/img/profile/No-profile.jpg" alt="Profile" width="70px">
                                <label for="imageFile" class="btn btn-primary btn-sm" title="Upload new profile image" style="color: white; font-weight: 100">
                                    <i class="bi bi-upload"></i>
                                    <input type="file" id="imageFile" name="imageFile" accept="image/*" style="display: none;">
                                </label>
                          </div>
                          <input type="hidden" id="profilechanged" value='0'>
                          </div>
                          <div class="row mb-3">
                            <label for="category" class="col-sm-2 col-form-label">Choose Category</label>
                            <div class="col-sm-10">
                              <select name="category" id="category" required>
                                <option value="Experience">Experience</option>
                                <option value="Packages">Packages</option>
                                <option value="Itenaries">Itenaries</option>
                              </select>
                            </div>
                            <div class="invalid-feedback">Please, choose category!</div>
                          </div> 
                          <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                              <input type="text" name="title" id="title" required>
                            </div>
                            <div class="invalid-feedback">Please, enter Title!</div>
                          </div> 
                          <div class="row mb-3">
                            <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                            <div class="col-sm-10">
                              <input type="text" name="duration" id="duration" required>
                            </div>
                            <div class="invalid-feedback">Please, enter duration!</div>
                          </div>
                          <div class="row mb-3">
                            <label for="elevation" class="col-sm-2 col-form-label">Elevation</label>
                            <div class="col-sm-10">
                              <input type="text" name="elevation" id="elevation" required>
                            </div>
                            <div class="invalid-feedback">Please, enter elevation!</div>
                          </div>
                          <div class="row mb-3">
                            <label for="package_includes" class="col-sm-2 col-form-label">Package Includes</label>
                            <div class="col-sm-10">
                              <textarea name="package_includes" id="package_includes" required></textarea>
                            </div>
                            <div class="invalid-feedback">Please, enter package_includes!</div>
                          </div>
                          <div class="row mb-3">
                            <label for="summary" class="col-sm-2 col-form-label">Summary</label>
                            <div class="col-sm-10">
                              <textarea name="summary" id="summary" required></textarea>
                            </div>
                            <div class="invalid-feedback">Please, enter summary!</div>
                          </div>
                          <div class="row mb-3">
                            <label for="details" class="col-sm-2 col-form-label">Details</label>
                            <div class="col-sm-10">
                              <textarea name="details" id="details" required></textarea>
                            </div>
                            <div class="invalid-feedback">Please, enter details!</div>
                          </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Vertically centered Modal-->
            </div>
          </div>

        </div>

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
  <script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../assets/vendor/quill/quill.min.js"></script>
  <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>