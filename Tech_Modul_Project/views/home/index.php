<?php //$this->title = 'Welcome to My Blog'; ?>
<!---->
<!--<h1>--><?//=htmlspecialchars($this->title)?><!--</h1>-->

<?php if ($this->isLoggedIn) : ?>
    <<div class="main_page">
        Welcome to my blog.Enjoy!
    </div>
<?php else: ?>
<div class="main_page">
    Welcome to my blog.Please LogIn and Enjoy!
</div>
<?php endif;?>


