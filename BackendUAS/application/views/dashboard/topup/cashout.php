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
            <!-- Tempat Status -->
            <h1>Cashout</h1>
            <h4 class="text-muted">Please Choose cashout method</h4>
            <form action="">
                <div class="d-flex flex-row justify-content-around" style="width: 180vh;">

                    <div class="d-flex flex-column">
                        <div class="container bg-primary">
                            <h1>Bank Transfer</h1>
                            <h3>Minimum cashout Rp 10.000</h3>
                        </div>
                        <div class="agent">
                            <h1>Agent</h1>
                            <div class="d-flex flex-row">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="LAWSON" id="LAWSON" name="jenis">
                                    <label class="form-check-label" for="LAWSON">
                                        LAWSON
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Pegadaian" id="Pegadaian" name="jenis">
                                    <label class="form-check-label" for="Pegadaian">
                                        Pegadaian
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Pegadaian" id="Pegadaian" name="jenis">
                                    <label class="form-check-label" for="Pegadaian">
                                        KANTOR POS
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="form1">
                        <div class="mb-3">
                            <label for="Nominal" class="form-label">Nominal</label>
                            <input type="text" class="form-control" id="Nominal" name="nominal" placeholder="Masukkan Nominal">
                        </div>
                        <div class="mb-3">
                            <label for="Keterangan" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="Keterangan" name="Keterangan" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                    </div>
                </div>
            </form>


        </span>
    </div>


</body>

</html>