<?php include "ketnoi.php" ;?>
<?php 
$this_id = $_GET['this_id'];
$sql ="SELECT * FROM khachhang, taikhoan where khachhang.kh_id = taikhoan.kh_id and  khachhang.kh_id=$this_id";
$query =mysqli_query($conn, $sql);
$row =mysqli_fetch_assoc($query);
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
								<img width="100%" src="assets/img/profiles/<?php  echo $row['kh_hinhanh']; ?>" alt="">
									</div>
								</div>
					</div>

              <div class="col-lg-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title d-flex justify-content-between">
													<span><b> THÔNG TIN PHÒNG</b></span>
													<a class="edit-link"  href="kh_sua.php?this_id=<?php echo $row['kh_id']?>"><i class="fa fa-edit mr-1"></i>Sửa</a>
													</h5>
												<div class="row mt-5">
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Họ và tên</p>
													<h4 class="col-sm-9"><?php  echo $row['kh_ten']; ?></h4>
												</div>
                                                <div class="row">
												 
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Tên đăng nhập</p>
													<p  class="col-sm-9 font-weight-bold">  <?php echo $row['tk_username']; ?></p>
												</div>
												<div class="row">
												 
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mật khẩu</p>
													<p  class="col-sm-9">  <?php  echo  $row['tk_password']; ?></p>
												</div>
												
												<div class="row">
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Số điện thoại </p>
													<p class="col-sm-9"><?php echo $row['kh_sdt'] ?></p>
												</div>
												<div class="row">
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Email</p>
													<p class="col-sm-9"> <?php echo $row['kh_email']?></p>
												</div>
                                                <div class="row">
													<p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Địa chỉ</p>
													<p class="col-sm-9"> <?php echo $row['kh_diachi']?></p>
												</div>
												
											</div>
										</div>
													<div class="row"> 
													<p class="col-sm-10 text-sm-right mb-0"></p>
										<a href="all-customer.php"><button type="button" class="btn btn-primary">Huỷ</button></a> 
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