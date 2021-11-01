<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- validation check -->
    <script src="js/validation_check.js"></script>
    <!--    <script type="text/javascript" src="js/validation_check.js"></script>-->

    <!-- id double check -->
    <script src="js/id_double_check.js"></script>
    <!--    <script type="text/javascript" src="js/id_double_check.js"></script>-->

    <?php
    include_once "../../front/base/b_head.php"
    ?>

</head>
<body>
<div class="container">
    <div class="row mb-2">
        <div class="col-12 mt-2">
            <h3 class="text-center">저희 서비스에 가입해주셔서 감사합니다.</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 mx-auto">
            <!--매장 로그인-->
            <div class="p-3">
                <!--아이디-->
                <div class="input-group mb-3">
                    <span class="input-group-text" style="width: 42px;"><i class="fas fa-user-check"></i></span>
                    <input type="text" class="form-control" id="id" placeholder="아이디" aria-label="id"
                           data-sb-validations="required">
                    <a class="btn btn-dark text-light rounded-end" type="button" onclick="id_double_check()" on
                       href="#">중복확인
                    </a>
                    <div class="invalid-feedback" data-sb-feedback="id:required">아이디를 입력해주세요.</div>
                </div>

                <!--비밀번호-->
                <div class="input-group mb-3">
                    <span class="input-group-text" style="width: 42px;"><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control rounded-end" id="pw" placeholder="비밀번호"
                           aria-label="pw"
                           data-sb-validations="required">
                </div>

                <!--비밀번호 확인-->
                <div class="input-group mb-5">
                    <span class="input-group-text" style="width: 42px;"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control rounded-end" id="pw2" placeholder="비밀번호 확인"
                           data-sb-validations="required"/>
                </div>

                <!--사업자등록번호-->
                <div class="input-group mb-3">
                            <span class="col-1 input-group-text" style="width: 42px;"><i
                                        class="fas fa-building"></i></span>
                    <input type="text" class="form-control rounded-end" id="num" placeholder="사업자등록번호"
                           data-sb-validations="required">
                </div>

                <!--담당자 휴대폰 번호-->
                <div class="input-group mb-3">
                            <span class="col-1 input-group-text" style="width: 42px;"><i
                                        class="fas fa-phone"></i></span>
                    <input type="tel" class="form-control rounded-end" id="phone"
                           placeholder="담당자 휴대폰 번호(010-0000-0000)"
                           aria-label="phone"
                           data-sb-validations="required">
                    <div class="invalid-feedback" data-sb-feedback="phone:required">담당자 휴대폰 번호를 입력해주세요.
                    </div>
                </div>

                <div class="input-group mb-3 d-grid">
                    <a class="btn text-white"
                       href="#" onclick="validate()" style="background-color: #4174B9;">회원가입</a>
                </div>

                <!--이미 회원인지 확인-->
                <div class="mt-3 text-center">
                    <span class="fs-6 fw-bold"><u class="">이미 회원이신가요?</u></span>
                    <span><a class="btn btn-sm border-0 rounded mx-2 text-white"
                             style="background-color: #4174B9;"
                             href="#">로그인</a></span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>