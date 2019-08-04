<?php

class Crud_daun extends CI_Controller{
       
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Daun_model');
        $this->load->model('login_model');
        $this->load->model('common_model');
    }

    function index(){
        $data = array();
        $data['page_title'] = 'Daun';
        $data['main_content'] = $this->load->view('admin/daun/add_daun', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function add_data_daun(){ 
        date_default_timezone_set("ASIA/JAKARTA");
        $now = date('Y-m-d H:i:s');
        $data['total'] = $this->Daun_model->getTotalDaun(); 

        if ($_POST){
            $data = array(
                'user_id' =>'100',
                'nama_penyakit' => $_POST['nama_penyakit'],
                'kondisi' =>$_POST['kondisi'],
                'solusi'=>$_POST['solusi'],
                'value_warna'=>$_POST['value_warna'],
                'usia'=>$_POST['usia'],
                'penulis'=>"Admin",
                'tanggal_upload'=>$now,
                'gambar'=> $this->_uploadImage()  
            );
       

            $this->common_model->insert($data, 'daun');
            $this->session->set_flashdata('msg', 'Data added Successfully');
            redirect(base_url('admin/Crud_daun/all_daun_list'));
            $this->result_array();

        }
    }

     public function update_daun($id)
    {
        if($_POST)
        {
            $data = array(
                'nama_penyakit' => $_POST['nama_penyakit'],
                'kondisi' =>$_POST['kondisi'],
                'solusi'=>$_POST['solusi'],
                'value_warna'=>$_POST['value_warna'],
                'usia'=>$_POST['usia']
            );
            $data = $this->security->xss_clean($data);

            if (!empty($_FILES['gambar']['name'])) {
                    $_POST['gambar'] = $this->_uploadImage();
            } else {
                    $_POST['gambar'] = $_POST['old_image'];
            }
            

            $powers = $this->input->post('role_action');
            if (!empty($powers)){
                $this->common_model->delete_user_role($id, 'user_role');
                foreach ($powers as $value){
                    $role_data = array(
                        'user_id' => $id,
                        'action' => $value
                    );
                }
            }
            

            $this->common_model->edit_option($data, $id, 'daun');
            $this->session->set_flashdata('msg', 'Data Daun Sukses Diupdate');
            redirect(base_url('admin/Crud_daun/all_daun_list'));
        }

        $data['info_daun'] = $this->Daun_model->get_single_daun_info($id);
        $data['user_role'] = $this->common_model->get_user_role($id);
        $data['power'] = $this->common_model->select('user_power');
        $data['country'] = $this->common_model->select('country');
        $data['main_content'] = $this->load->view('admin/daun/edit_daun', $data, TRUE);
        $data['page_title'] = 'Edit Data Daun';
        $this->load->view('admin/index', $data);
    }

    private function _uploadImage()
    {
        $file_name = "uploads/".$_POST['nama_penyakit'].".hore";
        $config['upload_path']          = './webService/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $file_name;
        $config['overwrite']            = true;
        $config['max_size']             = 4000; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    

//    show semua daun
    public function all_daun_list(){
        $data['page_title'] = 'All Data Daun';
        $data['all_daun'] = $this->Daun_model->get_all_daun();
        $data['main_content'] = $this->load->view('admin/daun/all_daun', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function delete_daun($id)
    {
        $this->common_model->delete($id, 'daun');
        $this->session->set_flashdata('msg', 'Data daun sukses terhapus');
        redirect(base_url('admin/Crud_daun/all_daun_list'));

    }

   
}
