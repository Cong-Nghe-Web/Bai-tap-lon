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
        <title>Bài 7</title>
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
                <h3>Mệnh đề quan hệ</h3>
                <u><b>1. Who</b></u>
			<br/>
			<b>• Dùng để thay thế cho danh từ chỉ người. </b>
			<br/>
			<br/>
			<br/>
			<u><b>2. Whom</b></u>
			<br/>
			<b>• Dùng để thay thế cho tân ngữ. </b>
			<br/>
			<br/>
			<br/>
			<u><b>3. Which</b></u>
			<br/>
			<b>• Dùng để thay thế cho danh từ chỉ vật. </b>
			<br/>
			<br/>
			<br/>
			<u><b>4. Whose</b></u>
			<br/>
			<b>• Dùng để thay thế cho danh từ chỉ sở hữu. </b>
			<br/>
			<br/>
			<br/>
			<u><b>5. That</b></u>
			<br/>
			<b>• Dùng để thay thế cho mọi thứ, nhưng không được đứng sau dấu phẩy. </b>
			<br/>
			<br/>
			<br/>
			<u><b>6. Where</b></u>
			<br/>
			<b>• Dùng để thay thế cho địa điểm. Where = In which nên khi dùng where không cần phải có giới từ. </b>
			<br/>
			<br/>
			<br/>
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