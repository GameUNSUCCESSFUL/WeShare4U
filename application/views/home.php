<!DOCTYPE html>
<html lang="en">
<head>
    <title>WeShare4U</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css') ?>">
    <!-- My Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/style/myStyle.css') ?>">

</head>


<body>

<!-- NavBar Login---------------------------------------------------------------------------------------------------------------------------------------------->

<nav class="navbar navbar-inverse">
    <div class="container-fluid navbarheight">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">WeShare4U</a>
        </div>
        <div class="collapse navbar-collapse " id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="#" class="menubar">Home</a></li>
                <li><a href="#" style="color: #fdf9ff;">About</a></li>
                <li><a href="#" style="color: #fdf9ff;">Projects</a></li>
                <li><a href="#" style="color: #fdf9ff;">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <button type="button" name="but-login" class="btn btn-info" data-toggle="modal"
                            data-target=".bs-example-modal-lg">Login
                    </button>
                </li>
                <?php include "JCLogin.php";?>
                <li>
                    <button type="button" name="but-login" class="btn btn-default" data-toggle="modal2"
                            data-target=".bs-example-modal-lg">register
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/img_h1.jpg" alt="Image">
            <div class="carousel-caption">
                <h1>ยินดีต้อนรับเข้าสู่เพจ</h1>
                <h2> WeShare4U </h2>
            </div>
        </div>

        <div class="item">
            <img src="img/img_h2.jpg" alt="Image">
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


</div>
</div>
</div>

<footer class="container-fluid text-center">


    <h3>ความสุขสร้างได้ ด้วยการแบ่งปัน</h3>
    <h4>By WeShare4U @2017</h4>
    <h5>WeShare4U@gmail.com</h5>

    </div>
    </div>

</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('public/js/bootstrap.js') ?>"></script>
</body>
</html>