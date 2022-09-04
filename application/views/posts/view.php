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
<hr />

<h3>Comments</h3>
<php if($comments) : ?>
    <?php foreach($comments as $comment) : ?>
        <p><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</p>
    <?php endforeach; ?> 
<php else : ?>
    <p>No comments</p>
<php endif; ?>   
<hr />

<h3>Add Comment</h3>
<?= validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" name="body" placeholder="Enter body"></textarea>
    </div>
    <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>" />
    <br /></br/>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
