<?php
ini_set('display_errors', '0');
include_once "../../base/setup2.php";

$id = $_POST["id"];
$sql = "SELECT * FROM member_shop WHERE username = '$id'";
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_array($result);

if ($row['username'] == $id) {
    echo "no";
}
else {
    echo "ok";
}
?>