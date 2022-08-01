
<?php require_once './back_end/includes/index_header.php' ?>
<?php
mysqli_query($db_connection,"SET CHARACTER SET 'utf8'");
mysqli_query($db_connection,"SET SESSION collation_connection ='utf8_unicode_ci'");
// admin agent
$admin_agent_query = "SELECT * FROM agent_infos WHERE agent_type ='এডমিন'";

$admin_agent_mysqli_query = mysqli_query($db_connection,$admin_agent_query);
?>


    <!-- home section start -->
    <section id="home_section">

        <div class="container_box mt-3">
          <h5> <i class="fa-solid fa-circle-info"></i> QUICK MASTER AGENT NUMBER:</h5>
    
          <?php foreach($admin_agent_mysqli_query as $admin_agent_value):?>
            <div class="d_flex">
                    <span>Agent id</span>
                    <span><?=$admin_agent_value['agent_id']?></span>
                    <span><a href="https://wa.me/<?=$admin_agent_value['agent_whatsapp']?>"><i class="fa-brands fa-whatsapp"></i></a></span>
                    <span><?=$admin_agent_value['agent_phone']?></span>
                  </div>
              <?php endforeach;?>
               
                 
              
          </div>

       <div class="container_box mt-3">
         <h5> <i class="fa-solid fa-circle-info"></i> কিভাবে একাউন্ট খুলবেন ?</h5>
         <div class="home_agent_number">
            <p>কিভাবে একাউন্ট খুলবেনঃ <span><a href="#"> 7wicket.Live</a></span> সাইটে একাউন্ট করতে হলে আপনার এজেন্ট 
                এর মাধ্যমে একাউন্ট খুলতে হবে। এজেন্ট এর মাধ্যমেই টাকা ডিপোজিট এবং উইথড্র করতে হবে। আপনি যে এজেন্ট এর কাছ থেকে একাউন্ট খুলবেন তার সাথেই সব সময় লেনদেন করতে হবে। আপনি কিভাবে তার সাথে লেনদেন করবেন আপনার এজেন্ট আপনাকে বুঝিয়ে দিবে। এজেন্ট লিস্ট চেক না করে লেনদেন করলে সমস্ত দায়ভার আপনাকেই বহন করা লাগবে। একাউন্ট খুলতে কি কি প্রয়োজন- তা নিচে উল্লেখ করে দেওয়া হল 👇👇</p>
        
                <ul>
                    <li><i class="fa-solid fa-star"></i> আপনার নাম</li>
                    <li><i class="fa-solid fa-star"></i> আপনার ইমেইল আইডি (যদি থাকে আর না থাকলে এজেন্ট বানিয়ে দিবে)</li>
                    <li><i class="fa-solid fa-star"></i> আপনার ফোন নাম্বার</li>
                </ul>
            </div>
       </div>
       <div class="container_box mt-3">
         <h5> <i class="fa-solid fa-circle-info"></i> এজেন্ট লিস্ট ?</h5>
        <div class="home_agent_number">
           <p>
            একাউন্ট খুলতে নিম্নে অনলাইন এজেন্ট লিস্ট এ ক্লিক করুন। এজেন্ট লিস্টে যাদের নাম আছে – তাদের নামের পাশে ফেসবুক আইকনে ক্লিক করলে এজেন্ট এর ফেসবুক আইডি আসবে অথবা মেসেঞ্জার আইকনে ক্লিক করলে সরাসরি এজেন্ট এর মেসেঞ্জারে নিয়ে যাবে এবং যেসব ইউজার ভাইয়েরা হোয়াটসঅ্যাপে লেনদেন করতে পছন্দ করেন তারা এজেন্ট এর হোয়াটসঅ্যাপ আইকনে ক্লিক করবেন তাহলে আপনাকে সরাসরি রিয়েল এজেন্ট এর হোয়াটসঅ্যাপে নিয়ে যাবে । আমাদের সকল এজেন্ট এর নামে ডুপ্লিকেট বা ফেইক আইডি থাকতে পারে। তাই এই সব এজেন্ট দের নাম ফেইসবুকে সার্চ না করে – এজেন্ট লিঙ্ক এ ক্লিক করে সরাসরি রিয়েল এজেন্ট এর সাথে যোগাযোগ করুন
              <a href="master_agent.php" class="d-block mt-1"><span>অনলাইন মাষ্টার এজেন্ট লিস্টঃ</span></a>
           </p>
           </div>
      </div>

      <div class="container_box mt-3">
        <h5> <i class="fa-solid fa-circle-info"></i> এজেন্ট কয় প্রকার ?</h5>
        <div class="home_agent_number">
           <p> <a href="super_agent.php"><span> অনলাইন সুপার এজেন্ট লিস্টঃ</span></a>
             সুপার এজেন্ট যারা আছেন তারা শুধু এজেন্ট একাউন্ট খুলে দিতে পারেন। কোন সুপার এজেন্ট এর নামে অভিযোগ থাকলে –
              সরাসরি এডমিন কে জানাতে হবে। উপরে মেনু তে এডমিন লিষ্ট দেয়া আছে।
           </p>
           <p> <a href="master_agent.php"><span> অনলাইন মাষ্টার এজেন্ট লিস্টঃ</span></a>
            অনলাইন মাষ্টার এজেন্ট যারা আছেন তারা শুধু ইউজার একাউন্ট খুলে দিতে পারেন। কোন মাষ্টার এজেন্ট এর নামে অভিযোগ 
            থাকলে – সরাসরি সুপার এজেন্ট এর কাছে অভিযোগ করতে হবে। মাষ্টার এজেন্ট এর নামের পাশে কমপ্লেন বাটনে
             ক্লিক করলে উক্ত এজেন্ট এর যে সুপার এজেন্ট তাকে পাবেন তার কাছে ওই এজেন্ট এর বিষয় সকল কমপ্লেন করতে পারবেন।
          </p>
          <p> <a href="customer_agent.php"><span> লোকাল এজেন্ট লিস্টঃ </span></a>
            লোকাল এজেন্টরা শুধু ইউজার একাউন্ট খুলে দিতে পারেন। কিন্তু তাদের সাথে প্রতিটি লেনদেন ইউজারকে নিজ দায়িত্বে করতে হবে। তাদের নামে কোন অভিযোগ কারো কাছে করা যাবে না। লোকাল এজেন্ট সাধারণত– নিজের এলাকায় বা পরিচিতদের সাথে লেনদেন করে । যারা আগে বাজি ধরিয়ে দিত,তাদের কেই মূলত লোকাল এজেন্ট দেয়া হয়েছে। লোকাল এজেন্ট অনলাইনে আসে না এবং তারা তাদের পরিচয় গোপন রাখতে চায়। লোকাল এজেন্ট এর
             সাথে অনলাইন এর কোন ইউজার কোন ভাবেই লেনদেন করবেন না,আর করে থাকলে তার দায়ভার পুরোটাই আপনার।
          </p>
          
           </div>
      </div>

      <div class="container_box mt-3">
        <h5> <i class="fa-solid fa-circle-info"></i> এজেন্ট হওয়ার নিয়ম এবং শর্ত সমূহঃ</h5>
        <div class="home_agent_number">
           <ul class="mt-2">
               <li><i class="fa-solid fa-star"></i> এডমিন শুধু মাত্র সুপার এজেন্ট দিতে পারে।</li>
               <li><i class="fa-solid fa-star"></i> মাষ্টার এজেন্ট শুধু মাত্র সুপার এজেন্ট যারা আছেন তারা দিতে পারে।</li>
           </ul>
           <p>সুপার এজেন্ট নিতে এডমিন এর সাথে যোগাযোগ করুন 
            এবং অনলাইন এজেন্ট - লোকাল এজেন্ট নিতে সুপার এজেন্ট এর সাথে যোগাযোগ করুন</p>
       
           </div>
      </div>
      <div class="container_box mt-3">
        <h5> <i class="fa-solid fa-circle-info"></i> শর্ত সমূহঃ</h5>
        <div class="home_agent_number">
        
           <ul class="mt-2">
           <?php foreach($rules_mysqli_query as $rules_value):?>
            <li>🎯** <?=html_entity_decode($rules_value['rules'])?></li>
            <?php endforeach;?>
           </ul>
           <div class="border_red">
            <p>একটা বিষয় অবগত করা দরকার। এজেন্ট এর যদি নিজে খেলার অভ্যাস থাকে তাহলে – এজেন্ট হওয়া থেকে বিরত থাকুন। এজেন্ট যদি কখনো নিজে খেলতে গিয়ে ধরা পরেন – তাহলে এজেন্ট একাউন্ট ঐ অবস্থায় সঙ্গে সঙ্গে ব্লক হয়ে যাবে এবং সমস্ত লেনদেন বন্ধ হয়ে যাবে। যদি এজেন্ট নিজে কোন আইডি তে বাজি ধরিয়ে দিতে চান – তাহলে আপনার সুপার এজেন্ট কে আগেই সেই আইডির বিষয়ে জানাতে হবে।</p>
           </div>
           </div>
      </div>

      <div class="container_box mt-3">
        <h5> <i class="fa-solid fa-circle-info"></i> আমাদের লিংক সমুহ</h5>
        <div class="home_agent_number">
           <ul class="mt-2">
            <li>ইউজার লিংকঃ <a href="www.7wicket.live">7wicket.Live</a></li>
            <li>এজেন্ট লিংকঃ <a href="ag.7wicket.live">ag.7wicket.live</a></li>
           </ul>
       
           </div>
      </div>

      <div class="container_box mt-3">
        <h5> <i class="fa-solid fa-circle-info"></i> সোশাল মিডিয়াঃ</h5>
        <div class="home_agent_number">
           <p>আমাদের সম্পর্কে জানতে জয়েন হতে পারেন আমাদের ফেসবুক গ্রুপ এ । অথবা আমাদের সম্পর্কে আরো নিত্য নতুন আপডেট পেতে জয়েন হতে পারেন আমাদের ফেসবুক পেইজে</p>
           <ul class="mt-2">
            <li> ফেসবুক গ্রুপ লিংকঃ <a href="https://www.facebook.com/groups/7wickets/">7wicket.Live</a></li>
            <li> ফেসবুক পেইজ লিংকঃ<a href="https://www.facebook.com/groups/7wickets/">www.msa.baaji365.live</a></li>
           </ul>
       
           </div>
      </div>

    </section>
    <!-- home section start -->


<?php require_once './back_end/includes/index_footer.php' ?>

