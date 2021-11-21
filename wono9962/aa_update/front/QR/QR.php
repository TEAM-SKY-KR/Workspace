<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>위드대구 (QR)</title>
    <?php
    include_once "../base/b_head.php"
    ?>
</head>
<body style="background-color: #4174B9;">
<div class="container">
    <div class="row">
        <div class="col-12 mt-5 mb-5">
            <h1 class="text-center text-white">위드 대구</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4 text-center text-white">
            <h3>어서와요! 이곳은 <span class="badge bg-warning text-dark">이월드</span>입니다!</h3>
            <h6>아래에 있는 QR을 인식하고, 스탬프를 모아서 상권도 살리고 할인도 받아요!</h6>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <img class="mx-auto d-block" src="img/qrcode.png" alt="" style="width:545px; height:545px;">
            <!--임시로 이미지 넣음-->
        </div>
        <div class="col-6">
            <div style="align-items: center">
                <a href="https://www.youtube.com/embed/w6X0b2ESKi4" target="iframe1"/>
                <!--iframe으로 youtube영상 가져오는 법: 영상 클릭-공유-퍼가기-iframe태그 복사-밑에 붙여넣기-->
                <!--autoplay=1 : 자동재생 /  &mute=1 : 음소거  | 크롬에서는 음소거를 해야 자동재생이 작동함-->

                <!--iframe 안에 class="mx-auto d-block" name="iframe1" style="width:545px; height:545px;" 이거 넣고 width, height, title, frameborder 삭제하기 / src에 맨끝에 ?autoplay=1&mute=1 추가하면 자동재생&음소거-->
                <iframe class="mx-auto d-block" name="iframe1" style="width:545px; height:545px;"
                        src="https://www.youtube.com/embed/SdR-zjovDhQ?autoplay=1&mute=1"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
</body>
</html>