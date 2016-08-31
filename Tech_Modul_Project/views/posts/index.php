<?php $this->title = 'Posts'; ?>
<h1><?=htmlspecialchars($this->title)?></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Date</th>
        <td>Author ID</td>
        <?php if($this->isLoggedIn): ?>
            <?php if($_SESSION['username'] == "admin"):?>
                <th>Action</th>
            <?php endif;?>
        <?php endif;?>
    </tr>
    <?php foreach ($this->posts as $post): ?>
        <tr>
            <td><?=$post['id'] ?></td>
            <td><?=htmlspecialchars($post['title']) ?></td>
            <td><?=cutLongText($post['content']) ?></td>
            <td><?=htmlspecialchars($post['date']) ?></td>
            <td><?=$post['user_id'] ?></td>
            <?php if($this->isLoggedIn): ?>
                <?php if($_SESSION['username'] == "admin"):?>
                <td><div class="edit_and_delete"> <a href="<?=APP_ROOT?>/posts/edit/<?=$post['id']?> "><input type="submit" value="Edit"></a>
                <a href="<?=APP_ROOT?>/posts/delete/<?=$post['id']?> "><input type="submit" value="Delete"></a></div></td>
                 <?php endif;?>
            <?php endif;?>
        </tr>
    <?php endforeach ?>
</table>
