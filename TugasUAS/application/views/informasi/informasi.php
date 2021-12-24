<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Input Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="<?php echo base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
</head>

<body>

    <div class="container-sm mt-5 d-grid gap-2">





        <h1 class="text-center">Input Pemesanan</h1>

        <form action="<?php echo site_url('Informasi_c/add'); ?>" method="POST" enctype="multipart/form-data">



            <div class="mb-3">
                <input type="text" name="judul" id="judul" placeholder="Judul Buku" class="form-control">
            </div>
            <div class="mb-3">
                <textarea name="detail" id="detail" rows="10" cols="80" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <input type="email" name="email" id="email" placeholder="Email Contact" class="form-control">
            </div>
            <div class="mb-3">
                <input type="password" name="password" id="password" placeholder="password buku" class="form-control">
            </div>
            <div class="mb-3">
                <input type="date" name="tanggal" id="tanggal" class="form-control">

            </div>


            <div class="mb-3">
                <input type="file" name="uploading" id="uploading" class="form-control">
            </div>

            <div class="mb-3">
                <select name="jenis" id="jenis" class="form-select">
                    <option>Pilih Jenis</option>
                    <option value="baru">Cetakan Baru</option>
                    <option value="lama">Cetakan Lama</option>


                </select>
            </div>

            <div class="mb-3">
                <label for="fast" class="form-check-label">Pengiriman cepat</label>
                <input type="checkbox" name="fast[]" id="fast" value="Cepat" class="form-check-input">
            </div>

            <div class="mb-3">
                <label for="fast" class="form-check-label">Perlindungan Barang</label>
                <input type="checkbox" name="fast[]" id="fast" value="Lindungi" class="form-check-input">
            </div>

            <div class="mb-3"><label for="pilihan" class="form-check-label">Pilih Kualitas</label>

                <input type="radio" name="pilihan" id="pilihan" value="Koran" class="form-check-input">Kertas koran

                <input type="radio" name="pilihan" id="pilihan" value="HVS" class="form-check-input">Kertas HVS
                <input type="radio" name="pilihan" id="pilihan" value="Buffalo" class="form-check-input">Kertas Buffalo
            </div>


            <div class="mb-3 mx-auto"><button class="btn btn-outline-secondary col-6 " type="submit" id="button-addon1">Submit</button></div>


        </form>

    </div>
    <script>
        // Replace the <textarea id="texteditor"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('detail');
    </script>
</body>

</html>
