
<?php include "ketnoi.php";
// if(isset($_POST['back'])){
//   header('Location: ' . $_SERVER['HTTP_REFERER']);
// }
session_start();
$user=$_SESSION['user'];
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
$succhua = $_POST['succhua'];
//$thanhtoan = $_POST['thanhtoan']; 
$trangthai = 1;
$ngayden =  strtotime($checkin);
$ngaydi = strtotime($checkout);
$newDate = date("Y-m-d", strtotime($checkin));
$newDate2 = date("Y-m-d", strtotime($checkout));
$ngayden2 = date("d-m-Y", strtotime($checkin));
$ngaydi2 = date("d-m-Y", strtotime($checkout));
$giatri = abs($ngayden - $ngaydi);
$ngayo=floor($giatri / (60*60*24));
if($treem ==""){$treem=0;} 
if(($treem ==0) && ($nguoilon>=$succhua)) {
$tedu =0;
$nldu =$nguoilon - $succhua;
$phuthu=$nldu*100000 ;
$tongtien =$phuthu+ ($ngayo * $gia);
}
if(($treem ==0) && ($nguoilon<$succhua)) {
  $tedu =0;
  $nldu =0;
 // $phuthu=$nldu*100000 ;
  $tongtien =$ngayo * $gia;
  }
if(($treem >0) && ($nguoilon<$succhua)) {
    $tedu =($treem -1);
    $nldu=0;
    $phuthu=$tedu*50000;
    $tongtien =$phuthu+ ($ngayo * $gia);
}
  
