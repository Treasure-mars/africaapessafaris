<?php
//include the database connection
include("connect.php"); 
// Start the session
session_start();


$tbl_name="users"; // Table name 


$username=$_POST['username']; // username sent from form 
$password=$_POST['password']; // password sent from form 
 
 
// clean the strings 
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);
 
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql);
// mysqli_num_rows is counting table row
if(mysqli_num_rows($result) == 0){
    $profile_photo = "../assets/img/profile/No-profile.jpg";
	$hashedPasswordAdmin = password_hash('Admin', PASSWORD_DEFAULT);
	$sql="insert into $tbl_name (username,password,profile_photo,user_level,enabled) values ('admin','123','$profile_photo','Admin',1)";
	$conn->query($sql);
}
//Query
$sql="SELECT * FROM $tbl_name WHERE username='$username'";
$result=mysqli_query($conn,$sql);
// mysqli_num_rows is counting table row
if(mysqli_num_rows($result) > 0){
$rows = mysqli_fetch_assoc($result);
$hashedPassword = $rows['password'];

// Compare the entered password with the stored hashed password
// if (password_verify($password, $hashedPassword)) {

if (password_verify($password, $hashedPassword)) {
//Direct if user is disabled
		if ($rows['enabled'] == 0) {
			$errorMessage = 'User is disabled, please contact your system admin!!!';
			header("location: index.php?errorMessage=$errorMessage"); //User disabled
		}
		else{
			//Direct pages with different user levels
			if ($rows['user_level'] == 'Admin') {
				$_SESSION['user_level'] = $rows['user_level'];
				$_SESSION['username'] = $rows['username'];
				header('location: admin'); //User1 
			}
			else
			if ($rows['user_level'] == 'Tour_guide') {
				$_SESSION['user_level'] = $rows['user_level'];
				$_SESSION['username'] = $rows['username'];
				header('location: tour_guide'); //User2  
			} 
			else
			if ($rows['user_level'] == 'Manager') {
				$_SESSION['user_level'] = $rows['user_level'];
				$_SESSION['username'] = $rows['username'];
				header('location: manager'); //user 3  
			} 
			else {
				$errorMessage = 'User has no assigned role, please contact your system admin!!!';
				header("location: index.php?errorMessage=$errorMessage"); //User has no assigned role
			}
		}
	}else
	{ 
		$errorMessage = 'Wrong username or Password';
		header("location: index.php?errorMessage=$errorMessage"); //User is not authorized
	}
}
else
{ 
	$errorMessage = 'Wrong username or Password';
	header("location: index.php?errorMessage=$errorMessage"); //User is not authorized
}
 
?>