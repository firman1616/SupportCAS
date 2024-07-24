<?php
class M_setting extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function userList()
    {
        return $this->db->query("SELECT
        u.id_user,
        u.name,
        u.email,
        ur.`role`,
        d.kode_dept 
    from
        `user` u
    join user_role ur on
        ur.id_role = u.role_id
    join departemen d on d.id_dept = u.dept_id ");
    }
}
