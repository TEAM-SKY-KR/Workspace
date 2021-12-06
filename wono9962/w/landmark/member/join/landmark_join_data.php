<?php
ini_set('display_errors', '0');
include_once "../../base/setup.php";


$id = $_POST["id"];
$pw = $_POST["pw"];
$encrypted_password = password_hash($pw, PASSWORD_DEFAULT);
$email = $_POST["email"];
$phone = $_POST["phone"];
$landmark = $_POST["landmark"];
$ip = $_SERVER['REMOTE_ADDR'];


$sql = "SELECT * FROM member_landmark WHERE username = '$id'";
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_array($result);

if ($row['username'] == $id) {
    echo "no";
} else {
    echo "ok";
    $sql = "INSERT INTO member_landmark (username, pw,landmark,email, phone, time,ip)
VALUES ('$id', '$encrypted_password','$landmark','$email', '$phone',now(),'$ip')";
    $result = mysqli_query($conn, $sql);
}


?>