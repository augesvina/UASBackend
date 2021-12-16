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
        <div class="container d-flex justify-content-between ">
            <h3 class="fs-4 fw-bold text-center text-wrap text-white" style="width: 6rem;">Pencatatan Uang Mandiri</h3>

            <a href="#" class="nav-link fs-2 text-white">ADMIN <i class="fas fa-key"></i></a>

        </div>

    </nav>

    <div class="content d-flex flex-row">
        <aside class="d-flex flex-column justify-content-evenly bg-info text-center " style="width: 15%; height: 90vh;">
            <a href="#" class="text-white nav-link active">Dashboard</a>
            <a href="#" class="text-white nav-link ">Balance</a>
            <div class="transaksi">
                <h3>Transaksi</h3>

                <a href="#" class="nav-link text-white">Top Up</a>
                <a href="#" class="nav-link text-white">Pengeluaran</a>

            </div>
            <div class="report">
                <h3>Report</h3>
                <a href="#" class="nav-link text-white">Cetak laporan</a>
            </div>
        </aside>
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

            </div>
        </span>
    </div>


    <canvas id="myChart" width="100" height="100">Test</canvas>

    <script src="<?= base_url('src/chart.js-3.6.2/dist/chart.js'); ?>"></script>
    <script>
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>

</html>