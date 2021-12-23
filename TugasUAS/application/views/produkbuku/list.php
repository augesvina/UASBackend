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
        <a href="<?php echo site_url('Bukuproduk_c/add');?>"><i class="fas fa-plus"></i> Tambah data</a>
        <a href="<?php echo site_url('Belanja_c/index');?>"><i class="fas fa-shopping-cart"></i> Belanja</a>
        <a href="<?php echo site_url('Informasi_c/index');?>">Informasi Buku</a>
        <a href="<?php echo site_url('Balance_c');?>">CRUD Balance</a> 
        <!-- 4 -->
        <a href="<?php echo site_url('Remainder_c');?>">Remainder</a>
        <!-- 5 -->
        <a href="<?php echo site_url('Grafik_c');?>">Grafik buku</a>
        <!-- 6 -->
        <a href="<?php echo site_url('User_c');?>">Ubah User</a>
        <!-- 7 -->
        <a href="<?php echo site_url('Cetak_c');?>">Cetak Laporan</a>
        <!-- 8 Login dan Register-->
        <!-- 9  -->
        <a href="<?php echo site_url('RiwayatPenjualan_c');?>">CRUD Riwayat penjualan</a>
        
        <!-- 10 -->
      

    </div>


    <?php if ($this->session->flashdata('success')) : ?>
        <script>
            alert('<?php echo $this->session->flashdata('success'); ?>')
        </script>
    <?php endif; ?>


    <table border="1">



        <tr>
            <th>Judul Buku</th>
            <th>Pengarang Buku</th>
            <th>Harga Buku</th>
            <th>Foto Sampul</th>
            <th>Tanggal Dibuat</th>
            
            <th>Aksi</th>
        </tr>
        <tbody>
            <form action="<?php echo site_url('Belanja_c/belanja'); ?>" method="post">
                <?php foreach ($produk as $buku) : ?>
                    <tr>

                        <input type="hidden" name="id_buku" value="<?php echo $buku['id_buku']; ?>">
                        <td><?= $buku['judul_buku']; ?></td>
                        <input type="hidden" name="judul_buku" value="<?php echo $buku['judul_buku']; ?>">


                        <td><?= $buku['penggarang_buku']; ?></td>
                        <input type="hidden" name="penggarang_buku" value="<?php echo $buku['penggarang_buku']; ?>">

                        <td><?php echo matauang($buku['harga_buku']) ; ?></td>
                        <input type="hidden" name="harga_buku" value="<?php echo $buku['harga_buku']; ?>">


                        <td><img src="<?= base_url('uploads/') . $buku['foto_sampul']; ?>" alt="Gambar" width="200px" height="200px"></td>
                        <input type="hidden" name="gambar" value="<?php echo $buku['foto_sampul']; ?>">

                        <td><?= $buku['tanggal_dibuat']; ?></td>
                        <input type="hidden" name="tanggal_dibuat" value="<?php echo $buku['tanggal_dibuat']; ?>">
                       
                        <td>
                            
                            <ul>
                                <li><a href="<?php echo site_url('Bukuproduk_c/edit/') . $buku['id_buku']; ?>" class="update"><i class="fas fa-edit"></i>Update Data</a></li>
                                <li><a onclick="return confirm('Beneran Menghapus?')" href="<?php echo site_url('Bukuproduk_c/del/') . $buku['id_buku']; ?>" class="hapus"><i class="fas fa-trash"></i> Hapus Data</a></li>
                                <li><button type="submit" style="width: 40px;cursor: pointer;" class="update"><i class="fas fa-shopping-cart" class="update"></i></button></li>
                            </ul>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </form>

        </tbody>



    </table>

    
</body>

</html>