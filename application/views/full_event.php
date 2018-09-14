<?php include 'header.php' ?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3 text-center">Events</h1>
        </div>
    </div>

    <div class="container">

        <h3 class="my-4 text-center"> <?php echo $event['title']; ?> </h3>

        <div class="text-center">
            <img class="img-fluid mb-3 mb-md-0" src="<?php echo $event['image'] ?>" alt="Image not found">
        </div>

        <br>

        <div>
            <p> <?php echo $event['details']; ?> </p>
        </div>

        <small class="author"><strong style="color: red;"> Published by </strong><p style="color: black;"><?php echo $event['username']." | ".$event['timeStamp']; ?></p></small>


    </div>

<?php include 'footer.php' ?>