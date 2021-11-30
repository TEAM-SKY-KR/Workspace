<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <title>관광지</title>
    <?php
    include_once "../base/b_head.php"
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
        <div class="col-12 mt-2">
            <div class="row">
                <div class="col-12">
                    <hr>
                    <h3 class="py-2"><i class="fas fa-map-marked-alt px-3"></i>대구 관광지 목록</h3>
                    <hr>
                </div>
            </div>


            <div class="row">
                <?php
                $page = $_GET["page"];
                $set = ($page-1)*8;
                $sql = "SELECT * FROM member_user_landmark LIMIT $set,8";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-lg-3 mb-3">
                        <div class="mb-3">
                            <!-- Product image-->
                            <img class="card-img-top rounded-top-3 w-100" src="img/<?= $row["id"] ?>.png"
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
                    </div>
                    <?php
                }
                ?>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="http://localhost/w/user/tourlist/tourlist.php?page=1">1</a></li>
                    <li class="page-item"><a class="page-link" href="http://localhost/w/user/tourlist/tourlist.php?page=2">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</body>
</html>