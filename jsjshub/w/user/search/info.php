<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <title>검색결과</title>
    <?php
    ini_set('display_errors', '0');
    include_once "../base/b_head.php";
    ?>
    <link href="../css/styles.css" rel="stylesheet"/>
    <script src="../js/scripts.js"></script>
</head>
<body>
<?php
include_once "../header/menu.php";
include_once "../base/setup.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            $info = $_POST["search"];
            ?>
            <h3 class="mt-3 text-center">"<?= $info ?>" 검색결과</h3>
            <div class="border bg-light mt-3">
                <div class="row">
                    <?php

                    include_once "../base/setup.php";
                    $sql = "SELECT * FROM member_user_landmark WHERE title LIKE '%$info%'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="col-lg-3 mb-3">
                            <div class="mb-3">
                                <!-- Product image-->
                                <img class="card-img-top rounded-top-3 w-100"
                                     src="../tourlist/img/<?= $row["id"] ?>.png"
                                     alt="..." style="height: 200px;">

                                <!-- Product actions-->
                                <div class="card-footer bg-dark rounded-bottom-3 w-100">
                                    <div class="text-center">
                                        <a class="text-decoration-none text-white" href="#">
                                            <h5 class="mt-1"><?= $row["title"] ?></h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <span class="pe-2"><i class="fas fa-phone"></i></span>
                                <span class="ms-1"><?= $row["phone"] ?></span>
                            </div>
                            <div class="mt-2">
                                <span class="pe-2"><i class="fas fa-map-marked-alt"></i></span>
                                <span class="ms-1"><?= $row["address"] ?></span>
                            </div>
                            <div class="mt-2">
                                <span class="pe-2"><i class="fas fa-sticky-note"></i></span>
                                <span class="ms-1"><?= $row["description"] ?></span>
                            </div>


                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>