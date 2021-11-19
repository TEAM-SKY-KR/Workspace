<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>관리자페이지</title>
    <?php
    include_once "../base/b_head.php";
    ?>
    <style>
        #a_tag {
            color: white;
            font-weight: bold;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"
            integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="../js/admin/chart.js"></script>
</head>
<body>
<?php
include_once "header/navbar.php";
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="border bg-light">
                <h3 class="fw-bold text-center">사용자통계</h3>
                <div>
                    <canvas id="myChart01"></canvas>
                    <script>
                        bar_chart([10,20,30],'myChart01');
                    </script>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="border bg-light">
                <h3 class="fw-bold text-center">매장통계</h3>
                <div>
                    <canvas id="myChart02"></canvas>
                    <script>
                        bar_chart([30,200,40],'myChart02');
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>