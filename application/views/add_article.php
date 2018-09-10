<?php include 'header.php' ?>

    <?php
    if(!$this->session->userdata('username')) {
        redirect('Home/login');
    }
    ?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3 text-center">News & Articles</h1>
        </div>
    </div>

    <div class="container">

        <h1 class="my-4"> Add Your Article </h1>

        <span style="color: red"><?php echo validation_errors(); ?></span>
        <?php echo form_open('News_Articles/add_new_article'); ?>

        <div class="form-group">
            <label> Title </label>
            <input type="text" class="form-control" placeholder="Title of the Article" name="title">
        </div>

        <div class="form-group">
            <label> Article Content </label>
            <textarea class="form-control" rows="10" placeholder="Enter article content" name="content"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary"> Submit </button>
        </div>

        <?php echo form_close(); ?>

    </div>

<?php include 'footer.php' ?>