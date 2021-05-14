<?php if (!defined('IN_SITE')) die('The request not found'); ?>
<?php 
    include_once ('./libs/session.php');
    include_once ('./libs/role.php');
    session_start();
    $username= get_current_username();
    if ($username='') {
        redirect('index.php?c=home&a=home');
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Trang chủ</title>
        <link ref="stylesheet" href='../../public/home/css/main.css' type="text/css">
    </head>
    <body>

        <div class="topnav">
            <a href='index.php?c=home&a=homelogin'>Trang chủ</a>
            <a href='index.php?c=nguphap&a=danhsach'>Ngữ pháp </a>
            <a href='index.php?c=dethi&a=danhsach'>Luyện đề</a>
            <?php echo "Xin chào '.$username .'|"?><a href='index.php?c=out&a=logout'>Logout</a>
        </div>

        <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h3>Ngữ pháp cơ bản</h3>
                <ul>
                <?php
                    for ($data as $val){
                        echo '<a href="index.php?c=nguphap&a=bieudien&id='.$val['id'].'"> '.$val['name'].' </a>';
                    }
                ?>
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