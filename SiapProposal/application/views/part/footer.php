    <script src="<?php echo base_url();?>js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
    <script src="<?php echo base_url();?>js/plugins/popupoverlay/defaults.js"></script>
    <script src="<?php echo base_url();?>js/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>js/plugins/datatables/datatables-bs3.js"></script>
    
    <script src="<?php echo base_url();?>js/jquery.mask.js"></script>
     
    <!-- Include JS file. -->
    
    <!-- Logout Notification Box -->
    <div id="logout">
        <div class="logout-message">
            <img class="img-circle img-logout" src="img/profile-pic.jpg" alt="">
            <h3>
                <i class="fa fa-sign-out text-green"></i> Ready to go?
            </h3>
            <p>Select "Logout" below if you are ready<br> to end your current session.</p>
            <ul class="list-inline">
                <li>
                    <a href="<?php base_url();?>/home/logout" class="btn btn-green">
                        <strong>Logout</strong>
                    </a>
                </li>
                <li>
                    <button class="logout_close btn btn-green">Cancel</button>
                </li>
            </ul>
        </div>
    </div>
    <!-- /#logout -->
    <!-- Logout Notification jQuery -->
    <script src="<?php echo base_url();?>js/plugins/popupoverlay/logout.js"></script>
    <!-- HISRC Retina Images -->
    <script src="<?php echo base_url();?>js/plugins/hisrc/hisrc.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->

    <!-- THEME SCRIPTS -->
    <script src="<?php echo base_url();?>js/flex.js"></script>
    <script src="<?php echo base_url();?>js/sweetalert2.all.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <!--
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 400
            });
            $('#example-table').dataTable();
            $('#tabel-user').dataTable();
            $('#tabelA').dataTable();
            $('#tabelB').dataTable();
            $('#tabelC').dataTable();
            $('#tabelD').dataTable();
            $('#tabelE').dataTable();
            $('#tabelF').dataTable();
            $('#tabelG').dataTable();
            $('#tabelH').dataTable();
            $('#tabelI').dataTable();
            $('#tabelJ').dataTable();
            $('#tabelK').dataTable();
            $('#tabelL').dataTable();
            $('#tabelM').dataTable();
            $('#tabelN').dataTable();
            $('#tabelO').dataTable();

        });

        function deleteuser(id) {
            swal.queue([{
              title: 'Lanjutkan hapus user ?',
              text: "Aksi tidak dapat dibatalkan",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Hapus User',
              showLoaderOnConfirm: true,
              preConfirm: () => {
                return fetch(ipAPI)
                  .then(response => response.json())
                  .then(data => swal(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                ))
                  .catch(() => {
                    swal.insertQueueStep({
                      type: 'error',
                      title: 'Gagal melakukan hapus user'
                    })
                  })
              }
            }]);
        }

        function updateNoSurat(id) {
          swal({
            title: 'Masukkan nomor urut surat',
            input: 'text',
            inputAttributes: {
              autocapitalize: 'off',
              required: true,
            },
            showCancelButton: true,
            confirmButtonText: 'Konfirmasi',
            showLoaderOnConfirm: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            preConfirm: (login) => {
              return fetch(`<?=base_url();?>edmin/updateNoSurat/${id}?nomor=${login}`)
                
            },
            allowOutsideClick: () => !swal.isLoading()
          }).then((result) => {
            if (result.value) {
              swal({
                title: 'Sukses',
                type: 'success'
              })
            }
          })
        } 

        function downloadSurat(id) {
          $.post("<?=base_url().'edmin/download';?>", {id: id}, function(result){
              window.location=result;
          });
        }
    </script>
    -->

</body>

</html>
