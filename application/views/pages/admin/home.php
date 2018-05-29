
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $formTitle?>
                        </div>
                        <div class="panel-body">
                            <?php if(isset($data_contact)){
                                foreach($data_contact as $row){
                                    ?>
                                <div class="col-lg-6">
                                    <dl class="dl-horizontal">
                                        <dt>&nbsp</dt>
                                        <dd>&nbsp</dd>
                                        <br/>
                                        <dt> Hello </dt>
                                        <dd><?php echo $this->session->userdata('NAME')?></dd>
                                        <br/>
                                    </dl>
                                </div>

                                <div class="col-lg-6">
                                    <dl class="dl-horizontal">
                                        <dt>&nbsp</dt>
                                        <dd>&nbsp</dd>
                                        <br/>
                                        <dt> Aplikasi :</dt>
                                        <dd>Rmotor</dd>
                                        <br/>
                                    </dl>
                                </div>
                                <div class="col-lg-6">
                                    <dl class="dl-horizontal">
                                        <dt>&nbsp</dt>
                                        <dd>&nbsp</dd>
                                        <br/>
                                        <dt>&nbsp</dt>
                                        <dd>&nbsp</dd>
                                    </dl>
                                </div>
                            <?php }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>



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
