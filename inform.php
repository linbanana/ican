<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 環境建置 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/ican.css" rel="stylesheet" />
    <!-- 環境建置 -->
    <title>ican</title>
</head>
<body>
  <style>
/*about.php*/
.contactcontent{
    text-align: center;
}

.contactcontent .container{
    padding: 40px;
    border-bottom: 1px solid rgb(226, 182, 94);
}


.contactcontent .container .title{
    padding: 40px;
    font-size: 27px;
    text-align: center;
   /* -webkit -writing-mode: vertical-lr;
    writing-mode: vertical-lr;*/
}

.contactcontent .container p{
    padding: 10px;
    font-size: 14px;
    font-weight: 300;
    color: #000;
	text-align: left;
    vertical-align: top;
   /* display: inline-block;*/
}
/*about.php*/
  </style>
    <?php
        include("layouts/header.php");
    ?>
    <div class="contactcontent" >
	   <div class="container">
        <div class="title"><strong>周邊資訊</strong></div><br/>
			<p>親愛的貴賓您好，如果您想更了解ican，或是其他有任何疑問，歡迎您線上留言給我們，收到您的訊息後，我們盡快請專人回覆您的問題。謝謝您!</p>
       </div>
       <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29523.122798580654!2d120.35375504651635!3d22.33888510447923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3471ef8b9905a955%3A0xc695f3e2705e695b!2z55CJ55CD5ba8!5e0!3m2!1szh-TW!2stw!4v1573544722470!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
       </div>
	   
    </div>
    <?php
        include("layouts/footer.php");
    ?>

    <!-- 環境建置 -->
    <script src="scripts/jquery-3.4.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/umd/popper.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/ican.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d49835d5bd6ff90"></script>
    <!-- 環境建置 -->
</body>
</html>