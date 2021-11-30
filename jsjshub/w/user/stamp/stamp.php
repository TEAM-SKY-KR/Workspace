<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    ini_set('display_errors', '0');
    session_start();
    include_once "../base/b_head.php";
    include_once "../base/setup.php";
    ?>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-end mb-4">
                <div class="me-2">스탬프 :</div>
                <div class="me-1"><i class="fas fa-stamp"></i></div>
                <?php
                $id = $_SESSION["username"];
                $sql = "SELECT * FROM user_stamp WHERE username = '$id'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                    }
                }
                $total = mysqli_num_rows($result);
                ?>
                <div id="total">X <?=$total?></div>
            </div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col" class="text-center">번호</th>
                    <th scope="col" class="text-center">장소</th>
                    <th scope="col" class="text-center">스탬프</th>
                    <th scope="col" class="text-center">날짜</th>
                    <th scope="col" class="text-center">사용여부</th>
                    <th scope="col" class="text-center">사용처</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $id = $_SESSION["username"];
                $sql = "SELECT * FROM user_stamp WHERE username = '$id'";
                $result = mysqli_query($conn, $sql);

                $i=1;
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $i ?></th>
                            <td class="text-center"><?= $row["landmark"] ?></td>
                            <td class="text-center"><i class="fas fa-stamp"></i></td>
                            <td class="text-center"><?= $row["time"] ?></td>
                            <td class="text-center"><?= $row["use_check"] ?></td>
                            <td class="text-center"><?= $row["use_where"] ?></td>
                        </tr>
                        <?php
                        $i = $i+1;
                    }
                }

                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>