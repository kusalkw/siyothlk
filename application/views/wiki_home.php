<?php $page = 'bird_wiki'; include 'header.php' ?>

<h4 class = "text-center" id="wiki_header"> ~ Bird's WiKi ~ </h4>

<div class="container text-center">
    <a href="<?php echo base_url("index.php/Wiki/bird_details")?>"><button type="button" class="btn btn-outline-info">Rock Pigeon</button></a>
</div>

<hr>

<div class="">
    <div class="container col-sm-7">
        <div class="well">
            <div class="row">
                <div class="col-md-12">
                    <div class="row hidden-md hidden-lg"><h1 class="mx-auto"> <?php echo $bird_details['comName'] ?> </h1></div>

                    <div class="col-md-4 col-xs-12 thumb-contenido mx-auto"><img class="center-block img-responsive bird_pic" src='https://d1ia71hq4oe7pn.cloudfront.net/photo/66031271-1280px.jpg' /></div>
                    <div class="">
                        <h4 class="hidden-xs hidden-sm text-center"><?php echo $bird_details['sciName'] ?></h4>
                        <p> <?php echo $bird_details['details'] ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center">
    <a href="<?php echo base_url("index.php/Wiki/bird_details_edit")?>"><button type="button" class="btn btn-outline-primary">Edit</button></a>
</div>

<?php include 'footer.php' ?>
