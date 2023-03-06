<div class="container-fluid">

    <button class="btn btn-sm btn-secondary mb-3 mt-5" data-toggle="modal" data-target="#tambah_barang_leather"><i class="fas fa-plus fa-sm"></i> Add Leather Items</button>

    <h2 class="mb-3">Leather Items</h2>

    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stock</th>
            <th colspan="3">Action</th>
        </tr>

        <?php $no = 1;
        foreach ($leather as $brg) : ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $brg->nama_brg; ?></td>
                <td><?= $brg->keterangan; ?></td>
                <td><?= $brg->kategori; ?></td>
                <td><?= $brg->harga; ?></td>
                <td><?= $brg->stok; ?></td>
                <td>
                    <div class="btn btn-dark btn-sm"><i class="fas fa-search-plus"></i></div>
                </td>
                <td>
                    <?= anchor('admin_cart/data_barang_leather/edit/' . $brg->id_brg, '<div class="btn btn-outline-dark btn-sm"><i class="fas fa-edit"></i></div>'); ?>
                </td>
                <td><?= anchor('admin_cart/data_barang_leather/hapus/' . $brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?>
                </td>
            </tr>

        <?php endforeach ?>

    </table>

    <hr class="my-4">

</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang_leather" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Leather Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin_cart/data_barang_leather/tambah_aksi'); ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="">Item Name</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" name="kategori" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Stock</label>
                        <input type="text" name="stok" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Image</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-secondary">Add Leather Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>