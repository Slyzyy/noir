<!-- Begin Page Content -->
<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/slider/Rock.jpg'); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slider/Volcano.jpg'); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slider/destructed.jpg'); ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row text-center mt-5">

        <?php foreach ($clothing as $clth) : ?>

            <div class="card ml-5" style="width: 16rem;">
                <img src="<?= base_url() . '/uploads/' . $clth->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?= $clth->nama_brg; ?></h5>
                    <small class="mt-3"><?= $clth->keterangan; ?></small><br>
                    <span class="badge badge-dark mb-3">IDR <?= number_format($clth->harga, 0, ',', '.'); ?></span><br>
                    <?= anchor('dashboard/tambah_ke_keranjang_clothing/' . $clth->id_brg, '<div class="btn btn-secondary">Add to Cart</div>'); ?>
                    <?= anchor('dashboard/detail_clothing/' . $clth->id_brg, '<div class="btn btn-dark mt-3">Product Details</div>') ?>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

    <div class="row text-center mt-5">

        <?php foreach ($leather as $lth) : ?>

            <div class="card ml-5" style="width: 16rem;">
                <img src="<?= base_url() . '/uploads/' . $lth->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?= $lth->nama_brg; ?></h5>
                    <small class="mt-3"><?= $lth->keterangan; ?></small><br>
                    <span class="badge badge-dark mb-3">IDR <?= number_format($lth->harga, 0, ',', '.'); ?></span><br>
                    <?= anchor('dashboard/tambah_ke_keranjang_leather/' . $lth->id_brg, '<div class="btn btn-secondary">Add to Cart</div>'); ?>
                    <?= anchor('dashboard/detail_leather/' . $lth->id_brg, '<div class="btn btn-dark mt-3">Product Details</div>') ?>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

    <div class="row text-center mt-5">

        <?php foreach ($accessories as $acc) : ?>

            <div class="card ml-5" style="width: 16rem;">
                <img src="<?= base_url() . '/uploads/' . $acc->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?= $acc->nama_brg; ?></h5>
                    <small class="mt-3"><?= $acc->keterangan; ?></small><br>
                    <span class="badge badge-dark mb-3">IDR <?= number_format($acc->harga, 0, ',', '.'); ?></span><br>
                    <?= anchor('dashboard/tambah_ke_keranjang_accessories/' . $acc->id_brg, '<div class="btn btn-secondary">Add to Cart</div>'); ?>
                    <?= anchor('dashboard/detail_accessories/' . $acc->id_brg, '<div class="btn btn-dark mt-3">Product Details</div>') ?>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

    <div class="row text-center mt-5">

        <?php foreach ($others as $oth) : ?>

            <div class="card ml-5" style="width: 16rem;">
                <img src="<?= base_url() . '/uploads/' . $oth->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?= $oth->nama_brg; ?></h5>
                    <small class="mt-3"><?= $oth->keterangan; ?></small><br>
                    <span class="badge badge-dark mb-3">IDR <?= number_format($oth->harga, 0, ',', '.'); ?></span><br>
                    <?= anchor('dashboard/tambah_ke_keranjang_others/' . $oth->id_brg, '<div class="btn btn-secondary">Add to Cart</div>'); ?>
                    <?= anchor('dashboard/detail_others/' . $oth->id_brg, '<div class="btn btn-dark mt-3">Product Details</div>') ?>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->