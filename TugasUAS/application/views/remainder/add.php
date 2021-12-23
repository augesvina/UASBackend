<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tambah Pengingat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="<?php echo base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
    
</head>

<body>

    <div class="container-sm mt-5 d-grid gap-2">





        <h1 class="text-center">Tambah Pengingat</h1>

        <form action="<?php echo site_url('Remainder_c/add'); ?>" method="POST" enctype="multipart/form-data">



            <div class="mb-3">
            <input type="text" name="judul" id="judul" class="form-control" placeholder="masukkan judul">
            </div>
            <div class="mb-3">
                <textarea name="keterangan" id="keterangan" rows="10" cols="80" class="form-control"></textarea>
            </div>
           
            <div class="mb-3">
                <input type="datetime-local" name="batas_waktu" id="batas_waktu" class="form-control">

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