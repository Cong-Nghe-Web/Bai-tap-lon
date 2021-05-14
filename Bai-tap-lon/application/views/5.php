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
        <title>Bài 5</title>
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
            <h3>Câu điều kiện</h3>
            <u><b>1. Loại 0</b></u>
			<br/>
			<b>• If + S1 + V(s,es) + O, S2 + V(s,es) + O </b>
			<i>--> Dùng để nêu lên chân lý, câu mệnh lệnh hoặc điều sẽ xảy ra nhờ điều kiện trong hiện tại. </i>
			<br/>
			<br/>
			<br/>
			<u><b>2. Loại 1</b></u>
			<br/>
			<b>• If + S1 + V(s,es) + O, S2 + will + Vbare + O </b>
			<i>--> Dùng để nêu lên điều sẽ xảy ra nhờ điều kiện, trong hiện tại. </i>
			<br/>
			<br/>
			<br/>
			<u><b>3. Loại 2</b></u>
			<br/>
			<b>• If + S1 + V(d,ed) + O, S2 + would + Vbare + O </b>
			<i>--> Dùng để nêu lên điều sẽ xảy ra nhờ điều kiện không có thật, trong hiện tại.</i>
			<i>--> Trong câu điều kiện, chỉ được dùng quá khứ bàng thái, tức không được dùng "was".</i>
			<br/>
			<br/>
			<br/>
			<u><b>4. Loại 3</b></u>
			<br/>
			<b>• If + S1 + had + V3-ed + O, S2 + would have + V3-ed + O </b>
			<i>--> Dùng để nêu lên điều sẽ xảy ra nhờ điều kiện không có thật, trong quá khứ.</i>
			<br/>
			<br/>
			<br/>
			<u><b>5. Loại mix(kết hợp)</b></u>
			<br/>
			<b>• Có thể kết hợp loại 2 và loại 3 </b>
			<br/>
			<br/>
			<br/>
			<u><b>6. Lưu ý</b></u>
			<i>• Unless = If not hay ngược lại với If</i>
			<i>• If only = I wish</i>
			<i>• As if là như thể như, vế sau as if lùi thì so với vế trước</i>
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