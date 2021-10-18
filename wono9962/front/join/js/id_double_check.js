function id_double_check() {
    // 빈칸 확인, 8자리 이상인지 확인  확인 하고 서버로 전송
    var id = document.getElementById("id").value;
    var pw = document.getElementById("pw").value;

    // 빈칸 확인
    if (id.length) {
        //문자 길이 확인
        if (id.length < 8 || id.length > 20) {
            alert("아이디는 8~20자리 가능합니다.")
            id.focus();
            return 0;
        } else {
            alert("사용 가능한 아이디입니다.");
            pw.focus();
            return 0;
        }
    } else {
        alert("아이디를 입력하세요");
        id.focus();
        return 0;
    }
}