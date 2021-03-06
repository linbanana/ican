<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="\font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="\css/bootstrap.min.css" rel="stylesheet" />
    <link href="\css/ican.css" rel="stylesheet" />
    <script src="\scripts/jquery-3.4.1.min.js"></script>
    <!-- 環境建置 -->
    <title>ican</title>
</head>
<body>

    <?php
    include("layouts/header.php");
    ?>

    <div class="aboutcontent">
        <div class="container">
            <div class="photo">
                <img src="https://www.ciaotw.com/wp-content/uploads/2018/10/%E9%A3%AF%E5%BA%97%E5%A4%96%E8%A7%80JPG-498x600.jpg" style="height: 450px">
            </div>
            <div class="title">
                <strong>關於我們</strong>
            </div>
            <div class="address">
                <h5 align="center">ican大飯店位於929屏東縣琉球鄉復興路84號</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!4v1575217147413!6m8!1m7!1sxhGz2yiwCRsjKe_94v1URg!2m2!1d22.34486996193625!2d120.3707131741897!3f132.97!4f3.239999999999995!5f0.7820865974627469" width="60%" height="auto" frameborder="0" style="border:0;height: 300px" allowfullscreen=""></iframe>
                <hr>
            </div>
            <p>ican大飯店是地下2層，地上8層，並擁有198間時尚客房、15間專業的會議室、300人的國際會議廳、800人的會展大廳、暨3家頂級美饌中西式餐廳的精緻飯店。會館位於小琉球鬧區，可遠眺最美麗的海景，鄰近1,000公尺內計有高鐵、捷運站、火車站、國道出口、巨蛋球場、漢神百貨、新光三越。</p>
            <p>ican的概念，是我們希望能夠以這個logo，提醒我們秉持不放棄的精神，並相信我們能夠做得到，不斷地前進，創造更好的作品!</p><br />
        </div>
    </div>

    <?php
    include("layouts/footer.php");
    ?>

    <!-- 環境建置 -->
    <script src="\scripts/umd/popper.min.js"></script>
    <script src="\scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="\scripts/ican.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
    <!-- 環境建置 -->
</body>

</html>