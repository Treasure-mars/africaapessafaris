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
            <a href="../experiences/">
              <i class="bi bi-circle"></i><span>Experiences</span>
            </a>
          </li>
          <li>
            <a href="../packages/">
              <i class="bi bi-circle"></i><span>Packages</span>
            </a>
          </li>
          <li>
            <a href="#" class="active">
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
      <h1 style="color: #467758;">Itenaries</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Itenaries</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Itenaries<span>| <button id="exportButton" data-bs-toggle='modal' data-bs-target='#verticalycentered' class="btn btn-primary">Add Itenary</button></span></h5>

              <!-- Itenaries -->
              <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Elevation</th>
                        <th scope="col">Package_includes</th>
                        <th scope="col">Package_excludes</th>
                        <th scope="col">Details</th>
                        <th scope="col">Photo</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      //include the database connection
                      include("../../connect.php");

                      //Query
                      $sql="select * from itenaries;";
                      $result=mysqli_query($conn,$sql);
                      // mysqli_num_rows is counting table row
                      if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)) {
                          // Access data from each row
                          $id = $row['id'];
                          $package_excludes = $row['package_excludes'];
                          $title = $row['title'];
                          $duration = $row['duration'];
                          $elevation = $row['elevation'];
                          $package_includes = $row['package_includes'];
                          $package_details = $row['package_details'];
                          $profile_photo = $row['photo'];
                          $timestamp = time(); // Get the current timestamp
                          $photo = $profile_photo . "?t=" . $timestamp;
                          // Do something with the data, e.g., print or process
                          echo "<tr><td><a href='#' data-bs-toggle='modal' data-bs-target='#verticalycentered2' data-id='$id' class='text-primary'>$id</a></td><td>$title</td><td>$duration</td><td>$elevation</td><td>$package_includes</td><td>$package_excludes</td><td>$package_details</td><td><img src='$photo' width='50px'/></td></tr>";
                      }
                      // Close the database connection
                      mysqli_close($conn);
                    } 
                    ?>

                    </tbody>
                  </table><!-- End Itenaries -->

                  <!-- Vertically centered Modal-->
                  <div class="modal fade" id="verticalycentered2" tabindex="-1">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Land UPI</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="modalBody2">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" name="addItenarie" id="submitBtn2" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Vertically centered Modal-->


                  <!-- Vertically centered Modal-->
                  <div class="modal fade" id="verticalycentered" tabindex="-1">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Add Itenarie</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="modalBody">
                          <form action="../../post.php" method="POST" id="addItenarie">
                          <div class="row mb-3">
                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Image</label>
                            <div class="col-md-8 col-lg-9">
                              <img id="profileImage" src="../../assets/img/profile/No-profile.jpg" alt="Profile" width="70px">
                                <label for="imageFile" class="btn btn-primary btn-sm" title="Upload new profile image" style="color: white; font-weight: 100">
                                    <i class="bi bi-upload"></i>
                                    <input type="file" id="imageFile" accept="image/*" style="display: none;">
                                </label>
                          </div>
                          <input type="hidden" id="profilechanged" value='0'>
                          <input type="hidden" name="newprofilephoto" id="newprofilephoto" value="">
                          <input type="hidden" name="location" id="location" value="AddItenary">
                          </div>
                          <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="title" id="title" required>
                            </div>
                            <div class="invalid-feedback">Please, enter Title!</div>
                          </div> 
                          <div class="row mb-3">
                            <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="duration" id="duration" required>
                            </div>
                            <div class="invalid-feedback">Please, enter duration!</div>
                          </div>
                          <div class="row mb-3">
                            <label for="elevation" class="col-sm-2 col-form-label">Elevation</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="elevation" id="elevation" required>
                            </div>
                            <div class="invalid-feedback">Please, enter elevation!</div>
                          </div>
                          <div class="row mb-3">
                            <label for="package_includes" class="col-sm-2 col-form-label">Package Includes</label>
                            <div class="col-sm-10">
                              <textarea name="package_includes" rows="4" class="form-control" id="package_includes" required></textarea>
                            </div>
                            <div class="invalid-feedback">Please, enter package_includes!</div>
                          </div>
                          <div class="row mb-3">
                            <label for="package_excludes" class="col-sm-2 col-form-label">Package Excludes</label>
                            <div class="col-sm-10">
                              <textarea name="package_excludes" class="form-control" id="package_excludes" required></textarea>
                            </div>
                            <div class="invalid-feedback">Please, enter Package Excludes!</div>
                          </div>
                          <div class="row mb-3">
                            <label for="details" class="col-sm-2 col-form-label">Details</label>
                            <div class="col-sm-10">
                              <textarea name="details" class="form-control" rows="8" id="details" required></textarea>
                            </div>
                            <div class="invalid-feedback">Please, enter details!</div>
                          </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" name="addItenarie" id="submitBtn" class="btn btn-primary">Save changes</button>
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

  <script>
      document.addEventListener("DOMContentLoaded", function () {
      const imageFileInput = document.getElementById("imageFile");
      const profileImage = document.getElementById("profileImage");
      const newprofilephoto = document.getElementById("newprofilephoto");
      const updateself = document.getElementById("addItenarie");
      const profilechanged = document.getElementById("profilechanged");
      const modalTitleElement = document.querySelector('#verticalycentered2 .modal-title');
      const modalBodyElement = document.getElementById('modalBody2');
      
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

      document.getElementById("submitBtn").addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the form from submitting immediately

        if (profilechanged.value === '1') {
            const file = imageFileInput.files[0];
            if (file) {
                const formData = new FormData();
                formData.append("imageFile", file);
                formData.append("location", "itenaries");
                formData.append("action", "add");
                console.log(formData);
                // You can use AJAX to submit the form data to the server
                // Replace 'really_upload_profile_image.php' with your server-side script
                fetch("../../really_upload_profile_image.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                      const currentDate = new Date(); const timestamp = currentDate. getTime();
                      var src = "../../" + data.imageUrl + "?t=" + timestamp;
                      if(profilechanged.value === '1') {
                        newprofilephoto.value = "../../" + data.imageUrl;
                        profileImage.src = src; // Update the profile image source
                        updateself.submit(); // Submit the form after image upload and update
                      } 
                      
                    } else {
                      alert("Error uploading image: " + data.message);
                    }
                })
                .catch(error => {
                    console.error("Error uploading image 1:", error);
                });
            }
        } else {
            newprofilephoto.value = profileImage.src;
            updateself.submit();
        }
    });
    
    document.querySelectorAll('[data-id]').forEach(anchor => {
        anchor.addEventListener('click', function () {
          const titleId = this.getAttribute('data-id');
            const row = this.closest('tr');
            const id = row.cells[0].textContent;
            const title = row.cells[1].textContent;
            const duration = row.cells[2].textContent;
            const elevation = row.cells[3].textContent;
            const package_includes = row.cells[4].textContent;
            const package_excludes = row.cells[5].textContent;
            const details = row.cells[6].textContent;
            // Create a temporary div element to parse the HTML
            var tempDiv = document.createElement('div');
            tempDiv.innerHTML = row.cells[7].innerHTML;
            // Find the <img> element within the parsed HTML
            var imgElement = tempDiv.querySelector('img');

            // Check if the <img> element and its src attribute exist
            if (imgElement && imgElement.hasAttribute('src')) {
              var imageSource = imgElement.getAttribute('src');
              console.log('Image source:', imageSource);
            } else {
              console.log('Image or src attribute not found.');
            }

            const catProfile = imageSource;

            modalTitleElement.textContent = title;
            modalBodyElement.innerHTML = `
            <form action="../../post.php" method="POST" id="updateItenarie">
                          <div class="row mb-3">
                            <label for="profileImage2" class="col-md-4 col-lg-3 col-form-label">Image</label>
                            <div class="col-md-8 col-lg-9">
                              <img id="profileImage2" src="${catProfile}" alt="Profile" width="70px">
                                <label for="uploadImage" class="btn btn-primary btn-sm" title="Upload new profile image" style="color: white; font-weight: 100">
                                    <i class="bi bi-upload"></i>
                                    <input type="file" id="uploadImage" accept="image/*" style="display: none;">
                                </label>
                          </div>
                          <input type="hidden" id="profilechanged2" value='0'>
                          <input type="hidden" name="newprofilephoto" id="newprofilephoto2" value="">
                          <input type="hidden" name="location" id="location" value="UpdateItenary">
                          <input type="hidden" name="id" id="id" value="${id}">
                          </div>
                          <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="${title}" name="title" id="title" required>
                            </div>
                            <div class="invalid-feedback">Please, enter Title!</div>
                          </div> 
                          <div class="row mb-3">
                            <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="${duration}" name="duration" id="duration" required>
                            </div>
                            <div class="invalid-feedback">Please, enter duration!</div>
                          </div>
                          <div class="row mb-3">
                            <label for="elevation" class="col-sm-2 col-form-label">Elevation</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="${elevation}" name="elevation" id="elevation" required>
                            </div>
                            <div class="invalid-feedback">Please, enter elevation!</div>
                          </div>
                          <div class="row mb-3">
                            <label for="package_includes" class="col-sm-2 col-form-label">Package Includes</label>
                            <div class="col-sm-10">
                              <textarea name="package_includes" rows="4" class="form-control" id="package_includes" required>${package_includes}</textarea>
                            </div>
                            <div class="invalid-feedback">Please, enter package_includes!</div>
                          </div>
                          <div class="row mb-3">
                            <label for="package_excludes" class="col-sm-2 col-form-label">Package Excludes</label>
                            <div class="col-sm-10">
                              <textarea name="package_excludes" class="form-control" id="package_excludes" required>${package_excludes}</textarea>
                            </div>
                            <div class="invalid-feedback">Please, enter Package Excludes!</div>
                          </div>
                          <div class="row mb-3">
                            <label for="details" class="col-sm-2 col-form-label">Details</label>
                            <div class="col-sm-10">
                              <textarea name="details" class="form-control" rows="8" id="details" required>${details}</textarea>
                            </div>
                            <div class="invalid-feedback">Please, enter details!</div>
                          </div>
                          </form>
                `;

          const profilechanged2 = document.getElementById("profilechanged2");
          const profileImage2 = document.getElementById("profileImage2");
          const newprofilephoto2 = document.getElementById("newprofilephoto2");
          
          const uploadImage = document.getElementById("uploadImage");
      // Rest of your code, including handling the removeImage button
      uploadImage.addEventListener('change', function() {
        const uploadImage = document.getElementById("uploadImage");
          const file = uploadImage.files[0];
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
                    profileImage2.src = src; // Update the profile image source
                    profilechanged2.value = '1';
                  }
              })
              .catch(error => {
                  console.error("Error uploading image:", error);
              });
          }
      });

      document.getElementById("submitBtn2").addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the form from submitting immediately
        
      const updateself2 = document.getElementById("updateItenarie");

        if (profilechanged2.value === '1') {
            const file = uploadImage.files[0];
            if (file) {
                const formData = new FormData();
                formData.append("imageFile", file);
                formData.append("location", "itenaries");
                formData.append("action", "update");
                formData.append("id", id);
                // You can use AJAX to submit the form data to the server
                // Replace 'really_upload_profile_image.php' with your server-side script
                fetch("../../really_upload_profile_image.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                      const currentDate = new Date(); const timestamp = currentDate. getTime();
                      var src = "../../" + data.imageUrl + "?t=" + timestamp;
                      console.log(src);
                      if(profilechanged2.value === '1') {
                        newprofilephoto2.value = "../../" + data.imageUrl;
                        console.log("../../" + data.imageUrl);
                        profileImage2.src = src; // Update the profile image source
                        updateself2.submit(); // Submit the form after image upload and update
                      }
                      
                    } else {
                      alert("Error uploading image: " + data.message);
                    }
                })
                .catch(error => {
                    console.error("Error uploading image 1:", error);
                });
            }
        } else {
            newprofilephoto2.value = profileImage2.src;
            updateself2.submit();
        }
    });

        });
    });
    
  });


</script>

</body>

</html>