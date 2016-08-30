<?php $this->title = 'Add New Comment' ; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post">
    <textarea rows="10" name="comment_content"></textarea>
    <div><input type="submit" value="Create" />
</form>