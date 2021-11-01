<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- validation check -->
    <script src="js/validation_check.js"></script>

    <!-- id double check -->
    <script src="js/id_double_check.js"></script>

    <?php
    include_once "../../front/base/b_head.php"
    ?>

</head>
<body>
<div class="container">
    <div class="row mb-2">
        <div class="col-12">
            <h3 class="page-section-heading text-center">저희 서비스에 가입해주셔서 감사합니다.</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 mx-auto">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="login_user" data-bs-toggle="tab"
                            data-bs-target="#login_user_content" type="button" role="tab" aria-controls="login_user"
                            aria-selected="true">개인
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="login_store" data-bs-toggle="tab" data-bs-target="#login_store_content"
                            type="button" role="tab" aria-controls="login_store" aria-selected="false">매장
                    </button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <!--개인 로그인-->
                <div class="tab-pane fade show active" id="login_user_content" role="tabpanel"
                     aria-labelledby="login_user_content">
                    <div class=" border border-1 p-4">
                        <div class="row">
                            <div class="col-12">
                                <form id="contactForm">
                                    <!-- id input-->
                                    <div class="form-floating mb-2">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input class="form-control" id="id" type="text" placeholder="아이디"
                                               data-sb-validations="required"/>
                                        <label for="id" class="py-1 fs-5">아이디1</label>

                                        <div class="invalid-feedback" data-sb-feedback="id:required">아이디를 입력해주세요.</div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="">
                                            <a class="btn btn-sm mt-2 mb-2 border-0 text-white"
                                               href="#" onclick="id_double_check()" on
                                               style="background-color: #4174B9;">중복확인</a>
                                        </div>

                                    </div>

                                    <!-- password input-->
                                    <div class="form-floating">
                                        <input class="form-control" id="pw" type="password" placeholder="비밀번호"
                                               data-sb-validations="required"/>
                                        <label for="pw" class="py-1 fs-5">비밀번호</label>
                                        <div class="invalid-feedback" data-sb-feedback="pw:required">비밀번호를 입력해주세요.</div>
                                    </div>
                                    <div class="form-floating">
                                        <input class="form-control" id="pw2" type="password" placeholder="비밀번호 확인"
                                               data-sb-validations="required"/>
                                        <label for="pw2" class="py-1 fs-5">비밀번호 확인</label>
                                        <div class="invalid-feedback" data-sb-feedback="pw2:required">비밀번호를 한번 더
                                            입력해주세요.
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <input class="form-control" id="phone" type="tel"
                                               placeholder="010 - 0000 - 0000"
                                               data-sb-validations="required"/>
                                        <label for="phone" class="py-1 fs-5">휴대폰 번호</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">휴대폰 번호를
                                            입력해주세요.
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12">
                                <a class="btn mt-3 col-12 border-0 text-white fs-4"
                                   href="#" onclick="validate()" style="background-color: #4174B9;">회원가입</a>
                            </div>
                        </div>
                        <div class="col-12 mt-5 text-center">
                            <span><u class="fw-bold">이미 회원이신가요?</u></span>
                            <span><a class="btn btn-sm border-0 rounded mx-2 text-white"
                                     style="background-color: #4174B9;"
                                     href="new.html">로그인</a></span>
                        </div>

                    </div>
                </div>

                <!--매장 로그인-->
                <div class="tab-pane fade" id="login_store_content" role="tabpanel"
                     aria-labelledby="login_store_content">
                    <div class=" border border-1 p-4">
                        <div class="row">
                            <div class="col-12">
                                <form id="contactForm">
                                    <!-- id input-->
                                    <div class="form-floating mb-2">
                                        <input class="form-control" id="id" type="text" placeholder="아이디"
                                               data-sb-validations="required"/>
                                        <label for="id" class="py-1 fs-5">아이디</label>

                                        <div class="invalid-feedback" data-sb-feedback="id:required">아이디를 입력해주세요.</div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="">
                                            <a class="btn btn-sm mt-3 border-0 text-white"
                                               href="#" onclick="id_double_check()" on
                                               style="background-color: #4174B9;">중복확인</a>
                                        </div>

                                    </div>

                                    <!-- password input-->
                                    <div class="form-floating">
                                        <input class="form-control" id="pw" type="password" placeholder="비밀번호"
                                               data-sb-validations="required"/>
                                        <label for="pw" class="py-1 fs-5">비밀번호</label>
                                        <div class="invalid-feedback" data-sb-feedback="pw:required">비밀번호를 입력해주세요.</div>
                                    </div>
                                    <div class="form-floating">
                                        <input class="form-control" id="pw2" type="password" placeholder="비밀번호 확인"
                                               data-sb-validations="required"/>
                                        <label for="pw2" class="py-1 fs-5">비밀번호 확인</label>
                                        <div class="invalid-feedback" data-sb-feedback="pw2:required">비밀번호를 한번 더
                                            입력해주세요.
                                        </div>
                                    </div>
                                    <!--store-->
                                    <div class="form-floating">
                                        <input class="form-control" id="store" type="text"
                                               placeholder=""
                                               data-sb-validations="required"/>
                                        <label for="store" class="py-1 fs-5">매장명</label>
                                        <div class="invalid-feedback" data-sb-feedback="store:required">매장명을 입력해주세요.
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <input class="form-control" id="store_number" type="text"
                                               placeholder="000000000"
                                               data-sb-validations="required"/>
                                        <label for="store_number" class="py-1 fs-5">사업자등록번호</label>
                                        <div class="invalid-feedback" data-sb-feedback="store_number:required"></div>
                                    </div>
                                    <div class="form-floating">
                                        <input class="form-control" id="phone" type="tel"
                                               placeholder="010 - 0000 - 0000"
                                               data-sb-validations="required"/>
                                        <label for="phone" class="py-1 fs-5">휴대폰 번호</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">휴대폰 번호를
                                            입력해주세요.
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12">
                                <a class="btn mt-3 col-12 border-0 text-white fs-4"
                                   href="#" onclick="validate()" style="background-color: #4174B9;">회원가입</a>
                            </div>
                        </div>
                        <div class="col-12 mt-5 text-center">
                            <span><u class="fw-bold">이미 회원이신가요?</u></span>
                            <span><a class="btn btn-sm border-0 rounded mx-2 text-white"
                                     style="background-color: #4174B9;"
                                     href="new.html">로그인</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>