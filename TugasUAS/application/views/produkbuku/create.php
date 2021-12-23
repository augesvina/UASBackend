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
                <h4>Input data buku</h4>
                <p>Tempat kamu menginputkan data buku</p>

            </div>
            <form action="<?php echo site_url('Bukuproduk_c/add'); ?>" method="post" enctype="multipart/form-data">

                <div class="input-area">
                    <input type="text" name="judul_buku" id="judul_buku" placeholder="Judul Buku">

                    <input type="text" name="penggarang_buku" id="penggarang_buku" placeholder="Penggarang buku">

                    <input type="number" name="harga_buku" id="harga_buku" placeholder="Harga Buku">

                    <input type="file" name="foto_sampul" id="foto_sampul" value="default.jpg" >
                   

                    <input type="text" name="tanggal_dibuat" id="tanggal_dibuat" placeholder="Tanggal dibuat">

                </div>

                <br>
                <input type="submit" value="submit" class="submit">

            </form>
        </div>

    </div>






</body>

</html>