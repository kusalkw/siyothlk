<?php $page = 'login'; include 'header.php' ?>

<div class="container w-50 p-2">

    <?php
        if($this->session->flashdata('msg')) {
            echo $this->session->flashdata('msg');
        }
    ?>

    <h3 class="text-center m-2"> Please Login  </h3>
    <hr>

    <span style="color: red"><?php echo validation_errors(); ?></span>
    <?php echo form_open("login/user_login"); ?>

        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Enter Username" name="username">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter Password" name="password">
        </div>

        <div class="text-center">

            <button type="submit" class="btn btn-primary">Log In</button>

            <p class="text-center"> OR </p>

            <a href="<?php echo base_url("index.php/home/sign_up")?>" class="btn btn-success">Sign Up</a>

        </div>

    <?php echo form_close(); ?>

</div>

<?php include 'footer.php' ?>