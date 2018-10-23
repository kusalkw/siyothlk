<?php $page = 'events'; include 'header.php' ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home'); ?>"> Home </a></li>
            <li class="breadcrumb-item active" aria-current="page"> Events </li>
        </ol>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3 text-center">Events</h1>
        </div>
    </div>

<?php
if($this->session->flashdata('msg')) {
    echo $this->session->flashdata('msg');
}
?>

    <div class="container">


        <div class="text-right">
            <a href="<?php echo base_url('index.php/Events/add_event')?>" class="btn btn-danger"><i class="fas fa-plus-circle"></i> ADD NEW EVENT </a>
        </div>

        <br>
        <br>

        <?php

        if(!empty($events)) {

            foreach ($events as $event) {

                echo '<div class="row">';
                echo '<div class="col-md-5">';
                echo '<a href="#">';
                echo '<img class="img-fluid rounded mb-3 mb-md-0" src="'.$event->image.'" alt="image not found">';
                echo '</a>';
                echo '</div>';
                echo '<div class="col-md-7">';
                echo '<h3>';
                echo $event->title;
                echo '</h3>';
                echo '<small>';
                echo "<p style=\"color: red; \"> by $event->username </p>";
                echo $event->timeStamp;
                echo '</small>';
                echo '<br><br>';
                echo "<a class=\"btn btn-primary\" href=\"";
                echo base_url('index.php/Events/view_full_event');
                echo "?id=$event->id\"";
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