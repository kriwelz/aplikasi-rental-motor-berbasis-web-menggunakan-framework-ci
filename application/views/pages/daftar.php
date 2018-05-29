	<div class="mainTitle">
	<div class="container">
	<h1>Daftar</h1>
	<p>
	</p>
	</div>
	</div>


	 <div class="container marketing">
    <div id="myCarousel1" data-ride="carousel">

        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
                <div id="collapse2" class="body collapse in">
                    <form  method="post" action="<?php echo site_url('Login_Controller/prosesDaftar1')?>" class="form-horizontal" id="popup-validation">
                    <input type="hidden" name="lvl_user" value="customer">
                        <div class="form-group">
                            <label class="control-label col-lg-4"> &nbsp </label>
                            <div class="col-lg-4">
                                <input type="text" class="validate[required,minSize[6]] form-control" name="nm_user" id="nm_user" placeholder="Nama Anda" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4"> &nbsp </label>
                            <div class="col-lg-4">
                                <input type="text" class="validate[required,minSize[6]] form-control" name="username" id="username" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">&nbsp</label>
                            <div class=" col-lg-4">
                                <input class="validate[required,minSize[6]] form-control" type="password" name="password" id="password" placeholder="Password" required />
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="control-label col-lg-4"> &nbsp </label>
                            <div class="col-lg-4">
                                  <select class="form-control" name="id_identitas">
                                    <option value="">Pilih identitas</option>
                                    <?php
                                        if(isset($data_identitas)){
                                            foreach($data_identitas as $row){
                                                ?>

                                    <option value="<?php echo $row->id_identitas; ?> "><?php echo $row->nm_identitas; ?> </option>
                                    <?php }
                                        }
                                    ?>
                                  </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-lg-4"> &nbsp </label>
                            <div class="col-lg-4">
                                <input type="text" class="validate[required,minSize[6]] form-control" name="no_identitas" id="email_user" placeholder="no_identitas" required />
                            </div>
                        </div>
                        <div class="form-group">
                                    <label class="control-label col-lg-4">&nbsp</label>
                                    <div class="col-lg-4">
                                        <select id="jk" name="jk" class="validate[required] form-control" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                       <div class="form-group">
                            <label class="control-label col-lg-4"> &nbsp </label>
                            <div class="col-lg-4">
                                <input type="text" class="validate[required,minSize[6]] form-control" name="almt_user" id="almt_user" placeholder="Alamat Anda" required />
                            </div>
                        </div>

                       <div class="form-group">
                            <label class="control-label col-lg-4"> &nbsp </label>
                            <div class="col-lg-4">
                                <input type="text" class="validate[required,minSize[6]] form-control" name="notelp_user" id="notelp_user" placeholder="No Telp Anda" required />
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="control-label col-lg-4"> &nbsp </label>
                            <div class="col-lg-4">
                                <input type="email" class="validate[required,minSize[6]] form-control" name="email_user" id="email_user" placeholder="Email Anda" required />
                            </div>
                        </div>
                       

                   

                        <div class="form-group">
                        <div style="text-align:center" class="form-actions no-margin-bottom">
                            <button type ="submit" class="btn btn-default btn-round">Daftar</button>
                            <a href="<?php echo site_url('Login_Controller')?>" class="btn btn-default btn-round">Login</a>
                        </div>
                        </div>
                      </form>
                </div>
            </div> 		 
          </div>
        </div>
      </div>
	</div>
	
     
      <footer>
		<div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2018 Rmotor, Inc. &middot; </p>
		</div>
      </footer>


    <script src="<?php echo base_url('assets/bootstrap-restaurant/assets/js/jquery-1.10.2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-restaurant/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-restaurant/assets/js/holder.js')?>"></script>
  </body>
</html>
