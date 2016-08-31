<?php $this->title = 'Create New Post' ; ?>

<h1 xmlns="http://www.w3.org/1999/html"><?=htmlspecialchars($this->title)?></h1>

<form method="post">
    <div>Title:</div>
    <textarea  name="post_title" /></textarea>
    <div>Content:</div>
    <textarea rows="10" name="post_content"></textarea>
    <div><input type="submit" value="Go, Baby, Go!" />
        
</form>