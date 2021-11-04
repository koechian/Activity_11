function login() {


    var flag = 0;
    /*Checking the value of inputs*/
    var username = $('#username').val();
    var password = $('#password').val();
    /*Validating the values of inputs that it is neither null nor undefined.*/
    if (username == '' || username == undefined) {
        $('#email').css('border', '1px solid red');
        flag = 1;
    }
    if (password == '' || password == undefined) {
        $('#password').css('border', '1px solid red');
        flag = 1;
    }
    /*if there is no error, go to flag==0 condition*/
    if (flag == 0) {
        /*Ajax call*/
        $.ajax({
            url: "<?php echo base_url('Login/getLogin') ?>",
            method: 'POST',
            data: "UserName=" + username + "&Password=" + password,
            success: function (result) {
                /*result is the response from LoginController.php file under getLogin.php function*/
                if (result == 1) {
                    /*if response result is 1, it means it is successful.*/
                    $('#username').css('border', '1px solid green');
                    $('#password').css('border', '1px solid green');
                    setTimeout(function () {
                        /*Redirect to login page after 1 sec*/
                        window.location.href = '<?php echo base_url("LoginController/dashboard") ?>';
                    }, 1000)
                } else if (result == 2) {
                    /*if response result is 2, it means, username is invalid.*/
                    $('#username').css('border', '1px solid red');
                    $('#response').html('Invalid Username');

                } else if (result == 3) {
                    /*if response result is 3, it means, password is invalid.*/
                    $('#password').css('border', '1px solid red');
                    alert('Invalid Password');
                } else if (result == 4 || result == 5) {
                    /*if response result is 4 or 5, it means, username & password are invalid.*/
                    $('#username').css('border', '1px solid red');
                    $('#password').css('border', '1px solid red');

                    $('#response').html('Invalid Username & Passowrd');
                } else {

                    $('#response').html('Something went wrong');
                }
            }
        });
    } else {
        $('#response').html('Something went wrong');
    }
}
