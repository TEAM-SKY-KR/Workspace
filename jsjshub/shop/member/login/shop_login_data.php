<?php
//ini_set('display_errors', '0');
include_once "../../base/setup2.php";

$id = $_POST["id"];
$pw = $_POST["pw"];


$sql = "SELECT * FROM member_shop WHERE username = '$id'";
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_array($result);

if ($row["username"] == $id) {
    if (password_verify($pw, $row["pw"])) {
        echo "ok";
        session_start();
        $_SESSION['username'] = $id;
    } else {
        echo "no";
    }
} else {
    echo "no";
}
?>

