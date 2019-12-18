<?php
include("../connMysql.php");
//購物車開始
include("mycart.php");
session_start();
$cart =& $_SESSION['cart']; // 將購物車的值設定為 Session
if(!is_object($cart)) $cart = new myCart();
/*
foreach($cart->get_contents() as $item) {
  $i++;
  */
//購物車結束
//繫結產品目錄資料
/*
$query_RecCategory = "SELECT category.categoryid, category.categoryname, category.categorysort, count(product.productid) as productNum FROM category LEFT JOIN product ON category.categoryid = product.categoryid GROUP BY category.categoryid, category.categoryname, category.categorysort ORDER BY category.categorysort ASC";
$RecCategory = $db_link->query($query_RecCategory);
//計算資料總筆數
$query_RecTotal = "SELECT count(productid) as totalNum FROM product";
$RecTotal = $db_link->query($query_RecTotal);
$row_RecTotal = $RecTotal->fetch_assoc();
*/
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
    <script language="javascript">
function checkForm(){ 
  if(document.cartform.customername.value==""){
    alert("請填寫姓名!");
    document.cartform.customername.focus();
    return false;
  }
  if(document.cartform.customeremail.value==""){
    alert("請填寫電子郵件!");
    document.cartform.customeremail.focus();
    return false;
  }
  if(!checkmail(document.cartform.customeremail)){
    document.cartform.customeremail.focus();
    return false;
  } 
  if(document.cartform.customerphone.value==""){
    alert("請填寫電話!");
    document.cartform.customerphone.focus();
    return false;
  }
  if(document.cartform.customeraddress.value==""){
    alert("請填寫地址!");
    document.cartform.customeraddress.focus();
    return false;
  }
  return confirm('確定送出嗎？');
}
function checkmail(myEmail) {
  var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(filter.test(myEmail.value)){
    return true;
  }
  alert("電子郵件格式不正確");
  return false;
}
</script>
</head>
<body>
    <?php
    include("../layouts/header.php");
    ?>
<table width="780" border="0" align="center" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td height="80" align="center" background="images/mlogo.png" class="tdbline"></td>
  </tr>
  <tr>
    <td class="tdbline"><table width="100%" border="0" cellspacing="0" cellpadding="10">
        <tr valign="top">
          
          <td>
          <div class="subjectDiv"><span class="heading"><img src="images/16-cube-green.png" width="16" height="16" align="absmiddle"></span> </div>
            <div class="normalDiv">
              
              <p class="heading alert alert-primary"><img src="images/16-cube-orange.png" width="16" height="16" align="absmiddle"> 租車內容</p>
              <table class="table table-sm" width="90%" border="0" align="center" cellpadding="2" cellspacing="1">
                <tr>
                  <th bgcolor="#ECE1E1"><p>編號</p></th>
                  <th bgcolor="#ECE1E1"><p>產品名稱</p></th>
                  <th bgcolor="#ECE1E1"><p>數量</p></th>
                  <th bgcolor="#ECE1E1"><p>單價</p></th>
                  <th bgcolor="#ECE1E1"><p>小計</p></th>
                </tr>
                <?php		  
		  	$i=0;
			foreach($cart->get_contents() as $item) {
			$i++;
		  ?>
                <tr>
                  <td align="center" bgcolor="#F6F6F6" class="tdbline"><p><?php echo $i;?>.</p></td>
                  <td bgcolor="#F6F6F6" class="tdbline"><p><?php echo $item['info'];?></p></td>
                  <td align="center" bgcolor="#F6F6F6" class="tdbline">
                  <p>
                    <?php if($item['qty']>=10) {
                      echo "數量過多"; 
                      echo "
                      <script> 
                      alert('訂購數量過多');
                      location.href='cart.php';
                                               
                      </script>";
                     // header("Location: cart.php");
                    }
                    else
                    echo $item['qty'];?>
                   </p></td>
                  <td align="center" bgcolor="#F6F6F6" class="tdbline"><p>$ <?php echo number_format($item['price']);?></p></td>
                  <td align="center" bgcolor="#F6F6F6" class="tdbline"><p>$ <?php echo number_format($item['subtotal']);?></p></td>
                </tr>
                <?php }?>
                <tr>
                  <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>雜費</p></td>
                  <td valign="baseline" bgcolor="#F6F6F6"><p>&nbsp;</p></td>
                  <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>&nbsp;</p></td>
                  <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>&nbsp;</p></td>
                  <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>$ <?php echo number_format($cart->deliverfee);?></p></td>
                </tr>
                <tr>
                  <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>總計</p></td>
                  <td valign="baseline" bgcolor="#F6F6F6"><p>&nbsp;</p></td>
                  <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>&nbsp;</p></td>
                  <td align="center" valign="baseline" bgcolor="#F6F6F6"><p>&nbsp;</p></td>
                  <td align="center" valign="baseline" bgcolor="#F6F6F6"><p class="redword">$ <?php echo number_format($cart->grandtotal);?></p></td>
                </tr>
              </table>
              
              <form action="cartreport.php" method="post" name="cartform" id="cartform" onSubmit="return checkForm();">
                
                <hr width="100%" size="1" />
                <p align="center">
                  <input name="cartaction" type="hidden" id="cartaction" value="update">
                  
                  <input class="btn btn-dark" type="submit" name="updatebtn" id="button3" value="送出">
                                 
                  
                  <input class="btn btn-dark" type="button" name="backbtn" id="button4" value="回上一頁" onClick="window.history.back();">
                </p>
              </form>
            </div>
            
        </tr>
      </table></td>
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
<?php $db_link->close();?>