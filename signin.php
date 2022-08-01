<?php session_start(); ?>


<!DOCTYPE html>

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
                          <!-- php code start -->

                          <?php if(isset($_SESSION['login_message'])):?>

<div class="alert alert-dismissible bg-danger text-white border-0 fade show" role="alert">
<?=$_SESSION['login_message'];?>
</div>
<?php endif;?>
         <!-- php code start -->
                <?php if(isset($_SESSION['registration_message'])):?>

        <div class="alert alert-dismissible bg-primary text-white border-0 fade show" role="alert">
       
        <?=$_SESSION['registration_message'];?>
        </div>
        <?php endif;?>
        <!-- php code end -->
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="auth-side-wrapper">
                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo logo-light d-block mb-2">7<span style="color: yellow;">Wicket</span></a>
                    <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                    <form class="forms-sample"  action="signin_func.php" novalidate method="POST">
                    <div class="form-group">
                        <label class="form-label"
                            for="email">Your email address:</label>
                               <div class="input-group input-group-merge">
                                    <input id="email"
                                        name="user_login_email"
                                            type="email"
                                        value="<?=(isset($_SESSION['show_user_login_email']))? $_SESSION['show_user_login_email']:''?>"
                                    class="form-control form-control-prepended"
                                placeholder="Your email address"> 
                             </div>
                        <?php if(isset( $_SESSION['user_login_email_error'])): ?>
                            <p style="color: #c91616;font-style:italic; display: block; margin-top:5px;"><?= $_SESSION['user_login_email_error'];?></p>
                        <?php  endif;?>
                                </div>
                                <div class="form-group mt-3 mb-2">
                                    <label class="form-label"
                                        for="password">Your password:</label>
                                    <div class="input-group input-group-merge">
                                            <input id="password"
                                               type="password"
                                                  value="<?=(isset($_SESSION['show_user_login_password']))? $_SESSION['show_user_login_password']:''?>"
                                                name="user_login_password"
                                            class="form-control form-control-prepended"
                                        placeholder="Your password">
                                    </div>
                                    <?php if(isset( $_SESSION['user_login_password_error'])): ?>
                                        <p style="color: #c91616;font-style:italic; display: block; margin-top:5px;"><?= $_SESSION['user_login_password_error'];?></p>
                                    <?php  endif;?>
                                </div>
                   
                      <div>
                        <button class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                      
                      </div>
                      <!-- <a href="./signup.php" class="d-block mt-3 text-muted">Not a user? Sign up</a> -->
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
<?php session_unset(); ?>