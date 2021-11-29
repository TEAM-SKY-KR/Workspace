<?php
ini_set('display_errors', '0');
include_once "../../base/setup2.php";

$id = $_POST["id"];
$pw = $_POST["pw"];
$encrypted_password = password_hash($pw, PASSWORD_DEFAULT);
$num = $_POST["num"];
$phone = $_POST["phone"];
$ip = $_SERVER['REMOTE_ADDR'];


$sql = "SELECT * FROM member_shop WHERE username = '$id'";
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_array($result);

if ($row['username'] == $id) {
    echo "no";
} else {
    echo "ok";
    $sql = "INSERT INTO member_shop (username, pw, num, phone, time,ip)
VALUES ('$id', '$encrypted_password','$num', '$phone' ,now(),'$ip')";
    $result = mysqli_query($conn, $sql);
}


?>