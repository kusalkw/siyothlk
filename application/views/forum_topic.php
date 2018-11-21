<?php include 'header.php' ?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Topic Title</th>
        <th scope="col">Content</th>
        <th scope="col">Author</th>
        <th scope="col">Date Posted</th>
        <th scope="col">Views</th>
        <th scope="col">Replies</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($topics as $topic) {?>
            <tr>
                <td><?php echo $topic->title;?></td>
                <td><?php echo $topic->content;?></td>
                <td><?php echo $topic->author;?></td>
                <td><?php echo $topic->date_posted;?></td>
                <td><?php echo $topic->views;?></td>
                <td><?php echo $topic->replies;?></td>

            </tr>
    <?php }?>
    </tbody>
</table>

<?php include 'footer.php' ?>

