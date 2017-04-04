<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>WeShare4U</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view('includecss'); ?>

</head>
<body class="bg">
<!-- nav -->
<?php $this->load->view('navbarlogin'); ?>

<!--input-->

<!--Main column-->
<div class="row">
<div class="col-lg-2"></div>
<div class="col-lg-8">

    <!--First row-->
    <div class="row">
        <div class="col-lg-12">
            <h2 align="center" class="h2-responsive" style="color: white">
                แก้ไขข้อมูลการบริจาค</h2>

            <br>
            <?php echo form_open_multipart("DonateController/do_edit"); ?>
            <?php foreach ($rs->result_array() as $row): ?>
                <table align="center" class="table">
                    <tbody>
                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>">
                    <tr class="active">
                        <td><h4>ชื่อของที่บริจาค :</h4></td>
                        <td><input type="text" class="form-control" id="product_name" name="product_name"
                                   placeholder="ชื่อของบริจาค" value="<?php echo $row['product_name']; ?>"></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td><h4>สี :</h4></td>
                        <td><input type="text" class="form-control" id="product_color" name="product_color"
                                   placeholder="แดง" value="<?php echo $row['product_color']; ?>"></td>
                        <td></td>
                    </tr>

                    <tr class="active">
                        <td><h4>จำนวน :</h4></td>
                        <td><input type="number" class="form-control" id="product_number" name="product_number"
                                   placeholder="6" value="<?php echo $row['product_number']; ?>">
                        </td>
                        <td>ชิ้น</td>
                    </tr>

                    <tr class="active">
                        <td><h4>น้ำหนัก :</h4></td>
                        <td><input type="number" class="form-control" id="weight_number" name="weight_number"
                                   placeholder="20" value="<?php echo $row['weight_number'] ?>"></td>
                        <td><select class="form-control" id="weight_type" name="weight_type">
                                <option value="กรัม" <?php if ($row['weight_type'] === 'กรัม') echo ' selected="selected"' ?>>
                                    กรัม
                                </option>
                                <option value="กิโลกรัม" <?php if ($row['weight_type'] === 'กิโลกรัม') echo ' selected="selected"' ?>>
                                    กิโลกรัม
                                </option>
                            </select></td>
                    </tr>

                    <tr class="active">
                        <td><h4>ขนาด :</h4></td>
                        <td><input type="number" id="size_width" name="size_width" class="form-control"
                                   placeholder="กว้าง" value="<?php echo $row['size_width'] ?>"></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td colspan="" rowspan="" headers=""></td>
                        <td><input type="number" id="size_long" name="size_long" class="form-control"
                                   placeholder="ยาว" value="<?php echo $row['size_long'] ?>"></td>
                        <td>
                            <select class="form-control" id="size_type" name="size_type">
                                <option value="เซนติเมตร" <?php if ($row['size_type'] === 'เซนติเมตร') echo ' selected="selected"' ?> >
                                    เซนติเมตร
                                </option>
                                <option value="เมตร" <?php if ($row['size_type'] === 'เมตร') echo ' selected="selected"' ?> >
                                    เมตร
                                </option>
                            </select>
                        </td>
                    </tr>

                    <tr class="active">
                        <td><h4>รายละเอียด :</h4></td>
                        <td><textarea type="text" class="form-control" placeholder="รายละเอียดเพิ่มเติม"
                                      id="product_detail"
                                      name="product_detail"><?php echo $row['product_detail'] ?></textarea></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td><h4>ประเภทของเล่น :</h4></td>
                        <td>
                            <select class="form-control" name="product_type">
                                    <option value="รถของเล่น" <?php if ($row['product_type'] === 'รถของเล่น') echo ' selected="selected"' ?> >รถของเล่น</option>
                                    <option value="ตุ๊กตา" <?php if ($row['product_type'] === 'ตุ๊กตา') echo ' selected="selected"' ?> >ตุ๊กตา</option>
                                    <option value="เครื่องดนตรีของเล่น" <?php if ($row['product_type'] === 'เครื่องดนตรีของเล่น') echo ' selected="selected"' ?> >เครื่องดนตรีของเล่น</option>
                                    <option value="ตัวต่อเลโก้" <?php if ($row['product_type'] === 'ตัวต่อเลโก้') echo ' selected="selected"' ?> >ตัวต่อเลโก้</option>
                                    <option value="หุ่นยนต์" <?php if ($row['product_type'] === 'หุ่นยนต์') echo ' selected="selected"' ?> >หุ่นยนต์</option>
                                    <option value="เกมปริศนา" <?php if ($row['product_type'] === 'เกมปริศนา') echo ' selected="selected"' ?> >เกมปริศนา</option>
                                    <option value="ลูกบอล" <?php if ($row['product_type'] === 'ลูกบอล') echo ' selected="selected"' ?> >ลูกบอล</option>
                                    <option value="ของเล่นที่มีเสียงดนตรี" <?php if ($row['product_type'] === 'ของเล่นที่มีเสียงดนตรี') echo ' selected="selected"' ?> >ของเล่นที่มีเสียงดนตรี</option>
                                    <option value="ของเล่นลากจูง" <?php if ($row['product_type'] === 'ของเล่นลากจูง') echo ' selected="selected"' ?> >ของเล่นลากจูง</option>
                                    <option value="ของเล่นเขย่า" <?php if ($row['product_type'] === 'ของเล่นเขย่า') echo ' selected="selected"' ?> >ของเล่นเขย่า</option>
                                    <option value="ของเล่นไม้" <?php if ($row['product_type'] === 'ของเล่นไม้') echo ' selected="selected"' ?> >ของเล่นไม้</option>
                                    <option value="ของเล่นเครื่องครัว" <?php if ($row['product_type'] === 'ของเล่นเครื่องครัว') echo ' selected="selected"' ?> >ของเล่นเครื่องครัว</option>
                            </select>
                        </td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td><h4>เลือกรูป :</h4></td>
                        <td><input type="file" class="form-control" name="product_image" size="30"
                                   onchange='openFile()' multiple></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td></td>
                        <td><img src="<?php echo base_url('uploads/donateImages/') . $row['img_path']; ?>" id='output'
                                 height='300' width='300'></td>
                        <td></td>
                    </tr>
                    <tr class="active">
                        <td></td>
                        <td>
<!--                            <button id="bt" name="but_donate" class="btn">-->
<!--                                ของบริจาค-->
<!--                            </button>-->
                            <button type="submit" id="bt" name="but_donate" class="btn btn-warning">
                                แก้ไข
                            </button>
                        </td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            <?php endforeach; ?>
            <!--/.First row-->
            <?php echo form_close(); ?>
        </div>
        <!--/.Main column-->
    </div>
</div>
</div>

<!-- footer -->
<?php $this->load->view('footer'); ?>
</body>
</html>