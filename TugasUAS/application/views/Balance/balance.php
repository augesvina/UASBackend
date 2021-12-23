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
    <h2><b><?php echo matauang($uang["balance"]);?></b></h2>


    <h3>Transaksi penggunaan dompet </h3>
    <a href="<?php echo site_url('Balance_c/add');?>">Top Up</a>
    <table border="1">


        <thead>
            <tr>
                <th>Dompet</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
            
            </tr>
        </thead>

        <tbody>
        <?php foreach ($list as $lists) : ?>
            <tr>
                <td><?php echo matauang($lists["balance"]);?></td>
                <td><?php echo $lists['Tanggal_balance']; ?></td>
                <td><?php echo $lists['Keterangan'];?></td>
               

            </tr>
            <?php endforeach; ?>



        </tbody>



    </table>
</body>
</html>