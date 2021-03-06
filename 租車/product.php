<?php
//require_once("connect.php");
include("../connMysql.php");
//購物車開始

require_once("mycart.php");
session_start();
$cart =& $_SESSION['cart']; // 將購物車的值設定為 Session
if(!is_object($cart)) $cart = new myCart();
// 新增購物車內容
if(isset($_POST["cartaction"]) && ($_POST["cartaction"]=="add")){
	$cart->add_item($_POST['id'],$_POST['qty'],$_POST['price'],$_POST['name']);
	header("Location: cart.php");
}

//購物車結束

$query_RecProduct = "SELECT * FROM scooterdata WHERE s_id=?";

$stmt = $db_link->prepare($query_RecProduct);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
$RecProduct = $stmt->get_result();
$row_RecProduct = $RecProduct->fetch_assoc();


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
    include("../layouts/header.php");
    ?>
<style type="text/css">

.smalltext {
	font-size: 11px;
	color: #999999;
	font-family: Georgia, "Times New Roman", Times, serif;
	vertical-align: baseline;
}
</style>
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>

<table  width="100%" border="0" align="center" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">

  <tr>
    <td class="tdbline"><table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr valign="top">

        <td><div class="subjectDiv " >
               <p class="p-3 mb-2 bg-primary text-white">租車車款詳細資料</p>

            </div>
            <div class="actionDiv "><a class="btn btn-info float-right badge badge-primary text-wrap" href="cart.php">我的租車</a></div>

          <div class="albumDiv">
            <div class="picDiv">
              <?php
                      if($row_RecProduct["s_id"]==""){
                ?>
              <img src="images/nopic.png" alt="暫無圖片"  border="0" />
              <?php }else{?>
                <div >

               <img src="img/<?php echo $row_RecProduct["s_id"];?>.jpg"
                     alt="<?php echo $row_RecProduct["s_id"];?>" width="100%"  border="0" />
                </div>
              <?php }?>
            </div>
            <div class="albuminfo alert alert-danger ">

               <span class="smalltext">特價 </span><span class="redword"><?php echo $row_RecProduct["s_price"];?></span>
               <span class="smalltext"> 元</span>            </div>
            </div>
          <div class="titleDiv alert alert-success">
            <?php echo $row_RecProduct["s_model"];?></div>
          <div class="dataDiv alert alert-primary ">
            <p><?php echo nl2br($row_RecProduct["s_disc"]);?></p>
            <hr width="100%" size="1" />
            <form name="form3" method="post" action="">
              <input name="id" type="hidden" id="id" value="<?php echo $row_RecProduct["s_id"];?>">
              <input name="name" type="hidden" id="name" value="<?php echo $row_RecProduct["s_model"];?>">
              <input name="price" type="hidden" id="price" value="<?php echo $row_RecProduct["s_price"];?>">
              <input name="qty" type="hidden" id="qty" value="1">
              <input name="cartaction" type="hidden" id="cartaction" value="add">
              <input  type="submit" name="button3" id="button3" class="btn btn-outline-primary" value="加入購物車">
              <input type="button" name="button4" id="button4" class="btn btn-outline-primary" value="回上一頁" onClick="window.history.back();">
            </form>
          </div></td>
        </tr>
    </table>
    </td>
  </tr>

</table>
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
<?php
$stmt->close();

//$db_link->close();

?>