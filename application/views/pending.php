
<main role="main" class="container" style="padding-top: 50px;">
      <div class="jumbotron">
        <h1>Hey <?php echo ucfirst($this->session->userdata('name')); ?></h1>
        <p class="lead">Your Id is on pending state. When it is approved by Admin you will access the profile page</p>
        <p class="lead">Thankyou</p>
        <a class="btn btn-lg btn-primary" href="<?= base_url() . 'login/logout'; ?>" role="button">LogOut</a>
      </div>
</main>