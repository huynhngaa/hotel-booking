<?php
 include "ketnoi.php";
    session_start();
    ob_start();
    $user=$_SESSION['user'];
if(isset($_POST['addtocart'])){

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
    $sql = "INSERT INTO phieudatphong(pdp_id,kh_id,p_id,pdp_ngaytao,pdp_ngayden,pdp_ngaydi,pdp_gia) VALUES ('$id','$user_id','$p_id','','$newDate','$newDate2','$tongtien')";
    mysqli_query($conn,$sql);
    // $sl = "INSERT INTO chitietphieudatphong(pdp_id,ctp_nguoilon,ctp_treem,ctp_thanhtoan,ctp_trangthai) VALUES (@@identity,'$nguoilon','$treem','$thanhtoan','$trangthai')";
    // mysqli_query($conn,$sl);

    // header('location:lichsudatphong.php');
    //  $this_id = $_GET["this_id"];
    //  $sl ="SELECT * FROM phieudatphong ";
    
                    
    //                       //thuc thi cau lenh sql va dua doi tuong vao $result
    //                       $res = mysqLi_query($conn, $sl);
    //                     //  foreach($product_array as $key=>$row){
    //                        $ro = mysqli_fetch_array($res) ;
   // 	move_uploaded_file( $hinhanh_tmp_name, 'assets/img/product/'. $hinhanh);
     //echo "<script>alert('đặt phòng thành công');</script>";
    
    
    
     } 

    if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
    if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
        $id=$_POST['id'];
        $ten=$_POST['ten'];
        $hinhanh=$_POST['hinhanh'];
      //  <input type="hidden" name="loaiphong" value="<?php  echo $row['lp_ten']; 
         $loaiphong=$_POST['loaiphong'];
        $dientich=$_POST['dientich'];
        $succhua=$_POST['succhua'];
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
                    $sql = "SELECT pdp_ngayden ,pdp_ngaydi, max(pdp_id) as lonnhat from phieudatphong ";
                    $res=mysqli_query($conn,$sql);
                    // $sl = "INSERT INTO chitietphieudatphong(pdp_id,ctp_nguoilon,ctp_treem,ctp_thanhtoan,ctp_trangthai) VALUES (@@identity,'$nguoilon','$treem','$thanhtoan','$trangthai')";
                    // mysqli_query($conn,$sl);
                
                    // header('location:lichsudatphong.php');
                    //  $this_id = $_GET["this_id"];
                    //  $sl ="SELECT * FROM phieudatphong ";
                    
                                    
                    //                       //thuc thi cau lenh sql va dua doi tuong vao $result
                    //                       $res = mysqLi_query($conn, $sl);
                    //                     //  foreach($product_array as $key=>$row){
                                            $ro = mysqli_fetch_assoc($res) ;
                                            $ngayden2=$ro['pdp_ngayden'];
                                            $ngaydi2=$ro['pdp_ngaydi'];
                                            $ngayden2 =  strtotime($ngayden2);
                                            $ngaydi2 = strtotime($ngaydi2); 
                   // $giatri = abs($ngayden - $ngaydi);
                    // $ngayo=floor($giatri / (60*60*24));
                    // $tongtien = $ngayo * $gia;

                  
                    // $tong+=$ttien;
       // $gia=$_POST['gia'];
       $sl=0;
       $fg=0;
        if(isset($_SESSION['cart'])&&(count($_SESSION['cart'])>0)){
          $i=0;
          foreach ($_SESSION['cart'] as $sp) {
            if($sp[0]==$id){
              //cập nhật mới số lượng
             
              $sl=floor(($sp[5]-$sp[4])/ (60*60*24));
              $fg=1;
              //cập nhật số lượng mới vào giỏ hàng
              $_SESSION['cart'][$i][7]=$sl;
              break;
            }
            $i++;
          }
        }
        //khi số lượng ban đầu không thay đổi thì thêm mới sp vào giỏ hàng
        if($fg==0){
           $sp=array($id,$ten,$hinhanh,$loaiphong,$ngayden2,$ngaydi2,$gia,$sl);
      //  $sp=array($id,$ten,$hinhanh,$dientich,$gia);
         array_push($_SESSION['cart'],$sp);
        }

        //chuyển trang
        header('location: thanhtoan2.php');
    }
?>