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
            <img src="<?php echo base_url(); ?>uploads/<?= $this->session->userdata('photo') ?>" id="imgProfile"
                style="width:130px" class="img-thumbnail rounded-circle">
            <?php } else { ?>
            <img src="<?php echo base_url(); ?>uploads/images.png" id="imgProfile" class="img-thumbnail rounded-circle"
                alt="" style="width:130px">
            <?php } ?>

        </div>


        <p class="text-center" style="color:white!important; font-size:20px">
            <?php echo ucfirst($this->session->userdata('name')); ?>
        </p>




        <a href="<?= base_url() . 'welcome/admin'; ?>" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Home</a>
        <hr>
        <a href="<?= base_url() . 'update'; ?>" class="w3-bar-item w3-button"><i class="fa fa-user" aria-hidden="true"></i> Edit Profile</a>
        <hr>
        <a href="<?= base_url() . 'upload_controller'; ?>" class="w3-bar-item w3-button"><i class="fa fa-book-reader"
                aria-hidden="true"></i> Upload Contents</a>
        <hr>
        <a href="<?= base_url() . 'uploadedcont'; ?>" class="w3-bar-item w3-button"><i class="fa fa-file"
                aria-hidden="true"></i> Uploaded Contents</a>
        <hr>
        <a href="<?= base_url() . 'welcome/regusers'; ?>" class="w3-bar-item w3-button"><i class="fa fa-user" aria-hidden="true"></i> Registered Users</a>
        <hr>
        <a href="<?= base_url() . 'welcome/pendusers'; ?>" class="w3-bar-item w3-button"><i class="fa fa-user" aria-hidden="true"></i> Pending Users</a>
        <hr>


    </div>

    </div>
    
    </div>

    <div class="w3-main" style="margin-left:200px">
        <div class="w3-teal">
            <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <nav class="navbar navbar-expand-md bg-dark ">
                    <h3 class="text-center navhead">Welcome Back Admin</h3>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
                        aria-label="Toggle navigation" style="background:black">
                        <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav ml-auto">
                          
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() . 'login/logout'; ?>"><i class="fa fa-sign-out"
                                        aria-hidden="true"></i> Logut</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <table class="table table-responsive-md table-striped w-100 d-block d-md-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Created At</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($users2) {
                                                $count = 0;
                                                foreach ($users2->result() as $row2) {
                                            ?>

                                                    <tr>
                                                        <td><?= ++$count; ?></td>
                                                        <td><?php echo $row2->name; ?></td>
                                                        <td><?php echo $row2->email; ?></td>
                                                        <td><?php echo $row2->date_time; ?></td>
                                                        <td colspan="3">
                                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myview<?php echo $row2->user_id; ?>">
                                                                View</i>
                                                            </button>
                                                            <a class="btn btn-danger btn-sm" href="<?php echo site_url("welcome/delete/" . $row2->user_id); ?>" onclick="return confirm('Doy want to Delete?');">Delete</i></a>
                                                            <a class="btn btn-primary btn-sm" href="<?php echo site_url("welcome/updatelevel/" . $row2->user_id); ?>" onclick="return confirm('Doy want to Update?');">Approve</a></td>
                                                          
                                                        </td>
                                                            
                                                        <div class="modal fade" id="myview<?php echo $row2->user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">>
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">User Details</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">


                                                                        <div class="col-sm-8">
                                                                        <h6 class="text-info">Name</h6><?= $row2->name; ?>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="col-sm-8">
                                                                            <h6 class="text-info">Email</h6><?= $row2->email; ?>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="col-sm-8">
                                                                            <h6 class="text-info">Gender</h6><?= $row2->gender; ?>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="col-sm-8">
                                                                            <h6 class="text-info">Contact</h6><?= $row2->contactnumber; ?>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="col-sm-8">
                                                                            <h6 class="text-info">CNIC</h6><?= $row2->cnic; ?>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="col-sm-8">
                                                                            <h6 class="text-info">Profile Photo</h6>
                                                                            <div class="image-container">
                                                                                <?php if ($row2->photo) { ?>
                                                                                    <img src="<?php echo base_url(); ?>uploads/<?= $row2->photo; ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail">
                                                                                <?php } else { ?>
                                                                                    <img src="<?php echo base_url(); ?>uploads/images.png" id="imgProfile" class="img-thumbnail" alt="" style="width: 150px; height: 150px">
                                                                                <?php } ?>
                                                                            </div>
                                                                        </div>
                                                                    <?php }
                                                                    ?>
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </td>
                                                    </tr>
                                        </tbody>
                                    <?php }

                                    ?>
                                    </table>


       
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