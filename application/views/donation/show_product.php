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
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <br>
        <div class="thumbnail">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <br><br><br>
                    <div class="thumbnail">

                        <?php foreach ($rs->result_array() as $row): ?>
                        <img src="<?php echo base_url('uploads/donateImages/'.$row['img_path']) ?>"
                             width="200" height="300" alt="...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="caption">
                        <div class="row">

                            <?php $_SESSION['img_path'] = $row['img_path'];
                            $_SESSION['product_id'] = $row['product_id'];?>
                            <br>
                            <h2>ชื่อของบริจาค : <?php echo $row['product_name']; ?></h2>
                            <h5>
                                <p>สี : <?php echo $row['product_color'] ?></p>
                                <p>จำนวน : <?php echo $row['product_number'] ?> ชิ้น</p>
                                <p>น้ำหนัก : <?php echo $row['weight_number'] . "  " . $row['weight_type'] ?></p>
                                <p>ขนาด : <?php echo $row['size_width'] . " x " . $row['size_long'] . "  " . $row['size_type'] ?> </p>
                                <p>รายละเเอียด : <?php echo $row['product_detail'] ?></p>
                                <p>ประเภทสินค้า : <?php echo $row['product_type'] ?></p>

                            </h5>
                        </div>
                        <?php endforeach; ?>

                        <div class="row">
                            <br><br><br><br><br><br><br>
                            <button type="submit" id="bt" name="but_edit" class="btn btn-warning" onclick="location.href='<?php echo site_url('DonateController/show_edit/'.$row['product_id']);?>'" >
                                แก้ไข
                            </button>
                            <button type="submit" id="bt" name="but_donate" class="btn btn-primary" onclick="location.href='<?php echo site_url('donor');?>'" >
                                บริจาคเพิ่ม
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div><br></div>
        </div>
    </div>
</div>


<!-- footer -->
<?php $this->load->view('footer'); ?>
</body>
</html>
