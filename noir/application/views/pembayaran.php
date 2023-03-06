<div class="container-fluid">

    <div class="row">

        <div class="ml-3 btn btn-secondary">
            <?php
            $grand_total = 0;
            if ($keranjang = $this->cart->contents()) {
                foreach ($keranjang as $item) {
                    $grand_total = $grand_total + $item['subtotal'];
                }
                echo "Your Totals : IDR " . number_format($grand_total, 0, ',', '.');
            ?>
        </div>

    </div>

    <h3 class="mt-3">Contact Information</h3>

    <form method="POST" action="<?= base_url(); ?>dashboard/proses_pesanan">

        <div class="form-group">
            <input type="text" name="nama" placeholder="Full Name" class="form-control">
        </div>

        <div class="form-group">
            <input type="text" name="alamat" placeholder="Address" class="form-control">
        </div>

        <div class="form-group">
            <input type="text" name="no_telp" placeholder="Phone Number" class="form-control">
        </div>

        <div class="form-group">
            <h3>Shipment Services</h3>
            <select name="" id="" class="form-control">
                <option value="">JNE</option>
                <option value="">TIKI</option>
                <option value="">J&T</option>
                <option value="">Si Cepat</option>
            </select>
        </div>

        <div class="form-group">
            <h3>Payment Services</h3>
            <select name="" id="" class="form-control">
                <option value="">BCA - XXXXXX</option>
                <option value="">BNI - XXXXXX</option>
                <option value="">BRI - XXXXXX</option>
            </select>
        </div>

        <button type="submit" class="btn btn-secondary">Proceed Payment</button>

    </form>

<?php } else { ?>
    <p class="text-center align-middle">Your Cart Is Empty !</p>
<?php } ?>
</div>