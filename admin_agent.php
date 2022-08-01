
<?php require_once './back_end/includes/index_header.php' ?>

<?php
mysqli_query($db_connection,"SET CHARACTER SET 'utf8'");
mysqli_query($db_connection,"SET SESSION collation_connection ='utf8_unicode_ci'");
// admin agent
$admin_agent_query = "SELECT * FROM agent_infos WHERE agent_type ='এডমিন'";

$admin_agent_mysqli_query = mysqli_query($db_connection,$admin_agent_query);
?>

    <!--  admin agent section start -->
    <section id="admin_agent">
   


        <div class="container_box mt-3">
           <h6>7wicket Admin List</h6>
          <table>
            <thead>
              <tr>
                <th>Type</th>
                <th>Name</th>
                <th>Social Link</th>
                <th>Phone Number</th>
              </tr>
            </thead>
            
            <?php foreach($admin_agent_mysqli_query as $admin_agent_value):?>
                <tr>
                  <td><?=$admin_agent_value['agent_name']?></td>
                  <td><?=$admin_agent_value['agent_type']?></td>
                  <td class="social_icon"><a href="https://wa.me/<?=$admin_agent_value['agent_whatsapp']?>"><i class="fa-brands fa-whatsapp"></i></a></td>
                  <td class="text-yellow"><?=$admin_agent_value['agent_phone']?></td>
                </tr>
                <tr>
                <tr> 
                    <td colspan="4"><span class="small_font"> এন্থনি এক্সেস মেসেঞ্জার এবং হোয়াইটসাপ ছাড়া অন্য কোন এপ ব্যবহার করে না-তাই 
                      মেসেঞ্জার এবং হোয়াইটসাপ ছাড়া আর অন্য কোন এপ এর মাধ্যমে যোগাযোগ করবেন না। </span></td>
                </tr>
              <?php endforeach;?>

          
          
              

          </table>
        </div>
      
       </section>
    <!-- admin agent section end -->



<?php require_once './back_end/includes/index_footer.php' ?>

