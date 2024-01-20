<section class="ftco-booking">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">

    				<form action="timkiem.php" method="post" class="booking-form">
	        		<div class="row">
	        			<div class="col-md-2 d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
				    					<label for="#">Ngày đến</label>
										<i class="fa-solid fa-calendar-days"></i> 
											<input  type="text" class="form-control checkin_date"  placeholder="Choose"> 
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md-2 d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
				    					<label for="#">Ngày đi</label>
										<i class="fa-solid fa-calendar-days"></i>
				    					<input type="text" class="form-control checkout_date" placeholder="Choose">
			    				</div>
			    				</div>
	        			</div>
	        			<div class="col-md-3 d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
			      					<label for="#">Phòng</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="loaiphong" id="" class="form-control">
                                    <option >Chọn loại phòng</option>
								<?php
                     $sql = "SELECT * FROM LOAIPHONG";
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                     $result = mysqLi_query($conn, $sql);

                    while($row = mysqli_fetch_array($result)) { ?>
			                    	<option value="<?php echo $row['lp_id'] ?>"><?php  echo $row['lp_ten']; ?></option>
								  <?php } ?>
			                    </select>
			                  </div>
				              </div>
				            </div>
		              </div>
	        			</div>
	        			<div class="col-md-2 d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
			      					<label for="#">Số ngưỜi</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="succhua" id="" class="form-control">
			                    	<option value="1">1 người</option>
			                      <option value="2">2 người</option>
			                      <option value="3">3 người</option>
			                      <option value="4">4 người</option>
			                      <option value="5">5 ngưỜi</option>
			                      <option value="6">6 người</option>
			                    </select>
			                  </div>
				              </div>
				            </div>
		              </div>
	        			</div>
						
	        			<div class="col-md-3 d-flex"> 
	        				<div class="form-group d-flex align-self-stretch">
			              <button type="submit"  name="timkiem" class="btn btn-primary py-3 px-4 align-self-stretch">Tìm kiếm</button>
			            </div>
	        			</div>
	        		</div>
	        	</form>

	    		</div>
    		</div>
    	</div>
    </section>