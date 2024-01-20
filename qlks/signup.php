<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="vn">
  <head>
  <title>Huynh Nga - Hotel </title>
  <link rel="shortcut icon" type="image/x-icon" href="admin/assets/img/logo.png">
  </head>
   <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}
.error-msg {
    font-size:small;
    color :red;
}
body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 25%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
} </style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var elements = $("input, select");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                 e.target.setCustomValidity(e.target.getAttribute("requiredmsg"));
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
})
</script>
 <body>
<?php 
session_start();
include "ketnoi.php";
$err = [];
if (isset($_POST['dangky'])){
    $id ="";
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5 ($_POST['password']);
    $repassword = md5($_POST['repassword']);
	$level='2';
	$sl = "SELECT * from taikhoan where tk_username='$username'";
	$res = mysqli_query($conn,$sl);
	$dat = mysqli_fetch_assoc($res);
//$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($res) > 0){

   $error[] = 'Username đã tồn tại!';

}
else{
	
	

   if($password != $repassword){
      $error[] = 'Mật khẩu không khớp!';
   }
   else{	
    $sql = "INSERT INTO khachhang (kh_id,kh_ten) VALUES ('$id','$name')";      
    mysqli_query($conn, $sql);
	$sql = "INSERT INTO taikhoan(tk_id,tk_username,tk_password,tk_level,tk_date,kh_id)
	VALUES ('','$username','$password','2',NOW(),@@identity)";
	 mysqli_query($conn, $sql);
		$_SESSION['user'] =$dat;
		echo "<script>alert('Đăng ký thành công!!!');</script>";
header('Refresh:0;url=login.php');
     
   }
}}
?>
<div class="container" >
	<div class="overlay-container form-container sign-in-container">
		<form action="signup.php" method="post">
			<h1>ĐĂNG KÝ</h1>
            <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
      };
     
      ?>
            <input type="name" name="name" requiredmsg="Vui lòng nhập thông tin"  placeholder="Họ và tên" />
			<input type="username" name="username" required requiredmsg="Tên đăng nhập không được bỏ trống" required placeholder="Tên đăng nhập" />
			<input type="password" name="password" required pattern = "[a-z0-9_-]{6,16}" requiredmsg="Mật khẩu không hợp lệ"  placeholder="Mật khẩu (ít nhất 8 ký tự)" />
            <input type="password" name="repassword" required requiredmsg="Vui lòng không bỏ trống" placeholder="Nhập lại mật khẩu" />
			<br>
			<button type="submit" name="dangky" >Đăng ký</button>
            <br>
            <span>Bạn đã có tài khoản? <a style="color:#FF4B2B ;" href="login.php"> Đăng nhập</a> </span>
           
		</form>
	</div>
	
</div>

  
  </body>
</html>