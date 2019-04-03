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

function tgl($time) {
    $array_bulan = array(
        "1" => "Januari",
        "2" => 'Februari',
        "3" => 'Maret',
        "4" => 'April',
        "5" => 'Mei',
        "6" => 'Juni',
        "7" => 'Juli',
        "8" => 'Agustus',
        "9" => 'September',
        "10" => 'Oktober',
        "11" => 'November',
        "12" => 'Desember'
    );
    if ($time == "0000-00-00") return "";
    $date = strtotime($time);
    $bulan = $array_bulan[date("n", $date)];
    $tanggal = date("j", $date);
    $tahun = date("Y", $date);
    return "$tanggal $bulan $tahun";
}

function jam($time) {
    $time = strtotime($time);
    return date("H:i:s", $time);
}
?>
<div id="page-wrapper">
            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Pengajuan Sidang
                                <small></small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  Pengajuan
                                </li>
                                <li class="active">Sidang</li>
                            </ol>
                        </div>
                        
                        <?php
                        if ($success == 'true') {
                            echo '
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <strong>Sukses : </strong> Sidang berhasil diajukan. Silahkan cek status secara berkala
                                </div>
                                ';
                            
                        }elseif($error == 'true') {
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
                                            <form id="frm" action="/pengajuan/sidang/add" method="post" enctype="multipart/form-data">
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
                                                    <label for="exampleInputFile" class="col-sm-2 control-label">Unggah Bukti TTD</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" id="berkasttd" name="berkasttd" required>
                                                        <p class="help-block">Unggah bukti tanda tangan bimbingan dengan dosen pembimbing. <br>Format yang diperbolehkan : JPEG, JPG, PNG</p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile" class="col-sm-2 control-label">Unggah Buku Skripsi</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" id="berkaspdf" name="berkaspdf" required>
                                                        <p class="help-block">Unggah buku skripsi dalam bentuk PDF / Word. <br>Format yang diperbolehkan : PDF, DOCX, DOC</p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" id="btnUp" class="btn btn-default">Ajukan Sidang</button> <div id="additional"></div>
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
                                            <h4><i class="fa fa-exchange fa-fw"></i> Status Pengajuan Sidang</h4>
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
                                                case 'done':
                                                    echo '
                                                    <div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        <strong>Selesai : </strong> Nilai telah keluar. Selamat kamu mendapatkan nilai <b>'.$detail->nilai.'</b>
                                                    </div>
                                                    ';
                                                    break;
                                                
                                                case 'pending':
                                                    echo '
                                                    <div class="alert alert-info alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        <strong>Pending : </strong> Menunggu peninjauan dari kaprodi
                                                    </div>
                                                    ';
                                                    break;

                                                case 'sidang':
                                                    echo '
                                                    <div class="alert alert-success alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        <strong>Sidang : </strong> Pengajuan sidang telah disetujui oleh kaprodi. Silahkan mengikuti sidang pada tanggal yang telah ditentukan
                                                    </div>
                                                    ';
                                                    break;

                                                case 'revisi':
                                                    echo '
                                                    <div class="alert alert-warning alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        <strong>Revisi : </strong> Revisi proposal. Silahkan hapus kemudian upload ulang softfile buku TA
                                                    </div>
                                                    ';
                                                    
                                                    break;
                                            }
                                        }
                                        
                                        ?>

                                        <form id="frmDelete" action="/pengajuan/hapus" method="post">
                                            <input type="hidden" name="action" value="delete">
                                            <input type="hidden" name="nrp" value="<?=$data->nrp?>">
                                        </form>
                                            <?php
                                            if ($count > 0) {
                                            ?>

                                            <div class="form-horizontal">

                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Dosen Penguji</label>
                                                    <div class="col-sm-10">
                                                        <label class="control-label" style="font-weight: normal;"><?=namaDosen($listdosen, $detail->penguji);?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Tanggal Sidang</label>
                                                    <div class="col-sm-10">
                                                        <label class="control-label" style="font-weight: normal;"><?=tgl($detail->tglsidang)?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-2 control-label">Nilai</label>
                                                    <div class="col-sm-10">
                                                        <label class="control-label" style="font-weight: normal;"><?=$detail->nilai?></label>
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

                    <div class="col-lg-6">

                        <div class="row">

                            <!-- Basic Form Example -->
                           <div class="col-lg-12">

                                <div class="portlet portlet-purple">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4>Bukti Bimbingan</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="formControls" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <div class="table-responsive dashboard-demo-table">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Jam</th>
                                                    <th>Nama File</th>
                                                    <th>Unduh</th>

                                                    <?php
                                                    $count = 0;
                                                    foreach ($scan as $row) {
                                                        $count++;
                                                        echo "
                                                        <tr>
                                                            <td>{$count}</td>
                                                            <td>".tgl($row->date)."</td>
                                                            <td>".jam($row->date)."</td>
                                                            <td>{$row->filename}</td>
                                                            <td><a download href='/scan/{$row->filename}' role='button' class='btn btn-info btn-sm'><i class='fa fa-download'></i> Unduh</a></td>
                                                        </tr>";
                                                    }
                                                    ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portlet -->
                            </div>
                        </div>
                        <!-- /.row (nested) -->

                    </div>

                    <div class="col-lg-6">

                        <div class="row">

                            <!-- Basic Form Example -->
                           <div class="col-lg-12">

                                <div class="portlet portlet-purple">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4>Softfile Buku</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#formControls"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="formControls" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <?php if($detail->status == "revisi") {
                                                    ?>
                                                    <form action="/sidang/revisi/upload/" method="post" enctype="multipart/form-data">
                                                        <div class="form-inline">
                                                            <div class="form-group">
                                                                <label for="exampleInputFile" class="col-sm-3 control-label">Revisi Buku Skripsi</label>
                                                                <div class="col-sm-9">
                                                                    <input type="file" id="berkaspdf" name="berkaspdf" required>
                                                                    <p class="help-block">Unggah buku skripsi dalam bentuk PDF / Word. <br>Format yang diperbolehkan : PDF, DOCX, DOC</p>
                                                                </div> 
                                                            </div>
                                                            <div class="form-group" >
                                                                <button type="submit" class="btn btn-info ">Unggah</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <?php
                                                }
                                                ?>

                                            <hr>
                                            <div class="table-responsive dashboard-demo-table">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Jam</th>
                                                    <th>Nama File</th>
                                                    <th>Unduh</th>

                                                    <?php
                                                    $count = 0;
                                                    foreach ($berkas as $row) {
                                                        $count++;
                                                        echo "
                                                        <tr>
                                                            <td>{$count}</td>
                                                            <td>".tgl($row->date)."</td>
                                                            <td>".jam($row->date)."</td>
                                                            <td>{$row->filename}</td>
                                                            <td><a download href='/buku/{$row->filename}' role='button' class='btn btn-info btn-sm'><i class='fa fa-download'></i> Unduh</a> <a href='/sidang/revisi/delete/buku/{$row->filename}' role='button' class='btn btn-danger btn-sm'><i class='fa fa-trash-o'></i> Hapus</a></td>
                                                        </tr>";
                                                    }
                                                    ?>
                                                </table>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.portlet -->
                            </div>
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
