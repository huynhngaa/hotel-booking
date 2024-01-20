<?php include "ketnoi.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "header.php" ?>

<body class="mini-sidebar">
	<div class="main-wrapper">
		<?php include "nav.php";
		include "sidebar.php"
		?>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Danh Sách Đơn Đặt Phòng</h4> <a href="add_booking.php" class="btn btn-primary float-right veiwbutton">Thêm đơn đặt phòng</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form method="post">
							<div class="row formtype">
								<div class="col-md-3">
									<div class="form-group">
										<label>Mã phòng</label>

										<input class="form-control" name="maphong" type="text" placeholder="1">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Tên phòng</label>

										<input class="form-control" name="tenphong" type="text" placeholder="giường đơn">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Loại phòng</label>
										<select class="form-control" id="sel1" name="loaiphong">
											<?php
											$sql = "SELECT * FROM loaiphong";
											$result = mysqLi_query($conn, $sql);
											while ($row = mysqli_fetch_array($result)) { ?>
												<option value="<?php echo $row['lp_id']; ?>"><?php echo $row['lp_ten']; ?></option> <?php } ?>


										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label> &nbsp;</label> <button type="submit" class="btn btn-success btn-block mt-0 search_button" name="timkiem"> Tìm kiếm </button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>


				<div class="row">
					<div class="col-sm-14">
						<div class="card card-table">
							<div class="card-body booking_card">
								<table class="table table-bordered table-stripped table table-hover table-center mb-0">
									<thead class="table-bordered ">
										<tr>
											<th class="table-bordered">ID</th>
											<th class="table-bordered">Khách hàng</th>
											<th class=" table-bordered">Tên Phòng</th>
											 <th class="col-sm-1  table-bordered">Thời gian đặt</th> 
											<th class="table-bordered">Ngày đến</th>
											<th class="table-bordered">Ngày đi</th>
											<th class="table-bordered">Người lớn</th>
											<th class="table-bordered">Trẻ em</th>
											<th class="table-bordered">Thành tiền</th>
											<th class="table-bordered">Trạng thái</th>
											<th class=" col-sm-2 table-bordered">Hành động</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$sql = "SELECT * FROM phieudatphong a,khachhang b ,phong c,chitietphieudatphong d where a.p_id=c.p_id and a.kh_id=b.kh_id and d.pdp_id =a.pdp_id ORDER BY a.pdp_id DESC";
										//thuc thi cau lenh sql va dua doi tuong vao $result
										$result = mysqli_query($conn, $sql);
									//	$ro = mysqli_fetch_assoc($result);
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
												<!-- <td>
													<img class="img-fluid" src="assets/img/product" alt="User Image">
												</td> -->
												<td><?php echo $date3 ?></td>
												<td><?php echo $date ?></td>
												<td><?php echo $date2 ?></td>
												<?php
									// 	$sl = "SELECT * FROM phieudatphong,chitietphieudatphong where phieudatphong.pdp_id=chitietphieudatphong.pdp_id";
									// 	//thuc thi cau lenh sql va dua doi tuong vao $result
									// 	$re = mysqLi_query($conn, $sl);

									// $ro = mysqli_fetch_assoc($re); ?>
												<td><?php echo $row['ctp_nguoilon']; ?></td>
												<td><?php echo $row['ctp_treem']; ?></td>
												<td><?php echo $row['pdp_gia']; ?></td>
												<td><?php   $tt= $row['ctp_trangthai']; if($tt == 1) $tt='Đặt thành công'; if($tt == 0) $tt='Đã huỷ'  ; if($tt == 2) $tt='Hoàn thành';  echo $tt  ?></td>


												<td class="text-right">
													
													<a href="pdp_sua.php?this_id=<?php echo $row['pdp_id'] ?>">
														<button type="button" class="btn btn-warning btn-sm">
															<i style="color:white ;" class="fa-solid fa-pen-to-square"></i>
														</button></a>
													<a href="pdp_xoa.php?this_id=<?php echo $row['pdp_id'] ?>">
														<button type="button" class="btn btn-danger btn-sm">
															<i class="fa-regular fa-trash-can"></i>
														</button>
													</a>

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
			<div id="delete_asset" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3 class="delete_class">Are you sure want to delete this Asset?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "js.php" ?>
</body>

</html>