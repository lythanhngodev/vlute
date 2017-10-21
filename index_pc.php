<?php 
  include_once("control/ctrl_index.php");
  include_once("model/md_index.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>TRANG CHỦ - Trường Đại Học Sư Phạm Kỹ Thuật Vĩnh Long</title>
	<?php include_once('view/header.php') ?>
	<!--
      ---        ---   222         96      69    $$$$$$$$$$$  !!!!!!!!!!!
       ---      ---    222         69      96        $$$      !!!
        ---    ---     222         96      69        $$$      !!!
         ---  ---      222         69      96        $$$      !!!!!!!!!
          ------       222         96      69        $$$      !!!
           ++++        222ooooooo   QQQ  QQQ         $$$      !!!
            ++         555ooooooo    %%%%%%          $$$      !!!!!!!!!!!
	-->
</head>
  <body>
    <div class="khung-trang-web" style="width: 100%;height: 105px;background: #ececed;">
      <div class="full-body">
        <?php include_once('view/vlu-header.php'); ?>
        <!--<div class="clear-fix"></div>-->
        <?php include_once('view/vlu-su-kien-hot.php'); ?>
        <!-- content -->
        <?php include_once('view/vlu-content.php'); ?>
        <!-- Footer -->
        <!--<div class="clear-fix"></div>-->
        <?php include_once('view/vlu-footer.php'); ?>
      </div>
      <div class="clear-fix"></div>
    </div>
  </body>
</html>