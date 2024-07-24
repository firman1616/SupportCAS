<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        is_logged_in();
    }

    function index()
    {
        $data = [
            'title' => 'Menu',
            'conten' => 'setting/menu/index',
            'footer_js' => array('assets/js/setting/menujs.js'),
            'modul' => $this->m_data->get_data('modul')
        ];
        $this->load->view('template/conten', $data);
    }


    function tableMenu()
    {
        $data['menu_list'] = $this->m_data->get_data('menu')->result();
        echo json_encode($this->load->view('setting/menu/table-list',$data, false));
    }

    function store()
    {
        $id = $this->input->post('id');
        if ($id != null) {
            $table = 'menu';
            $dataupdate = [
                'nama_menu' => $this->input->post('nama_menu'),
                'url_menu' => $this->input->post('url_menu'),
                'modul_id' => $this->input->post('modul_id'),
            ];
            $where = array('id_menu' => $id);
            $this->m_data->update_data($table, $dataupdate, $where);
            // echo json_encode($data);
        } else {
            $table = 'menu';
            $data = [
                'nama_menu' => $this->input->post('nama_menu'),
                'url_menu' => $this->input->post('url_menu'),
                'modul_id' => $this->input->post('modul_id'),
            ];
            $this->m_data->simpan_data($table, $data);
        }
    }

    function delete($id)
    {
        $table = 'menu';
        $where = array('id_menu' => $id);
        $this->m_data->hapus_data($table, $where);
    }

    function vedit($id)
    {
        $table = 'menu';
        $where = array('id_menu' => $id);
        $data = $this->m_data->get_data_by_id($table, $where)->row();
        echo json_encode($data);
    }

}
