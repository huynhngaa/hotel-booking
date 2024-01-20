<?php include "ketnoi.php" ;
if(isset($_POST['luu'])){
	$id ="";
	$name = $_POST['ten'];
	$loaiphong = $_POST['loaiphong'];
	$succhua = $_POST['succhua'];
	$giuong = $_POST['giuong'];
	$dientich = $_POST['dientich'];
	$view = $_POST['view'];
	$gia = $_POST['gia'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp_name =$_FILES['hinhanh']['tmp_name'];  
	$trangthai =0;
	$mota = $_POST['mota'];
	// if($loaiphong == 'Phòng Deluxe'){
	// 	$loaiphong = 2;
	// }
	$sql = "INSERT INTO phong(p_id,lp_id,p_ten,p_hinhanh,p_succhua,p_giuong,p_gia,p_dientich,p_view,p_mota,p_trangthai)
	VALUES ('$id','$loaiphong','$name','$hinhanh','$succhua','$giuong','$gia','$dientich','$view','$mota' ,$trangthai)";
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

						<form action="add-room.php" method="post" enctype="multipart/form-data">
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Tên Phòng</label>
										<input name="ten" class="form-control" type="text"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Loại Phòng</label>
										
										<select class="form-control" id="sel1" name="loaiphong">
										<?php
                     $sql = "SELECT * FROM LOAIPHONG";
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                     $result = mysqLi_query($conn, $sql);

                    while($row = mysqli_fetch_array($result)) { ?>

							<option value="<?php  echo $row['lp_id']; ?>"><?php  echo $row['lp_ten']; ?></option>  <?php } ?>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Sức chứa</label>
										<select class="form-control" id="sel2" name="succhua" value>
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
										<input name="dientich" type="text" class="form-control" id="usr"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Hướng Tầm Nhìn</label>
										<input name="view" type="text" class="form-control" id="usr"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Giá</label>
										<input name="gia" type="text" class="form-control" id="usr1"> </div>
								</div>
								<div class="col-md-4">
									<div  class="form-group">
										<label>Hình Ảnh</label>
										<div class="custom-file mb-3">
										<!-- <div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile">
</div> -->
										
											<input  class="form-control" type="file" id="formFile" accept="image/*" name="hinhanh">
											<!-- <label for="formFile" class="form-label">Chọn hình ảnh</label> -->
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Mô Tả</label>
										<textarea class="form-control" rows="5" id="comment" name="mota"></textarea>
									</div>
								</div>
							</div>
							<button type="submit" name="luu"  class="btn btn-primary buttonedit ml-2">Lưu</button>

			<a href="all-room.php">	<button type="button" class="btn btn-primary buttonedit">Huỷ</button></a>
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