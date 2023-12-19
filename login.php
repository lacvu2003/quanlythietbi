<?php
    session_start();
    include('admin/config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['txtTK'];
        $matkhau = $_POST['txtMK'];
        $sql = "SELECT * FROM user WHERE username = '$taikhoan' AND password = '$matkhau'";
        $row = mysqli_query($connect,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['dangnhap'] = $taikhoan;
            header('Location: index.php');
            setcookie("ok","Đăng nhập thành công");
        }
        else{
            header('Location: login.php');
            setcookie("fail","*Tài khoản hoặc mật khẩu nhập sai");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Việt Đan</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
}
body{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #078ee4;
}
input.form-submit {
    margin: auto;
    border: 1px solid white;
    background: #1a73e8;
    color: white;
    width: 50%;
    padding: 10px;
    text-transform: uppercase;
    transition: 0.25s ease-in-out;
    border-radius: 10px;
}
input.form-submit:hover{
    opacity: 0.8;
}
input{
    border: 1px solid black;
    border-radius: 10px;
    outline: none;
    width: 250px;
    height: 40px;
    padding-left: 10px;
}
.Form-group {
    width: 260px;
    margin-top: 18px;
    margin-left: 30px;
    background-color: white;
    outline: none;
    border-radius: 10px;
    position: relative;
}
.form-login {
    margin-left: 30px;
    width: 100%;
   
}
.khunglogin {
   width: 322px;
   height: 370px;
   margin: auto;
   margin-top: -60px;
   box-shadow: 0px 0px 10px -5px;
   border: none;
   background: white;
   border-radius: 10px;
   position: relative;
}
.logo{
    height: 150px;
    display: flex;
    justify-content: center;
    cursor: pointer;
}
.submit{
    width: 100%;
    position: absolute;
    bottom: 10px;
    left: 0px;
    display: flex;
    justify-content: center;
}
label{
    position: absolute;
    top: 50%;
    left: 10px;
    padding: 0px 5px;
    font-size: 15px;
    /* Quan trong */
    pointer-events: none;
    transform: translateY(-50%);
    transition: all 0.3s ease-in-out;
    font-family: Arial, Helvetica, sans-serif;
    background: white;
    color: #646368;
}
.Form-group input:focus + label, .Form-group input:valid + label{
    top: 0px;
    font-size: 11px;
    font-weight: 500;
    color: #1a73e8;
}
.Form-group input:focus{
    border: 1px solid #1a73e8;
}
.forget-pass{
    position: absolute;
    bottom: 70px;
    right: 33px;
    font-style: italic;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    color: black;
}
.forget-pass:hover p{
    color: #50A5D6;
    text-decoration: underline;
}
.remember{
    position: absolute;
    bottom: 70px;
    left: 33px;
    font-style: italic;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    color: black;
}
.remember:hover p{
    color: #50A5D6;
    text-decoration: underline;
}
a{
    text-decoration: none;
    color: black;
}
.form-hinh{
    height: 150px;
}
</style>
<body>
    <form method="post">
            <div class="khunglogin">
				<div class="logo">
					<img src="image/logo-dark.png" alt="" class="form-hinh">
				</div>
				<form action="" class="form-login">
					<div class="Form-group">
						<input type="email" class="textEmail" name="txtTK" required oninvalid="this.setCustomValidity('Chưa nhập tài khoản')" oninput="this.setCustomValidity('')" autocomplete="off">
						<label>Nhập tài khoản</label>
					</div>
					<div class="Form-group">
						<input type="password" class="textPass" name="txtMK"required oninvalid="this.setCustomValidity('Chưa nhập mật khẩu')" oninput="this.setCustomValidity('')" autocomplete="off">
						<label>Nhập mật khẩu</label>
					</div>
                    <div class="thongbao" style="text-align: center; padding: 16px 10px; color: red; font-style: italic;">
                        <?php
                            if(isset($_COOKIE['fail'])){
                                echo $_COOKIE['fail'];
                            }
                        ?>
                    </div>
					<div class="submit">
						<input name="dangnhap" type="submit" value="Đăng nhập" class="form-submit">
					</div>
				</form>
                <div>
                </div>
			</div>
    </form>
</body>
</html>
