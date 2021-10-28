function id_double_check() {
    // 빈칸 확인, 8자리 이상인지 확인  확인 하고 서버로 전송
    const id = document.getElementById("id").value;
    const id2 = document.getElementById("id");  //.value 넣으니까 focus() 함수가 안먹혀서 따로 id 받아와서 focus() 함수에만 적용

    // 빈칸 확인
    if (id.value != "") {
        //문자 길이 확인
        if (id.length < 8 || id.length > 20) {
            alert("아이디는 8~20자리 가능합니다.");
            id2.focus();
            return 0;
        } else if(id.length > 8 || id.length > 20 || id.value != "") {
            alert("사용 가능한 아이디입니다.");
            return 0;
        };
    } else if(id.value == "") {
        alert("아이디를 입력해주세요.");
        id2.focus();
    };
}