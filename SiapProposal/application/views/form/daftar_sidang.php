<?php
function status($status) {
    if ($status == 'pending') return '<a class="btn btn-xs btn-orange "><i class="fa fa-arrow-circle-o-right"></i> Belum Disetujui</a>';
    if ($status == 'approved') return '<a class="btn btn-xs btn-green"><i class="fa fa-check-circle"></i> Sudah Disetujui</a>';
    if ($status == 'rejected') return '<a class="btn btn-xs btn-red"><i class="fa fa-warning"></i> Formulir Ditolak</a>';
    if ($status == 'deleted') return '<a class="btn btn-xs btn-default"><i class="fa fa-trash-o"></i> Formulir Dihapus</a>';
    if ($status == 'edited') return '<a class="btn btn-xs btn-blue "><i class="fa fa-pencil"></i> Formulir Diedit</a>';
}

function formPost($id, $nrp) {
    return '
    <form method="post" action="/sidang/detail">
      <button class="btn btn-xs btn-orange"><input type="hidden" name="id" value="'.$id.'"><input type="hidden" name="nrp" value="'.$nrp.'"><i class="fa fa-arrow-circle-o-right"></i> Lihat Detail</button>
    </form>
    ';
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
?>
<div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Daftar Pengajuan Sidang
                                <small></small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  Daftar
                                </li>
                                <li class="active">Pengajuan Sidang</li>
                            </ol>
                        </div>                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

                <!-- begin MAIN PAGE ROW -->
                <div class="row">

                    <!-- begin LEFT COLUMN -->
                    
                    <!-- /.col-lg-6 -->
                    <!-- end LEFT COLUMN -->

                    <!-- begin RIGHT COLUMN -->
                    <div class="col-lg-6">
                        <div class="portlet portlet-green">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4><i class="fa fa-exchange fa-fw"></i> Perlu Ditinjau</h4>
                                </div>
                                <div class="portlet-widgets">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#transactionsPortlet"><i class="fa fa-chevron-down"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="transactionsPortlet" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="table-responsive dashboard-demo-table">
                                        <table class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Judul</th>
                                                    <th>Tanggal Pengajuan</th>
                                                    <th>Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 0;
                                                foreach ($list_pending->result() as $row) {
                                                    $count++;
                                                    echo "<tr>
                                                    <td>{$count}</td>
                                                    <td>{$row->nama}</td>
                                                    <td>{$row->judul}</td>
                                                    <td>".tgl($row->tanggal)."</td>
                                                    <td>".formPost($row->id, $row->nrp)."</td>
                                                    </tr>
                                                    ";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="portlet portlet-green">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4><i class="fa fa-exchange fa-fw"></i> Perlu Input Nilai</h4>
                                </div>
                                <div class="portlet-widgets">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#transactionsPortlet"><i class="fa fa-chevron-down"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="transactionsPortlet" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="table-responsive dashboard-demo-table">
                                        <table class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Judul</th>
                                                    <th>Tanggal Pengajuan</th>
                                                    <th>Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 0;
                                                foreach ($list_sidang->result() as $row) {
                                                    $count++;
                                                    echo "<tr>
                                                    <td>{$count}</td>
                                                    <td>{$row->nama}</td>
                                                    <td>{$row->judul}</td>
                                                    <td>".tgl($row->tanggal)."</td>
                                                    <td>".formPost($row->id, $row->nrp)."</td>
                                                    </tr>
                                                    ";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                          
                                    <!-- /.col-lg-12 -->

                                
                    

                            <!-- Form Controls -->

                            <!-- /.col-lg-12 (nested) -->
                            <!-- End Form Controls -->

                            <!-- Input Sizing -->

                            <!-- /.col-lg-12 (nested) -->
                            <!-- End Form Controls -->

                        <!-- /.row (nested) -->

              
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
