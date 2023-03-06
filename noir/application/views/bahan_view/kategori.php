<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/cat.css') ?>">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title>Category</title>
</head>

<style>
    .box-info h2.name {
        position: absolute;
        text-align: center;
        left: 36%;
        font-size: 30px;
        border-bottom: 5px #4f4f4f solid;
        padding: 5px;
        color: #4f4f4f;
        margin: 0;
        margin-top: 15px;
    }

    .box-info h2.price-big {
        position: absolute;
        text-align: center;
        left: 36%;
        font-size: 30px;
        top: 78%;
        border-top: 5px #4f4f4f solid;
        padding: 5px;
        color: #4f4f4f;
        margin: 0;
        margin-top: 15px;
    }

    .box-info h3.name {
        position: absolute;
        text-align: center;
        left: 32%;
        font-size: 17px;
        border-bottom: 3px #4f4f4f solid;
        padding: 5px;
        color: #4f4f4f;
        margin: 0;
        margin-top: 5px;
    }

    .box-info h3.price-small {
        position: absolute;
        text-align: center;
        left: 33%;
        font-size: 17px;
        top: 66%;
        border-top: 3px #4f4f4f solid;
        padding: 5px;
        color: #4f4f4f;
        margin: 0;
        margin-top: 5px;
    }
</style>

<body>

    <div class="wrapper">
        <nav>
            <div class="logo">Noir</div>
            <ul>
                <li><a href="<?= base_url('home/account') ?>">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="#" class="active">Log In</a></li>
            </ul>
        </nav>
        <section class="sec1">
            <h2>Clothing</h2>
        </section>
        <div class="wrapper-grid">
            <div class="box box1">
                <div class="box-info">
                    <h2 class="name">Camo Sweater</h2>
                    <h2 class="price-big">IDR : 1.750.000</h2>
                </div>
            </div>
            <div class="box box2">
                <div class="box-info">
                    <h3 class="name">Phanter Sweater</h3>
                    <h3 class="price-small">IDR : 1.450.000</h3>
                </div>
            </div>
            <div class="box box3">
                <div class="box-info">
                    <h3 class="name" style="left: 35%;">Snake Hoodie</h3>
                    <h3 class="price-small">IDR : 2.150.000</h3>
                </div>
            </div>
            <div class="box box4">
                <div class="box-info">
                    <h3 class="name" style="left: 35%">Stripe Hoodie</h3>
                    <h3 class="price-small">IDR : 2.150.000</h3>
                </div>
            </div>
            <div class="box box5">
                <div class="box-info">
                    <h2 class="name">Signature Hoodie</h2>
                    <h2 class="price-big" style="top: 68%;">IDR : 1.850.000</h2>
                </div>
            </div>
            <div class="box box6">
                <div class="box-info">
                    <h3 class="name" style="left: 37%;">Bold Hoodie</h3>
                    <h3 class="price-small">IDR : 1.250.000</h3>
                </div>
            </div>
            <div class="box box7">
                <div class="box-info">
                    <h2 class="name">Essential Hoodie</h2>
                    <h2 class="price-big" style="left: 37%;">IDR : 1.115.000</h2>
                </div>
            </div>
            <div class="box box8">
                <div class="box-info">
                    <h3 class="name" style="left: 38%">Square Tee</h3>
                    <h3 class="price-small" style="top: 54%; left: 34%;">IDR : 620.000</h3>
                </div>
            </div>
            <div class="box box9">
                <div class="box-info">
                    <h3 class="name" style="left: 38%;">Sleeve Tee</h3>
                    <h3 class="price-small" style="top: 54%;">IDR : 850.000</h3>
                </div>
            </div>
        </div>
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