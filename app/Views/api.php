<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUSHI | API</title>
    <!-- <link rel="stylesheet" href="/CSS/pages.css" /> -->
    <link rel="stylesheet" href="/CSS/api.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Rampart+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo">
            <a href="<?= site_url('Pages/index') ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="65" viewBox="0 0 178 65">
                    <text id="GUSHI" transform="translate(0 52)" font-size="58" font-family="Philosopher-Bold, Philosopher" font-weight="700" letter-spacing="0.01em">
                        <tspan x="0" y="0">GUSHI</tspan>
                    </text>
                </svg>
            </a>
        </div>
        <ul>
            <li><span onclick="revealLogin()" class="span-button" id="reveal-login">Login</span></li>
            <li><span onclick="revealRegister()" class="span-button" id="reveal-registration">Register</span></li>
            <li><span onclick="logout()" id="logout" class="span-button">Logout</span></li>
        </ul>
    </header>
    <div class="floating login-box hide">
        <h3>Login</h3>
        <input placeholder="Username" id="username" type="text">
        <input type="password" placeholder="Password" id="password">
        <span id="login" class="span-button">Login</span>
        <button class="close-boxes">Close</button>
    </div>
    <div class="floating register-box  hide">
        <h3>Register</h3>
        <input placeholder="Username" id="new-username" type="text">
        <input type="password" placeholder="Password" id="new-password">
        <span id="register" class="span-button">Login</span>
        <button class="close-boxes">Close</button>
    </div>
    <section class="banner"></section>
    <section class="wrapper">
        <section class="sidebar">
            <div id="my-details">
                <h1>My API Key</h1>
                <span id="token_text"><?php
                                        $session = session();

                                        if ($session->get('api-user') == "") {
                                            echo '<span  id="error-message">Login To get Api Token</span>';
                                        } else {
                                            echo ('<span >' . print_r($session->get('token')) . '</span>');
                                        }
                                        ?></span>

            </div>
        </section>
        <section class="main">
            <table class="table">
                <thead>
                    <h1>Product Endpoints</h1>
                    <tr>
                        <th>Action</th>
                        <th>Expected Variables</th>
                        <th>Type</th>
                        <th>Endpoint</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fetch Product List</td>
                        <td>None</td>
                        <td>GET</td>
                        <td>http://localhost:8080/Api/productList</td>
                    </tr>
                    <tr>
                        <td>Fetch Product List By Sub Category Id</td>
                        <td>Sub Category Id</td>
                        <td>GET</td>
                        <td>http://localhost:8080/Api/productListBySubCategory</td>
                    </tr>
                    <tr>
                        <td>Fetch Product List by Target Gender</td>
                        <td>Category Name</td>
                        <td>GET</td>
                        <td>http://localhost:8080/Api/productListByGender</td>

                    </tr>
                </tbody>
            </table>
            <table class="table">
                <thead>
                    <h1>User Endpoints</h1>
                    <tr>
                        <th>Action</th>
                        <th>Expected Variables</th>
                        <th>Type</th>
                        <th>Endpoint</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fetch All Users</td>
                        <td>Token</td>
                        <td>POST</td>
                        <td>http://localhost:8080/Api/usersList</td>
                    </tr>
                    <tr>
                        <td>Fetch all Users Filtered By Gender</td>
                        <td>Token,Gender</td>
                        <td>POST</td>
                        <td>http://localhost:8080/Api/userListGender</td>
                    </tr>
                    <tr>
                        <td>Fetch User Purchases</td>
                        <td>Token,User ID</td>
                        <td>POST</td>
                        <td>http://localhost:8080/Api/userPurchases</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </section>
    <input id="api-user" value="<?php $session = session();
                                echo ($session->get('api-user')); ?>" type="hidden">
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function logout() {
        $.ajax({
            url: "<?php echo base_url('Api/logout') ?>",
            method: 'POST',
            data: null,
            success: function(result) {
                if (result == 1) {
                    window.location.reload();
                }
            }
        })
    }

    function revealLogin() {
        $('.login-box').removeClass('hide').addClass('flex')
        $('.register-box').removeClass('flex').addClass('hide')
    }

    function revealRegister() {
        $('.login-box').removeClass('flex').addClass('hide')
        $('.register-box').removeClass('hide').addClass('flex')
    }
    $('.close-boxes').click(function(e) {
        $('.floating').removeClass('flex').addClass('hide')
    });
    $(document).ready(function() {

        $('#login').click(function() {
            var creds = {
                'username': $('#username').val(),
                'key': $('#password').val()
            }
            $.ajax({
                method: "post",
                url: "<?php echo base_url('API/APILogin') ?>",
                data: creds,
                success: function(response) {
                    if (response == 1) {
                        window.location.reload()
                    } else {
                        if (response == 2 || response == 3) {
                            alert('Username and Key combination is wrong')
                        }

                    }
                }
            });
        })

        $('#register').click(function() {
            var details = {
                'username': $('#new-username').val(),
                'key': $('#new-password').val(),

            }


            $.ajax({
                url: "<?php echo base_url('Api/apiReg') ?>",
                method: 'post',
                data: details,
                success: function(result) {
                    if (result == 1) {
                        $('.login-box').removeClass('hide').addClass('flex')
                        $('.register-box').removeClass('flex').addClass('hide')
                    }

                }
            })
        })
    })
</script>

</html>