
<?php include "ketnoi.php";


//$user=$_SESSION['user'];

//$pid=	$_SESSION['pd'];
if(isset($_POST['datphon'])){

$user_id =$user['kh_id'];
$id ="";
$p_id= $_POST['id'];
$ngaytao = date("Y-m-d H:i:s"); 
$name = $_POST['ten'];
$sdt = $_POST['sdt'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$nguoilon = $_POST['nguoilon'];
$treem = $_POST['treem'];
$gia = $_POST['gia'];
$thanhtoan = $_POST['thanhtoan'];
$trangthai = 1;
$ngayden =  strtotime($checkin);
$ngaydi = strtotime($checkout);
$newDate = date("Y-m-d", strtotime($checkin));
$newDate2 = date("Y-m-d", strtotime($checkout));
$giatri = abs($ngayden - $ngaydi);
$ngayo=floor($giatri / (60*60*24));
$tongtien = $ngayo * $gia;
  $today = date("Y-m-d"); //Today
//Date

 
// $sql = "INSERT INTO phieudatphong(pdp_id,kh_id,p_id,pdp_ngaytao,pdp_ngayden,pdp_ngaydi,pdp_gia) VALUES ('$id','$user_id','$p_id',NOW(),'$newDate','$newDate2','$tongtien')";
// mysqli_query($conn,$sql);
// $sl = "INSERT INTO chitietphieudatphong(pdp_id,ctp_nguoilon,ctp_treem,ctp_thanhtoan,ctp_trangthai) VALUES (@@identity,'$nguoilon','$treem','$thanhtoan','$trangthai')";
// mysqli_query($conn,$sl);
// $s="UPDATE phong SET p_trangthai='1' where p_id = $p_id";
// mysqli_query($conn,$s);
// header('location:thanhtoan.php');
//  $this_id = $_GET["this_id"];
//  $sl ="SELECT * FROM phieudatphong ";
//header('Location: ' . $_SERVER['HTTP_REFERER']);
                
//                       //thuc thi cau lenh sql va dua doi tuong vao $result
//                       $res = mysqLi_query($conn, $sl);
//                     //  foreach($product_array as $key=>$row){
//                        $ro = mysqli_fetch_array($res) ;
// 	move_uploaded_file( $hinhanh_tmp_name, 'assets/img/product/'. $hinhanh);
//  echo "<script>alert('đặt phòng thành công');</script>";



} 
// $this_id = $_GET["this_id"];
// $sql ="SELECT * FROM khachhang WHERE p_id = '$this_id'";
//                      //thuc thi cau lenh sql va dua doi tuong vao $result
//                      $result = mysqLi_query($conn, $sql);
//                     $row = mysqli_fetch_array($result) ;
?>
<!DOCTYPE html>
<html lang="en">
<?php include "header.php" ?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.php">Huynh Nga</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="index.php" class="nav-link">Trang Chủ</a></li>
         <li class="nav-item"><a href="room.php" class="nav-link">Phòng</a></li>
         <li class="nav-item"><a href="dichvu.php" class="nav-link">Dịch Vụ</a></li>
         <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>

   <?php  
 
 	
if (isset($_SESSION['user'])){  
   $user= $_SESSION['user'];
   $sql = "SELECT * FROM khachhang where kh_id='".$user['kh_id']."'";
										//thuc thi cau lenh sql va dua doi tuong vao $result
										$result = mysqLi_query($conn, $sql);

										$ro = mysqli_fetch_array($result) 
?>
<div class="btn-group nav-item">

<a style="color:#E8BFFB; font-size: 17px;" href="login.php" type="button" class="btn nav-link dropdown-toggle"
data-toggle="dropdown"
aria-haspopup="true" aria-expanded="false"> <b > <?php echo $ro['kh_ten']; ?></b></a>
<div class="dropdown-menu dropdown-menu-dark">
<a class="dropdown-item" href="#">Tài khoản</a>
<a class="dropdown-item" href="#">Lịch sử</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="logout.php">Đăng xuất</a>
</div>

</div>


<?php
} else {
?>

         <li class="nav-item"><a href="login.php" class="nav-link">Đăng Nhập</a></li>
     <?php
} 
?>
       </ul>
     </div>
   </div>
 </nav>



 
 <!-- END nav -->
 <div class="hero-wrap" style="background-image: url('https://userscontent2.emaze.com/images/bae9a265-adcc-497e-92fc-528eea65f48b/95b05e943e88148535f443262b0b563f.jpg');">
   <div class="overlay"></div>
   <div class="container">
     <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
       <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
         <div class="text">
           <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span><a href="room.php">Phòng</a></span></p>
           <h1 class="mb-4 bread">  &nbsp; <?php 
             $this_id = $_GET["this_id"];
             $sql ="SELECT * FROM phong a, loaiphong b WHERE a.lp_id=b.lp_id and p_id =$this_id";

                             
                                  //thuc thi cau lenh sql va dua doi tuong vao $result
                                  $result = mysqLi_query($conn, $sql);
                                //  foreach($product_array as $key=>$row){
                                   $row = mysqli_fetch_array($result) ;
                                   ?>
                                 </h1>
         </div>
       </div>
     </div>
   </div>
 </div>

 <section class="ftco-section">
   <div class="container">
   


     <div class="row">
     <div class="col-lg-5">
                 <div class="col-lg-12">
                 <img width="100%" src="admin/assets/img/product/<?php  echo $row['p_hinhanh']; ?>" alt="">
                 <h3><?php  echo $row['p_ten']; ?></h3> 
                 <span>Giá:       <b>      <span class="price mr-2ext-danger" style="font-size:2rem; color:#e77348 ">    
                 <?php  echo number_format( $row['p_gia']); ?> / đêm</span></b> <br>    
                <span> Loại phòng:</span> <span> <b> <?php echo $row['lp_ten'] ?></span> </b><br>    
                <span> Diện tích:</span> <span> <b> <?php echo $row['p_dientich'] ?></span> m2</b><br>   
                <span> Sức chứa:</span> <span> <b> <?php echo $row['lp_succhua'] ?></span> người lớn 1 trẻ em</b><br>   
                <span> <img style="width:1.5rem" src="https://cdn-icons-png.flaticon.com/512/63/63892.png" alt="">  <b> <?php echo $row['p_giuong'] ?> giường</span></b><br>
                <span> Hướng tầm nhìn:</span> <span> <b> <?php echo $row['p_view'] ?></span> </b><br>               			
     </div>			
     
       
     
     </div>


<?php  
if (isset($_SESSION['user'])){ 
?>
     <div class="col-lg-7 sidebar">
<div class="sidebar-wrap bg-light ftco-animate">
<h3 class="heading mb-4">Thông tin đặt phòng</h3>

<form action="thanhtoan.php" method="post" enctype="multipart/form-data" >

<div class="fields">
<div class="form-group">
<input type="text" value="<?php  echo $ro['kh_ten'] ?>"   class="form-control" name="ten" placeholder="Họ và tên">
</div>
<div class="form-group">
<input type="text"  class="form-control" pattern="[0-9]{10}" title="Số điện thoại không hợp lệ!" required requiredmsg="Số điện thoại không được bỏ trống"value="<?php echo $ro['kh_sdt']; ?>" name="sdt" placeholder="Số điện thoại" required>
</div>
<div class="form-group">

<input type="date"  name="checkin" class="form-control " placeholder="Ngày nhận phòng" required requiredmsg="Ngày nhận phòng không được bỏ trống">
</div>
<div class="form-group">
<input type="date" name="checkout" class="form-control" placeholder="Ngày trả phòng" required>
</div>

<div class="form-group">
<select required class="form-control"  name="nguoilon">
  <option value=1>1 người</option>
  <option value="2">2 người</option>
  <option value="3">3 người</option>
  <option value="4" > 4 người</option>
  <option value="5" > 5 người</option>
  <option value="6" > 6 người</option>
  <option value="7" > 7 người</option>
  <option value="8" > 8 người</option>
  <option value="9" > 9 người</option>
  <option value="10" > 10 người</option>
</select>
 <!-- <input type="text"  required class="form-control" pattern="[1-9]" max="5"  title="Không hợp lệ" name="nguoilon" placeholder="Số người lớn">  -->
</div>
<div class="form-group">
<input type="text"   class="form-control" name="treem" placeholder="Số trẻ em">
</div>


<div class="form-group">
<input type="hidden" name="id" value=<?php echo $_GET['this_id']; ?>>
<input type="hidden" name="gia" value=<?php echo $row['p_gia'] ?>> 
<input type="hidden" name="succhua" value=<?php echo $row['lp_succhua'] ?>> 
<button type="submit"  name="datphon" class="btn btn-primary py-3 px-5" >Tiếp tục</button>

</div>
</div>
</form>
<?php 
} ?>
     </div>
  
 </section> <!-- .section -->
<?php include "footer.php" ?>
</body>
</html>