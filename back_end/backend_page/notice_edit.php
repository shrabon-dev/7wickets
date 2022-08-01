<?php require_once '../includes/header.php'; ?>
  
<div class="row mt-7 mb-7">
    <div class="col-lg-1 mt-4"></div>
			<div class="col-md-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">


              <!-- notice select query start -->
                 <?php
                 require_once '../includes/db_connect.php';

                    $notice_select_query = "SELECT * FROM notice";
                    $notoce_mysqli_query = mysqli_query($db_connection,$notice_select_query);
                    $notice = mysqli_fetch_assoc($notoce_mysqli_query);
                 ?>
              <!-- notice select query end -->

								<h6 class="card-title" style="color: yellow;">Notice Edit Form</h6>

								<form  action="../backend_php_function/notice_update_func.php" class="forms-sample" method="POST">
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Notice</label>
										<input type="text" class="form-control" id="exampleInputUsername1" name="notice_update" placeholder="Text your notice" value="<?=$notice['notice_info']?>">
									</div>
								
								
									<button type="submit" class="btn btn-primary me-2">Save Notice</button>
							
								</form>

                        </div>
                        </div>
					</div>
			
				</div>
	
<?php require_once '../includes/footer.php'; ?>