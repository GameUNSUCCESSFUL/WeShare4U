<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        ul.nav li.dropdown:hover > ul.dropdown-menu{
            display: block;
            margin: 0;
        }
    </style>

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
                                         <table class="table" id="table_output">
                                         </table>
                                         <script>
                                             $(document).ready(function (){
                                                 $("#btn_basket").click(function () {
                                                     $.ajax({
                                                         url: "<?php echo base_url('index.php/BasketController/get_basket') ?>",
                                                         dataType: "text",
                                                         cache: false,
                                                         success: function (data) {
                                                             $("#table_output").html(data);
                                                         }
                                                     });
                                                 });
                                             });
                                         </script>
                                     </div>
                                     <div align="center"><button onclick="location.href='<?php echo base_url('index.php/BasketController') ?>'" id="view_basket"  class="btn btn-success  btn-sm">ตะกร้าสินค้า</button></div>
                                 </ul>
                             </div>
                         </div>
                     </li>
                     <li class="padding2">
                         <div align="right">
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
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">หมวดหมู่<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('index.php/receiverController/index')?>">จัดเรียงตามวันที่</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">จัดเรียงตามประเภท<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a value="รถของเล่น" href="<?php echo base_url('index.php/receiverController/search_item?keyword=รถของเล่น&searchselect=selecttype')?>" >รถของเล่น</a></li>
                                <li><a value="ตุ๊กตา" href="<?php echo base_url('index.php/receiverController/search_item?keyword=ตุ๊กตา&searchselect=selecttype')?>">ตุ๊กตา</a></li>
                                <li><a value="เครื่องดนตรีของเล่น" href="<?php echo base_url('index.php/receiverController/search_item?keyword=เครื่องดนตรีของเล่น&searchselect=selecttype')?>">เครื่องดนตรีของเล่น</a></li>
                                <li><a value="ตัวต่อเลโก้" href="<?php echo base_url('index.php/receiverController/search_item?keyword=ตัวต่อเลโก้&searchselect=selecttype')?>">ตัวต่อเลโก้</a></li>
                                <li><a value="หุ่นยนต์" href="<?php echo base_url('index.php/receiverController/search_item?keyword=หุ่นยนต์&searchselect=selecttype')?>">หุ่นยนต์</a></li>
                                <li><a value="เกมปริศนา" href="<?php echo base_url('index.php/receiverController/search_item?keyword=เกมปริศนา&searchselect=selecttype')?>">เกมปริศนา</a></li>
                                <li><a value="ลูกบอล" href="<?php echo base_url('index.php/receiverController/search_item?keyword=ลูกบอล&searchselect=selecttype')?>">ลูกบอล</a></li>
                                <li><a value="ของเล่นที่มีเสียงดนตรี" href="<?php echo base_url('index.php/receiverController/search_item?keyword=ของเล่นที่มีเสียงดนตรี&searchselect=selecttype')?>">ของเล่นที่มีเสียงดนตรี</a></li>
                                <li><a value="ของเล่นลากจูง" href="<?php echo base_url('index.php/receiverController/search_item?keyword=ของเล่นลากจูง&searchselect=selecttype')?>">ของเล่นลากจูง</a></li>
                                <li><a value="ของเล่นเขย่า" href="<?php echo base_url('index.php/receiverController/search_item?keyword=ของเล่นเขย่า&searchselect=selecttype')?>">ของเล่นเขย่า</a></li>
                                <li><a value="ของเล่นไม้" href="<?php echo base_url('index.php/receiverController/search_item?keyword=ของเล่นไม้&searchselect=selecttype')?>">ของเล่นไม้</a></li>
                                <li><a value="ของเล่นเครื่องครัว" href="<?php echo base_url('index.php/receiverController/search_item?keyword=ของเล่นเครื่องครัว&searchselect=selecttype')?>">ของเล่นเครื่องครัว</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="#">เกี่ยวกับเรา</a></li>
            </ul>
        </div >

    </div>
</div>

    <!-- JCLogin ----------------------------------------------------------------------------------------------------------------->

<?php include "user/login/JCLogin.php"; ?>