if(($treem >0) && ($nguoilon>=$succhua)) {
  $tedu =($treem -1);
  $nldu=($nguoilon -$succhua);
  $phuthu=($nguoilon - $succhua)*100000 + ($tedu*50000);
  $tongtien =$phuthu+ ($ngayo * $gia);
}

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
if (isset($_POST['xacnhan'])){
  $user=$_SESSION['user'];
//$pid=	$_SESSION['pd'];
$user_id =$user['kh_id'];
$id ="";
$p_id= $_POST['id'];
$ngaytao = date("Y-m-d H:i:s"); 
$name = $_POST['ten'];
$sdt = $_POST['sdt'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$nguoilon = $_POST['nguoilon'];
//$nguoilon =(int)$nguoilon;
//$nguoilon=2;
$treem = $_POST['treem'];
$gia = $_POST['gia'];
$succhua = $_POST['succhua'];
$thanhtoan = $_POST['thanhtoan'];
$trangthai = 1;
$ngayden =  strtotime($checkin);
$ngaydi = strtotime($checkout);
$newDate = date("Y-m-d", strtotime($checkin));
$newDate2 = date("Y-m-d", strtotime($checkout));
$ngayden2 = date("d-m-Y", strtotime($checkin));
$ngaydi2 = date("d-m-Y", strtotime($checkout));
$giatri = abs($ngayden - $ngaydi);
$ngayo=floor($giatri / (60*60*24));
if($treem ==""){$treem=0;} 
if(($treem ==0) && ($nguoilon>=$succhua)) {
$tedu =0;
$nldu =$nguoilon - $succhua;
$phuthu=$nldu*100000 ;
$tongtien =$phuthu+ ($ngayo * $gia);
}
if(($treem ==0) && ($nguoilon<$succhua)) {
  $tedu =0;
  $nldu =0;
 // $phuthu=$nldu*100000 ;
  $tongtien =$ngayo * $gia;
  }
if(($treem >0) && ($nguoilon<$succhua)) {
    $tedu =($treem -1);
    $nldu=0;
    $phuthu=$tedu*50000;
    $tongtien =$phuthu+ ($ngayo * $gia);
}
  
if(($treem >0) && ($nguoilon>=$succhua)) {
  $tedu =($treem -1);
  $nldu=($nguoilon -$succhua);
  $phuthu=($nguoilon - $succhua)*100000 + ($tedu*50000);
  $tongtien =$phuthu+ ($ngayo * $gia);
}
$sql = "INSERT INTO phieudatphong(pdp_id,kh_id,p_id,pdp_ngaytao,pdp_ngayden,pdp_ngaydi,pdp_gia) VALUES ('$id','$user_id','$p_id',NOW(),'$newDate','$newDate2','$tongtien')";
mysqli_query($conn,$sql);
$sl = "INSERT INTO chitietphieudatphong(pdp_id,ctp_nguoilon,ctp_treem,ctp_thanhtoan,ctp_trangthai) VALUES (@@identity,'$nguoilon','$treem','$thanhtoan','$trangthai')";
mysqli_query($conn,$sl);
$s="UPDATE phong SET p_trangthai='1' where p_id = $p_id";
mysqli_query($conn,$s);
echo "<script>alert('đặt phòng thành công');</script>";
header('Refresh:0;url=lichsudatphong.php');
//lay
}
// $this_id = $_GET["this_id"];
// $sql ="SELECT * FROM khachhang WHERE p_id = '$this_id'";
//                      //thuc thi cau lenh sql va dua doi tuong vao $result
//                      $result = mysqLi_query($conn, $sql);
//                     $row = mysqli_fetch_array($result) ;
?>
<!DOCTYPE html>
<html lang="en">


    <head>
    <title>Huynh Nga - Hotel </title>
    <link rel="shortcut icon" type="image/x-icon" href="admin/assets/img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    
    <link rel="stylesheet" href="css/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script type="text/javascript"> 
    function thongbao(){
        Swal.fire({
  //title: 'Bạn chưa đăng nhập',
  text: "Vui lòng đăng nhập!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'Huỷ ',
  confirmButtonText: 'Đăng nhập'
}).then((result) => {
  if (result.isConfirmed) {
    window.location="login.php";
  }
})
    }


function load(){
    Swal.fire({
  //position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
}
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var elements = $("input, select");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                 e.target.setCustomValidity(e.target.getAttribute("requiredmsg"));
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
})
</script>
  </head>
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
 
   $user= $_SESSION['user'];	
if (isset($_SESSION['user'])){ 
?>
<div class="btn-group nav-item">

<a style="color:#E8BFFB; font-size: 17px;" href="login.php" type="button" class="btn nav-link dropdown-toggle"
data-toggle="dropdown"
aria-haspopup="true" aria-expanded="false"> <b > <?php echo $user['kh_ten']; ?></b></a>
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
             $p_id= $_POST['id'];
             $sql ="SELECT * FROM phong a, loaiphong b WHERE a.lp_id=b.lp_id and p_id =$p_id";

                             
            //                       //thuc thi cau lenh sql va dua doi tuong vao $result
                                  $result = mysqLi_query($conn, $sql);
            //                    //  foreach($product_array as $key=>$row){
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
                <span> Diện tích:</span> <span> <b> <?php echo $row['p_dientich'] ?></span> m2 </b><br>   
                <span> Sức chứa:</span> <span> <b> <?php echo $row['lp_succhua'] ?> người lớn và 1 trẻ em</span> </b><br>   
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
<p>Họ và tên: <b><?php echo  $_POST["ten"];  ?><br></b> </p>
</div>
<div class="form-group">
<p>Số điện thoại: <b><?php echo  $_POST["sdt"];  ?><br></b></p>
</div>
<div class="form-group">
<p>Ngày nhận phòng: <b> <?php echo  $ngayden2 ?><br></b></p>
</div>
<div class="form-group"> 
<p>Ngày trả phòng: <b><?php echo   $ngaydi2   ?><br></b></p>
</div>

<div class="form-group">
  <p>Người lớn: <b><?php echo $_POST["nguoilon"]; ?> người</b>  <i>(Quá số lượng <?php echo $nldu ?> người.Phụ thu 100,000đ/người)</i><br></p>
<!-- <input type="text"  class="form-control" name="nguoilon" placeholder="Số người lớn"> -->
</div>
<div class="form-group">
<p>Trẻ em: <b><?php echo $treem ?> người </b> <i>(Quá số lượng <?php echo $tedu ?> người.Phụ thu 50,000đ/người)</i> <br></p>
</div>
<div class="form-group">
<p>Tổng thời gian lưu trú: <b><?php echo $ngayo?> đêm<br></b></p>
</div>
<div class="form-group">
<p > Thành tiền: <b class="price mr-2ext-danger" style="font-size:1.2rem; color:#e77348 "> <?php echo number_format(  $tongtien); ?> đ</b><br></p>

</div>
<div class="form-group">
<div class="select-wrap one-third">
  <b>Chọn phương thức thanh toán: <span class="text-danger">*</span> </b>
                   <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                   <select name="thanhtoan" id="" class="form-control">
                     <option>Thanh toán bằng tiền mặt</option>
                     <option >Thanh toán trực tuyến</option>
                   </select>
                 </div>

</div>
<div class="form-group">
  
  <div class="row">  
 
<form action="thanhtoan.php"  method="post">
<div class="form-group">
<input type="hidden" value="<?php  echo $user['kh_ten'] ?>"  class="form-control" name="ten" placeholder="Họ và tên">
<input type="hidden"  class="form-control" value="<?php echo $user['kh_sdt']; ?>" name="sdt" placeholder="Số điện thoại">
<input type="hidden"  name="checkin" value="<?php echo  $ngayden2 ?>" class="form-control " placeholder="Ngày nhận phòng">
<input type="hidden" name="checkout" value="<?php echo  $ngaydi2 ?>"  class="form-control" placeholder="Ngày trả phòng">
<input type="hidden"  value="<?php echo $nguoilon ?>" class="form-control" name="nguoilon" placeholder="Số người lớn">
<input type="hidden" value="<?php echo $treem ?>" class="form-control" name="treem" placeholder="Số trẻ em">
<input type="hidden" class="form-control" value="<?php echo $row['lp_succhua'] ?> " name="succhua" placeholder="Số trẻ em">
<input type="hidden" name="id" value=<?php echo $p_id ?>>
<input type="hidden" name="gia" value=<?php echo $row['p_gia'] ?>> 
<!-- <button type="submit"  name="datphon" class="btn btn-primary py-3 px-5" > aaa</button> -->
</div>
<button  type="submit" class="btn btn-outline-info py-3 px-5 col-lg-5 ml-3 mr-2" >  <a class="text-info" href="datphong.php?this_id=<?php  echo $row['p_id']; ?>"  > Quay lại </a></button>

<button type="submit" name="xacnhan" class="btn btn-info py-3 px-5 col-lg-6" >Thanh toán</button>
</form>

</div>

</div>

</div>
</form>
</div>
<?php 
} ?>
     </div>
  
 </section> <!-- .section -->
<?php include "footer.php" ?>
</body>
</html>