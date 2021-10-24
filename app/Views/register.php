<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/CSS/register.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Join Us</title>
</head>

<body>
    <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" width="330" height="90" viewBox="0 0 330 80">
            <text id="GUSHI" transform="translate(0 63)" fill="#EE964B" font-size="90" font-family="Philosopher-Regular, Philosopher">
                <tspan x="0" y="0">GUSHI</tspan>
            </text>
            <text id="TM" transform="translate(270 5)" fill="#EE964B" font-size="15" font-family="OperatorMono-Medium, Operator Mono" font-weight="500">
                <tspan x="0" y="0">TM</tspan>
            </text>
        </svg>
    </div>
    <div class="back"></div>
    <div class="login_wrapper">
        <span>Create an Account</span><br /><br />
        <span>The Best Fashion Store in Kenya</span>
        <div class="form">
            <form id="reg" action="<?= base_url('Register/new_user') ?>" method="POST">
                <?= csrf_field(); ?>
                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>

                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>
                <label for="email">Email</label><br>
                <input value="<?= set_value('email') ?>" placeholder="<?= isset($validate) ? display_error($validate, 'email') : '' ?>" type="email" name="email"><br><br>
                <label for="first_name">First Name</label><br>
                <input value="<?= set_value('first_name') ?>" placeholder="<?= isset($validate) ? display_error($validate, 'name') : '' ?>" name="name" type="text" /><br /><br>
                <label for="last_name">Last Name</label><br>
                <input value="<?= set_value('last_name') ?>" placeholder="<?= isset($validate) ? display_error($validate, 'last_name') : '' ?>" name="last_name" type="text" /><br /><br>
                <label for="password">Password</label><br>
                <input value="<?= set_value('password') ?>" placeholder="<?= isset($validate) ? display_error($validate, 'password') : '' ?>" name="password" type="password" /><br /><br>
                <label for="cpassword">Confirm Password</label><br>
                <input value="<?= set_value('cpassword') ?>" placeholder="<?= isset($validate) ? display_error($validate, 'cpassword') : '' ?>" name="cpassword" type="password" /><br /><br>
                <label for="gender">Gender</label><br>
                <select form="reg" name="gender_select" id="">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select><br /><br>
                <input type="submit" value="Create Account" name="submit" /><br />
            </form>
        </div>
        <span>Already have an Account? &nbsp <a href="<?= site_url('Login'); ?>">Login</a></span>
        <div class="options_wrapper">
            <a href="">Help</a>
            <a href="">Privacy</a>
            <a href="">Terms</a>
        </div>
    </div>
</body>
</body>

</html>