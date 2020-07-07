<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-info text-white border-bottom box-shadow ">
    <h5 class="my-0 mr-md-auto font-weight-normal">Codeigniter</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="<?= base_url() . 'register'; ?>">Register</a>
    </nav>

</div>


<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login Form</div>
                    <div class="card-body"> <?php echo form_open('login/doLogin'); ?>
                        <?php if ($this->session->flashdata()) { ?>
                            <div class="alert alert-warning">
                                <?= $this->session->flashdata('msg'); ?>
                            </div>
                        <?php } ?>
                        <div class="form-group row">
                            <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="text" id="email" class="form-control" name="email" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input type="password" id="pwd" class="form-control" name="password" required>
                            </div>
                        </div>


                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>
                    </div>
                  
                </div>
        
    </div>
    </div>

</main> 