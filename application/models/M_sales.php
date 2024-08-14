<?php
class M_sales extends CI_Model
{
    // protected $DBGroup = 'cas';
    function __construct()
    {
        parent::__construct();
    }

    function get_SOE() {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            okl.okl,
            okl.date,
            okl.nopoc,
            okl.ketlain,
            okl.remark as ket,
            okl.penyerahan,
            okl.syaratpenyerahan,
            okl.syaratpembayaran,
            okl.asal,
            okl.tujuan,
            okl.spec,
            NAME AS nama_sup,
            address 
        FROM
            okl
            JOIN sub ON sub.sub = okl.sub 
        WHERE
            DATE >= DATE_SUB( CURDATE(), INTERVAL 2 YEAR ) 
            AND okl LIKE '%SOE%' 
        ORDER BY
            okl DESC");
    }

    function print_soe($soe) {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            okl.okl,
            okl.date,
            okl.nopoc,
            okl.ketlain,
            okl.remark as ket,
            okl.penyerahan,
            okl.syaratpenyerahan,
            okl.syaratpembayaran,
            okl.asal,
            okl.tujuan,
            okl.spec,
            NAME AS nama_sup,
            address 
        FROM
            okl
            JOIN sub ON sub.sub = okl.sub 
        WHERE
            okl = '$soe'");
    }
    

    function detail_okl($soe) {
        $db_cas = $this->load->database('cas', TRUE);
        return $db_cas->query("SELECT
            okd.inv,
            okd.remark as nama_brg,
            okd.dateneed, 
            okd.unit,
            okd.qty,
            okd.qty1,
            inv.unit as unit_base
        FROM
            okd
            join inv on inv.inv = okd.inv
        WHERE
            okd.okl = '$soe'");
    }
    
}
