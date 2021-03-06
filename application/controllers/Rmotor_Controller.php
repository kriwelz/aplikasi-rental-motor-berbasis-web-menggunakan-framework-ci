<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Rmotor_Controller extends CI_Controller {

	public function index()
	{
        $data=array(
            'title'=>'RMotor',
			'active_home'=>'active',
            'data_menu'=>$this->Model_App->getAllMotor(),            
        );

		$this->load->view('elements/vHeaderCustomer',$data);
		$this->load->view('pages/home');
	}

    function tambahMenuToCart($id_motor){
        if ($this->session->userdata('LEVEL') == '') {
            $this->session->set_flashdata('notif','Anda Harus Masuk terlebih dahulu sebelum memesan.<br> Apabila belum punya akun silahkan klik tombol Daftar dibawah.');
            redirect('Login_Controller');
        
        } else {

            $product = $this->Model_App->find($id_motor);
            $data = array(
                           'id'      => $product->id_motor,
                           'qty'     => 1,
                           'price'   => $product->harga_motor,
                           'name'    => $product->nm_motor
                        );

            $this->cart->insert($data);
            redirect('Rmotor_Controller/rpesanan');

        }
    }

    function tambahToCart(){
        if ($this->session->userdata('LEVEL') == '') {
            $this->session->set_flashdata('notif','Anda Harus Masuk terlebih dahulu sebelum memesan.<br> Apabila belum punya akun silahkan klik tombol Daftar dibawah.');
            redirect('Login_Controller');
        
        } else {
            $data = array(
                           'id'      => $this->input->post('id_motor'),
                           'qty'     => $this->input->post('qty'),
                           'price'   => $this->input->post('harga_motor'),
                           'name'    => $this->input->post('nm_motor')
                        );

            $this->cart->insert($data);
            redirect('Rmotor_Controller');

        }
    }

    public function rpesanan(){
        if ($this->cart->total_items() == '0') {
            $this->session->set_flashdata('rpesanan','rpesanan anda kosong.<br> Silahkan pesan terlebih dahulu.');
            redirect('Rmotor_Controller');
        } else {
        
        $data=array(
            'title'=>'Rmotor Online',
			'active_rpesanan'=>'active',
			
            'id_pemesanan'=>$this->Model_App->getIDPemesanan(),
        );

        $this->load->view('elements/vHeaderCustomer',$data);
        $this->load->view('pages/customer/rpesanan');
        
        }
    }


    public function bersihkanrpesanan()
    {
        $this->cart->destroy();
        redirect('Rmotor_Controller');
    }

    public function confirmPesanan()
    {
        $data = array(
            'id_pemesanan'=>$this->input->post('id_pemesanan'),
            'id_customer'=>$this->session->userdata('ID'),
            
            'harga_pemesanan'=>$this->input->post('harga_pemesanan'),
            'status_pemesanan'=>$this->input->post('status_pemesanan'),
            'tgl_pemesanan'=>date("Y-m-d",strtotime($this->input->post('tgl_pemesanan'))),
        );
        $this->Model_App->insertData("tbl_pemesanan",$data);

        foreach($this->cart->contents() as $items){
            $id_motor = $items['id'];
            $qty = $items['qty'];
           
            $data_detail = array(
                'id_pemesanan' => $this->input->post('id_pemesanan'),
                'id_motor'=> $id_motor,
                'qty'=>$qty,

            );
            $this->Model_App->insertData("tbl_pemesanan_detail",$data_detail);
        }
        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
        redirect('Rmotor_Controller/dataPesanan');        
    }

    public function dataPesanan(){
        $id_customer = $this->session->userdata('ID');
        $data=array(
            'title'=>'Rmotor Online',
            'active_pesanan'=>'active',
            'data_pemesanan'=>$this->Model_App->getDataPemesanan($id_customer),
        );

        $this->load->view('elements/vHeaderCustomer',$data);
        $this->load->view('pages/customer/dataPesanan');
    }
    public function detailPesanan(){
        $id= $this->uri->segment(3);
        $data=array(
            'data_pemesanan'=>$this->Model_App->getPemesanan($id),
            'data_pemesanan_detail'=>$this->Model_App->getPemesananDetail($id),
        );
        $this->load->view('elements/vHeaderCustomer',$data);
        $this->load->view('pages/customer/detailPesanan');
    }

    function syarat()
    {
        $data=array(
            'title'=>'RMotor',
            'active_syarat'=>'active',
            'data_menu'=>$this->Model_App->getAllMotor(),            
        );

        $this->load->view('elements/vHeaderCustomer',$data);
        $this->load->view('pages/syarat');
    }

     function kontak()
    {
        $data=array(
            'title'=>'RMotor',
            'active_kontak'=>'active',
            'data_menu'=>$this->Model_App->getAllMotor(),            
        );

        $this->load->view('elements/vHeaderCustomer',$data);
        $this->load->view('pages/kontak');
    }

      function profil() {
        $id= $this->uri->segment(3);
        $data=array(
            'title'=>'Kelola customer',
            'formTitle'=>'Kelola customer',
            'headerTitle'=>'Data customer',

             'data_pemesanan'=>$this->Model_App->getPemesanan($id),
            'data_customer'=>$this->Model_App->getAllDataCustomer(),
        );
        $this->load->view('elements/vHeaderCustomer',$data);
        $this->load->view('pages/customer/profil/profil');

    }
     function editprofil() {
 $id= $this->uri->segment(3);
        $data=array(
            'title'=>'Edit Customer',
            'formTitle'=>'Edit Data ',
            'headerTitle'=>'Data Customer',


            'data_customer'=>$this->Model_App->getIdCustomer($id),
        );
        $this->load->view('elements/vHeaderCustomer',$data);
        $this->load->view('pages/Customer/profil/editprofil');
    }
    
     function detailPemesanan(){
        $id= $this->uri->segment(3);
        $data=array(
            'title'=>'Pemesanan',
            'headerTitle'=>'Detail Laporan Pemesanan',
            'formTitle1'=>'Data Pemesanan',
            'formTitle2'=>'Detail Pesanan',


            'data_pemesanan'=>$this->Model_App->getDetailDataPemesanan($id),
            'data_barang'=>$this->Model_App->getDetailDataBarang($id),
        );
        $this->load->view('elements/vHeaderCustomer',$data);
        $this->load->view('pages/admin/pemesanan/kelolaDetailPemesanan');
    }
    function prosesEditCustomer(){
        $id['id_user'] = $this->input->post('id_user');
        $data=array(
            'nm_user'=>$this->input->post('nm_user'),
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password'),
            'jk'=>$this->input->post('jk'),
            'no_identitas'=>$this->input->post('no_identitas'),
            'email_user'=>$this->input->post('email_user'),
            'notelp_user'=>$this->input->post('notelp_user'),
            'lvl_user'=>$this->input->post('lvl_user'),
        );
        $this->Model_App->updateData('tbl_user',$data,$id);
        redirect("Rmotor_Controller/");

    }
}
