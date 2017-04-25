<!DOCTYPE html>
<html lang="en">
<head>
    <title>WeShare4U</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "includecss.php" ?>

</head>


<body>
<!-- bar -->

<?php include "navbaradmin.php" ?>
<div style="height: 100vh">
    <div class="container">
        <br>
        <div class="thumbnail">
            <br>
            <div align="center"><h3 class="topic2">จัดการผู้ใช้งาน</h3></div>
            <br><br>
            <table class="table" id="output">
                <tr>
                    <th class="col-md-1"></th>
                    <th class="col-md-2"></th>
                    <th class="col-md-2"></th>
                    <th class="col-md-2"></th>
                    <th class="col-md-3"></th>
                    <th class="col-md-2"></th>
                </tr>
                <tr>
                    <th >#</th>
                    <th >ชื่อ</th>
                    <th >นามสกุล</th>
                    <th >เลขบัตรปรจำตัวประชาชน</th>
                    <th >รูปประจำตัว</th>
                    <th >อนุมัติ/ไม่อนุมัติ</th>
                </tr>

                <?php $x=0; foreach ($row as $user) {?>
                <tr>
                    <td ><?php echo $user['user_id']?></td>
                    <td ><?php echo $user['firstname']?></td>
                    <td ><?php echo $user['lastname']?></td>
                    <td >#</td>
                    <td >#</td>
                    <td >
                        <input type="hidden" id="email_<?php echo $user['user_id']?>" value="<?php echo $user['email']?>">
                        <button class="btn btn-success" id="btn_accept" onclick="load_id(<?php echo $user['user_id']?>)" >อนุมัติ</button>
                        <button class="btn btn-danger" id="btn_not_accept" onclick="load_id(<?php echo $user['user_id']?>)" >ไม่อนุมัติ</button>
                    </td>
                </tr>

                <?php $x++;}?>
                <script>
                    var id;
                    function load_id(input_id) {
                        id = input_id;
                    }
                    $(document).ready(function () {
                        $('button[id=btn_accept]').click(function () {
                            var user_id = id;
                            var id_email = "#email_"+id;
                            var email = $(id_email).val();
                            $.ajax({
                                type: "POST",
                                url: "<?php echo base_url('index.php/AdminController/up_status_user') ?>",
                                data: {
                                    user_id: user_id,
                                    email:email,
                                    status:1
                                },
                                dataType: "text",
                                cache: false,
                                success: function (data) {
                                    if (data == "pass"){
                                        location.reload();
                                    }
                                }
                            });
                        });
                        $('button[id=btn_not_accept]').click(function () {
                            var user_id = id;
                            var id_email = "#email_"+id;
                            var email = $(id_email).val();
                            $.ajax({
                                type: "POST",
                                url: "<?php echo base_url('index.php/AdminController/up_status_user') ?>",
                                data: {
                                    user_id: user_id,
                                    email:email,
                                    status:2
                                },
                                dataType: "text",
                                cache: false,
                                success: function (data) {
                                    if (data == "pass"){
                                        location.reload();
                                    }
                                }
                            });
                        });
                    });
                </script>
                <tr>
                    <th ></th>
                    <th ></th>
                    <th ></th>
                    <th ></th>
                    <th ></th>
                    <th ></th>
                </tr>
                <tr>
                    <th ></th>
                    <th ></th>
                    <th ></th>
                    <th ></th>
                    <th ></th>
                    <th ></th>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- footer -->
<?php include "footer.php" ?>
</body>
</html>