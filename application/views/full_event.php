<?php $page = 'events'; include 'header.php' ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home'); ?>"> Home </a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/events') ?>"> Events </a></li>
            <li class="breadcrumb-item active" aria-current="page"> <?php echo substr($event['title'], 0, 50) . "..."; ?></li>
        </ol>
    </nav>

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