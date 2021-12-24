<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remainder</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/tabel.css'); ?>">
</head>


<body>
<a href="<?php echo site_url('Bukuproduk_c'); ?>">Kembali ke Dashboard</a>
    <h1>Remainder</h1>
    <a href="<?php echo site_url('Remainder_c/add'); ?>">Tambah Pengingat</a>

    <table border="1">


        <thead>
            <tr>
                <th>keterangan</th>
                <th>Rentang Waktu</th>
                <th>Tanggal Batas</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($remainder as $remainders) : ?>

                <?php
                date_default_timezone_set('Asia/Jakarta');
                $date = date('m/d/Y h:i:s ', time());

                $startTimeStamp = strtotime($date);
                $endTimeStamp = strtotime($remainders['batas_waktu']);

                $timeDiff = abs($endTimeStamp - $startTimeStamp);
                
                $numberDays = $timeDiff / 86400;  // 86400 seconds in one day

                // and you might want to convert to integer
                $numberDays = intval($numberDays);
                
                ?>
                <tr>
                    <td><?php echo $remainders['keterangan']; ?></td>
                    <td><?php echo $numberDays?> Hari</td>
                    <td><?php echo $remainders['batas_waktu']; ?></td>
                    <td>
                        <ul>
                            <li><a href="<?php echo site_url('Remainder_c/update/') . $remainders['id_remainder']; ?>">Update</a></li>
                            <li><a href="<?php echo site_url('Remainder_c/del/') . $remainders['id_remainder']; ?>">Delete</a></li>
                        </ul>
                    </td>

                </tr>
            <?php endforeach; ?>



        </tbody>



    </table>
</body>

</html>