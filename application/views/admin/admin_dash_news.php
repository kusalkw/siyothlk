<?php $panel = 'news'; include 'admin_dashboard_frame.php'; ?>

    <div class="card">
        <div class="card">

            <h4 class="card-header">News Published On Web Site <a href="<?php echo base_url('index.php/admin/add_news')?>" class="btn btn-danger btn-sm float-right"><i class="fas fa-plus"></i> New</a></h4>

            <?php
            if($this->session->flashdata('msg')) {
                echo $this->session->flashdata('msg');
            }
            ?>

            <br>
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Timestamp</th>
                        <th></th>
                    </tr>
                </thead>
            <?php
                if(!empty($news)) {
                    foreach($news as $new) {
                        echo "<tr >";
                            echo "<td >$new->id</td >";
                            echo "<td >$new->title</td >";
                            echo "<td >$new->timeStamp</td >";
                            echo "<td ><a href = \"#\" ><i class=\"fas fa-edit\"></i></a > <a href = \"#\" ><i style=\"color: red;\" class=\"fas fa-trash\"></i></a ></td >";
                        echo "</tr >";
                    }
                }
            ?>
            </table>

        </div>
    </div>


<?php include 'admin_dashboard_foot.php'; ?>