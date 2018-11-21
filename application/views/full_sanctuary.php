<!DOCTYPE html>
<html >
<head>
    <!-- Site made with Mobirise Website Builder v4.8.6, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.6, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url('asset/images/logo_white.jpg') ?>" type="image/x-icon">
    <meta name="description" content="">
    <title>Siyoth.lk</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/sanctuary/assets/web/assets/mobirise-icons/mobirise-icons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/sanctuary/assets/tether/tether.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/sanctuary/assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/sanctuary/assets/bootstrap/css/bootstrap-grid.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/sanctuary/assets/bootstrap/css/bootstrap-reboot.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/sanctuary/assets/theme/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/sanctuary/assets/mobirise/css/mbr-additional.css') ?>" type="text/css">

    <style>
        .mymap {
            margin-left: 10%;
            margin-right: 10%;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url('index.php/home'); ?>">
        <img src="<?php echo base_url() ?>asset/images/logo_white.jpg" width="30" height="30" class="rounded-circle" alt="image">
        Siyoth.lk
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/home'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/home/bird_wiki') ?>">Bird WiKi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/home/news_and_articles') ?>">News & Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Forum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/home/events') ?>">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/home/sanctuary') ?>">Sanctuaries</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Maps
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Pic Map</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Distribution Maps</a>
                    <a class="dropdown-item" href="#">Sanctuary Maps</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <ul class="navbar-nav navbar-right mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/home/login") ?>">
                    <?php
                    if($this->session->userdata('username')==false) {
                        echo "Login";
                    }
                    ?>
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <?php
            if($this->session->userdata('username')) {
                echo "<li class=\"nav-item dropdown\">";
                echo "<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n";
                echo $this->session->userdata('username');
                echo "</a>\n";
                echo "<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
                echo "<a class=\"dropdown-item\" href=\"#\">Profile</a>\n";
                echo "<a class=\"dropdown-item\" href=\"" . base_url('index.php/login/user_logout');
                echo "\">Logout</a>\n";
                echo " </div>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
</nav>
<section class="cid-r8f6A8wYZe mbr-fullscreen mbr-parallax-background" id="header2-f">





    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    <?php echo $sanctuaries['name'] ?>
                </h1>

                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    <?php echo $sanctuaries['details'] ?>
                </p>

            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="engine"><a href="https://mobirise.info/k">develop your own website</a></section><section class="mbr-section article content9 cid-r8f7Kl3ErJ" id="content9-k">



    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-5">
                <?php echo $sanctuaries['details'] ?>
            </div>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="carousel slide cid-r8f7O1pJDN" data-interval="false" id="slider2-l">


    <div class="container content-slider">
        <div class="content-slider-wrap">
            <div><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="2000"><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php echo base_url('asset/sanctuary/assets/images/mbr-1920x1278.jpg')?>);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.1;"></div><img src="<?php echo base_url('asset/sanctuary/assets/images/mbr-1920x1278.jpg')?>"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php echo base_url('asset/sanctuary/assets/images/mbr-1920x1280.jpg')?>);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.1;"></div><img src="<?php echo base_url('asset/sanctuary/assets/images/mbr-1920x1280.jpg')?>"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php echo base_url('asset/sanctuary/assets/images/mbr-1920x1080.jpg')?>);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.1;"></div><img src="<?php echo base_url('asset/sanctuary/assets/images/mbr-1920x1080.jpg')?>"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php echo base_url('asset/sanctuary/assets/images/mbr-1-1920x1281.jpg')?>);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.1;"></div><img src="<?php echo base_url('asset/sanctuary/assets/images/mbr-1-1920x1281.jpg')?>"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php echo base_url('asset/sanctuary/assets/images/mbr-1920x1279.jpg')?>);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.1;"></div><img src="<?php echo base_url('asset/sanctuary/assets/images/mbr-1920x1279.jpg')?>"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(<?php echo base_url('asset/sanctuary/assets/images/mbr-1-1920x1280.jpg')?>);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay" style="opacity: 0.1;"></div><img src="<?php echo base_url('asset/sanctuary/assets/images/mbr-1-1920x1280.jpg')?>"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider2-l"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider2-l"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-r8fbOq7sAX" id="content2-m">



    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7">
                <blockquote><?php echo $sanctuaries['bird_details'] ?></blockquote>
            </div>
        </div>
    </div>
</section>
<section>
    <iframe class="mymap" src="<?php echo $sanctuaries['map_link'] ?>" width="80%" height="700"></iframe>
</section>
<br><br>


<script src="<?php echo base_url('asset/sanctuary/assets/web/assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('asset/sanctuary/assets/popper/popper.min.js') ?>"></script>
<script src="<?php echo base_url('asset/sanctuary/assets/tether/tether.min.js') ?>"></script>
<script src="<?php echo base_url('asset/sanctuary/assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('asset/sanctuary/assets/smoothscroll/smooth-scroll.js') ?>"></script>
<script src="<?php echo base_url('asset/sanctuary/assets/ytplayer/jquery.mb.ytplayer.min.js') ?>"></script>
<script src="<?php echo base_url('asset/sanctuary/assets/vimeoplayer/jquery.mb.vimeo_player.js') ?>"></script>
<script src="<?php echo base_url('asset/sanctuary/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js') ?>"></script>
<script src="<?php echo base_url('asset/sanctuary/assets/parallax/jarallax.min.js') ?>"></script>
<script src="<?php echo base_url('asset/sanctuary/assets/theme/js/script.js') ?>"></script>
<script src="<?php echo base_url('asset/sanctuary/assets/slidervideo/script.js') ?>"></script>

<footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="<?php echo base_url() ?>"> Siyoth.lk</a>
    </div>
</footer>


</body>
</html>