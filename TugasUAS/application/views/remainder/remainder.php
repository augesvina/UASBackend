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
                <th>Lokasi</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Deadline</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Mejayan</td>
                <td>Melihat BUku</td>
                <td>Done</td>
                <td>12 Desember 2021</td>
                <td><ul>
                    <li><a href="<?php echo site_url('Remainder_c/update');?>">Update</a></li>
                    <li><a href="<?php echo site_url('Remainder_c/delete');?>">Delete</a></li>
                </ul></td>

            </tr>



        </tbody>



    </table>
</body>

</html>