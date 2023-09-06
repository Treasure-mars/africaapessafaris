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
        <a class="nav-link " data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users-nav" class="nav-content collapse show " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../createusers/">
              <i class="bi bi-circle"></i><span>Create New User</span>
            </a>
          </li>
          <li>
            <a href="#" class="active">
              <i class="bi bi-circle"></i><span>Modify User's Credentials</span>
            </a>
          </li>
        </ul>
      </li><!-- End Dashboard Nav -->


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../profile/">
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

    <section class="section">
      <div class="row">
        <div class="col-lg-4">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Registered Users</h5>

              <!-- List group with Links and buttons -->
              <div class="list-group">
                <div class="row mb-3">
                <form action="../../post.php" method="POST" style="display: inherit;">
                <input type="hidden" name="username" id="usernameModificationId">
                  <div class="col-4">
                    <button class="btn btn-secondary" type="submit" name="enable">Enable</button>
                  </div>
                  <div class="col-4">
                    <button class="btn btn-secondary" type="submit" name="disable">Disable</button>
                  </div>
                  <div class="col-4">
                    <button class="btn btn-secondary" type="submit" name="delete">Delete</button>
                  </div>
                </form>
                </div>
                <div class="row mb-3">
                  <ul class="sidebar-nav" id="btn-group">
                    <li class="nav-item"><button type="button" class="list-group-item list-group-item-action" disabled><div class="row"><div class="col-6">Username</div><div class="col-6">Role</div></div></button></li>
                    <?php
                      //include the database connection
                      include("../../connect.php");

                      $tbl_name="users"; // Table name 

                      //Query
                      $sql="SELECT * FROM $tbl_name where username<>'{$_SESSION['user']}'";
                      $result=mysqli_query($conn,$sql);
                      // mysqli_num_rows is counting table row
                      if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)) {
                          // Access data from each row
                          $user_level = $row['user_level'];
                          $username = $row['username'];
                          $enabled = $row['enabled'];
                          // Do something with the data, e.g., print or process
                          echo "<li class='nav-item'><button type='button' onclick='toggleActive(this)' class='list-group-item list-group-item-action'><div class='row'><div class='col-6'>$username</div><div class='d-none'>$enabled</div><div class='col-6'>$user_level</div></div></button></li>";
                      }
                      // Close the database connection
                      mysqli_close($conn);
                    } 
                    ?>
                    </ul>
                </div>
              </div><!-- End List group with Links and buttons -->

            </div>
          </div>

        </div>

        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update User</h5>

              <!-- General Form Elements -->
              <form id="userUpdateForm" action="../../post.php" method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="enabled" id="gridCheck2" checked>
                      <label class="form-check-label" for="gridCheck2">
                        User is enabled
                      </label>
                    </div>

                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Roles</label>
                  <div class="col-sm-4 form-floating">
                    <select class="form-select" id="availableroles" multiple aria-label="multiple select example">
                      <option value="Admin" selected>Admin</option>
                    </select>
                    <label for="availableroles">Roles Available</label>
                  </div>
                  <div class="col-sm-1">
                    <button class="col-sm-12 btn btn-secondary" type="button" style="margin-bottom: 10px;" onclick="assignRole();">></button>
                    <button class="col-sm-12 btn btn-secondary" type="button" onclick="removeRole();"><</button>
                  </div>
                  <div class="col-sm-5 form-floating">
                    <select class="form-select" id="assignedroles" name="user_level" multiple aria-label="multiple select example" required>
                      <option value="Tour_guide" selected>Tour_guide</option>
                    </select>
                    <label for="assignedroles">Roles Assigned</label>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10 text-center">
                    <button type="submit" name="update" class="btn btn-primary">Update User</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

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

<script>
function toggleActive(button) {
    var buttons = document.querySelectorAll('.list-group-item-action');
    
    buttons.forEach(function(btn) {
        btn.classList.remove('active');
    });
    
    button.classList.add('active');
    
    // Update the form fields based on the selected user
    var username = button.querySelector('.row .col-6:first-child').textContent;
    var enabled = button.querySelector('.row .d-none').textContent;
    var role = button.querySelector('.row .col-6:last-child').textContent;

    var usernameModificationId = document.getElementById('usernameModificationId');
    var usernameField = document.querySelector('#userUpdateForm input[name="username"]');
    var roleField = document.querySelector('#userUpdateForm select[name="user_level"]');
    var enabledField = document.querySelector('#userUpdateForm input[name="enabled"]');
    
    usernameField.value = username;
    usernameModificationId.value = username;

    if(enabled == '1'){
      enabledField.checked = true;
    }else {
      enabledField.checked = false;
    }
    // Deselect all options
    for (var i = 0; i < roleField.options.length; i++) {
      roleField.options[i].selected = false;
    }

    var roleOption = roleField.querySelector('option[value="' + role + '"]');
    if (!roleOption) {
        var availableroles = document.getElementById('availableroles');
        var selectedOption = availableroles.querySelector('option[value="' + role + '"]');
        // Create a new option element if not found
        var newOption = document.createElement("option");
        newOption.value = role;
        newOption.text = role;
        
        // Add the new option to the target select tag
        roleField.appendChild(newOption);
        availableroles.removeChild(selectedOption);
        roleOption = roleField.querySelector('option[value="' + role + '"]');
    }
    roleOption.selected = true;
}
</script>

<script>
    function assignRole(){
        var availableroles = document.getElementById('availableroles');
        var selectedOption = availableroles.options[availableroles.selectedIndex];
        var selectedValue = selectedOption.value;
        
        // Get the target select tag
        var assignedroles = document.getElementById('assignedroles');
        
        // Create a new option element and set its value and text
        var newOption = document.createElement("option");
        newOption.value = selectedValue;
        newOption.text = selectedValue;
        
        // Add the new option to the target select tag
        assignedroles.appendChild(newOption);

        // Remove the selected option from the source select tag
        availableroles.removeChild(selectedOption);

    }
    function removeRole(){
        var assignedroles = document.getElementById('assignedroles');
        var selectedOption = assignedroles.options[assignedroles.selectedIndex];
        var selectedValue = selectedOption.value;
        
        // Get the target select tag
        var availableroles = document.getElementById('availableroles');
        
        // Create a new option element and set its value and text
        var newOption = document.createElement("option");
        newOption.value = selectedValue;
        newOption.text = selectedValue;
        
        // Add the new option to the target select tag
        availableroles.appendChild(newOption);

        // Remove the selected option from the source select tag
        assignedroles.removeChild(selectedOption);

    }
  </script>

</body>

</html>