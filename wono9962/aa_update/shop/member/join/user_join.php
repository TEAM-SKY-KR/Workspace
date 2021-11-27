<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- validation check -->
    <script src="js/user_validation.js"></script>
    <!--    <script type="text/javascript" src="js/validation_check.js"></script>-->

    <link rel="stylesheet" href="../../css/main.css">
    <?php
    include_once "../../base/b_head.php"
    ?>

    <script>

    </script>

</head>
<body>
<?php
include_once "../../header/menu.php";
?>
<div class="container">
    <div class="row mb-2">
        <div class="col-12 mt-2">
            <h3 class="text-center">저희 서비스에 가입해주셔서 감사합니다.</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 mx-auto">
            <!--개인 로그인-->
            <div class="p-3">
                <!--아이디-->
                <form action="" name="user_register_form">
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 42px;"><i class="fas fa-user-check"></i></span>
                        <input type="text" class="form-control" id="id"name="id" placeholder="아이디" aria-label="id"
                               data-sb-validations="required">
                        <a class="btn btn-dark text-light rounded-end" type="button" onclick="id_double_check();" on
                           href="#">중복확인
                        </a>
                        <div class="invalid-feedback" data-sb-feedback="id:required">아이디를 입력해주세요.</div>
                    </div>
                    <!--이메일-->
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 42px;"><i class="fas fa-envelope"></i></span>
                        <input type="password" class="form-control rounded-end" id="email" name="email" placeholder="이메일"
                               aria-label="pw"
                               data-sb-validations="required">
                        <div class="invalid-feedback" data-sb-feedback="pw:required">비밀번호를 입력해주세요.</div>
                    </div>
                    <!--비밀번호-->
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 42px;"><i class="fas fa-key"></i></span>
                        <input type="password" class="form-control rounded-end" id="pw" name="pw" placeholder="비밀번호"
                               aria-label="pw"
                               data-sb-validations="required">
                        <div class="invalid-feedback" data-sb-feedback="pw:required">비밀번호를 입력해주세요.</div>
                    </div>
                    <!--비밀번호 확인-->
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 42px;"><i class="fas fa-key"></i></span>
                        <input type="password" class="form-control rounded-end" id="pw2" placeholder="비밀번호 확인"
                               data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="pw2:required">비밀번호를 한번 더
                            입력해주세요.
                        </div>
                    </div>

                    <div class="input-group mb-3 d-grid">
                        <a class="btn text-white"
                           href="#" onclick="data_validation()" style="background-color: #4174B9;">회원가입</a>
                    </div>
                </form>

                <!--이미 회원인지 확인-->
                <div class="mt-3 text-center">
                    <span class="fs-6"><a class="fw-bold" href="../login/user_login.php" style="text-decoration: none">이미 회원이신가요?</a></span>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>