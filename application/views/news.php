<?php include 'header.php' ?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3 text-center">News</h1>
        </div>
    </div>

    <div class="container">

        <h1 class="my-4"> News </h1>

        <br>
        <br>

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

        <hr>

    </div>

<?php include 'footer.php' ?>