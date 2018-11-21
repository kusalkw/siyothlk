<?php include "header.php"?>
<br>
<br>
<div class="row mt-500">

<div class="container col-md-7" style="-ms-high-contrast-adjust: auto">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url("gallery_images/comman_Myna.jpg");?>" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Comman Myna</h5>
                    <p>Bird category 01</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url("gallery_images/p_roseus_d1_close_vankalai_8alr02_17.jpg");?>" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Intermediate egrete</h5>
                    <p>Bird category 02</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url("gallery_images/Photography-Tours-Lanka1.jpg");?>" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>King fisher</h5>
                    <p>Bird category 03</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>
<br>
<br>

<?php
    if(!empty($photos)) {
        $i=1;
        echo '<div class="container">';
        foreach ($photos as $photo) {

            switch ($i){
                case 1:
                    echo '<div class="row">';

                    echo '<div class="col-md-4 float-md-left">';
                    echo '<div class="img-thumbnail">';
                    ?>

                    <a href="<?php echo base_url('gallery_images/') . $photo->link ?>" download="">
                    <img src="<?php echo base_url('gallery_images/') . $photo->link ?>" height="100%" width="100%" alt="image not found" aria-placeholder="Click to download">
                    <div class="card-img-overlay" style="color: white; font-size: 20px; padding: 20px; text-align: center;"><p><?php echo $photo->name?></p></div>
                    </a>

                    <?php
                    echo '</div>';
                    echo '</div>';

                    $i=2;
                    break;

                case 2:

                    echo '<div class="col-md-4 float-md-none">';
                    echo '<div class="img-thumbnail">';
                    ?>

                    <a href="<?php echo base_url('gallery_images/') . $photo->link ?>" download="">
                    <img src="<?php echo base_url('gallery_images/') . $photo->link ?>" height="100%" width="100%">
                    <div class="card-img-overlay" style="color: white; font-size: 20px; padding: 20px; text-align: center;"><p><?php echo $photo->name?></p></div>
                    </a>

                    <?php
                    echo '</div>';
                    echo '</div>';
                    $i=3;
                    break;

                case 3:


                    echo '<div class="col-md-4 float-md-right">';
                    echo '<div class="img-thumbnail">';
                    ?>

                    <a href="<?php echo base_url('gallery_images/') . $photo->link ?>" download="">
                    <img src="<?php echo base_url('gallery_images/') . $photo->link ?>" height="100%" width="100%">
                    <div class="card-img-overlay" style="color: white; font-size: 20px; padding: 20px; text-align: center;"><p><?php echo $photo->name?></p></div>
                    </a>

                    <?php
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    $i=1;
                    break;
            }





        }

}
?>
<br>
<br>


<?php include 'footer.php'; ?>