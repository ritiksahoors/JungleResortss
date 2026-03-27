<?php

include 'admin/conn.php';

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