<?php



    $host = "localhost";		         // host = localhost because database hosted on the same server where PHP files are hosted
    $dbname = "africaapessafaris";              // Database name
    $username = "root";		// Database username
    $password = "";	        // Database password
    session_start();

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

    if(isset($_POST['location']))
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
        }else if($_POST['location'] === 'UpdatePackage'){
            $sql = "INSERT INTO packages (category,title,duration,elevation,package_includes,summary, details, photo) VALUES ('".$category."','".$title."','".$duration."','".$elevation."','".$package_includes."','".$summary."', '".$details."', '".$newprofilephoto."')";     
        }
                 
		if ($conn->query($sql) === TRUE) {
		    echo "Values inserted in MySQL database table.";
            header('location: admin/experiences');
            exit;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

// Close MySQL connection
$conn->close();

?>

    