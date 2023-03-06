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

        <form class="user" method="post" action="<?= base_url('auth/registration2'); ?>">
            <h2>Create Account</h2>
            <div class="input">
                <input type="text" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small style="color: red; font-family: Product Sans, Helvetica; font-size: 15px;">', '</small>'); ?>
            </div>
            <div class="input">
                <input type="text" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small style="color: red; font-family: Product Sans, Helvetica; font-size: 15px;">', '</small>'); ?>
            </div>
            <div class="form-group row">
                <div class="input">
                    <input type="password" id="password1" placeholder="Enter Password" name="password1">
                    <?= form_error('password1', '<small style="color: red; font-family: Product Sans, Helvetica; font-size: 15px;">', '</small>'); ?>
                </div>
                <div class="input">
                    <input type="password" id="password2" placeholder="Repeat Password" name="password2">
                </div>
            </div>
            <button type="submit" class="button">
                Submit
            </button>
        </form>
        <div class="option">
            <div class="text">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text">
                <a class="small" href="<?= base_url('auth/') ?>">Already have an account? Login!</a>
            </div>
        </div>

    </div>

</body>

</html>