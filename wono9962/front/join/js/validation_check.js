function validate() {
    const id = document.getElementById("id");
    const pw = document.getElementById("pw");
    const pw2 = document.getElementById("pw2");
    const num = document.getElementById("num");
    const num2 = document.getElementById("num").value;
    const phone = document.getElementById("phone");

    const pwCheck = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,25}$/;

    if (id.value == "") {
        alert('아이디를 입력하세요');
        id.focus();
        return 0;
    }
    ;
    if (pw.value == "") {
        alert('비밀번호를 입력하세요');
        pw.focus();
        return 0;
    }
    ;
    if (!pwCheck.test(pw.value)) {
        alert("비밀번호는 영문자+숫자+특수문자 조합이며, 8~25자리 가능합니다.");
        pw.focus();
        return 0;
    }
    ;
    if (pw2.value == "") {
        alert('비밀번호를 한번 더 입력하세요');
        pw2.focus();
        return 0;
    }
    ;
    if (pw2.value != pw.value) {
        alert("비밀번호가 일치하지 않습니다.");
        pw.focus();
        return 0;
    }
    ;
    // if (num.value == "") {
    //     alert('사업자등록번호를 - 없이 10자리 입력해주세요.');
    //     num.focus();
    //     return 0;
    // }
    // ;
    if (num.value != "") {
        if (num2.length == 10) {
            if (phone.value == "") {
                alert('휴대폰 번호를 입력하세요');
                phone.focus();
                return 0;
            }
        } else {
            alert('사업자등록번호는 10자리를 입력해야 합니다.')
        }
    }else {
        alert('사업자등록번호는 10자리를 입력해야 합니다.')
    }

    // ++ 중복확인을 했는지 검사
}