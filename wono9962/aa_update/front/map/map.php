<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        #mapwrap {
            position: relative;
            overflow: hidden;
        }

        .category, .category * {
            margin: 0;
            padding: 0;
            color: #000;
        }

        .category {
            position: absolute;
            overflow: hidden;
            top: 10px;
            left: 10px;
            width: 400px;
            height: 50px;
            z-index: 10;
            border: 1px solid black;
            font-family: 'Malgun Gothic', '맑은 고딕', sans-serif;
            font-size: 12px;
            text-align: center;
            background-color: #fff;
        }

        .category .menu_selected {
            background: #FF5F4A;
            color: #fff;
            border-left: 1px solid #915B2F;
            border-right: 1px solid #915B2F;
            margin: 0 -1px;
        }

        .category li {
            list-style: none;
            float: left;
            width: 50px;
            height: 45px;
            padding-top: 5px;
            cursor: pointer;
        }

        .category .ico_comm {
            display: block;
            margin: 0 auto 2px;
            width: 22px;
            height: 26px;
            background: url('./1.PNG') no-repeat;
        }

        .category .ico_Buk {
            background-position: -10px 0;
        }

        .category .ico_Nam {
            background-position: -10px -36px;
        }

        .category .ico_Jung {
            background-position: -10px -72px;
        }

        .category .ico_Dong {
            background-position: -10px -108px;
        }

        .category .ico_Seo {
            background-position: -10px -144px;
        }

        .category .ico_Susung {
            background-position: -10px -180px;
        }

        .category .ico_Dal {
            background-position: -10px -216px;
        }

        .category .ico_Dalsung {
            background-position: -10px -252px;
        }
    </style>
</head>
<body>
<div id="mapwrap">
    <!-- 지도가 표시될 div -->
    <div id="map" style="width:100%;height:350px;"></div>
    <!-- 지도 위에 표시될 마커 카테고리 -->
    <div class="category">
        <ul>
            <li id="Buk" onclick="changeMarker('Buk')">
                <span class="ico_comm ico_Buk"></span>
                북구
            </li>
            <li id="Nam" onclick="changeMarker('Nam')">
                <span class="ico_comm ico_Nam"></span>
                남구
            </li>
            <li id="Jung" onclick="changeMarker('Jung')">
                <span class="ico_comm ico_Jung"></span>
                중구
            </li>
            <li id="Dong" onclick="changeMarker('Dong')">
                <span class="ico_comm ico_Dong">
                </span>
                동구
            </li>
            <li id="Seo" onclick="changeMarker('Seo')">
                <span class="ico_comm ico_Seo"></span>
                서구
            </li>
            <li id="Susung" onclick="changeMarker('Susung')">
                <span class="ico_comm ico_Susung"></span>
                수성구
            </li>
            <li id="Dal" onclick="changeMarker('Dal')">
                <span class="ico_comm ico_Dal"></span>
                달서구
            </li>
            <li id="Dalsung" onclick="changeMarker('Dalsung')">
                <span class="ico_comm ico_Dalsung"></span>
                달성군
            </li>
        </ul>
    </div>
</div>
<div id="map" style="width:100%;height:350px;"></div>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=0bb6fb613579860f61328cf2cd11a7a3"></script>
<script type="text/javascript" src="../js/map/map.js"></script>
</body>
</html>