<div class="Logininformation">
    <p class="heading"><strong>會員系統</strong></p>
      <p><strong><?php echo "<font id='usernamestyle'>".$mname."</font>";?></strong>您好。<br>
      本次登入的時間為：<br><?php echo $mlogintime;?>
    </p>
      <p align="center"><a href="updateadmin.php?id=<?php echo $mid;?>">修改資料</a> | <a href="?logout=true">登出系統</a>
    </p>
</div>

<input type="checkbox" name="" id="showsidebar">
<div class="side-menu">
    <div class="sidebar-heading">
        <img src="https://github.com/linbanana/ican/blob/master/images/logo.png?raw=true" id="adminlogo">
    </div>
        <ul class="list-group list-group-flush ">
            <li>
              <a class="list-group-item py-2 list-group-item-action">後台管理系統</a>
                <ol>
                    <i>
                      <a href="adminmessage.php" class="list-group-item py-2 list-group-item-action">留言板</a>
                    </i>
                    <i>
                      <a href="#" class="list-group-item py-2 list-group-item-action">訂單管理</a>
                    </i>
                    <i>
                      <a href="#" class="list-group-item py-2 list-group-item-action">商品管理</a>
                    </i>
                    <i>
                      <a href="#" class="list-group-item py-2 list-group-item-action">網站圖片更新</a>
                    </i>
                </ol>
            </li>
           <li>
              <a class="list-group-item py-2 list-group-item-action">會員系統管理</a>
                <ol>
                    <i>
                      <a href="updateadmin.php?id=<?php echo $mid;?>" class="list-group-item py-2 list-group-item-action">修改資料</a>
                    </i>
                    <i>
                      <a href="queryadmin.php" class="list-group-item py-2 list-group-item-action">查詢、修改管理員資料</a>
                    </i>
                    <i>
                      <a href="querymember.php" class="list-group-item py-2 list-group-item-action">查詢、修改會員資料</a>
                    </i>
                    <i>
                      <a href="#" class="list-group-item py-2 list-group-item-action">訂單查詢</a>
                    </i>
                    <i>
                      <a href="#" class="list-group-item py-2 list-group-item-action">立即訂房</a>
                    </i>
                    <i>
                      <a href="querymember.php" class="list-group-item py-2 list-group-item-action">取消訂房</a>
                    </i>
                    <i>
                      <a href="#" class="list-group-item py-2 list-group-item-action">旅遊行程規劃</a>
                    </i>
                </ol>
            </li>
        </ul> 
    <label for="showsidebar">
        <i class="fa fa-angle-right"></i>
    </label>
</div>