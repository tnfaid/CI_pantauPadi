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


//    add new daun by admin
    public function add_data_daun(){
        if ($_POST){
            $data = array(
                'jenis_tanaman' => $_POST['jenis_tanaman'],
                'warna_daun' => $_POST['warna_daun'],
                'bwd_range' =>$_POST['bwd_range'],
                'solusi'=>$_POST['solusi'],
                'pic_compare'=>$_POST['pic_compare']
            );
            $data = $this->security->xss_clean($data);

            $this->common_model->insert($data, 'daun');
            $this->session->set_flashdata('msg', 'Data added Successfully');
            redirect(base_url('admin/Crud_daun/all_daun_list'));

        }
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

    public function update_daun($id)
    {
        if($_POST)
        {
            $data = array(
                'jenis_tanaman' => $_POST['jenis_tanaman'],
                'warna_daun' => $_POST['warna_daun'],
                'bwd_range' => $_POST['bwd_range'],
                'solusi' => $_POST['solusi'],
                'pic_compare' => $_POST['pic_compare']
            );
            $data = $this->security->xss_clean($data);

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
}
