<div class="container-fluid">

    <h3><i class="fas fa-edit mr-2 mb-3"></i>Product Edit</h3>

    <?php foreach ($barang as $brg) : ?>

        <form method="POST" action="<?= base_url() . 'admin_cart/data_barang_others/update'; ?>">

            <div class="for-group">
                <label for="">Product Name</label>
                <input type="text" name="nama_brg" class="form-control mb-3" value="<?= $brg->nama_brg; ?>">
            </div>

            <div class="for-group">
                <label for="">Keterangan</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?= $brg->id_brg; ?>">
                <input type="text" name="keterangan" class="form-control mb-3" value="<?= $brg->keterangan; ?>">
            </div>

            <div class="for-group">
                <label for="">Kategori</label>
                <input type="text" name="kategori" class="form-control mb-3" value="<?= $brg->kategori; ?>">
            </div>

            <div class="for-group">
                <label for="">Harga</label>
                <input type="text" name="harga" class="form-control mb-3" value="<?= $brg->harga; ?>">
            </div>

            <div class="for-group">
                <label for="">Stock</label>
                <input type="text" name="stok" class="form-control mb-3" value="<?= $brg->stok; ?>">
            </div>

            <button type="submit" class="btn btn-secondary btn-sm mt-3">Submit</button>

        </form>

    <?php endforeach; ?>

</div>