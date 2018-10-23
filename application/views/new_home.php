
<?php $page = 'home'; include 'home_header.php' ?>

<section class="engine"><a href="">Siyoth.lk</a></section><section class="cid-qTkA127IK8 mbr-fullscreen mbr-parallax-background" id="header2-1">

    

    <div class="mbr-overlay" style="opacity: 0; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    WELCOME TO SIYOTH.LK</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5"><strong>
                    ~ A COMMUNITY CONSISTS WITH BIRD LOVERS ~</strong></p>
                <div class="mbr-section-btn">
                    <a class="btn btn-md btn-secondary display-4" href="<?php echo base_url('index.php/home/bird_wiki')?>">BIRD WiKi</a>
                    <?php
                        if(!$this->session->userdata('username')) {
                            echo "<a class=\"btn btn-md btn-white-outline display-4\" href = \"<?php echo base_url('index.php/home/sign_up')?>\" > SIGN UP </a ></div >";
                        }
                    ?>
            </div>
        </div>
    </div>
<!--    -->
</section>

<section class="header3 cid-r3DPx6Hjey" id="header3-7">

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 95%;">
                <img src="<?php echo base_url('asset/home/assets/images/kingfisher-881975-640-640x360.jpg')?>" alt="image" title="">
            </div>

            <div class="media-content">

                <div class="mbr-section-text mbr-white pb-3 ">
                    <p class="mbr-text mbr-fonts-style display-5">
                        <br>Get to know about the latest news about World of Birds<br></p>
                </div>
                <div class="mbr-section-btn"><a class="btn btn-md btn-primary-outline display-4" href="<?php echo base_url('index.php/home/news_and_articles')?>">See News &amp; Articles</a></div>
            </div>
        </div>
    </div>

</section>

<section class="header3 cid-r3DSJb9Jho" id="header3-8">

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 95%;">
                <img src="<?php echo base_url('asset/home/assets/images/swan-3466606-640-640x380.jpg')?>" alt="image" title="">
            </div>

            <div class="media-content">
                <div class="mbr-section-text mbr-white pb-3 ">
                    <p class="mbr-text mbr-fonts-style display-5"><br>Find out the events related to birds happening in <br>Sri Lanka</p>
                </div>
                <div class="mbr-section-btn"><a class="btn btn-md btn-white-outline display-4" href="<?php echo base_url('index.php/home/events')?>">See Events</a></div>
            </div>
        </div>
    </div>

</section>

<section class="header3 cid-r3E1cPBCI6" id="header3-a">

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 95%;">
                <img src="<?php echo base_url('asset/home/assets/images/bird-3177717-640-640x404.jpg')?>" alt="image" title="">
            </div>

            <div class="media-content">
                
                
                <div class="mbr-section-text mbr-white pb-3 ">
                    <p class="mbr-text mbr-fonts-style display-5">
                        <br>Get to know about the Bird Sanctuaries in <br>Sri Lanka<br></p>
                </div>
                <div class="mbr-section-btn"><a class="btn btn-md btn-primary-outline display-4" href="">See Sancturies</a></div>
            </div>
        </div>
    </div>

</section>

<section class="header3 cid-r3E1dWasob" id="header3-b">

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 95%;">
                <img src="<?php echo base_url('asset/home/assets/images/sun-2942386-640-640x426.jpg')?>" alt="image" title="">
            </div>

            <div class="media-content">
                
                
                <div class="mbr-section-text mbr-white pb-3 ">
                    <p class="mbr-text mbr-fonts-style display-5"><br>See various Maps related to Birds</p>
                </div>
                <div class="mbr-section-btn"><a class="btn btn-md btn-white-outline display-4" href="">See Maps</a></div>
            </div>
        </div>
    </div>

</section>

<section class="carousel slide cid-r3E2TIwKpa" data-interval="false" id="slider1-e">

    

    <div class="full-screen"><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="3000"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-e" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-e" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-e" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#slider1-e" data-slide-to="3"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(<?php echo base_url('asset/home/assets/images/beautiful-16736-1920-1920x1280.jpg')?>);"><div class="container container-slide"><div class="image_wrapper"><img src="<?php echo base_url('asset/home/assets/images/beautiful-16736-1920-1920x1280.jpg')?>"><div class="carousel-caption justify-content-center"><div class="col-10 align-left"><h2 class="mbr-fonts-style display-1">Visit our Gallery</h2><p class="lead mbr-text mbr-fonts-style display-5">and witness the real beauty of world of birds ...</p><div class="mbr-section-btn" buttons="0"> <a class="btn  btn-white-outline display-4" href="">GO TO GALLERY</a></div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php echo base_url('asset/home/assets/images/mbr-1-1920x1280.jpg')?>);"><div class="container container-slide"><div class="image_wrapper"><img src="<?php echo base_url('asset/home/assets/images/mbr-1-1920x1280.jpg')?>"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php echo base_url('asset/home/assets/images/kingfisher-2046453-1920-1920x1279.jpg')?>);"><div class="container container-slide"><div class="image_wrapper"><img src="<?php echo base_url('asset/home/assets/images/kingfisher-2046453-1920-1920x1279.jpg')?>"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php echo base_url('asset/home/assets/images/bird-3158784-1920-1920x1311.jpg')?>);"><div class="container container-slide"><div class="image_wrapper"><img src="<?php echo base_url('asset/home/assets/images/bird-3158784-1920-1920x1311.jpg')?>"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-e"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-e"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>

</section>

<section class="mbr-section info3 cid-r3DVOWGwrg mbr-parallax-background" id="info3-9">

    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column title col-12 col-md-10">
                <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2">HAVE A QUESTION ?</h2>
                <h3 class="mbr-section-subtitle align-left mbr-light mbr-white pb-3 mbr-fonts-style display-5"><p><strong>
                    </strong><strong>Ask it in our Forum section and get the opinions of the birders and experts in our Siyoth.lk community</strong></p></h3>
                
                <div class="mbr-section-btn align-left py-4"><a class="btn btn-danger display-4" href="">GO TO FORUM</a></div>
            </div>
        </div>
    </div>
</section>

<section once="" class="cid-r3DMvXmut0" id="footer6-5">

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2018 Siyoth.lk - All Rights Reserved
                </p>
            </div>
        </div>
    </div>

</section>

<script src="<?php echo base_url('asset/home/assets/web/assets/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('asset/home/assets/tether/tether.min.js')?>"></script>
<script src="<?php echo base_url('asset/home/assets/popper/popper.min.js')?>"></script>
<script src="<?php echo base_url('asset/home/assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('asset/home/assets/dropdown/js/script.min.js')?>"></script>
<script src="<?php echo base_url('asset/home/assets/touchswipe/jquery.touch-swipe.min.js')?>"></script>
<script src="<?php echo base_url('asset/home/assets/viewportchecker/jquery.viewportchecker.js')?>"></script>
<script src="<?php echo base_url('asset/home/assets/smoothscroll/smooth-scroll.js')?>"></script>
<script src="<?php echo base_url('asset/home/assets/ytplayer/jquery.mb.ytplayer.min.js')?>"></script>
<script src="<?php echo base_url('asset/home/assets/vimeoplayer/jquery.mb.vimeo_player.js')?>"></script>
<script src="<?php echo base_url('asset/home/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js')?>"></script>
<script src="<?php echo base_url('asset/home/assets/parallax/jarallax.min.js')?>"></script>
<script src="<?php echo base_url('asset/home/assets/theme/js/script.js')?>"></script>
<script src="<?php echo base_url('asset/home/assets/slidervideo/script.js')?>"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>