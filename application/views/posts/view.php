<h2><?= $post['title'] ?></h2>
<small class="post-date">
    Posted on: <?php echo $post['created_at']; ?>
</small>
<br />
<div class="row mb-3">
    <div class="col-md-6">
        <img class="img-thumbnail" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
    </div>
</div>
<div class="post-body">
    <?= $post['body'] ?>
</div>

<hr />
<p>
    <a class="btn btn-secondary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
</p>
<?= form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
