<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-8 footer-list-29 footer-1">
            <h6 class="footer-title-29">Contact Us</h6>
            <ul>
              <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <li>
                <span class="fa fa-map-marker"></span> <p><?php  echo $row['PageDescription'];?>.</p>
              </li>
              <li><span class="fa fa-phone"></span><a href="tel:+7-800-999-800"> +<?php  echo $row['MobileNumber'];?></a></li>
              <li><span class="fa fa-envelope-open-o"></span><a href="mailto:parlour@mail.com" class="mail">
                  <?php  echo $row['Email'];?></a></li><?php } ?>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-4 footer-list-29 footer-2 ">
  
            <ul>
              <h6 class="footer-title-29">Useful Links</h6>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php"> Services</a></li>
              <li><a href="contact.php">Contact us</a></li>
            </ul>
          </div>
         
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4">
            <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
            <h6 class="footer-title-29"><?php  echo $row['PageTitle'];?> </h6>
            <p><?php  echo $row['PageDescription'];?></p><?php } ?>
  
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-footer-29-main w3l-copyright">
    <div class="container">
      <div class="row bottom-copies">
        <p class="col-lg-8 copy-footer-29">© 2022  Shaurozz </p>
  
        <div class="col-lg-4 main-social-footer-29">
          <a href="https://www.facebook.com/Shaurozzsalon" class="facebook"><span class="fa fa-facebook"></span></a>
          <a href="#https://api.whatsapp.com/send/?phone=918070228999&text=Hi%2C+I+am+interested+in+your+salon+services.&type=phone_number&app_absent=0" class="whatsapp"><span class="fa fa-whatsapp"></span></a>
          <a href="https://www.instagram.com/shaurozz_salon/" class="instagram"><span class="fa fa-instagram"></span></a>
          <a href="https://www.youtube.com/channel/UCQchBa-eBuFTMMP9TBh9epA" class="youtube"><span class="fa fa-youtube"></span></a>
        </div>
  
      </div>
    </div>
  </section>