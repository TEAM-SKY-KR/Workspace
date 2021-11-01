<?php
$con=mysqli_connect("172.16.136.200","test","1234","withdaegu");



$name = $_POST["name"];
$explanation= $_POST["text"];
$phone= $_POST["phone"];
$address = $_POST["address"];



mysqli_query($con,"INSERT INTO landmark (name, explanation,phone, address)
VALUES ('$name', '$explanation','$phone','$address')");

?>