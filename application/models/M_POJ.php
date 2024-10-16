<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_POJ extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_data_poj()
    {
        // Data yang akan diupdate
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT 
            a.por, 
            DATE(a.date) AS date, 
            DATE(a.duedate) AS duedate, 
            a.sub as kode_sup, 
            a.remark AS ket, 
            a.aprov,
            b.name AS nama_sup 
        FROM por a
        LEFT JOIN sub b ON b.sub = a.sub
        WHERE a.date >= DATE_SUB( CURDATE(), INTERVAL 4 MONTH )
        ORDER BY a.aprov DESC;
        ");
    }

    function update_approve2($rma)  {
        $db_cas = $this->load->database('cas', TRUE);
        $apdate = date('d/m/Y h:i');
        return $db_cas->query("UPDATE rma set aprov = '1' WHERE rma = '$rma'");
    }

    function print_poj($poj){
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT 
            a.por, 
            DATE(a.date) AS date, 
            DATE(a.duedate) AS duedate, 
            a.sub as kode_sup, 
            a.remark, 
            b.name AS nama_sup,
            b.address as alamat,
            a.cur,
            a.kurs,
            a.ppn,
            a.ppnbebas,
            a.val,
            a.ppnganti 
        FROM por a
        LEFT JOIN sub b ON b.sub = a.sub 
        WHERE
            a.por = '$poj'");
    }

    function det_poj($poj) {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            a.por,
            a.inv,
            a.remark AS ket,
            a.qty,
            a.unit,
            a.price,
            a.valpph23,
            a.val,
            a.etd,
            a.valpph22,
            a.valpph23,
            a.valpph42,
            b.name as nama_inv 
        FROM
            pord a
        left join inv b on b.inv = a.inv
        where a.por = '$poj'");
    }

    function update_status($poj) {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("UPDATE por set aprov = '1' WHERE por = '$poj'");
    }
}
