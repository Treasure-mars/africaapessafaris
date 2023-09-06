<?php

$host = "localhost";
$dbname = "africaapessafaris";
$username = "root";
$password = "";

// Establish connection to MySQL database
$conn = new mysqli($host, $username, $password, $dbname);

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uploadedFile = $_FILES["imageFile"];
    $location = $_POST["location"];
    $action = $_POST["action"] ?? "";
    $uploadDir = "../assets/img/$location/"; // Change this path to match your server directory


    // Specify the file name
    $filename = "example.txt";
    

    if ($uploadedFile["error"] === UPLOAD_ERR_OK) {

        if($action === "add"){
            $sql = "SELECT max(id) + 1 as id FROM $location";
        }else{
            $id = $_POST['id'];
            $sql = "SELECT id FROM $location where id=$id";
        }
            
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $id = $row['id'];

            $combinedName = $location . '-' . $id;

            $originalFileName = basename($uploadedFile["name"]);
            $originalFileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);

            $fileName = $combinedName . '.' . $originalFileExtension;
            $uploadPath = $uploadDir . $fileName;
            file_put_contents($filename, $uploadPath);

            if (move_uploaded_file($uploadedFile["tmp_name"], $uploadPath)) {
                $response = [
                    "success" => true,
                    "imageUrl" => $uploadPath
                ];
            } else {
                $response = [
                    "success" => false,
                    "message" => "Error uploading file"
                ];
            }
        } else {
            $response = [
                "success" => false,
                "message" => "File upload error: " . $uploadedFile["error"]
            ];
        }


    } else {
        $response = [
            "success" => false,
            "message" => "User session not set"
        ];
    }

    header("Content-Type: application/json");
    echo json_encode($response);
    exit;
}
?>
