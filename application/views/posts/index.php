<h3 class="h3 mb-5"><?= $title ?></h3>

<?php foreach ($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
    <p><?php echo $post['body']; ?></p>
    <p>
        <a class="btn btn-secondary btn-sm" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a>
    </p>
    <hr />
<?php endforeach; ?>
