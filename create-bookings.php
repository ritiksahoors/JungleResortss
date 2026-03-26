<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "jungle";

$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection Failed");
}

$conn->query("CREATE DATABASE IF NOT EXISTS jungle");

$conn->select_db($db);

$sql = "CREATE TABLE IF NOT EXISTS bookings (

    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    phone VARCHAR(20),
    room_name VARCHAR(150),
    checkin DATE,
    checkout DATE,
    total_price VARCHAR(50),
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)";

$conn->query($sql);

echo "Bookings Table Ready";

?>