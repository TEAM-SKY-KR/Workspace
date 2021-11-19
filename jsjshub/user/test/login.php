<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/main.css">
    <?php
    include_once "../base/b_head.php"
    ?>

</head>
<body>
<?php
include_once "../header/menu.php";
?>
<div class="container">
    <div class="row mb-2">
        <div class="col-12 mt-5">
            <h3 class="page-section-heading text-center">서비스를 이용하기 위해서는 <br>로그인이 필요합니다.</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 mx-auto">
            <div class="p-3">
                <div class="d-flex justify-content-around">
                    <a href="#" class="text-decoration-none">
                        <div class="mb-3 pt-4 pe-5 ps-5 pb-1 btn-outline-dark rounded-3">
                            <i class="fas fa-users fa-5x"></i>
                            <p><h4 class="ms-4 mt-4">일반</h4></p>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <div class="mb-3 pt-4 pe-5 ps-5 pb-1 btn-outline-dark rounded-3">
                            <i class="fas fa-store fa-5x"></i>
                            <p><h4 class="ms-4 mt-4">매장</h4></p>
                        </div>
                    </a>
                </div>
<!--                <div class="input-group mb-3 d-grid">-->
<!--                    <a class="btn text-white"-->
<!--                       href="#" onclick="data_validation()" style="background-color: #4174B9;">로그인</a>-->
<!--                </div>-->
                <div class="col-xl-12 text-center">
                <span><a class="fw-bold" style="text-decoration: none;"
                         href="../join/user_join.php">아직 회원이 아니신가요?</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>