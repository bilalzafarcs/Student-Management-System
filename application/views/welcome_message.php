

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
  <div class="image-container text-center" style="padding-bottom:50px">

            <?php if ($this->session->userdata('photo')) { ?>
              <img src="<?php echo base_url(); ?>uploads/<?= $this->session->userdata('photo') ?>" id="imgProfile" style="width:130px" class="img-thumbnail rounded-circle">
            <?php } else { ?>
              <img src="<?php echo base_url(); ?>uploads/images.png" id="imgProfile" class="img-thumbnail rounded-circle" alt="" style="width:130px">
            <?php } ?>

            <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold; color:white!important"><?php echo ucfirst($this->session->userdata('name')); ?></h2>


          </div>
  
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
            <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a>
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
<div class="row">
<div class="col-12">
  <div class="card">

    <div class="card-body">
      <div class="card-title mb-4">
        <div class="d-flex justify-content-start">
          <div class="image-container">

            <?php if ($this->session->userdata('photo')) { ?>
              <img src="<?php echo base_url(); ?>uploads/<?= $this->session->userdata('photo') ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail">
            <?php } else { ?>
              <img src="<?php echo base_url(); ?>uploads/images.png" id="imgProfile" class="img-thumbnail" alt="" style="width: 150px; height: 150px">
            <?php } ?>

          </div>
        

        </div>
      </div>

      <div class="row">
        <div class="col-12">

          <div class="tab-content ml-1">

            <div class="row">
              <div class="col-sm-3 col-md-2 col-5">
                <label style="font-weight:bold;">Full Name</label>
              </div>
              <div class="col-md-8 col-6">
                <?php echo ucfirst($this->session->userdata('name')); ?>
              </div>
            </div>
            <hr />

            <div class="row">
              <div class="col-sm-3 col-md-2 col-5">
                <label style="font-weight:bold;">Email</label>
              </div>
              <div class="col-md-8 col-6">
                <?php echo $this->session->userdata('email'); ?>
              </div>
            </div>
            <hr />


            <div class="row">
              <div class="col-sm-3 col-md-2 col-5">
                <label style="font-weight:bold;">Gender</label>
              </div>
              <div class="col-md-8 col-6">
                <?php echo $this->session->userdata('gender'); ?>
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-3 col-md-2 col-5">
                <label style="font-weight:bold;">Contact Number</label>
              </div>
              <div class="col-md-8 col-6">
                <?php echo $this->session->userdata('contactnumber'); ?>
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-3 col-md-2 col-5">
                <label style="font-weight:bold;">CNIC Number</label>
              </div>
              <div class="col-md-8 col-6">
                <?php echo $this->session->userdata('cnic'); ?>
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-3 col-md-2 col-5">
                <label style="font-weight:bold;">Created At</label>
              </div>
              <div class="col-md-8 col-6">
                <?php echo $this->session->userdata('date_time'); ?>
              </div>
            </div>
            <hr />
            <a class="btn btn-danger" href="<?= base_url() . 'login/logout'; ?>">Logout</a>
       
          </div>

        </div>
      </div>
    </div>


  </div>

</div>
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