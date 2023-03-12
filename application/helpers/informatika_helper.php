<?php


function is_logged_in()
{
    $ci = get_instance();
    if ($ci->session->userdata('nidn')) {
        redirect(base_url('login'));
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu   = $ci->uri->segment(1);
    }
}
