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
                                 $data_select_query = "SELECT * FROM agent_infos";
                                  $data_mysqli_query = mysqli_query($db_connection,$data_select_query);
                                ?>
                                <!-- data collect form database  -->
                                     
                         
                                


									<table class="table table-dark">
                                        <!-- =============   MESSAGE OR ALERT SESSION START   ============= -->

                                        <?php if(isset($_SESSION['delete_message'])): ?>
 
                                        <div class="alert alert-danger " role="alert">
                                        <strong><?=$_SESSION['delete_message']?></strong>
                                        </div>
                                        
                                        <?php endif; unset($_SESSION['delete_message'])?>

                                        <?php if(isset($_SESSION['agent_edit_message'])): ?>
                                            
                                            <div class="alert alert-success " role="alert">
                                            <strong><?=$_SESSION['agent_edit_message']?></strong>
                                            </div>
                                            
                                            <?php endif; unset($_SESSION['agent_edit_message'])?>
                                        <!-- =============   MESSAGE OR ALERT SESSION END   ============= -->
										<thead>
											<tr>
												<th>Name</th>
												<th>Phone Number</th>
												<th>Agent Id</th>
												<th>Messanger Url</th>
												<th>Whatsapp</th>
												<th>Agent Type</th>
												<th>Refer ID</th>
												<th>Agent Rating</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
                                            <?php foreach($data_mysqli_query as $data):?>
											<tr>
                                                <td><?=$data['agent_name']?></td>
                                                <td><?=$data['agent_phone']?></td>
												<td><?=$data['agent_id']?></td>
												<td><?=$data['agent_messanger']?></td>
												<td><?=$data['agent_whatsapp']?></td>
												<td><?=$data['agent_type']?></td>
												<td><?=$data['agent_refer_id']?></td>
												<td><?=$data['agent_rating']?></td>
											
												<td>
                                                    <a href="../backend_page/agent_edit.php?id=<?=$data['id']?>" class="btn btn-success">Edit</a>
                                                    <a href="../backend_php_function/agent_delete.php?id=<?=$data['id']?>" class="btn btn-danger">Delete</a>
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