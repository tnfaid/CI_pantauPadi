<?php
defined ('BASEPATH') OR exit ('No direct script access');

class Daun_model extends CI_Model{
    private $_table = "daun";

    private $_id;
    private $_user_id;
    private $_nama_penyakit;
    private $_kondisi;
    private $_solusi;
    private $_penulis;
    private $_tanggal_upload;
    private $_value_warna;
    private $_usia;
    private $_gambar = "default.jpg";

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->_user_id = $user_id;
    }

    /**
     * @param mixed $nama_penyakit
     */
    public function setNamaPenyakit($nama_penyakit)
    {
        $this->_nama_penyakit = $nama_penyakit;
    }

    /**
     * @param mixed $kondisi
     */
    public function setKondisi($kondisi)
    {
        $this->_kondisi = $kondisi;
    }

    /**
     * @param mixed $solusi
     */
    public function setSolusi($solusi)
    {
        $this->_solusi = $solusi;
    }

    /**
     * @param mixed $penulis
     */
    public function setPenulis($penulis)
    {
        $this->_penulis = $penulis;
    }

    /**
     * @param mixed $tanggal_upload
     */
    public function setTanggalUpload($tanggal_upload)
    {
        $this->_tanggal_upload = $tanggal_upload;
    }

    /**
     * @param mixed $value_warna
     */
    public function setValueWarna($value_warna)
    {
        $this->_value_warna = $value_warna;
    }

    /**
     * @param mixed $usia
     */
    public function setUsia($usia)
    {
        $this->_usia = $usia;
    }


    public function createDaun() {
        $data  = array(
            'id' => $this->_id,
            'nama_penyakit' => $this->_nama_penyakit,
            'value_warna' => $this->_value_warna,
            'kondisi' => $this->_kondisi,
            'solusi' => $this->_solusi,
            'tanggal_upload' => $this->_tanggal_upload,
            'penulis' => $this->_penulis,
            'usia' => $this->_usia,
            'gambar' => $this->gambar
        );
        $this->db->insert('daun', $data);
        return $this->db->insert_id();
    }

    public function list_all_daun() {
        $data = $this->db->query("select * from daun");
        if($data->num_rows() > 0){
            foreach ($data->result() as $baris){
                $definisidata[] = $baris;
            }
            return $definisidata;
        }
    }

    function get_all_daun(){
        $this->db->select('*');
        $this->db->from('daun');
        $this->db->order_by('daun.id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;
    }

  //    get info single daun
    function get_single_daun_info($id){
        $this->db->select('*');
        $this->db->from('daun');
        $this->db->where('daun.id',$id);
        $query = $this->db->get();
        $query = $query->row();
        return $query;
    }

    public function getTotalDaun()
    {   
        $query = $this->db->get($this->_table);
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
}