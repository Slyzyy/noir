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

    <link rel="stylesheet" href="<?= base_url('assets/css/payment.css') ?>">

    <title><?= $title; ?></title>

</head>

<body>
    <div class="wrapper">

        <nav>
            <a href="<?= base_url('home') ?>" class="logo">Noir</a>
            <ul>
                <li><a href="<?= base_url('home') ?>">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><?php $keranjang = '<i class="fas fa-shopping-cart"></i>' . ' ' . $this->cart->total_items(); ?>

                    <?= anchor('dashboard/detail_keranjang', $keranjang); ?></li>
                <li><a href="<?= base_url('user') ?>" class="active">Account</a></li>
            </ul>
        </nav>

        <section class="sec1">
            <h2>Payment Details</h2>
        </section>

        <div class="container-fluid mt-5">

            <div class="btn btn-outline-danger">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "Your Totals : IDR " . number_format($grand_total, 0, ',', '.');
                ?>
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
            <center>
                <p class="text-center align-middle">Your Cart Is Empty !</p>
            </center>
        <?php } ?>

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