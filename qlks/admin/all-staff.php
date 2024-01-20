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
								<h4 class="card-title float-left mt-2">Danh Sách Nhân Viên</h4> <a href="add-staff.php" class="btn btn-primary float-right veiwbutton">Thêm Nhân Viên</a> </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-14">
						<div class="card card-table">
							<div class="card-body booking_card">
								
									<table class="table table-bordered table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
												<th class="table-bordered text-center">Mã KH</th>
												<th class="table-bordered text-center">MÃ TK</th>
												<th class="col-sm-1 table-bordered text-center">Hình Ảnh</th>
												<th class="table-bordered text-center">Họ Tên</th>
												<th class="table-bordered text-center">Ngày sinh</th>
												<th class="table-bordered text-center">Số Điện Thoại</th>
												<th class="table-bordered text-center">Email</th>
												<th class="table-bordered text-center" >Địa Chỉ</th>
												
												
												<th class="text-center">Hành Động</th>
											</tr>
										</thead>
										<tbody>
								<?php
									$sql = "SELECT * FROM nhanvien a, taikhoan b WHERE a.nv_id=b.nv_id";
									//thuc thi cau lenh sql va dua doi tuong vao $result
									$result = mysqLi_query($conn, $sql);

									while($row = mysqli_fetch_array($result)) { ?>
											<tr>
												<td><?php  echo $row['nv_id']; ?></td>
												<td><?php  echo $row['tk_id']; ?></td>
												<td>
                                                  <img class="img-fluid" src="assets/img/profiles/<?php  echo $row['nv_hinhanh']; ?>" alt="User Image">
                                                </td>
												<td><?php  echo $row['nv_ten']; ?></td>
												<td><?php  echo $row['nv_ngsinh']; ?></td>
												<td><?php  echo $row['nv_sdt']; ?></td>
												<td><?php  echo $row['nv_email']; ?></td>
												<td><?php  echo $row['nv_diachi']; ?></td>												
												<td class="text-right">
												<a href="nv_view.php?this_id=<?php echo $row['nv_id']?>">
												<button type="button" class="btn btn-info btn-sm">
												<i  class="fa-solid fa-eye"></i>
												</button>   
													</a>
												<a href="nv_sua.php?this_id=<?php echo $row['nv_id']?>">	
												<button type="button" class="btn btn-warning btn-sm">
												<i  style="color:white ;" class="fa-solid fa-pen-to-square"></i>
												</button></a>
												<a href="nv_xoa.php?this_id=<?php echo $row['nv_id']?>">
												<button type="button" class="btn btn-danger btn-sm">
												 	<i  class="fa-regular fa-trash-can"></i>
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
	<?php include "js.php"?>
</body>

</html>