            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $formTitle1?>
                        </div>
                        <div class="panel-body">
                            <?php if(isset($data_pemesanan)){
                                foreach($data_pemesanan as $row){
                                    ?>
                                <div class="col-lg-4">
                                    <dl class="dl-horizontal">
                                        <dt>ID Pemesanan :</dt>
                                        <dd><?php echo $row->id_pemesanan?></dd>
                                        <br/>
                                        <dt>Tanggal Pemesanan :</dt>
                                        <dd><?php echo date("d M Y",strtotime($row->tgl_pemesanan));?></dd>
                                        <br/>
                                        <dt>Total Harga :</dt>
                                        <dd><strong><u><?= currency_format($row->harga_pemesanan); ?></u></strong></dd>
                                        <br/>
                                    </dl>
                                </div>
                                <div class="col-lg-6">
                                    <dl class="dl-horizontal">
                                        <dt>Pelanggan :</dt>
                                        <dd><?php echo $row->nm_user ?></dd>
                                        <br/>
                                        <dt>Alamat :</dt>
                                        <dd><?php echo $row->almt_user?></dd>
                                        <br/>
                                        <dt>Telp / Email :</dt>
                                        <dd><?php echo $row->notelp_user ?> / <?php echo $row->email_user ?></dd>
                                    </dl>
                                </div>
                            <?php }
                                }
                            ?>
                        </div>
                        <div class="panel-footer">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $formTitle2?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Hari</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no=1;
                                    if(isset($data_barang)){
                                        foreach($data_barang as $row){
                                            ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nm_motor; ?></td>
                                            <td><?php echo $row->qty; ?></td>
                                            <td><?php echo currency_format($row->harga_motor);?></td>
                                        </tr>
                                    <?php }
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a href="<?php echo site_url('Admin_Controller/pemesanan')?>" type="button" class="btn btn-outline btn-primary">
                                <i class="fa fa-mail-reply-all fa-fw"></i> Kembali
                            </a>
                            <?php if(isset($data_pemesanan)){
                                foreach($data_pemesanan as $row){
                                    ?>
                            <a type="button"  class="btn btn-outline btn-warning btnPrint" href="<?php echo site_url('Admin_Controller/printPemesanan/'.$row->id_pemesanan)?>">
                                <i class="fa fa-print fa-fw"></i> Print
                            </a>
                            <?php }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url('assets/choosen/js/jquery.printPage.js')?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".btnPrint").printPage();
        })
    </script>

    <script src="<?php echo base_url('assets/admin/plugins/dataTables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/dataTables/dataTables.bootstrap.js')?>"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
</body>
</html>
