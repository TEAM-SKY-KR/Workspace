function printClock() {

    let clock = document.getElementById("clock");            // 출력할 장소 선택
    let currentDate = new Date();                                     // 현재시간
    let calendar = currentDate.getFullYear() + "-" + (currentDate.getMonth() + 1) + "-" + currentDate.getDate() // 현재 날짜
    let amPm = 'AM'; // 초기값 AM
    let currentHours = addZeros(currentDate.getHours(), 2);
    let currentMinute = addZeros(currentDate.getMinutes(), 2);
    let currentSeconds = addZeros(currentDate.getSeconds(), 2);

    if (currentHours >= 12) { // 시간이 12보다 클 때 PM으로 세팅, 12를 빼줌
        amPm = 'PM';
        currentHours = addZeros(currentHours - 12, 2);
    }

    if (currentSeconds >= 50) {// 50초 이상일 때 색을 변환해 준다.
        currentSeconds = currentSeconds;
    }
    clock.innerHTML = currentHours + ":" + currentMinute + ":" + currentSeconds + amPm; //날짜를 출력해 줌

    setTimeout("printClock()", 1000);         // 1초마다 printClock() 함수 호출
}

function addZeros(num, digit) { // 자릿수 맞춰주기
    let zero = '';
    num = num.toString();
    if (num.length < digit) {
        for (i = 0; i < digit - num.length; i++) {
            zero += '0';
        }
    }
    return zero + num;
}


function current_date() {
    let date_now = document.getElementById("date_now");
    let date_now_date = document.getElementById("date_now_date");
    let now = new Date();	// 현재 날짜 및 시간
    let month = now.getMonth() + 1;	// 월
    let date = now.getDate(); // 일
    date_now.innerHTML = month + "월" + date + "일" + " 오늘의 대구는 어디인가요?";
    date_now_date.innerHTML = date + "일";

}


