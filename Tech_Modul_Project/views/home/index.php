<?php $this->title = 'Welcome to My Blog'; ?>
<?php $comments_counter = 0;
foreach ($this->comment as $comments) {
    $comments_counter+=1 ;
}?>
<h1><?=htmlspecialchars($this->title)?></h1>
<main id="posts">
    <article>
        <?php foreach ($this->posts as $post) : ?>            
            <div class="posts_view">
                <h2 class="col-md-8 col-sm-7 col-xs-12"><?=htmlentities($post['title'])?></h2>
                <div class="date"><i>Posted on</i>
                    <?=(new DateTime($post['date']))->format('d-M-Y')?>
                    <i> by </i><?=htmlentities($post['full_name'])?>
                </div>
                <p class="content"><?=$post['content']?></p>

                <a href="<?=APP_ROOT?>/comments/create_comment"><input type="submit" value="Add comment"></a>
                <a href="<?=APP_ROOT?>/comments"><span class="counter"><?= $comments_counter ?> Comments</span></a>

               <?php foreach ($this->comment as $comments) : ?>
                    <div class="date"><i>Commented on</i>
                        <?=(new DateTime($comments['date']))->format('d-M-Y')?>
                        <i> by </i><?=htmlentities($comments['full_name'])?>
                    </div>
                    <p class="content"><?=$comments['content']?></p>
               <?php endforeach; ?>
            </div>
        <?php endforeach ?>

    </article>
</main>