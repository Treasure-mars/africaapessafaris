<?php 

// Start the session
session_start();

if( isset( $_SESSION['username'] ) && ($_SESSION['user_level'] == "Admin")) {
  $_SESSION['user'] = $_SESSION['username'];
}else {
  $location = "../";
  header("location: $location");
}

    if(isset($_GET['errorMessage'])) {
      $errorMessage=$_GET['errorMessage'];
      $parentdiv = $_GET['update'];
      $scriptMessage = "<script>
        (() => {
          document.querySelector('#$parentdiv .error-message').classList.add('d-block');
          document.querySelector('[data-bs-target=\'#profile-overview\']').classList.remove('active');
          document.querySelector('#profile-overview').classList.remove('show', 'active');
          const editProfileTab = document.querySelector('[data-bs-target=\'#$parentdiv\']');
          editProfileTab.classList.add('active');
          editProfileTab.setAttribute('aria-selected', 'true');
          document.querySelector('#$parentdiv').classList.add('show', 'active');
        })();
        </script>";
    }else {
      $errorMessage='';
    }
    
    if(isset($_GET['successMessage'])) {
      $successMessage=$_GET['successMessage'];
      $parentdiv = $_GET['update'];
      $scriptMessage = "<script>
      (() => {
        document.querySelector('#$parentdiv .sent-message').classList.add('d-block');
        document.querySelector('[data-bs-target=\'#profile-overview\']').classList.remove('active');
        document.querySelector('#profile-overview').classList.remove('show', 'active');
        const editProfileTab = document.querySelector('[data-bs-target=\'#$parentdiv\']');
        editProfileTab.classList.add('active');
        editProfileTab.setAttribute('aria-selected', 'true');
        document.querySelector('#$parentdiv').classList.add('show', 'active');
      })();
      </script>";
    }else {
      $successMessage='';
    }

    //include the database connection
    include("../../connect.php");

    $tbl_name="users"; // Table name 

    //Query
    $sql="SELECT id,full_names,profile_photo,username,user_level,twitter_link,instagram_link,linkedin_link,facebook_link FROM $tbl_name where username='{$_SESSION['user']}';";
    $result=mysqli_query($conn,$sql);
    // mysqli_num_rows is counting table row
    if(mysqli_num_rows($result) > 0){
      if ($row = mysqli_fetch_assoc($result)) {
        // Access data from each row
        $id = $row['id'];
        $full_names = $row['full_names'];
        $username = $row['username'];
        $profilePhotoURLWithOutTimestamp = $row['profile_photo'];
        $user_level = $row['user_level'];
        $twitter_link = $row['twitter_link'];
        $instagram_link = $row['instagram_link'];
        $linkedin_link = $row['linkedin_link'];
        $facebook_link = $row['facebook_link'];


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
            <img src="../../<?php echo $profile_photo ?>" alt="Profile" class="rounded-circle">
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
              <a class="dropdown-item d-flex align-items-center" href="../profile/">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../profile/">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../faq/">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
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
        <a class="nav-link collapsed " href="../">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Website UI</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="../experiences/">
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
            <a href="../createusers/">
              <i class="bi bi-circle"></i><span>Create New User</span>
            </a>
          </li>
          <li>
            <a href="../modifyusers/">
              <i class="bi bi-circle"></i><span>Modify User's Credentials</span>
            </a>
          </li>
        </ul>
      </li><!-- End Dashboard Nav -->


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link " href="#">
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

  <main id="main" class="main" style="background: rgba(0, 0, 0, .1);">

    <div class="pagetitle">
      <h1 style="color: #467758;">Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../../<?php echo $profile_photo ?>" alt="Profile" class="rounded-circle">
              <h2><?php echo $_SESSION['user']; ?></h2>
              <h3><?php echo $_SESSION['user_level']; ?></h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <!-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li> -->

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $full_names; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Username</div>
                    <div class="col-lg-9 col-md-8"><?php echo $username; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">User Level</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user_level; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Twitter</div>
                    <div class="col-lg-9 col-md-8"><a href="<?php echo $twitter_link; ?>" target="_blank"><?php echo $twitter_link; ?></a></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Instagram</div>
                    <div class="col-lg-9 col-md-8"><a href="<?php echo $instagram_link; ?>" target="_blank"><?php echo $instagram_link; ?></a></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Facebook</div>
                    <div class="col-lg-9 col-md-8"><a href="<?php echo $facebook_link; ?>" target="_blank"><?php echo $facebook_link; ?></a></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Linkedin</div>
                    <div class="col-lg-9 col-md-8"><a href="<?php echo $linkedin_link; ?>" target="_blank"><?php echo $linkedin_link; ?></a></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="../../post.php" method="post" id="updateself">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <!-- <div class="col-md-8 col-lg-9">
                        <img src="../../assets/img/profile-img.jpg" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div> -->
                      <div class="col-md-8 col-lg-9">
                        <img id="profileImage" src="../../<?php echo $profile_photo; ?>" alt="Profile">
                          <label for="imageFile" class="btn btn-primary btn-sm" title="Upload new profile image" style="color: white; font-weight: 100">
                              <i class="bi bi-upload"></i>
                              <input type="file" id="imageFile" name="imageFile" accept="image/*" style="display: none;">
                          </label>
                    </div>
                    <input type="hidden" id="profilechanged" value='0'>
                    </div>

                    <input name="location" type="hidden" value="admin">
                    <input name="username" type="hidden" class="form-control" value="<?php echo $username; ?>">
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="full_names" type="text" class="form-control" id="full_names" value="<?php echo $full_names; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Username</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newusername" type="text" class="form-control" id="newusername" value="<?php echo $username; ?>">
                      </div>
                    </div>

                    <input type="hidden" name="newprofilephoto" id="newprofilephoto" value="">

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">User Level</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="user_level" type="text" class="form-control" id="user_level" value="<?php echo $user_level; ?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="twitter" class="col-md-4 col-lg-3 col-form-label">Twitter</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter_link" type="text" class="form-control" id="twitter_link" value="<?php echo $twitter_link; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="instagram" class="col-md-4 col-lg-3 col-form-label">Instagram</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram_link" type="text" class="form-control" id="instagram_link" value="<?php echo $instagram_link; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="facebook" class="col-md-4 col-lg-3 col-form-label">Facebook</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook_link" type="text" class="form-control" id="facebook_link" value="<?php echo $facebook_link; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin_link" type="text" class="form-control" id="linkedin_link" value="<?php echo $linkedin_link; ?>">
                      </div>
                    </div>

                    <div class="row mb-3 text-center">
                      <div class="error-message"><?php echo "{$errorMessage}";?></div>
                      <div class="sent-message"><?php echo "{$successMessage}";?></div>
                    </div>
                    <input type="hidden" name="updateself" value="updateself">
                    <div class="text-center">
                      <button type="submit" name="updateself" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <!-- <div class="tab-pane fade pt-3" id="profile-settings">

                  //Settings Form
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>//End settings Form

                </div> -->

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="../../post.php" method="post">
                  <input name="username" type="hidden" class="form-control" id="username" value="<?php echo $username; ?>">
                  <input name="location" type="hidden" value="farmer_page">
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="row mb-3 text-center">
                      <div class="error-message"><?php echo "{$errorMessage}";?></div>
                      <div class="sent-message"><?php echo "{$successMessage}";?></div>
                    </div>
                    <div class="text-center">
                      <button type="submit" name="updatepassword" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

              <?php 
                  }
                    // Close the database connection
                    mysqli_close($conn);
                  } 
                ?>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

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
  <?php 
    echo $scriptMessage ?? '';
  ?>
