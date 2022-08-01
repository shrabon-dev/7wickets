<?php
require_once '../includes/db_connect.php';
session_start();

$old_name_query = "SELECT * FROM logo";
$old_name = mysqli_fetch_assoc(mysqli_query($db_connection,$old_name_query))['logo_img'];



 $name_logo = $_FILES['logo_update']['name'];
 $tmp_name = $_FILES['logo_update']['tmp_name'];
 $type = $_FILES['logo_update']['type'];
 $size = $_FILES['logo_update']['size'];
 $id = 1;
 $new_name = $id++.'_'."$name_logo";
 $to = '../uploads/'.$new_name;



if( $name_logo){
    unlink('../uploads/'.$old_name);
    move_uploaded_file( $tmp_name,$to);
    $logo_update_query = "UPDATE logo SET logo_img='$new_name'";
    mysqli_query($db_connection,$logo_update_query);
    header('location: ../backend_page/logo_change.php');
    $_SESSION['logo_change_message'] = "Your logo is changed";
}else{
    header('location: ../backend_page/logo_change.php');

}


?>