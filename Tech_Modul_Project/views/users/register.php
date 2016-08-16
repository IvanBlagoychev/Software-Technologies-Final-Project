<div class="user-login-block">
    <?php $this->title = 'Register new user'; ?>
    <h1><?= htmlspecialchars($this->title) ?></h1>

    <form method="post">
        <div><label for="username">Username:</label></div>
        <input id="username" type="text" name="username" />
        <div><label for="password">Password:</label></div>
        <input id="password" type="password" name="password" />
        <div><label for="username">Full name:</label></div>
        <input id="full_name" type="text" name="full_name" />
        <div><input type="submit" value="Register" />
    </form>
</div>
