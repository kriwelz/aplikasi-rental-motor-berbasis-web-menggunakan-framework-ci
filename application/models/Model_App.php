<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_App extends CI_Model {

//  Global   

    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }

    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }

    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }

    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }

    public function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }

    function getAllMotor()
    {
        return $this->db->query("
            SELECT *
            FROM tbl_motor a
            INNER JOIN tbl_jenis b ON a.id_jenis = b.id_jenis 
            ORDER BY a.nm_motor ASC 
        ")->result();
    }
     function getIdMotor($id)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_motor 
            where id_motor = '$id'
            ")->result();
    }

//  Pegawai   

    function login($username, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

//  Pegawai   
    
    function getAllDataPegawai()
    {
        return $this->db->query("
            SELECT *
            FROM tbl_user 
            WHERE lvl_user = 'admin'
            ORDER BY nm_user ASC
        ")->result();
    }

    function getIdPegawai($id)
    {
        return $this->db->query("
            SELECT *
            FROM tbl_user 
            where id_user = '$id'
            ")->result();
    }

//  Customer   

    function getAllDataCustomer(){
        return $this->db->query("
            SELECT *
            FROM tbl_user 
            WHERE lvl_user = 'customer'
            ORDER BY nm_user ASC
        ")->result();
    }

    function getDataPemesanan($id_customer){
        return $this->db->query("
            SELECT *
            FROM tbl_pemesanan 
            WHERE id_customer = '$id_customer'
            ORDER BY tgl_pemesanan ASC
        ")->result();
    }
    function getDataPemesanan1($id_customer){
        return $this->db->query("
            SELECT *
            FROM tbl_user 
            WHERE id_user = '$id_user' 
        ")->result();
    }

    function getIdCustomer($id){
        return $this->db->query("
            SELECT *
            FROM tbl_user 
            where id_user = '$id'
            ")->result();
    }

    public function find($id){
        //Query mencari record berdasarkan ID-nya
        $hasil = $this->db->where('id_motor', $id)
                          ->limit(1)
                          ->get('tbl_motor');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    }
    public function getIDPemesanan()
    {
        $q = $this->db->query("select MAX(RIGHT(id_pemesanan,3)) as id_max from tbl_pemesanan");
        $id = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf("%03s", $tmp);
            }
        }
        else
        {
            $id = "001";
        }
        return "Pm".$id;
    }

    function getPemesanan($id){
        return $this->db->query("
            SELECT *
            FROM tbl_pemesanan
            where id_pemesanan = '$id'
            ")->result();
    }

    function getPemesananDetail($id){
        return $this->db->query("
            SELECT *
            FROM tbl_pemesanan_detail 
            INNER JOIN tbl_motor ON tbl_pemesanan_detail.id_motor = tbl_motor.id_motor
            where id_pemesanan = '$id'
            ")->result();
    }

    function hitungDataMotor(){
        return $this->db->query("
            SELECT COUNT(*) AS NUMBER_OF_ROWS FROM tbl_pemesanan WHERE status_pemesanan = '1'
        ")->result();
    }

    function getAllDataPemesanan(){
        return $this->db->query("
            SELECT
                a.id_pemesanan,
                a.tgl_pemesanan,
                a.harga_pemesanan,
                a.status_pemesanan,
                b.nm_user,
                b.email_user,
                b.almt_user,
                (select count(id_pemesanan) as jum from tbl_pemesanan_detail where id_pemesanan=a.id_pemesanan) as jumlah_pemesanan
                from tbl_pemesanan a 
                INNER JOIN tbl_user b ON a.id_customer = b.id_user
                ORDER BY a.id_pemesanan DESC
        ")->result();
    }

    function getDetailDataPemesanan($id){
        return $this->db->query("
            SELECT
                a.id_pemesanan,
                a.tgl_pemesanan,
                a.harga_pemesanan,
                a.status_pemesanan,
                b.nm_user,
                b.email_user,
                b.almt_user,
                b.notelp_user,
                (select count(id_pemesanan) as jum from tbl_pemesanan_detail where id_pemesanan=a.id_pemesanan) as jumlah_pemesanan
                from tbl_pemesanan a 
                INNER JOIN tbl_user b ON a.id_customer = b.id_user
                WHERE a.id_pemesanan = '$id'
                ORDER BY a.id_pemesanan DESC
        ")->result();
    }

    function getDetailDataBarang($id){
        return $this->db->query("
            SELECT
                a.qty,
                a.id_motor,
                b.harga_motor,
                b.nm_motor
                from tbl_pemesanan_detail a 
                INNER JOIN tbl_motor b ON a.id_motor = b.id_motor
                WHERE a.id_pemesanan = '$id'
                ORDER BY a.id_motor DESC
        ")->result();
    }

    function graph(){
       return $this->db->query("
            SELECT
                a.id_motor,
                a.qty,
                b.nm_motor
                from tbl_pemesanan_detail a 
                INNER JOIN tbl_motor b ON a.id_motor = b.id_motor
                group BY a.id_motor DESC
        ")->result();
    }
    

     function graph1(){
        return $this->db->query("SELECT * FROM tbl_pemesanan_detail WHERE id_motor
        GROUP BY id_motor
        ")->result();
    }

      function tampil_data(){
        return $this->db->get('tbl_motor');
    }

    
}