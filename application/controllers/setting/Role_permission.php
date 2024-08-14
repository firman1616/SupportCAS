<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_permission extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        is_logged_in();
    }

    function index()
    {
        $data = [
            'title' => 'Role Permission',
            'conten' => 'setting/role_permission/index',
            'footer_js' => array('assets/js/setting/rolepermissionjs.js'),
            // 'dept' => $this->m_data->get_data('departemen'),
            // 'role' => $this->m_data->get_data('user_role')
        ];
        $this->load->view('template/conten', $data);
    }


    function tableRolepermission()
    {
        $data['role_permission_list'] = $this->m_data->get_data('permission')->result();
        echo json_encode($this->load->view('setting/role_permission/table-list',$data, false));
    }

    function store()
    {
        $id = $this->input->post('id');
        if ($id != null) {
            $table = 'permission';
            $dataupdate = [
                'permission' => $this->input->post('nama_role_permission'),
                // 'is_active' => 1,
                // 'date_created' => date('Y-m-d H:i:s')
            ];
            $where = array('id' => $id);
            $this->m_data->update_data($table, $dataupdate, $where);
            // echo json_encode($data);
        } else {
            $table = 'permission';
            $data = [
                'permission' => $this->input->post('nama_role_permission'),
            ];
            $this->m_data->simpan_data($table, $data);
        }
    }

    function vedit($id)
    {
        $table = 'permission';
        $where = array('id' => $id);
        $data = $this->m_data->get_data_by_id($table, $where)->row();
        echo json_encode($data);
    }

}
