<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/styling/home/style-login-registration.css') ?>">
    <title><?= $title; ?></title>
</head>

<body>

    <div class="signin">

        <?= $this->session->flashdata('message') ?>

        <form class="user" method="post" action="<?= base_url('auth/'); ?>">
            <h2>Log In</h2>
            <div class="input">
                <input type="text" id="email" name="email" placeholder="Enter Email Address" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small style="color: red; font-family: Product Sans, Helvetica; font-size: 15px;">', '</small>'); ?>
            </div>
            <div class="input">
                <input type="password" id="password" name="password" placeholder="Enter Password">
                <?= form_error('password', '<small style="color: red; font-family: Product Sans, Helvetica; font-size: 15px;">', '</small>'); ?>
            </div>
            <button type="submit" class="button">Submit</button>
        </form>
        <div class="option">
            <div class="text">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text">
                <a class="small" href="<?= base_url('auth/registration2') ?>">Create an Account!</a>
            </div>
        </div>

    </div>

</body>

</html>