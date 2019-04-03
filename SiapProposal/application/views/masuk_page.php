<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Masuk</title>

    <!-- GLOBAL STYLES -->
    <link href="<?php echo base_url();?>login-assets/css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>login-assets/icon/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->

    <!-- THEME STYLES -->
    <link href="<?php echo base_url();?>login-assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>login-assets/css/plugins.css" rel="stylesheet">

    <!-- THEME DEMO STYLES -->
    <link href="<?php echo base_url();?>login-assets/css/demo.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">

    <div class="container">
        <div class="row">
            <div class="login-banner text-center">
                    <h1>Siap Proposal</h1>
                </div>
            <div class="col-md-4 col-md-offset-4">

                <div class="portlet portlet-green">
                    <div class="portlet-heading login-heading">
                        <div class="portlet-title">
                            <h4><strong><i class="fa fa-gears"></i> Masuk</strong>
                            </h4>
                        </div>

                        <div class="portlet-widgets">

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <form accept-charset="UTF-8" role="form" action="masuk/process" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="NRP / Username" name="nrp" type="text" required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required="required">
                                </div>
                                <br>
                                <input type="submit" class="btn btn-green btn-block" value="Masuk">
                                <!--
                                <p>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p><a class="btn btn-blue btn-block" href="<?=base_url();?>" role="button">Homepage</a></p>
                                        </div>

                                    </div>
                                </p>
                            -->
                            </fieldset>
                        </form>
                        <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == '1') {
                                ?>
                                <p>
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <strong>Login Gagal !</strong> Cek kembali NRP / Username dan Password
                                </div>
                                </p>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- GLOBAL SCRIPTS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo base_url();?>login-assets/js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>login-assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- HISRC Retina Images -->
    <script src="<?php echo base_url();?>login-assets/js/plugins/hisrc/hisrc.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->

    <!-- THEME SCRIPTS -->
    <script src="<?php echo base_url();?>login-assets/js/flex.js"></script>

</body>

</html>
