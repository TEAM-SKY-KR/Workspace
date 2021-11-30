function data_validation() {
    // 빈칸 확인, 8자리 이상인지 확인  확인 하고 서버로 전송
    const id = document.getElementById("id");
    const pw = document.getElementById("pw");
    const pw2 = document.getElementById("pw2");
    const num = document.getElementById("num");
    const phone = document.getElementById("phone");
    const regPho = /^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/;

    // 빈칸 확인
    if (id.value == "") {
        Swal.fire(
            '아이디오류!',
            '아이디를 입력해주세요!',
            'question'
        )
        id.focus();
        return 0;
    } else if (pw.value == "" || pw2.value == "") {
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
    } else if (num.value == "") {
        Swal.fire(
            '사업자번호오류!',
            '사업자번호를 입력해주세요!',
            'question'
        )
        num.focus();
        return;
    } else if (phone.value == "") {
        Swal.fire(
            '휴대폰번호오류!',
            '휴대폰번호를 입력해주세요!',
            'question'
        )
        phone.focus();
        return;
    } else if (!regPho.test(phone.value)){
        Swal.fire(
            '휴대폰번호오류!',
            '휴대폰번호를 입력해주세요!',
            'question'
        )
        phone.focus();
        return;
    } else {
        post_data();
    }
}


function post_data() {
    let queryString = $("form[name=shop_register_form]").serialize();
    $.ajax({
        type: 'post',
        url: 'shop_join_data.php',
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
        url: 'shop_join_id.php',
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
