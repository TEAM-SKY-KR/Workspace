<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>위드대구 (QR)</title>
    <?php
    include_once "../shop/base/b_head.php"
    ?>
    <?php
    if (isset($_SESSION["username"]) == true) {
        echo "<script>location.href='http://localhost/shop/'</script>";
    }
    ?>
</head>
<body style="background-color: #4174B9;">  <!--#4174B9-->
<div class="container">
    <div class="row">
        <div class="col-12 mt-5 mb-5">
            <h1 class="text-center text-white mt-5">위드 대구<span class="fs-6 badge bg-warning text-center text-black mx-1">매장용</span></h1>
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
                        <a class="btn btn-warning text-black"
                           href="#" onclick="data_validation();">로그인</a>
                    </div>
                </form>
                <div class="col-xl-12 text-center">
                <span><a class="fw-bold text-warning" style="text-decoration: none;"
                         href="../join/shop_join.php">아직 회원이 아니신가요?</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>