<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modul extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        is_logged_in();
    }

    function index()
    {
        $data = [
            'title' => 'Modul',
            'conten' => 'setting/modul/index',
            'footer_js' => array('assets/js/setting/moduljs.js')
        ];
        $this->load->view('template/conten', $data);
    }


    function tableModul()
    {
        $data['modul_list'] = $this->m_data->get_data('modul')->result();
        echo json_encode($this->load->view('setting/modul/table-list',$data, false));
    }

    function store()
    {
        $id = $this->input->post('id');
        if ($id != null) {
            $table = 'modul';
            $dataupdate = [
                'nama_modul' => $this->input->post('nama_modul'),
                'url_modul' => $this->input->post('url_modul'),
                'icon_modul' => $this->input->post('icon_modul'),
                'seq' => $this->input->post('seq_modul'),
                'status' => $this->input->post('status'),
            ];
            $where = array('id_modul' => $id);
            $this->m_data->update_data($table, $dataupdate, $where);
            // echo json_encode($data);
        } else {
            $table = 'modul';
            $data = [
                'nama_modul' => $this->input->post('nama_modul'),
                'url_modul' => $this->input->post('url_modul'),
                'icon_modul' => $this->input->post('icon_modul'),
                'seq' => $this->input->post('seq_modul'),
                'status' => $this->input->post('status'),
            ];
            $this->m_data->simpan_data($table, $data);
        }
    }

    function delete($id)
    {
        $table = 'modul';
        $where = array('id_user' => $id);
        $this->m_data->hapus_data($table, $where);
    }

    function vedit($id)
    {
        $table = 'modul';
        $where = array('id_modul' => $id);
        $data = $this->m_data->get_data_by_id($table, $where)->row();
        echo json_encode($data);
    }

    function akses_modul($role_id) {
        $data = [

            // 'name'    => $this->session->userdata('nama'),
            'title' => 'Modul Access',
            'conten' => 'setting/akses_modul/index',
            'footer_js' => array('assets/js/setting/aksesmoduljs.js'),
            // 'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'role' => $this->db->get_where('user_role', ['id_role' => $role_id])->row_array(),
            // 'modul' => $this->db->get_where('modul', ['status' => 1])->result(),
            'modul' => $this->m_data->get_data('modul')->result_array(),
        ];

        // $this->db->where('user_role','id_role !=', 1);

        $this->load->view('template/conten', $data);
    }

    function change_akses_modul() {
        $modul_id = $this->input->post('modul_id');
        $role_id = $this->input->post('role_id');

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
        redirect('setting/Modul/akses_modul/'.$role_id);
    }

}
