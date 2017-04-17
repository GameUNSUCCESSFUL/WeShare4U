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
                 <ul class="nav navbar-nav none">
                    <li class="padding2">
                        <div align="right">
                            ยินดีต้อนรับ <a href="#"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']?></a><br>
                            <a href="<?php echo base_url('index.php/logout')?>">ออกจากระบบ</a>
                        </div>
                    </li>
                     <li class="">
                         <div align="right">
                             <div class="dropdown">
                                 <button class="btn btn-success dropdown-toggle " type="button" data-toggle="dropdown" id="btn_basket">
                                     <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                     <span class="badge" id="basket">
                                     <?php
                                     if ($this->session->basket) {
                                         $basrket = $this->session->basket;
                                         echo count($basrket);
                                     } else {
                                         echo 0;
                                     }
                                     ?>
                                 </span>
                                 </button>
                                 <ul class="dropdown-menu pull-right" style="width: 350px">
                                     <div class="panel panel-default">
                                         <table class="table" id="output">
                                         </table>
                                         <script>
                                             $(document).ready(function (){
                                                 $("#btn_basket").click(function () {
                                                     $.ajax({
                                                         url: "<?php echo base_url('BasketController/get_basket') ?>",
                                                         dataType: "text",
                                                         cache: false,
                                                         success: function (data) {
                                                             $("#output").html(data);
                                                         }
                                                     });
                                                 });
                                             });
                                         </script>
                                     </div>
                                     <div align="center"><a class="btn btn-success  btn-sm">ยืนยันการรับบริจาค</a></div>
                                 </ul>
                             </div>
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