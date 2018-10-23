<?php $page = 'news_articles'; include 'header.php' ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home'); ?>"> Home </a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/news_and_articles') ?>"> News & Articles </a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/News_Articles/articles') ?>"> Articles </a></li>
            <li class="breadcrumb-item active" aria-current="page"> <?php echo substr($article['title'], 0, 50) . "..."; ?></li>
        </ol>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3 text-center">Articles</h1>
        </div>
    </div>

    <div class="container">

        <h3 class="my-4 text-center"> <?php echo $article['title']; ?> </h3>

        <div class="text-center">
            <img class="img-fluid mb-3 mb-md-0" src="<?php echo $article['image'] ?>" alt="Image not found">
        </div>

        <br>

        <div>
            <p> <?php echo $article['details']; ?> </p>
        </div>

        <small class="author"><strong style="color: red;"> Published by </strong><p style="color: black;"><?php echo $article['username']." | ".$article['timeStamp']; ?></p></small>


    </div>

<?php include 'footer.php' ?>