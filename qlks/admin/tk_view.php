<?php include "ketnoi.php" ;?>
<?php 
$this_id = $_GET['this_id'];
$sql ="SELECT * FROM khachhang, taikhoan where khachhang.kh_id = taikhoan.kh_id and taikhoan.tk_id=$this_id";
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
			
			
					<div class="col-lg-3">
								
					</div>

              <div class="col-lg-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title d-flex justify-content-between">
													<span><b> THÔNG TIN PHÒNG</b></span>
													<a class="edit-link"   href="tk_sua.php?this_id=<?php echo $row['tk_id'];?>"><i class="fa fa-edit mr-1"></i>Sửa</a>
													</h5>
												<div class="row">
													<p class="col-sm-6 text-sm-right mb-0 mb-sm-3">ID</p>
													<h4 class="col-sm-6"><?php  echo $row['tk_id']; ?></h4>
												</div>
                                                <div class="row">
												 
                                                 <p class="col-sm-6 text-sm-right mb-0 mb-sm-3">ID khách hàng </p>
                                                 <p  class="col-sm-6 font-weight-bold">  <?php $loai=$row['tk_level'];
                                                 if($loai ==1) echo $row['kh_id']; else echo $row['kh_ten'] ?></p>
                                             </div>
                                             <div class="row">
													<p class="col-sm-6 text-sm-right mb-0 mb-sm-3">Họ và tên</p>
													<p class="col-sm-6"><?php echo $row['kh_ten'] ?></p>
												</div>
                                                <div class="row">
												 
													<p class="col-sm-6 text-sm-right mb-0 mb-sm-3">Tên đăng nhập</p>
													<p  class="col-sm-6 font-weight-bold">  <?php echo $row['tk_username']; ?></p>
												</div>
												<div class="row">
												 
													<p class="col-sm-6 text-sm-right mb-0 mb-sm-3">Mật khẩu</p>
													<p  class="col-sm-6">  <?php  echo  $row['tk_password']; ?> </p>
												</div>
												
												
												<div class="row">
													<p class="col-sm-6 text-sm-right mb-0 mb-sm-3">Thời gian tạo</p>
													<p class="col-sm-6"> <?php  $date = $row['tk_date'];
                                            $date=strtotime($date);
                                            $date=date('H:i:s d/m/Y',$date); echo $date?></p>
												</div>
                                                <div class="row">
													<p class="col-sm-6 text-sm-right mb-0 mb-sm-3">Loại tài khoản</p>
													<p class="col-sm-6"> <?php $loai=$row['tk_level']; $loai='Khách hàng'; echo $loai?></p>
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