<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>WeShare4U</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include "includecss.php" ?>

</head>
<body class="bg">
<!-- nav -->
<?php include "navbarlogin.php"?>

<!-- JCLogin ----------------------------------------------------------------------------------------------------------------->

<?php include "user/login/JCLogin.php"; ?>

<div class="center">
<div class="navbar-buttons ">
    <ul class="nav ace-nav">
        <button type="button" id="donor_but" class="btn btn-info btn-lg" style="width: 200px" onclick="location.href='<?php echo base_url('index.php/donor');?>'">
            บริจาค
        </button>
        <button type="button" id="receiver_but" class="btn btn-success btn-lg" style="width: 200px" onclick="location.href='<?php echo base_url('index.php/receiver');?>'">
            รับบริจาค
        </button>
    </ul>
</div>
</div>



<!-- footer -->
<?php include "footer.php"?>
</body>
</html>