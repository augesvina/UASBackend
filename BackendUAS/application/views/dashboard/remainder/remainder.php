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
            <div class="d-flex flex-row justify-content-around" style="width: 180vh;">
                <div class="text-start text-white bg-primary m-1 p-2" style="width:fit-content;height:fit-content;">
                    <h2>Balance</h2>
                    <hr>
                    <h3 class="fw-bold">Rp 200.000</h3>
                </div>
                <div class="text-start text-white bg-warning m-1 p-2" style="width: fit-content;height: fit-content;">
                    <h2>Akun Aktif</h2>
                    <hr>
                    <h3 class="fw-bold">172 Hari</h3>


                </div>
            </div>
            <div class="graph">
                <div id="pemasukkan" style="max-width:700px; height:400px"></div>
                <div id="pengeluaran" style="max-width: 700px; height: 400px;"></div>

            </div>

        </span>
    </div>



    <script src="https://www.gstatic.com/charts/loader.js">
    </script>
    <script>
        google.charts.load('current', {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Set Data
            var data = google.visualization.arrayToDataTable([
                ['Price', 'Size'],
                [50, 10],
                [60, 8],
                [70, 8],
                [80, 9],
                [90, 9],
                [100, 9],
                [110, 10],
                [120, 11],
                [130, 14],
                [140, 14],
                [150, 15],
            ]);
            // Set Options
            var options = {
                title: 'Pemasukkan',
                hAxis: {
                    title: 'Tanggal'
                },
                vAxis: {
                    title: 'Pemasukan'
                },
                legend: 'none'
            };
            // Draw
            var chart = new google.visualization.LineChart(document.getElementById('pemasukkan'));
            chart.draw(data, options);
        }
    </script>
    <script>
        google.charts.load('current', {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Set Data
            var data = google.visualization.arrayToDataTable([
                ['Price', 'Size'],
                [50, 10],
                [60, 8],
                [70, 8],
                [80, 9],
                [90, 9],
                [100, 9],
                [110, 10],
                [120, 11],
                [130, 14],
                [140, 14],
                [150, 15],
            ]);
            // Set Options
            var options = {
                title: 'Pemasukkan',
                hAxis: {
                    title: 'Tanggal'
                },
                vAxis: {
                    title: 'Pemasukan'
                },
                legend: 'none'
            };
            // Draw
            var chart = new google.visualization.LineChart(document.getElementById('pengeluaran'));
            chart.draw(data, options);
        }
    </script>

</body>

</html>