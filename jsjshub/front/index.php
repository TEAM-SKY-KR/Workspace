<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "../front/base/b_header.php"
    ?>
    <!--    시간관련 스크립트-->
    <script src="../front/js/index_clock.js"></script>
    <link rel="stylesheet" href="../front/css/main.css">
</head>
<!--페이지 로드시 스크립트 작동-->
<body onload="current_date();">
<!--컨텐츠시작-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!--            <h2 id="clock"></h2>-->
            <div class="mt-1">
                <div class="d-flex">
                    <h3><span class="badge bg-warning" id="date_now_date"></span></h3>
                    <h2>&nbspWith Daegue!</h2>
                </div>
                <h2 id="date_now"></h2>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-lg-8 mb-3">
            <div class="border bg-light">
                <a href="https://map.kakao.com/?urlX=849987&urlY=654318&urlLevel=3&map_type=TYPE_MAP&map_hybrid=false" target="_blank"><img width="504" height="310" src="https://map2.daum.net/map/mapservice?FORMAT=PNG&SCALE=2.5&MX=849987&MY=654318&S=0&IW=504&IH=310&LANG=0&COORDSTM=WCONGNAMUL&logo=kakao_logo" style="border:1px solid #ccc"></a><div class="hide" style="overflow:hidden;padding:7px 11px;border:1px solid #dfdfdf;border-color:rgba(0,0,0,.1);border-radius:0 0 2px 2px;background-color:#f9f9f9;width:482px;"><strong style="float: left;"><img src="//t1.daumcdn.net/localimg/localimages/07/2018/pc/common/logo_kakaomap.png" width="72" height="16" alt="카카오맵"></strong><div style="float: right;position:relative"><a style="font-size:12px;text-decoration:none;float:left;height:15px;padding-top:1px;line-height:15px;color:#000" target="_blank" href="https://map.kakao.com/?urlX=849987&urlY=654318&urlLevel=3&map_type=TYPE_MAP&map_hybrid=false">지도 크게 보기</a></div></div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-3">
            <div class="border bg-light">
                리스트
            </div>
        </div>
    </div>
</div>
</body>
</html>