<?php require_once '../includes/header.php'; ?>

<?php require_once '../includes/db_connect.php';?>


			<div class="page-content">


				<div class="row">
					<div class="col-lg-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title" style="color: yellow;">Agent List and Details</h4>
							
								<div class="table-responsive pt-3">

                                <!-- data collect form database  -->
                                <?php
                                 $data_select_query = "SELECT * FROM rules";
                                  $data_mysqli_query = mysqli_query($db_connection,$data_select_query);
                                  $id= 1;
                                ?>
                                <!-- data collect form database  -->
                                     
                         
                                


									<table class="table table-dark">
                                        <!-- =============   MESSAGE OR ALERT SESSION START   ============= -->

                                        <?php if(isset($_SESSION['rule_delete_message'])): ?>
 
                                        <div class="alert alert-danger " role="alert">
                                        <strong><?=$_SESSION['rule_delete_message']?></strong>
                                        </div>
                                        
                                        <?php endif; unset($_SESSION['rule_delete_message'])?>

                                        <?php if(isset($_SESSION['rule_update_message'])): ?>
                                            
                                            <div class="alert alert-success " role="alert">
                                            <strong><?=$_SESSION['rule_update_message']?></strong>
                                            </div>
                                            
                                            <?php endif; unset($_SESSION['rule_update_message'])?>
                                        <!-- =============   MESSAGE OR ALERT SESSION END   ============= -->
										<thead>
											<tr>
												<th>Id</th>
												<th>Rules</th>
												<th>Action</th>
											
											</tr>
										</thead>
										<tbody>
                                            <?php foreach($data_mysqli_query as $data):?>
											<tr>
                                                <td><?=$id++?></td>
                                                <td><?=$data['rules']?></td>
                                                <td>
                                                    <a href="../backend_page/rules_edit.php?id=<?=$data['rule_id']?>" class="btn btn-success">Edit</a>
                                                    <a href="../backend_php_function/rules_delete.php?id=<?=$data['rule_id']?>" class="btn btn-danger">Delete</a>
                                                </td>
											
											
											</tr>
                                            <?php endforeach; ?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

			

			</div>

			<!-- partial:../../partials/_footer.html -->

<?php require_once '../includes/footer.php'; ?>