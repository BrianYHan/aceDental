
<div class= "navbar-wrapper">
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <!-- Be sure to leave the brand out there if you want it shown -->
  <a href="index.php" class="brand">Ace Dental Lab</a> 
      <!-- Everything you want hidden at 940px or less, place within here -->
       <div id="menuBar">
                  <ul class="nav" role="navigation">
                    <?php
                      $full_name = $_SERVER['PHP_SELF'];
                      $name_array = explode('/',$full_name);
                      $count = count($name_array);
                      $page_name = $name_array[$count-1];
                    ?>
                    <li><a class="<?php echo ($page_name=='about.php')?'active':'';?>" href="about.php">About Ace </a></li>
                    <li><a class="<?php echo ($page_name=='contact_us.php')?'active':'';?>" href="contact_us.php">Contact Us</a></li>
                    <li><a class="<?php echo ($page_name=='downloads.php')?'active':'';?>" href="downloads.php">Coupons</a></li>
                    <li><a class="<?php echo ($page_name=='products.php')?'active':'';?>" href="products.php">Products</a></li>
                    <li><a class="<?php echo ($page_name=='shipping.php')?'active':'';?>" href="shipping.php">Shipping </a></li>
                    <li><a class="<?php echo ($page_name=='terms_policies_15.php')?'active':'';?>" href="terms_policies_15.php">Terms and Policies</a></li>
                    

                    <li class="phoneNumber">
                      <a href="contact_us.php"><i class="icon-phone icon-large"></i> 714-525-3650 </a></li>
                      <li class="emailAddress"><a href="mailto:acedentallabs@gmail.com"> <i class="icon-envelope-alt icon-large"></i> acedentallabs@gmail.com</a>
                    </li>
                  </ul>
            </div>
      </div>
    </div>
  </div>


