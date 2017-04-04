<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Item Grid</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "includecss.php" ?>
</head>
<body>
<?php include "navbar.php" ?>
<h1 align="center">Show Data</h1>

<div class="container">
    <div class="featured-block">

        <div class="row" align="right">
            <form class="form-inline" action="<?php echo base_url() . 'index.php/ReceiverController/search_item'; ?>"
                  method="post">
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
            <?php foreach ($dbcon as $r): ?>
                <div class="col-md-3">
                    <div class="block">
                        <div class="thumbnail">
                            <img src="<?php echo base_url('uploads/donateImages/'.$r['img_path']) ?>"
                                 alt="...">

                            <div class="caption">
                                <h1 align="center"> <?php echo $r['product_name'] ?> </h1>
                                <div align="right">
                                    <a class="btn" href="<?php echo base_url('productDetailController?id='.$r['product_id'])?>">see more</a>
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
    <?php echo $links ?>
</div>

<?php include "footer.php" ?>

</body>
