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

<?php include "navbarlogin.php" ?>

<div class="container">
    <br>
    <div class="thumbnail">
        <div align="center"><h3 class="topic">ตะกร้าสินค้า</h3></div>
        <br><br>
        <table class="table" id="output">
            <tr>
                <th class="col-md-1"></th>
                <th class="col-md-3"></th>
                <th class="col-md-2"></th>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
            </tr>
            <?php $x = 0;
            if (isset($result_basket)) {
                foreach ($result_basket as $item): ?>
                    <tr>
                        <td align="center"><img src="<?php echo base_url('uploads/donateImages/' . $item['img']) ?>"
                                                width="150px">
                        </td>
                        <td>
                            <div align="center">
                                <table>
                                    <tr>
                                        <th style="text-align:right">ชื่อ&ensp;:&ensp;</th>
                                        <td align="left"> <?php echo $item['name']; ?></td>
                                        <input type="hidden" id="PD_id<?php echo $x ?>"
                                               value="<?php echo $item['product_id'] ?>">
                                    </tr>
                                    <tr>
                                        <th>วิธีการจัดส่ง&ensp;:&ensp;</th>
                                        <td>
                                            นัดรับสิ่งของ
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                        <td>จำนวน : <input type="number" name="count" onkeydown="return false"
                                           onclick="load_val(<?php echo $x ?>)" id="<?php echo $x ?>"
                                           value="<?php echo $item['count'] ?>" width="10px" min="0"
                                           max="<?php echo $item['max'] ?>"> / <?php echo $item['max'] ?> ชิ้น
                        </td>
                        <td><a class="btn btn-info"
                               href="<?php echo base_url('productDetailController?id=' . $item['product_id']) ?>">แก้ไข</a>
                        <td>
                            <a class="btn" data-target="#btn_delete" id="btn_<?php echo $x ?>"
                               onclick="load_val(<?php echo $x ?>)" data-toggle="modal"><span
                                        class="glyphicon glyphicon-trash"></span></a>

                            <a class="btn" style="display: none;" id="btn_<?php echo $x ?>2" data-target="#btn_delete2"
                               data-toggle="modal"><span class="glyphicon glyphicon-trash"></span></a>

                        </td>


                    </tr>
                    <?php $x++; endforeach;
            } ?>
            <!-- model delete -------------------------------------------------------------------------------------------->
            <div class="modal fade bs-example-modal-sm" tabindex="-1" id="btn_delete" role="dialog"
                 aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">ยืนยันการลบสินค้า</h4>
                        </div>
                        <div class="modal-body">
                            <div align="center">
                                <button class="btn btn-danger btn-sm" data-dismiss="modal" id="delete">ยืนยัน</button>
                                <button class="btn btn-success btn-sm" data-dismiss="modal">ยกเลิก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- model delete2 -------------------------------------------------------------------------------------------->
            <div class="modal fade bs-example-modal-sm" tabindex="-1" id="btn_delete2" role="dialog"
                 aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">ยืนยันการลบสินค้า</h4>
                        </div>
                        <div class="modal-body">
                            <div align="center">
                                <button class="btn btn-danger btn-sm" data-dismiss="modal" id="delete2">ยืนยัน</button>
                                <button class="btn btn-success btn-sm" data-dismiss="modal" name="can">ยกเลิก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var val_id;
                function load_val($id_val) {
                    val_id = $id_val;
                }
                $(document).ready(function () {
                    $('button[name=can]').click(function () {
                        var pid = "#PD_id" + val_id;
                        var product_id = $(pid).val();
                        var can_id = "#" + val_id
                        $(can_id).val("1");
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('index.php/BasketController/update_item_basket') ?>",
                            data: {
                                product_id: product_id,
                                product_count: 1
                            },
                            dataType: "text",
                            cache: false,
                            success: function (data) {
                            }
                        });

                    });
                    $("input[name=count]").change(function () {
                        var pid = "#PD_id" + $(this).attr('id');
                        var product_id = $(pid).val();

                        var max = $(this).val();
                        var min = $(this).attr("min");
                        var value = $(this).val();
                        var id = "#btn_" + $(this).attr('id') + "2";

                        if (parseInt(value) == 0) {
                            $(id).trigger('click');
                        } else if (parseInt(value) > parseInt(min) && parseInt(value) <= parseInt(max)) {
                            $.ajax({
                                type: "POST",
                                url: "<?php echo base_url('index.php/BasketController/update_item_basket') ?>",
                                data: {
                                    product_id: product_id,
                                    product_count: parseInt(value)
                                },
                                dataType: "text",
                                cache: false,
                                success: function (data) {
                                }
                            });
                        }
                    });
                    $('#delete').click(function () {
                        var product_id_in = "#PD_id" + val_id;
                        var product_id = $(product_id_in).val();
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('index.php/BasketController/remove_item') ?>",
                            data: {
                                product_id: product_id
                            },
                            dataType: "json",
                            cache: false,
                            success: function (data) {
                                if (data.massage1 == "delete") {
                                    location.reload();
                                }
                                $("#basket").text(data.massage2);
                            }
                        });
                    });
                    $('#delete2').click(function () {
                        var product_id_in = "#PD_id" + val_id;
                        var product_id = $(product_id_in).val();
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('index.php/BasketController/remove_item') ?>",
                            data: {
                                product_id: product_id
                            },
                            dataType: "json",
                            cache: false,
                            success: function (data) {
                                if (data.massage1 == "delete") {
                                    location.reload();
                                }
                                $("#basket").text(data.massage2);
                            }
                        });
                    });
                });
            </script>


            <tr>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
            </tr>
            <tr>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
                <th class="col-md-1">
                </th>
            </tr>
        </table>
        <div align="right">
            <a class="btn btn-info" href="<?php echo base_url('receiver')?>">รับของบริจาคเพิ่ม</a>
            <a class="btn btn-success" href="<?php echo base_url('welcome')?>">ยืนยันการรับบริจาค</a>
            <br><br>
        </div>
        <div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- footer -->
<?php include "footer.php" ?>
</body>
</html>