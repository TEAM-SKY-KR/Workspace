<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>위드대구</title>
    <?php
    include_once "../user/base/b_head.php"
    ?>
    <!--    시간관련 스크립트-->
    <script src="js/index.js"></script>

    <!--    index css-->
    <link rel="stylesheet" href="css/index.css">

    <!--    지도api-->
    <script type="text/javascript"
            src="//dapi.kakao.com/v2/maps/sdk.js?appkey=102c7ab5e809721336bed57ec2e6db33"></script>

    <!--    JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <!--font-->
    <link rel="stylesheet" href="../user/css/main.css">
    <!--위치 달라지면 경로도 달라짐-->

</head>
<!--페이지 로드시 스크립트 작동-->
<body onload="current_date(); printClock();">
<!--컨텐츠시작-->
<?php
include_once "../user/header/menu.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <!--            <h2 id="clock"></h2>-->
            <div class="d-flex">
                <h3><span class="badge bg-warning" id="date_now_date"></span></h3>
                <h2>&nbspWith Daegu!</h2>
            </div>
            <h2 id="date_now"></h2>

        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-8 mb-3">
            <div class="input-group">
                <input type="text" class="form-control fs-4" placeholder="검색">
                <button class="btn" style="background-color: #4174B9;color: white"><i
                            class="fas fa-search fa-2x"></i></button>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-3">
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
        <div class="col-12 mb-3">
            <div class="border bg-light rounded">
                <div id="map"></div>
                <script>
                    create_map();
                </script>
            </div>
        </div>
<!--        <div class="col-12 col-lg-4 mb-3">-->
<!--            <div class="border bg-light list_border rounded">-->
<!--                <ul class="list-group list-group-flush">-->
<!--                    <a href="" style="text-decoration: none">-->
<!--                        <li class="list-group-item">동구</li>-->
<!--                    </a>-->
<!--                    <a href="" style="text-decoration: none">-->
<!--                        <li class="list-group-item">서구</li>-->
<!--                    </a>-->
<!--                    <a href="" style="text-decoration: none">-->
<!--                        <li class="list-group-item">남구</li>-->
<!--                    </a>-->
<!--                    <a href="" style="text-decoration: none">-->
<!--                        <li class="list-group-item">북구</li>-->
<!--                    </a>-->
<!--                    <a href="" style="text-decoration: none">-->
<!--                        <li class="list-group-item">중구</li>-->
<!--                    </a>-->
<!--                    <a href="" style="text-decoration: none">-->
<!--                        <li class="list-group-item">달서구</li>-->
<!--                    </a>-->
<!--                    <a href="" style="text-decoration: none">-->
<!--                        <li class="list-group-item">수성구</li>-->
<!--                    </a>-->
<!--                    <a href="" style="text-decoration: none">-->
<!--                        <li class="list-group-item">달성군</li>-->
<!--                    </a>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
    </div>
    <div class="row">
        <div class="col-12 mb-3">
            <div class="border bg-light">
                 관광지 무작위로 추천해줄 예정
            </div>
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
            document.getElementById("weather_img").src="http://openweathermap.org/img/w/" + data.weather[0].icon + ".png";

        }

    });
    del_console();
</script>
</body>
</html>