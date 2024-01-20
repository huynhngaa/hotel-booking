<?php include "ketnoi.php" ?>
<!DOCTYPE html>
<html lang="vn">
<?php include "header.php" ?>
<body class="mini-sidebar">
	
	<div class="main-wrapper">
	<?php include "nav.php";
			  include "sidebar.php"
		 ?>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12 mt-5">
							<h3 class="page-title mt-3">Xin chào <?php echo $admin['nv_ten'] ?></h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item active">Bảng điều khiển</li>
							</ul>
						</div>
					</div>
				</div>
				<?php if($admin['tk_level']==0){
?>
				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
									<?php 	$sql = "SELECT count(*) as 'tong' FROM phieudatphong";
									$result = mysqLi_query($conn, $sql);
									$row = mysqli_fetch_array($result) ?>
								<h6 style="font-weight: 700;" class="text-muted">Đơn đặt phòng </h6> 
										<h3 class="card_widget_header"><?php echo $row['tong'] ?></h3>
										</div>
										<div class="ml-auto mt-md-3 mt-lg-0"> 
										<i  style="font-size: 2rem;" class="fa-solid fa-calendar-days"></i>
								
										<!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"> -->
									 </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div><?php 	$sql = "SELECT count(*) as 'tong' FROM phong where p_trangthai=0";
									$result = mysqLi_query($conn, $sql);
									$row = mysqli_fetch_array($result) ?>
										<h6 style="font-weight: 700;" class="text-muted">Phòng trống</h6>
										<h3 class="card_widget_header"> <?php echo $row['tong']?> </h3>
									 </div>
									 <div class="ml-auto mt-md-3 mt-lg-0"> 
									
									<i style="font-size: 2rem;" class="fa-solid fa-house"></i>
										<!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"> -->
									 </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
									<?php 	$sql = "SELECT count(*) as 'tong' FROM khachhang";
									$result = mysqLi_query($conn, $sql);
									$row = mysqli_fetch_array($result) ?>
									<h6 style="font-weight: 700;" class="text-muted">Khách hàng</h6>
										<h3 class="card_widget_header"> <?php echo $row['tong'] ?></h3>
										 </div>
										 <div class="ml-auto mt-md-3 mt-lg-0"> 
									
									<i style="font-size: 2rem; " class="fa-solid fa-users"></i>
										<!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"> -->
									 </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
									<?php 	$sql = "SELECT sum(pdp_gia) as 'gia' FROM phieudatphong";
									$result = mysqLi_query($conn, $sql);
									$row = mysqli_fetch_array($result) ?>
									<h6 style="font-weight: 700;" class="text-muted">Tổng doanh thu</h6> 
										<h3 class="card_widget_header"><?php echo number_format( $row['gia']); ?> đ</h3>
										</div>
									<div class="ml-auto mt-md-3 mt-lg-0"> 
									
									<i style="font-size: 2rem;" class="fa-regular fa-money-bill-1"></i>
										<!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"> -->
									 </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>

				<div class="row">
					<div class="col-sm-14">
						<div class="card card-table">
							<div class="card-body booking_card">

								<table class="table table-bordered table-stripped table table-hover table-center mb-0">
									<thead class="table-bordered ">
										<tr>
											<th class="table-bordered">Mã Phòng</th>
											<th class="table-bordered">Khách hàng</th>
											<th class=" table-bordered">Tên Phòng</th>
											<th class="col-sm-1  table-bordered">Hình Ảnh</th>
											<th class="table-bordered">Ngày đặt</th>
											<th class="table-bordered">Ngày đến</th>
											<th class="table-bordered">Ngày đi</th>
											<th class="table-bordered">Số người lớn </th>
											<th class="table-bordered">Số trẻ em</th>
											<th class="table-bordered">Thành tiền</th>
											<?php if($admin['tk_level']==0){
?>
											<th class=" col-sm-2 table-bordered text-center">Hành động</th>
											<?php } ?>
										</tr>
									</thead>
									<tbody>
										<?php
										$sql = "SELECT * FROM phieudatphong,khachhang,phong where phieudatphong.p_id=phong.p_id and phieudatphong.kh_id=khachhang.kh_id ORDER BY pdp_id DESC";
										//thuc thi cau lenh sql va dua doi tuong vao $result
										$result = mysqLi_query($conn, $sql);

										while ($row = mysqli_fetch_array($result)) {  
											$date =  $row['pdp_ngayden'];
											$date2 =  $row['pdp_ngaydi'];
											$date=strtotime($date);
											$date=date('d/m/Y',$date);
											$date2=strtotime($date2);
											$date2=date('d/m/Y',$date2);
											$date3= $row['pdp_ngaytao'];
											$date3=strtotime($date3);
											$date3=date('H:m:s - d/m/Y',$date3);
											?>
											<tr>
												<td><a href="pdp_view.php?this_id=<?php echo $row['pdp_id'] ?>">#<?php echo $row['pdp_id']; ?></td>
												<td><?php echo $row['kh_ten']; ?></td>
												
												<td><?php echo $row['p_ten']; ?></td>
												<td>
													<img class="img-fluid" src="assets/img/product/<?php echo $row['p_hinhanh']; ?>" alt="User Image">
												</td>
												<td><?php echo $date3 ?></td>
												<td><?php echo $date ?></td>
												<td><?php echo $date2 ?></td>
												<?php
										$sl = "SELECT * FROM phieudatphong,chitietphieudatphong where phieudatphong.pdp_id=chitietphieudatphong.pdp_id";
										//thuc thi cau lenh sql va dua doi tuong vao $result
										$re = mysqLi_query($conn, $sl);

									$ro = mysqli_fetch_assoc($re); ?>
												<td><?php echo $ro['ctp_nguoilon']; ?></td>
												<td><?php echo $ro['ctp_treem']; ?></td>
												<td><?php echo number_format(  $row['pdp_gia']); ?> đ</td>
												<td class="text-center">
												<?php if($admin['tk_level']==0){
?>
													<a href="pdp_sua.php?this_id=<?php echo $row['pdp_id'] ?>">
														<button type="button" class="btn btn-warning btn-sm">
															<i style="color:white ;" class="fa-solid fa-pen-to-square"></i>
														</button></a>

													<a href="pdp_xoa.php?this_id=<?php echo $row['pdp_id'] ?>">
														<button type="button" class="btn btn-danger btn-sm">
															<i class="fa-regular fa-trash-can"></i>
														</button>
													</a>
<?php } ?>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/plugins/morris/morris.min.js"></script>
	<script src="assets/js/chart.morris.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>