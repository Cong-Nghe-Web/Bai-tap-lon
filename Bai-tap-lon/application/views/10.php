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
        <title>Bài 10</title>
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
                <h3>Một số thành ngữ tực ngữ</h3>
                <b>
				– Curses (like chickens) come home to roost: Ác giả ác báo
				<br/>
				– Wait the see: Thời gian sẽ trả lời
				<br/>
				– The more the merrier: Càng đông càng vui
				<br/>
				– Everyday is not Saturday: Sông có lúc người có khúc
				<br/>
				– Long absense, soon forgotten: Xa mặt cách lòng
				<br/>
				– As meek as a lamb: Hiền như bụt
				<br/>
				– As beatiful as rainbow: Đẹp như tiên
				<br/>
				– As bold as brass: Trơ như thớt
				<br/>
				– As stupid as a donkey: Ngu như chó
				<br/>
				– As timid as as a rabbit: Nhát như thỏ đế
				<br/>
				– Familiarity breeds contempt : Bụt chùa nhà không thiêng
				<br/>
				– Better safe than sorry: Cẩn tắc vô áy náy 
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