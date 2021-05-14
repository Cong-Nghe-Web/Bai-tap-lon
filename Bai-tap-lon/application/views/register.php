<?php if (!defined('IN_SITE')) die('The request not found'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/login/css/login.css">
    <title>Đăng ký</title>
    <script type="text/javascript">
		function Validate(){
			var fullName = document.myform.fullName.value;
			var name = document.myform.usr.value;
			var pass = document.myform.pwd.value;
			var pass2 = document.myform.vpass.value;
			fullName.trim();
			name.trim();
			pass.trim();
			if( fullName =="" || name == ""|| pass== "" || pass2 == ""){
				alert("Không được để trống thông tin");
				return false;
			}
			if( pass.length < 6){
				return false;
			}
			if( pass2 != pass){
				alert("Mật khẩu xác thực không chính xác");
				return false;
			}
			return true;
		}
		function ValidatePass(){
			var pass = document.myform.pwd.value;
			if( pass.length < 6){
				document.getElementById("lpass").innerHTML = "Mật khẩu ít nhất 6 ký tự";
			}
			else{
				document.getElementById("lpass").innerHTML = "";
			}
		}
	</script>
</head>
<body>
<main>
    <section>
        <div class="login-text">
            <h1>REGISTER</h1>
        </div>
        <form action="index.php?c=register&a=register" method="POST" name="myform" onsubmit="return Validate()">
            <div class="user-pass">
            	<input placeholder="Họ và tên" autocomplete="off" type="text" name="name" id="fullName" >
                <input placeholder="Tài khoản" autocomplete="off" type="text" name="username" id="usr">
                <input placeholder="Mật khẩu" autocomplete="off" type="password" name="password" id="pwd" onkeyup="ValidatePass()">
                <label id="lpass" style="color: red; margin-top: 5px"></label>
                <input placeholder="Xác nhận mật khẩu" autocomplete="off" type="password" name="password2" id="cfpwd" >
            </div>
			<input type="hidden" value="register" name='request'>
            <input type="submit" value="Đăng ký" name='dangki'>
        </form>
        <div class="re_link">
	        <a href="index.php?c=home&a=dangnhap" class="re_link-login">Already have account? Login</a>
	        <a href="index.php?c=home&a=home" class="re_link-home">Back to home page</a>
        </div>
    </section>
    
</main>
</body>
</html>