<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remainder</title>
</head>

<body>
    <h1>Remainder</h1>
<a href="<?php echo site_url('Remainder_c/add');?>">Tambah Pengingat</a>
    <table border="1">


        <thead>
            <tr>
                <th>keterangan</th>
                <th>Status</th>
                <th>Tanggal Batas</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($remainder as $remainders) : ?>
            <tr>
                <td><?php echo $remainders['keterangan']; ?></td>
                <td>Done</td>
                <td><?php echo $remainders['batas_waktu']; ?></td>
                <td><ul>
                    <li><a href="<?php echo site_url('Remainder_c/update/').$remainders['id_remainder'];?>">Update</a></li>
                    <li><a href="<?php echo site_url('Remainder_c/del/').$remainders['id_remainder'];?>">Delete</a></li>
                </ul></td>

            </tr>
            <?php endforeach; ?>



        </tbody>



    </table>
</body>

</html>