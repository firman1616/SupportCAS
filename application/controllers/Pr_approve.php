<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pr_approve extends CI_Controller
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
            'title' => 'PR Approve',
            'conten' => 'approve/pr/index',
            'footer_js' => array('assets/js/prjs.js'),
            'pr_list' => $this->approve->get_prq()->result(),
            // 'pr_detail' => $this->approve->get_detail_prq($no_prq)
            // 'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
        ];

        $this->load->view('template/conten', $data);
    }

    function tablePR()
    {
        $data['pr_list'] = $this->approve->get_prq()->result();
        // $data['pr_det'] = $this->approve->get_detail_prq()->result();
        echo json_encode($this->load->view('approve/pr/table-list',$data, false));
    }

    public function getDetail($no_prq) {
        $data = $this->approve->get_detail_prq($no_prq);
        echo json_encode($data);
    }

    function update_state() {
        $table = 'prq';
        $data = [
            'approve' => '1',
            'chtime' => $this->session->userdata('email'),
        ];
        $where = array
    }

    function print_po($oms)  {
        $data = [
            'title' => 'Print PO',
            'header' => $this->approve->print_pos($oms)->result(),
            'det_pos' => $this->approve->det_pos($oms)->result(),
        ];
        $name = $oms;
        $this->load->library('pdf');
        $html = $this->load->view('approve/po/print-po', $data, TRUE);
        $this->pdf->createPDF($html, $name, false);
    }
}
