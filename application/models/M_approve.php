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
            b.sub,
            b.name as nama_sup
        FROM
            oms as a
        JOIN sub as b on b.sub = a.sub
        WHERE
            a.oms LIKE '%pos%'
            and a.DATE >= DATE_SUB( CURDATE(), INTERVAL 1 YEAR)
        ORDER BY a.oms DESC;");
    }
    
}
