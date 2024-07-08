<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dept extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        is_logged_in();
    }

    function index()
    {
        $data = [
            'title' => 'Department',
            'conten' => 'setting/dept/index',
            'footer_js' => array('assets/js/setting/deptjs.js')
        ];
        $this->load->view('template/conten', $data);
    }


    function tableDept()
    {
        $data['dept_list'] = $this->m_data->get_data('departemen')->result();
        echo json_encode($this->load->view('setting/dept/table-list',$data, false));
    }

    function store()
    {
        $id = $this->input->post('id');
        if ($id != null) {
            $table = 'departemen';
            $dataupdate = [
                'kode_dept' => $this->input->post('kode_dept'),
                'nama_dept' => $this->input->post('nama_dept'),
            ];
            $where = array('id_dept' => $id);
            $this->m_data->update_data($table, $dataupdate, $where);
            // echo json_encode($data);
        } else {
            $table = 'departemen';
            $data = [
                'kode_dept' => $this->input->post('kode_dept'),
                'nama_dept' => $this->input->post('nama_dept'),
            ];
            $this->m_data->simpan_data($table, $data);
        }
    }

    function delete($id)
    {
        $table = 'departemen';
        $where = array('id_dept' => $id);
        $this->m_data->hapus_data($table, $where);
    }

    function vedit($id)
    {
        $table = 'departemen';
        $where = array('id_dept' => $id);
        $data = $this->m_data->get_data_by_id($table, $where)->row();
        echo json_encode($data);
    }

}