function create_map() {

    var mapContainer = document.getElementById('map'), // 지도를 표시할 div
        mapOption = {
            center: new kakao.maps.LatLng(35.8470666, 128.583532), // 지도의 중심좌표
            level: 5 // 지도의 확대 레벨
        };

    var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

// 마커를 표시할 위치와 title 객체 배열입니다
    var positions = [

        {
            title: '대구 북구 동천동 899-5 일원',
            latlng: new kakao.maps.LatLng(35.9431565, 128.561366)
        },
        {
            title: '대구광역시 중구 중앙대로77길 45',
            latlng: new kakao.maps.LatLng(35.8682081, 128.590983)
        },
        {
            title: '대구광역시 중구 동성로6길 61',
            latlng: new kakao.maps.LatLng(35.8687847, 128.598467)
        },
        {
            title: '대구광역시 달성군 하빈면 묘동 4길 15',
            latlng: new kakao.maps.LatLng(35.9067348, 128.412622)
        },
        {
            title: '대구광역시 동구 도동 산 180번지',
            latlng: new kakao.maps.LatLng(35.9178034, 128.662431)
        },
        {
            title: '대구광역시 중구 명륜로 112',
            latlng: new kakao.maps.LatLng(35.8595608, 128.596146)
        },
        {
            title: '대구광역시 서구 평리로 35길 18-17',
            latlng: new kakao.maps.LatLng(35.8617144, 128.545111)
        },
        {
            title: '대구광역시 달성군 유가면 달창로 429',
            latlng: new kakao.maps.LatLng(35.6406417, 128.485615)
        },
        {
            title: '대구광역시 중구 서성로 10',
            latlng: new kakao.maps.LatLng(35.8677161, 128.587984)
        },
        {
            title: '대구광역시 동구 갓바위로 229',
            latlng: new kakao.maps.LatLng(35.9711142, 128.726235)
        },
        {
            title: '대구광역시 북구 구암로 388-25',
            latlng: new kakao.maps.LatLng(35.9442037, 128.576402)
        },
        {
            title: '대구광역시 동구 도장길 243',
            latlng: new kakao.maps.LatLng(35.9762946, 128.714984)
        },
        {
            title: '대구광역시 동구 팔공산로 967-28',
            latlng: new kakao.maps.LatLng(35.9952024, 128.673300)
        },
        {
            title: '대구광역시 동구 신숭겸길 17',
            latlng: new kakao.maps.LatLng(35.9428187, 128.641445)
        },
        {
            title: '대구광역시 달성군 유가면 육신사길 51',
            latlng: new kakao.maps.LatLng(35.9098875, 128.415802)
        },
        {
            title: '대구광역시 중구 문우관길 65',
            latlng: new kakao.maps.LatLng(35.8643030, 128.592588)
        },
        {
            title: '대구광역시 동구 파계로 740',
            latlng: new kakao.maps.LatLng(35.9954086, 128.639418)
        },
        {
            title: '대구광역시 중구 달구벌대로 2029',
            latlng: new kakao.maps.LatLng(35.8667940, 128.585475)
        },
        {
            title: '대구광역시 달성군 가창면 헐티로 486',
            latlng: new kakao.maps.LatLng(35.7553173, 128.567961)
        },
        {
            title: '대구광역시 수성구 청호로 321',
            latlng: new kakao.maps.LatLng(35.8460870, 128.638488)
        },
        {
            title: '대구광역시 달서구 달구벌대로 1095',
            latlng: new kakao.maps.LatLng(35.8555794, 128.484165)
        },
        {
            title: '대구광역시 중구 중앙대로 456-8',
            latlng: new kakao.maps.LatLng(35.8736498, 128.595155)
        },
        {
            title: '대구광역시 동구 팔공산로 225-34',
            latlng: new kakao.maps.LatLng(35.9978168, 128.613984)
        },
        {
            title: '대구광역시 남구 중앙대로 219',
            latlng: new kakao.maps.LatLng(35.8524209, 128.588886)
        },
        {
            title: '대구광역시 수성구 유니버시아드로 180',
            latlng: new kakao.maps.LatLng(35.8306656, 128.688863)
        },
        {
            title: '대구광역시 달서구 달서대로 210',
            latlng: new kakao.maps.LatLng(35.8224840, 128.496927)
        },
        {
            title: '대구광역시 수성구 용학로 35-5',
            latlng: new kakao.maps.LatLng(35.8268014, 128.613250)
        },
        {
            title: '대구광역시 달성군 가창면 가창로 1003',
            latlng: new kakao.maps.LatLng(35.7937041, 128.626518)
        },
        {
            title: '대구광역시 달성군 유가면 휴양림길 230 자연휴양림 내 해발 590m',
            latlng: new kakao.maps.LatLng(35.6900201, 128.512908)
        },
        {
            title: '대구광역시 달서구 화암로 342',
            latlng: new kakao.maps.LatLng(35.8011927, 128.520399)
        },
        {
            title: '대구광역시 북구 구암로 47',
            latlng: new kakao.maps.LatLng(35.9350342, 128.546281)
        },
        {
            title: '대구광역시 중구 문우관길 47',
            latlng: new kakao.maps.LatLng(35.8645415, 128.591585)
        },
        {
            title: '대구광역시 수성구 무학로 180',
            latlng: new kakao.maps.LatLng(35.8292752, 128.628283)
        },
        {
            title: '대구광역시 남구 성당로 60길 90',
            latlng: new kakao.maps.LatLng(35.8567795, 128.578844)
        },
        {
            title: '대구광역시 남구 앞산순환로 478',
            latlng: new kakao.maps.LatLng(35.8313016, 128.576978)
        },
        {
            title: '대구광역시 중구 관덕정길 11',
            latlng: new kakao.maps.LatLng(35.8651783, 128.591133)
        },
        {
            title: '대구광역시 북구 유통단지로 90',
            latlng: new kakao.maps.LatLng(35.9070860, 128.613071)
        },
        {
            title: '대구광역시 북구 유통단지로 14길 17',
            latlng: new kakao.maps.LatLng(35.9061667, 128.611735)
        },
        {
            title: '대구광역시 서구 국채보상로 136',
            latlng: new kakao.maps.LatLng(35.8680321, 128.545765)
        },
        {
            title: '대구광역시 달서구 공원순환로 46 (두류공원 내)',
            latlng: new kakao.maps.LatLng(35.8509869, 128.557289)
        },
        {
            title: '대구광역시 동구 미대동 478-3',
            latlng: new kakao.maps.LatLng(35.9536722, 128.679606)
        },
        {
            title: '대구광역시 동구 팔공로 50길 66',
            latlng: new kakao.maps.LatLng(35.9202243, 128.650894)
        },
        {
            title: '대구광역시 중구 달구벌대로 415길 49',
            latlng: new kakao.maps.LatLng(35.8685376, 128.589916)
        },
        {
            title: '대구광역시 중구 동성로 2길 80',
            latlng: new kakao.maps.LatLng(35.8695706, 128.597642)
        },
        {
            title: '대구광역시 중구 달성공원로 35',
            latlng: new kakao.maps.LatLng(35.8736816, 128.577717)
        },
        {
            title: '대구광역시 중구 국채보상로 670',
            latlng: new kakao.maps.LatLng(35.8687480, 128.602574)
        },
        {
            title: '대구광역시 달성군 화원읍 사문진로 1길 40-14',
            latlng: new kakao.maps.LatLng(35.8128673, 128.481014)
        },
        {
            title: '대구광역시 수성구 용학로 35-5',
            latlng: new kakao.maps.LatLng(35.8268014, 128.613250)
        },
        {
            title: '대구광역시 동구 효동로 2길 93(관리사무소)',
            latlng: new kakao.maps.LatLng(35.8761310, 128.656223)
        },
        {
            title: '대구광역시 달서구 공원순환로 7',
            latlng: new kakao.maps.LatLng(35.8501736, 128.561634)
        },
        {
            title: '대구광역시 동구 옻골로 195-5',
            latlng: new kakao.maps.LatLng(35.9079733, 128.686915)
        },
        {
            title: '대구광역시 북구 대학로 80',
            latlng: new kakao.maps.LatLng(35.8899242, 128.610697)
        },
        {
            title: '대구광역시 달서구 공원순환로 201',
            latlng: new kakao.maps.LatLng(35.8446604, 128.558715)
        },
        {
            title: '대구광역시 남구 명덕로 98-1',
            latlng: new kakao.maps.LatLng(35.8568547, 128.580661)
        },
        {
            title: '대구광역시 동구 효동로 2길 24',
            latlng: new kakao.maps.LatLng(35.8796679, 128.651968)
        },
        {
            title: '대구광역시 달성군 화원읍 본리리 산 13-1번지',
            latlng: new kakao.maps.LatLng(35.8021339, 128.513647)
        },
        {
            title: '대구광역시 중구 서성로 6-1',
            latlng: new kakao.maps.LatLng(35.8672491, 128.587864)
        },
        {
            title: '대구광역시 달성군 유가면 유가사길 161',
            latlng: new kakao.maps.LatLng(35.7133865, 128.507239)
        },
        {
            title: '대구광역시 달성군 옥포면 용연사길 260',
            latlng: new kakao.maps.LatLng(35.7479172, 128.520304)
        },
        {
            title: '대구광역시 달성군 가창면 가창로 891',
            latlng: new kakao.maps.LatLng(35.7882606, 128.635199)
        },
        {
            title: '대구광역시 중구 경상감영길 99',
            latlng: new kakao.maps.LatLng(35.8722291, 128.592204)
        },
        {
            title: '대구광역시 중구 동성로 2길 95',
            latlng: new kakao.maps.LatLng(35.8702023, 128.596902)
        },
        {
            title: '대구광역시 달성군 가창면 남지장사길 127',
            latlng: new kakao.maps.LatLng(35.7350623, 128.630818)
        },
        {
            title: '대구광역시 동구 지묘동 산 53-3번지',
            latlng: new kakao.maps.LatLng(35.9381213, 128.644927)
        },
        {
            title: '대구광역시 달성군 유가면 휴양림길 375',
            latlng: new kakao.maps.LatLng(35.7001434, 128.498969)
        },
        {
            title: '대구광역시 달서구 두류공원로 200',
            latlng: new kakao.maps.LatLng(35.8540255, 128.563403)
        },
        {
            title: '대구광역시 동구 팔공산로 199길 6-1',
            latlng: new kakao.maps.LatLng(35.9900408, 128.696288)
        },
        {
            title: '대구광역시 동구 효동로 2길 72',
            latlng: new kakao.maps.LatLng(35.8782633, 128.654507)
        },
        {
            title: '대구광역시 중구 국채보상로 547',
            latlng: new kakao.maps.LatLng(35.8709369, 128.590428)
        },
        {
            title: '대구광역시 달성군 가창면 우록길 218',
            latlng: new kakao.maps.LatLng(35.7232354, 128.646325)
        },
        {
            title: '대구광역시 북구 연암공원로 17길 20',
            latlng: new kakao.maps.LatLng(35.8983856, 128.599250)
        },
        {
            title: '대구광역시 달성군 화원읍 인흥3길 16',
            latlng: new kakao.maps.LatLng(35.7924912, 128.517966)
        },
        {
            title: '대구광역시 달성군 현풍면 현풍동로 86',
            latlng: new kakao.maps.LatLng(35.6981564, 128.451493)
        },
        {
            title: '대구광역시 달성군 구지면 구지서로 726',
            latlng: new kakao.maps.LatLng(35.7008128, 128.371685)
        },
        {
            title: '대구광역시 달성군 가창면 우록길 218',
            latlng: new kakao.maps.LatLng(35.7232354, 128.646325)
        },
        {
            title: '대구광역시 달성군 현풍면 지동길 3',
            latlng: new kakao.maps.LatLng(35.6667256, 128.429423)
        },
        {
            title: '대구광역시 달성군 가창면 조길방길 92-1',
            latlng: new kakao.maps.LatLng(35.7557669, 128.581811)
        },
        {
            title: '대구광역시 중구 남성로 23',
            latlng: new kakao.maps.LatLng(35.8684165, 128.589537)
        },
        {
            title: '대구광역시 달성군 화원읍 인흥 2길 26',
            latlng: new kakao.maps.LatLng(35.7896378, 128.515556)
        },
        {
            title: '대구광역시 동구 동화사 1길 1',
            latlng: new kakao.maps.LatLng(35.9959713, 128.703201)
        },
        {
            title: '대구광역시 수성구 두산동 산 21-8번지',
            latlng: new kakao.maps.LatLng(35.8248355, 128.616718)
        },
        {
            title: '대구광역시 중구 경상감영길 67',
            latlng: new kakao.maps.LatLng(35.8718103, 128.591166)
        },
        {
            title: '대구광역시 달성군 하빈면 육신사길 64',
            latlng: new kakao.maps.LatLng(35.9112122, 128.416567)
        },
        {
            title: '대구광역시 중구 남산로 4길 112',
            latlng: new kakao.maps.LatLng(35.8604398, 128.586931)
        },
        {
            title: '대구광역시 달성군 하빈면 육신사길 62',
            latlng: new kakao.maps.LatLng(35.9107430, 128.416614)
        },
        {
            title: '대구광역시 달성군 가창면 가창동로 117',
            latlng: new kakao.maps.LatLng(35.7799413, 128.654448)
        },
        {
            title: '대구광역시 수성구 팔현길 248',
            latlng: new kakao.maps.LatLng(35.8752827, 128.658276)
        },
        {
            title: '대구광역시 북구 칠곡중앙대로 597',
            latlng: new kakao.maps.LatLng(35.9492026, 128.550967)
        },
        {
            title: '대구광역시 달성군 현풍면 현풍동로 20길 27-8',
            latlng: new kakao.maps.LatLng(35.7015049, 128.451819)
        },
        {
            title: '대구광역시 수성구 달구벌대로 525길 14-21',
            latlng: new kakao.maps.LatLng(35.8584168, 128.651494)
        },
        {
            title: '대구광역시 달성군 유가면 도성길 180',
            latlng: new kakao.maps.LatLng(35.7176742, 128.516724)
        },
        {
            title: '대구광역시 동구 동화사1길 1',
            latlng: new kakao.maps.LatLng(35.9959713, 128.703201)
        },
        {
            title: '대구광역시 동구 파계로 741',
            latlng: new kakao.maps.LatLng(36.0013275, 128.641503)
        },
        {
            title: '대구광역시 달서구 두류공원로 200',
            latlng: new kakao.maps.LatLng(35.8540255, 128.563403)
        },
        {
            title: '대구광역시 중구 달구벌대로 2238',
            latlng: new kakao.maps.LatLng(35.8618040, 128.607693)
        },
        {
            title: '대구광역시 동구 팔공로 1003, 행복한 한과',
            latlng: new kakao.maps.LatLng(35.9546306, 128.688371)
        },
        {
            title: '대구광역시 중구 공평로4길 39',
            latlng: new kakao.maps.LatLng(35.8652920, 128.602250)
        },
        {
            title: '대구광역시 중구 국채보상로 492-58',
            latlng: new kakao.maps.LatLng(35.8686479, 128.584980)
        },
        {
            title: '대구광역시 동구 옻골로 195-5 일원',
            latlng: new kakao.maps.LatLng(35.9079733, 128.686915)
        },
        {
            title: '대구광역시 달성군 유가면 휴양림길 228',
            latlng: new kakao.maps.LatLng(35.6918302, 128.510137)
        },
        {
            title: '대구광역시 북구 유통단지로 13길 9',
            latlng: new kakao.maps.LatLng(35.9082292, 128.609129)
        },
        {
            title: '대구광역시 동구 안심로 389-5',
            latlng: new kakao.maps.LatLng(35.8713938, 128.726473)
        },
        {
            title: '대구광역시 중구 달구벌대로 지하 2100',
            latlng: new kakao.maps.LatLng(35.8649682, 128.593387)
        },
        {
            title: '대구광역시 중구 국채보상로 580',
            latlng: new kakao.maps.LatLng(35.8709189, 128.595189)
        },
        {
            title: '대구광역시 중구 교동길 35-4',
            latlng: new kakao.maps.LatLng(35.8735661, 128.596703)
        },
        {
            title: '대구광역시 중구 남성로 25',
            latlng: new kakao.maps.LatLng(35.8681075, 128.589730)
        },
        {
            title: '대구광역시 동구 동화사1길 1',
            latlng: new kakao.maps.LatLng(35.9959713, 128.703201)
        },
        {
            title: '대구광역시 중구 남성로 51-1(약전골목 일원)',
            latlng: new kakao.maps.LatLng(35.8672976, 128.592371)
        },
        {
            title: '대구광역시 달서구 달구벌대로 1487',
            latlng: new kakao.maps.LatLng(35.8498111, 128.529539)
        },
        {
            title: '대구광역시 동구 팔공로 30길 7-2',
            latlng: new kakao.maps.LatLng(35.9119373, 128.642103)
        },
        {
            title: '대구광역시 중구 공평로 4길 39',
            latlng: new kakao.maps.LatLng(35.8652920, 128.602250)
        },
        {
            title: '대구광역시 수성구 지범로 191(동아백화점 8층)',
            latlng: new kakao.maps.LatLng(35.8210819, 128.640364)
        },
        {
            title: '대구광역시 동구 동화사1길 1',
            latlng: new kakao.maps.LatLng(35.9959713, 128.703201)
        },
        {
            title: '대구광역시 중구 경상감영길 176',
            latlng: new kakao.maps.LatLng(35.8717911, 128.596690)
        },
        {
            title: '대구광역시 북구 문주길 170',
            latlng: new kakao.maps.LatLng(35.9113174, 128.524329)
        },
        {
            title: '대구광역시 동구 불로동 732-1번지 일원',
            latlng: new kakao.maps.LatLng(35.9040319, 128.638329)
        },
        {
            title: '대구광역시 중구 동성로 39, 7층(성내1동)',
            latlng: new kakao.maps.LatLng(35.8705200, 128.595369)
        },
        {
            title: '대구광역시 동구 팔공산로 1184',
            latlng: new kakao.maps.LatLng(35.9879150, 128.694313)
        },
        {
            title: '대구광역시 북구 대구체육관로 39',
            latlng: new kakao.maps.LatLng(35.8938156, 128.603400)
        },
        {
            title: '대구광역시 달서구 공원순환로 7',
            latlng: new kakao.maps.LatLng(35.8501736, 128.561634)
        },
        {
            title: '대구광역시 수성구 유니버시아드로 180',
            latlng: new kakao.maps.LatLng(35.8306656, 128.688863)
        },
        {
            title: '대구광역시 북구 호암로 15번지',
            latlng: new kakao.maps.LatLng(35.8832460, 128.592501)
        },
        {
            title: '대구광역시 달서구 송현로 7길 38',
            latlng: new kakao.maps.LatLng(35.8196435, 128.545524)
        },
        {
            title: '대구광역시 동구 도장길 29',
            latlng: new kakao.maps.LatLng(35.9654589, 128.701360)
        },
        {
            title: '대구광역시 중구 동덕로 145',
            latlng: new kakao.maps.LatLng(35.8681455, 128.603160)
        },
        {
            title: '대구광역시 중구 공평로 3 (2층)',
            latlng: new kakao.maps.LatLng(35.8644028, 128.599321)
        },
        {
            title: '대구 북구 복현로20길 40-31',
            latlng: new kakao.maps.LatLng(35.9029456, 128.623421)
        },
        {
            title: '대구 중구 달성로22길 27',
            latlng: new kakao.maps.LatLng(35.8754032, 128.583852)
        },
        {
            title: '대구 동구 팔공로 220-2(봉무동 1570-1)',
            latlng: new kakao.maps.LatLng(35.9174266, 128.641995)
        },
        {
            title: '대구시 달성군 옥포면 기세리 306',
            latlng: new kakao.maps.LatLng(35.7803447, 128.480256)
        },
        {
            title: '대구광역시 중구 중앙대로 395',
            latlng: new kakao.maps.LatLng(35.8683733, 128.593477)
        },
        {
            title: '대구 수성구 달구벌대로 467길 13',
            latlng: new kakao.maps.LatLng(35.8601510, 128.618065)
        },
        {
            title: '대구광역시 동구 입석로 15-18',
            latlng: new kakao.maps.LatLng(35.8932967, 128.647101)
        },
        {
            title: '대구광역시 동구 팔공로 50길 66',
            latlng: new kakao.maps.LatLng(35.9202243, 128.650894)
        },
        {
            title: '대구광역시 중구 동성로6길 45',
            latlng: new kakao.maps.LatLng(35.8689907, 128.597885)
        },
        {
            title: '대구시 동구 동내로 88',
            latlng: new kakao.maps.LatLng(35.8787777, 128.736221)
        },
        {
            title: '대구광역시 중구 진골목길 14',
            latlng: new kakao.maps.LatLng(35.8680594, 128.592685)
        },
        {
            title: '대구광역시 북구 대학로 80',
            latlng: new kakao.maps.LatLng(35.8899242, 128.610697)
        },
        {
            title: '대구광역시 중구 국채보상로150길 76-27',
            latlng: new kakao.maps.LatLng(35.8652782, 128.609357)
        },
        {
            title: '대구광역시 달성군 화원읍 사문진로1길 40-12',
            latlng: new kakao.maps.LatLng(35.8125595, 128.481860)
        },
        {
            title: '대구광역시 중구 달성로 56',
            latlng: new kakao.maps.LatLng(35.8691225, 128.583152)
        },
        {
            title: '대구광역시 남구 대명로 222',
            latlng: new kakao.maps.LatLng(35.8393291, 128.565384)
        },
        {
            title: '대구광역시 수성구 야구전설로 1',
            latlng: new kakao.maps.LatLng(35.8410990, 128.681260)
        },
        {
            title: '대구광역시 중구 남산로 4길 112',
            latlng: new kakao.maps.LatLng(35.8604398, 128.586931)
        },
        {
            title: '대구광역시 중구 중앙대로77길 50-5',
            latlng: new kakao.maps.LatLng(35.8686683, 128.590937)
        },
        {
            title: '대구광역시 동구 효동로2길 10',
            latlng: new kakao.maps.LatLng(35.8786695, 128.652489)
        },
        {
            title: '대구시 동구 동부로 149(A부지), 효신로 88(B부지)',
            latlng: new kakao.maps.LatLng(35.8779507, 128.629234)
        },
        {
            title: '대구광역시 동구 동부로 149, 9층 (신천동 신세계백화점 대구점)',
            latlng: new kakao.maps.LatLng(35.8779507, 128.629234)
        },
        {
            title: '대구 동구 구암길 38(미대동 555-4번지)',
            latlng: new kakao.maps.LatLng(35.9528371, 128.676818)
        },
        {
            title: '대구광역시 중구 태평로 141',
            latlng: new kakao.maps.LatLng(35.8760554, 128.593830)
        },
        {
            title: '대구광역시 남구 앞산순환로 454',
            latlng: new kakao.maps.LatLng(35.8225210, 128.584096)
        },
        {
            title: '대구광역시 달성군 가창면 가창로 175길 38-12',
            latlng: new kakao.maps.LatLng(35.7859747, 128.638957)
        },
        {
            title: '대구광역시 동구 중대동 301-2',
            latlng: new kakao.maps.LatLng(35.9740179, 128.632679)
        },
        {
            title: '대구광역시 동구 팔공산로 1037-10',
            latlng: new kakao.maps.LatLng(35.9935855, 128.681317)
        },
        {
            title: '대구광역시 달성군 유가면 휴양림길 230',
            latlng: new kakao.maps.LatLng(35.6900201, 128.512908)
        },
        {
            title: '대구광역시 동구 팔공산로185길 51',
            latlng: new kakao.maps.LatLng(35.9909354, 128.694832)
        },
        {
            title: '대구광역시 동구 팔공로 227(봉무동)',
            latlng: new kakao.maps.LatLng(35.9189207, 128.640143)
        },
        {
            title: '대구광역시 동구 파계로 112길 17(중대동 467)',
            latlng: new kakao.maps.LatLng(35.9793546, 128.636491)
        },
        {
            title: '대구광역시 중구 서성로14길 80 일대(경삼감영공원 뒤편)',
            latlng: new kakao.maps.LatLng(35.8728626, 128.591995)
        },
        {
            title: '대구광역시 동구 해동로 82',
            latlng: new kakao.maps.LatLng(35.8903169, 128.638313)
        },
        {
            title: '대구광역시 달서구 상인서로 8-6(상인동 1558)',
            latlng: new kakao.maps.LatLng(35.8120888, 128.547867)
        },
        {
            title: '대구광역시 달서구 도원동 952',
            latlng: new kakao.maps.LatLng(35.7947135, 128.557031)
        },
        {
            title: '대구광역시 중구 동덕로26길 101(대구삼덕초등학교와 삼덕동주민센터 사이)',
            latlng: new kakao.maps.LatLng(35.8647627, 128.608815)
        },
        {
            title: '대구광역시 중구 남성로 24',
            latlng: new kakao.maps.LatLng(35.8679153, 128.589272)
        },
        {
            title: '대구광역시 중구 북성로 86-2(북성로1가 40-6)',
            latlng: new kakao.maps.LatLng(35.8741081, 128.591854)
        },
        {
            title: '대구광역시 중구 북성로 70',
            latlng: new kakao.maps.LatLng(35.8739439, 128.589957)
        },
        {
            title: '대구광역시 중구 달성로 100(인교동 43-1)',
            latlng: new kakao.maps.LatLng(35.8741106, 128.582786)
        },
        {
            title: '대구광역시 중구 태평로28길 24',
            latlng: new kakao.maps.LatLng(35.8745614, 128.591641)
        },
        {
            title: '대구광역시 동구 효목동 225',
            latlng: new kakao.maps.LatLng(35.8801615, 128.642909)
        },
        {
            title: '대구광역시 수성구 유니버시아드로 140(대흥동 504)',
            latlng: new kakao.maps.LatLng(35.8306656, 128.688863)
        },
        {
            title: '대구광역시 중구 국채보상로 102길 60',
            latlng: new kakao.maps.LatLng(35.8678787, 128.586592)
        },
        {
            title: '대구광역시 중구 달구벌대로 2029(선교사 블레어주택 주변)',
            latlng: new kakao.maps.LatLng(35.8667940, 128.585475)
        },
        {
            title: '대구광역시 중구 중앙대로 449',
            latlng: new kakao.maps.LatLng(35.8734011, 128.594198)
        },
        {
            title: '대구광역시 수성구 동대구로 176(황금동 626)',
            latlng: new kakao.maps.LatLng(35.8468987, 128.627160)
        },
        {
            title: '대구광역시 동구 용진길 172(신용동 596)',
            latlng: new kakao.maps.LatLng(35.9823972, 128.648584)
        },
        {
            title: '대구광역시 달서구 월배로 250',
            latlng: new kakao.maps.LatLng(35.8190786, 128.540390)
        },
        {
            title: '대구광역시 남구 앞산순환로 454',
            latlng: new kakao.maps.LatLng(35.8225210, 128.584096)
        },
        {
            title: '대구광역시 달성군 유가면 테크노대로 6길 20',
            latlng: new kakao.maps.LatLng(35.6877660, 128.465621)
        },
        {
            title: '대구광역시 달성군 화원읍 마비정길 262-5',
            latlng: new kakao.maps.LatLng(35.7787813, 128.541615)
        },
        {
            title: '대구광역시 중구 달성로22길 31-12',
            latlng: new kakao.maps.LatLng(35.8754487, 128.584506)
        },
        {
            title: '대구광역시 동구 팔공산로 1155',
            latlng: new kakao.maps.LatLng(35.9891921, 128.691934)
        }


    ];

// 마커 이미지의 이미지 주소입니다
    var imageSrc = "https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/markerStar.png";

    for (var i = 0; i < positions.length; i++) {

        // 마커 이미지의 이미지 크기 입니다
        var imageSize = new kakao.maps.Size(24, 35);

        // 마커 이미지를 생성합니다
        var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize);

        // 마커를 생성합니다
        var marker = new kakao.maps.Marker({
            map: map, // 마커를 표시할 지도
            position: positions[i].latlng, // 마커를 표시할 위치
            title: positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
            image: markerImage // 마커 이미지
        });
    }


}

function del_console() {
    console.clear();
}

