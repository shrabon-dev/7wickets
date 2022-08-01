
<?php require_once './back_end/includes/index_header.php' ?>
<?php
mysqli_query($db_connection,"SET CHARACTER SET 'utf8'");
mysqli_query($db_connection,"SET SESSION collation_connection ='utf8_unicode_ci'");
// customer agent
$customer_agent_query = "SELECT * FROM agent_infos WHERE agent_type ='কাস্টমার সার্ভিস'";

$customer_agent_mysqli_query = mysqli_query($db_connection,$customer_agent_query);
?>

    <!-- customer services section start -->
         <section id="customer_service">

          <div class="container_box mt-3">
             <h6>7wicket Customar Service List</h6>
            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Social Link</th>
                  <th>Phone Number</th>
                </tr>
              </thead>

              <?php foreach($customer_agent_mysqli_query as $customer_agent_value):?>
                <tr>
                  <td><?=$customer_agent_value['agent_name']?></td>
                  <td><?=$customer_agent_value['agent_type']?></td>
                  <td class="social_icon"><a href="https://wa.me/<?=$customer_agent_value['agent_whatsapp']?>"><i class="fa-brands fa-whatsapp"></i></a></td>
                  <td class="text-yellow"><?=$customer_agent_value['agent_phone']?></td>
                </tr>
                <tr>
                <td colspan="4"> <span> কাস্টমার সার্ভিস হোয়াইটসাপ ব্যতিত অন্য কোন এপ এর মাধ্যমে যোগাযোগ করা যাবে না এবং
                   কাউকে আপনার একাউন্ট এর পাসওয়ার্ড দিবেন না </span></td>
                </tr>
              <?php endforeach;?>

            

            </table>
          </div>
        
          <div class="n_o_t_e">
            <div class="container_box">
               <p>কাষ্টমার সার্ভিস এর কাউকেই আপনার পাসওয়ার্ড দিবেন না। শুধু আপনার 7wickets এর ইউজার নেম দিবেন - যদি প্রয়োজন হয়।
                * স্বাধারন তথ্য জানার জন্য "General Inquiry" এর সাথে যোগাযোগ করার জন্য অনুরোধ করা হল।
                * বেট বিষয়ক তথ্য জানার জন্য "General Inquiry" এর সাথে যোগাযোগ করার জন্য অনুরোধ করা হল।
                * পয়েন্ট স্বম্পর্কিত কোন অভিযোগ এর জন্য "CUSTOMER SERVICE" সাথে যোগাযোগ করার জন্য অনুরোধ করা হল।
                * বেট স্বম্পর্কিত কোন অভিযোগ এর জন্য "CUSTOMER SERVICE" সাথে যোগাযোগ করার জন্য অনুরোধ করা হল।
                * এজেন্ট স্বম্পর্কিত কোন অভিযোগ এর জন্য "CS MANAGER" সাথে যোগাযোগ করার জন্য অনুরোধ করা হল।
                </p>
            </div>
          </div>
         </section>
    <!-- customer services section end -->


<?php require_once './back_end/includes/index_footer.php' ?>

