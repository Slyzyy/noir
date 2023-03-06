<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/detail_.css'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <title><?= $title ?></title>
</head>

<body>

    <div class="header">
        <header>
            <nav>
                <a href="<?= base_url('home/account') ?>">
                    <div class="logo">Noir</div>
                </a>
                <ul>
                    <li><a href="<?= base_url('home/account') ?>">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="#" class="active">Log In</a></li>
                </ul>
            </nav>
        </header>
    </div>