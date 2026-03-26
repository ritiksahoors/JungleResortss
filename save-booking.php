<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "jungle";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection Failed");
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$room = $_POST['room'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$total = $_POST['total'];

$sql = "INSERT INTO bookings
(name, phone, room_name, checkin, checkout, total_price)
VALUES
('$name','$phone','$room','$checkin','$checkout','$total')";

if ($conn->query($sql)) {
    echo "success";
} else {
    echo "error";
}

?>