<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR결제</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function error1() {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '결제오류',
                showConfirmButton: false,
                timer: 700
            })
            setTimeout(function () {
                location.replace("http://localhost/w/user/member/login/user_login.php");
            }, 800);
        }


        function success() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '결제완료!!',
                showConfirmButton: false,
                timer: 700
            })
            setTimeout(function () {
                location.replace("http://localhost/w/user");
            }, 800);
        }
    </script>

</head>
<body>
<?php
include_once "../base/setup.php";
?>

<?php
session_start();
if (isset($_SESSION['username']) == false) {
    echo "<script>error1();</script>";

} else {
    $shop = $_GET["shop"];
    $id = $_SESSION["username"];


    $sql = "UPDATE user_stamp SET use_check = '사용' , use_where='$shop' WHERE username = '$id'";
    $result = mysqli_query($conn, $sql);
    echo "<script>success();</script>";
}


?>
</body>
</html>