<?php
class M_approve extends CI_Model
{
    // protected $DBGroup = 'cas';
    function __construct()
    {
        parent::__construct();
    }

    function get_pos() {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            a.oms,
            a.date,
            a.cur,
            a.val,
            a.state,
            a.chusr,
            a.ppn,
            b.sub,
            b.name as nama_sup
        FROM
            oms as a
        JOIN sub as b on b.sub = a.sub
        WHERE
            a.oms LIKE '%pos%'
            and a.DATE >= DATE_SUB( CURDATE(), INTERVAL 1 YEAR)
        ORDER BY a.oms DESC");
    }

    function print_pos($oms) {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            a.oms,
            a.date,
            a.cur,
            a.val,
            a.state,
            a.chusr,
            a.ppn,
            a.addnote,
            b.sub,
            b.NAME AS nama_sup,
            b.top
        FROM
            oms AS a
            JOIN sub AS b ON b.sub = a.sub 
        WHERE
            a.oms = '$oms'");
    }

    function det_pos($oms) {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            a.oms,
            c.inv,
            c.remark,
            c.spesifikasi,
            c.qty,
            c.price,
            c.disc,
            c.etd,
            c.val as grand_tot,
            c.unit,
            c.dateneed,
            c.valpph22,
            c.valpph23,
            c.valpph42
        FROM
            oms AS a
            JOIN omd AS c on c.oms = a.oms 
        WHERE
            a.oms = '$oms'");
    }
    
    function get_prq() {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            a.prq,
            a.date,
            a.cct,
            a.remark,
            a.categ_id 
        FROM
            prq AS a 
        WHERE
            a.DATE >= DATE_SUB( CURDATE(), INTERVAL 1 YEAR ) 
        ORDER BY
            a.prq DESC");
    }

    function get_detail_prq($no_prq) {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            a.prq,
            a.inv,
            a.remark,
            a.qty,
            a.unit,
            a.dateneed 
        FROM
            prd as a where a.prq = '$no_prq'");
    }

    function update_state($table,$data,$where) {
        $db_cas = $this->load->database('cas', TRUE);
        $db_cas->update($table, $data, $where);
    }
}
