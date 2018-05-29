                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header class="dark">
                                    <div class="icons"><i class="icon-ok"></i></div>
                                    <h5><?php echo $formTitle?></h5>
                                </header>
                                <div id="collapse2" class="body collapse in">
                                    <form  method="post" action="<?php echo site_url('Admin_Controller/prosesEditmotor')?>" class="form-horizontal" id="popup-validation">

                                    <?php
                                    if (isset($data_pegawai)){
                                        foreach($data_pegawai as $row){
                                    ?>
                                        <input type="hidden" name="id_motor" value="<?php echo $row->id_motor;?>">
                                        <input type="hidden" name="lvl_user" value="admin">
                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nama </label>
                                            <div class="col-lg-4">
                                                <input type="text" class="validate[required,minSize[3]] form-control" name="nm_motor" id="nm_motor" value="<?php echo $row->nm_motor;?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Harga</label>

                                            <div class=" col-lg-4">
                                                <input class="validate[required,minSize[2]] form-control" type="harga_motor" name="harga_motor" id="harga_motor" value="<?php echo $row->harga_motor;?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">No Polisi</label>

                                           <div class=" col-lg-4">
                                                <input class="validate[required,minSize[6]] form-control" type="no_polisi" name="no_polisi" id="no_polisi" value="<?php echo $row->no_polisi;?>" />
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Warna</label>
                                            <div class="col-lg-4">
                                                <select id="nm_warna" name="nm_warna" class="validate[required] form-control" required>
                                                    <option value="<?php echo $row->nm_warna;?>"></option>
                                                    <option value="hijau">Hijau</option>
                                                    <option value="merah">Merah</option>
                                                    <option value="putih">putih</option>
                                                    <option value="hitam">hitam</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                    <label class="control-label col-lg-4">Merek</label>
                                    <div class="col-lg-4">
                                        <select id="nm_merek" name="nm_merek" class="validate[required] form-control" required>
                                            <option value="">Pilih Merek</option>
                                            <option value="honda">Honda</option>
                                            <option value="yamaha">Yamaha</option>
                                        </select>
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label class="control-label col-lg-4">Tahun Buat</label>
                                    <div class="col-lg-4">
                                        <select id="thn_buat" name="thn_buat" class="validate[required] form-control" required>
                                            <option value=''>Tahun</option>
                                            <option value='2008'>2008</option>
                                            <option value='2009'>2009</option>
                                            <option value='2010'>2010</option>
                                            <option value='2011'>2011</option>
                                            <option value='2012'>2012</option>
                                            <option value='2013'>2013</option>
                                            <option value='2014'>2014</option>
                                            <option value='2015'>2015</option>
                                            <option value='2016'>2016</option>
                                            <option value='2017'>2017</option>
                                            <option value='2018'>2018</option>
                                        </select>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="control-label col-lg-4">CCMotor</label>
                                    <div class="col-lg-4">
                                        <select id="cc_motor" name="cc_motor" class="validate[required] form-control" required>
                                            <option value=''>CCMotor</option>
                                            <option value='100'>100</option>
                                            <option value='110'>110</option>
                                            <option value='125'>125</option>
                                            <option value='150'>150</option>
                                            <option value='200'>200</option>
                                        </select>
                                    </div>
                                </div>
                                        <div style="text-align:center" class="form-actions no-margin-bottom">
                                            <button type ="submit" class="btn btn-default btn-round">Submit</button>
                                            <a href="<?php echo site_url('Admin_Controller/motor')?>" class="btn btn-default btn-round">Cancel</a>
                                        </div>
                                    <?php }
                                        }
                                    ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>

    <script src="<?php echo base_url('assets/admin/plugins/jquery-2.0.3.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>


     <script src="<?php echo base_url('assets/admin/plugins/validationengine/js/jquery.validationEngine.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/validationengine/js/languages/jquery.validationEngine-en.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/js/validationInit.js')?>"></script>
    <script>
        $(function () { formValidation(); });
        </script>

     
</body>

</html>