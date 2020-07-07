<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-info text-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Codeigniter</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-white" href="<?php echo base_url(); ?>">Login</a>
    </nav>
 </div>
 
<main class="login-form">
  <div class="cotainer">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Register Form</div>
          <div class="card-body">
            <?php echo form_open_multipart('register/doRegister'); ?>
            <?php if ($this->session->flashdata()) { ?>
              <div class="alert alert-danger">
                <?= $this->session->flashdata('errors'); ?>
              </div>
            <?php } ?>
            <div class="form-group row">
              <label for="email_address" class="col-md-4 col-form-label text-md-right">Name</label>
              <div class="col-md-6">
                <input type="text" id="name" class="form-control" name="name" required autofocus>
              </div>
            </div>

            <div class="form-group row">
              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
              <div class="col-md-6">
                <input type="text" id="email" class="form-control" name="email" required autofocus>
                <input type="hidden" id="level" class="form-control" name="level">
              </div>
            </div>

            <div class="form-group row">
              <label for="email_address" class="col-md-4 col-form-label text-md-right">Photo</label>
              <div class="col-md-6">
                <input type="file" id="photo" class="form-control" name="photo">
              </div>
            </div>

            <div class="form-group row">
              <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
              <div class="form-check">
                <label class="form-check-label " for="radio1">
                  <input type="radio" class="form-check-input" name="gender" , value="Male" , id="gender"  required autofocus>Male
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label" for="radio2">
                  <input type="radio" class="form-check-input" name="gender" , value="Female" , id="gender" >Female
                </label>
              </div>
            </div>

            <div class="form-group row">
              <label for="contact" class="col-md-4 col-form-label text-md-right">Contact Number</label>
              <div class="col-md-6">
                <input type="text" id="contactnumber" class="form-control" name="contactnumber" required autofocus>
              </div>
            </div>

            <div class="form-group row">
              <label for="contact" class="col-md-4 col-form-label text-md-right">CNIC Number</label>
              <div class="col-md-6">
                <input type="text" id="cnic" class="form-control" name="cnic" required autofocus>
              </div>
            </div>


            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
              <div class="col-md-6">
                <input type="password" id="pwd" class="form-control" name="password" required>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>


          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
  </div>

</main>


