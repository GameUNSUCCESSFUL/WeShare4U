<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>ของที่บริจาค</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view('includecss'); ?>

</head>
<body>
<?php $this->load->view('navbar'); ?>
<h1 align="center">Show Data</h1>

<div class="container">
    <div class="featured-block">

        <div class="row">
            <?php
            foreach ($query->result() as $row)
            {
                echo $row->product_name;
            }
            ?>
        </div>

    </div>
</div>

<?php $this->load->view('footer'); ?>
</body>
