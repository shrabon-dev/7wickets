<?php require_once './back_end/includes/db_connect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent List</title>
    <!-- font family start -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@100;200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- font family end -->
    <link rel="stylesheet" href="./front_end/css/all.min.css">
    <link rel="stylesheet" href="./front_end/css/bootstrap.min.css">
    <link rel="stylesheet" href="./front_end/css/aos.css">
    <link rel="stylesheet" href="./front_end/css/slick.css">
    <link rel="stylesheet" href="./front_end/css/venobox.css">
    <link rel="stylesheet" href="./front_end/css/style.css">


</head>
<body>
    <!-- PHP CODE START -->
<?php
mysqli_query($db_connection,"SET CHARACTER SET 'utf8'");
mysqli_query($db_connection,"SET SESSION collation_connection ='utf8_unicode_ci'");
// Rules query 
$rules_query = "SELECT * FROM rules";

$rules_mysqli_query = mysqli_query($db_connection,$rules_query);
// Notice query 
$notice_query = "SELECT * FROM notice";

$notice_data = mysqli_fetch_assoc(mysqli_query($db_connection,$notice_query));
// Notice query 
$logo_query = "SELECT * FROM logo";

$logo_img = mysqli_fetch_assoc(mysqli_query($db_connection,$logo_query));

?>
<!-- PHP CODE END -->
    <!-- navbar section start -->
      <div class="container_box">
        <div class="logo">
            <img src="./back_end/uploads/<?=$logo_img['logo_img']?>" alt="logo.jpg">
        </div>
      </div>

      <div class="container_box">
        <nav>
            <ul>
                <li><a  href="index.php"><i class="fa-solid fa-house"></i> হোম </a></li>
                <li><a  href="customer_agent.php"><i class="fa-solid fa-headset"></i> কাস্টমার সার্ভিস</a></li>
                <li><a href="admin_agent.php"><i class="fa-solid fa-user"></i> এডমিন</a></li>
                <li><a href="super_agent.php"><i class="fa-solid fa-user-tie"></i> সুপার এজেন্ট</a></li>
                <li><a href="master_agent.php"><i class="fa-solid fa-users"></i> অনলাইন মাষ্টার এজেন্ট</a></li>
            </ul>
          </nav>
      </div>
    <!-- navbar section end -->
    






    <!--  moving notice section start -->
    <div class="container_box mt-3">
        <div class="move_notice">
            <i class="fa-solid fa-newspaper"></i>
            <marquee direction="left"> <?=$notice_data['notice_info']?> </marquee>
        </div>
    </div>
    <!-- moving notice  section end -->
