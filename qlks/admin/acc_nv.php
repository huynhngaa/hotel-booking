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
                                <h4 class="card-title float-left mt-2">Tài Khoản Nhân Viên</h4>
                                <a href="add-leave-type.html" class="btn btn-primary float-right veiwbutton">Thêm tài khoản nhân viên
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>ID nhân viên</th>
                                                <th>Họ và tên</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                               
                                                <th>Thời gian tạo</th>
                                                <th>Loại tài khoản</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
										$sql = "SELECT * FROM taikhoan,nhanvien where taikhoan.nv_id =nhanvien.nv_id and tk_level=1";
										//thuc thi cau lenh sql va dua doi tuong vao $result
										$result = mysqLi_query($conn, $sql);

										while ($row = mysqli_fetch_array($result)) {
                                            $date = $row['tk_date'];
                                            $date=strtotime($date);
                                            $date=date('H:i:s d/m/Y',$date); ?>
                                            <tr>
                                            <td><a href="tk_view.php?this_id=<?php echo $row['tk_id'] ?>">#<?php echo $row['tk_id']; ?></td>
                                            <td>
                                                <h2 class="table-avatar">
                                                        <!-- <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a> -->
                                                        <a href="nv_view.php?this_id=<?php echo $row['nv_id'] ?>"><?php echo $row['nv_id'] ?></a>
                                                    </h2>
                                                    </td>
                                                    <td><?php echo $row['nv_ten'] ?></td>
                                                <td><?php echo $row['tk_username'] ?></td>
                                                <td><?php echo $row['tk_password'] ?></td>
                                                
                                              
                                                <td><?php echo $date ?> </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="#" class="btn btn-sm bg-success-light mr-2">
                                                        <?php $loai =$row['tk_level'];
                                                            if($loai ==1)
                                                            $loai='Nhân viên';
                                                            else $loai='Khách hàng';
                                                        echo $loai ?>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                <a href="tk_view.php?this_id=<?php echo $row['tk_id'] ?>">
														<button type="button" class="btn btn-info btn-sm">
															<i class="fa-solid fa-eye"></i>
														</button>
													</a>
													<a href="tk_sua.php?this_id=<?php echo $row['tk_id'] ?>">
														<button type="button" class="btn btn-warning btn-sm">
															<i style="color:white ;" class="fa-solid fa-pen-to-square"></i>
														</button></a>
													<a href="tk_xoa.php?this_id=<?php echo $row['tk_id'] ?>">
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
            </div>
        </div>

    </div>


    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>