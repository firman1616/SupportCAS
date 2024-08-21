<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_PRJ extends CI_Model
{
    private $db_cas;
    var $table = 'rma'; // nama tabel dari database
    var $column_order = array(null, 'rma', 'date', 'sub', 'remark'); // field yang ada di table user
    var $column_search = array('rma', 'remark'); // field yang diizinkan untuk pencarian 
    var $order = array('rma' => 'desc'); // default order 

    public function __construct()
    {
        parent::__construct();
        // Load database 'cas' dan assign ke properti $db_cas
        $this->db_cas = $this->load->database('cas', TRUE);
    }

    private function _get_datatables_query()
    {
        // Modifikasi bagian select dan join sesuai dengan query custom
        $this->db_cas->select('
        a.rma,
        a.sub,
        a.remark,
        a.period,
        a.aprov,
        a.date,
        b.inv,
        b.loc,
        b.remark as keterangan,
        b.qty,
        b.unit,
        b.etd
    ');
        $this->db_cas->from('rma AS a');
        $this->db_cas->join('rmb AS b', 'b.rma = a.rma', 'left');

        // Tambahkan kondisi khusus dari query custom
        $this->db_cas->where('a.date >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)');
        $this->db_cas->like('a.rma', 'prj');

        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                if ($i === 0) // looping awal
                {
                    $this->db_cas->group_start();
                    $this->db_cas->like($item, $_POST['search']['value']);
                } else {
                    $this->db_cas->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i)
                    $this->db_cas->group_end();
            }
            $i++;
        }

        // Tambahkan bagian order sesuai dengan datatables order
        if (isset($_POST['order'])) {
            $this->db_cas->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db_cas->order_by(key($order), $order[key($order)]);
        }
    }


    // private function _get_datatables_query()
    // {
    //     $this->db_cas->from($this->table);

    //     $i = 0;

    //     foreach ($this->column_search as $item) // looping awal
    //     {
    //         if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
    //         {
    //             if($i===0) // looping awal
    //             {
    //                 $this->db_cas->group_start(); 
    //                 $this->db_cas->like($item, $_POST['search']['value']);
    //             }
    //             else
    //             {
    //                 $this->db_cas->or_like($item, $_POST['search']['value']);
    //             }

    //             if(count($this->column_search) - 1 == $i) 
    //                 $this->db_cas->group_end(); 
    //         }
    //         $i++;
    //     }

    //     if(isset($_POST['order'])) 
    //     {
    //         $this->db_cas->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    //     } 
    //     else if(isset($this->order))
    //     {
    //         $order = $this->order;
    //         $this->db_cas->order_by(key($order), $order[key($order)]);
    //     }
    // }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db_cas->limit($_POST['length'], $_POST['start']);
        $query = $this->db_cas->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db_cas->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db_cas->from($this->table);
        return $this->db_cas->count_all_results();
    }

    public function update_aprov($rma)
    {
        // Data yang akan diupdate
        $db_cas = $this->load->database('cas', TRUE);
        $data = array(
            'aprov' => 1 // Update aprov menjadi 1
        );

        // Update tabel
        $this->db->where('rma', $rma);
        return $db_cas->update('rma', $data); // Ganti `table_name` dengan nama tabel yang sesuai
    }

    function print_prj($prj){
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            a.rma,
            a.date,
            a.sub,
            a.remark 
        FROM
            rma AS a 
        WHERE
            a.rma = '$prj'");
    }

    function det_prj($prj) {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            a.rma,
            a.inv,
            a.loc,
            a.remark,
            a.qty,
            a.unit,
            a.etd 
        FROM
            rmb AS a 
        WHERE
            a.rma = '$prj'");
    }
}
