<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/form.css'); ?>">
    
    <?php if ($this->session->flashdata('success')) : ?>
        <script>alert('<?php echo $this->session->flashdata('success'); ?>')</script>
    <?php endif; ?>
</head>

<body>
    <div class="overlay"></div>
    <header><a href="<?php echo site_url('Bukuproduk_c') ?>">Kembali ke list</a></header>


    <div class="box">
        <?php echo validation_errors(); ?>
        <div class="box-inside">
            <div class="header">
                <h4>Update data buku</h4>
                <p>Tempat kamu menginputkan data buku</p>

            </div>
            <form action="<?php echo site_url('Bukuproduk_c/edit'); ?>" method="post" enctype="multipart/form-data">

                <div class="input-area">
                    <input type="hidden" name="id_buku" value="<?php echo $buku['id_buku'];?>">
                
                    <input type="text" name="judul_buku" id="judul_buku" placeholder="Judul Buku" value="<?php echo $buku['judul_buku'];?>">

                    <input type="text" name="penggarang_buku" id="penggarang_buku" placeholder="Penggarang buku" value="<?php echo $buku['penggarang_buku'];?>">

                    <input type="text" name="harga_buku" id="harga_buku" placeholder="Harga Buku" value="<?php echo $buku['harga_buku'];?>">

                    <input type="file" name="foto_sampul" id="foto_sampul">

                    <input type="text" name="tanggal_dibuat" id="tanggal_dibuat" placeholder="Tanggal dibuat" value="<?php echo $buku['tanggal_dibuat'];?>">

                </div>

                <br>
                <input type="submit" value="submit" class="submit">

            </form>
        </div>

    </div>






</body>

</html>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>

<body>
    
    <a href="<?php echo site_url('Bukuproduk_c') ?>">Kembali ke list</a>
    <?php echo validation_errors(); ?>
    <?php echo form_open('Bukuproduk_c/edit'); ?>
    <?php print_r($buku); ?>
    <input type="hidden" name="id_buku" value="<?php echo $buku['id_buku'];?>">
    <h5>Judul Buku</h5>
    <input type="text" name="judul_buku" id="judul_buku" value="<?php echo $buku['judul_buku'];?>">
    <h5>Penggarang buku</h5>
    <input type="text" name="penggarang_buku" id="penggarang_buku" value="<?php echo $buku['penggarang_buku'];?>">
    <h5>Harga Buku</h5>
    <input type="text" name="harga_buku" id="harga_buku" value="<?php echo $buku['harga_buku'];?>">
    <h5>Foto Sampul</h5>
    <input type="text" name="foto_sampul" id="foto_sampul" value="<?php echo $buku['foto_sampul'];?>">
    <h5>Tanggal dibuat</h5>
    <input type="text" name="tanggal_dibuat" id="tanggal_dibuat" value="<?php echo $buku['tanggal_dibuat'];?>">
    <br>
    <input type="submit" value="submit">

    </form>

</body>

</html> -->