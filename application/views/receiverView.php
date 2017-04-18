<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Item Grid</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "includecss.php" ?>
</head>
<body>
<?php include "navbarlogin.php" ?>

<br>

<div class="container">

    <div class="thumbnail col-md-12" style="padding: 20px 100px">
        <br>
        <span class="topic">รายชื่อของบริจาค</span>
        <div class="featured-block">

            <div align="right">
                <form class="form-inline"
                      action="<?php echo base_url() . 'index.php/ReceiverController/search_item'; ?>"
                      method="get">
                    <input class="form-control" type="text" name="keyword" id="keyword" value=""
                           placeholder="ค้นหา...">
                    <input class="btn btn-primary btn-sm" type="submit" name="filter" value="ค้นหา">
                    <br>
                    <input type="radio" name="searchselect" value="selectname" checked>ชื่อ
                    <input type="radio" name="searchselect" value="selecttype">ชนิด
                    <input type="radio" name="searchselect" value="selectkey">คำหลัก
                </form>
                <br>
            </div>

            <div class="row">
                <?php $x = 0;
                foreach ($dbquery as $r): ?>
                    <div class="col-md-3">
                        <div class="block">
                            <div class="thumbnail">
                                <img src="<?php echo base_url('uploads/donateImages/' . $r['img_path']) ?>"
                                     alt="...">

                                <div class="caption">
                                    <h1 align="center"> <?php echo $r['product_name'] ?> </h1>
                                    <?php if($page==1 && $x <5){ ?>
                                    <span class="label label-danger">ใหม่!!</span>
                                    <?php } ?>
                                    <h4> <?php echo $r['product_type'] ?></h4>
                                    <h8> <?php echo $r['timestamp'] ?></h8>
                                    <div align="right">

                                        <a style="color: #0000FF" id="<?php echo $x = $x + 1; ?>"
                                           href="<?php echo base_url('index.php/productDetailController?id=' . $r['product_id']) ?>">รายละเอียดเพิ่มเติม...</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

        <div align="center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li <?php if($page==1) echo "class='disabled'"?>>

                        <a
                        <?php if($page!=1) {
                            if (!isset($item)) {
                                echo "href='".base_url('index.php/ReceiverController?page=' . ($page - 1));
                            } else {
                                echo "href='".base_url('index.php/ReceiverController/search_item?page=' . ($page - 1) . '&keyword=' . $searchitem . '&searchselect=' . $searchselect);
                            }
                        }
                        ?>'>
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php for ($i = 1; $i <= $count; $i++) { ?>
                        <li <?php if ($i == $page) echo "class='active'" ?>><a href="
            <?php if (!isset($item)) {
                                echo base_url('index.php/ReceiverController?page=' . $i);
                            } else {
                                echo base_url('index.php/ReceiverController/search_item?page=' . $i . '&keyword=' . $searchitem . '&searchselect=' . $searchselect);
                            }
                            ?>"><?php echo $i ?></a></li>
                    <?php } ?>
                    <li <?php if($page==$count) echo "class='disabled'"?>>
                        <a
                        <?php
                        if($page!=$count) {
                            if (!isset($item)) {
                                echo "href='" . base_url('index.php/ReceiverController?page=' . ($page + 1));
                            } else {
                                echo "href='" . base_url('index.php/ReceiverController/search_item?page=' . ($page + 1) . '&keyword=' . $searchitem . '&searchselect=' . $searchselect);
                            }
                        }
                        ?>' aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</div>
<br>

<?php include "footer.php" ?>

</body>
