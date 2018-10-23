<?php $page = 'news_articles'; include 'header.php' ?>

    <?php
    if(!$this->session->userdata('username')) {
        redirect('Home/login');
    }
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home'); ?>"> Home </a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/news_and_articles') ?>"> News & Articles </a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/News_Articles/articles') ?>"> Articles </a></li>
            <li class="breadcrumb-item active" aria-current="page"> Add New Article </li>
        </ol>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3 text-center">News & Articles</h1>
        </div>
    </div>

    <div class="container">

        <h1 class="my-4"> Add Your Article </h1>

        <span style="color: red"><?php echo validation_errors(); ?></span>
        <span style="color: red"><?php echo $error; ?></span>

        <?php echo form_open_multipart('News_Articles/add_new_article'); ?>

        <div class="form-group">
            <label> Title </label>
            <input type="text" class="form-control" placeholder="Enter title of the article" value="<?php echo set_value('title'); ?>" name="title">
        </div>

        <div class="form-group">
            <label> Article Content </label>
            <textarea class="form-control" rows="10" placeholder="Enter article content" name="content"><?php echo set_value('content'); ?></textarea>
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