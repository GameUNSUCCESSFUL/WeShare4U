<!-- javascript login  ----------------------------------------------------------------------------------------------------------------------------------------------->

<div class="modal fade bs-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <br>
            <?php $attributes = array('id' => 'event');
            echo form_open('UserController/login', $attributes);?>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div align="center"><h2>Sign in</h2></div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" class="form-control" placeholder="E-mail" id="email"
                                   name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password"
                                   name="password">
                        </div>
                        <a href=#>Forget Password ? </a>|<br><br>
                        <div align="center" id="recaptcha" class="g-recaptcha" data-sitekey="6LdM9RoUAAAAABEquyphv8VNH7W3l0aG92CKTYKc"></div>
                        <div align="center"><p style="color:red"><br><span id="error"></span></p></div>
                        <div align="center">
                            <button type="submit" id="bt" class="btn btn-primary">เข้าสู่ระบบ</button>
                        </div>
                        <script>
                            $(document).ready(function(){
                                $("#event").submit(function(){
                                    $("#error").text("");
                                    var recaptcha = $("#recaptcha").val();
                                    var email   = $("#email").val();
                                    var password = $('#password').val();
                                    $.ajax({
                                        type: "POST",
                                        url: "<?php echo base_url('UserController/login') ?>",
                                        data: {email: email, password: password, catpcha: recaptcha},
                                        dataType: "text",
                                        cache:false,
                                        success:
                                            function(data){
                                                if(data == "error"){
                                                    $("#error").text("Please Enter E-mail or Password");
                                                }
                                            }
                                    });
                                    return false;
                                });
                            });
                        </script>
                        <br>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>

<!---------------------------------------------------------------------------------------------------------------------------------------->