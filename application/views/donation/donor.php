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
                                    กรอกข้อมูลสิ่งของที่บริจาค</h2>

                                <br><br><br>

                                <?php echo form_open_multipart("DonateController/add"); ?>
                                <table align="center" class="table">
                                    <tbody>
                                    <tr class="active">
                                        <td><h4>ชื่อของที่บริจาค :</h4></td>
                                        <td><input type="text" class="form-control" id="product_name" name="product_name"
                                                   placeholder="ชื่อของบริจาค"></td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td><h4>สี :</h4></td>
                                        <td><input type="text" class="form-control" id="product_color" name="product_color" placeholder="แดง"></td>
                                        <td></td>
                                    </tr>

                                    <tr class="active">
                                        <td><h4>จำนวน :</h4></td>
                                        <td><input type="number" class="form-control" id="product_number" name="product_number" placeholder="6">
                                        </td>
                                        <td>ชิ้น</td>
                                    </tr>

                                    <tr class="active">
                                        <td><h4>น้ำหนัก :</h4></td>
                                        <td><input type="number" class="form-control" id="weight_number" name="weight_number"
                                                   OnKeyPress="return chkNumber(this)" placeholder="20" required></td>
                                        <td><select class="form-control" id="weight_type" name="weight_type">
                                                <option value="grams" selected>กรัม</option>
                                                <option value="kilograms">กิโลกรัม</option>
                                            </select></td>
                                    </tr>

                                    <tr class="active">
                                        <td><h4>ขนาด :</h4></td>
                                        <td><input type="number" id="size_width" name="size_width" class="form-control" placeholder="กว้าง"
                                                   OnKeyPress="return chkNumber(this)" required></td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td colspan="" rowspan="" headers=""></td>
                                        <td><input type="number" id="size_long" name="size_long" class="form-control" placeholder="ยาว"
                                                   OnKeyPress="return chkNumber(this)" required></td>
                                        <td>
                                            <select class="form-control" id="size_type" name="size_type">
                                                <option value="Centimeters" selected>เซนติเมตร</option>
                                                <option value="meters">เมตร</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr class="active">
                                        <td><h4>รายละเอียด :</h4></td>
                                        <td><textarea type="text" class="form-control" placeholder="รายละเอียดเพิ่มเติม" id="product_detail" name="product_detail" ></textarea></td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td><h4>ประเภทของเล่น :</h4></td>
                                        <td><select class="form-control" name="product_type">
                                                <option value="open" selected>ของเล่นปลายเปิด</option>
                                                <option value="objective">ของเล่นตามจุดประสงค์</option>
                                                <option value="role">ของเล่นส่งเสริมบทบาทสมมุติ</option>
                                                <option value="skill">ของเล่นเสริมทักษะร่างกาย</option>
                                                <option value="art">ของเล่นศิลปะ</option>
                                            </select></td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td><h4>เลือกรูป :</h4></td>
                                        <td><input type="file" class="form-control" name="product_image" size="30" onchange='openFile()' multiple
                                                   required></td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td></td>
                                        <td> <img id='output' height=500 width=400 /></td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td></td>
                                        <td>
                                            <button type="submit" id="bt" name="but_donate" class="btn btn-primary ">
                                                บริจาค
                                            </button>
                                            <input type="reset" name="reset" class="btn btn-danger"
                                                   value="Clear"><span id="result" style="color:red"></span></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>

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