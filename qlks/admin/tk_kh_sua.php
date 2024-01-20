<?php include "ketnoi.php";
if (isset($_POST['luu'])) {
	// $id = $_POST['id'];
	// $name = $_POST['ten'];
    $id = $_POST['id'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$loai =$_POST['loai'];
	$sl="UPDATE taikhoan SET tk_username = '$user', tk_password='$pass',tk_level='$loai' where tk_id=$id";
    mysqli_query($conn, $sl);
	// move_uploaded_file($hinhanh_tmp_name, 'assets/img/product/' . $hinhanh);
		header('location:account.php');
	
}
?>
<?php

$this_id = $_GET['this_id'];
$sql = "SELECT * FROM taikhoan,khachhang where taikhoan.kh_id =khachhang.kh_id and tk_id =$this_id";

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
<div class="col-lg-3"> </div>
					<div class="col-lg-6">

						<form action="tk_kh_sua.php" method="post" enctype="multipart/form-data">
							<div class="row formtype">
								
							<div class="col-md-12">
									<div class="form-group row">
										<label class="col-lg-3 text-right">ID</label>
										<input name="id" class="form-control col-lg-9 " type="text" readonly="readonly" value="<?php echo $row['tk_id']; ?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
										<label  class="col-lg-3 text-right">Tên khách hàng</label>
										<input name="ten" class="form-control col-lg-9" type="text"readonly="readonly" value="<?php echo $row['kh_ten']; ?>">
									</div>
								</div>
                              
                                <div class="col-md-12">
									<div class="form-group row" >
										<label  class="col-lg-3 text-right">Tên đăng nhập</label>
										<input name="username" class="form-control col-lg-9" type="text" value="<?php echo $row['tk_username']; ?>">
									</div>
								</div>
                                <div class="col-md-12">
									<div class="form-group row">
										<label  class="col-lg-3 text-right">Mật khẩu</label>
										<input name="matkhau" class="form-control  col-lg-9" type="text" value="<?php echo $row['tk_password']; ?>">
									</div>
								</div>
                                <div class="col-md-12">
									<div class="form-group row">
										<label class="col-lg-3 text-right">Ngày tạo</label>
										<input name="ngaytao" class="form-control col-lg-9" type="text" readonly="readonly" value="<?php echo $row['tk_date'];  ?>">
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