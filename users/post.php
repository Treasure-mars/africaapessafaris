<?php



    $host = "localhost";		         // host = localhost because database hosted on the same server where PHP files are hosted
    $dbname = "africaapessafaris";              // Database name
    $username = "root";		// Database username
    $password = "";	        // Database password
    session_start();


    $user_level = $_SESSION['user_level'];
// Establish connection to MySQL database
$conn = new mysqli($host, $username, $password, $dbname);


// Check if connection established successfully
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else { echo "Connected to mysql database. " . $_POST['location']; }

    date_default_timezone_set('Africa/cairo');  // for other timezones, refer:- https://www.php.net/manual/en/timezones.asia.php
    $d = date("Y-m-d");
    $t = date("H:i:s");

    if(isset($_POST['location']) && in_array($_POST['location'], ['AddExperience','AddItenary','AddPackage','UpdateExperience','UpdateItenary','UpdatePackage']))
    {
        $id = $_POST['id'] ?? "";
		$category = $_POST['category'] ?? "";
        $title = $_POST['title'] ?? "";
        $duration = $_POST['duration'] ?? "";
        $elevation = $_POST['elevation'] ?? "";
        $package_includes = $_POST['package_includes'] ?? "";
        $package_excludes = $_POST['package_excludes'] ?? "";
        $summary = $_POST['summary'] ?? "";
        $details = $_POST['details'] ?? "";
        $newprofilephoto = $_POST['newprofilephoto'] ?? "";

        if($_POST['location'] === 'AddExperience'){
            $sql = "INSERT INTO experiences (category,title,duration,elevation,package_includes,summary, details, photo) VALUES ('".$category."','".$title."','".$duration."','".$elevation."','".$package_includes."','".$summary."', '".$details."', '".$newprofilephoto."')"; 
        }else if ($_POST['location'] === 'AddItenary'){
            $sql = "INSERT INTO itenaries (package_excludes,title,duration,elevation,package_includes, package_details, photo) VALUES ('".$package_excludes."','".$title."','".$duration."','".$elevation."','".$package_includes."', '".$details."', '".$newprofilephoto."')"; 
        }else if($_POST['location'] === 'AddPackage'){
            $sql = "INSERT INTO packages (category,title,duration,elevation,package_includes,summary, details, photo) VALUES ('".$category."','".$title."','".$duration."','".$elevation."','".$package_includes."','".$summary."', '".$details."', '".$newprofilephoto."')";     
        }else if ($_POST['location'] === 'UpdateExperience'){
            $sql = "update experiences set category='".$category."',title='".$title."',duration='".$duration."',elevation='".$elevation."',package_includes='".$package_includes."',summary='".$summary."', details='".$details."', photo='".$newprofilephoto."' where id=".$id; 
        }else if ($_POST['location'] === 'UpdateItenary'){
            $sql = "update itenaries set title='".$title."',duration='".$duration."',elevation='".$elevation."',package_includes='".$package_includes."',package_excludes='".$package_excludes."', package_details='".$details."', photo='".$newprofilephoto."' where id=".$id; 
        }else if ($_POST['location'] === 'UpdatePackage'){
            $sql = "update packages set category='".$category."',title='".$title."',duration='".$duration."',elevation='".$elevation."',package_includes='".$package_includes."',summary='".$summary."', details='".$details."', photo='".$newprofilephoto."' where id=".$id; 
        }
                 
		if ($conn->query($sql) === TRUE) {
		    echo "Values inserted in MySQL database table.";
            if($_POST['location'] === 'AddExperience' || $_POST['location'] === 'UpdateExperience'){
                if($user_level === 'Admin'){
                    header('location: admin/experiences');
                    exit;
                }else {
                    header('location: tour_guide/experiences');
                    exit;
                }                
            }else if ($_POST['location'] === 'AddItenary' || $_POST['location'] === 'UpdateItenary'){
                if($user_level === 'Admin'){
                    header('location: admin/itenaries');
                    exit;
                }else {
                    header('location: tour_guide/itenaries');
                    exit;
                }
            }else if ($_POST['location'] === 'AddPackage' || $_POST['location'] === 'UpdatePackage'){
                if($user_level === 'Admin'){
                    header('location: admin/packages');
                    exit;
                }else {
                    header('location: tour_guide/packages');
                    exit;
                }
            }
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

    if(isset($_POST['save']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password
        $profile_photo = "../assets/img/profile/No-profile.jpg";
        if(isset($_POST['user_level'])){
            $user_level = $_POST['user_level'];
        }else{
            $user_level = "Tour_guide";
        }
        if(isset($_POST['enabled'])){
            $enabled = 0;
        }else{
            $enabled = 1;
        }
                
    $sql = "INSERT INTO users (username,password,user_level,profile_photo,enabled) VALUES ('".$username."','".$hashedPassword."','".$user_level."','".$profile_photo."',".$enabled.")"; 
 
        if ($conn->query($sql) === TRUE) {
            echo "Values inserted in MySQL database table.";
            if(isset($_POST['user_level'])){
                header('location: admin/modifyusers');
                exit;
            }else{
                header('location: index.php');
                exit;
            } 
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            if(isset($_POST['user_level'])){
                header('location: admin/modifyusers');
                exit;
            }else{
                header('location: register.php');
                exit;
            } 
        }
    }

if(isset($_POST['update']))
{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password
        if(isset($_POST['user_level'])){
            $user_level = $_POST['user_level'];
        }else{
            $user_level = "Tour_Guide";
        }
        if(isset($_POST['enabled'])){
            $enabled = 1;
        }else{
            $enabled = 0;
        }
                       
    $sql = "UPDATE users SET password='".$hashedPassword."',user_level='".$user_level."',enabled=".$enabled." WHERE username='".$username."'"; 
 
        if ($conn->query($sql) === TRUE) {
            echo "Values updated in MySQL database table.";
            if(isset($_POST['user_level'])){
                header('location: admin/modifyusers');
                exit;
            }else{
                header('location: index.php');
                exit;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            if(isset($_POST['user_level'])){
                header('location: admin/modifyusers');
                exit;
            }else{
                header('location: register.php');
                exit;
            } 
        }
}

if(isset($_POST['updateself']))
{
        $username = $_POST['username'];
        $newusername = $_POST['newusername'];
        $full_names = $_POST['full_names'] ?? "";
        $twitter_link = $_POST['twitter_link'] ?? "";
        $instagram_link = $_POST['instagram_link'] ?? "";
        $facebook_link = $_POST['facebook_link'] ?? "";
        $linkedin_link = $_POST['linkedin_link'] ?? "";
        $newprofilephoto = $_POST['newprofilephoto'] ?? "";
        $location = $_POST['location'];
                
        $sql = "UPDATE users SET username='".$newusername."',twitter_link='".$twitter_link."',full_names='".$full_names."',instagram_link='".$instagram_link."',facebook_link='".$facebook_link."',linkedin_link='".$linkedin_link."',profile_photo='".$newprofilephoto."' WHERE username='".$username."'"; 
        
        if ($conn->query($sql) === TRUE) {
            $successMessage = 'Profile is updated successfully!!!';
            $_SESSION['username'] = $newusername;
            if($user_level === 'Admin'){
                header("location: admin/profile/index.php?update=profile-edit&successMessage=$successMessage");
                exit;
            }else {
                header("location: tour_guide/profile/index.php?update=profile-edit&successMessage=$successMessage");
                exit;
            }
        } else {
            $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
            if($user_level === 'Admin'){
                header("location: admin/profile/index.php?update=profile-edit&successMessage=$errorMessage");
                exit;
            }else {
                header("location: tour_guide/profile/index.php?update=profile-edit&successMessage=$errorMessage");
                exit;
            }
        }
}

if(isset($_POST['updatepassword']))
{
        $username = $_POST['username'];
        $currentpassword = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $renewpassword = $_POST['renewpassword'];
        $location = $_POST['location'];
                
        $sql="SELECT password FROM users where username='{$username}';";
        $result=mysqli_query($conn,$sql);
        // mysqli_num_rows is counting table row
        if(mysqli_num_rows($result) > 0){
            if ($row = mysqli_fetch_assoc($result)) {
                if(password_verify($currentpassword, $row['password'])){
                    if($newpassword === $renewpassword){
                        $hashedPassword = password_hash($newpassword, PASSWORD_DEFAULT); // Hash the password
                        $sql = "UPDATE users SET password='".$hashedPassword."' WHERE username='".$username."'";
                        if ($conn->query($sql) === TRUE) {
                            $successMessage = 'Password is successfully updated!!!';
                            if($user_level === 'Admin'){
                                header("location: admin/profile/index.php?update=profile-change-password&successMessage=$successMessage");
                                exit;
                            }else {
                                header("location: tour_guide/profile/index.php?update=profile-change-password&successMessage=$successMessage");
                                exit;
                            }
                        }
                    }else{
                        $errorMessage = 'Password mismatch!';
                    }                     
                }else{
                    $errorMessage = "Wrong password!";
                }
                if($user_level === 'Admin'){
                    header("location: admin/profile/index.php?update=profile-change-password&errorMessage=$errorMessage");
                    exit;
                }else {
                    header("location: tour_guide/profile/index.php?update=profile-change-password&errorMessage=$errorMessage");
                    exit;
                }
            }
        }
}

if(isset($_POST['disable']))
{
        $username = $_POST['username'];
        $enabled = 0;
               
    $sql = "UPDATE users SET enabled=".$enabled." WHERE username='".$username."'"; 
 
        if ($conn->query($sql) === TRUE) {
            header('location: admin/modifyusers');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header('location: admin/modifyusers'); 
            exit;
        }
}

if(isset($_POST['enable']))
{
        $username = $_POST['username'];
        $enabled = 1;
                 
    $sql = "UPDATE users SET enabled=".$enabled." WHERE username='".$username."'"; 
 
    if ($conn->query($sql) === TRUE) {
        header('location: admin/modifyusers');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header('location: admin/modifyusers'); 
        exit;
    }
}

if(isset($_POST['delete']))
{
        $username = $_POST['username'];
                       
    $sql = "DELETE FROM users WHERE username='".$username."'"; 
 
    if ($conn->query($sql) === TRUE) {
        header('location: admin/modifyusers');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header('location: admin/modifyusers'); 
        exit;
    }
}

if(isset($_POST['action']) && isset($_POST['id']))
{
        $table = $_POST['action'];
        $id = $_POST['id'];
                       
    $sql = "DELETE FROM $table WHERE id='".$id."'"; 
 
    if ($conn->query($sql) === TRUE) {
        $response = [
            "success" => true,
            "message" => "Record deleted successfully"
        ];
    } else {
        $response = [
            "success" => false,
            "message" => "Error deleting record: " . $stmt->error
        ];
    }

    // Set the content type to JSON
    header("Content-Type: application/json");

    // Send the JSON response
    echo json_encode($response);
}

// Close MySQL connection
$conn->close();

?>

    