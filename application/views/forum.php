<?php include 'header.php' ?>

<?php foreach ($cats as $Data1) {?>
    <h3><?php echo $Data1->cat_title;?></h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Categories</th>
            <th scope="col">Topics</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($subcats as $Data2) {
            if ($Data1->cat_id == $Data2->parent_id) {?>

                <tr>
                    <td><a href="<?php echo base_url('index.php/Forum/display_topics')?><?php echo "?cid=$Data1->cat_id"?><?php echo "&scid=$Data2->subcat_id"?>"><?php echo $Data2->subcat_title;?>
                            <br>
                    <?php echo $Data2->subcat_description;?></a></td>
                    <td><a href="<?php echo base_url('index.php/Forum/display_topics')?><?php echo "?cid=$Data1->cat_id"?><?php echo "&scid=$Data2->subcat_id"?>"><?php echo 0;?></a></td>

                </tr>

            <?php }?>
        <?php }?>
        </tbody>
    </table>
    <br>
<?php }?>

<?php include 'footer.php' ?>
