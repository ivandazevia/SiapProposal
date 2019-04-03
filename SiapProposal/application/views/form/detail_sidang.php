<?php
function status($status) {
    if ($status == 'pending') return '<a class="btn btn-xs btn-orange "><i class="fa fa-arrow-circle-o-right"></i> Belum Disetujui</a>';
    if ($status == 'revisi') return '<a class="btn btn-xs btn-blue"><i class="fa fa-arrow-circle-o-right"></i> Revisi</a>';
    if ($status == 'sidang') return '<a class="btn btn-xs btn-info"><i class="fa fa-arrow-circle-o-righ"></i> Diterima. Nilai belum diinput</a>';
    if ($status == 'done') return '<a class="btn btn-xs btn-success"><i class="fa fa-trash-o"></i> Selesai</a>';
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

<script type="text/javascript">
    function sendAct(action) {
        if (action == "terima") {
            if ($("[name=tglsidang]").val()=="" || $("[name=penguji]").val()==null) {
                alert("Masukkan data yang diperlukan");
                return false;
            }
        }
        $("[name=action]").val(action);
        $("#frm").submit();
    }
</script>

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
                                <li class="active">Pengajuan Sidang</li>
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
                                            
                                            <div class="form-horizontal">

                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-3 control-label">Nama Lengkap</label>
                                                    <div class="col-sm-9">
                                                        <label class="control-label" style="font-weight: normal;"><?=$detail->nama?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-3 control-label">NRP</label>
                                                    <div class="col-sm-9">
                                                        <label class="control-label" style="font-weight: normal;"><?=$detail->nrp?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-3 control-label">Judul</label>
                                                    <div class="col-sm-9">
                                                        <label class="control-label" style="font-weight: normal;"><?=$detail->judul?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-3 control-label">Tgl Pengajuan</label>
                                                    <div class="col-sm-9">
                                                        <label class="control-label" style="font-weight: normal;"><?=tgl($detail->tanggal)?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-3 control-label">Tgl Sidang</label>
                                                    <div class="col-sm-9">
                                                        <label class="control-label" style="font-weight: normal;"><?=tgl($detail->tglsidang)?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-3 control-label">Dosen Penguji</label>
                                                    <div class="col-sm-9">
                                                        <label class="control-label" style="font-weight: normal;"><?=namaDosen($listdosen, $detail->penguji)?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="textInput" class="col-sm-3 control-label">Nilai</label>
                                                    <div class="col-sm-9">
                                                        <label class="control-label" style="font-weight: normal;"><?=$detail->nilai?></label>
                                                    </div>
                                                </div>
                                            </div>
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
                            <div class="col-lg-12">
                                <div class="portlet portlet-green">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4><i class="fa fa-exchange fa-fw"></i> Aksi</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#transactionsPortlet"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="transactionsPortlet" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <div class="form-horizontal">
                                                <form id="frm" action="/sidang/action" method="post">
                                                    <div class="form-group">
                                                        <input type="hidden" name="action" value="">
                                                        <input type="hidden" name="id" value="<?=$detail->id?>">
                                                        <input type="hidden" name="nrp" value="<?=$detail->nrp?>">
                                                        <label for="textArea" class="col-sm-3 control-label">Status</label>
                                                        <div class="col-sm-9">
                                                            <?=status($detail->status)?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="textArea" class="col-sm-3 control-label">Tgl Sidang</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" name="tglsidang" class="form-control">
                                                        </div> 
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="textInput" class="col-sm-3 control-label">Dosen Penguji</label>
                                                        <div class="form-horizontal">
                                                            <div class="col-sm-8">
                                                                <select class="form-control" name="penguji">
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
                                                        <label for="textArea" class="col-sm-3 control-label"> Ubah</label>
                                                        <div class="col-sm-9">
                                                            <button type="button" class="btn btn-success btn-sm" onclick="sendAct('terima')"><i class="fa fa-check-circle"></i> Setujui</button> 
                                                            <button type="button" class="btn btn-warning btn-sm" onclick="sendAct('revisi')"><i class="fa fa-pencil"></i> Revisi</button>
                                                            <p class="help-block">Tanggal akan disimpan hanya pada aksi Setujui</p>
                                                        </div>

                                                    </div>
                                                </form>
                                                <hr>
                                                <form action="/sidang/nilai" method="post">
                                                    <input type="hidden" name="action" value="">
                                                    <input type="hidden" name="id" value="<?=$detail->id?>">
                                                    <input type="hidden" name="nrp" value="<?=$detail->nrp?>">

                                                    <div class="form-group">
                                                        <label for="textArea" class="col-sm-3 control-label">Ubah Nilai</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="nilaisidang" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="textArea" class="col-sm-3 control-label"> </label>
                                                        <div class="col-sm-9">
                                                            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Simpan</button>
                                                        </div>
                                                    </div>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
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

                <div class="row">
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
                                                            <td><a download href='/buku/{$row->filename}' role='button' class='btn btn-info btn-sm'><i class='fa fa-download'></i> Unduh</a></td>
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