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

    <link rel="stylesheet" href="<?= base_url('assets/css/cart.css') ?>">

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
            <h2>Your Cart</h2>
        </section>

        <div class="container-fluid mt-5">

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
                <a href="<?= base_url('home'); ?>">
                    <div class="btn btn-dark mr-2">Continue Browsing</div>
                </a>
                <a href="<?= base_url('dashboard/pembayaran'); ?>">
                    <div class="btn btn-secondary">Check Out</div>
                </a>
            </div>

        </div>

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