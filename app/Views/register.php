<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/CSS/register.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/Javascript/app.js"></script>
    <title>Join Us</title>
</head>

<body>
    <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" width="330" height="90" viewBox="0 0 330 80">
            <text id="GUSHI" transform="translate(0 63)" fill="#312620" font-size="90" font-family="Philosopher-Regular, Philosopher">
                <tspan x="0" y="0">GUSHI</tspan>
            </text>
            <text id="TM" transform="translate(270 5)" fill="#312620" font-size="15" font-family="OperatorMono-Medium, Operator Mono" font-weight="500">
                <tspan x="0" y="0">TM</tspan>
            </text>
        </svg>
    </div>
    <div class="back"></div>
    <div class="login_wrapper">
        <div class="titles">
            <h1>Create an Account</h1>
            <h3>GUSHI | The best in clothing</h3>
        </div>

        <div style="display: block;" id="content1">
            <label for="email">Email</label>
            <input id="email" type="email">
            <label for="firstname">First Name</label>
            <input id="firstname" type="text">
            <label for="lastname">Last Name</label>
            <input id="lastname" type="text">
            <button onclick="toggle('content1')" id="next">Next</button>
        </div>
        <div style="display: none;" id="content2">
            <span id="error_tag"></span>
            <label for="password">Password</label>
            <input id="password" type="password">
            <label for="confirm">Confirm Password</label>
            <input id="cpass" type="password">
            <label for="gender">Gender</label>
            <select name="" id="">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <a onclick="back('content2')"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</a>
            <button id="create">Create Account</button>
        </div>
        <div>
            <span id="span1">Already have an account? &nbsp; <a href="<?= site_url('Login') ?>">Login</a></span>
            <div id="options">
                <a href="">Help</a>
                <a href="">Privacy</a>
                <a href="">Terms and Conditions</a>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#create', function() {
                if ($.trim($('#email').val()).length == 0) {
                    is_empty = 'Email cannot be empty';
                    $('#error_tag').text(is_empty);
                    $('#email').css('border', '1px solid #FCB9B2');
                } else {
                    if ($.trim($('#firstname').val()).length == 0 || $.trim($('#lastname').val()).length == 0) {
                        is_empty = 'Please provide your full name';
                        $('#error_tag').text(is_empty);
                        $('#firstname').css('border', '1px solid #FCB9B2');
                    } else {
                        if ($.trim($('#password').val()).length == 0 || $.trim($('#cpass').val()).length == 0) {
                            is_empty = 'Ensure you have filled both password fields';
                            $('#error_tag').text(is_empty);
                            $('#email').css('border', '1px solid #FCB9B2');
                        } else {
                            if ($.trim($('#password').val()) = !$.trim($('#cpass').val())) {
                                is_empty = 'Passwords do not match';
                                $('#error_tag').text(is_empty);
                                $('#email').css('border', '1px solid #FCB9B2');
                            } else {
                                var data = {
                                    'email': $('#email').val(),
                                    'firstname': $('#firstname').val(),
                                    'lastname': $('#lastname').val(),
                                    'password': $('#password').val(),
                                    'gender': $('#gender').val()
                                };
                                $.ajax({
                                    url: "<?php echo base_url('Register/new_user') ?>",
                                    method: 'post',
                                    data: data,
                                    success: function(result) {
                                        if (result == 1) {
                                            console.log('A')
                                        } else {
                                            console.log('Balaa')
                                        }

                                    }
                                })
                            }
                        }
                    }
                }



            })
        })
    </script>
</body>


</html>