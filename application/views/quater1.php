

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
  <nav class="navbar navbar-expand-md bg-dark ml-auto"><h3 class="text-center navhead">Welcome to the Student Portal</h3>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" style="background:black">
      <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
         
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() . 'login/logout'; ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logut</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>

<div class="container" style="padding-top:5%">

<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 4;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
foreach ($data->result() as $row){
  if($rowCount % $numOfCols == 0) { ?> <div class="row justify-content-center"> <?php } 
    $rowCount++; ?>  

    
    <div class="card<?php echo $bootstrapColWidth; ?>" style="padding-right:0px">   
    <a href="<?php echo base_url() . 'uploadedcont/download/' . $row->id; ?>" download>
    <img class="card-img-top rounded bookimage" src="<?php echo base_url(); ?>uploads/<?= $row->image; ?>" style="width:150px; height:250px" ><br>
</a>  

   </div>
   
       
      
<?php
    if($rowCount % $numOfCols == 0)
     { 
?> 

 </div>
 <br>  

 <?php 
} 

}  
 ?>



   
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