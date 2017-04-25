<!DOCTYPE html>
<html lang="en">
<head>
    <title>WeShare4U</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view('includecss'); ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>


<body>
<!-- bar -->
<?php $this->load->view('navbarlogin') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <div class="thumbnail" style="padding: 30px 100px;">
                <span class="topic">สมัครสมาชิก</span>
                <div class="row">
                    <div class="coll"></div>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="page-header">
                            <h1></h1>
                        </div>
                        <?= form_open_multipart('UserController/register') ?>
                        <div class="col-xs-6 col-md-2"></div>
                        <div class="col-xs-6 col-md-6">

                            <div class="form-group">
                                <label for="email"><h4>อีเมล์</h4></label>
                                <input type="email" class="form-control" id="re_email" name="email"
                                       placeholder="Enter your email" >
                                <p class="help-block">กรุณากรอกที่อยู่อีเมล์ที่ถูกต้อง</p>
                            </div>
                            <div class="form-group">
                                <label for="password"><h4>รหัสผ่าน</h4></label>
                                <input type="password" class="form-control" id="re_password" name="password"
                                       placeholder="Enter a password">
                                <p class="help-block">กรุณากรอกรหัสผ่านอย่างน้อย 8 - 16 ตัวอักษร</p>
                            </div>
                            <div class="form-group">
                                <label for="password_confirm"><h4>ยืนยันรหัสผ่าน</h4></label>
                                <input type="password" class="form-control" name="confirm_password"
                                       id="confirm_password"
                                       placeholder="Confirm your password">
                                <span id='message'></span>
                                <p class="help-block">กรอกรหัสผ่านอีกครั้ง</p>
                            </div>
                            <div class="form-group">
                                <label for="firstname"><h4>ชื่อ</h4></label>
                                <input type="text" class="form-control" id="firstname" name="firstname"
                                       placeholder="Enter a firstname">
                                <p class="help-block">กรุณากรอกชื่อจริงของท่าน</p>
                            </div>
                            <div class="form-group">
                                <label for="lastname"><h4>นามสกุล</h4></label>
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                       placeholder="Enter a lastname">
                                <p class="help-block">กรุณากรอกนามสกุลของท่าน</p>
                            </div>
                            <div class="form-group">
                                <label for="identity_card"><h4>เลขบัตรประจำตัวประชาชน</h4></label>
                                <input type="text" class="form-control" id="identity_card" name="identity_card"
                                       placeholder="Enter a identity_card" onkeyup="autoTab2(this,1)">
                                <p class="help-block">กรุณากรอกเลขบัตรประจำตัวที่ถูกต้อง</p>
                            </div>

                            <div class="form-group">
                                <label for="identity_image"><h4>รูปบัตรประจำตัวประชาชน</h4></label>
                                <input type="file" class="form-control"  id="identity_image" name="identity_image" size="30" onchange='openFile()' multiple>
                                <p class="help-block"><img id='output' height=300 width=300/></p>
                            </div>

                            <div class="form-group">
                                <label for="phone"><h4>เบอร์โทรศัพท์</h4></label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                       placeholder="Enter a phone" onkeyup="autoTab2(this,2)">
                                <p class="help-block">กรุณากรอกเบอร์โทรศัพท์ที่ถูกต้อง</p>
                            </div>

                            <div class="form-group">
                                <label for="address"><h4>ที่อยู่</h4></label><br/>
                                <textarea id="address" name="address" rows="4" cols="50"
                                          placeholder="Enter a Address"></textarea>
                                <p class="help-block">กรุณากรอกที่อยู่ที่ถูกต้อง</p>
                            </div>

                            <div class="form-group">
                                <label for="question"><h4>คำถาม</h4></label>
                                <select class="form-control" id="question" name="question">
                                    <option value="สัตว์เลี้ยงตัวแรกชื่ออะไร" selected>สัตว์เลี้ยงตัวแรกชื่ออะไร</option>
                                    <option value="รถคันแรกยี่ห้ออะไร">รถคันแรกยี่ห้ออะไร</option>
                                    <option value="เลขบัตรประจำตัว4ตัวสุดท้ายของคุณคือ">เลขบัตรประจำตัว4ตัวสุดท้ายของคุณคือ</option>
                                    <option value="สีรถคันแรกของคุณคือ">สีรถคันแรกของคุณคือ</option>
                                    <option value="งานอดิเรกของคุณคือ">งานอดิเรกของคุณคือ</option>
                                    <option value="สัตว์ที่ชอบ">สัตว์ที่ชอบ</option>
                                </select>
                                <p class="help-block">กรุณาเลือกคำถามยืนยันของท่าน</p>
                            </div>

                            <div class="form-group">
                                <label for="answer"><h4>คำตอบ</h4></label>
                                <input type="text" class="form-control" id="answer" name="answer"
                                       placeholder="Enter a answer">
                                <p class="help-block">กรุณาตอบคำถาม</p>
                            </div>


                            <div class="form-group">
                                <input type="submit" id="submit_register" class="btn btn-default" value="Register">
                            </div>

                            </form>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <?php if (validation_errors()) : ?>
                                <div class="col-md-12">
                                    <div class="alert alert-danger" role="alert">
                                        <?= validation_errors() ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (isset($error)) : ?>
                                <div class="col-md-12">
                                    <div class="alert alert-danger" role="alert">
                                        <?= $error ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div><!-- .row -->


            </div>

        </div>
    </div>
</div>
<!-- footer -->
<?php $this->load->view('footer'); ?>
</body>
<script type="text/javascript">

    //    $('#password, #confirm_password').on('keyup', function () {
    //        alert($('#password').val());
    //        if ($('#password').val() == $('#confirm_password').val()) {
    //            $('#message').html('Matching').css('color', 'green');
    //        } else {
    //            $('#message').html('Not Matching').css('color', 'red');
    //        }
    //    });


    function autoTab2(obj, typeCheck) {
        var regExp = /[0-9]$/;
        if (!regExp.test(obj.value)) {
            obj.value = obj.value.substring(0, obj.value.length - 1);
        } else {
            if (typeCheck == 1) {
                var pattern = new String("_-____-_____-__-_"); // กำหนดรูปแบบในนี้
                var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้    
            } else {
                var pattern = new String("__-____-____"); // กำหนดรูปแบบในนี้
                var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้                
            }
            var returnText = new String("");
            var obj_l = obj.value.length;
            var obj_l2 = obj_l - 1;
            for (i = 0; i < pattern.length; i++) {
                if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
                    returnText += obj.value + pattern_ex;
                    obj.value = returnText;
                }
            }
            if (obj_l >= pattern.length) {
                obj.value = obj.value.substr(0, pattern.length);
            }
        }
    }
</script>
</html>