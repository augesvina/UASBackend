<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan e Wallet</title>
    <script src="<?php echo base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
</head>
<body>
    <form action="<?php echo site_url('Balance_c/add'); ?>" method="post" enctype="multipart/form-data">
        <input type="radio" name="jenis_bank" id="BRI" value="BRI">
        <label for="BRI">Bank BRI</label>
        <input type="radio" name="jenis_bank" id="BNI" value="BNI">
        <label for="BNI">Bank BNI</label>
        <input type="radio" name="jenis_bank" id="Mandiri" value="Mandiri">
        <label for="Mandiri">Bank Mandiri</label>
        

        <input type="number" name="nominal" placeholder="masukkan nominal">
        
        <textarea name="keterangan" id="keterangan" rows="10" cols="80" class="form-control"></textarea>
        <button type="submit">Submit</button>

    </form>

    <script>
        // Replace the <textarea id="texteditor"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace('keterangan');
    </script>
</body>
</html>