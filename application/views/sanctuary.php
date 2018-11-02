<?php include 'header.php' ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="my-4">Sanctuaries</h1>

        <!-- Sanctuary One -->
        <?php foreach ($sanctuaries as $sanctuary) {?>
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url($sanctuary->image);?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo $sanctuary->name;?></h3><small><?php echo $sanctuary->zone;?></small>
                <p><?php echo $sanctuary->details;?></p>
                <a class="btn btn-primary" href="<?php echo base_url('index.php/Sanctuary/viewFullSanctuaries')?><?php echo "?id=$sanctuary->id"?>">View More</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
    <?php }?>
    </div>
    <!-- /.container -->
<?php include 'footer.php'?>