<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-8 mb-3 bg-info text-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Admin Profile</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="<?= base_url() . 'login/logout'; ?>">Logout</a>
        <a class="p-2 text-white" href="<?= base_url() . 'upload_controller'; ?>">Upload</a>
        <a class="p-2 text-white" href="<?= base_url() . 'uploadedcont'; ?>">UploadedFiles</a>
    </nav>
</div>

<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-8">
                        <div class="d-flex justify-content-start">
                            <div class="image-container">
                                <?php if ($this->session->userdata('photo')) { ?>
                                    <img src="<?php echo base_url(); ?>uploads/<?= $this->session->userdata('photo') ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail">
                                <?php } else { ?>
                                    <img src="<?php echo base_url(); ?>uploads/images.png" id="imgProfile" class="img-thumbnail" alt="" style="width: 150px; height: 150px">
                                <?php } ?>
                            </div>
                            <div class="userData ml-3">
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">Welcome Back <?php echo ucfirst($this->session->userdata('name')); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs mb-8" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Your Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Registered Users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="connectedServices-tab2" data-toggle="tab" href="#connectedServices2" role="tab" aria-controls="connectedServices2" aria-selected="false">Pending Users</a>
                                </li>
                            </ul>
                            <div class="tab-content ml-1" id="myTabContent">
                                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">


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


                                <div class="tab-pane fade" id="connectedServices2" role="tabpanel" aria-labelledby="ConnectedServices-tab2">
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
                            </div>


                                <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
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
                                            if ($users){
                                                $count = 0;
                                                foreach ($users->result() as $row) {
                                            ?>

                                                    <tr>
                                                        <td><?= ++$count; ?></td>
                                                        <td><?php echo $row->name; ?></td>
                                                        <td><?php echo $row->email; ?></td>
                                                        <td><?php echo $row->date_time; ?></td>
                                                        <td colspan="2">
                                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myview<?php echo $row->user_id; ?> " >
                                                                View
                                                            </button>
                                                           
                                                            <a class="btn btn-danger btn-sm" href="<?php echo site_url("welcome/delete/" . $row->user_id); ?>" onclick="return confirm('Doy want to Delete?');">Delete</a></td>
                                                          
                                                        <div class="modal fade" id="myview<?php echo $row->user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">>
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
                                                                        <h6 class="text-info">Name</h6><?= $row->name; ?>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="col-sm-8">
                                                                            <h6 class="text-info">Email</h6><?= $row->email; ?>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="col-sm-8">
                                                                            <h6 class="text-info">Gender</h6><?= $row->gender; ?>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="col-sm-8">
                                                                            <h6 class="text-info">Contact</h6><?= $row->contactnumber; ?>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="col-sm-8">
                                                                            <h6 class="text-info">CNIC</h6><?= $row->cnic; ?>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="col-sm-8">
                                                                            <h6 class="text-info">Profile Photo</h6>
                                                                            <div class="image-container">
                                                                                <?php if ($row->photo) { ?>
                                                                                    <img src="<?php echo base_url(); ?>uploads/<?= $row->photo; ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail">
                                                                                <?php } else { ?>
                                                                                    <img src="<?php echo base_url(); ?>uploads/images.png" id="imgProfile" class="img-thumbnail" alt="" style="width: 150px; height: 150px">
                                                                                <?php } ?>
                                                                            </div>
                                                                        </div>
                                                                    <?php }
                                                                    ?>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>