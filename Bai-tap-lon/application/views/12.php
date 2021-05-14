<?php if (!defined('IN_SITE')) die('The request not found'); ?>
<?php session_start();
    $username= get_current_username();
    if ($username='') {
        redirect(base_url('index.php/?c=home&a=dangki'));
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Bài 12</title>
        <link ref="stylesheet" href='../../public/home/css/main.css' type="text/css">
    </head>
    <body>

        <div class="topnav">
            <a href="<?php echo base_url('index.php/?c=home&a=homelogin'); ?>">Trang chủ</a>
            <a href="<?php echo base_url('index.php/?c=nguphap&a=danhsach'); ?>">Ngữ pháp </a>
            <a href="<?php echo base_url('index.php/?c=dethi&a=danhsach'); ?>">Luyện đề</a>
            <?php echo 'Xin chào '.$username .'|<a href="<?php echo base_url('index.php/?c=out&a=logout'); ?>">Logout</a>';?>
        </div>

        <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h3>Một số trường hợp của phrasal verbs</h3>
                <b>
				1. Beat one’s self up: tự trách mình (khi dùng, thay one's self bằng mysel, yourself, himself, herself...)
				<br/>
				2. Break down: bị hư
				<br/> 
				3. Break in: đột nhập vào nhà
				<br/> 
				4. Break up with s.o: chia tay người yêu, cắt đứt quan hệ tình cảm với ai đó
 				<br/>
				5. Bring s.th up: đề cập chuyện gì đó
 				<br/>
				6. Bring s.o up: nuôi nấng (con cái)
 				<br/>
				7. Brush up on st: ôn lại
 				<br/>
				8. Call for st: cần cái gì đó;
				<br/>
				   Call for sb : kêu người nào đó, cho gọi ai đó, yêu cầu gặp ai đó
 				<br/>
				9. Carry out: thực hiện (kế hoạch)
 				<br/>
				10. Catch up with sb: theo kịp ai đó
 				<br/>
				11. Check in: làm thủ tục vào khách sạn
 				<br/>
				12. Check out: làm thủ tục ra khách sạn
				<br/> 
				13. Check st out: tìm hiểu, khám phá cái gì đó
 				<br/>
				14. Clean st up: lau chùi
 				<br/>
				15.Come across as: có vẻ (chủ ngữ là người)
 				<br/>
				16.Come off: tróc ra, sút ra
 				<br/>
				17. Come up against s.th: đối mặt với cái gì đó
 				<br/>
				18. Come up with: nghĩ ra
 				<br/>
				19. Cook up a story: bịa đặt ra 1 câu chuyện
 				<br/>
				20. Cool down: làm mát đi, bớt nóng, bình tĩnh lại (chủ ngữ có thể là người hoặc vật)
 				<br/>
				21. Count on sb: tin cậy vào người nào đó
 				<br/>
				22. Cut down on st: cắt giảm cái gì đó
 				<br/>
				23. Cut off: cắt lìa, cắt trợ giúp tài chính
 				<br/>
				24. Do away with st: bỏ cái gì đó đi không sử dụng cái gì đó
 				<br/>
				25. Do without st: chấp nhận không có cái gì đó
 				<br/>
				26. Dress up: ăn mặc đẹp
 				<br/>
				27. Drop by: ghé qua
				<br/>
				28. Figure out: suy ra
 				<br/>
				29. Drop sb off: thả ai xuống xe
 				<br/>
				30. End up = wind up: có kết cục
				<br/>
			</b>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>Giới thiệu</h2>
                <div class="fakeimg" style="height:100px;"><image src="../../pulic/home/image/P.jpg"></div>
                <p>Nhóm CLV</p>
            </div>
            <div class="card">
            <h3>Follow Me</h3>
            <p><a target="_blank" href="https://www.facebook.com/profile.php?id=100007623165499">Facebook</a></p>
            <p>YouTube</p>
            </div>
        </div>
        </div>

        <div class="footer">
        <h4>Công nghệ Web và dịch vụ trực tuyến</h4>
        </div>

    </body>
</html>