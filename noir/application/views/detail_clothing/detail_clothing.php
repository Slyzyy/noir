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

    <link rel="stylesheet" href="<?= base_url('assets/css/detail.css') ?>">

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

        <?php foreach ($clothing as $clth) : ?>

            <section class="sec1">
                <h2><?= $clth->nama_brg; ?></h2>
            </section>

            <div class="container-fluid">

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
                        <?= anchor('clothing/list_clothing/', '<div class="btn btn-danger">Back</div>'); ?><br><br>
                        <p>Made from luxurious 100% Terry Cotton, all our hoodies are super soft to the touch and perfect for everyday wear.<br>

                            Unisex fit. Fits regular size for men & oversized for women</p>
                    </div>
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