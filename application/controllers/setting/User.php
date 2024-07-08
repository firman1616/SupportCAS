<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        is_logged_in();
    }

    function index()
    {
        $data = [
            'title' => 'User',
            'conten' => 'setting/user/index',
            'footer_js' => array('assets/js/setting/userjs.js'),
            'dept' => $this->m_data->get_data('departemen'),
            'role' => $this->m_data->get_data('user_role')
        ];
        $this->load->view('template/conten', $data);
    }


    function tableUser()
    {
        $data['user_list'] = $this->m_setting->userList()->result();
        echo json_encode($this->load->view('setting/user/table-list',$data, false));
    }

    function store()
    {
        $id = $this->input->post('id');
        if ($id != null) {
            $table = 'user';
            $dataupdate = [
                'name' => $this->input->post('nama_user'),
                'email' => $this->input->post('username'),
                'password' => password_hash($this->input->post('username'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role'),
                'dept_id' => $this->input->post('dept'),
                // 'is_active' => 1,
                // 'date_created' => date('Y-m-d H:i:s')
            ];
            $where = array('id_user' => $id);
            $this->m_data->update_data($table, $dataupdate, $where);
            // echo json_encode($data);
        } else {
            $table = 'user';
            $data = [
                'name' => $this->input->post('nama_user'),
                'email' => $this->input->post('username'),
                'password' => password_hash($this->input->post('username'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role'),
                'dept_id' => $this->input->post('dept'),
                'is_active' => 1,
                'date_created' => date('Y-m-d H:i:s')
            ];
            $this->m_data->simpan_data($table, $data);
        }
    }

    function update_password() {
        $userid = $this->input->post('userid');
        $passupdate = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $table = 'user';
        $data = [
            'password' => $passupdate
        ];
        $where = array('id_user'=> $userid);
        $this->m_data->update_data($table,$data,$where);
        redirect('setting/User');
        
        // echo json_encode($response);
    }

    function delete($id)
    {
        $table = 'user';
        $where = array('id_user' => $id);
        $this->m_data->hapus_data($table, $where);
    }

    function vedit($id)
    {
        $table = 'user';
        $where = array('id_user' => $id);
        $data = $this->m_data->get_data_by_id($table, $where)->row();
        echo json_encode($data);
    }

    function role_permission() {
        $data = [
            'title' => 'Role Permission',
            'conten' => 'role_permission/index',
            'footer_js' => array('assets/js/rolepermissionjs.js')
        ];
        $this->load->view('template/conten', $data);
    }

    function tableRolepermission()
    {
        $data['master_role_permission'] = $this->M_data->get_data('tbl_master_role_permission')->result();

        echo json_encode($this->load->view('role_permission/table', $data, false));
    }

    function store_permission() {
        $id = $this->input->post('id');
        if ($id != null) {
            $table = 'tbl_master_role_permission';
            $dataupdate = [
                'name_permission' => $this->input->post('nama_role_permission')
            ];
            $where = array('id_permission' => $id);
            $this->M_data->update_data($table, $dataupdate, $where);
            // echo json_encode($data);
        } else {
            $table = 'tbl_master_role_permission';
            $data = [
                'name_permission' => $this->input->post('nama_role_permission')
            ];
            $this->M_data->simpan_data($table, $data);
        }
    }

    function veditpermission($id)
    {
        $table = 'tbl_master_role_permission';
        $where = array('id_permission' => $id);
        $data = $this->M_data->get_data_by_id($table, $where)->row();
        echo json_encode($data);
    }

    function deletepermission($id)
    {
        $table = 'tbl_master_role_permission';
        $where = array('id_permission' => $id);
        $this->M_data->hapus_data($table, $where);
    }

}
