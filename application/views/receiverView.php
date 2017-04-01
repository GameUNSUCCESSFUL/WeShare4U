<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Item Grid</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "includecss.php" ?>

</head>
<body>
<?php include "navbar.php"?>
<h1 align="center">Show Data</h1>

<div class="container">
    <div class="featured-block">

        <div class="row">
            <?php foreach ($dbcon as $r): ?>
                <div class="col-md-3">
                    <div class="block">
                        <div class="thumbnail">
                            <!--<img src="img/img1.jpg" alt="" class="img-responsive">-->
                            <div class="caption">
                                <h1 align="center"> <?php echo $r['product_name'] ?> </h1>
                                <div align="right">
                                <a class="btn" href="#">see more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<?php echo $links ?>
<?php include "footer.php"?>
</body>
