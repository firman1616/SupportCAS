<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        is_logged_in();
    }

    function index()
    {
        $data = [
            'title' => 'Role',
            'conten' => 'setting/role/index',
            'footer_js' => array('assets/js/setting/rolejs.js'),
            // 'dept' => $this->m_data->get_data('departemen'),
            // 'role' => $this->m_data->get_data('user_role')
        ];
        $this->load->view('template/conten', $data);
    }


    function tableRole()
    {
        $data['role_list'] = $this->m_data->get_data('user_role')->result();
        echo json_encode($this->load->view('setting/role/table-list',$data, false));
    }

    function store()
    {
        $id = $this->input->post('id');
        if ($id != null) {
            $table = 'user_role';
            $dataupdate = [
                'role' => $this->input->post('nama_role'),
                // 'is_active' => 1,
                // 'date_created' => date('Y-m-d H:i:s')
            ];
            $where = array('id_role' => $id);
            $this->m_data->update_data($table, $dataupdate, $where);
            // echo json_encode($data);
        } else {
            $table = 'user_role';
            $data = [
                'role' => $this->input->post('nama_role'),
            ];
            $this->m_data->simpan_data($table, $data);
        }
    }

    function vedit($id)
    {
        $table = 'user_role';
        $where = array('id_role' => $id);
        $data = $this->m_data->get_data_by_id($table, $where)->row();
        echo json_encode($data);
    }

    function delete($id) {
        $table = 'user_role';
        $where = array('id_role' => $id);
        $this->m_data->hapus_data($table, $where);
    }

}
