
<?php
$system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
?>
<!DOCTYPE html>  
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="OPTIMUM LINKUP COMPUTERS">
                <link rel="icon" href="<?php echo base_url(); ?>optimum/logo.png" type="image/x-icon" />
                <title><?php echo $system_name; ?></title>
        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="<?php echo base_url(); ?>optimum/css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>optimum/css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="<?php echo base_url(); ?>optimum/css/colors/megna.css" id="theme"  rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>optimum/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>optimum/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>optimum/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>optimum/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>optimum/daterangepicker/daterangepicker.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
    <!-- Preloader -->
        <div class="preloader">
          <div class="cssload-speeding-wheel"></div>
        </div>
    <div class="login-box login-center">
        <div class="white-box " style="border:1px solid green">
            <div align="center">
                <img  width="100" height="100" src="<?php echo base_url(); ?>optimum/logo_pantauPadi.png">
                <br><br><strong style="color:green">Pantau Padi</strong>. <br> Silahkan Login apabila sudah memiliki akun

                <div align="center">
                    <?php if (isset($page) && $page == "logout"): ?><br><br>
                        <div class="alert alert-success hide_msg pull" style="width: 100%">
                            <i class="fa fa-check-circle"></i> Logout Berhasil &nbsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    <?php endif ?>
                </div>
                <br><br>

                <form class="form-horizontal form-material" id="login-form" action="<?php echo base_url('auth/log'); ?>" method="post">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="user_name" value="nurfaidahtitik@gmail.com" required="" placeholder="Email Address" style="width:100%">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" value="245712Apka*" required="" placeholder="Password" style="width:100%">
                        </div>
                    </div>


                    <!-- CSRF token -->
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                    <button class="btn btn-info style1 btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" style="width:100%; color:white">
                        Login
                    </button>
                    <br><br>
                </form>

                <div align="center"><img id="install_progress" src="<?php echo base_url() ?>optimum/images/loading.gif" style="margin-left: 20px;  display: none"/></div>
            </div>
            <br><br>
        </div>
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>optimum/bootstrap/dist/js/tether.min.js"></script>
        <script src="<?php echo base_url(); ?>optimum/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>optimum/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>

        <!--Custom JavaScript -->
        <script src="<?php echo base_url() ?>optimum/js/custom.min.js"></script>
        <script src="<?php echo base_url() ?>optimum/js/custom.js"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="<?php echo base_url(); ?>optimum/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <link href="<?php echo base_url(); ?>optimum/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
        <!-- auto hide message div-->
        <script type="text/javascript">
            $( document ).ready(function(){
               $('.hide_msg').delay(2000).slideUp();
            });
        </script>
        <!--slimscroll JavaScript -->
        <script src="<?php echo base_url(); ?>optimum/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="<?php echo base_url(); ?>optimum/js/waves.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url(); ?>optimum/js/custom.min.js"></script>
        <!--Style Switcher -->
        <script src="<?php echo base_url(); ?>optimum/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

        <script>
            $('form').submit(function (e)
            {
                $('#install_progress').show();
                $('#modal_1').show();
                $('.btn').val('Login...');
                $('form').submit();
                e.preventDefault();
            });

        </script>
    </body>

</html>
