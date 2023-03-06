<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('assets/styling/home/style-index.css') ?>">
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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="<?= base_url('auth'); ?>">Login</a></li>
                    </ul>
                </div>
                <div class="profile">
                    <a href="<?= base_url('user') ?>">
                        <span style="border-bottom: 3px solid; padding-bottom: 2px;"><?= $user['name'] ?></span>
                    </a>
                </div>
            </nav>
        </header>