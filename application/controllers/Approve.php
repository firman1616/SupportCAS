<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Approve extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        is_logged_in();

        $this->load->model('M_approve','approve');
    }


    public function index()

    {
        $data = [

            'name'    => $this->session->userdata('name'),
            'title' => 'PO Approve',
            'conten' => 'approve/po/index',
            'footer_js' => array('assets/js/pojs.js'),
            // 'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        $this->load->view('template/conten', $data);
    }

    function tablePO()
    {
        $data['po_list'] = $this->approve->get_pos()->result();
        echo json_encode($this->load->view('approve/po/table-list',$data, false));
    }

    function print_po($oms)  {
        $data = [
            'title' => 'Print PO',
            'header' => $this->approve->print_pos($oms)->result(),
            'det_pos' => $this->approve->det_pos($oms)->result(),
        ];
        $name = $oms;
        $this->load->library('pdf');
        // $this->load->view('approve/po/print-po', $data);
        $html = $this->load->view('approve/po/print-po', $data, TRUE);
        $this->pdf->createPDF($html, $name, false);
    }

    public function update_state() {
        // Pastikan metode request adalah POST
        // Ambil ID OMS dari POST data
        $oms = $this->input->post('oms');

        // Update data dengan memanggil fungsi di model
        $this->approve->update_approve2($oms);

        // Redirect kembali ke halaman sebelumnya atau halaman tertentu
        redirect($_SERVER['HTTP_REFERER']);
    }
}
