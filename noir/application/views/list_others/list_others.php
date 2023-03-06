<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Data Tables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>

    <link rel="stylesheet" href="<?= base_url('assets/css/list.css') ?>">

    <title><?= $title; ?></title>

</head>

<body>
    <div class="wrapper">

        <nav>
            <a href="<?= base_url('home') ?>" class="logo">Noir</a>
            <ul>
                <li><a href="<?= base_url('home') ?>">Home</a></li>
                <li><a href="<?= base_url('about') ?>">About</a></li>
                <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                <li><?php $keranjang = '<i class="fas fa-shopping-cart"></i>' . ' ' . $this->cart->total_items(); ?>

                    <?= anchor('dashboard/detail_keranjang', $keranjang); ?></li>
                <li><a href="<?= base_url('user') ?>" class="active">Account</a></li>
            </ul>
        </nav>

        <section class="sec1">
            <h2>Other Items</h2>
        </section>

        <section class="sec2">
            <div class="container-fluid">

                <div class="row ml-2">

                    <?php foreach ($others as $oth) : ?>

                        <div class="card ml-4 mb-4" style="width: 21em;">
                            <img src="<?= base_url() . '/uploads/' . $oth->gambar ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title mb-1"><?= $oth->nama_brg; ?></h5>
                                <small class="mt-3"><?= $oth->keterangan; ?></small><br>
                                <span class="badge badge-dark mb-3">IDR <?= number_format($oth->harga, 0, ',', '.'); ?></span><br>
                                <?= anchor('dashboard/tambah_ke_keranjang_others/' . $oth->id_brg, '<div class="btn btn-secondary">Add to Cart</div><br>'); ?>
                                <?= anchor('dashboard/detail_others/' . $oth->id_brg, '<div class="btn btn-dark mt-3">Product Details</div>') ?>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>

            </div>
        </section>

        <!-- Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Noir <?= date('Y') ?></span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
</body>

<script type="text/javascript">
    $(window).on('scroll', function() {
        if ($(window).scrollTop()) {
            $('nav').addClass('black');
        } else {
            $('nav').removeClass('black');
        }
    })
</script>

</html>