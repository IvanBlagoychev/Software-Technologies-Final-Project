<?php $this->title = 'Comments'; ?>
<h1><?=htmlspecialchars($this->title)?></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Content</th>
        <th>Date</th>
        <td>Author ID</td>
        <th>Action</th>
    </tr>
    <?php $counter = 0;
    foreach ($this->comment as $comments): 
        $counter++ ?>
        <tr>
            <td><?=$comments['id'] ?></td>
            <td><?=cutLongText($comments['content']) ?></td>
            <td><?=htmlspecialchars($comments['date']) ?></td>
            <td><?=$comments['user_id'] ?></td>
            <td><div class="edit_and_delete">
                    <a href="<?=APP_ROOT?>/comments/delete_comment/<?=$comments['id']?> ">
                        <input type="button" value="Delete"></a>
                </div>
            </td>
        </tr>
    <?php endforeach ?>
</table>
