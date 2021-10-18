<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>로그인</title>
    <?php
    include_once "../../front/base/b_head.php";
    ?>
    <script src="../js/login/login.js"></script>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-4">
            <div class="border bg-light p-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="아이디" id="id" name="id">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="비밀번호" id="pw" name="pw">
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary mb-3" type="button" onclick="login_validation();">로그인</button>
                </div>
                <p class="text-center m-0"><a href="">회원이 아닌가요?</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>