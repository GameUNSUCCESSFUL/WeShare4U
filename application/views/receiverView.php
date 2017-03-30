<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Item Grid</title>

</head>
<body>
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
                                <h1> <?php echo $r['product_name'] ?> </h1>
                                <a class="btn" href="#">see more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<?php
//    if(count($rs)==0){
//        echo "<tr><td colspan='4' align='center'>--no data--</td></tr>>";
//    }
//    else{
//        $no=1;
//        foreach ($rs as $r){
//            echo "<tr>";
//            echo "<td align='center'>$no</td>";
//            echo "<td>" . $r['product_name'] . "</td>";
//            echo "</tr>";
//            $no++;
//        }
//    }
//?>
</body>
