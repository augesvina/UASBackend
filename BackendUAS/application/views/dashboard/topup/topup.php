<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('src/bootstrap-5.1.3-dist/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?= base_url('src/fontawesome-free-5.15.4-web/css/all.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('src/style/dashboard.css'); ?>">
    <!--load all styles -->
    <title>Dashboard </title>
</head>

<body>

    <nav class="bg-warning p-3">
        <?php $this->load->view('_partial/navbar'); ?>
        

    </nav>

    <div class="content d-flex flex-row">
    <?php $this->load->view('_partial/sidebar'); ?>
        
        <span class="main-content m-3 p-2  rounded-3" id="main-content">
           

        </span>
    </div>


</body>

</html>