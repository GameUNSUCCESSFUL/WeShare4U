<!DOCTYPE html>
<html lang="en">
<head>
    <title>WeShare4U</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "includecss.php" ?>

</head>


<body>

<!-- NavBar Login---------------------------------------------------------------------------------------------------------------------------------------------->

<?php include "navbarlogin.php"?>


<!-- JCLogin -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<?php include "JCLogin.php"; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php echo base_url('public/images/img_h1.jpg')?>" alt="Image">
            <div class="carousel-caption">
                <h1>ยินดีต้อนรับเข้าสู่เพจ</h1>
                <h2> WeShare4U </h2>
            </div>
        </div>

        <div class="item">
            <img src="<?php echo base_url('public/images/img_h2.jpg')?>" alt="Image">
            <div class="carousel-caption">
                <h3>WeShare4U</h3>

            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php include "footer.php" ?>
</body>
</html>