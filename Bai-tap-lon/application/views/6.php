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
        <title>Bài 6</title>
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
                <h3>Câu so sánh</h3>
                <u><b>Công thức</b></u>
			<br/>
			<b>• S1 + am/are/is + more + adj + than + S2 </b>
			<br/>
			<b>• S1 + V + more + adv + than + S2 + trợ động từ </b>
			<br/>
			<i>--> Dùng để so sánh hơn</i>
			<br/>
			<br/>
			<b>• S1 + am/are/is + as + adj + as + S2 </b>
			<br/>
			<b>• S1 + V + as + adv + as + S2 + trợ động từ </b>
			<br/>
			<i>--> Dùng để so sánh bằng</i>
			<br/>
			<br/>
			<b>• S1 + am/are/is + the most + adj </b>
			<br/>
			<b>• S1 + V + the most + adv </b>
			<br/>
			<i>--> Dùng để so sánh nhất</i>
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