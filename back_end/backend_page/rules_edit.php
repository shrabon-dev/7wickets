<?php require_once '../includes/header.php'; ?>
  
<div class="row mt-7 mb-7">
    <div class="col-lg-1 mt-4"></div>
			<div class="col-md-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">


              <!-- notice select query start -->
                 <?php
                 require_once '../includes/db_connect.php';
                  
                 if(isset($_GET['id'])){

                     $_SESSION['get_rule_id'] = $_GET['id'];
                     $id = $_GET['id'];

                    $rules_select_query = "SELECT * FROM rules WHERE rule_id='$id'";
                    $rules_mysqli_query = mysqli_query($db_connection,$rules_select_query);
                    $rules = mysqli_fetch_assoc($rules_mysqli_query);
                  }
                 ?>
              <!-- notice select query end -->

								<h6 class="card-title" style="color: yellow;">Rules Edit Form</h6>

								<form  action="../backend_php_function/rules_update_func.php" class="forms-sample" method="POST">
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Rules</label>
										<input type="text" class="form-control" id="exampleInputUsername1" name="rules_update" value="<?=$rules['rules']?>">
									</div>
								
								
									<button type="submit" class="btn btn-primary me-2">Save Rules</button>
							
								</form>

                        </div>
                        </div>
					</div>
			
				</div>
	
<?php require_once '../includes/footer.php'; ?>