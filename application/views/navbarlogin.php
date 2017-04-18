<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <!-- /section:basics/sidebar.mobile.toggle -->
        <div class="navbar-header pull-left">
            <!-- #section:basics/navbar.layout.brand -->
            <a href="<?php echo base_url();?>" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    <div>WeShared4U</div>
                </small>
            </a>

        </div>
        <!-- #section:basics/navbar.dropdown -->
        <div class="collapse navbar-collapse pull-right" role="navigation">
            <?php if (isset($_SESSION['email'])) : ?>
                 <ul>
                    <li class="padding2">
                        <div align="right">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            ยินดีต้อนรับ <a href="#"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']?></a><br>
                            <a href="<?php echo base_url('index.php/logout')?>">ออกจากระบบ</a>
                        </div>
                    </li>
                </ul>
            <?php else: ?>
                <ul>
                    <li class="padding">
                        <button type="button" name="but-login" class="btn padding" data-toggle="modal"
                                data-target=".bs-example-modal-lg">เข้าสู่ระบบ</button>
                        <div align="center"><a href="<?php echo base_url('index.php/register')?>" class="padding">สมัครสมาชิก</a></div>
                    </li>
                </ul>
            <?php endif; ?>
        </div>

        <div class="collapse navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li><a href="#">หน้าหลัก</a></li>
                <li><a href="#">สถิติการบริจาค</a></li>
                <li><a href="#">คำถามที่พบบ่อย</a></li>
                <li><a href="#">เกี่ยวกับเรา</a></li>

            </ul>
        </div >

    </div>
</div>