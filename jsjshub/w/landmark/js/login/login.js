function login_validation(){
    let id = document.getElementById("id").value;
    let pw = document.getElementById("pw").value;

    if(id=="" || pw==""){
        return login_blank_error();
    }


}

function login_blank_error(){
    Swal.fire(
        '로그인 오류',
        '아이디 또는 비밀번호에 빈칸이 있습니다!',
        'question'
    )
}