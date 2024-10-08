<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        is_logged_in();
    }


    public function index()

    {
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = [

            'name'    => $this->session->userdata('name'),
            'title' => 'Dashboard',
            'conten' => 'conten/dashboard',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        $this->load->view('template/conten', $data);
    }

    public function role()
    {
        $data = [

            'name'    => $this->session->userdata('name'),
            'title' => 'Role',
            'conten' => 'conten/role',
            'role' => $this->db->get('user_role')->result_array(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/conten', $data);
        } else {
            $table = 'user_role';
            $data = [
                'role' => $this->input->post('role')
            ];
            $this->m_data->simpan_data($table, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Saved
              </div>');
            redirect('admin/role');
        }
    }

    public function roleaccess($role_id)

    {
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data = [

            'name'    => $this->session->userdata('nama'),
            'title' => 'Role Access',
            'conten' => 'conten/roleaccess',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'role' => $this->db->get_where('user_role', ['id_role' => $role_id])->row_array(),
            'menu' => $this->db->get('modul')->result_array(),
        ];

        // $this->db->where('user_role','id_role !=', 1);

        $this->load->view('template/conten', $data);
    }

    public function changeaccess()
    {
        $modul_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'modul_id' => $modul_id,
        ];

        $result = $this->db->get_where('user_access_modul', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_modul', $data);
        } else {
            $this->db->delete('user_access_modul', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Access Changed!
          </div>');
    }
}
