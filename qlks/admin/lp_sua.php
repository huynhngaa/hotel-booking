<?php include "ketnoi.php";
if (isset($_POST['luu'])) {
	$id = $_POST['id'];
	$name = $_POST['ten'];
	// $loaiphong = $_POST['loaiphong'];
	// $succhua = $_POST['succhua'];
	// $dientich = $_POST['dientich'];
	// $view = $_POST['view'];
	// $gia = $_POST['gia'];
	// $mota = $_POST['mota'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp_name = $_FILES['hinhanh']['tmp_name'];
	$sql = "UPDATE loaiphong SET lp_ten='$name', lp_hinhanh='$hinhanh' WHERE lp_id=$id";
	mysqli_query($conn, $sql);
	move_uploaded_file($hinhanh_tmp_name, 'assets/img/product/' . $hinhanh);
		header('location:all_loaiphong.php');
	
}
?>

<?php

$this_id = $_GET['this_id'];
$sql = "SELECT * FROM loaiphong WHERE lp_id =$this_id";

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

						<form action="lp_sua.php" method="post" enctype="multipart/form-data">
							<div class="row formtype">
								
							<div class="col-md-4">
									<div class="form-group">
										<label>Mã Loại Phòng</label>
										<input name="id" class="form-control  col-md-6 " type="text" readonly="readonly" value="<?php echo $row['lp_id']; ?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Tên Phòng</label>
										<input name="ten" class="form-control" type="text" value="<?php echo $row['lp_ten']; ?>">
									</div>
								</div>


								<div class="col-md-4">
									<div class="form-group">
										<label>Hình Ảnh</label>
										<div class="custom-file mb-3">
											<img width="100%" src="assets/img/product/<?php echo $row['lp_hinhanh']; ?>" alt="">
											<input value="<?php echo $row['lp_hinhanh']; ?>" class="form-control" type="file"  name="hinhanh">
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