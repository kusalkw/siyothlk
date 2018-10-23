<?php $page = 'login'; include 'header.php' ?>

    <div class="container w-50 p-2">
        <h3 class="text-center m-2"> Sign Up  </h3>
        <hr>

        <span style="color: red"><?php echo validation_errors(); ?></span>
        <?php echo form_open("sign_up/user_sign_up"); ?>

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter username" value="<?php echo set_value('username'); ?>" name="username">
            </div>

            <div class="form-group">
                <label> E-Mail </label>
                <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo set_value('email'); ?>" name="email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password">
            </div>

            <div class="form-group">
                <label> Re-enter Password</label>
                <input type="password" class="form-control" placeholder="Enter Password Again" name="password_again">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary"> Submit </button>
            </div>

        <?php echo form_close(); ?>
    </div>

<?php include 'footer.php' ?>