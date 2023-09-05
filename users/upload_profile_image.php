<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uploadDir = "../images/"; // Change this path to match your server directory
    $uploadedFile = $_FILES["imageFile"];
    
    if ($uploadedFile["error"] === UPLOAD_ERR_OK) {

        $originalFileName = basename($uploadedFile["name"]);
        $originalFileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);

        $fileName = 'tempPhoto.' . $originalFileExtension;
        $uploadPath = $uploadDir . $fileName;

        if (move_uploaded_file($uploadedFile["tmp_name"], $uploadPath)) {
            // Update the user's profile_photo column in the database
            // $userId = $_SESSION["user_id"];
            // Update the user's profile_photo column in the database using SQL query
            
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

    header("Content-Type: application/json");
    echo json_encode($response);
}
?>
