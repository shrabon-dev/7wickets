<?php
require_once '../includes/db_connect.php';
 $notice_update = $_POST['notice_update'];

$notice_update_query = "UPDATE notice SET notice_info='$notice_update'";
mysqli_query($db_connection,$notice_update_query);
header('location: ../backend_page/notice_edit.php');

?>