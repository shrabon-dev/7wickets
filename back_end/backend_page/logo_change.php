<?php require_once '../includes/header.php'; ?>

    <form action="../backend_php_function/logo_change_func.php" method="post" enctype="multipart/form-data" style="margin-top: 100px;margin-left:50px; margin-bottom:400px; ">
      
      <?php if(isset($_SESSION['logo_change_message'])):?>
        <div class="alert alert-primary" role="alert">
            <strong><?=$_SESSION['logo_change_message']?></strong>
        </div>
        
       <?php endif; unset($_SESSION['logo_change_message']);?>
    <label for="" style="color: #ffffff;font-size:24px;margin-right: 25px">Logo Change :</label>
        <input type="file" name="logo_update" id="">
        <button type="submit" class="btn btn-success">Save Logo</button>
    </form>

<?php require_once '../includes/footer.php'; ?>