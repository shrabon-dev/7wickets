
<?php require_once './back_end/includes/index_header.php' ?>

<?php
mysqli_query($db_connection,"SET CHARACTER SET 'utf8'");
mysqli_query($db_connection,"SET SESSION collation_connection ='utf8_unicode_ci'");
// super agent
$super_agent_query = "SELECT * FROM agent_infos WHERE agent_type ='সুপার এজেন্ট'";

$super_agent_mysqli_query = mysqli_query($db_connection,$super_agent_query);
?>



 <!--  supper agent section start -->
 <section id="supper_agent">
 
 <div class="row">
        <div class="col-lg-2 col-8 mt-2 m-auto">
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" 
            aria-label="Search" id="myInput" onkeyup="myFunction()"  aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </span>
          </div>
        <div class="col-lg-5"></div>

        </div>
      </div>

    <div class="container_box mt-3">
       <h6>7wicket Supper Agent List</h6>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Type</th>
            <th>ID</th>
            <th>Social Link</th>
            <th>Phone Number</th>
            <th>Admin</th>
          </tr>
        </thead>
        <tbody id="myTable">
          <?php foreach($super_agent_mysqli_query as $super_agent_value ): ?>
          <tr>
            <td><?=$super_agent_value['agent_name']?></td>
            <td><?=$super_agent_value['agent_type']?></td>
            <td><?=$super_agent_value['agent_id']?></td>
            <td class="social_icon"><a href="<?=$super_agent_value['agent_messanger']?>"><i class="fa-brands fa-facebook-messenger"></i></a><a href="https://wa.me/<?=$super_agent_value['agent_whatsapp']?>"><img src="./front_end/images/whatsapp.png" alt="whatsapp.png"></a></td>
            <td class="text-yellow"><?=$super_agent_value['agent_phone']?></td>
            <td class="text-yellow"><a href="./admin_agent.php">Complain</a></td>
          </tr>
          <tr>  
           <td colspan="6"> <span> এজেন্ট দের সাথে মেসেঞ্জার এবং হোয়াইটসাপ ব্যতিত অন্য কোন এপ এর মাধ্যমে যোগাযোগ করা 
            যাবে না এবং তা করলে গ্রহণযোগ্য হবে না </span></td>
          </tr>
          <?php endforeach; ?>




      </tbody>

      </table>
    </div>
   </section>
<!-- supper agent section end -->



<?php require_once './back_end/includes/index_footer.php' ?>

