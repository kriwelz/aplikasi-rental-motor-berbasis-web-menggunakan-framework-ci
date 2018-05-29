<div class="container marketing">
    <div id="myCarousel1" data-ride="carousel">	<body>		
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Faktur Pesanan</th>
					<th>Nama Pemesan</th>
					<th>Tanggal Pemesanan</th>
					<th>Total Harga</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
                <?php
                $no=1;
               	if(isset($data_pemesanan)){
                  	foreach($data_pemesanan as $row){
                ?>
				<tr>
					<td><?= $no ?></td>
					<td><?php echo $row->id_pemesanan; ?></td>
					<td><?php echo $this->session->userdata('NAME')?></td>
					<td><?php echo $row->tgl_pemesanan; ?></td>
					<td><?php echo currency_format($row->harga_pemesanan); ?></td>
					<td>
					<?php
					if($row->status_pemesanan == 'Menunggu') { ?>
						<button class="btn btn-warning">Menunggu</button>
					<?php } else { 
					if($row->status_pemesanan == 'Proses') { ?>
						<button class="btn btn-primary">Sedang di Proses</button>
					<?php } else { 
					if($row->status_pemesanan == 'Dikirim') { ?>						
						<button class="btn btn-success">Sedang di kirim</button>
					<?php } else { ?>
						<button class="btn btn-success">Selesai</button>
					<?php } 
						} 
					} ?>
					</td>
				</tr>
                <?php }
                	}
                ?>
			</tbody>
		</table>
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Produk</th>
					<th>Hari</th>
				</tr>
			</thead>
			<tbody>
                <?php
                if (isset($data_pemesanan_detail)){
                    foreach($data_pemesanan_detail as $row){
                ?>
				<tr>
					<td><?php echo $row->nm_motor; ?></td>
					<td><?php echo $row->qty; ?> hari</td>
				</tr>
                <?php }
                	}
                ?>
			</tbody>
		</table>
		<div align="center">
			<?= anchor('Rmotor_Controller','Kembali',['class'=>'btn btn-default']) ?>
		</div>
	</body>
</html>