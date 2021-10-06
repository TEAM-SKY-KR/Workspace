<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>위드대구</title>
    <?php
    include_once "../front/base/b_head.php"
    ?>
    <!--    시간관련 스크립트-->
    <script src="js/index.js"></script>

    <!--    index css-->
    <link rel="stylesheet" href="../front/css/index.css">

    <!--    지도api-->
    <script type="text/javascript"
            src="//dapi.kakao.com/v2/maps/sdk.js?appkey=102c7ab5e809721336bed57ec2e6db33"></script>


</head>
<!--페이지 로드시 스크립트 작동-->
<body onload="current_date(); printClock();">
<!--컨텐츠시작-->
<?php
include_once "../front/header/menu.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-4 mt-3">
            <!--            <h2 id="clock"></h2>-->
            <div class="d-flex">
                <h3><span class="badge bg-warning" id="date_now_date"></span></h3>
                <h2>&nbspWith Daegu!</h2>
            </div>
            <h2 id="date_now"></h2>

        </div>
        <div class="col-12 col-lg-4 mt-3">
            <div class="input-group">
                <input type="text" class="form-control fs-4" placeholder="검색">
                <button class="btn" style="background-color: #4174B9;color: white"><i
                            class="fas fa-search fa-2x"></i></button><!--색상-->
            </div>
        </div>
        <div class="col-12 col-lg-4 mt-3">
            <h2 class="text-center" id="clock"></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6 mx-auto">
            <div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-8 mb-3">
            <div class="border bg-light">
                <div id="map"></div>
                <script>
                    create_map();
                </script>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-3">
            <div class="border bg-light">
                리스트
            </div>
        </div>
    </div>
</div>
<script>
    del_console();
</script>
</body>
</html>