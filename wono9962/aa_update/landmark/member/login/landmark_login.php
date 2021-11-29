<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- validation check -->
    <script src="js/login_validation.js"></script>

    <link rel="stylesheet" href="../../css/main.css">
    <?php
    include_once "../base/b_head.php"
    ?>
    <?php
    if (isset($_SESSION["username"]) == true) {
        echo "<script>location.href='http://localhost/user/'</script>";
    }
    ?>

</head>
<body>
<?php
include_once "../header/menu.php";
?>
<div class="container">
    <div class="row mb-2">
        <div class="col-2 mt-2 mx-auto">
            <div class="rounded-3 bg-danger text-center text-white mx-3 py-1 px-1">관광지용</div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12 mt-2">
            <h3 class="page-section-heading text-center">서비스를 이용하기 위해서는 <br>로그인이 필요합니다.</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 mx-auto">
            <div class="p-3">
                <form action="" name="user_login_form">
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 42px;"><i class="fas fa-user-check"></i></span>
                        <input type="text" class="form-control" id="id" name="id" placeholder="아이디" aria-label="id"
                               data-sb-validations="required">

                        <div class="invalid-feedback" data-sb-feedback="id:required">아이디를 입력해주세요.</div>
                    </div>

                    <!--비밀번호-->
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 42px;"><i class="fas fa-key"></i></span>
                        <input type="password" class="form-control rounded-end" id="pw" name="pw" placeholder="비밀번호"
                               aria-label="pw"
                               data-sb-validations="required">
                        <div class="invalid-feedback" data-sb-feedback="pw:required">비밀번호를 입력해주세요.</div>
                    </div>
                    <div class="input-group mb-3 d-grid">
                        <a class="btn text-white"
                           href="#" onclick="data_validation();" style="background-color: #4174B9;">로그인</a>
                    </div>
                </form>
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