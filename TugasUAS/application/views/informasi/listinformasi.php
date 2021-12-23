<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/tabel.css'); ?>">


</head>

<body>
    <div class="add">
        <a href="<?php echo site_url('Bukuproduk_c'); ?>">Kembali ke Dashboard</a>

        <a href="<?php echo site_url('Informasi_c/input'); ?>">Informasi Buku</a>
    </div>


    <?php if ($this->session->flashdata('success')) : ?>
        <script>
            alert('<?php echo $this->session->flashdata('success'); ?>')
        </script>
    <?php 
    $this->session->sess_destroy();
    endif; ?>


    <table border="1">



        <tr>
            <th>Judul Buku</th>
            <th>Detail Informasi</th>
            <th>Email Pemesan</th>
            <th>Tanggal Tempo</th>
            <th>lampiran</th>
            <th>Jenis</th>
            <th>Kualitas</th>
            <th>Pengiriman</th>

            <th>Aksi</th>
        </tr>
        <tbody>
            <?php foreach ($informasi  as $info) : ?>
                <tr>
                    <td><?= $info['judul']; ?></td>
                    <td><?= $info['detail']; ?></td>
                    <td><?= $info['email']; ?></td>
                    <td><?= $info['tanggal']; ?></td>
                    <td><img src="<?= base_url('uploads/') . $info['file']; ?>" alt="foto" width="200px" height="200px"></td>
                    <td><?= $info['jenis']; ?></td>
                    <td><?= $info['kualitas']; ?></td>
                    <td><?= $info['checkbox']; ?></td>
                    <td>
                        <ul>
                            <li><a href="<?php echo site_url('Informasi_c/update/') . $info['id_info']; ?>" class="update"><i class="fas fa-edit"></i>Update Data</a></li>
                            <li><a onclick="return confirm('Beneran Menghapus?')" href="<?php echo site_url('Informasi_c/delete/') . $info['id_info'];?>" class="hapus"><i class="fas fa-trash"></i> Hapus Data</a></li>
                        </ul>
                    </td>
                </tr>


            <?php endforeach; ?>


        </tbody>



    </table>


</body>

</html>