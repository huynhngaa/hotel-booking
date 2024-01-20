<?php include "ketnoi.php" ;
session_start(); 
$this_id = -1;
	if (isset($_GET['this_id'])) {
		$this_id = $_GET['this_id'];
	}
	$sql = "SELECT * FROM loaiphong WHERE lp_id ='$this_id'";
	$query = mysqli_query($conn,$sql);

// $this_id = $_GET["this_id"];
// $sql ="SELECT * FROM loaiphong WHERE lp_id ='$this_id'";
// $query =mysqli_query($conn, $sql);
$row =mysqli_fetch_assoc($query);
if(isset($_POST['luu2'])){ 
   // $id ="";
   $this_id=$_GET['this_id'];
	$name = $_POST['ten'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp_name =$_FILES['hinhanh']['tmp_name'];  
	// if('$loaiphong'=='Phòng Deluxe'){
	// 	$loaiphong=1;
	// }
	$sql = "UPDATE loaiphong SET lp_ten ='$name' ,lp_hinhanh='$hinhanh' WHERE lp_id='$this_id'"; 
mysqli_query($conn, $sql);
move_uploaded_file( $hinhanh_tmp_name, 'assets/img/product/'.$hinhanh);
header('location:all_loaiphong.php');
}

?>




<!DOCTYPE html>
<html lang="en">

<?php include "header.php" ?>

<body >
	<div class="main-wrapper">
	<?php include "nav.php";
			  include "sidebar.php"
		 ?>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">Thêm Loại Phòng</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">

						<form action="sua.php" method="post" enctype="multipart/form-data">
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Tên Phòng</label>
										<input name="ten" class="form-control" type="text" value="<?php echo $row['lp_ten']; ?>">  </div>
								</div>
								

								<div class="col-md-4">
									<div  class="form-group">
										<label>Hình Ảnh</label>
										<div class="custom-file mb-3">
										<!-- <div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile">
</div> -->
										
											<input  class="form-control" type="file" id="formFile" accept="image/*" name="hinhanh" >
											<!-- <label for="formFile" class="form-label">Chọn hình ảnh</label> -->
										</div>
									</div>
								</div>
								<!-- <div class="col-md-4">
									<div class="form-group">
										<label>Mô Tả</label>
										<textarea class="form-control" rows="5" id="comment" name="text"></textarea>
									</div>
								</div> -->
							</div>
                            <button type="submit" name="luu2" class="btn btn-primary buttonedit ml-2">Lưu</button>
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