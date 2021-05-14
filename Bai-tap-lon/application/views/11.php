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
        <title>Bài 11</title>
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
                <h3>Một số trường hợp đặc biệt của modal verbs</h3>
                <u><b>1. Shall/Should</b></u>
			<br/>
			<b>Should/Shall + V dùng để diễn tả một hành động nên làm.</b>
			<br/>
			<b>Should have + V3-ed dùng để diễn tả một hành động đáng ra nên làm ở quá khứ.</b>
			<br/>
			<br/>
			<br/>
			<u><b>2. Can/Could</b></u>
			<br/>
			<b>Can/Could + V dùng để diễn tả một hành động có thể làm được.</b>
			<br/>
			<b>Could have + V3-ed dùng để diễn tả một hành động có lẽ đã xảy ra trong quá khứ.</b>
			<br/>
			<b>Can't have + V3-ed dùng để diễn tả một hành động mà không thể nào đã xảy ra ở quá khứ và có bằng chứng.</b>
			<br/>
			<br/>
			<br/>
			<u><b>3. May/Might</b></u>
			<br/>
			<b>May/Might + V dùng để diễn tả một hành động có thể xảy ra.</b>
			<br/>
			<b>May/Might have + V3-ed dùng để diễn tả một hành động có lẽ đã xảy ra trong quá khứ.</b>
			<br/>
			<br/>
			<br/>
			<u><b>4. Must/Have to</b></u>
			<br/>
			<b>Must + V dùng để diễn tả một hành động mà bản thân nhắc nhở là phải làm.</b>
			<br/>
			<b>Have to + V dùng để diễn tả một hành động mà bản quy định nhắc nhở là phải làm.</b>
			<br/>
			<b>Mustn't + V dùng để diễn tả một hành động cấm không được làm.</b>
			<br/>
			<b>Don't have to + V dùng để diễn tả một hành động không cần thiết.</b>
			<br/>
			<b>Must have + V3-ed dùng để diễn tả một hành động mà khả năng cao đã xảy ra ở quá khứ và có bằng chứng.</b>
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