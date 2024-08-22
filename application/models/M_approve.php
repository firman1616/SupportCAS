<?php
class M_approve extends CI_Model
{
    // protected $DBGroup = 'cas';
    function __construct()
    {
        parent::__construct();
    }

    function get_pos()
    {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            a.oms,
            a.date,
            a.cur,
            a.val,
            a.state,
            a.chusr,
            a.ppn,
            a.aprov,
            b.sub,
            b.name as nama_sup
        FROM
            oms as a
        LEFT JOIN sub as b on b.sub = a.sub
        WHERE
            a.oms LIKE '%pos%'
            and a.DATE >= DATE_SUB( CURDATE(), INTERVAL 1 YEAR)
        ORDER BY a.oms DESC");
    }

    function print_pos($oms)
    {
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
            b.top,
            b.address
        FROM
            oms AS a
            LEFT JOIN sub AS b ON b.sub = a.sub 
        WHERE
            a.oms = '$oms'");
    }

    function det_pos($oms)
    {
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

    function get_prq()
    {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            a.prq,
            a.date,
            a.cct,
            a.remark,
            a.categ_id,
            a.aprov 
        FROM
            prq AS a 
        WHERE
            a.date >= DATE_SUB( CURDATE(), INTERVAL 1 YEAR ) 
        ORDER BY
            CASE 
                WHEN a.aprov = 0 THEN 0
                ELSE 1
            END,
            a.date DESC");
    }

    function get_detail_prq($no_prq)
    {
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

    function update_state($table, $data, $where)
    {
        $db_cas = $this->load->database('cas', TRUE);
        $db_cas->update($table, $data, $where);
    }

    // update approve po
    public function update_aprov($oms)
    {
        // Data yang akan diupdate
        $db_cas = $this->load->database('cas', TRUE);
        $data = array(
            'aprov' => 1 // Update aprov menjadi 1
        );

        // Update tabel
        $this->db->where('oms', $oms);
        return $db_cas->update('oms', $data); // Ganti `table_name` dengan nama tabel yang sesuai
    }

    public function update_prq($prq)
    {
        // Data yang akan diupdate
        $db_cas = $this->load->database('cas', TRUE);
        $data = array(
            'aprov' => 1, // Update aprov menjadi 1
            'categ_id' => 'Approved'
        );

        // Update tabel
        $this->db->where('prq', $prq);
        return $db_cas->update('prq', $data); // Ganti `table_name` dengan nama tabel yang sesuai
    }

    public function cancel_approve_whs($prq)
    {
        // Data yang akan diupdate
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("UPDATE prq SET aprov = 0, categ_id = 'Need Approve' WHERE prq = '$prq'");

         // Ganti `table_name` dengan nama tabel yang sesuai
    }

    function print_prq($prq)
    {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            a.prq,
            a.date,
            a.aprov,
            a.remark,
            a.period,
            a.cct
        FROM
            prq AS a
        WHERE
            a.prq = '$prq'");
    }

    function det_prq($prq)
    {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            b.inv,
            b.loc,
            b.remark AS ket_det,
            b.spesifikasi,
            b.qty,
            b.unit,
            b.cct AS cct_det,
            b.etd,
            b.dept,
            b.dateneed 
        FROM
            prd AS b 
        WHERE
            b.prq = '$prq'");
    }
}
