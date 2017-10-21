<div class="trinh-chieu">
	<div class="slider-wrapper theme-default">
    	<div id="slider" class="nivoSlider"> 
    		<?php 
    		while ($row = mysqli_fetch_assoc($slider)) {
    		?>
    			<a href="<?php echo $row['link']; ?>">
					<img src="<?php echo $row['hinhanh']; ?>" data-thumb="<?php echo $row['hinhanh']; ?>" data-transition="<?php echo $row['style']; ?>" alt="<?php echo $row['tieude']; ?>" title="<?php echo $row['tieude']; ?>" />
				</a>
    		<?php
    		}
    		 ?>
		</div>
	</div> 	
</div>
<!--<div class="clear-fix"></div>-->
<!-- Tin tức -->
<div class="col-md-12 tin-quang-trong">
  <div class="khung-tin">
    <div id="menu-tin">
      <ul>
        <li>
          <a>Tin tức sự kiện</a>
        </li>
        <li>
          <a>Việc làm sinh viên</a>
        </li>
        <li>
          <a>Tuyển sinh</a>
        </li>
      </ul>
    </div><!-- Menu tin -->
    <div id="tin">
      <div id="tin-trai">
        <a href="#">
          <div id="hinh-anh-tin-trai" style="background-image: url('images/le-phat-bang-tot-nghiep-12-08-2017.jpg');"></div>
          <div id="tieu-de-tin-trai">Lễ phát bằng tốt nghiệp cho 173 tân kỹ sư</div>
          <div id="noi-dung-tin-trai">Sáng 12-08-2017, Đại học Sư Phạm Kỹ Thuật Vĩnh Long đã tổ chức lễ phát bằng tốt nghiệp cho 173 tân kỹ sư hệ đại học VLVH và cao đẳng nghề liên thông K39, K40...</div>
          <div id="ngay-tin-trai"><i class="fa fa-calendar"></i>&nbsp;&nbsp;02-08-2017</div>
        </a>
      </div><!-- Tin trái -->
      <div id="tin-phai">
        <a href="#">
          <div class="tin-con-phai">
          <div class="hinh-anh-tin-con-phai" style="background-image: url('images/le-phat-bang-tot-nghiep-12-08-2017.jpg');"></div>
            <div class="tin-con-phai-phai">
              <div class="tieu-de-tin-con-phai">Lễ phát bằng tốt nghiệp cho 173 tân kỹ sư</div>
              <div class="ngay-tin-con-phai"><i class="fa fa-calendar"></i>&nbsp;&nbsp;02-08-2017</div>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="tin-con-phai">
          <div class="hinh-anh-tin-con-phai" style="background-image: url('images/le-phat-bang-tot-nghiep-12-08-2017.jpg');"></div>
            <div class="tin-con-phai-phai">
              <div class="tieu-de-tin-con-phai">Lễ phát bằng tốt nghiệp cho 173 tân kỹ sư</div>
              <div class="ngay-tin-con-phai"><i class="fa fa-calendar"></i>&nbsp;&nbsp;02-08-2017</div>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="tin-con-phai">
          <div class="hinh-anh-tin-con-phai" style="background-image: url('images/le-phat-bang-tot-nghiep-12-08-2017.jpg');"></div>
            <div class="tin-con-phai-phai">
              <div class="tieu-de-tin-con-phai">Lễ phát bằng tốt nghiệp cho 173 tân kỹ sư</div>
              <div class="ngay-tin-con-phai"><i class="fa fa-calendar"></i>&nbsp;&nbsp;02-08-2017</div>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="tin-con-phai">
          <div class="hinh-anh-tin-con-phai" style="background-image: url('images/le-phat-bang-tot-nghiep-12-08-2017.jpg');"></div>
            <div class="tin-con-phai-phai">
              <div class="tieu-de-tin-con-phai">Lễ phát bằng tốt nghiệp cho 173 tân kỹ sư</div>
              <div class="ngay-tin-con-phai"><i class="fa fa-calendar"></i>&nbsp;&nbsp;02-08-2017</div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
	<div class="vlu-line"></div>
	<div class="vlu-tin-con">
  </div>
</div>