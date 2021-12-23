<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik</title>
</head>

<body>

    <div class="graph">
        <div id="pemasukkan" style="max-width:700px; height:400px"></div>
        <div id="pengeluaran" style="max-width: 700px; height: 400px;"></div>

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