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
<div class="container-fluid">
    <?php include "navbar.php" ?>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div id="sidebar" class="sidebar  responsive" data-sidebar="true" data-sidebar-scroll="true"
                 data-sidebar-hover="true">


                <ul class="nav nav-list">
                    <li class="active">
                        <a href="index.html">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> .................. </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text">
								..................
							</span>

                        </a>

                        <b class="arrow"></b>
                    </li>


                    <li class="">
                        <a href="gallery.html">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text"> .................. </span>
                        </a>

                        <b class="arrow"></b>
                    </li>


                </ul><!-- /.nav-list -->

            </div>
        </div>
        <div class="col-md-9">
            <br>
            <div class="thumbnail">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <br><br><br>
                        <div class="thumbnail">
                            <img src="<?php echo base_url('uploads/donateImages/'.$img_path) ?>"
                                 alt="...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="caption">
                            <div class="row">
                                <br>
                                <h2>ชื่อของบริจาค : <?php echo $product_name ?></h2>
                                <h5><p>ขนาด : <?php echo $product_size ?></p>
                                <p>น้ำหนัก : <?php echo $product_weight ?></p>
                                <p>จำนวน : <?php echo $product_number ?></p>
                                <p>รายละเเอียด : <?php echo $product_detail ?></p></h5>
                            </div>

                            <div class="row">
                                <br><br><br><br><br><br><br>
                            <button class="btn btn-success">รับบริจาค</button>
                            <button class="btn btn-warning">ย้อนกลับ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div><br></div>


            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- footer -->
    <?php include "footer.php" ?>
</div>
</body>
</html>