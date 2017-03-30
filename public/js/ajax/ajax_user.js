/**
 * Created by Game on 31-Mar-17.
 */
<script>
$(document).ready(function(){
    $("#fm").submit(function(){
        $("#resultPassword").text("");
        var catpcha = $("#g-recaptcha-response").val();
        var user = $("#username").val();
        var pass = $('#password').val();
        $.ajax({
            type: "POST",
            url: "index.php/ajax_checkPassword/AcheckPass",
            data: {username: user,password: pass,catpcha: catpcha},
            dataType: "text",
            cache:false,
            success:
                function(data){
                    if(data == "error"){
                        $("#resultPassword").text("Password is invalid");
                    }else if(data == "success"){
                        window.location.href="index.php/Welcome/select";
                    }else if(data == "captcha"){
                        $("#resultPassword").text("Please Identify yourself");
                    }else if(data == 1){
                        $("#resultPassword").text("Please enter Username or Password");
                    }
                }
        });
        return false;
    });
});
</script>