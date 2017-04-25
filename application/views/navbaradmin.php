<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="navbar-container" id="navbar-container">
        <!-- /section:basics/sidebar.mobile.toggle -->
        <div class="navbar-header pull-left">
            <!-- #section:basics/navbar.layout.brand -->
            <a href="#" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    <div>WeShared4U</div>
                </small>
            </a>

        </div>
        <!-- #section:basics/navbar.dropdown -->
        <div class="collapse navbar-collapse pull-right" role="navigation">
            <ul class="nav navbar-nav none">
                <li class="padding2">
                    <div align="right">
                        ยินดีต้อนรับ <a href="#"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']?></a><br>
                        <a href="<?php echo base_url('index.php/logout')?>">ออกจากระบบ</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url('AdminController') ?>">หน้าหลัก</a></li>
                <li><a href="<?php echo base_url('AdminController/user_management') ?>">จัดการผู้ใช้งาน</a></li>

            </ul>
        </div>


        <!-- #section:basics/navbar.dropdown -->
        <!--  <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li>

                    <button type="button" name="but-login" class="btn btn-info" data-toggle="modal"
                            data-target=".bs-example-modal-lg">Login
                    </button>
                    <br>
                    reguster
                </li>

                <button type="button" class="btn btn-success" onclick="location.href='<?php echo base_url(); ?>register'">
                    Register
                </button>
            </ul>
        </div>
        -->
    </div>
</div>