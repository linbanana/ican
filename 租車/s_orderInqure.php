﻿<!DOCTYPE html>
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
    session_start();
    include("../layouts/header.php");
    ?>

<?php

  error_reporting(0);


  if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
    echo "<script>alert('尚未登入')</script>";
    header("Location: ../login.php");

 }

 include("../connMysql.php");
  $selectmember="SELECT `m_id` FROM `memberdata` WHERE `m_username`= '{$_SESSION["loginMember"]}'";
	$pick=$db_link->query($selectmember);
	$messagemember=$pick->fetch_assoc();    //抓資料庫的會員ID

     $m_id=$messagemember['m_id'];


$query_RecProduct ="SELECT *
FROM `s_orderdata`,`s_orderdetail`,`scooterdata`
WHERE s_orderdata.s_order_id=s_orderdetail.s_order_id
  AND s_orderdetail.s_id=scooterdata.s_id
  AND m_id=?
  order by s_orderdetid desc" ;
$query= $db_link->prepare($query_RecProduct);
  $query->bind_param('i', $m_id);

  $query->execute();
$result = $query->get_result();

?>
<div class="alert alert-success" role="alert">你已完成的租車名單</div>
<table class="table table-striped">
<thead class="thead-dark">
    <tr>
      <th scope="col">車型</th>
      <th scope="col">車子</th>
      <th scope="col">單價</th>
      <th scope="col">數量</th>
      <th scope="col">總價</th>
    </tr>
  </thead>
  <?php
     while($row = $result->fetch_assoc()){
  ?>
   <tr>
     <td>
      <?php echo  $row['s_model']; ?>
     </td>
     <td>
      <?php echo  $row['s_disc']; ?>
     </td>
     <td>
      <?php echo  $row['s_unitprice']; ?>
     </td>
     <td>
      <?php echo  $row['s_quantity']; ?>
     </td>
     <td>
      <?php echo  $row['s_unitprice']*$row['s_quantity']; ?>
     </td>
    </tr>
  <?php  }; ?>


</table>
<input class="btn btn-dark" type="button" name="backbtn" id="button4" value="回租車頁面" onClick="window.history.back();">

    <?php
    include("../layouts/footer.php");
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