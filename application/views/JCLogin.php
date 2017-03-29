<!-- javascript login  ----------------------------------------------------------------------------------------------------------------------------------------------->

<div class="modal fade bs-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <br>
            <form id="fm">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div align="center"><h2>Sign in</h2></div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Uesrname" id="username"
                                   name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password"
                                   name="password">
                        </div>
                        <a href=#>Forget Password ? </a>|<br><br>
                        <div align="center" class="g-recaptcha" id="g-recaptcha-response"
                             data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI">
                            <!-- <div align="center" class="g-recaptcha" id="g-recaptcha-response" data-sitekey="6LcDrxkUAAAAAFU0amUfGRTLXZVvYy1Hc3rOHYvY"> -->
                        </div>
                        <div align="center"><p style="color:red"><br><span id="resultPassword"></span></p></div>
                        <div align="center">
                            <button type="submit" id="bt" class="btn btn-primary">เข้าสู่ระบบ</button>
                        </div>
                        <script>
                            $(document).ready(function () {
                                $("#fm").submit(function () {
                                    $("#resultPassword").text("");
                                    var catpcha = $("#g-recaptcha-response").val();
                                    var user = $("#username").val();
                                    var pass = $('#password').val();
                                    alert(user+" "+pass);
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
<!---------------------------------------------------------------------------------------------------------------------------------------->