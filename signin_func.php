<!-- registration php code -->
<?php require_once "./back_end/includes/db_connect.php" ?>

<?php session_start(); ?>

<!-- login form function start -->
<?php 
       if(isset($_POST['user_login_email'])){
            $user_login_email = $_POST['user_login_email'];
            $user_login_password = $_POST['user_login_password'];
        
             $encpt_user_login_password=md5($user_login_password);
             $isTrue= false;


            $data_select = "SELECT COUNT(*) AS 'result' FROM users WHERE user_email='$user_login_email' AND user_password='$encpt_user_login_password'";
            $query = mysqli_query($db_connection,$data_select);
            $arry = mysqli_fetch_assoc($query);

     
             
        
         
             if($user_login_email){
                 $isTrue = true;

            }else{
                $_SESSION['user_login_email_error']="Please fill the email";
                header("location: signin.php");
            }

            if($user_login_password){
                
                $isTrue = true;
      
            }else{
                $_SESSION['user_login_password_error'] = "Please fill the password";
                header("location: signin.php");
            }
        

             if($isTrue == true){
                   
                $admin_user_select = "SELECT * FROM users WHERE user_email='$user_login_email'";
                $admin_user_query = mysqli_query($db_connection,$admin_user_select);
                $admin_user_arry = mysqli_fetch_assoc($admin_user_query);
                $admin_user_name = $admin_user_arry['user_name'];
          
                $admin_user_phone = $admin_user_arry['phone_number'];
    
                // print_r($admin_user_phone);
                // die();
              
                if($arry['result'] == 1){
    
                    $_SESSION['admin_user_name'] = "$admin_user_name";
                    $_SESSION['admin_user_email'] = "$user_login_email";
                    $_SESSION['admin_user_id'] = "$admin_user_id";
                    $_SESSION['admin_user_phone'] = "$admin_user_phone";

                    $_SESSION['login_statuse'] = "Hurrah!! Login successfull";
                    header("location: ./back_end/backend_page/agent_add.php");
                }else{

                    $_SESSION['login_statuse_error'] = "Sorry, your email or password is wrong";
                    header("location: signin.php");
                }

                
             }
      
          

            }
      ?>
<!-- login form function end -->