<script>
      document.addEventListener("DOMContentLoaded", function () {
      const imageFileInput = document.getElementById("imageFile");
      const profileImage = document.getElementById("profileImage");
      const newprofilephoto = document.getElementById("newprofilephoto");
      const updateself = document.getElementById("updateself");
      const profilechanged = document.getElementById("profilechanged");

      imageFileInput.addEventListener("change", function () {
          const file = imageFileInput.files[0];
          if (file) {
              const formData = new FormData();
              formData.append("imageFile", file);
              // You can use AJAX to submit the form data to the server
              // Replace 'upload_profile_image.php' with your server-side script
              fetch("../../upload_profile_image.php", {
                  method: "POST",
                  body: formData
              })
              .then(response => response.json())
              .then(data => {
                  if (data.success) {
                    const currentDate = new Date(); const timestamp = currentDate. getTime();
                    var src = "../../" + data.imageUrl + "?t=" + timestamp;
                    profileImage.src = src; // Update the profile image source
                    profilechanged.value = '1';
                  }
              })
              .catch(error => {
                  console.error("Error uploading image:", error);
              });
          }
      });

      updateself.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the form from submitting immediately
        const id = <?php echo $id?>;
        if (profilechanged.value === '1') {
            const file = imageFileInput.files[0];
            if (file) {
                const formData = new FormData();
                formData.append("imageFile", file);
                formData.append("location", "users");
                formData.append("id", id);
                console.log(formData);
                // You can use AJAX to submit the form data to the server
                // Replace 'really_upload_profile_image.php' with your server-side script
                fetch("../../really_upload_profile_image.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => {
                  console.log(response);
                  return response.json();})
                .then(data => {
                  console.log(data);
                    if (data.success) {
                      const currentDate = new Date(); const timestamp = currentDate. getTime();
                      var src = "../../../" + data.imageUrl + "?t=" + timestamp;
                      if(profilechanged.value === '1') {
                        newprofilephoto.value = data.imageUrl;
                        profileImage.src = src; // Update the profile image source
                        updateself.submit(); // Submit the form after image upload and update
                      } 
                      
                    } else {
                      alert("Error uploading image: " + data.message);
                    }
                })
                .catch(error => {
                    console.error("Error uploading image:", error);
                });
            }
        } else {
            newprofilephoto.value = `../assets/img/users/users-${id}.jpg`;
            updateself.submit();
        }
    });
  });
    </script>
</body>

</html>