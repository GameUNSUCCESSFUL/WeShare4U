<!-- javascript login  ----------------------------------------------------------------------------------------------------------------------------------------------->

<div class="modal fade bs-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <br>
            <?php $attributes = array('id' => 'event');
            echo form_open('UserController/login', $attributes); ?>
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

<!--                    <div align="center" id="recaptcha" class="g-recaptcha"-->
<!--                         data-sitekey="6LdM9RoUAAAAABEquyphv8VNH7W3l0aG92CKTYKc"></div>-->

                    <div align="center" id="g-recaptcha-response" class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>

                    <div align="center">
                        <p style="color:red"><br><span id="error"> </span></p></div>
                    <div align="center">
                        <button type="submit" id="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                    </div>
                    <?php echo form_close() ?>

                    <script>
                        $(document).ready(function () {
                            $("#event").submit(function () {
                                $("#error").text("");
                                var captcha = $("#g-recaptcha-response").val();
                                var email = $("#email").val();
                                var password = $('#password').val();
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url('index.php/UserController/login'); ?>",
                                    data: {email: email, password: password, captcha: captcha},
                                    dataType: "text",
                                    cache: false,
                                    success: function (data) {
                                        if(data == "error"){
                                            $("#error").text("Password is invalid");
                                        }else if(data == "success"){
                                            window.location.href="<?php echo base_url('index.php/Welcome/select'); ?>";
                                        }else if(data == "captcha"){
                                            $("#error").text("Please Identify yourself");
                                        }else if(data == 1){
                                            $("#error").text("Please enter Username or Password");
                                        }
//                                        if (data == "error") {
//                                            $("#error").text("Please Enter E-mail or Password");
//                                        }else if(data == "login_fail"){
//                                           $("#error").text("E-mail or Password is fail");
//                                        }else if(data == "error_cap"){
//                                            $("#error").text("Please Identify yourself");
//                                        }else if(data == "true"){
//                                            window.location.href="Welcome/select";
//                                        }
                                    }
                                });
                                return false;
                            });
                        });
                    </script>
                    <br>
                </div>

            </div>
        </div>
    </div>
</div>

<!---------------------------------------------------------------------------------------------------------------------------------------->