<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class User_model extends CI_Model{
    private $_id;
    private $_first_name;
    private $_last_name;
    private $_email;
    private $_mobile;
    private $_password;
    private $_country;

    public function setUserID($_id){
        $this->_id = $_id;
    }

    public function setFirstName($_first_name){
        $this->_first_name=$_first_name;
    }

    public function setLastName($_last_name){
        $this->_last_name=$_last_name;
    }

    public function setEmail($_email){
        $this->_email=$_email;
    }

    public function setMobile($_mobile){
        $this->_mobile=$_mobile;
    }

    public function setPassword($_password){
        $this->_password=$_password;
    }

    public function setCountry($_country){
        $this->_country=$_country;
    }

    /**
     *
     */
    public function createUser() {
        $data = array(
            'id'=> $this->_id,
            'first_name'=> $this->_first_name,
            'last_name'=>$this->_last_name,
            'email'=>$this->_email,
            'mobile'=>$this->_mobile,
            'password'=>$this->_password,
            'country'=>$this->_country,
        );
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }
}
