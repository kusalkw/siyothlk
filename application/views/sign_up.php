<?php include 'header.php' ?>

    <div class="container w-50 p-2">
        <h3 class="text-center m-2"> Sign Up  </h3>
        <hr>

        <?php echo validation_errors(); ?>
        <?php echo form_open("sign_up/user_sign_up"); ?>

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter username" name="username">
            </div>

            <div class="form-group">
                <label> E-Mail </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
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