<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/CSS/login.css" />
    <title>Login to Continue</title>
</head>

<body>
    <div class="back"></div>
    <div class="login_wrapper">
        <span>Log In</span><br /><br />
        <span>Continue to Gushi</span>
        <div class="form">
            <form action="<?= base_url('Register/auth') ?>" method="POST">
                <?= csrf_field(); ?>
                <label for="email">Email</label>
                <input placeholder="<?= isset($validate) ? display_error($validate, 'email') : '' ?>" name="email" type="text" /><br />
                <label for="password">Password</label>
                <input name="password" type="password" /><textarea class="password_error"><?= isset($validate) ? display_error($validate, 'password') : '' ?></textarea><br />
                <input type="submit" value="Login" name="login" /><br />
            </form>
        </div>
        <span>New to Gushi? &nbsp <a href="<?= site_url('Register'); ?>">Get Started</a></span>
        <div class="options_wrapper">
            <a href="">Help</a>
            <a href="">Privacy</a>
            <a href="">Terms</a>
        </div>
    </div>
</body>

</html>