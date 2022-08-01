 <?php session_start(); ?>




<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>7wicket admin signin</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="./assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="./assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="./assets/css/demo2/style.css">
  <!-- End layout styles -->

  <!-- <link rel="shortcut icon" href="./assets/images/favicon.png" /> -->
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="auth-side-wrapper">

                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo logo-light d-block mb-2">7<span>wicket</span></a>
                    <h5 class="text-muted fw-normal mb-4">Create a free account.</h5>
               
                    <form action="./signup_func.php" novalidate method="POST">
                            <div class="form-group">
                                <label class="form-label"
                                       for="name">Name:</label>
                                <div class="input-group input-group-merge">
                                    <input id="name"
                                           type="text"
                                           name="user_name"
                                           class="form-control form-control-prepended"
                                           placeholder="Your first and last name"  value="<?=(isset($_SESSION['show_user_name']))? $_SESSION['show_user_name']:''?>">
                                   
                                </div>
                                <?php if(isset( $_SESSION['user_name_error'])): ?>
                                    <p style="color: #c91616;font-style:italic; display: block; margin-top:5px;"><?= $_SESSION['user_name_error'];?></p>
                                <?php  endif;?>

                            </div>
                            <div class="form-group mt-2">
                                <label class="form-label"
                                       for="email">Email address:</label>
                                <div class="input-group input-group-merge">
                                    <input id="email"
                                           type="email"
                                           name="user_email"
                                           class="form-control form-control-prepended"
                                           placeholder="Your email address"    value="<?=(isset($_SESSION['show_user_email']))? $_SESSION['show_user_email']:''?>">
                               
                                </div>
                                <?php if(isset( $_SESSION['user_email_error'])): ?>
                                    <p style="color: #c91616;font-style:italic; display: block; margin-top:5px;"><?= $_SESSION['user_email_error'];?></p>
                                <?php  endif;?>
                            </div>
                            <div class="form-group mt-2">
                                <label class="form-label"
                                       for="password">Password:</label>
                                <div class="input-group input-group-merge">
                                    <input id="password"
                                           type="password"
                                           name="user_password"
                                           class="form-control form-control-prepended"
                                           placeholder="Choose a password"
                                           value="<?=(isset($_SESSION['show_user_password']))? $_SESSION['show_user_password']:''?>">
                                   
                                    <!-- <div style="color: #742427;">Password must be at least 8 characters in length and must contain at least (1..9,A,a,@/#$%^&*).</div> -->
                                </div>
                                <?php if(isset( $_SESSION['user_password_error'])): ?>
                                    <p style="color: #c91616;font-style:italic; display: block; margin-top:5px;"><?= $_SESSION['user_password_error'];?></p>
                                <?php  endif;?>
                            </div>
                            <div class="form-group mt-2">
                                <label class="form-label"
                                       for="password2">Password:</label>
                                <div class="input-group input-group-merge">
                                    <input id="password2"
                                           type="password"
                                           name="confirm_password"
                                           class="form-control form-control-prepended"
                                           placeholder="Confirm password" 
                                           value="<?=(isset($_SESSION['show_confirm_password']))? $_SESSION['show_confirm_password']:''?>">
                                
                                </div>
                                <?php if(isset( $_SESSION['confirm_password_error'])): ?>
                                    <p style="color: #c91616;font-style:italic; display: block; margin-top:5px;"><?= $_SESSION['confirm_password_error'];?></p>
                                <?php  endif;?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">Sign Up</button>
                        
                        </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="./assets/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="./assets/vendors/feather-icons/feather.min.js"></script>
	<script src="./assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->

</body>
</html>







 -->

<?php session_unset();?>