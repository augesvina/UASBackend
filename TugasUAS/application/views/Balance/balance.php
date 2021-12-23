<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance</title>
</head>
<body>
    <h1>Dompet Anda </h1>
    <h2><b>Rp 200.000</b></h2>


    <h3>Transaksi penggunaan dompet </h3>
    <a href="<?php echo site_url('Balance_c/add');?>">Top Up</a>
    <table border="1">


        <thead>
            <tr>
                <th>Dompet</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Rp 200.000</td>
                <td>12 Agustus 2022</td>
                <td>Berkurang sebesar Rp 20.000 dari sebelumnya</td>
                <td><a href="<?php echo site_url('Balance_c/delete');?>">Delete</a></li></td>

            </tr>



        </tbody>



    </table>
</body>
</html>