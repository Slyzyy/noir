<div class="container-fluid">
    <h4>Product Invoice</h4>
    <a href="<?= base_url('report/cetak_produk/') ?>" class="btn btn-secondary mt-3 mb-3">Print to PDF</a>
    <table id="table-invoice" class="table table_invoice table-bordered table-hover table-striped">
        <tr>
            <th>Id_Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Action</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td><?= $inv->id; ?></td>
                <td><?= $inv->nama; ?></td>
                <td><?= $inv->alamat; ?></td>
                <td><?= $inv->tgl_pesan; ?></td>
                <td><?= $inv->batas_bayar; ?></td>
                <td>
                    <?= anchor('invoice/hapus/' . $inv->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>