<?php include "ketnoi.php"; ?>
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

				</div>
				<div class="row">


					<div class="col-lg-5">
						<div class="col-md-12">

							<div class="custom-file mb-3">
								<img width="100%" src="assets/img/product/<?php echo $row['lp_hinhanh']; ?>" alt="">
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title d-flex justify-content-between">
									<span><b> THÔNG TIN LOẠI PHÒNG</b></span>
									<a class="edit-link" href="lp_sua.php?this_id=<?php echo $row['lp_id'] ?>"><i class="fa fa-edit mr-1"></i>Sửa</a>
								</h5>
								<div class="row mt-5">
									<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Tên loại phòng</p>
									<h4 class="col-sm-9"><?php echo $row['lp_ten']; ?></h4>
								</div>
								<div class="row">
									<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mô tả</p>
									<p class="col-sm-9"><?php echo $row['lp_mota']; ?></p>
								</div>
							</div>
						</div>
						<div class="row">
							<p class="col-sm-10 text-sm-right mb-0"></p>
							<a href="all_loaiphong.php"><button type="button" class="btn btn-primary">Huỷ</button></a>
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