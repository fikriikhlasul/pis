<?php 

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('login');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $slug = $ci->uri->segment(1);

        $querySlug = $ci->db->get_where('user_slug', ['slug' => $slug])->row_array();
        $slug_id = $querySlug['id'];

        $userAccess = $ci->db->get_where('user_access_role', [
            'role_id' => $role_id,
            'slug_id' => $slug_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('blocked');
        }
    }
}


function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_role');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}
