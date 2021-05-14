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
        <title>Bài 4</title>
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
                <h3>Câu gián tiếp</h3>
                <u><b>1.Những điều cần biết</b></u>
			<br/>
			<br/>
			<b>Ta có câu trực tiếp và gián tiếp:</b>
			<br/>
			• Trực tiếp: He said: "I'm happy".
			<br/>
			• Gián tiếp: He said that he was happy.
			<br/>
			<p>Vậy câu gián tiếp là câu tường thuật lại sự việc một cách gián tiếp, khi chuyển đổi thành câu gián tiếp cần phải lùi thì. Tuy vậy, nếu từ tường thuật không được chia ở thì quá khứ đơn thì ta không lùi thì.</p>
			<br/>
			<p><b>Ex:</b> He says that I'm pretty</p>
			<br/>
			<br/>
			<u><b>1.Một số quy tắc về câu gián tiếp</b></u>
			<br/>
			<br/>
			<u><i>*Với từ chỉ thời gian, nơi chốn</i></u>
			<p>Today -> That day</p>
			<p>Here -> There</p>
			<p>Tommorrow -> The following day</p>
			<p>Yesterday -> The previous day</p>
			<p>This -> That</p>
			<p>...</p>
			<br/>
			<br/>
			<u><i>*Trong câu gián tiếp trợ động từ để sau chủ ngữ</i></u>
			<br/>
			<u><i>*Quy tắc lùi thì</i></u>
			<p>Hiện tại đơn -> Quá khứ đơn</p>
			<p>Hiện tại tiếp diễn -> Quá khứ tiếp diễn</p>
			<p>Hiện tại hoàn thành -> Quá khứ hoàn thành</p>
			<p>Hiện tại hoàn thành tiếp diễn -> Quá khứ hoàn thành tiếp diễn</p>
			<p>Quá khứ đơn -> Quá khứ hoàn thành</p>
			<p>Quá khứ tiếp diễn -> Quá khứ tiếp diễn</p>
			<p>Quá khứ hoàn thành -> Quá khứ hoàn thành</p>
			<p>Quá khứ hoàn thành tiếp diễn -> Quá khứ hoàn thành tiếp diễn</p>
			<br/>
			<p>Will -> Would</p>
			<p>Shall -> Should</p>
			<p>Can -> Could</p>
			<p>May -> Might</p>
			<p>Must -> Had to</p>
			<p>Have to -> Had to</p>
			<p>Should -> Should</p>
			<p>Could -> Could</p>
			<p>Might -> Might</p>
			<p>Had to -> Had to</p>
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