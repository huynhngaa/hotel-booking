<?php include "ketnoi.php";

 ?>


<?php
if(isset($_POST['timkiem'])){
	$loaiphong = $_POST['loaiphong'];
  
	$sql = "SELECT * from phong, loaiphong where loaiphong.lp_id =phong.lp_id and phong.lp_id = '$loaiphong'";
	
    $result = mysqLi_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
}
?>


<!DOCTYPE html>
<html lang="vn">
    <?php include "header.php" ?>
  <body>
    <?php include "nav.php" ?>
	<?php include "bg.php" ?>

    <?php include "formtimkiem.php" ;
    
	$sql = "SELECT * from phong, loaiphong where loaiphong.lp_id =phong.lp_id and phong.lp_id = '$loaiphong'";
	
    $result = mysqLi_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
   
	?>

    <section class="ftco-section bg-light">
    	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            
          </div>
        </div>    		
    		<div class="row">
			<?php
                   $sql = "SELECT * from phong where lp_id = '$loaiphong'";
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                     $result = mysqLi_query($conn, $sql);

                    while($row = mysqli_fetch_array($result)) { ?>
    				<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="room">
		    					<a href="chitietphong.php?this_id=<?php  echo $row['p_id']; ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(admin/assets/img/product/<?php  echo $row['p_hinhanh']; ?>);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3 text-center">
		    						<h3 class="mb-3"><a href="chitietphong.php?this_id=<?php  echo $row['p_id']; ?>"><?php  echo $row['p_ten']; ?></a></h3>
		    						<p><span class="price mr-2"><?php  echo number_format( $row['p_gia']); ?> VND</span> <br> <span class="per">một đêm</span></p>
		    						<ul class="list">
		    							<li><span>Số người:</span> <?php  echo $row['p_succhua']; ?> Người</li>
		    							<li><span>Diện tích:</span> <?php  echo $row['p_dientich']; ?> m2</li>
		    							<li><span>Hướng tầm nhìn:</span> <?php  echo $row['p_view']; ?> </li>
		    						</ul>
		    						<hr>
                    <?php    if (isset($_SESSION['user'])){ 
	$user= $_SESSION['user'];?>
		    						<p  class="pt-1"><a  href="datphong.php?this_id=<?php  echo $row['p_id']; ?>" class="btn-custom">Đặt ngay <span class="icon-long-arrow-right"></span></a></p>
		    				<?php }else { ?>
                  		<p   style="cursor:pointer" class="pt-1"><a onclick="thongbao()"class="btn-custom">Đặt ngay <span class="icon-long-arrow-right"></span></a></p>
		    		
            <?php    } ?>			</div>
		    				</div>
		    			</div>
				<?php } ?>
    		</div>
    	</div>
    </section>
    <section class="instagram">
      <?php include "gioithieu.php" ?>
    </section>
      <?php include "footer.php" ?>
  </body>
</html>