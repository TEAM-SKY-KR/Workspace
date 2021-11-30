function data_validation() {
    const id = document.getElementById("id");
    const pw = document.getElementById("pw");


    if (id.value == "" || pw.value == "") {
        Swal.fire(
            '계정오류!',
            '아이디 또는 비밀번호를 확인해주세요!',
            'error'
        )
    } else {
        post_data();
    }
}


function post_data() {
    let queryString = $("form[name=shop_login_form]").serialize();
    $.ajax({
        type: 'post',
        url: 'shop_login_data.php',
        data: queryString,
        dataType: 'text',
        success: function (data) {
            if ($.trim(data) == "ok") {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '로그인 성공!',
                    showConfirmButton: false,
                    timer: 500
                })
                setTimeout(function () {
                    location.replace("../../index.php");
                }, 540);
            } else {
                Swal.fire(
                    '오류!',
                    '일치하지 않는 계정 입니다.',
                    'error'
                )
            }
        }
    });
}