<?php require_once '../includes/header.php'; ?>
  
<div class="row mt-7 mb-7">
    <div class="col-lg-1 mt-4"></div>
			<div class="col-md-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

                        <?php if(isset($_SESSION['rules_adding_message'])):?>
                           <div class="alert alert-primary" role="alert">
                             <p><?=$_SESSION['rules_adding_message']?></p>
                           </div>
                        <?php endif;?>
          

								<h6 class="card-title" style="color: yellow;">Rules Add Form</h6>

								<form  action="../backend_php_function/rules_add_func.php" class="forms-sample" method="POST">
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Rule</label>
										<input type="text" class="form-control" id="exampleInputUsername1" name="rules" placeholder="add your rules">
									</div>
								
								
									<button type="submit" class="btn btn-primary me-2">Add Rule</button>
							
								</form>

                        </div>
                        </div>
					</div>
			
				</div>
	
<?php require_once '../includes/footer.php'; ?>