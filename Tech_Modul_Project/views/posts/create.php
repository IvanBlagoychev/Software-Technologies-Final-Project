<?php $this->title = 'Create New Post' ; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post">
    <div>Title:</div>
    <input type="text" name="post_title" />
    <div>Content:</div>
    <input class="create" type="text" rows="10" id="post_content">
<!--    <div><input type="submit" value="Create" />-->
    <button type="submit" value="Go, Baby, Go!">Go,Baby,Go!</button>
<!--        <a href="--><?//=APP_ROOT?><!--/posts">[Cancel]</a></div>-->
</form>