<?php

use App\Controllers\Register;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/CSS/login.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/Javascript/app.js"></script>
    <title>Login to Continue</title>
</head>

<body>
    <div class="back"></div>
    <div class="login_wrapper">
        <div>
            <h1>Log In</h1>
            <h3>Continue to GUSHI</h3>
        </div>

        <span id="error_tag"></span>
        <div>
            <label for="email">Email</label>
            <input id="email" type="email">
            <label for="password">Password</label>
            <input type="password" id="password">
            <button id="login">Login</button>
        </div>
        <div>
            <span id="span2">New to GUSHI? &nbsp; <a href="<?= site_url('Register') ?>">Get Started.</a></span>
            <div id="options">
                <a href="">Help</a>
                <a href="">Privacy</a>
                <a href="">Terms and Conditions</a>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(document).on('click', '#login', function() {
                if ($.trim($('#email').val()).length == 0 || $.trim($('#password').val()).length == 0) {
                    is_empty = 'Please fill both fields';
                    $('#error_tag').text(is_empty);
                    $('#email').css('border', '1px solid #FCB9B2');
                    $('#password').css('border', '1.2px solid #FCB9B2');

                } else {
                    var data = {
                        'email': $('#email').val(),
                        'password': $('#password').val()
                    };
                    $.ajax({
                        url: "<?php echo base_url('Login/login') ?>",
                        method: 'POST',
                        data: data,
                        success: function(result) {
                            if (result == 1) {
                                $('#email').css('border', '1px solid #A1EC83');
                                $('#password').css('border', '1px solid #A1EC83');
                                setTimeout(function() {
                                    window.location.replace('<?php echo base_url('Pages') ?>');
                                }, 1000)


                            } else {
                                wrong = 'Email and Password combination is wrong';
                                $('#error_tag').text(wrong);
                                $('#email').css('border', '1px solid #FCB9B2');
                                $('#password').css('border', '1.2px solid #FCB9B2');
                            }
                        }
                    })
                }

            });



        });
    </script>
</body>

</html>