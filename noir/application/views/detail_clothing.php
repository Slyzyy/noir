<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Product Details</h5>
        <div class="card-body">
            <?php foreach ($clothing as $clth) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url() . '/uploads/' . $clth->gambar ?>" class="card-img-top" alt="">
                    </div>
                    <div class="col-md-8">
                        <table class="table ">
                            <tr>
                                <td>Product Name</td>
                                <td><strong><?= $clth->nama_brg ?></strong></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><strong><?= $clth->keterangan ?></strong></td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td><strong><?= $clth->kategori ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stock</td>
                                <td><strong><?= $clth->stok ?></strong></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>
                                    <strong>
                                        <div class="btn btn-sm btn-secondary">IDR : <?= number_format($clth->harga, 0, ',', '.')  ?></div>
                                    </strong>
                                </td>
                            </tr>
                        </table>
                        <?= anchor('dashboard/tambah_ke_keranjang_clothing/' . $clth->id_brg, '<div class="btn btn-dark">Add to Cart</div>'); ?>
                        <?= anchor('dashboard/', '<div class="btn btn-danger">Back</div>'); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>