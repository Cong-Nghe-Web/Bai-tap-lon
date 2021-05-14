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
        <title>Bài 1</title>
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
                <ul>
                    <li><h3>Hiện tại đơn</h3></li>
                    <u><b>1.Công thức</b></u>
			<br/>
			<u><i>*Với động từ thường</i></u>
			<br/>
			• Khẳng định: <b>S + V(s/es) + O</b>
			<br/>
			• Phủ định: <b>S + do/does + not + V + O </b>
			<br/>
			• Nghi vấn: <b>Do/Does + S + V + O ?</b>
			<br/>
			<br/>
			<u><i>*Với động từ tobe</i></u>
			<br/>
			• Khẳng định: <b>S + am/is/are + O</b>
			<br/>
			• Phủ định: <b>S + am/is/are + not + O </b>
			<br/>
			• Nghi vấn: <b>am/is/are + S + O ?</b>
			<br/>
			<br/>
			<u><i>*Đối tượng dùng động từ tobe</i></u>
			<br/>
			• Am: <b>I</b>
			<br/>
			• Is: <b>He/She/It </b>
			<br/>
			• Are: <b>You/We/They</b>
			<br/>
			<br/>
			<br/>
			<u><b>2.Cách dùng/trường hợp dùng</b></u>
			<br/>
			• Diễn tả một chân lý, điều hiển nhiên.
			<br/>
			• Diễn tả một thói quen, một hành động thường xuyên xảy ra hoặc dài hạn ở hiện tại.
			<br/>
			• Diễn tả hành động ở tương lai theo lịch trình.
			<br/>
			<br/>
			<br/>
			<u><b>3.Dấu hiệu nhận biết</b></u>
			<br/>
			<b>• Always, usually, often, sometimes, seldom, rarely, never,...</b>
			<br/>
			<b>• Everyday, every week, every weekends, every month, every year,... </b>
			<br/>
			<b>• Once, twice, three times, four times,...</b>
                    <li><h3>Hiện tại tiếp diễn</h3></li>
                    <u><b>1.Công thức</b></u>
			<br/>
			• Khẳng định: <b>S + am/is/are + V-ing + O</b>
			<br/>
			• Phủ định: <b>S + am/is/are + not + V-ing + O </b>
			<br/>
			• Nghi vấn: <b>Am/Is/Are + S + V-ing + O ?</b>
			<br/>
			<br/>
			<u><i>*Đối tượng dùng động từ tobe</i></u>
			<br/>
			• Am: <b>I</b>
			<br/>
			• Is: <b>He/She/It </b>
			<br/>
			• Are: <b>You/We/They</b>
			<br/>
			<br/>
			<br/>
			<u><b>2.Cách dùng/trường hợp dùng</b></u>
			<br/>
			• Diễn tả một hành động đang xảy ra ở hiện tại
			<br/>
			• Diễn tả một hành động mang tính ngắn hạn.
			<br/>
			• Diễn tả một hành động chắc chắn sẽ xảy ra trong tương lai gần.
			<br/>
			• Phê phán một thói xấu khi kết hợp với always/continually.
			<br/>
			<br/>
			<br/>
			<u><b>3.Dấu hiệu nhận biết</b></u>
			<br/>
			<b>• Now, at the moment, at the present,...</b>
			<br/>
			<b>• Look!, Listen!,... </b>
			<br/>
			<b>• Today, this week,...</b>
			<br/>
			<b>• At + thời gian cụ thể</b> 
                    <li><h3>Hiện tại hoàn thành</h3></li>
                    <u><b>1.Công thức</b></u>
			<br/>
			• Khẳng định: <b>S + will + have + been + V-ing + O</b>
			<br/>
			• Phủ định: <b>S + will + have + not + been + V-ing + O </b>
			<br/>
			• Nghi vấn: <b>Will + S + have + been + V-ing + O ?</b>
			<br/>
			<br/>
			<br/>
			<u><b>2.Cách dùng/trường hợp dùng</b></u>
			<br/>
			• Diễn tả một hoạt động được nhấn mạnh xảy ra trước một hành động/mốc thời gian trong tương lai.
			<br/>
			<br/>
			<br/>
			<u><b>3.Dấu hiệu nhận biết</b></u>
			<br/>
			<b>• Before + mốc thời gian/hoạt động</b>
			<br/>
			<b>• By + mốc thời gian</b>
			<br/>
			<b>• As soon as, already,...</b>
			<br/>
			<b>(Tất cả thời gian được nhấn mạnh)</b>
			<br/>
                    <li><h3>Hiện tại hoàn thành tiếp diễn</h3></li>
                    <li><h3>Quá khứ đơn</h3></li>
                    <li><h3>Quá khứ tiếp diễn</h3></li>
                    <li><h3>Quá khứ hoàn thành</h3></li>
                    <li><h3>Quá khứ hoàn thành tiếp diễn</h3></li>
                    <li><h3>Tương lai đơn</h3></li>
                    <li><h3>Tương lai gần</h3></li>
                    <li><h3>Tương lai tiếp diễn</h3></li>
                    <li><h3>Tương lai hoàn thành</h3></li>
                    <li><h3>Tương lai hoàn thành tiếp diễn</h3></li>
                
                </ul>
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