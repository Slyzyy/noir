<div class="container-fluid">

    <h3>Your Cart</h3>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No.</th>
            <th>Product Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Sub-Total</th>
        </tr>

        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) :
        ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $items['name']; ?></td>
                <td><?= $items['qty']; ?></td>
                <td>IDR <?= number_format($items['price'], 0, ',', '.'); ?></td>
                <td>IDR <?= number_format($items['subtotal'], 0, ',', '.'); ?></td>
            </tr>

        <?php endforeach ?>
        <tr class="bg-dark text-light">
            <td colspan="4"></td>
            <td align="right">IDR <?= number_format($this->cart->total(), 0, ',', '.'); ?></td>
        </tr>
    </table>

    <div align="right">
        <a href="<?= base_url('dashboard/hapus_keranjang'); ?>">
            <div class="btn btn-danger mr-2">Clear Cart</div>
        </a>
        <a href="<?= base_url('dashboard'); ?>">
            <div class="btn btn-dark mr-2">Continue Browsing</div>
        </a>
        <a href="<?= base_url('dashboard/pembayaran'); ?>">
            <div class="btn btn-secondary">Check Out</div>
        </a>
    </div>

</div>