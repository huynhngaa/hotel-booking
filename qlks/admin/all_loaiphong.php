<?php include "ketnoi.php" ?>

<?php

// if (isset($_POST['timkiem'])){
//  $maphong =$_POST['maphong'];

// }
// $timkiem ="SELECT * FROM phong WHERE p_id LIKE '$maphong'";
// $res=mysqli_query($conn,$timkiem);
?>



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
								<h4 class="card-title float-left mt-2">Danh Sách Loại Phòng</h4> <a href="add_loaiphong.php" class="btn btn-primary float-right veiwbutton">Thêm loại phòng</a>
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
											$sql = "SELECT * FROM LOAIPHONG";
											$result = mysqLi_query($conn, $sql);
											while ($row = mysqli_fetch_array($result)) { ?>
												<option value="<?php echo $row['lp_id']; ?>"><?php echo $row['lp_ten']; ?></option> <?php } ?>


										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label> &nbsp;</label> <button type="submit" class="btn btn-success btn-block mt-0 search_button" name="timkiem"> Search </button>
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
											<th class="table-bordered">Mã Phòng</th>
											<th class="col-sm-1 table-bordered">Hình Ảnh</th>
											<th class="col-sm-8  table-bordered">Tên Phòng</th>
											<th class="table-bordered">Hành động</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$sql = "SELECT * FROM LOAIPHONG";
										//thuc thi cau lenh sql va dua doi tuong vao $result
										$result = mysqLi_query($conn, $sql);

										while ($row = mysqli_fetch_array($result)) { ?>
											<tr>
												<td><a href="lp_view.php?this_id=<?php echo $row['lp_id'] ?>">#<?php echo $row['lp_id']; ?></td>
												
												<td>
													<img class="img-fluid" src="assets/img/product/<?php echo $row['lp_hinhanh']; ?>" alt="User Image">
												</td>
												<td><?php echo $row['lp_ten']; ?></td>

												<td class="text-right">
													<a href="lp_view.php?this_id=<?php echo $row['lp_id'] ?>">
														<button type="button" class="btn btn-info btn-sm">
															<i class="fa-solid fa-eye"></i>
														</button>
													</a>
													<?php if($admin['tk_level']==0){
?>
													<a href="lp_sua.php?this_id=<?php echo $row['lp_id'] ?>">
														<button type="button" class="btn btn-warning btn-sm">
															<i style="color:white ;" class="fa-solid fa-pen-to-square"></i>
														</button></a>
													<a href="lp_xoa.php?this_id=<?php echo $row['lp_id'] ?>">
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