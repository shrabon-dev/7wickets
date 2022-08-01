<!-- registration php code -->
<?php require_once "./back_end/includes/db_connect.php" ?>
<?php
// session_start();

// $signup_select_query = "SELECT COUNT(*) AS 'signup_member' FROM users";
// $signup_member = mysqli_fetch_assoc(mysqli_query($db_connection,$signup_select_query));
// // $person_count = $signup_mysqli_query->num_rows;

// // print_r($signup_member['signup_member']);

// // die();



// $user_name = $_POST['user_name'];
// $user_email = $_POST['user_email'];
// $user_password = $_POST['user_password'];
// $confirm_password = $_POST['confirm_password'];

// $number = preg_match('@[0-9]@', $user_password);
// $uppercase = preg_match('@[A-Z]@', $user_password);
// $lowercase = preg_match('@[a-z]@', $user_password);
// $specialChars = preg_match('@[#W+#]@', $user_password);

// $isTrue = false;
 


// // name valid

// if($user_name == true){
//     $_SESSION['show_user_name'] = $user_name;
//     if(ctype_alpha(str_replace(" ","",$user_name))){
//         $isTrue = true;
//     }else{
//         $_SESSION['user_name_error'] = "Please, use only letter";
//         header('location:../../signup.php');

//     }
// }else{
//     $_SESSION['user_name_error'] = "Please, fill up the name box";
//     header('location:../../signup.php');

// }

// // email valid ----------------
// if($user_email == true){
//     $_SESSION['show_user_email'] = $user_email;

//     if(htmlspecialchars(filter_var($user_email, FILTER_VALIDATE_EMAIL))){
//         $isTrue = true;
      
//     }else{
//         $_SESSION['user_email_error'] = "Please, use valid email";
//         header('location:../../signup.php');
//     }
// }else{
//     $_SESSION['user_email_error'] = "Please, fill up the name box";
//     header('location:../../signup.php');
// }

// // email valid ----------------
// if($user_password == true){
//     $_SESSION['show_user_password'] = $user_password;

//     if(strlen($user_password) > 8 || !$number || !$uppercase || !$lowercase || !$specialChars ) {
//         $isTrue = true;

//        }else {
//         $_SESSION['user_password_error'] = "Your password invalid.";
//         header('location:../../signup.php');
//        }

// }else {
//     $_SESSION['user_password_error'] = "Please, give your password";
//     header('location:../../signup.php');
//    }

// // email valid

// if( $confirm_password && $confirm_password == $user_password){
//     $_SESSION['show_confirm_password'] = $confirm_password;
//     $isTrue = true;
    
// }else{
//     $_SESSION['confirm_password_error'] = "Your password don't matching ";
//     header('location:../../signup.php');
// }

// if( $signup_member < 2){
//     header('location: ../../signup.php');
// }else{
//     if($isTrue){
//         $user_password = md5($user_password);
//          $insert_query = "INSERT INTO users (user_name,user_email,user_password) VALUES ('$user_name','$user_email','$user_password')";
//          mysqli_query($db_connection,$insert_query);
//          $_SESSION['registration_message'] = "Hurrah! Your Registration Successfull!";
//          header('location: ../../signin.php');
    
//         }else{
//         header('location: ../../signup.php');
//     }
// }






?>

<?php
session_start();

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$password = $_POST['user_password'];
$confirm_password = $_POST['confirm_password'];



$isFalse = false;


$sl_db = "SELECT * FROM users";
$db_query = mysqli_query($db_connection,$sl_db);

if($name){
   if(ctype_alpha(str_replace(' ','',$name)) == false){
      $isFalse = true;
      $_SESSION['name__erorr'] = "Please, use only letter.";
      
    }
    $_SESSION['name__show'] = $name;

}elseif(!$name){
   $isFalse = true;
   $_SESSION['name__erorr'] = "Please, give your name.";
}


if($email){


   while($db_query_arry = mysqli_fetch_assoc($db_query)){
      $incude_email =$db_query_arry['user_email'];
   
      if($email !== $incude_email){
         if(filter_var($email,FILTER_VALIDATE_EMAIL) == false){
            $isFalse = true;
            $_SESSION['email__erorr'] = "Email is invalid";
   
         }else{
            $_SESSION['email__show'] = "$email";
         }
        
      }else{
       $isFalse = true;
       $_SESSION['email__erorr'] = "This eamil use already";
   
      }
   }


}elseif(!$email){
   $isFalse = true;
   $_SESSION['email__erorr'] = "Please, give your email.";
}



if($password){
   
    if(strlen($password) < 8 ){
      $isFalse = true;
      $_SESSION['password__erorr'] = "Please, give your password minimum 8 charactar*.";
    }else{
      if(!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[0-9A-Za-z!@#$%]/',$password)){
         $isFalse = true;
         $_SESSION['password__erorr'] = "Please, give the password a-z,.";
      }else{
         $pass_valid . "<br>". $password;
      }
    }
$_SESSION['pass__show'] =$password;
}elseif(!$password){
   $isFalse = true;
   $_SESSION['password__erorr'] = "Please, give your password";
}


if(!$confirm_password || $password !== $confirm_password){
   $isFalse = true;
   $_SESSION['confirm_password__erorr'] = "Please, match this password";
}elseif($confirm_password && $password == $confirm_password){

   $_SESSION['conf__pass__show'] =$confirm_password;
   
}

if($isFalse){

   header("location: signup.php");

}else{

// Mysql connection


   $encrypt_password = md5($password);
   $insert_data = "INSERT INTO users(user_name,user_email,user_password) VALUES('$name','$email','$encrypt_password')";
   
   $query =  mysqli_query($db_connection,$insert_data);


   $_SESSION['registration_statuse'] = "Your registration is Successfull";


    
   header("location: signin.php");
}

?>



