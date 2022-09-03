<h2><?= $title ?></h2>

<?= validation_errors(); ?>

<?= form_open('posts/update'); ?>
    <input type="hidden" name="id" value="<?= $post['id']; ?>" />
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" value="<?= $post['title']; ?>">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" name="body"><?= $post['body']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
            <?php foreach($categories as $category): ?>
                <option value="<?php echo $category['id']; ?>">
                    <?php echo $category['name']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <br /><br />
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
