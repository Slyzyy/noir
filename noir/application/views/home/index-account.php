<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/styling/home/style-index.css') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>

    <div class="header">
        <div id="bg">
            <h2>Noir</h2>
            <p>it's not just a color, it's a lifestyle</p>
        </div>
        <header>
            <nav>
                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <div class="logo">
                    N
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="<?= base_url('home/about'); ?>">About</a></li>
                        <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                        <li><a href="<?= base_url('user'); ?>">Account</a></li>
                        <li>
                            <?php $keranjang = '<span>Cart : </span>' . ' ' . $this->cart->total_items(); ?>
                            <?= anchor('dashboard/detail_keranjang', $keranjang); ?>
                        </li>
                    </ul>
                </div>
                <div class="profile">
                    <a href="<?= base_url('user') ?>">
                        <span style="border-bottom: 3px solid; padding-bottom: 2px;"><?= $user['name'] ?></span>
                    </a>
                </div>
            </nav>
        </header>
    </div>

    <!-- Our Collection -->

    <div class="our-collection">
        <h3>Our Collection</h3>
        <div class="xop-section">
            <ul class="xop-grid">
                <li>
                    <div class="xop-box xop-img-1">
                        <a class="xop-info" href="<?= base_url('clothing/list_clothing') ?>">
                            <h3>Clothing</h3>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="xop-box xop-img-2">
                        <a class="xop-info" href="<?= base_url('leather/list_leather') ?>">
                            <h3>Leather</h3>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="xop-box xop-img-3">
                        <a class="xop-info" href="<?= base_url('accessories/list_accessories') ?>">
                            <h3>Accessories</h3>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="xop-box xop-img-4">
                        <a class="xop-info" href="<?= base_url('others/list_others') ?>">
                            <h3>Others</h3>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="whitespace"></div>

    <script type="text/javascript">
        // Menu Toggle Button
        $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                $("nav ul").toggleClass("showing");
            });
        });

        // Scrolling Effect
        $(window).on("scroll", function() {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        });

        // Parallax Header
        var headerBg = document.getElementById('bg')
        window.addEventListener('scroll', function() {
            headerBg.style.opacity = 1 - +window.pageYOffset / 550 + ''
        })
    </script>

</body>

</html>