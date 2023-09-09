<?php

include('../users/connect.php');

$package_name = $_POST['package_name'];
$full_names = $_POST['full_names'];
$nationality = $_POST['nationality'];
$email = $_POST['email'];
$number_of_guest = $_POST['number_of_guest'];
$check_in = $_POST['check_in'];
$message = $_POST['message'] ?? "";

$sql = "insert into booking (package_name,full_names,nationality,email,number_of_guest,check_in,message) values('$package_name','$full_names','$nationality','$email',$number_of_guest,'$check_in','$message')";

if(mysqli_query($conn,$sql)){
    header("location: index.php?successmessage=Successful");
    exit;
}else{
    header("location: index.php?errormessage=Unsuccessful");
    exit;
}

$conn->close();

?>