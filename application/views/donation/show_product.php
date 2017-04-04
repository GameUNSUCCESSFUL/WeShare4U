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
                                    ทำการบริจาคเสร็จสิ้น</h2>

                                <br><br><br>

                                <?php foreach ($rs->result_array() as $row): ?>

                                <h3><?php echo $row['product_id']; ?></h3>
                                <h3><?php echo $row['product_name']; ?></h3>
                                <h3><?php echo $row['product_number']; ?></h3>
                                <h3><?php echo $row['product_color']; ?></h3>
                                <h3><?php echo $row['weight_number'] . " " . $row['weight_type']; ?></h3>
                                <h3><?php echo $row['size_width'] . "x" . $row['size_long'] . " " . $row['size_type']; ?></h3>
                                <h3><?php echo $row['product_type']; ?></h3>
                                <h3><?php echo $row['product_detail']; ?></h3>
                                <img src="<?php echo base_url('uploads/donateImages/') . $row['img_path']; ?>"
                                     width="200" height="300">

                                <?php endforeach; ?>

                                <button type="submit" id="bt" name="but_donate" class="btn btn-warning" onclick="location.href='<?php echo site_url('DonateController/show_edit/'.$row['product_id']);?>'" >
                                    แก้ไข
                                </button>
                                <button type="submit" id="bt" name="but_donate" class="btn btn-primary ">
                                    บริจาคเพิ่มเติม
                                </button>
                            </div>
                            <!--/.Main column-->
                        </div>
                    </div>
                    <!--/.Main layout-->
                </div>
            </div>
        </ul>
    </div>
</div>

<!-- footer -->
<?php $this->load->view('includecss'); ?>
</body>
</html>
