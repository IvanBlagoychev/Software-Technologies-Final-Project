<?php $this->title = 'Welcome to My Blog ! Enjoy!'; ?>
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
                <div class="image">
                    <a href="<?=APP_ROOT?>/posts/create"><img src="content/images/blogpost.png"/></a>
                 </div>
                <p class="content"><?=$post['content']?></p>
                <?php if ($this->isLoggedIn):?>
                    <a href="<?=APP_ROOT?>/comments/create_comment"><input type="button" value="Add comment"></a>
                <?php endif;?>
                <a href="<?=APP_ROOT?>/comments"><div class="button" class="button"><?= $comments_counter ?> Comments</div></a>
                <div></div>
               <div class="kotima">
               <?php foreach ($this->comment as $comments) : ?>
                    <div class="date"><i>Commented on</i>
                        <?=(new DateTime($comments['date']))->format('d-M-Y')?>
                        <i> by </i><?=htmlentities($comments['full_name'])?>
                    </div>
                    <p class="content"><?=$comments['content']?></p>

               <?php endforeach; ?>
               </div>
            </div>
        <?php endforeach ?>

    </article>
</main>