<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "header.php" ?>
</head>

<body>
<?php 

include "ketnoi.php";
session_start();
$err = [];
if (isset($_POST['dangnhap'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $sl = "SELECT * from taikhoan, nhanvien where tk_username='$username' and tk_password ='$password'and tk_level<>2 and taikhoan.nv_id=nhanvien.nv_id";
    $resu = mysqli_query($conn,$sl);
	$data = mysqli_fetch_assoc($resu);
	if ($username!= '' && $password!=''){
    if (mysqli_num_rows($resu) == 1)
    {
	//$_SESSION['login']['username'] = $username;
		$_SESSION['admin'] =$data;
        header("location:index.php");
}
else {
	$error[] = 'Tài khoản hoặc mật khẩu không đúng!!!';
}
	}
}
?>
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="assets/img/logo.png" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Đăng nhập</h1>
							<form action="login.php" method="post">
								<div class="form-group">
									<input class="form-control" name = "username" type="text" placeholder="Tên đăng nhập"> </div>
								<div class="form-group">
									<input class="form-control" name = "password" type="text" placeholder="Mật khẩu"> </div>
								<div class="form-group">
									<button name="dangnhap" class="btn btn-primary btn-block" type="submit">Đăng nhập</button>
								</div>
							</form>
							<div class="text-center forgotpass"><a href="forgot-password.html">Quên mật khẩu?</a> </div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>