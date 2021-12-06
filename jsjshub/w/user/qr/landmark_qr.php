<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR인증</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function error1() {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '회원이 아닙니다!!',
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
                title: '스탬프적립완료!!',
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
    $landmark = $_GET["landmark"];
    $id = $_SESSION["username"];


    $sql = "INSERT INTO user_stamp (username, landmark, time)
VALUES ('$id','$landmark',now())";
    $result = mysqli_query($conn, $sql);
    echo "<script>success();</script>";
}


?>
</body>
</html>