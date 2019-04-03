<?php
function status($status) {
    if ($status == 'pending') return '<a class="btn btn-xs btn-orange "><i class="fa fa-arrow-circle-o-right"></i> Belum Disetujui</a>';
    if ($status == 'approved') return '<a class="btn btn-xs btn-green"><i class="fa fa-check-circle"></i> Sudah Disetujui</a>';
    if ($status == 'rejected') return '<a class="btn btn-xs btn-red"><i class="fa fa-warning"></i> Formulir Ditolak</a>';
    if ($status == 'deleted') return '<a class="btn btn-xs btn-default"><i class="fa fa-trash-o"></i> Formulir Dihapus</a>';
    if ($status == 'edited') return '<a class="btn btn-xs btn-blue "><i class="fa fa-pencil"></i> Formulir Diedit</a>';
}

function formPost($id) {
    return '
    <form method="post" action="/detail">
      <button class="btn btn-xs btn-orange"><input type="hidden" name="id" value="'.$id.'"><i class="fa fa-arrow-circle-o-right"></i> Lihat Detail</button>
    </form>
    ';
}
?>
<div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Daftar <?=$title?>
                                <small></small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  Daftar
                                </li>
                                <li class="active"><?=$title?></li>
                            </ol>
                        </div>
                        <!--
                        <?php
                        if ($datadb->status == 'pending') {
                            ?>
                                <div class="alert alert-warning alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <strong>Pending : </strong> Formulir sedang ditinjau admin. Silahkan dicek secara berkala untuk melihat perubahan status
                                </div>
                            <?php
                        }elseif($datadb->status == 'approved') {
                            ?>
                            <script type="text/javascript">
                                     $(document).ready(function(){
                                        $(".btn").remove();
                                    });
                                 </script>
                                                            <?php
                        }elseif($datadb->status == 'rejected') {
                            ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <strong>Rejected : </strong> Formulir ditolak. Silahkan dicek kembali isian data
                                </div>
                            <?php
                        }
                        ?>
                        -->
                    </div>
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
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="portlet portlet-green">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4><i class="fa fa-exchange fa-fw"></i> Daftar Data</h4>
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
                                                            <?php
                                                            foreach ($tabel_header as $key) {
                                                                echo "<th>$key</th>";
                                                            }
                                                            ?>
                                                            <th>Detail</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($list->result() as $row) {
                                                            echo "<tr>";
                                                            foreach ($tabel_key as $key) {
                                                                echo "<td>{$row->$key}</td>";
                                                            }
                                                            echo "<td>".formPost($row->id)."</td>";
                                                            echo "</tr>";
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
