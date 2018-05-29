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
                                            <th>Nama Customer</th>
                                            <th>Username</th>
                                            <th>Jenis Kelamin</th>
                                            <th>no_identitas</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Email</th>
                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no=1;
                                    if(isset($data_customer)){
                                        foreach($data_customer as $row){
                                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nm_user; ?></td>
                                            <td><?php echo $row->username; ?></td>
                                            <td><?php echo $row->jk; ?></td>
                                            <td><?php echo $row->no_identitas; ?></td>
                                            <td><?php echo $row->almt_user; ?></td>
                                            <td><?php echo $row->notelp_user; ?></td>
                                            <td><?php echo $row->email_user; ?></td>
                                            
                                            
                                            <td>
                                                <a href="<?php echo site_url('Admin_Controller/editCustomer/'.$row->id_user);?>" class="btn btn-default btn-round"> Edit</button>
                                                <a href="<?php echo site_url('Admin_Controller/prosesHapusCustomer/'.$row->id_user);?>" class="btn btn-default btn-round"> Hapus</button>
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
      
    </div>
   



   
    <script src="<?php echo base_url('assets/admin/plugins/jquery-2.0.3.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>



    <script src="<?php echo base_url('assets/admin/plugins/dataTables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/dataTables/dataTables.bootstrap.js')?>"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
    
</body>
     
</html>
