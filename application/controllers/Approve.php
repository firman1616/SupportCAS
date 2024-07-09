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

    function print_so($soe)  {
        $data = [
            'title' => 'Print SOE',
            'print' => $this->sales->print_soe($soe)->result(),
            'print_det' => $this->sales->detail_okl($soe)->result(),
        ];
        $name = $soe;
        $this->load->library('pdf');
        $html = $this->load->view('sales/print_so', $data, TRUE);
        $this->pdf->createPDF($html, $name, false);
    }
}
