<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/fontend/css/login.css">
    <title>Đăng nhập</title>
    <script type="text/javascript">
		function Validate(){
			var name = document.myform.usr.value;
			var pass = document.myform.pwd.value;
			name.trim();
			pass.trim();
			if( name == ""|| pass== ""){
				alert("Không được để trống thông tin");
				return false;
			}
			return true;
		}

	</script>
</head>
<body>
<main>
    <section>
        <div class="login-text">
            <h1>LOGIN</h1>
        </div>
        <form action="home" method="post" name="myform" onsubmit="return Validate()">
            <div class="user-pass">
                <input placeholder="Tài khoản" autocomplete="off" type="text" name="usr" id="usr" >
                <input placeholder="Mật khẩu" autocomplete="off" type="password" name="pwd" id="pwd">
            </div>
            <input type="submit" value="Đăng nhập">
        </form>
        <a href="dangki">Don't have account? Register</a>
        <a href="home">Back to home page</a>
    </section>
</main>
</body>
</html>