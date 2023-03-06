<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/styling/home/about_.css') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <title><?= $title ?></title>
</head>

<body>

    <div class="header">

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
                        <li><a href="<?= base_url('home') ?>">Home</a></li>
                        <li><a href="<?= base_url('about') ?>">About</a></li>
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

    <div class="sec1">
        <h2>About Us</h2>
        <img src="<?= base_url('assets/img/about.png') ?>" class="center" alt="about_img">
        <p><b>Noir</b>&trade; is a luxury lifestyle brand founded in 2017 and is known for it's 'All Black' clothing, accessories and leather goods for men and women. From visual content to merchandise, we strive to pioneer a new type of lifestyle focused on quality and design. The 'All Black Lifestyle' is a culture shift to live life on your own terms free from vanity. The generic styles of traditional fashion have become obsolete, it's time to Blvckout your life.</p>
    </div>

</body>

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

</html>