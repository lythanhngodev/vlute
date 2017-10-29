<div id="trai" style="float: left;">
  <!-- Cột trái -->
  <div class="bao-trinh-chieu" style="float: left;">
  	<?php if (isset($_GET['v']) && $_GET['v'] == 'khoa-bo-mon' && isset($_GET['id']) && !empty($_GET['id'])){
        //thông tin khoa bộ môn
        include_once('model/md_khoa_bo_mon.php');
        include_once('view/khoa-bo-mon.php');
    }else{
      include_once('view/vlu-content-left.php');
    }?>
  </div>
  <!-- Cột phải -->
  <div class="bao-thong-bao" style="float: left;">
  	<?php include_once('view/vlu-content-right.php') ?>
  </div>
</div>

<script type="text/javascript" src="plugins/slider/jquery.nivo.slider.js"></script> 
<script type="text/javascript">
	$("document").ready(function() {
	    $('#slider').nivoSlider();
	});
</script>