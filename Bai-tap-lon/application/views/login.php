<?php if (!defined('IN_SITE')) die('The request not found'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/login/css/login.css">
    <title>Đăng nhập</title>
    <script type="text/javascript">
		function Validate(){
			var name = document.myform.username.value;
			var pass = document.myform.password.value;
			name.trim();
			pass.trim();
			if( name == ""|| pass== ""){
				alert("Không được để trống thông tin");
				return false;
			}
			return true;
		}

        function ValidateGmail(){
            var name = document.myform.username.value;
            name.trim();
            if (/"[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/.test(name)){
               return true;
            }else {
                return false;
                alert("Định dạng gmail sai");
            }
        }

	</script>
</head>
<body>
<main>
    <section>
        <div class="login-text">
            <h1>LOGIN</h1>
        </div>
        <form action='index.php?c=login&a=login' method="post" name="myform" onsubmit="return Validate()">
            <div class="user-pass">
                <input placeholder="Tài khoản" autocomplete="off" type="text" name="username" id="usr" >
                <input placeholder="Mật khẩu" autocomplete="off" type="password" name="password" id="pwd" onkeyup="return ValidateGmail()">
            </div>
            <input type="hidden" value="login" name='request'>
            <input type="submit" value="Đăng nhập" name='dangnhap'>
        </form>
        <a href='index.php?c=home&a=dangki'>Don't have account? Register</a>
        <a href='index.php?c=home&a=home'>Back to home page</a>
    </section>
</main>
</body>
</html>