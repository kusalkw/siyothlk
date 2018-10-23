<?php $page = 'news_articles'; include 'header.php' ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home'); ?>"> Home </a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/news_and_articles') ?>"> News & Articles </a></li>
            <li class="breadcrumb-item active" aria-current="page"> Articles </li>
        </ol>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3 text-center">Articles</h1>
        </div>
    </div>

    <?php
        if($this->session->flashdata('msg')) {
            echo $this->session->flashdata('msg');
        }
    ?>

    <div class="container">

        <h1 class="my-4"> Articles </h1>

        <div class="text-right">
            <a href="<?php echo base_url('index.php/News_Articles/add_article')?>" class="btn btn-danger"><i class="fas fa-plus-circle"></i> ADD NEW ARTICLE </a>
        </div>

        <br>
        <br>

        <?php

        if(!empty($articles)) {

            foreach ($articles as $article) {

                echo '<div class="row">';
                echo '<div class="col-md-5">';
                echo '<a href="#">';
                echo '<img class="img-fluid rounded mb-3 mb-md-0" src="'.$article->image.'" alt="image not found">';
                echo '</a>';
                echo '</div>';
                echo '<div class="col-md-7">';
                echo '<h3>';
                echo $article->title;
                echo '</h3>';
                echo '<small>';
                echo "<p style=\"color: red; \"> by $article->username </p>";
                echo $article->timeStamp;
                echo '</small>';
                echo '<br><br>';
                echo "<a class=\"btn btn-primary\" href=\"";
                echo base_url('index.php/News_Articles/view_full_article');
                echo "?id=$article->id\"";
                echo "> Read More </a>";
                echo '</div>';
                echo '</div>';
                echo '<br><br><br>';

            }

        }

        ?>

        <hr>

    </div>



<?php include 'footer.php' ?>