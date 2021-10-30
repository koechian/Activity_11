$(document).ready(function(){
    $('#first_name').on('input',function(){
        var input=$(this);
        var is_first_name=input.val();
        if (is_first_name) {
            input.removeClass("invalid").addClass("valid");  
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
    })
        $('#last_name').on('input',function(){
            var input=$(this);
            var is_last_name=input.val();
            if (is_last_name) {
                input.removeClass("invalid").addClass("valid");  
            }
            else{
                input.removeClass("valid").addClass("invalid");
            }
        })
  
    $('#email').on('input', function() {
        var input=$(this);
        var re = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&:\/~+#-]*[\w@?^=%&\/~+#-])?/;
        var is_url=re.test(input.val());
        if(is_url){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
        }
    });

    $("#login").on('click',function(){

        var email=$("#email").val();
        var password=$("#password").val();

        if (email==""||password=="") {
            alert("Please fill all fields");
            
        }else{
        $.ajax({
            url:'login.php',
            method:'post',
            data:{
                login:1,
                emailPHP:email,
                passwordPHP:password

            },
            success:function(response){
                console.log('response');

            },
            datatype:'text'
        })
    }

    });
})
