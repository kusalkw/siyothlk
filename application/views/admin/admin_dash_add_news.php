<?php $panel = 'news'; include 'admin_dashboard_frame.php'; ?>

    <div class="container">

        <h4 class="my-4"> Add Your News </h4>

        <span style="color: red"><?php echo validation_errors(); ?></span>
        <span style="color: red"><?php echo $error; ?></span>

        <?php echo form_open_multipart('Admin/add_new_news'); ?>

        <div class="form-group">
            <label> Title </label>
            <input type="text" class="form-control" placeholder="Enter the title of the news" value="<?php echo set_value('title'); ?>" name="title">
        </div>

        <div class="form-group">
            <label> Content </label>
            <textarea class="form-control" rows="10" placeholder="Enter the content" name="content" id="editor"><?php echo set_value('content'); ?></textarea>

            <script>
                CKEDITOR.replace( 'editor' );
            </script>



        </div>

        <div class="form-group">
            <label> Upload an Image </label><br>
            <input type="file" class="" name="userfile">
        </div>

        <div class="text-center">
            <button onclick="history.back();" type="button" class="btn btn-outline-primary btn-sm"> Back </button> <button type="submit" class="btn btn-sm btn-primary"> Submit </button>
        </div>

        <?php echo form_close(); ?>

    </div>

<?php include 'admin_dashboard_foot.php'; ?>
