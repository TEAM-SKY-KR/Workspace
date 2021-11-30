<?php
$con=mysqli_connect("localhost","test","1234","withdaegu");



$title = $_POST["title"];
$description= $_POST["description"];
$address= $_POST["address"];
$phone = $_POST["phone"];



mysqli_query($con,"INSERT INTO member_user_landmark (title, description,address, phone)
VALUES ('$title', '$description','$address','$phone')");

echo $title;

?>