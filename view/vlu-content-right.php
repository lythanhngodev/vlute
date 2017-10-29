<div class="col-md-12" style="float: left;">
    <div class="vlu-bao-gach-ngang">
        <div class="gach-ngang"></div>
    </div>
    <h3 class="vlu-tieu-de-thong-bao">Thông báo</h3>
    <div class="vlu-noi-dung-thong-bao">
        <div class="vlu-diem-thong-bao">
            <ul class="vlu-thong-bao-ul">
            <li>
                <a href="#">Sinh viên Đại Học SPKT Vĩnh Long tham dự trại hè AVEC 2017 tại Malaysia (14-08-2017)</a>
            </li>
            <li>
                <a href="#">Sinh viên kỹ thuật Vĩnh Long với truyền thống "Uống nước nhớ nguồn" (28-07-2017)</a>
            </li>
            <li>
                <a href="#">Công ty Kyowakiden Việt Nam tuyển dụng 04 kỹ sư thiết kế cơ khí (12-07-2017)</a>
            </li>
            <li>
                <a href="#">Công ty CP Đại Đồng Tiến tuyển 150 kỹ thuật viên các ngành  (10-07-2017)</a>
            </li>
            <li>
                <a href="#">Thông báo tuyển dụng tháng 7-2017</a>
            </li>
            <li>
                <a href="#">Kế hoạch hưởng ứng "Ngày toàn dân phòng, chống mua bán người -30/7" năm 2017</a>
            </li>
        </ul>
        </div>
    </div>
</div>
<div class="clear-fix"></div>
<!-- Đơn vị trực thuộc -->
<div class="don-vi-truc-thuoc">
    ĐƠN VỊ TRỰC THUỘC
</div>
<div class="col-md-12" style="float: left;">
	<ul id="tabs">
        <li><a href="#" title="tab-khoa-bo-mon">Khoa - Bộ Môn</a></li>
        <li><a href="#" title="tab-phong-ban" class="vlu-list-xanh">Phòng ban</a></li>
        <li><a href="#" title="tab-trung-tam" class="vlu-list-duong">Trung tâm</a></li>
        <li><a href="#" title="tab-doan-the" class="vlu-list-tim">Đoàn thể</a></li>    
    </ul>

    <div id="content"> 
        <div id="tab-khoa-bo-mon" style="display: block;">
            <ul class="vlu-tab-list">
                
                <?php 
                    $khoabomon = get_khoa_bm();
                    while ($row = mysqli_fetch_assoc($khoabomon)) {
                ?>
                <li><a href="khoa-bo-mon/<?php echo $row['tenkhoa']; ?>-<?php echo $row['idkhoa']; ?>.vlute"><?php echo $row['tenkhoa']; ?></a></li>
                <?php
                    }
                 ?>
    		</ul>  
        </div>
        <div id="tab-phong-ban" style="display: block;">
            <ul class="vlu-tab-list vlu-xanh">
                <li><a href="http://pdt.vlute.edu.vn" target="_blank" rel="alternate noopener noreferrer">Phòng Đào tạo</a></li>
                <li><a href="phong-ban/23-phong-to-chuc-hanh-chinh">Phòng Tổ chức – Hành chính</a></li>
                <li><a href="phong-ban/19-phong-ke-toan-tai-vu">Phòng Kế toán – Tài vụ</a></li>
                <li><a href="phong-ban/20-phong-quan-ly-khoa-hoc-hop-tac-quoc-te">Phòng Nghiên cứu khoa học và Quan hệ quốc tế</a></li>
                <li><a href="phong-ban/21-phong-quan-tri-thiet-bi">Phòng Quản trị - Thiết bị</a></li>
                <li><a href="phong-ban/16-phong-cong-tac-hoc-sinh-sinh-vien">Phòng Công tác Học sinh – Sinh viên</a></li>
                <li><a href="phong-ban/22-phong-thanh-tra">Phòng Thanh tra</a></li>
                <li><a href="phong-ban/18-phong-khao-thi-dam-bao-chat-luong-giao-duc">Phòng Khảo thí và Đảm bảo chất lượng giáo dục</a></li>
            </ul>
        </div>
        <div id="tab-trung-tam" style="display: none;">
            <ul class="vlu-tab-list vlu-duong">
                <li><a href="trung-tam/35-trung-tam-an-toan-lao-dong-ve-sinh-lao-dong">Trung tâm An toàn lao động, vệ sinh lao động</a></li>
                <li><a href="trung-tam/36-trung-tam-thong-tin-thu-vien">Trung tâm Thông tin – Thư viện</a></li>
                <li><a href="trung-tam/37-trung-tam-dao-tao-boi-duong-nghiep-vu-su-pham">Trung tâm Đào tạo, Bồi dưỡng nghiệp vụ sư phạm</a></li>
                <li><a href="trung-tam/38-trung-tam-danh-gia-ky-nang-nghe">Trung tâm Đánh giá Kỹ năng nghề</a></li>
                <li><a href="trung-tam/39-trung-tam-ngoai-ngu">Trung tâm Ngoại ngữ</a></li>
                <li><a href="trung-tam/40-trung-tam-tin-hoc">Trung tâm Tin học</a></li>
                <li><a href="trung-tam/41-trung-tam-thuc-hanh">Trung tâm Thực hành</a></li>
            </ul>
        </div>
        <div id="tab-doan-the" style="display: none;">
            <ul class="vlu-tab-list vlu-tim">
                <li><a href="ban-tin/tin-tuc-dang" rel="alternate">Đảng ủy</a></li>
                <li><a href="/doan-the/85-cong-doan">Công đoàn</a></li>
                <li><a href="http://thanhnien.vlute.edu.vn" target="_blank" rel="alternate noopener noreferrer">Đoàn thanh niên</a></li>
                <li><a href="http://hsv.vlute.edu.vn" target="_blank" rel="alternate noopener noreferrer">Hội sinh viên</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="clear-fix"></div>
<div id="tien-ich" class="col-md-12">
    <div class="vlu-bao-gach-ngang">
        <div class="gach-ngang-tien-ich"></div>
    </div>
    <h3 class="vlu-tieu-de-tien-ich">Tiện ích</h3>
    <div class="vlu-noi-dung-tien-ich">
        
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $("#content div").hide(); // Initially hide all content
    $("#tabs li:first").attr("id","current"); // Activate first tab
    $("#content div:first").show(); // Show first tab content
    
    $('#tabs a').click(function(e) {
        e.preventDefault();        
        $("#content div").hide(); //Hide all content
        $("#tabs li").attr("id",""); //Reset id's
        $(this).parent().attr("id","current"); // Activate this
        $('#' + $(this).attr('title')).show(); // Show content for current tab
    });
});
</script>