<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Siap Proposal</title>

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <link href="<?php echo base_url();?>css/plugins/pace/pace.css" rel="stylesheet">
    <script src="<?php echo base_url();?>js/plugins/pace/pace.js"></script>



    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="<?php echo base_url();?>css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>icon/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="<?php echo base_url();?>css/plugins/messenger/messenger.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/plugins/messenger/messenger-theme-flat.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/plugins/morris/morris.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/plugins/datatables/datatables.css" rel="stylesheet">

    <!-- THEME STYLES - Include these on every page. -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/plugins.css" rel="stylesheet">


    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->
    <link href="<?php echo base_url();?>css/demo.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/sweetalert2.css" rel="stylesheet">
    <script src="<?php echo base_url();?>js/plugins/messenger/messenger.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/messenger/messenger-theme-flat.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!--
    <script type="text/javascript">

        function notif($tipe,$pesan) {
            Messenger.options = {
                extraClasses: 'messenger-fixed messenger-on-top messenger-on-right',
                theme: 'flat'
            }

            Messenger().post({
                message: $pesan,
                type: $tipe,
                showCloseButton: true
            });
        };
    </script>
    -->

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- begin TOP NAVIGATION -->
        <nav class="navbar-top" role="navigation">

            <!-- begin BRAND HEADING -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
                    <i class="fa fa-bars"></i> Menu
                </button>
                <div class="navbar-brand" style="float:center">
                    <span style="color:#fff">Siap Proposal</span>
                    <a href="/home">

                        <!--<img src="img/flex-admin-logo.png" data-1x="img/flex-admin-logo@1x.png" data-2x="img/flex-admin-logo@2x.png" class="hisrc img-responsive" alt="">-->
                    </a>
                </div>
            </div>
            <!-- end BRAND HEADING -->

            <div class="nav-top">

                <!-- begin LEFT SIDE WIDGETS -->
                <ul class="nav navbar-left">
                    <li class="tooltip-sidebar-toggle">
                        <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Sidebar Toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <!-- You may add more widgets here using <li> -->
                </ul>
                <!-- end LEFT SIDE WIDGETS -->

                <!-- begin MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->
                <ul class="nav navbar-right">

                    <!-- begin MESSAGES DROPDOWN -->
                    <!-- /.dropdown -->
                    <!-- end MESSAGES DROPDOWN -->

                    <!-- begin ALERTS DROPDOWN -->

                    <!-- /.dropdown -->
                    <!-- end ALERTS DROPDOWN -->

                    <!-- begin TASKS DROPDOWN -->

                    <!-- /.dropdown -->
                    <!-- end TASKS DROPDOWN -->

                    <!-- begin USER ACTIONS DROPDOWN -->
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu" style="margin: 0;min-width: 200px">
                            <li>
                                <a href="<?=base_url();?>home/profil">
                                    <i class="fa fa-user"></i> Profil
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="/home/logout">
                                    <i class="fa fa-sign-out"></i> Log Out
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- end USER ACTIONS DROPDOWN -->

                </ul>
                <!-- /.nav -->
                <!-- end MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->

            </div>
            <!-- /.nav-top -->
        </nav>
        <!-- /.navbar-top -->
        <!-- end TOP NAVIGATION -->

        <!-- begin SIDE NAVIGATION -->
        <nav class="navbar-side" role="navigation">
            <div class="navbar-collapse sidebar-collapse collapse">
                <ul id="side" class="nav navbar-nav side-nav">
                    <!-- begin SIDE NAV USER PANEL -->
                    <li class="side-user hidden-xs">
                        <img class="img-circle" style="max-height: 150px;max-width: 150px;" src="/img/profile/<?=$data->photo;?>" alt="">
                        <p class="welcome">
                            <i class="fa fa-key"></i> Logged in as
                        </p>
                        <p class="name tooltip-sidebar-logout">
                            <span class="last-name"><?=$data->nama;?></span> <a style="color: inherit" class="logout_open" href="#logout" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-sign-out"></i></a>
                        </p>
                        <div class="clearfix"></div>
                    </li>
                    <!-- end SIDE NAV USER PANEL -->
                    <!-- begin SIDE NAV SEARCH -->
                    <li class="nav-search">
                        <form role="form">
                            <input type="search" class="form-control" placeholder="Search...">
                            <button class="btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </li>
                    <!-- end SIDE NAV SEARCH -->
                    <!-- begin DASHBOARD LINK -->
                    
                    <li>
                        <a href="<?=base_url();?>home">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="/home/profil">
                            <i class="fa fa-user"></i> Profil
                        </a>
                    </li>
                    <?php 
                    if ($data->tipe == "dosen") {
                        echo '
                        <li>
                            <a href="/pengajuan/dosen">
                                <i class="fa fa-book"></i> Daftar Bimbingan Mhs
                            </a>
                        </li>';
                    } elseif ($data->tipe == "rmk") {
                        echo '
                        <li>
                            <a href="/pengajuan/rmk">
                                <i class="fa fa-book"></i> Daftar Pengajuan
                            </a>
                        </li>';
                    } elseif ($data->tipe == "kaprodi") {
                        echo '
                        <li class="panel">
                            <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#forms">
                                <i class="fa fa-edit"></i> Pengajuan <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="collapse nav" id="forms">
                                <li>
                                    <a href="/pengajuan/kaprodi">
                                        <i class="fa fa-angle-double-right"></i> Proposal Tugas Akhir
                                    </a>
                                </li>
                                <li>
                                    <a href="/sidang/daftar">
                                        <i class="fa fa-angle-double-right"></i> Pengajuan Sidang
                                    </a>
                                </li>
                            </ul>
                        </li>';
                    } elseif ($data->tipe == "mahasiswa") {
                        echo '
                        <li class="panel">
                            <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#forms">
                                <i class="fa fa-edit"></i> Pengajuan <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="collapse nav" id="forms">
                                <li>
                                    <a href="/pengajuan/judul">
                                        <i class="fa fa-angle-double-right"></i> Proposal Tugas Akhir
                                    </a>
                                </li>
                                <li>
                                    <a href="/pengajuan/sidang">
                                        <i class="fa fa-angle-double-right"></i> Pengajuan Sidang
                                    </a>
                                </li>
                            </ul>
                        </li>';
                    }
                    ?>
                    <!-- end DASHBOARD LINK -->
                    <!-- begin CHARTS DROPDOWN -->

                    <!-- end CHARTS DROPDOWN -->
                    <!-- begin FORMS DROPDOWN -->
                    
                    <!-- end FORMS DROPDOWN -->
                    <!-- begin CALENDAR LINK -->

                    <!-- end CALENDAR LINK -->
                    <!-- begin TABLES DROPDOWN -->
                    <!-- end TABLES DROPDOWN -->
                    <!-- begin UI ELEMENTS DROPDOWN -->
                    <!-- end UI ELEMENTS DROPDOWN -->
                    <!-- begin MESSAGE CENTER DROPDOWN -->
                    <!-- end MESSAGE CENTER DROPDOWN -->
                    <!-- begin PAGES DROPDOWN -->
                    <!-- end PAGES DROPDOWN -->
                </ul>
                <!-- /.side-nav -->
            </div>
            <!-- /.navbar-collapse -->
        </nav>
