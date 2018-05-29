 </div>


	<div class="mainTitle">
	<div class="container">
	<h1>Rmotor</h1>

	</div>
	</div>

   
	 <div class="container marketing">
    <h2 class="itemsTitle">Motor</h2>
    <?php if ($this->cart->total_items() != '0') { ?>
      <div class="alert btn-block alert-error fade in btn btn-primary"><button type="button" class="close" data-dismiss="alert">×</button><strong>Anda Memiliki <a href="<?php echo site_url('Rmotor_Controller/dataPesanan')?>"> <?php echo $this->cart->total_items() ?> pesanan </a> di pesanan anda</strong></div>
    <?php  } 
    ?>
    <?php
    $message = $this->session->flashdata('dataPesanan');
    if($message){

    echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>'.$message .'</strong></div>';
     
     }?>
  	<div id="myCarousel1" data-ride="carousel">
  
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
            <?php
                if(isset($data_menu)){
                    foreach($data_menu as $row){
                        ?>
              <div class="col-lg-4">
              <form method="post" action="<?php echo site_url('Rmotor_Controller/tambahToCart')?>">
                <input type="hidden" name="id_motor" value="<?php echo $row->id_motor ?>">
                <input type="hidden" name="harga_motor" value="<?php echo $row->harga_motor ?>">
                <input type="hidden" name="nm_motor" value="<?php echo $row->nm_motor ?>">
                 <img src="<?php echo base_url('uploads/'.$row->foto_motor)?>" alt="Generic placeholder image"></a>
                <h4><?php echo $row->nm_motor; ?></h4>
                <p>Harga : <strong><?php echo currency_format($row->harga_motor); ?></strong>  /Hari  </p>
                <input type="number" name="qty" placeholder="hari" required>
                <button type="submit">Pesan</button>
              </form>
              </div>
            <?php }
                }
            ?>
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


