<div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Profil
                                <small></small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  Home
                                </li>
                                <li class="active">Profil</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <!-- begin MAIN PAGE ROW -->
                <div class="row">

                    <!-- begin LEFT COLUMN -->
                    <div class="col-lg-8">

                        <div class="row">

                            <!-- Basic Form Example -->
                           <div class="col-lg-12">
                                <div class="portlet portlet-red">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4>Data User</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="formControls" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <?php
                                            if ($success=='data') {
                                                echo '
                                                <div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Sukses : </strong> Sukses mengubah data 
                                                </div>
                                                ';
                                            } 
                                            ?>
                                            <form class="form-horizontal" action="<?=base_url();?>home/profil/updateData" method="post">
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="nama" name="nama" value="<?=$data->nama;?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                                                    <div class="col-sm-10">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="gender" value="lakilaki" <?php echo ($data->gender == 'lakilaki') ? 'checked' : ''?>>Laki - Laki
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="gender" value="perempuan" <?php echo ($data->gender == 'perempuan') ? 'checked' : ''?>>Perempuan
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">NRP / Username</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="nrp" name="nrp" value="<?=$data->nrp;?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInputDisabled" class="col-sm-2 control-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="password" name="password" value="<?=$data->password;?>" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-default">Simpan</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portlet -->
                            </div>
                            <!-- /.col-lg-12 (nested) -->
                            <!-- End Basic Form Example -->

                            <!-- Inline Form Example -->
                            <!-- /.col-lg-12 (nested) -->
                            <!-- End Inline Form Example -->

                            <!-- Horizontal Form Example -->
                            <!-- /.col-lg-12 (nested) -->
                            <!-- End Horizontal Form Example -->

                            <!-- Input Groups Example -->

                            <!-- /.col-lg-12 (nested) -->
                            <!-- End Input Groups Example -->

                        </div>
                        <!-- /.row (nested) -->

                    </div>
                    <!-- /.col-lg-6 -->
                    <!-- end LEFT COLUMN -->

                    <!-- begin RIGHT COLUMN -->
                    <div class="col-lg-4">

                        <div class="row">

                            <!-- Form Controls -->

                            <!-- /.col-lg-12 (nested) -->
                            <!-- End Form Controls -->

                            <!-- Input Sizing -->

                            <div class="col-lg-12">
                                <div class="portlet portlet-purple">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4>Foto Profil</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#inputSizing"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="inputSizing" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <?php
                                            if ($success=='photo') {
                                                echo '
                                                <div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Sukses : </strong> Foto profil berhasil dirubah
                                                </div>
                                                ';
                                            } else if ($error == 'photo') {
                                                echo '
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Gagal : </strong> Gagal mengubah foto profil
                                                </div>
                                                ';
                                            }
                                            ?>
                                            
                                            <center>
                                                <img class="img-circle" style="max-height: 250px;max-width: 250px;" src="/img/profile/<?=$data->photo;?>" alt="">

                                            <form action="/home/profil/uploadPhoto" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <input name="photo" type="file" id="photo">

                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-default">Upload Foto</button>
                                                </div>
                                            </form>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portlet -->
                            </div>
                            <!-- /.col-lg-12 (nested) -->
                            <!-- End Form Controls -->

                        </div>
                        <!-- /.row (nested) -->

                    </div>
                    <!-- /.col-lg-6 -->
                    <!-- end RIGHT COLUMN -->

                </div>
                <!-- /.row -->
                <!-- end MAIN PAGE ROW -->

            </div>
            <!-- /.page-content -->

        </div>
        <!-- /#page-wrapper -->
        <!-- end MAIN PAGE CONTENT -->

    </div>
    <!-- /#wrapper -->

    <!-- GLOBAL SCRIPTS -->
