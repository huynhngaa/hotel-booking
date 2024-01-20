<?php include "ketnoi.php";
if (isset($_POST['luu'])) {
	$id = $_POST['id'];
	$name = $_POST['ten'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sdt = $_POST['sdt'];
	$email = $_POST['email'];
	$diachi = $_POST['diachi']; 
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp_name = $_FILES['hinhanh']['tmp_name'];
	$sql = "UPDATE khachhang SET kh_ten='$name',kh_hinhanh='$hinhanh',kh_sdt='$sdt', kh_email='$email',kh_diachi='$diachi' WHERE kh_id=$id";
	mysqli_query($conn, $sql);
	$sl="UPDATE taikhoan SET tk_username = '$user', tk_password='$pass' where kh_id=$id";
	mysqli_query($conn, $sl);
	move_uploaded_file($hinhanh_tmp_name, 'assets/img/profiles/' . $hinhanh);
		header('location:all-customer.php');
	
}
?>

<?php

$this_id = $_GET['this_id'];
$sql = "SELECT * FROM khachhang, taikhoan where khachhang.kh_id = taikhoan.kh_id and  khachhang.kh_id=$this_id";

$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
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
							<h3 class="page-title mt-5">Chỉnh Sửa Phòng</h3>
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-lg-12">

						<form action="kh_sua.php" method="post" enctype="multipart/form-data">
							<div class="row formtype">
								
							<div class="col-md-4">
									<div class="form-group">
										<label>Mã khách hàng</label>
										<input name="id" class="form-control  col-md-6 " type="text" readonly="readonly" value="<?php echo $row['kh_id']; ?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Tên khách hàng</label>
										<input name="ten" class="form-control" type="text" value="<?php echo $row['kh_ten']; ?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Tên đăng nhập</label>
										<input name="user" class="form-control" type="text" value="<?php echo $row['tk_username']; ?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Mật khẩu</label>
										<input name="pass" class="form-control" type="text" value="<?php echo $row['tk_password']; ?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Số điện thoại</label>
										<input name="sdt" class="form-control" type="text" value="<?php echo $row['kh_sdt']; ?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Email</label>
										<input name="email" class="form-control" type="text" value="<?php echo $row['kh_email']; ?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Địa chỉ</label>
										<input name="diachi" class="form-control" type="text" value="<?php echo $row['kh_diachi']; ?>">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Hình Ảnh</label>
										<div class="custom-file mb-3">
											<img width="70%" src="assets/img/profiles/<?php echo $row['kh_hinhanh']; ?>" alt="">
											<input value="<?php echo $row['kh_hinhanh']; ?>" class="form-control" type="file"  name="hinhanh">
										</div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">


										<div>
											<input type="hidden" name="id" value=<?php echo $_GET['this_id']; ?>>
											<button type="submit" name="luu" class="btn btn-primary buttonedit ml-2">Lưu</button> 
												
										</div><a href="all_loaiphong.php"><button type="button" class="btn btn-primary buttonedit">Huỷ</button></a>
									</div>



								</div>
							</div>
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