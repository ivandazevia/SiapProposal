<?php
function status($status) {
    if ($status == 'pending') return '<a class="btn btn-xs btn-orange "><i class="fa fa-arrow-circle-o-right"></i> Belum Disetujui</a>';
    if ($status == 'approved') return '<a class="btn btn-xs btn-green"><i class="fa fa-check-circle"></i> Sudah Disetujui</a>';
    if ($status == 'rejected') return '<a class="btn btn-xs btn-red"><i class="fa fa-warning"></i> Formulir Ditolak</a>';
    if ($status == 'deleted') return '<a class="btn btn-xs btn-default"><i class="fa fa-trash-o"></i> Formulir Dihapus</a>';
    if ($status == 'edited') return '<a class="btn btn-xs btn-blue "><i class="fa fa-pencil"></i> Formulir Diedit</a>';
}

function namaDosen($arr, $nrp) {
    foreach ($arr->result() as $row) {
        if ($row->nrp == $nrp) {
            return $row->nama;
        }
    }
}
?>
<div id="page-wrapper">
            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Pengajuan Judul Tugas Akhir
                                <small></small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  Pengajuan
                                </li>
                                <li class="active">Judul Tugas Akhir</li>
                            </ol>
                        </div>
                        
                        <?php
                        if ($success == 'true') {
                            echo '
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <strong>Sukses : </strong> Proposal berhasil diajukan. Silahkan cek status secara berkala
                                </div>
                                ';
                            
                        }elseif($error == 'upload_file') {
                            echo '
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <strong>Error : </strong> Gagal unggah berkas. Silahkan cek kembali ekstensi berkas
                                </div>
                                ';
                        }
                        ?>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <!-- begin MAIN PAGE ROW -->
                <div class="row">

                    <!-- begin LEFT COLUMN -->
                    <div class="col-lg-12">

                        <div class="row">

                            <!-- Basic Form Example -->
                           <div class="col-lg-12">


                                <div class="portlet portlet-blue">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4>Rincian Informasi</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="formControls" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <form id="frm" action="/pengajuan/judul/add" method="post" enctype="multipart/form-data">
                                            <div class="form-horizontal">

                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Nama Lengkap</label>
                                                    <div class="col-sm-10">

                                                        <input type="text" disabled class="form-control disabled" id="nama" value="<?=$data->nama?>" name="nama" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">NRP</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" disabled class="form-control disabled" id="nrp" value="<?=$data->nrp?>" name="nrp" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Judul</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="judul" name="judul" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Bidang Minat</label>
                                                    <div class="form-horizontal">
                                                        <div class="col-sm-10">
                                                            <select id="bidangminat" class="form-control" required name="bidangminat">
                                                                <option selected disabled hidden>Pilih</option>
                                                                <?php
                                                                foreach ($minat->result() as $row) {
                                                                    echo "<option value='$row->nama'>$row->nama</option>";
                                                                }
                                                                ?>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <label for="textInput" class="col-sm-2 control-label">Pilih Dosen Pembimbing 1</label>
                                                        <div class="form-horizontal">
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="pilihandosen1" id="pilihandosen1">
                                                                    <option selected disabled hidden>Pilih Dosen</option>
                                                                    <?php
                                                                    foreach ($listdosen->result() as $row) {
                                                                        echo "<option value='$row->nrp'>$row->nama - $row->nrp</option>";
                                                                    }
                                                                    ?>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile" class="col-sm-2 control-label">Unggah Berkas</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" id="berkas" name="berkas" required>
                                                        <p class="help-block">Format yang diperbolehkan : PDF, DOCX, DOC</p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" id="btnUp" class="btn btn-default">Ajukan</button> <div id="additional"></div>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portlet -->
                            </div>

                            <script type="text/javascript">
                        $(document).ready(function() {
                                $('[name=bidangminat]').select2();
                                $('[name=pilihandosen1]').select2();
                            });
                        </script>

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
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="portlet portlet-green">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4><i class="fa fa-exchange fa-fw"></i> Status Pengajuan Judul</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#transactionsPortlet"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="transactionsPortlet" class="panel-collapse collapse in">
                                        <div class="portlet-body">

                                        <?php
                                        if ($count > 0) {
                                            switch ($detail->status) {
                                                case 'diterima':
                                                    echo '
                                                    <div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        <strong>Diterima : </strong> Proposal diterima. Silahkan berkonsultasi dengan dosen pembimbing
                                                    </div>
                                                    ';
                                                    break;
                                                
                                                case 'pending':
                                                    echo '
                                                    <div class="alert alert-info alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        <strong>Pending : </strong> Proposal sedang ditinjau TIM Verifikasi RMK
                                                    </div>
                                                    ';
                                                    break;

                                                case 'pendingKaprodi':
                                                    echo '
                                                    <div class="alert alert-info alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        <strong>Pending : </strong> Proposal disetujui. Menunggu Kaprodi untuk memasukkan data dosen pembimbing
                                                    </div>
                                                    ';
                                                    break;

                                                case 'tolak':
                                                    echo '
                                                    <div class="alert alert-danger alert-dismissable">
                                                        <button type="button" onclick="$(\'#frmDelete\').submit();" style="position: relative; top: -6px; right: -21px; float: right;" class="btn btn-danger" data-dismiss="alert" aria-hidden="true">Hapus Proposal</button>
                                                        <strong>Ditolak : </strong> Proposal ditolak. Silahkan hapus dan ajukan proposal kembali
                                                    </div>
                                                    ';
                                                    break;

                                                case 'revisi':
                                                    echo '
                                                    <div class="alert alert-warning alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        <strong>Revisi : </strong> Revisi proposal. Silahkan lakukan revisi berdasarkan info tambahan
                                                    </div>
                                                    ';
                                                    echo '<script>
                                                        $("#frm").attr("action", "/pengajuan/judul/revisi");
                                                        $("#bidangminat").attr("disabled", "true");
                                                        $("#pilihandosen1").attr("disabled", "true");

                                                        $("#bidangminat").removeAttr("name");
                                                        $("#bidangminat").removeAttr("required");

                                                        $("#pilihandosen1").removeAttr("name");
                                                        $("#pilihandosen1").removeAttr("required");

                                                        $("#judul").val("'.$detail->judul.'");

                                                        $("#judul").removeAttr("required");
                                                        $("#berkas").removeAttr("required");
                                                        $("#btnUp").text("Revisi");
                                                        $("#btnUp").attr("class", "btn btn-green");

                                                    </script>';
                                                    break;
                                            }
                                        }
                                        
                                        ?>

                                        <form id="frmDelete" action="/pengajuan/hapus" method="post">
                                            <input type="hidden" name="action" value="delete">
                                            <input type="hidden" name="nrp" value="<?=$data->nrp?>">
                                        </form>
                                            <!--
                                            <div class="table-responsive dashboard-demo-table">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Tanggal</th>
                                                            <th>Judul</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($list->result() as $row) {
                                                            echo "<tr>";
                                                            echo "<td>$row->tanggal</td>";
                                                            echo "<td>$row->judul</td>";
                                                            echo "<td>".status($row->status)."</td>";
                                                            echo "</tr>";
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            -->
                                            <?php
                                            if ($count > 0) {
                                            ?>

                                            <div class="form-horizontal">

                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Dosen Pembimbing 1</label>
                                                    <div class="col-sm-10">
                                                        <label class="control-label" style="font-weight: normal;"><?=namaDosen($listdosen, $detail->dosbing1);?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Dosen Pembimbing 2</label>
                                                    <div class="col-sm-10">
                                                        <label class="control-label" style="font-weight: normal;"><?=namaDosen($listdosen, $detail->dosbing2);?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Judul</label>
                                                    <div class="col-sm-10">
                                                        <label class="control-label" style="font-weight: normal;"><?=$detail->judul?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Tanggal Submit</label>
                                                    <div class="col-sm-10">
                                                        <label class="control-label" style="font-weight: normal;"><?php echo date('l, d/m/Y', strtotime($detail->tanggal))?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Tanggal Verifikasi</label>
                                                    <div class="col-sm-10">
                                                        <label class="control-label" style="font-weight: normal;"><?php if ($detail->tanggalverif != "0000-00-00") echo date('l, d/m/Y', strtotime($detail->tanggalverif))?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Bidang Minat</label>
                                                    <div class="col-sm-10">
                                                        <label class="control-label" style="font-weight: normal;"><?=$detail->bidangminat?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Berkas</label>
                                                    <div class="col-sm-10">
                                                        <label class="control-label" style="font-weight: normal;"><?=$detail->berkas?> <a download href="/berkas/<?=$detail->berkas?>">(<strong>Unduh</strong>)</a></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Info</label>
                                                    <div class="col-sm-10">
                                                        <label class="control-label" style="font-weight: normal; text-align: left;"><?=nl2br($detail->info);?></label>
                                                    </div>
                                                </div>

                                            </div>
                                            <?php
                                            } else {
                                                echo '
                                                <div class="alert alert-warning">
                                                    <strong>INFO : </strong> Proposal belum diajukan. Silahkan mengajukan proposal terlebih dahulu
                                                </div>

                                                ';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-lg-12 -->

                        </div>
                    </div>

                            <!-- Form Controls -->

                            <!-- /.col-lg-12 (nested) -->
                            <!-- End Form Controls -->

                            <!-- Input Sizing -->

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
