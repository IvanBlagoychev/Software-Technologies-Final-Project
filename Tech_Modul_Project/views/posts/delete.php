<?php $this->title = 'Delete Post'; ?>
<h1>Are you sure you want to delete this post ?</h1>

<form method="post">
    <div class="button">
        <input type="submit" value="Delete" />
        <a href="<?=APP_ROOT?>/posts"><input type="button" value="Cancel" /></a>
    </div>
</form>
