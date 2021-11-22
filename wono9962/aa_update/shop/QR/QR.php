<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>위드대구</title>
    <?php
    include_once "../../shop/base/b_head.php"
    ?>
    <!--    시간관련 스크립트-->
    <script src="../js/index.js"></script>

    <!--    index css-->
    <link rel="stylesheet" href="../css/index.css">

    <!--    JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <!--font-->
    <link rel="stylesheet" href="../../shop/css/main.css">
    <!--위치 달라지면 경로도 달라짐-->

</head>
<!--페이지 로드시 스크립트 작동-->
<body onload="current_date(); printClock();">
<!--컨텐츠시작-->
<?php
include_once "../../shop/header/menu.php";
?>
<!--매장 이름-->
<!--오늘 날짜-->
<!--오늘의 QR 사용자 수-->
<!--QR 코드-->

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <!--            <h2 id="clock"></h2>-->
            <div class="d-flex">
                <h3><span class="badge bg-warning" id="date_now_date"></span></h3>
            </div>
            <h2 id="date_now"></h2>  <!--위드대구 사용자 수는 00명 입니다! : 오늘 위드대구 QR을 찍은 사람의 수-->
        </div>
    </div>
    <div class="row">
        <div class="col-4 mb-2">
            <div class="border bg-warning rounded">
                <div class="d-flex justify-content-between">
                    <div class="d-flex ms-4">
                        <img src="" alt="" id="weather_img">
                        <h2 class="m-0 mt-1 align-self-center" id="temp"></h2>
                    </div>
                    <h2 class=" m-0 mt-1 align-self-center me-5" id="clock"></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <img class="mx-auto d-block"
                 src="https://chart.apis.google.com/chart?cht=qr&chs=200x200&chl=http://www.naver.com" alt=""
                 style="width:545px; height:545px;">
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <h2>이곳은 <span class="badge bg-success rounded-pill">동궁찜닭</span> 입니다.</h2>
        </div>
    </div>
</div>
<script>
    $.ajax({

        type: "GET",
        url: "https://api.openweathermap.org/data/2.5/weather?q=Daegu&appid=03375143ec4665f4db2e54c1d6138f6d",
        dataType: "json",
        error: function () {
            alert('통신실패!!');
        },
        success: function (data) {
            // alert("통신데이터 값 : " + data) ;
            document.getElementById("temp").innerHTML = Math.floor(data.main.temp - 273.15) + "°";
            document.getElementById("weather_img").src = "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png";

        }

    });
    del_console();
</script>
</body>
</html>