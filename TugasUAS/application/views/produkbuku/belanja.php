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

        <a href="<?php echo site_url('Bukuproduk_c/index') ?>">Kembali ke dashboard</a>
    </div>



    <?php if ($this->session->flashdata('success')) : ?>
        <script>
            alert('<?php echo $this->session->flashdata('success'); ?>')
        </script>
    <?php endif; ?>


    <table border="1">



        <tr>
            <th>qty</th>
            <th>Barang Terpilih</th>
            <th>Harga</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
        <tbody>
            <form action="<?php echo site_url('Belanja_c/update'); ?>" method="post">
                <?php foreach ($contents as $buku) : ?>
                    
                    <tr>

                        <?php echo form_hidden('rowid', $buku['rowid']); ?>


                        <td><input type="text" name="qty" id="" value="<?php echo $buku['qty']; ?>"></td>
                        <td>
                            <?php echo $buku['name']; ?>
                            <input type="hidden" name="judul_buku" value="<?php echo $buku['name']; ?>">

                            <?php if ($this->cart->has_options($buku['rowid']) == TRUE) : ?>

                                <p>
                                    <?php foreach ($this->cart->product_options($buku['rowid']) as $option_name => $option_value) : ?>

                                        <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                    <?php endforeach; ?>
                                </p>

                            <?php endif; ?>

                        </td>
                        <td>
                            <?php echo matauang($buku['price']);  ?>
                        </td>
                        <td><?php echo matauang($buku['subtotal']); ?></td>

                        <td>
                        
                        <button type="submit" class="update" style="cursor: pointer;"><i class="fas fa-edit"></i> Update your cart</button>
                        <a href="<?php echo site_url('Belanja_c/delete/').$buku['rowid'];?>" class="hapus"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>

                <?php endforeach; ?>


            </form>


        </tbody>
        <tbody>
            <tr>
                <td style="text-align: center; font-size: 64px;"><strong> Total</strong></td>
                <td colspan="4" style="text-align: center; font-size: 64px;"><?php echo matauang($this->cart->total()); ?></td>
            </tr>
        </tbody>


    </table>

    <script>
        let kurang = document.getElementById("kurang");
        let qty = document.getElementById("qty");
        let tambah = document.getElementById("tambah");
        qty.value = 0;
        kurang.addEventListener('click', () => {
            if (qty.value == 0) {
                qty.value = parseInt(qty.value);

            } else {
                qty.value = parseInt(qty.value) - 1;
            }

        });
        tambah.addEventListener('click', () => {
            qty.value = parseInt(qty.value) + 1;
        })
    </script>
</body>

</html>