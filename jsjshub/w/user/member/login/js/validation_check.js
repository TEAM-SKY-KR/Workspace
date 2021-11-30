function validate() {
    var id = document.getElementById("id");
    var pw = document.getElementById("pw");
    var pw2 = document.getElementById("pw2");
    var phone = document.getElementById("phone");

    if (id.value == "") {
        alert('아이디를 입력하세요');
        id.focus();
        return false;
    }
    ;
    if (pw.value == "") {
        alert('비밀번호를 입력하세요');
        pw.focus();
        return false;
    }
    ;
    if (pw2.value == "") {
        alert('비밀번호를 한번 더 입력하세요');
        pw2.focus();
        return false;
    }
    ;
    if (phone.value == "") {
        alert('휴대폰 번호를 입력하세요');
        phone.focus();
        return false;
    }
    ;

    var pwCheck = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,25}$/;

    if (!pwCheck.test(pw.value)) {
        alert("비밀번호는 영문자+숫자+특수문자 조합이며, 8~25자리 가능합니다.");
        pw.focus();
        return false;
    }
    if (pw2.value !== pw.value) {
        alert("비밀번호가 일치하지 않습니다.")
        pw2.focus();
        return false;
    }
    document.join_form.submit();
}