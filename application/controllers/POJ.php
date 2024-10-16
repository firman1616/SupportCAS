<?php

defined('BASEPATH') or exit('No direct script access allowed');

class POJ extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        is_logged_in();

        $this->load->model('M_POJ','poj');
        date_default_timezone_set('Asia/Jakarta');
    }


    public function index()

    {
        $data = [

            'name'    => $this->session->userdata('name'),
            'title' => 'PO Jasa',
            'conten' => 'poj/index',
            'footer_js' => array('assets/js/pojjs.js'),
            // 'pr_list' => $this->approve->get_prq()->result(),
            // 'pr_detail' => $this->approve->get_detail_prq($no_prq)
            // 'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        $this->load->view('template/conten', $data);
    }

    function tablePOJ()
    {
        $data['get_poj'] = $this->poj->get_data_poj()->result();
        echo json_encode($this->load->view('poj/table-list', $data, false));
    }

    public function getDetail($no_prq) {
        $data = $this->approve->get_detail_prq($no_prq);
        echo json_encode($data);
    }

    public function update_state() {
        // Pastikan metode request adalah POST
        // Ambil ID OMS dari POST data
        $poj = $this->input->post('poj');

        // Update data dengan memanggil fungsi di model
        $this->poj->update_status($poj);

        // Redirect kembali ke halaman sebelumnya atau halaman tertentu
        redirect($_SERVER['HTTP_REFERER']);
    }

    function cancel_update_state()  {
        $cancel_prq = $this->input->post('cancel_prq');
        $this->approve->cancel_approve_whs($cancel_prq);
        redirect($_SERVER['HTTP_REFERER']);
    }

    function print_poj($poj)  {
        $data = [
            'title' => 'Print POJ',
            'header_poj' => $this->poj->print_poj($poj)->result(),
            'det_poj' => $this->poj->det_poj($poj)->result(),
        ];
        $name = $poj;
        $this->load->library('pdf');
        // $this->load->view('po/print-po', $data, TRUE);s
        $html = $this->load->view('poj/print-poj', $data, TRUE);
        $this->pdf->createPDF($html, $name, false);
    }
}
