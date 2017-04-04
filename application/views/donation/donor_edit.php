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
<?php $this->load->view('navbar'); ?>

<!--input-->
<div class="center">
    <div class="navbar-buttons">
        <ul class="nav ace-nav">
            <div class="container">
                <div class="row">

                    <!--Sidebar-->

                    <!--/.Sidebar-->

                    <!--Main column-->
                    <div class="col-lg-12">

                        <!--First row-->
                        <div class="row">
                            <div class="col-lg-12">


                                <br>

                                <h2 align="center" class="h2-responsive" style="color: white">
                                    แก้ไขข้อมูลการบริจาค</h2>

                                <br><br><br>
                                <?php echo form_open_multipart("DonateController/do_edit"); ?>
                                <?php foreach ($rs->result_array() as $row): ?>
                                    <table align="center" class="table">
                                        <tbody>
                                        <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>">
                                        <tr class="active">
                                            <td><h4>ชื่อของที่บริจาค :</h4></td>
                                            <td><input type="text" class="form-control" id="product_name" name="product_name" placeholder="ชื่อของบริจาค" value="<?php echo $row['product_name']; ?>"></td>
                                            <td></td>
                                        </tr>
                                        <tr class="active">
                                            <td><h4>สี :</h4></td>
                                            <td><input type="text" class="form-control" id="product_color" name="product_color" placeholder="แดง" value="<?php echo $row['product_color']; ?>"></td>
                                            <td></td>
                                        </tr>

                                        <tr class="active">
                                            <td><h4>จำนวน :</h4></td>
                                            <td><input type="number" class="form-control" id="product_number" name="product_number" placeholder="6" value="<?php echo $row['product_number']; ?>">
                                            </td>
                                            <td>ชิ้น</td>
                                        </tr>

                                        <tr class="active">
                                            <td><h4>น้ำหนัก :</h4></td>
                                            <td><input type="number" class="form-control" id="weight_number" name="weight_number" placeholder="20" value="<?php echo $row['weight_number']?>"></td>
                                            <td><select class="form-control" id="weight_type" name="weight_type" >
                                                    <option value="grams" <?php if ($row['weight_type'] === 'grams') echo ' selected="selected"' ?>>กรัม</option>
                                                    <option value="kilograms" <?php if ($row['weight_type'] === 'kilograms') echo ' selected="selected"' ?>>กิโลกรัม</option>
                                                </select></td>
                                        </tr>

                                        <tr class="active">
                                            <td><h4>ขนาด :</h4></td>
                                            <td><input type="number" id="size_width" name="size_width" class="form-control"
                                                       placeholder="กว้าง" value="<?php echo $row['size_width']?>"></td>
                                            <td></td>
                                        </tr>
                                        <tr class="active">
                                            <td colspan="" rowspan="" headers=""></td>
                                            <td><input type="number" id="size_long" name="size_long" class="form-control"
                                                       placeholder="ยาว" value="<?php echo $row['size_long']?>"></td>
                                            <td>
                                                <select class="form-control" id="size_type" name="size_type" >
                                                    <option value="Centimeters" <?php if ($row['size_type'] === 'Centimeters') echo ' selected="selected"' ?> >เซนติเมตร</option>
                                                    <option value="meters" <?php if ($row['size_type'] === 'meters') echo ' selected="selected"' ?> >เมตร</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr class="active">
                                            <td><h4>รายละเอียด :</h4></td>
                                            <td><textarea type="text" class="form-control" placeholder="รายละเอียดเพิ่มเติม"
                                                          id="product_detail" name="product_detail" ><?php echo $row['product_detail']?></textarea></td>
                                            <td></td>
                                        </tr>
                                        <tr class="active">
                                            <td><h4>ประเภทของเล่น :</h4></td>
                                            <td><select class="form-control" name="product_type">
                                                    <option value="open" <?php if ($row['product_type'] === 'open') echo ' selected="selected"' ?> >ของเล่นปลายเปิด</option>
                                                    <option value="objective" <?php if ($row['product_type'] === 'objective') echo ' selected="selected"' ?> >ของเล่นตามจุดประสงค์</option>
                                                    <option value="role" <?php if ($row['product_type'] === 'role') echo ' selected="selected"' ?> >ของเล่นส่งเสริมบทบาทสมมุติ</option>
                                                    <option value="skill" <?php if ($row['product_type'] === 'skill') echo ' selected="selected"' ?> >ของเล่นเสริมทักษะร่างกาย</option>
                                                    <option value="art" <?php if ($row['product_type'] === 'art') echo ' selected="selected"' ?> >ของเล่นศิลปะ</option>
                                                </select></td>
                                            <td></td>
                                        </tr>
                                        <tr class="active">
                                            <td><h4>เลือกรูป :</h4></td>
                                            <td><input type="file" class="form-control" name="product_image" size="30"
                                                       onchange='openFile()'  multiple></td>
                                            <td></td>
                                        </tr>
                                        <tr class="active">
                                            <td></td>
                                            <td><img src="<?php echo base_url('uploads/donateImages/').$row['img_path']; ?>" id='output' height='500' width='400'></td>
                                            <td></td>
                                        </tr>
                                        <tr class="active">
                                            <td></td>
                                            <td>
                                                <button id="bt" name="but_donate" class="btn">
                                                    ของบริจาค
                                                </button>
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
                    <!--/.Main layout-->
                </div>
        </ul>
    </div>
</div>

<!-- footer -->
<?php $this->load->view('includecss'); ?>
</body>
</html>