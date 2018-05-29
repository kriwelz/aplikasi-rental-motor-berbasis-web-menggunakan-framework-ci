            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $formTitle?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No </th>
                                            <th>Foto</th>
                                            <th>Menu</th>
                                            <th>Jenis</th>
                                            <th>Harga</th>
                                            <th>
                                                <a href="<?php echo site_url('Admin_Controller/tambahMenu');?>" class="btn btn-default btn-round"> Tambah</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no=1;
                                    if(isset($data_menu)){
                                        foreach($data_menu as $row){
                                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td>
                                            <img src="<?php echo base_url('uploads/'.$row->foto_menu)?>" height="25px" width="50px">
                                            </td>
                                            <td><?php echo $row->nm_menu; ?></td>
                                            <td><?php echo $row->nm_jenis; ?></td>
                                            <td><?php echo currency_format($row->harga_menu); ?></td>
                                            <td>
                                                <a href="<?php echo site_url('Admin_Controller/editMenu/'.$row->id_menu);?>" class="btn btn-default btn-round"> Edit</button>
                                                <a href="<?php echo site_url('Admin_Controller/prosesHapusMenu/'.$row->id_menu);?>" class="btn btn-default btn-round"> Hapus</button>
                                            </td>
                                        </tr>
                                        <?php }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!--END PAGE CONTENT -->
    </div>
     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p><?php echo $footerText?></p>
    </div>
    <!--END FOOTER -->

     <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url('assets/admin/plugins/jquery-2.0.3.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>
    <!-- END GLOBAL SCRIPTS -->
    

    <!-- PAGE LEVEL DataTables SCRIPTS -->
    <script src="<?php echo base_url('assets/admin/plugins/dataTables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/dataTables/dataTables.bootstrap.js')?>"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->
</body>
     <!-- END BODY -->

</html>
