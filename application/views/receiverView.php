<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Item Grid</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "includecss.php" ?>
</head>
<body>
<<<<<<< HEAD
<?php include "navbarlogin.php" ?>
<h1 align="center">Show Data</h1>
=======
<?php include "navbar.php" ?>
<h1 align="center">Donation List</h1>
>>>>>>> origin/Ju

<div class="container">
    <div class="featured-block">

        <div class="row" align="right">
            <form class="form-inline" action="<?php echo base_url() . 'index.php/ReceiverController/search_item'; ?>"
                  method="get">
                <input class="form-control" type="text" name="keyword" id="keyword" value="" placeholder="Search...">
                <input class="btn btn-default" type="submit" name="filter" value="Go">
                <br>
                <input type="radio" name="searchselect" value="selectname" checked>Name
                <input type="radio" name="searchselect" value="selecttype">Type
                <input type="radio" name="searchselect" value="selectkey">Keyword
            </form>
            <br>
        </div>

        <div class="row">
            <?php foreach ($dbquery as $r): ?>
                <div class="col-md-3">
                    <div class="block">
                        <div class="thumbnail">
                            <img src="<?php echo base_url('uploads/donateImages/' . $r['img_path']) ?>"
                                 alt="...">

                            <div class="caption">
                                <h1 align="center"> <?php echo $r['product_name'] ?> </h1>
                                <div align="right">
<<<<<<< HEAD
                                    <a style="color: #0000FF" href="<?php echo base_url('index.php/productDetailController?id='.$r['product_id'])?>">รายละเอียดเพิ่มเติม...</a>
=======
                                    <a class="btn"
                                       href="<?php echo base_url('productDetailController?id=' . $r['product_id']) ?>">see
                                        more</a>
>>>>>>> origin/Ju
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<div align="center">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li>

                <a href="<?php if (!isset($item)) {
                    echo base_url('index.php/ReceiverController?page=' . ($page-1));
                } else {
                    echo base_url('index.php/ReceiverController/search_item?page='.($page-1).'&keyword='.$searchitem.'&searchselect='.$searchselect);
                }
                ?>">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for ($i = 1; $i <= $count; $i++) { ?>
                <li><a href="
            <?php if (!isset($item)) {
                        echo base_url('index.php/ReceiverController?page=' . $i);
                    } else {
                        echo base_url('index.php/ReceiverController/search_item?page='.$i.'&keyword='.$searchitem.'&searchselect='.$searchselect);
                    }
                    ?>"><?php echo $i ?></a></li>
            <?php } ?>
            <li>
                <a href="<?php if (!isset($item)) {
                    echo base_url('index.php/ReceiverController?page=' . ($page+1));
                } else {
                    echo base_url('index.php/ReceiverController/search_item?page='.($page+1).'&keyword='.$searchitem.'&searchselect='.$searchselect);
                }
                ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

<?php include "footer.php" ?>

</body>
