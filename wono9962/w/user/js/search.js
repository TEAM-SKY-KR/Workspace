function info() {
    let queryString = $("input[name=search]").serialize();
    $.ajax({
        type: 'post',
        url: 'search/info.php',
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