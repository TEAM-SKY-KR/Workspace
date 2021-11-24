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
    date_now.innerHTML = month + "월" + date + "일" + " 오늘의 사용자 수는 00명 입니다!";
    date_now_date.innerHTML = date + "일";

}


function create_map() {

    let mapContainer = document.getElementById('map'), // 지도를 표시할 div
        mapOption = {
            center: new kakao.maps.LatLng(35.8470666, 128.583532), // 지도의 중심좌표
            level: 5 // 지도의 확대 레벨
        };

    // 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
    let map = new kakao.maps.Map(mapContainer, mapOption);

}

function del_console() {
    console.clear();
}

