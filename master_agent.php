
<?php require_once './back_end/includes/index_header.php' ?>
<?php
mysqli_query($db_connection,"SET CHARACTER SET 'utf8'");
mysqli_query($db_connection,"SET SESSION collation_connection ='utf8_unicode_ci'");
// Online master  agent
$master_agent_query = "SELECT * FROM agent_infos WHERE agent_type ='অনলাইন মাষ্টার এজেন্ট'";

$master_agent_mysqli_query = mysqli_query($db_connection,$master_agent_query);

?>
 <!--  master agent section start -->
 <section id="master_agent"> 
  

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
       <h6>7wicket Online Master Agent  List</h6>
      <table class="table table-bordered table-striped" >
        <thead>
          <tr>
            <th>Name</th>
            <th>Type</th>
            <th>ID</th>
            <th>7* RATING</th>
            <th>Social Link</th>
            <th>Phone Number</th>
            <th>Super</th>
          </tr>
        </thead>  
        <tbody id="myTable"> 

                <?php foreach($master_agent_mysqli_query as $master_agent_value):?>
          
                <tr>
                  <td><?=$master_agent_value['agent_name']?></td>
                  <td><?=$master_agent_value['agent_type']?></td>
                  <td><?=$master_agent_value['agent_id']?></td>
                  <td class="rating_icon">
                    <?php if($master_agent_value['agent_rating'] == 7): ?>
                   <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                      <?php elseif($master_agent_value['agent_rating'] == 6): ?>
                      <i class="fa-solid "></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>

                      <?php elseif($master_agent_value['agent_rating'] == 5): ?>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>

                        <?php elseif($master_agent_value['agent_rating'] == 4): ?>
                     <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>

                      <?php elseif($master_agent_value['agent_rating'] == 3): ?>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>

                        <?php elseif($master_agent_value['agent_rating'] == 2): ?>
                          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>

                          <?php elseif($master_agent_value['agent_rating'] == 1): ?>
                            <i class="fa-solid fa-star"></i>

                            <?php endif; ?>

                  </td>
                  
                  
                  <td class="social_icon"><a href="<?=$master_agent_value['agent_messanger']?>"><i class="fa-brands fa-facebook-messenger"></i></a> <a href="https://wa.me/<?=$master_agent_value['agent_whatsapp']?>"><i class="fa-brands fa-whatsapp"></i></a></td>
                  <td class="text-yellow"><?=$master_agent_value['agent_phone']?></td>
                  <td class="text-yellow"> <a href="./super_agent.php">Complain</a> </td>
                </tr>
                <tr>
                  <td colspan="7"> <span> এজেন্ট দের সাথে মেসেঞ্জার এবং হোয়াইটসাপ ব্যতিত অন্য কোন এপ এর মাধ্যমে যোগাযোগ 
                    করা যাবে না এবং তা করলে গ্রহণযোগ্য হবে না </span></td>
                 </tr>
                <?php endforeach; ?>

         </tbody>
      </table>
    </div>
   </section>
<!-- master agent section end -->

<?php require_once './back_end/includes/index_footer.php' ?>

