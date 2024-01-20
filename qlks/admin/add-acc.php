<?php include "ketnoi.php" ;
if(isset($_POST['them'])){
	$id ="";
	$user = $_POST['user'];
    $pass = $_POST['pass'];
    $nvid= $_POST['nvid'];
    $lv= $_POST['lv'];
	$sql = "INSERT INTO taikhoan(tk_id,tk_username,tk_password,nv_id)
	VALUES ('$id','$user','$pass','$nvid')";
	mysqli_query($conn,$sql);
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

						<form action="add-acc.php" method="post" enctype="multipart/form-data">
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Tên Loại Phòng</label>
										<input name="user" class="form-control" type="text"> </div>
								</div>	
                                <div class="col-md-4">
									<div class="form-group">
										<label>Tên Loại Phòng</label>
										<input name="pass" class="form-control" type="text"> </div>
								</div>	
                                <div class="col-md-4">
									<div class="form-group">
										<label>Sức chứa</label>
										<select class="form-control" id="sel2" name="lv" value>
											<option value="0">Quản lý</option>
											<option value="1">Nhân viên</option>
										</select>
										
									</div>
								</div>
                                <div class="col-md-4">
									<div class="form-group">
										<label>Loại Phòng</label>
										
										<select class="form-control" id="sel1" name="nvid">
										<?php
                     $sl = "SELECT * FROM nhanvien";
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                     $res = mysqLi_query($conn, $sl);

                    while($row = mysqli_fetch_array($res)) { ?>

							<option value="<?php  echo $row['nv_id']; ?>"><?php  echo $row['nv_ten']; ?></option>  <?php } ?>
										</select>
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