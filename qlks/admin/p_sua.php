<?php include "ketnoi.php";
if (isset($_POST['luu'])) {
	$id = $_POST['id'];
	$name = $_POST['ten'];
	$loaiphong = $_POST['loaiphong'];
	$succhua = $_POST['succhua'];
	$giuong = $_POST['giuong'];
	$dientich = $_POST['dientich'];
	$view = $_POST['view'];
	$gia = $_POST['gia'];
//	$mota = $_POST['mota'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp_name = $_FILES['hinhanh']['tmp_name'];
	$trangthai = $_POST['trangthai'];

	$sql = "UPDATE phong SET lp_id ='$loaiphong',p_ten='$name',p_hinhanh='$hinhanh',p_succhua='$succhua',p_giuong='$giuong',p_gia='$gia',p_dientich='$dientich',p_view='$view',p_trangthai='$trangthai' WHERE p_id=$id";
	mysqli_query($conn, $sql);
	move_uploaded_file($hinhanh_tmp_name, 'assets/img/product/' . $hinhanh);
	header('location:all-room.php');;
}
?>
<?php

$this_id = $_GET['this_id'];
$sql = "SELECT * FROM phong, loaiphong WHERE loaiphong.lp_id=phong.lp_id and p_id =$this_id";

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

						<form action="p_sua.php" method="post" enctype="multipart/form-data">
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group row">
										<label class="col-form-label col-md-4">Mã Phòng</label>
										<input name="id" class="form-control  col-md-6 " type="text" readonly="readonly" value="<?php echo $row['p_id']; ?>">
									</div>
								</div>
							</div>
						</form>

					</div>
					<div class="col-lg-12">

						<form action="p_sua.php" method="post" enctype="multipart/form-data">
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Tên Phòng</label>
										<input name="ten" class="form-control" type="text" value="<?php echo $row['p_ten']; ?>">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Loại Phòng</label>

										<select class="form-control" id="sel1" name="loaiphong">
											<option value="<?php echo $row['lp_id'] ?>"> <?php echo $row['lp_ten'] ?></option>
											<?php
											$sql = "SELECT * FROM LOAIPHONG";
											//thuc thi cau lenh sql va dua doi tuong vao $result
											$result = mysqLi_query($conn, $sql);

											while ($ro= mysqli_fetch_array($result)) { ?>


												<option value="<?php echo $ro['lp_id']; ?>"><?php echo $ro['lp_ten']; ?></option> <?php } ?>
										</select>
									</div>
								</div>
								<?php
								$sql = "SELECT * FROM PHONG  WHERE p_id =$this_id";
								$result = mysqLi_query($conn, $sql);
								$row = mysqli_fetch_array($result) ?>


								<div class="col-md-4">
									<div class="form-group">
										<label>Sức chứa</label>
										<select class="form-control" id="sel2" name="succhua">
										<option value="<?php echo $row['p_succhua'] ?>"> <?php echo $row['p_succhua'] ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
										</select>

									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Giường</label>
										<select class="form-control" id="sel2" name="giuong" value>
										<option value="<?php echo $row['p_giuong'] ?>"> <?php echo $row['p_giuong'] ?></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
										</select>
										
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Diện Tích</label>
										<input value="<?php echo $row['p_dientich']; ?>" name="dientich" type="text" class="form-control" id="usr">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Hướng Tầm Nhìn</label>
										<input value="<?php echo $row['p_view']; ?>" name="view" type="text" class="form-control" id="usr">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Giá</label>
										<input value="<?php echo $row['p_gia']; ?>" name="gia" type="text" class="form-control" id="usr1">
									</div>
								</div>
								<div class="col-md-4">

									<div class="form-group">
										<label>Hình Ảnh</label>
										<div class="custom-file mb-3">
											<img width="100%" src="assets/img/product/<?php echo $row['p_hinhanh']; ?>" alt="">
											<input value="<?php echo $row['p_hinhanh']; ?>" class="form-control" type="file" id="formFile" accept="image/*" name="hinhanh">

										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Trạng thái</label>
										<select class="form-control" id="sel2" name="trangthai">

											<option value="0">Trống</option>
											<option value="1">Có người</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										
										<div>
											<input type="hidden" name="id" value=<?php echo $_GET['this_id']; ?>>
											<button type="submit" name="luu" class="btn btn-primary buttonedit ml-2">
												Lưu</button>
										</div><a href="all-room.php"><button type="button" class="btn btn-primary buttonedit">Huỷ</button></a>
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