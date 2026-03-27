<?php
include 'admin/conn.php';

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    if ($name == "" || $email == "" || $subject == "" || $message == "") {
        $response["status"] = "error";
        $response["message"] = "All fields are required!";
    } else {

        $sql = "INSERT INTO contact (name, email, subject, message) 
                VALUES ('$name', '$email', '$subject', '$message')";

        if (mysqli_query($conn, $sql)) {
            $response["status"] = "success";
            $response["message"] = "Thank you! We will contact you soon.";
        } else {
            $response["status"] = "error";
            $response["message"] = "Database error!";
        }
    }
} else {
    $response["status"] = "error";
    $response["message"] = "Invalid request!";
}

header('Content-Type: application/json');
echo json_encode($response);
?>