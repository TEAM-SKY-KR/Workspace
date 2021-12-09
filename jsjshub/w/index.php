<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="user/css/main.css">
    <?php
    include_once "user/base/b_head.php"
    ?>

</head>
<body>
<?php
include_once "user/header/menu.php";
?>
<div class="container">
    <div class="row mb-2">
        <div class="col-12 mt-5">
            <h3 class="page-section-heading text-center">서비스를 이용하기 위해서는 <br>회원가입이 필요합니다.</h3>
            <h4 class="page-section-heading text-center text-secondary">가입하실 서비스를 선택해주세요.</h4>
        </div>
    </div>
    <div class="row">
<!--        <div class="col-12">-->
<!--            <div class="row">-->
<!--                <div class="col-4">-->
<!--                    <a href="http://localhost/w/landmark/member/login/landmark_login.php" class="text-decoration-none">-->
<!--                        <div class="mb-3 pt-4 pe-5 ps-5 pb-1 btn-outline-dark rounded-3">-->
<!--                            <i class="fas fa-map-marked-alt fa-5x"></i>-->
<!--                            <p><h4 class="ms-3 mt-4">관광지</h4></p>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-4">-->
<!--                    <a href="http://localhost/w/user/member/login/user_login.php" class="text-decoration-none">-->
<!--                        <div class="mb-3 pt-4 pe-5 ps-5 pb-1 btn-outline-dark rounded-3">-->
<!--                            <i class="fas fa-users fa-5x"></i>-->
<!--                            <p><h4 class="ms-4 mt-4">일반</h4></p>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-4">-->
<!--                    <a href="http://localhost/w/shop/member/login/shop_login.php" class="text-decoration-none">-->
<!--                        <div class="mb-3 pt-4 pe-5 ps-5 pb-1 btn-outline-dark rounded-3">-->
<!--                            <i class="fas fa-store fa-5x"></i>-->
<!--                            <p><h4 class="ms-4 mt-4">매장</h4></p>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
        <div class="col-lg-5 mx-auto">
            <div class="p-3">
                <div class="d-flex justify-content-around">
                    <a href="http://localhost/w/landmark/member/login/landmark_login.php" class="text-decoration-none">
                        <div class="mb-3 pt-4 pe-5 ps-5 pb-1 btn-outline-dark rounded-3">
                            <i class="fas fa-map-marked-alt fa-5x"></i>
                            <p><h4 class="ms-3 mt-4">관광지</h4></p>
                        </div>
                    </a>
                    <a href="http://localhost/w/user/member/login/user_login.php" class="text-decoration-none">
                        <div class="mb-3 pt-4 pe-5 ps-5 pb-1 btn-outline-dark rounded-3">
                            <i class="fas fa-users fa-5x"></i>
                            <p><h4 class="ms-4 mt-4">일반</h4></p>
                        </div>
                    </a>
                    <a href="http://localhost/w/shop/member/login/shop_login.php" class="text-decoration-none">
                        <div class="mb-3 pt-4 pe-5 ps-5 pb-1 btn-outline-dark rounded-3">
                            <i class="fas fa-store fa-5x"></i>
                            <p><h4 class="ms-4 mt-4">매장</h4></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>