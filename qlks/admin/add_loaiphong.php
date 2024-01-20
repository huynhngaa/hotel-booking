<?php include "ketnoi.php" ;
if(isset($_POST['them'])){
	$id ="";
	$name = $_POST['ten'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp_name =$_FILES['hinhanh']['tmp_name'];  
	// if($loaiphong == 'Phòng Deluxe'){
	// 	$loaiphong = 2;
	// }
	$sql = "INSERT INTO loaiphong(lp_id,lp_ten,lp_hinhanh)
	VALUES ('$id','$name','$hinhanh')";
	mysqli_query($conn,$sql);
	move_uploaded_file( $hinhanh_tmp_name, 'assets/img/product/'. $hinhanh);
	echo "<script>alert('Thêm phòng thành công');</script>";
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
							<h3 class="page-title mt-5">Thêm Phòng</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">

						<form action="add_loaiphong.php" method="post" enctype="multipart/form-data">
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Tên Loại Phòng</label>
										<input name="ten" class="form-control" type="text"> </div>
								</div>							
								<div class="col-md-4">
									<div  class="form-group">
										<label>Hình Ảnh</label>
										<div class="custom-file mb-3">
											<input  class="form-control" type="file" id="formFile" accept="image/*" name="hinhanh">
											<!-- <label for="formFile" class="form-label">Chọn hình ảnh</label> -->
										</div>
									</div>
								</div>
							
							</div>
							<button type="submit" name="them"  class="btn btn-primary buttonedit ml-2">Lưu</button>

			<a href="all_loaiphong.php">	<button type="button" class="btn btn-primary buttonedit">Huỷ</button></a>
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