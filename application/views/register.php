<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">

                    <?php
                    if (validation_errors()) {
                        ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong><?php echo validation_errors(); ?></strong>
                        </div>
                        <?php
                    }
                    echo form_open('login/register', 'class = "myclass"');
                    ?>

                    <legend>Register Your Account</legend>
                    <form action="<?php echo site_url('login') ?>" method="post">
                        <div class="form-group">
                            <?php
                            echo form_label('Fullname', 'fullname');
                            echo form_input('fullname', '', 'class="form-control" id="username" placeholder="Nama Lengkap"');
                            ?>
                        </div>
                        <div class="form-group">
                            <?php
                            echo form_label('Username', 'username');
                            echo form_input('username', '', 'class="form-control" id="username" placeholder="Name Pengguna"');
                            ?>
                        </div>
                        <div class="form-group">
                            <?php
                            echo form_label('Password', 'password');
                            echo form_password('password', '', 'class="form-control" id="password" placeholder="Kata Sandi"');
                            ?>
                        </div>
                        <?php echo form_submit('daftar', 'Register', 'class = "btn btn-primary"'); ?>
                        <!-- <button type="submit" class="btn btn-primary">Login</button> -->
                        <a href="<?php echo site_url('login') ?>" class="btn btn-link">Sign in</a>
                        <?php echo form_close() ?>

                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>