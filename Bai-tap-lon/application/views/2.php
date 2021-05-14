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
        <title>Bài 2</title>
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
            <h3>Câu bị động</h3>
            <u><b>1.Hiện tại đơn</b></u>
			<br/>
			<b>• S + is/are/am + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>2.Hiện tại tiếp diễn</b></u>
			<br/>
			<b>• S + is/are/am + being + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>3.Hiện tại hoàn thành</b></u>
			<br/>
			<b>• S + have/has + been + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>4.Hiện tại hoàn thành tiếp diễn</b></u>
			<br/>
			<b>• S + have/has + been + being + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>5.Quá khứ đơn</b></u>
			<br/>
			<b>• S + was/were + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>6.Quá khứ tiếp diễn</b></u>
			<br/>
			<b>• S + was/were + being + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>7.Quá khứ hoàn thành</b></u>
			<br/>
			<b>• S + had + been + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>8.Quá khứ hoàn thành tiếp diễn</b></u>
			<br/>
			<b>• S + had + been + being + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>9.Tương lai đơn</b></u>
			<br/>
			<b>• S + will be + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>10.Tương lai gần</b></u>
			<br/>
			<b>• S + is/are/am + going to be + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>11.Tương lai tiếp diễn</b></u>
			<br/>
			<b>• S + will be being + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>12.Tương lai hoàn thành</b></u>
			<br/>
			<b>• S + will have been + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>13.Tương lai hoàn thành tiếp diễn</b></u>
			<br/>
			<b>• S + will have been being + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>14.Modal verb</b></u>
			<br/>
			<b>• S + should/might/may/could/shall/can/must/ought to/have to/would + be + V3-ed + O </b>
			<br/>
			<br/>
			<br/>
			<u><b>15.Đặc biệt</b></u>
			<br/>
			<b>• "Ex: Get the book opened!"</b>
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