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
    <div class="row">
        <div class="col-md-12">
            <br>
            <div class="thumbnail" style="padding: 30px 100px;">
                <span class="topic">รายละเอียดของบริจาค</span>
                <div class="row">

                    <div class="col-md-5">
                        <br><br>
                        <div class="thumbnail" style="margin-left: 20px">
                            <img src="<?php echo base_url('uploads/donateImages/' . $product['img_path']) ?>"
                                 alt="...">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="caption">
                            <div class="row">
                                <br>
                                <div class="panel panel-default" style="margin-right: 20px;margin-top: 10px">
                                    <div class="panel-heading"><b>ชื่อของบริจาค
                                            : <?php echo $product['product_name'] ?></b></div>
                                    <table class="table">
                                        <tr>
                                            <th class="col-lg-4">สี :</th>
                                </div>
                                <td><?php echo $product['product_color'] ?></td>
                                </tr>
                                <tr>
                                    <th>จำนวน :</th>
                                    <td><?php echo $product['product_number'] ?></td>
                                </tr>
                                <tr>
                                    <th>น้ำหนัก :</th>
                                    <td> <?php echo $product['weight_number'] . "  " . $product['weight_type'] ?></td>
                                </tr>
                                <tr>
                                    <th>ขนาด :</th>
                                    <td><?php echo $product['size_width'] . " x " . $product['size_long'] . "  " . $product['size_type'] ?></td>
                                </tr>
                                <tr>
                                    <th>รายละเเอียด :</th>
                                    <td><?php echo $product['product_detail'] ?></td>
                                </tr>
                                <tr>
                                    <th>ประเภทสินค้า :</th>
                                    <td><?php echo $product['product_type'] ?></td>
                                </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            จำนวน : <input type="number" name="count" style="width: 5em" min="1"
                                           max="<?php echo $product['product_number'] ?>"
                                           value="<?php
                                           if($basket = $this->session->basket) {
                                               $basket = $this->session->basket;
                                               $count = null;
                                               if ($_GET['id']) {
                                                   $id = $_GET['id'];
                                                   foreach ($basket as $itemfor) {
                                                       if ($itemfor['product_id'] == $id) {
                                                           $count = $itemfor['count'];
                                                       }
                                                   }
                                               }
                                               if ($count != null) {
                                                   echo $count;
                                               } else {
                                                   echo $product['product_number'];
                                               }
                                           }else{
                                               echo $product['product_number'];
                                           }

                                           ?>" <?php if ($product['product_number'] == 0) echo "disabled" ?>>
                            / <?php echo $product['product_number'] ?> ชิ้น
                            <input type="hidden" id="img" value="<?php echo $product['img_path'] ?>">
                            <input type="hidden" name="product_name" value="<?php echo $product['product_name'] ?>">
                            <input type="hidden" name="product_id" value="<?php echo $product['product_id'] ?>">
                            <br><br>
                            <button id="bt-submit" class="btn btn-success"
                                    type="submit" <?php if ($product['product_number'] == 0) echo "disabled" ?>>
                                รับบริจาค
                            </button>
                            <!--                                <a class="btn btn-warning" href="receiver">ย้อนกลับ</a>-->

                            <script>
                                $(document).ready(function () {
                                    $("input[name='count']").keyup(function () {
                                        var maxi = $("input[name='count']").attr("max");
                                        var min = $("input[name='count']").attr("min");
                                        var value = $("input[name='count']").val();
                                        if (parseInt(value) > maxi) {
                                            $("input[name='count']").val(maxi);
                                        } else if (value < min) {
                                            $("input[name='count']").val(min);
                                        } else {
                                            $("input[name='count']").val(value);
                                        }
                                    });
                                    $("#bt-submit").click(function () {
                                        $("#status").addClass("visi");
                                        var product_name = $("input[name='product_name']").val();
                                        var product_id = $("input[name='product_id']").val();
                                        var product_count = $("input[name='count']").val();
                                        var product_img = $("#img").val();
                                        var max = "<?php echo $product['product_number'] ?>";
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo base_url('index.php/BasketController/ajax_add_basket') ?>",
                                            data: {
                                                product_name: product_name,
                                                product_id: product_id,
                                                count: product_count,
                                                img: product_img,
                                                max: max
                                            },
                                            dataType: "json",
                                            cache: false,
                                            success: function (data) {
                                                if (data.message1 == 'success') {
                                                    $("#status").removeClass("visi");
                                                    $("#textstatus").text("เพิ่มของบริจาคสำเร็จ");
                                                    $("#btn_basket").trigger("click");
                                                } else if (data.message1 == 'fall') {
                                                    $("#status").removeClass("visi");
                                                    $("#statusbox").removeClass("alert-success");
                                                    $("#statusbox").addClass("alert-warning");
                                                    $("#textstatus").text("แก้ไขจำนวนเรียบร้อยแล้ว");
                                                    $("#btn_basket").trigger("click");
                                                }
                                                $("#basket").text(data.message2);
                                            }
                                        });
                                    });

                                });
                            </script>
                        </div>

                    </div>

                </div>

                <div class="row <?php if ($product['product_number'] != 0) {
                    echo "visi";
                } ?>" align="center" id="status">
                    <div class="alert <?php if ($product['product_number'] != 0) {
                        echo "alert-success";
                    } else {
                        echo "alert-danger";
                    } ?> col-md-6 col-md-offset-3" role="alert" id="statusbox">
                        <span id="textstatus"><?php if ($product['product_number'] == 0) {
                                echo "ของบริจาคหมด!!";
                            } ?></span>
                    </div>
                </div>
            </div>
            <div><br></div>


        </div>
        <div class="thumbnail" style="padding: 30px 100px;">
            <span class="topic topic-top">ของบริจาคที่เกียวข้อง</span><br>
            <div class="row">
                <?php foreach ($product_connect as $con): ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="<?php echo base_url('uploads/donateImages/' . $con['img_path']) ?>" alt="...">
                            <div class="caption">
                                <h3><?php echo $con['product_name'] ?></h3>
                                <p><?php echo $con['product_detail'] ?></p>
                                <p>
                                    <a href="<?php echo base_url('index.php/productDetailController?id=' . $con['product_id']) ?>"
                                       class="btn btn-primary" role="button">รายละเอียด</a></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <div><br></div>


        </div>
    </div>
</div>
</div>
<!-- footer -->
<?php include "footer.php" ?>
</body>
</html>