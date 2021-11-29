function data_validation() {
    // 빈칸 확인, 8자리 이상인지 확인  확인 하고 서버로 전송
    const id = document.getElementById("id");
    const pw = document.getElementById("pw");
    const pw2 = document.getElementById("pw2");
    const email = document.getElementById("email");
    const phone = document.getElementById("phone");
    const check = document.getElementById("check");

    // 빈칸 확인
    if (id.value == "") {
        Swal.fire(
            '아이디오류!',
            '아이디를 입력해주세요!',
            'question'
        )
        id.focus();
        return;
    }else if (pw.value == "" || pw2.value == "") {
        Swal.fire(
            '비밀번호오류!',
            '비밀번호를 입력해주세요!',
            'question'
        )
        pw.focus();
        return;
    } else if (pw.value != pw2.value) {
        Swal.fire(
            '비밀번호오류!',
            '비밀번호가 맞지 않습니다.',
            'question'
        )
        pw.focus();
        return;
    }else if (email.value == "") {
        Swal.fire(
            '이메일오류!',
            '이메일을 입력해주세요!',
            'question'
        )
        email.focus();
        return;
    } else if (phone.value == "") {
        Swal.fire(
            '전화번호오류!',
            '전화번호를 입력해주세요!',
            'question'
        )
        phone.focus();
        return;
    }    else {
        post_data();
    }
}


function post_data() {
    let queryString = $("form[name=landmark_register_form]").serialize();
    $.ajax({
        type: 'post',
        url: 'landmark_join_data.php',
        data: queryString,
        dataType: 'text',
        success: function (data) {

           if(data=="ok"){
               Swal.fire({
                   position: 'center',
                   icon: 'success',
                   title: '회원가입이 완료되었습니다.',
                   showConfirmButton: false,
                   timer: 500
               })
               setTimeout(function () {
                   location.replace("../../index.php");
               }, 540);
           }else{
               Swal.fire(
                   '오류!',
                   '이미 존재하는 아이디 입니다.',
                   'error'
               )
           }
        }
    });
}

// ----------------------------------

function id_double_check() {
    let queryString = $("input[name=id]").serialize();
    $.ajax({
        type: 'post',
        url: 'landmark_join_id.php',
        data: queryString,
        dataType: 'text',
        success: function (data) {
            if (data == "ok") {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '사용가능한 아이디',
                    showConfirmButton: false,
                    timer: 500
                })
            } else if (data == "no") {
                Swal.fire(
                    '아이디오류!',
                    '이미 존재하는 아이디 입니다.',
                    'error'
                )
            }
        }
    });
}
