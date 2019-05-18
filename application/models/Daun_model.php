<?php
defined ('BASEPATH') OR exit ('No direct script access');

class Daun_model extends CI_Model{
    private $_table = "daun";

    private $_id;
    private $_jenis_tanaman;
    private $_warna_daun;
    private $_bwd_range;
    private $_solusi;
    private $_pic_compare = "default.jpg";

    public function setDaunID($_id){
        $this->_id = $_id;
    }

    public function setJenisTanaman($_jenis_tanaman){
        $this->_jenis_tanaman = $_jenis_tanaman;
    }

    public function  setWarnaDaun($_warna_daun){
        $this->_warna_daun = $_warna_daun;
    }

    public function  setBwdRange($_bwd_range){
        $this->_bwd_range = $_bwd_range;
    }

    public function setSolusi($_solusi){
        $this->_solusi = $_solusi;
    }

    public function setPicCompare($_pic_compare){
        $this->_pic_compare = $_pic_compare;
    }

    public function createDaun() {
        $data  = array(
            'id' => $this->_id,
            'jenis_tanaman' => $this->_jenis_tanaman,
            'warna_daun' => $this->_warna_daun,
            'bwd_range' => $this->_bwd_range,
            'solusi' => $this->_solusi,
            'pic_compare' => $this->_pic_compare
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
}