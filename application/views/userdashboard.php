<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="<?php echo base_url('assets/js/jq.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/font.js'); ?>" type="text/javascript" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/user.css"); ?>" />
</head>

<body>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <div class="image-container text-center" style="padding-bottom:15px">

            <?php if ($this->session->userdata('photo')) { ?>
              <img src="<?php echo base_url(); ?>uploads/<?= $this->session->userdata('photo') ?>" id="imgProfile" style="width:130px" class="img-thumbnail rounded-circle">
            <?php } else { ?>
              <img src="<?php echo base_url(); ?>uploads/images.png" id="imgProfile" class="img-thumbnail rounded-circle" alt="" style="width:130px">
            <?php } ?>
           
          </div> 

          
          <p class="text-center" style="color:white!important; font-size:20px"><?php echo ucfirst($this->session->userdata('name')); ?>
          </p>
          


  
  <a href="<?= base_url() . ''; ?>" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Home</a>
  <hr>
  <a href="<?= base_url() . 'update'; ?>" class="w3-bar-item w3-button"><i class="fa fa-user" aria-hidden="true"></i> Edit Profile</a>
  <hr>
  <div class="accordion" id="accordion2">
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
<i class='fas fa-book-reader' aria-hidden="true" ></i> Course Contents  
</a>
</div>
<div id="collapseOne" class="accordion-body collapse">
<div class="accordion-inner" >
<a class="anc" href="<?= base_url() . 'userdash'; ?>" style="padding-left:22px"><i class="fa fa-circle" aria-hidden="true"></i> Quater1</a><br>
<a class="anc" href="<?= base_url() . 'userdash/quater2'; ?>" style="padding-left:22px"><i class="fa fa-circle" aria-hidden="true"></i> Quater2</a>


</div>
</div>
</div>
  
  
  </div>
  <hr>
  
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
  <nav class="navbar navbar-expand-md bg-dark "><h3 class="text-center navhead">Welcome to the Student Portal</h3>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" style="background:black">
      <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() . 'welcome/userprofile'; ?>"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() . 'login/logout'; ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logut</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>


<div class="container">
<div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="<?php echo base_url(); ?>uploads/logo.jpg"?>
        <p class="lead" style="font-size:16px; color:#DC3C65">For questions, please contact us at the PIAIC helpline: 03077152425 (also available on WhatsApp) between 10 AM - 6 PM.
Please note we are closed on Fridays.</p>
      </div>

      <div class="jumbotron">
          <div class="col-sm-12 mx-auto">
            <h3 class="text-center" style="color:#DC3C65">STAY HOME, STAY SAFE, AND LEARN TO EARN BY DEVELOPING SOFTWARE</h3>
           <p class="text-center" style="color:#DC3C65">Due to (COVID-19) coronavirus pandemic PIAIC has opened online admissions for all Pakistanis and waived the fees of 1st quarter, also there will be no entry test. Just apply in any course according to your city and generate voucher of zero cost for online, you don't need to submit voucher and there is not any further process. After voucher generation wait for 24 to 36 hours and your status will be updated then you can watch online videos at you own time.</p>
             </div>
        </div>
</div>


<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>


</body>

</html>