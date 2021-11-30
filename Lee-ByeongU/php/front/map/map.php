<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        #mapwrap{position:relative;overflow:hidden;}
        .category, .category *{margin:0;padding:0;color:#000;}
        .category {position:absolute;overflow:hidden;top:10px;left:10px;width:400px;height:50px;z-index:10;border:1px solid black;font-family:'Malgun Gothic','맑은 고딕',sans-serif;font-size:12px;text-align:center;background-color:#fff;}
        .category .menu_selected {background:#FF5F4A;color:#fff;border-left:1px solid #915B2F;border-right:1px solid #915B2F;margin:0 -1px;}
        .category li{list-style:none;float:left;width:50px;height:45px;padding-top:5px;cursor:pointer;}
        .category .ico_comm {display:block;margin:0 auto 2px;width:22px;height:26px;background:url('./1.PNG') no-repeat;}
        .category .ico_Buk {background-position:-10px 0;}
        .category .ico_Nam {background-position:-10px -36px;}
        .category .ico_Jung {background-position:-10px -72px;}
        .category .ico_Dong {background-position:-10px -108px;}
        .category .ico_Seo {background-position:-10px -144px;}
        .category .ico_Susung {background-position:-10px -180px;}
        .category .ico_Dal {background-position:-10px -216px;}
        .category .ico_Dalsung {background-position:-10px -252px;}
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
<script>
    var mapContainer = document.getElementById('map'), // 지도를 표시할 div
        mapOption = {
            center: new kakao.maps.LatLng(37.498004414546934, 127.02770621963765), // 지도의 중심좌표
            level: 3 // 지도의 확대 레벨
        };

    var map = new kakao.maps.Map(mapContainer, mapOption);

    var BukPositions = [
        new kakao.maps.LatLng(37.499590490909185, 127.0263723554437),
        new kakao.maps.LatLng(37.499427948430814, 127.02794423197847),
        new kakao.maps.LatLng(37.498553760499505, 127.02882598822454),
        new kakao.maps.LatLng(37.497625593121384, 127.02935713582038),
        new kakao.maps.LatLng(37.49646391248451, 127.02675574250912),
        new kakao.maps.LatLng(37.49629291770947, 127.02587362608637),
        new kakao.maps.LatLng(37.49754540521486, 127.02546694890695)
    ];

    var BukpolygonPath = [
        new kakao.maps.LatLng(37.499590490909185, 127.0263723554437),
        new kakao.maps.LatLng(37.499427948430814, 127.02794423197847),
        new kakao.maps.LatLng(37.498553760499505, 127.02882598822454),
        new kakao.maps.LatLng(37.497625593121384, 127.02935713582038),
        new kakao.maps.LatLng(37.49646391248451, 127.02675574250912),
        new kakao.maps.LatLng(37.49629291770947, 127.02587362608637),
        new kakao.maps.LatLng(37.49754540521486, 127.02546694890695)
    ];

    //************************************************************************

    // 편의점 마커가 표시될 좌표 배열입니다
    var NamPositions = [
        new kakao.maps.LatLng(37.497535461505684, 127.02948149502778),
        new kakao.maps.LatLng(37.49671536281186, 127.03020491448352),
        new kakao.maps.LatLng(37.496201943633714, 127.02959405469642),
        new kakao.maps.LatLng(37.49640072567703, 127.02726459882308),
        new kakao.maps.LatLng(37.49640098874988, 127.02609983175294),
        new kakao.maps.LatLng(37.49932849491523, 127.02935780247945),
        new kakao.maps.LatLng(37.49996818951873, 127.02943721562295)
    ];

    var NampolygonPath = [
        new kakao.maps.LatLng(37.497535461505684, 127.02948149502778),
        new kakao.maps.LatLng(37.49671536281186, 127.03020491448352),
        new kakao.maps.LatLng(37.496201943633714, 127.02959405469642),
        new kakao.maps.LatLng(37.49640072567703, 127.02726459882308),
        new kakao.maps.LatLng(37.49640098874988, 127.02609983175294),
        new kakao.maps.LatLng(37.49932849491523, 127.02935780247945),
        new kakao.maps.LatLng(37.49996818951873, 127.02943721562295)
    ];

    //************************************************************************

    // 주차장 마커가 표시될 좌표 배열입니다
    var JungPositions = [
        new kakao.maps.LatLng(37.49966168796031, 127.03007039430118),
        new kakao.maps.LatLng(37.499463762912974, 127.0288828824399),
        new kakao.maps.LatLng(37.49896834100913, 127.02833986892401),
        new kakao.maps.LatLng(37.49893267508434, 127.02673400572665),
        new kakao.maps.LatLng(37.49872543597439, 127.02676785815386),
        new kakao.maps.LatLng(37.49813096097184, 127.02591949495914),
        new kakao.maps.LatLng(37.497680616783086, 127.02518427952202)
    ];

    var JungpolygonPath = [
        new kakao.maps.LatLng(37.49966168796031, 127.03007039430118),
        new kakao.maps.LatLng(37.499463762912974, 127.0288828824399),
        new kakao.maps.LatLng(37.49896834100913, 127.02833986892401),
        new kakao.maps.LatLng(37.49893267508434, 127.02673400572665),
        new kakao.maps.LatLng(37.49872543597439, 127.02676785815386),
        new kakao.maps.LatLng(37.49813096097184, 127.02591949495914),
        new kakao.maps.LatLng(37.497680616783086, 127.02518427952202)
    ];

    //************************************************************************

    var DongPositions = [
        new kakao.maps.LatLng(37.499590490909185, 127.0263723554437),
        new kakao.maps.LatLng(37.499427948430814, 127.02794423197847),
        new kakao.maps.LatLng(37.498553760499505, 127.02882598822454),
        new kakao.maps.LatLng(37.497625593121384, 127.02935713582038),
        new kakao.maps.LatLng(37.49646391248451, 127.02675574250912),
        new kakao.maps.LatLng(37.49629291770947, 127.02587362608637),
        new kakao.maps.LatLng(37.49754540521486, 127.02546694890695)
    ];
    var DongpolygonPath = [
        new kakao.maps.LatLng(37.499590490909185, 127.0263723554437),
        new kakao.maps.LatLng(37.499427948430814, 127.02794423197847),
        new kakao.maps.LatLng(37.498553760499505, 127.02882598822454),
        new kakao.maps.LatLng(37.497625593121384, 127.02935713582038),
        new kakao.maps.LatLng(37.49646391248451, 127.02675574250912),
        new kakao.maps.LatLng(37.49629291770947, 127.02587362608637),
        new kakao.maps.LatLng(37.49754540521486, 127.02546694890695)
    ];


    //************************************************************************

    var SeoPositions = [
        new kakao.maps.LatLng(37.497535461505684, 127.02948149502778),
        new kakao.maps.LatLng(37.49671536281186, 127.03020491448352),
        new kakao.maps.LatLng(37.496201943633714, 127.02959405469642),
        new kakao.maps.LatLng(37.49640072567703, 127.02726459882308),
        new kakao.maps.LatLng(37.49640098874988, 127.02609983175294),
        new kakao.maps.LatLng(37.49932849491523, 127.02935780247945),
        new kakao.maps.LatLng(37.49996818951873, 127.02943721562295)
    ];
    var SeopolygonPath = [
        new kakao.maps.LatLng(37.497535461505684, 127.02948149502778),
        new kakao.maps.LatLng(37.49671536281186, 127.03020491448352),
        new kakao.maps.LatLng(37.496201943633714, 127.02959405469642),
        new kakao.maps.LatLng(37.49640072567703, 127.02726459882308),
        new kakao.maps.LatLng(37.49640098874988, 127.02609983175294),
        new kakao.maps.LatLng(37.49932849491523, 127.02935780247945),
        new kakao.maps.LatLng(37.49996818951873, 127.02943721562295)
    ];

    //************************************************************************

    var SusungPositions = [
        new kakao.maps.LatLng(37.49966168796031, 127.03007039430118),
        new kakao.maps.LatLng(37.499463762912974, 127.0288828824399),
        new kakao.maps.LatLng(37.49896834100913, 127.02833986892401),
        new kakao.maps.LatLng(37.49893267508434, 127.02673400572665),
        new kakao.maps.LatLng(37.49872543597439, 127.02676785815386),
        new kakao.maps.LatLng(37.49813096097184, 127.02591949495914),
        new kakao.maps.LatLng(37.497680616783086, 127.02518427952202)
    ];
    var SusungpolygonPath = [
        new kakao.maps.LatLng(37.49966168796031, 127.03007039430118),
        new kakao.maps.LatLng(37.499463762912974, 127.0288828824399),
        new kakao.maps.LatLng(37.49896834100913, 127.02833986892401),
        new kakao.maps.LatLng(37.49893267508434, 127.02673400572665),
        new kakao.maps.LatLng(37.49872543597439, 127.02676785815386),
        new kakao.maps.LatLng(37.49813096097184, 127.02591949495914),
        new kakao.maps.LatLng(37.497680616783086, 127.02518427952202)
    ];

    //************************************************************************

    var DalPositions = [
        new kakao.maps.LatLng(37.499590490909185, 127.0263723554437),
        new kakao.maps.LatLng(37.499427948430814, 127.02794423197847),
        new kakao.maps.LatLng(37.498553760499505, 127.02882598822454),
        new kakao.maps.LatLng(37.497625593121384, 127.02935713582038),
        new kakao.maps.LatLng(37.49646391248451, 127.02675574250912),
        new kakao.maps.LatLng(37.49629291770947, 127.02587362608637),
        new kakao.maps.LatLng(37.49754540521486, 127.02546694890695)
    ];
    var DalpolygonPath = [
        new kakao.maps.LatLng(37.499590490909185, 127.0263723554437),
        new kakao.maps.LatLng(37.499427948430814, 127.02794423197847),
        new kakao.maps.LatLng(37.498553760499505, 127.02882598822454),
        new kakao.maps.LatLng(37.497625593121384, 127.02935713582038),
        new kakao.maps.LatLng(37.49646391248451, 127.02675574250912),
        new kakao.maps.LatLng(37.49629291770947, 127.02587362608637),
        new kakao.maps.LatLng(37.49754540521486, 127.02546694890695)
    ];

    //************************************************************************

    var DalsungPositions = [
        new kakao.maps.LatLng(37.49966168796031, 127.03007039430118),
        new kakao.maps.LatLng(37.499463762912974, 127.0288828824399),
        new kakao.maps.LatLng(37.49896834100913, 127.02833986892401),
        new kakao.maps.LatLng(37.49893267508434, 127.02673400572665),
        new kakao.maps.LatLng(37.49872543597439, 127.02676785815386),
        new kakao.maps.LatLng(37.49813096097184, 127.02591949495914),
        new kakao.maps.LatLng(37.497680616783086, 127.02518427952202)
    ];
    var DalsungpolygonPath = [
        new kakao.maps.LatLng(37.49966168796031, 127.03007039430118),
        new kakao.maps.LatLng(37.499463762912974, 127.0288828824399),
        new kakao.maps.LatLng(37.49896834100913, 127.02833986892401),
        new kakao.maps.LatLng(37.49893267508434, 127.02673400572665),
        new kakao.maps.LatLng(37.49872543597439, 127.02676785815386),
        new kakao.maps.LatLng(37.49813096097184, 127.02591949495914),
        new kakao.maps.LatLng(37.497680616783086, 127.02518427952202)
    ];

    //************************************************************************

    var markerImageSrc = './1.PNG';
    BukMarkers = [],
        NamMarkers = [],
        JungMarkers = [],
        DongMarkers = [],
        SeoMarkers = [],
        SusungMarkers = [],
        DalMarkers = [],
        DalsungMarkers = [];

    createBukMarkers();
    createNamMarkers();
    createJungMarkers();
    createDongMarkers();
    createSeoMarkers();
    createSusungMarkers();
    createDalMarkers();
    createDalsungMarkers();


    changeMarker('Buk');

    function createMarkerImage(src, size, options) {
        var markerImage = new kakao.maps.MarkerImage(src, size, options);
        return markerImage;
    }

    function createMarker(position, image) {
        var marker = new kakao.maps.Marker({
            position: position,
            image: image
        });

        return marker;

    }

    function createBukMarkers() {

        for (var i = 0; i < BukPositions.length; i++) {

            var imageSize = new kakao.maps.Size(22, 26),
                imageOptions = {
                    spriteOrigin: new kakao.maps.Point(10, 0),
                    spriteSize: new kakao.maps.Size(36, 98)
                };

            var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),
                marker = createMarker(BukPositions[i], markerImage);


            BukMarkers.push(marker);

        }
    }

    function setBukMarkers(map) {
        for (var i = 0; i < BukMarkers.length; i++) {
            BukMarkers[i].setMap(map);

        }
    }

    function createNamMarkers() {
        for (var i = 0; i < NamPositions.length; i++) {

            var imageSize = new kakao.maps.Size(22, 26),
                imageOptions = {
                    spriteOrigin: new kakao.maps.Point(10, 36),
                    spriteSize: new kakao.maps.Size(36, 98)
                };

            var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),
                marker = createMarker(NamPositions[i], markerImage);

            NamMarkers.push(marker);
        }
    }

    function setNamMarkers(map) {
        for (var i = 0; i < NamMarkers.length; i++) {
            NamMarkers[i].setMap(map);


        }
    }

    function createJungMarkers() {
        for (var i = 0; i < JungPositions.length; i++) {

            var imageSize = new kakao.maps.Size(22, 26),
                imageOptions = {
                    spriteOrigin: new kakao.maps.Point(10, 72),
                    spriteSize: new kakao.maps.Size(36, 98)
                };

            var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),
                marker = createMarker(JungPositions[i], markerImage);

            JungMarkers.push(marker);
        }
    }

    function setJungMarkers(map) {
        for (var i = 0; i < JungMarkers.length; i++) {
            JungMarkers[i].setMap(map);
        }
    }

    //************************************************
    function createDongMarkers() {
        for (var i = 0; i < DongPositions.length; i++) {

            var imageSize = new kakao.maps.Size(22, 26),
                imageOptions = {
                    spriteOrigin: new kakao.maps.Point(10, 72),
                    spriteSize: new kakao.maps.Size(36, 98)
                };

            var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),
                marker = createMarker(DongPositions[i], markerImage);

            DongMarkers.push(marker);
        }
    }


    function setDongMarkers(map) {
        for (var i = 0; i < DongMarkers.length; i++) {
            DongMarkers[i].setMap(map);
        }
    }

    //************************************************
    function createSeoMarkers() {
        for (var i = 0; i < SeoPositions.length; i++) {

            var imageSize = new kakao.maps.Size(22, 26),
                imageOptions = {
                    spriteOrigin: new kakao.maps.Point(10, 72),
                    spriteSize: new kakao.maps.Size(36, 98)
                };

            var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),
                marker = createMarker(SeoPositions[i], markerImage);

            SeoMarkers.push(marker);
        }
    }


    function setSeoMarkers(map) {
        for (var i = 0; i < SeoMarkers.length; i++) {
            SeoMarkers[i].setMap(map);
        }
    }

    //************************************************
    function createSusungMarkers() {
        for (var i = 0; i < SusungPositions.length; i++) {

            var imageSize = new kakao.maps.Size(22, 26),
                imageOptions = {
                    spriteOrigin: new kakao.maps.Point(10, 72),
                    spriteSize: new kakao.maps.Size(36, 98)
                };

            var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),
                marker = createMarker(SusungPositions[i], markerImage);

            SusungMarkers.push(marker);
        }
    }


    function setSusungMarkers(map) {
        for (var i = 0; i < SusungMarkers.length; i++) {
            SusungMarkers[i].setMap(map);
        }
    }

    //************************************************
    function createDalMarkers() {
        for (var i = 0; i < DalPositions.length; i++) {

            var imageSize = new kakao.maps.Size(22, 26),
                imageOptions = {
                    spriteOrigin: new kakao.maps.Point(10, 72),
                    spriteSize: new kakao.maps.Size(36, 98)
                };

            var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),
                marker = createMarker(DalPositions[i], markerImage);

            DalMarkers.push(marker);
        }
    }


    function setDalMarkers(map) {
        for (var i = 0; i < DalMarkers.length; i++) {
            DalMarkers[i].setMap(map);
        }
    }

    //************************************************
    function createDalsungMarkers() {
        for (var i = 0; i < DalsungPositions.length; i++) {

            var imageSize = new kakao.maps.Size(22, 26),
                imageOptions = {
                    spriteOrigin: new kakao.maps.Point(10, 72),
                    spriteSize: new kakao.maps.Size(36, 98)
                };

            var markerImage = createMarkerImage(markerImageSrc, imageSize, imageOptions),
                marker = createMarker(DalsungPositions[i], markerImage);

            DalsungMarkers.push(marker);
        }
    }


    function setDalsungMarkers(map) {
        for (var i = 0; i < DalsungMarkers.length; i++) {
            DalsungMarkers[i].setMap(map);
        }
    }


    function changeMarker(type) {

        var Buk = document.getElementById('Buk');
        var Nam = document.getElementById('Nam');
        var Jung = document.getElementById('Jung');
        var Dong = document.getElementById('Dong');
        var Seo = document.getElementById('Seo');
        var Susung = document.getElementById('Susung');
        var Dal = document.getElementById('Dal');
        var Dalsung = document.getElementById('Dalsung');

        if (type === 'Buk') {


            Buk.className = 'menu_selected';
            Nam.className = '';
            Jung.className = '';
            Dong.className = '';
            Seo.className = '';
            Susung.className = '';
            Dal.className = '';
            Dalsung.className = '';

            setBukMarkers(map);
            setNamMarkers(null);
            setJungMarkers(null);
            setDongMarkers(null);
            setSeoMarkers(null);
            setSusungMarkers(null);
            setDalMarkers(null);
            setDalsungMarkers(null);


            Bukpolygon = new kakao.maps.Polygon({
                path:BukpolygonPath,
                strokeWeight : 3,
                strokeColor: '#39DE2A',
                strokeOpacity: 0.8,
                strokeStyle: 'longdash',
                fillColor: '#A2FF99',
                fillOpacity: 0.7
            });

            Bukpolygon.setMap(map);
            Nampolygon.setMap(null);
            Jungpolygon.setMap(null);
            Dongpolygon.setMap(null);
            Seopolygon.setMap(null);
            Susungpolygon.setMap(null);
            Dalpolygon.setMap(null);
            Dalsungpolygon.setMap(null);

        } else if (type === 'Nam') {

            Buk.className = '';
            Nam.className = 'menu_selected';
            Jung.className = '';
            Dong.className = '';
            Seo.className = '';
            Susung.className = '';
            Dal.className = '';
            Dalsung.className = '';

            setBukMarkers(null);
            setNamMarkers(map);
            setJungMarkers(null);
            setDongMarkers(null);
            setSeoMarkers(null);
            setSusungMarkers(null);
            setDalMarkers(null);
            setDalsungMarkers(null);

            Nampolygon = new kakao.maps.Polygon({
                path:NampolygonPath,
                strokeWeight : 3,
                strokeColor: '#39DE2A',
                strokeOpacity: 0.8,
                strokeStyle: 'longdash',
                fillColor: '#A2FF99',
                fillOpacity: 0.7
            });

            Bukpolygon.setMap(null);
            Nampolygon.setMap(map);
            Jungpolygon.setMap(null);
            Dongpolygon.setMap(null);
            Seopolygon.setMap(null);
            Susungpolygon.setMap(null);
            Dalpolygon.setMap(null);
            Dalsungpolygon.setMap(null);

        }  else if (type === 'Jung') {

            Buk.className = '';
            Nam.className = '';
            Jung.className = 'menu_selected';
            Dong.className = '';
            Seo.className = '';
            Susung.className = '';
            Dal.className = '';
            Dalsung.className = '';

            setBukMarkers(null);
            setNamMarkers(null);
            setJungMarkers(map);
            setDongMarkers(null);
            setSeoMarkers(null);
            setSusungMarkers(null);
            setDalMarkers(null);
            setDalsungMarkers(null);

            Jungpolygon = new kakao.maps.Polygon({
                path:JungpolygonPath,
                strokeWeight : 3,
                strokeColor: '#39DE2A',
                strokeOpacity: 0.8,
                strokeStyle: 'longdash',
                fillColor: '#A2FF99',
                fillOpacity: 0.7
            });

            Bukpolygon.setMap(null);
            Nampolygon.setMap(null);
            Jungpolygon.setMap(map);
            Dongpolygon.setMap(null);
            Seopolygon.setMap(null);
            Susungpolygon.setMap(null);
            Dalpolygon.setMap(null);
            Dalsungpolygon.setMap(null);

        }  else if (type === 'Dong') {

            Buk.className = '';
            Nam.className = '';
            Jung.className = '';
            Dong.className = 'menu_selected';
            Seo.className = '';
            Susung.className = '';
            Dal.className = '';
            Dalsung.className = '';

            setBukMarkers(null);
            setNamMarkers(null);
            setJungMarkers(null);
            setDongMarkers(map);
            setSeoMarkers(null);
            setSusungMarkers(null);
            setDalMarkers(null);
            setDalsungMarkers(null);

            Dongpolygon = new kakao.maps.Polygon({
                path:DongpolygonPath,
                strokeWeight : 3,
                strokeColor: '#31B25A',
                strokeOpacity: 0.8,
                strokeStyle: 'longdash',
                fillColor: '#A2FF70',
                fillOpacity: 0.7
            });

            Bukpolygon.setMap(null);
            Nampolygon.setMap(null);
            Jungpolygon.setMap(null);
            Dongpolygon.setMap(map);
            Seopolygon.setMap(null);
            Susungpolygon.setMap(null);
            Dalpolygon.setMap(null);
            Dalsungpolygon.setMap(null);

        } else if (type === 'Seo') {

            Buk.className = '';
            Nam.className = '';
            Jung.className = '';
            Dong.className = '';
            Seo.className = 'menu_selected';
            Susung.className = '';
            Dal.className = '';
            Dalsung.className = '';

            setBukMarkers(null);
            setNamMarkers(null);
            setJungMarkers(null);
            setDongMarkers(null);
            setSeoMarkers(map);
            setSusungMarkers(null);
            setDalMarkers(null);
            setDalsungMarkers(null);

            Seopolygon = new kakao.maps.Polygon({
                path:SeopolygonPath,
                strokeWeight : 3,
                strokeColor: '#31B25A',
                strokeOpacity: 0.8,
                strokeStyle: 'longdash',
                fillColor: '#A2FF70',
                fillOpacity: 0.7
            });

            Bukpolygon.setMap(null);
            Nampolygon.setMap(null);
            Jungpolygon.setMap(null);
            Dongpolygon.setMap(null);
            Seopolygon.setMap(map);
            Susungpolygon.setMap(null);
            Dalpolygon.setMap(null);
            Dalsungpolygon.setMap(null);

        }  else if (type === 'Susung') {

            Buk.className = '';
            Nam.className = '';
            Jung.className = '';
            Dong.className = '';
            Seo.className = '';
            Susung.className = 'menu_selected';
            Dal.className = '';
            Dalsung.className = '';

            setBukMarkers(null);
            setNamMarkers(null);
            setJungMarkers(null);
            setDongMarkers(null);
            setSeoMarkers(null);
            setSusungMarkers(map);
            setDalMarkers(null);
            setDalsungMarkers(null);

            Susungpolygon = new kakao.maps.Polygon({
                path:SusungpolygonPath,
                strokeWeight : 3,
                strokeColor: '#31B25A',
                strokeOpacity: 0.8,
                strokeStyle: 'longdash',
                fillColor: '#A2FF70',
                fillOpacity: 0.7
            });

            Bukpolygon.setMap(null);
            Nampolygon.setMap(null);
            Jungpolygon.setMap(null);
            Dongpolygon.setMap(null);
            Seopolygon.setMap(null);
            Susungpolygon.setMap(map);
            Dalpolygon.setMap(null);
            Dalsungpolygon.setMap(null);

        }   else if (type === 'Dal') {

            Buk.className = '';
            Nam.className = '';
            Jung.className = '';
            Dong.className = '';
            Seo.className = '';
            Susung.className = '';
            Dal.className = 'menu_selected';
            Dalsung.className = '';

            setBukMarkers(null);
            setNamMarkers(null);
            setJungMarkers(null);
            setDongMarkers(null);
            setSeoMarkers(null);
            setSusungMarkers(null);
            setDalMarkers(map);
            setDalsungMarkers(null);

            Dalpolygon = new kakao.maps.Polygon({
                path:DalpolygonPath,
                strokeWeight : 3,
                strokeColor: '#31B25A',
                strokeOpacity: 0.8,
                strokeStyle: 'longdash',
                fillColor: '#A2FF70',
                fillOpacity: 0.7
            });

            Bukpolygon.setMap(null);
            Nampolygon.setMap(null);
            Jungpolygon.setMap(null);
            Dongpolygon.setMap(null);
            Seopolygon.setMap(null);
            Susungpolygon.setMap(null);
            Dalpolygon.setMap(map);
            Dalsungpolygon.setMap(null);

        }   else if (type === 'Dalsung') {

            Buk.className = '';
            Nam.className = '';
            Jung.className = '';
            Dong.className = '';
            Seo.className = '';
            Susung.className = '';
            Dal.className = '';
            Dalsung.className = 'menu_selected';

            setBukMarkers(null);
            setNamMarkers(null);
            setJungMarkers(null);
            setDongMarkers(null);
            setSeoMarkers(null);
            setSusungMarkers(null);
            setDalMarkers(null);
            setDalsungMarkers(map);

            Dalsungpolygon = new kakao.maps.Polygon({
                path:DalsungpolygonPath,
                strokeWeight : 3,
                strokeColor: '#31B25A',
                strokeOpacity: 0.8,
                strokeStyle: 'longdash',
                fillColor: '#A2FF70',
                fillOpacity: 0.7
            });

            Bukpolygon.setMap(null);
            Nampolygon.setMap(null);
            Jungpolygon.setMap(null);
            Dongpolygon.setMap(null);
            Seopolygon.setMap(null);
            Susungpolygon.setMap(null);
            Dalpolygon.setMap(null);
            Dalsungpolygon.setMap(map);

        }
    }
</script>
</body>
</html>