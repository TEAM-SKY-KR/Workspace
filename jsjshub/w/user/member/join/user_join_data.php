<?php
ini_set('display_errors', '0');
include_once "../../base/setup.php";


$id = $_POST["id"];
$pw = $_POST["pw"];
$encrypted_password = password_hash($pw, PASSWORD_DEFAULT);
$email = $_POST["email"];
$ip = $_SERVER['REMOTE_ADDR'];


$sql = "SELECT * FROM member_user WHERE username = '$id'";
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_array($result);

if ($row['username'] == $id) {
    echo "no";
} else {
    echo "ok";
    $sql = "INSERT INTO member_user (username, pw,email,time,ip)
VALUES ('$id', '$encrypted_password','$email',now(),'$ip')";
    $result = mysqli_query($conn, $sql);
}


?>