<style type="text/css">
	.bao-trinh-chieu{
	    padding: 7px;
	    border-radius: 8px;
	    border: 1px solid rgba(0, 71, 154, 0.39);
	}
	.header-khoa {
	    float: left;
	    margin: -7px 0px 6px 0px;
	    border-bottom: 1px solid rgb(167, 192, 219);
	    width: 100%;
	}
</style>
<?php 
	$id = $_GET['id'];
	settype($id, 'int');
	$khoa=get_khoa_bo_mon($id); 
	$k = mysqli_fetch_array($khoa);
	$gv = get_nhan_su($id);
?>
<div class="header-khoa">
	<h2><?php echo $k['tenkhoa']; ?></h2>
</div>
<div class="content-khoa">
	<table id="bang-gioi-thieu-khoa" class="table table-striped">
	  <tbody>
	    <tr>
	      <th>Tên tiếng anh:</th>
	      <td><?php echo $k['tentienganh']; ?></td>
	    </tr>
	    <tr>
	      <th>Địa chỉ:</th>
	      <td><?php echo $k['diachi']; ?></td>
	    </tr>
	    <tr>
	      <th>Điện thoại:</th>
	      <td><?php echo $k['dienthoai']; ?></td>
	    </tr>
	    <tr>
	    	<th>Website:</th>
	    	<td><a href="#" target="_blank"><?php echo $k['link']; ?></a></td>
	    </tr>
	    <tr>
	    	<th>Email:</th>
	    	<td><a href="mailto:cit@vlute.edu.vn" target="_blank"><?php echo $k['mail']; ?></a></td>
	    </tr>
	    <tr>
	    	<th>Ngày thành lập:</th>
	    	<td><?php echo $k['ngaythanhlap']; ?></td>
	    </tr>
	  </tbody>
	</table>
	<!-- Nhân sự -->
	<table id="bang-nhan-su" class="table table-striped">
	  <thead>
	    <tr>
	      <th>STT</th>
	      <th>Họ & Tên</th>
	      <th>Trình độ chuyên môn</th>
	      <th>Chức vụ - Chức năng</th>
	      <th>Liên hệ</th>
	    </tr>
	  </thead>
	  <tbody>
  	<?php 
  		$stt = 1;
  		while ($row = mysqli_fetch_assoc($gv)) {
  	?>
	  	<tr>
	      <td class="canh-giua"><?php echo $stt; ?></td>
	      <td><?php echo $row['hoten']; ?></td>
	      <td class="canh-giua"><?php echo $row['trinhdochuyenmon']; ?></td>
	      <td class="canh-giua"><?php echo $row['chucvuchucnang']; ?></td>
	      <td class="canh-giua"><a href="mailto:<?php echo $row['lienhe']; ?>"><?php echo $row['lienhe']; ?></a></td>
	    </tr>
  	<?php
  		$stt++; }
  	 ?>
	    
	  </tbody>
	</table>
</div>