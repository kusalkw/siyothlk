<?php $page = 'events'; include 'header.php' ?>

    <?php
    if(!$this->session->userdata('username')) {
        redirect('Home/login');
    }
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home'); ?>"> Home </a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/events') ?>"> Events </a></li>
            <li class="breadcrumb-item active" aria-current="page"> Add New Event </li>
        </ol>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3 text-center"> Events </h1>
        </div>
    </div>

    <div class="container">

        <h1 class="my-4"> Add Your Event </h1>

        <span style="color: red"><?php echo validation_errors(); ?></span>
        <span style="color: red"><?php echo $error; ?></span>

        <?php echo form_open_multipart('Events/add_new_event'); ?>

        <div class="form-group">
            <label> Title </label>
            <input type="text" class="form-control" placeholder="Enter title for your event" value="<?php echo set_value('title'); ?>" name="title">
        </div>

        <div class="form-group">
            <label> Article Content </label>
            <textarea class="form-control" rows="10" placeholder="Enter details" name="content"><?php echo set_value('content'); ?></textarea>
        </div>

        <div class="form-group">
            <label> Upload an Image </label><br>
            <input type="file" class="" name="userfile">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary"> Submit </button>
        </div>

        <?php echo form_close(); ?>

    </div>

<?php include 'footer.php' ?>