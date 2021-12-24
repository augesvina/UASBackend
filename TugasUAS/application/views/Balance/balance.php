<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/all.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
</head>

<body>
    <div class="add">
        <a href="<?php echo site_url('Bukuproduk_c'); ?>">Kembali ke Dashboard</a>


    </div>

    <h1>Dompet Anda </h1>
    <h2><b><?php echo matauang($uang["balance"]); ?></b></h2>


    <h3>Transaksi penggunaan dompet </h3>
    <a href="<?php echo site_url('Balance_c/add'); ?>">Top Up</a>


    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Dompet</th>
                <th>Tanggal</th>
                <th>Keterangan</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $lists) : ?>
                <tr>
                    <td><?php echo matauang($lists["balance"]); ?></td>
                    <td><?php echo $lists['Tanggal_balance']; ?></td>
                    <td><?php echo $lists['Keterangan']; ?></td>


                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

</body>

</html>