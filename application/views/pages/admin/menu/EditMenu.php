            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $formTitle?>
                        </div>
                        <div class="panel-body">
                            <form  method="post" enctype= "multipart/form-data" action="<?php echo site_url('Admin_Controller/prosesTambahMenu')?>" class="form-horizontal" id="popup-validation">
                                <input type="hidden" name="lvl_user" value="admin">
                                <div class="form-group">
                                    <label class="control-label col-lg-4"></label>
                                    <div class="col-lg-8">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo base_url('assets/admin/img/demoUpload.jpg')?>" alt="" /></div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
                                                <input type="file" name="userfile" / required></span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Jenis</label>
                                    <div class="col-lg-4">
                                        <select id="id_jenis" name="id_jenis" class="validate[required] form-control" required>
                                            <option value="">Pilih Jenis Menu</option>
                                            <?php
                                            if (isset($jenis_menu)){
                                                foreach($jenis_menu as $row){
                                            ?>
                                            <option value="<?php echo $row->id_jenis?>"><?php echo $row->nm_jenis?></option>
                                            <?php }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Nama</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="validate[required] form-control" name="nm_menu" id="nm_user" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Harga</label>
                                    <div class="col-lg-4">
                                        <input type="number" class="validate[required,custom[number]] form-control" name="harga_menu" required>
                                    </div>
                                </div>
                                <div style="text-align:center" class="form-actions no-margin-bottom">
                                    <button type ="submit" class="btn btn-default btn-round">Submit</button>
                                    <a href="<?php echo site_url('Cafe_Controller/kelolaProduk')?>" class="btn btn-default btn-round">Cancel</a>
                                </div>
                            </form>                        
                        </div>
                        <div class="panel-footer">                           
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

    <!-- PAGE LEVEL SCRIPTS -->

     <script src="<?php echo base_url('assets/admin/plugins/validationengine/js/jquery.validationEngine.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/validationengine/js/languages/jquery.validationEngine-en.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/js/validationInit.js')?>"></script>
    <script>
        $(function () { formValidation(); });
        </script>
     <!--END PAGE LEVEL SCRIPTS -->

         <!-- PAGE LEVEL Upload File SCRIPTS -->
    <script src="<?php echo base_url('assets/admin/plugins/jasny/js/bootstrap-fileupload.js')?>"></script>
         <!-- END PAGE LEVEL SCRIPTS -->
    
</body>
     <!-- END BODY -->

</html>
