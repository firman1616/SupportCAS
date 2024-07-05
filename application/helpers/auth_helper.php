<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('modul', ['nama_modul' => $menu])->row_array();

        // die(var_dump($queryMenu));


        $modul_id = $queryMenu['id_modul'];

        $userAccess = $ci->db->get_where('user_access_modul', [
            'role_id' => $role_id,
            'modul_id' => $modul_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('Auth/blocked');
        }
    }
}

function check_access($role_id, $modul_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('modul_id', $modul_id);
    $result = $ci->db->get('user_access_modul');

    if ($result->num_rows() > 0) {
        return "checked = 'checked'";
    }
}
