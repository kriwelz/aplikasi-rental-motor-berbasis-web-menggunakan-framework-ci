	<div class="mainTitle">
	<div class="container">
	<h1>Login</h1>
    <?php
    $message = $this->session->flashdata('notif');
    if($message){

    echo '<div class="alert alert-block alert-error fade in"><button type="button" class="close" data-dismiss="alert">×</button><strong>'.$message .'</strong></div>';
     
     }?>
	<p>
	</p>
	</div>
	</div>



	 <div class="container marketing">
    <div id="myCarousel1" data-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
                <div id="collapse2" class="body collapse in">
                    <form  method="post" action="<?php echo site_url('Login_Controller/prosesLogin')?>" class="form-horizontal" id="popup-validation">
                        <div class="form-group">
                            <label class="control-label col-lg-4"> &nbsp </label>
                            <div class="col-lg-4">
                                <input type="text" class="validate[required,minSize[6]] form-control" name="username" id="username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">&nbsp</label>

                            <div class=" col-lg-4">
                                <input class="validate[required,minSize[6]] form-control" type="password" name="password" id="password" required />
                            </div>
                        </div>

                        <div style="text-align:center" class="form-actions no-margin-bottom">
                            <button type ="submit" class="btn btn-default btn-round">Login</button>
                            <a href="<?php echo site_url('Login_Controller/daftar/')?>" class="btn btn-default btn-round">Daftar</a>
                        </div>
                      </form>
                    <div class="form-group">
                        <label class="control-label col-lg-4"> &nbsp </label>
                        <div class="col-lg-4">
                        <label class="control-label col-lg-4"> &nbsp </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4"> &nbsp </label>
                        <div class="col-lg-4">
                        <label class="control-label col-lg-4"> &nbsp </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4"> &nbsp </label>
                        <div class="col-lg-4">
                        <label class="control-label col-lg-4"> &nbsp </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4"> &nbsp </label>
                        <div class="col-lg-4">
                        <label class="control-label col-lg-4"> &nbsp </label>
                        </div>
                    </div>
                </div>
            </div>	 
          </div>
        </div>
      </div>
	</div>

      <footer>
		<div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; Rmotor 2018, Inc. &middot; </p>
		</div>
      </footer>




    <script src="<?php echo base_url('assets/bootstrap-restaurant/assets/js/jquery-1.10.2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-restaurant/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-restaurant/assets/js/holder.js')?>"></script>
  </body>
</html>
