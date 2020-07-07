<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-8 mb-3 bg-info text-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Admin Profile</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="<?= base_url() . 'login/logout'; ?>">Logout</a>
        <a class="p-2 text-white" href="<?= base_url() . 'upload_controller'; ?>">Upload</a>
        <a class="p-2 text-white" href="<?= base_url() . 'uploadedcont'; ?>">UploadedFiles</a>
    </nav>
</div>

<div class="container">
<h3>Congragulation You Have Successfuly Uploaded</h3>
<ul>
    <?php foreach ($upload_data as $item => $value):?>
    <li><?php echo $item;?>: <?php echo $value;?></li>
    <?php endforeach; ?>
</ul>

</div>

