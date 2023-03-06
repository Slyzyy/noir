<div class="container-fluid">

    <h4>Checkout Details <div class="btn btn-dark">Invoice Number : <?php echo $invoice->id ?></div>
    </h4>

    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Order Amount</th>
            <th>Unit Price</th>
            <th>Sub Total</th>
        </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>

            <tr>
                <td><?= $psn->id_brg; ?></td>
                <td><?= $psn->nama_brg; ?></td>
                <td><?= $psn->jumlah; ?></td>
                <td><?= number_format($psn->harga, 0, ',', '.');  ?></td>
                <td><?= number_format($subtotal, 0, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>