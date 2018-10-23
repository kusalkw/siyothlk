<?php $page = 'news_articles'; include 'header.php' ?>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home'); ?>"> Home </a></li>
            <li class="breadcrumb-item active" aria-current="page"> News & Articles </li>
        </ol>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3 text-center">News & Articles</h1>
        </div>
    </div>

    <!-- News Section -->

    <div class="container">

        <h1 class="my-4"> News </h1>

        <?php

        if(!empty($news)) {

            foreach ($news as $new) {

                echo '<div class="row">';
                echo '<div class="col-md-5">';
                echo '<a href="#">';
                echo '<img class="img-fluid rounded mb-3 mb-md-0" src="'.$new->image.'" alt="image not found">';
                echo '</a>';
                echo '</div>';
                echo '<div class="col-md-7">';
                echo '<h3>';
                echo $new->title;
                echo '</h3>';
                echo '<small>';
                echo "<p style=\"color: red; \"> by $new->username </p>";
                echo $new->timeStamp;
                echo '</small>';
                echo '<br><br>';
                echo "<a class=\"btn btn-primary\" href=\"";
                echo base_url('index.php/News_Articles/view_full_news');
                echo "?id=$new->id\"";
                echo "> Read More </a>";
                echo '</div>';
                echo '</div>';
                echo '<br><br><br>';

            }

        }

        ?>

        <div class="text-center">
            <a class="btn btn-outline-danger" href="<?php echo base_url('index.php/News_Articles/news')?>">Go to News</a>
        </div>

    </div>

    <br><hr><br>

    <!-- Article Section -->

    <div class="container">

        <h1 class="my-4"> Articles </h1>

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

        <div class="text-center">
            <a class="btn btn-outline-danger" href="<?php echo base_url('index.php/News_Articles/articles')?>">Go to Articles</a>
        </div>

    </div>



<?php include 'footer.php' ?>
