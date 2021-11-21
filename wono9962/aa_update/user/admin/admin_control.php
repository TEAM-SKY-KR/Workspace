<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>관리자페이지 - 관리</title>
    <?php
    include_once "../base/b_head.php";
    ?>
    <style>
        #a_tag {
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
include_once "header/navbar.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="border bg-light p-3" style="overflow: auto; white-space: nowrap;">
                <table class="table" style="height: 300px;">
                    <thead>
                    <tr>
                        <th scope="col">번호</th>
                        <th scope="col">아이디</th>
                        <th scope="col">가입날짜</th>
                        <th scope="col">지점</th>
                        <th scope="col">권한</th>
                        <th scope="col">레벨</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">1</label>
                            </div>
                        </th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>

                    </tr>
                    </tbody>
                </table>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-users"></i></span>
                    <input type="text" class="form-control" placeholder="사용자" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-danger me-md-2" type="button">삭제</button>
                    <button class="btn btn-primary" type="button">승인</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>