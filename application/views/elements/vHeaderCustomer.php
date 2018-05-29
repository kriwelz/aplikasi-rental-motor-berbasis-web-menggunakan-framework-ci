<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title><?php echo $title ?></title>


    <link href="<?php echo base_url('assets/bootstrap-rmotor/dist/css/bootstrap.min.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/bootstrap-rmotor/assets/css/carousel.css')?>" rel="stylesheet">
  </head>

  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
           
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="<?php if(isset($active_home)){echo $active_home ;}?>">
                  <a href="<?php echo site_url('Rmotor_Controller')?>">Home</a>
                </li>
                 <li class="<?php if(isset($active_syarat)){echo $active_syarat ;}?>">
                    <a href="<?php echo site_url('Rmotor_Controller/syarat')?>">Syarat</a>
                </li>                
                
                <?php if ($this->session->userdata('LEVEL') == ''){ ?>
                
                <li class="<?php if(isset($active_login)){echo $active_login ;}?>">
                    <a href="<?php echo site_url('Login_Controller')?>">Login</a>
                </li>
                <li class="<?php if(isset($active_daftar)){echo $active_daftar ;}?>">
                    <a href="<?php echo site_url('Login_Controller/daftar')?>">Daftar</a>
                </li>      
                
             
                <?php } 
                
                if ($this->session->userdata('LEVEL') == 'customer'){ ?> 

                <li class="<?php if(isset($active_rpesanan)){echo $active_rpesanan;}?>">
                    <a href="<?php echo site_url('Rmotor_Controller/rpesanan')?>">
                  Pesanan </a>
                </li>

                <li class="<?php if(isset($active_pesanan)){echo $active_pesanan;}?>">
                    <a href="<?php echo site_url('Rmotor_Controller/dataPesanan')?>">
                    List Pesanan</a>
                </li>

                <li>
                    <a href="<?php echo site_url('Login_Controller/logout')?>">
                      <?php echo $this->session->userdata('NAME')?>(Logout)
                    </a>
                </li>


                <li class="<?php if(isset($active_profil)){echo $active_profil;}?>">
                    <a href="<?php echo site_url('Rmotor_Controller/profil/')?>">
                    Profil</a> 
                
                <?php } ?>
                  				
                
              </ul>
            </div>
          </div>
        </div>
      </div>
