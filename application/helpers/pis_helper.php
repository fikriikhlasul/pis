<?php 

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('login');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $level = $ci->uri->segment(1);

        $queryLevel = $ci->db->get_where('user_level', ['level' => $level])->row_array();
        $level_id = $queryLevel['id'];

        $userAccess = $ci->db->get_where('user_access_level', [
            'role_id' => $role_id,
            'level_id' => $level_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('blocked');
        }
    }
}


// function check_access($role_id, $menu_id)
// {
//     $ci = get_instance();

//     $ci->db->where('role_id', $role_id);
//     $ci->db->where('menu_id', $menu_id);
//     $result = $ci->db->get('user_access_menu');

//     if ($result->num_rows() > 0) {
//         return "checked='checked'";
//     }
// }
function slug($text)
{
    // replace non letter or digits by -
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
    // trim
    $text = trim($text, '-');
    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // lowercase
    $text = strtolower($text);
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    if (empty($text))
    {
        return 'n-a';
    }
    return $text;
}
