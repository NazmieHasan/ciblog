<h3 class="h3 mb-5"><?= $title ?></h3>

<?php foreach ($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <div class="row mb-5">
        <div class="col-md-3">
            <img class="img-thumbnail" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
        </div>
        <div class="col-md-9">
            <small class="post-date">
                Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong>
            </small>
            <p><?php echo word_limiter($post['body'], 60); ?></p>
            <p>
                <a class="btn btn-secondary btn-sm" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a>
            </p>
        </div>
    </div>   
<?php endforeach; ?>

<div class="pagination-links">
    <?php echo $this->pagination->create_links(); ?>
</div>
