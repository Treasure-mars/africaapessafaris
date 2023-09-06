<?php
    session_start();
    session_destroy();
    $location = $_POST['location'];
    header("location: $location");
?>