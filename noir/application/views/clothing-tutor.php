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

        <?php foreach ($clothing as $brg) : ?>

            <div class="card ml-5" style="width: 16rem;">
                <img src="<?= base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?= $brg->nama_brg; ?></h5>
                    <small class="mt-3"><?= $brg->keterangan; ?></small><br>
                    <span class="badge badge-dark mb-3">IDR <?= number_format($brg->harga, 0, ',', '.'); ?></span><br>
                    <?= anchor('dashboard/tambah_ke_keranjang_clothing/' . $brg->id_brg, '<div class="btn btn-secondary">Add to Cart</div>'); ?>
                    <a href="#" class="btn btn-dark mt-3">Product Detail</a>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->