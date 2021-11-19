<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "../base/b_head.php"
    ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-end mb-4">
                    <div class="me-2">스탬프 : </div>
                    <div class="me-1"><i class="fas fa-stamp"></i></div>
                    <div>X 2</div>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">번호</th>
                        <th scope="col">장소</th>
                        <th scope="col">스탬프</th>
                        <th scope="col">날짜</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>228공원</td>
                        <td><i class="fas fa-stamp"></i></td>
                        <td>2021.10.02</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>스파크랜드</td>
                        <td><i class="fas fa-stamp"></i></td>
                        <td>2021.10.03</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>수성못</td>
                        <td><i class="fas fa-stamp"></i></td>
                        <td>2021.10.03</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>