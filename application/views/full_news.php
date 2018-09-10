<?php include 'header.php' ?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3 text-center">News</h1>
        </div>
    </div>

    <div class="container">

        <h3 class="my-4 text-center"> <?php echo $news['title']; ?> </h3>

        <div class="text-center">
            <img class="img-fluid mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
        </div>

        <br>

        <div>
            <p> <?php echo $news['details']; ?> </p>
        </div>

        <small class="author"><strong style="color: red;"> Published by </strong><p style="color: black;"><?php echo $news['username']." | ".$news['timeStamp']; ?></p></small>


    </div>

<?php include 'footer.php' ?>