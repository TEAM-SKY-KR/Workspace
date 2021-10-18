<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- validation check -->
    <script src="js/validation_check.js"></script>

    <!-- css-->
    <link href="css/styles.css" rel="stylesheet"/>
    <?php
    include_once "../../front/base/b_head.php"
    ?>

</head>
<body>
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-12">
            <h3 class="page-section-heading text-center">서비스를 이용하기 위해서는 로그인이 필요합니다.</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 mx-auto">


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="login_user" data-bs-toggle="tab" data-bs-target="#login_user_content" type="button" role="tab" aria-controls="login_user" aria-selected="true">개인</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="login_store" data-bs-toggle="tab" data-bs-target="#login_store_content" type="button" role="tab" aria-controls="login_store" aria-selected="false">매장</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login_user_content" role="tabpanel" aria-labelledby="login_user_content">
                    <div class="border border-1 p-4 rounded-3">
                        <div class="row">
                            <div class="col-12"> <!-- col-xl-8: PC grid-->
                                <form id="contactForm">
                                    <!-- id input-->
                                    <div class="form-floating mb-2">
                                        <input class="form-control" id="id" type="text" placeholder="아이디"
                                               data-sb-validations="required"/>
                                        <label for="id" class="py-1 fs-5">아이디</label>
                                        <div class="invalid-feedback" data-sb-feedback="id:required">아이디를 입력해주세요.</div>
                                    </div>
                                    <!-- password input-->
                                    <div class="form-floating">
                                        <input class="form-control" id="pw" type="password" placeholder="비밀번호"
                                               data-sb-validations="required"/>
                                        <label for="pw" class="py-1 fs-5">비밀번호</label>
                                        <div class="invalid-feedback" data-sb-feedback="pw:required">비밀번호를 입력해주세요.</div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12">  <!-- col-xl-4: PC grid-->
                                <a class="btn mt-3 col-12 border-0 text-white fs-4"
                                   href="#" onclick="validate()" style="background-color: #4174B9;">로그인</a>
                            </div>
                        </div>
                        <div class="col-xl-12 mt-5 text-center">
                            <span><u class="fw-bold">아직 회원이 아니신가요?</u></span>
                            <span><a class="btn btn-sm border-0 rounded mx-2 text-white" style="background-color: #4174B9;"
                                     href="new.html">회원가입</a></span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="login_store_content" role="tabpanel" aria-labelledby="login_store_content">
                    <div class="border border-1 p-4 rounded-3">
                        <div class="row">
                            <div class="col-12"> <!-- col-xl-8: PC grid-->
                                <form id="contactForm">
                                    <!-- id input-->
                                    <div class="form-floating mb-2">
                                        <input class="form-control" id="id" type="text" placeholder="아이디"
                                               data-sb-validations="required"/>
                                        <label for="id" class="py-1 fs-5">아이디</label>
                                        <div class="invalid-feedback" data-sb-feedback="id:required">아이디를 입력해주세요.</div>
                                    </div>
                                    <!-- password input-->
                                    <div class="form-floating">
                                        <input class="form-control" id="pw" type="password" placeholder="비밀번호"
                                               data-sb-validations="required"/>
                                        <label for="pw" class="py-1 fs-5">비밀번호</label>
                                        <div class="invalid-feedback" data-sb-feedback="pw:required">비밀번호를 입력해주세요.</div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12">  <!-- col-xl-4: PC grid-->
                                <a class="btn mt-3 col-12 border-0 text-white fs-4"
                                   href="#" onclick="validate()" style="background-color: #4174B9;">로그인</a>
                            </div>
                        </div>
                        <div class="col-xl-12 mt-5 text-center">
                            <span><u class="fw-bold">아직 회원이 아니신가요?</u></span>
                            <span><a class="btn btn-sm border-0 rounded mx-2 text-white" style="background-color: #4174B9;"
                                     href="new.html">회원가입</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>