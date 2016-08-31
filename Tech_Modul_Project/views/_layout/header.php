<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/slider.css" />
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
    <link rel="icon" href="<?=APP_ROOT?>/content/images/favicon.ico" />
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/forms.css" />
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<header>
    <?php if ($this->isLoggedIn):
        if($_SESSION['username'] == "admin"):?>
            <a href="<?=APP_ROOT?>/">Home</a>
            <a href="<?=APP_ROOT?>/posts">Posts</a>
            <a href="<?=APP_ROOT?>/posts/create">Create Post</a>
            <a href="<?=APP_ROOT?>/users">Users</a>
            <a href="<?=APP_ROOT?>/comments">Comments</a>
            <a href="<?=APP_ROOT?>/users/logout">Logout</a>
        <?php else:?>
            <a href="<?=APP_ROOT?>/">Home</a>
            <a href="<?=APP_ROOT?>/posts/create">Create Post</a>
            <a href="<?=APP_ROOT?>/users/logout">Logout</a>
        <?php endif;?>
    <?php else: ?>
        <a href="<?=APP_ROOT?>/users/login">Login</a>
        <a href="<?=APP_ROOT?>/users/register">Register</a>
    <?php endif; ?>    
</header>

<?php require_once('show-notify-messages.php'); ?>
