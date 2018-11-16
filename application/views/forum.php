<?php include 'header.php' ?>

<?php foreach ($cats as $Data1) {?>
    <h3><?php echo $Data1->cat_title;?></h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Categories</th>
            <th scope="col">Description</th>
            <th scope="col">Topics</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($subcats as $Data2) {
            if ($Data1->cat_id == $Data2->parent_id) {?>



                <tr>
                    <td><?php echo $Data2->subcat_title;?></td>
                    <td><?php echo $Data2->subcat_description;?></td>
                    <td>0</td>
                </tr>
            <?php }?>
        <?php }?>
        </tbody>
    </table>
    <br>
<?php }?>

<?php include 'footer.php' ?>
