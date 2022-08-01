<?php require_once '../includes/header.php'; ?>

	
<!-- AGENT ADD FORM  -->

<div class="page-content">
        
            
        
<div class="col-lg-3"></div>
<div class="col-md-8 grid-margin stretch-card mt-1">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title" style="color:yellow; font-size:24px;">Add Agent</h6>
								<form action="../backend_php_function/agent_add_fuct.php" method="POST">
                                      
                                  <?php if(isset($_SESSION['agent_adding_message'])):?>
                                <p class="bg-success text-white p-2 mb-1">
                                <?= $_SESSION['agent_adding_message'];?>
                                </p>      
                                <?php endif;unset($_SESSION['agent_adding_message'])?>


									<div class="mb-3">
										<label for="exampleInputText1" class="form-label">Full Name</label>
										<input type="text" class="form-control <?=(isset($_SESSION['error_message']))? 'is-invalid':''?> <?php unset($_SESSION['error_message']);?>" value="<?=(isset($_SESSION['agent_name']))? $_SESSION['agent_name']:''; unset($_SESSION['agent_name']);?>" placeholder="Agent Name" name="agent_name">
									</div>

									<div class="mb-3">
										<label for="exampleInputNumber1" class="form-label">Phone Number</label>
										<input type="number" class="form-control <?=(isset($_SESSION['error_phone_message']))? 'is-invalid':''?> <?php unset($_SESSION['error_phone_message']);?>" id="exampleInputNumber1" placeholder="phone number" name="agent_phone" value="<?=(isset($_SESSION['agent_phone']))? $_SESSION['agent_phone']:''; unset($_SESSION['agent_phone']);?>">
									</div>


								

									<div class="mb-3">
										<label for="exampleInputPlaceholder" class="form-label">Messanger Url</label>
										<input type="url" class="form-control" id="exampleInputPlaceholder" placeholder="Enter Messanger Url" name="agent_messanger">
									</div>

									<div class="mb-3">
										<label for="exampleInputReadonly" class="form-label">WhatsApp Number</label>
										<input type="phone" class="form-control <?=(isset($_SESSION['error_whatsapp_message']))? 'is-invalid':''?> <?php unset($_SESSION['error_whatsapp_message']);?>" id="exampleInputReadonly" placeholder="whatsapp number" name="agent_whatsapp" value="<?=(isset($_SESSION['agent_phone']))? $_SESSION['agent_whatsapp']:''; unset($_SESSION['agent_whatsapp']);?>">
									</div>

									<div class="mb-3">
										<label for="exampleFormControlSelect1" class="form-label">Select Cetagory</label>
										<select name="agent_type" class="form-select <?=(isset($_SESSION['error_type_message']))? 'is-invalid':''?> <?php unset($_SESSION['error_type_message']);?>" id="exampleFormControlSelect1">
											<option selected disabled="">Select Cetagory</option>
											<option <?=(isset($_SESSION['agent_type']) == 'কাস্টমার সার্ভিস')? 'selected':'';unset($_SESSION['agent_type'] )?> >কাস্টমার সার্ভিস</option>
											<option <?=(isset($_SESSION['agent_type']) == 'এডমিন')? 'selected':'';unset($_SESSION['agent_type'] )?>>এডমিন</option>
											<option <?=(isset($_SESSION['agent_type']) == 'সুপার এজেন্ট')? 'selected':'';unset($_SESSION['agent_type'] )?>> সুপার এজেন্ট</option>
											<option <?=(isset($_SESSION['agent_type']) == 'অনলাইন মাষ্টার এজেন্ট')? 'selected':'';unset($_SESSION['agent_type'] )?>>অনলাইন মাষ্টার এজেন্ট</option>
										</select>
									</div>
                                    <div class="mb-3">
										<label for="exampleInputReadonly" class="form-label">Refer ID</label>
										<input type="number" class="form-control" id="exampleInputReadonly" placeholder="refer id" name="agent_refer_id">
									</div>
                                    <div class="mb-3">
										<label for="exampleInputReadonly" class="form-label">Agent ID</label>
										<input type="number" class="form-control" id="exampleInputReadonly" placeholder="agent id" name="agent_id">
									</div>
                                    <div class="range-slider mb-3">
    <span id="rs-bullet" class="rs-label">0</span>
    <label for="exampleInputReadonly" class="form-label mr-4">Rating</label>

    <input id="rs-range-line" class="rs-range" type="range" value="0" min="0" step="1" max="7" name="agent_rating">
    
  </div>
  


                                    <!-- <div class="mb-3">
										<label for="exampleInputReadonly" class="form-label">Rating</label>
										<input type="range" class=" rating_input_set" placeholder="rating" name="agent_rating" min='0' max='7'>
                                       
									</div> -->
                                    <!-- <div class="rating mb-4">
                                    <span style="margin-right: 10px;" id="rating_one_start"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"></span>
                                    <span style="margin-right: 10px;" id="rating_two_start"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"></span>
                                    <span style="margin-right: 10px;" id="rating_three_start"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"></span>
                                    <span style="margin-right: 10px;" id="rating_four_start"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"></span>
                                    <span style="margin-right: 10px;" id="rating_five_start"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"></span>
                                    <span style="margin-right: 10px;" id="rating_six_start"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"></span>
                                    <span style="margin-right: 10px;" id="rating_seven_start"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"><img style="width: 20px;" src="../../assets/images/star.png" alt="star.png"></span>
                                    </div> -->

									<button class="btn btn-primary" type="submit">Add Agent</button>
								</form>
							</div>
						</div>
					</div>
		</div>

<!-- AGENT ADD FORM  -->

<?php require_once '../includes/footer.php'; ?>


<script>


$(document).ready(function(){

// $('#rating_one_start').click(function(){

//     $('.rating_input_set').val('<i class="fas fa-star"></i>');

// })
// $('#rating_two_start').click(function(){

// $('.rating_input_set').val('<i class="fas fa-star"></i><i class="fas fa-star"></i>');

// })
// $('#rating_three_start').click(function(){

// $('.rating_input_set').val('<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>');

// })
// $('#rating_four_start').click(function(){

// $('.rating_input_set').val('<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>');

// })
// $('#rating_five_start').click(function(){

// $('.rating_input_set').val('<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>');

// })
// $('#rating_six_start').click(function(){

// $('.rating_input_set').val('<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>');

// })
// $('#rating_seven_start').click(function(){

// $('.rating_input_set').val('<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>');

// })



var rangeSlider = document.getElementById("rs-range-line");
var rangeBullet = document.getElementById("rs-bullet");

rangeSlider.addEventListener("input", showSliderValue, false);

function showSliderValue() {
  rangeBullet.innerHTML = rangeSlider.value;
  var bulletPosition = (rangeSlider.value /rangeSlider.max);
  rangeBullet.style.left = (bulletPosition * 578) + "px";
}



})



</script>