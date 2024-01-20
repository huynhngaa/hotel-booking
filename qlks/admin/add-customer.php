<?php include "ketnoi.php" ;
if(isset($_POST['luu'])){
	$id ="";
	$name = $_POST['ten'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sdt = $_POST['sdt'];
	$email = $_POST['email'];
	$diachi = $_POST['diachi'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp_name =$_FILES['hinhanh']['tmp_name'];  
	if($hinhanh == ''){
		$hinhanh = 'user.png';
	}
	
	$sql = "INSERT INTO khachhang(kh_id,kh_ten,kh_sdt,kh_email,kh_diachi,kh_hinhanh)
	VALUES ('$id','$name','$sdt','$email','$diachi','$hinhanh')";
	mysqli_query($conn,$sql);

	move_uploaded_file( $hinhanh_tmp_name, 'assets/img/profiles/'. $hinhanh);
	$sql = "INSERT INTO taikhoan(tk_id,tk_username,tk_password,tk_level,kh_id)
	VALUES ('','$username','$password','2',@@identity)";
	mysqli_query($conn,$sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<?php include "header.php" ?>

<body>
	<div class="main-wrapper">
	<?php include "nav.php";
			  include "sidebar.php"
		 ?>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">Thêm Khách Hàng</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">

						<form action="add-customer.php" method="post" enctype="multipart/form-data">
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Tên Khách Hàng</label>
										<input name="ten" class="form-control" type="text"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Tên Đăng Nhập</label>
										<input name="username" class="form-control" type="text"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Mật Khẩu</label>
										<input name="password" type="text" class="form-control" id="usr"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Số Điện Thoại</label>
										<input name="sdt" type="text" class="form-control" id="usr"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Email</label>
										<input name="email" type="text" class="form-control" id="usr1"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Địa Chỉ</label>
										<input name="diachi" type="text" class="form-control" id="usr1"> </div>
								</div>
								

								<div class="col-md-4">
									<div  class="form-group">
										<label>Hình Ảnh</label>
										<div class="custom-file mb-3 ">
											<input class="form-control" type="file" id="formFile" accept="image/*" name="hinhanh"  >
										</div>
									</div>
								</div>
								
							</div>
							<button type="submit" name="luu"  class="btn btn-primary buttonedit ml-2">Lưu</button>
				<button type="button" class="btn btn-primary buttonedit">Huỷ</button>
						</form>

					</div>
				</div>
				
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script>
	$(function() {
		$('#datetimepicker3').datetimepicker({
			format: 'LT'
		});
	});
	</script>
</body>

</html>