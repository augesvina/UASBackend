<?php
defined('BASEPATH') or exit('No direct script access allowed');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="<?php echo base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
</head>

<body>

    <div class="container-sm mt-5 d-grid gap-2">

        <?php

        foreach ($inform as $key) : ?>


            <h1 class="text-center">Input Pemesanan</h1>

            <form action="<?php echo site_url('Informasi_c/update'); ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" name="judul" id="judul" placeholder="Judul Buku" value="<?php echo $key['judul']; ?>" class="form-control">
                </div>
                <input type="hidden" name="id_info" value="<?php echo $key['id_info']; ?>">
                <div class="mb-3"> <textarea name="detail" id="detail" rows="10" cols="80">
            <?php echo $key['detail']; ?>
            </textarea></div>

                <div class="mb-3"><input class="form-control" type="email" name="email" id="email" placeholder="Email Contact" value="<?php echo $key['email']; ?>"></div>

                <div class="mb-3"><input class="form-control" type="password" name="password" id="password" placeholder="password buku" value="<?php echo $key['password']; ?>"></div>

                <div class="mb-3"><input class="form-control" type="date" name="tanggal" id="tanggal" value="<?php echo $key['tanggal']; ?>"></div>

                <div class="mb-3">
                    <h1><?php echo $key['file']; ?></h1>
                    <input type="hidden" name="gambar" value="<?php echo $key['file']; ?>">
                    <img src="<?= base_url('uploads/') . $key['file']; ?>" alt="foto" srcset="">
                </div>
                <div class="mb-3"><input class="form-control" type="file" name="uploading" id="uploading" value="<?php echo $key['id_info']; ?>"></div>

                <div class="mb-3"><select class="form-select" name="jenis" id="jenis">
                        <option>Pilih Jenis</option>
                        <option value="baru" <?php if ($key['jenis'] == 'baru') echo 'selected'; ?>>Cetakan Baru</option>
                        <option value="lama" <?php if ($key['jenis'] == 'lama') echo 'selected'; ?>>Cetakan Lama</option>


                    </select></div>

                <?php
                $check = explode(' , ', $key['checkbox']);
                ?>
                

                    <div class="mb-3"> <label for="fast" class="form-check-label">Pengiriman cepat</label>
                        <label for="fast" class="form-check-label">Pengiriman cepat</label>
                        <input class="form-check-input" type="checkbox" name="fast[]" id="fast" <?php in_array ('Cepat', $check) ? print "checked" : ""; ?> value="Cepat">
                    </div>
                    <div class="mb-3">
                        <label for="fast" class="form-check-label">Perlindungan Barang</label>
                        <input type="checkbox" name="fast[]" id="fast" value="Lindungi" <?php in_array ('Lindungi', $check) ? print "checked" : ""; ?> class="form-check-input">
                    </div>
                

                <div class="mb-3"> <label for="pilihan">Pilih Kualitas</label>
                    <input class="form-check-input" type="radio" name="pilihan" id="pilihan" <?php if ($key['kualitas'] == 'Koran') echo 'checked="checked"'; ?> value="Koran">Kertas koran

                    <input class="form-check-input" type="radio" name="pilihan" id="pilihan" <?php if ($key['kualitas'] == 'HVS') echo 'checked="checked"'; ?> value="HVS">Kertas HVS
                    <input class="form-check-input" type="radio" name="pilihan" id="pilihan" <?php if ($key['kualitas'] == 'Buffalo') echo 'checked="checked"'; ?> value="Buffalo">Kertas Buffalo
                </div>
                <div class="mb-3 mx-auto"><button class="btn btn-outline-secondary col-6 " type="submit" id="button-addon1">Submit</button></div>


            </form>
        <?php endforeach; ?>
    </div>
    <script>
        // Replace the <textarea id="texteditor"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('detail');
    </script>
</body>

</html>