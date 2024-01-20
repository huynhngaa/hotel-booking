<?php include "ketnoi.php";

if (isset($_POST['sua'])) {
	$this_id = $_POST['id'];
	$trangthai = $_POST['trangthai'];
	$sql = "UPDATE chitietphieudatphong SET ctp_trangthai ='$trangthai' WHERE pdp_id=$this_id";
	mysqli_query($conn, $sql);
	echo "<script>alert('Cập nhật trạng thái thành công!!!');</script>";
header('Refresh:0;url=all-booking.php');
//lay
	
}
?>
	<?php
	$this_id = $_GET['this_id'];
		$sql = "SELECT * FROM phieudatphong a,khachhang b ,phong c,chitietphieudatphong d,loaiphong e where e.lp_id=c.lp_id and a.p_id=c.p_id and a.kh_id=b.kh_id and d.pdp_id =a.pdp_id and a.pdp_id=$this_id";	
					$result = mysqLi_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				$date =  $row['pdp_ngayden'];
				$date2 =  $row['pdp_ngaydi'];
				$date=strtotime($date);
				$date=date('d/m/Y',$date);
				$date2=strtotime($date2);
				$date2=date('d/m/Y',$date2);
				$date3= $row['pdp_ngaytao'];
				$date3=strtotime($date3);
				$date3=date('H:m:s - d/m/Y',$date3);  ?>
<?php  ?>
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
				<h3 class="page-title mt-5 text-center">Chỉnh Sửa Đơn Đặt Phòng</h3>
				<div class="card-body">

				<div class="row">
			
			
			<div class="col-lg-3">
						
			</div>

	  <div class="col-lg-5">
								<div class="card ">
									
										<div class=" ml-5"> 
										<div class="row mt-2 ">
											<p class="col-sm-4 text-sm-right mb-0 mb-sm-3">ID</p>
											<h4 class="col-sm-8"><?php echo $row['pdp_id'] ?> </h4>
										</div>
										<div class="row">
										 
											<p class="col-sm-4 text-sm-right mb-0 mb-sm-3">Khách hàng</p>
											<p  class="col-sm-8 font-weight-bold"><?php echo $row['kh_ten'] ?></p>
										</div>
										<div class="row">
										 
											<p class="col-sm-4 text-sm-right mb-0 mb-sm-3">Phòng</p>
											<p  class="col-sm-8">  <?php echo $row['p_ten']; ?></p>
										</div>
										<div class="row">
										 
											<p class="col-sm-4 text-sm-right mb-0 mb-sm-3">Loại phòng</p>
											<p  class="col-sm-8">  <?php echo $row['lp_ten']; ?></p>
										</div>
										<div class="row">
											<p class="col-sm-4 text-sm-right mb-0 mb-sm-3">Ngày đặt phòng </p>
											<p class="col-sm-8"><?php echo $date3 ?></p>
										</div>
										<div class="row">
											<p class="col-sm-4 text-sm-right mb-0 mb-sm-3">Ngày đến</p>
											<p class="col-sm-8"> <?php echo $date ?></p>
										</div>
										<div class="row">
											<p class="col-sm-4 text-sm-right mb-0 mb-sm-3">Ngày đi</p>
											<p class="col-sm-8"> <?php echo $date2 ?></p>
										</div>
										<div class="row">
											<p class="col-sm-4 text-sm-right mb-0 mb-sm-3">Người lớn</p>
											<p class="col-sm-8"><?php echo $row['ctp_nguoilon'] ?> người</p>
										</div>
										<div class="row">
											<p class="col-sm-4 text-sm-right mb-0 mb-sm-3">Trẻ em</p>
											<p class="col-sm-8"><?php echo $row['ctp_treem'] ?> người</p>
										</div>
										<div class="row">
											<p class="col-sm-4 text-sm-right mb-0 mb-sm-3">Thành tiền</p>
											<p class="col-sm-8"><?php echo number_format(  $row['pdp_gia']); ?> đ</p>
										</div>
										<form action="pdp_sua.php" method="post">
										<div class="row">
										<label class="col-lg-4 col-form-label">Trạng thái</label>
											<div class="row col-lg-8"> 
											<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="trangthai"  value="0">
											<label class="form-check-label" for="gender_male">
												Huỷ
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="trangthai" id="gender_female" value="2">
											<label class="form-check-label" for="gender_female">
												Hoàn thành
											</label>
											</div>
										</div>
										</div>
										<div class="row"> 
											<p class="col-lg-3"></p>
											<div>
												<input type="hidden" name="id" value="<?php echo $row['pdp_id']?>">
											<a ><button type="submit" name="sua" class="btn btn-primary">Cập nhật</button></a>
								<a href="all-booking.php"><button type="button" class="btn btn-primary">Huỷ</button></a>
								</div>
							</div>
								 </form>
								</div>
											</div>
	</div>
	
</div>


				</div>
			</div>
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