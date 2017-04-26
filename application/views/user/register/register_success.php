<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>WeShare4U</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view('includecss'); ?>
</head>


<body>
<!-- bar -->
<?php $this->load->view('navbarlogin'); ?>
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


                        </div>

                        <div class="col-xs-6 col-md-4"></div>
                        <div class="col-xs-6 col-md-4"><center><h1>ยืนยันการสมัคร</h1><br><h2>โปรดรอการยืนยันจากทางระบบ</h2></center></div>
                        <div class="col-xs-6 col-md-4"></div>

                    </div>
                </div><!-- .row -->


            </div>

        </div>
    </div>
</div>
<!-- footer -->
<?php $this->load->view('footer'); ?>
</body>
</html>