<?php

defined('BASEPATH') or exit('No direct script access allowed');



class PRJ extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        is_logged_in();
        $this->load->model('M_PRJ', 'prj');
    }


    public function index()

    {
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = [

            'name'    => $this->session->userdata('name'),
            'title' => 'PRJ',
            'conten' => 'prj/index',
            'footer_js' => array('assets/js/prjjs.js'),
        ];

        $this->load->view('template/conten', $data);
    }

    function tablePRJ()
    {
        $data['prj'] = $this->prj->getPRJ()->result();
        echo json_encode($this->load->view('prj/table-list',$data, false));
    }

    public function update_state()
    {
        $prj = $this->input->post('prj');
        $this->prj->update_approve2($prj);
        redirect($_SERVER['HTTP_REFERER']);
    }

    function print_prj($prj)  {
        $data = [
            'title' => 'Print PRJ',
            'header_prj' => $this->prj->print_prj($prj)->result(),
            'det_prj' => $this->prj->det_prj($prj)->result(),
        ];
        $name = $prj;
        $this->load->library('pdf');
        // $this->load->view('po/print-po', $data, TRUE);s
        $html = $this->load->view('prj/print-prj', $data, TRUE);
        $this->pdf->createPDF($html, $name, false);
    }

    // function get_data_user()
    //     {
    //             $list = $this->prj->get_datatables();
    //             $data = array();
    //             $no = $_POST['start'];
    //             foreach ($list as $field) {
    //                     $no++;
    //                     $row = array();
    //                     $row[] = $no;
    //                     $row[] = $field->name;
    //                     $row[] = $field->email;

    //                     $data[] = $row;
    //             }

    //             $output = array(
    //                     "draw" => $_POST['draw'],
    //                     "recordsTotal" => $this->prj->count_all(),
    //                     "recordsFiltered" => $this->prj->count_filtered(),
    //                     "data" => $data,
    //             );
    //             //output dalam format JSON
    //             echo json_encode($output);
    //     }
}
