<?php include "ketnoi.php"; ?>
<?php
$this_id = $_GET['this_id'];
$sql = "SELECT * FROM phong a, loaiphong b WHERE a.lp_id=b.lp_id and p_id =$this_id";

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
								<img width="100%" src="assets/img/product/<?php echo $row['p_hinhanh']; ?>" alt="">
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title d-flex justify-content-between">
									<span><b> THÔNG TIN PHÒNG</b></span>
									<a class="edit-link" href="p_sua.php?this_id=<?php echo $row['p_id'] ?>"><i class="fa fa-edit mr-1"></i>Sửa</a>
								</h5>
								<div class="row mt-5">
									<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Tên phòng</p>
									<h4 class="col-sm-9"><?php echo $row['p_ten']; ?></h4>
								</div>
								<div class="row">
									<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Trạng thái</p>
									<h6 class="col-sm-9" style="color:#01877e"> <b> <?php if ($row['p_trangthai'] == 0) {
																						$row['p_trangthai'] = 'Trống';
																					} else $row['p_trangthai'] = 'Có người';
																					echo $row['p_trangthai']; ?> </b> </h6>
									<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Giá</p>
									<h4 style="color:#e77348" class="col-sm-9 font-weight-bold"> <?php echo number_format($row['p_gia']); ?> đ</h4>
								</div>

								<div class="row">
									<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Loại phòng </p>
									<p class="col-sm-9"><?php echo $row['lp_ten'] ?></p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Diện tích</p>
									<p class="col-sm-9"> <?php echo $row['p_dientich'] ?> m2</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-sm-right mb-0">Sức chứa</p>
									<p class="col-sm-9"> <?php echo $row['p_succhua'] ?> người</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-sm-right mb-0">Giường</p>
									<p class="col-sm-9"> <?php echo $row['p_giuong'] ?> giường</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-sm-right mb-0">View</p>
									<p class="col-sm-9"> <?php echo $row['p_view'] ?></p>
								</div>

								<div class="row">
									<p class="col-sm-3 text-sm-right mb-0">Mô tả</p>
									<p class="col-sm-9"> Phòng nghỉ tại đây rộng rãi và được trang trí trang nhã. Các phòng có máy điều hòa, khu vực ghế ngồi, TV màn hình phẳng và két an toàn.</p>
								</div>
							</div>
						</div>
						<div class="row">
							<p class="col-sm-10 text-sm-right mb-0"></p>
							<a href="all-room.php"><button type="button" class="btn btn-primary">Huỷ</button></a>
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