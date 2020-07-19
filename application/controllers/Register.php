<?php
class Register extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
       {
           if ($this->session->userdata('email')) {
               redirect('user');
           }
    
           $this->form_validation->set_rules('name', 'Name', 'required|trim');
           $this->form_validation->set_rules('username', 'Username', 'alpha_numeric|min_length[5]|max_length[12]|required|trim|is_unique[user.username]', [
            'is_unique' => 'Username ini sudah terdaftar!',
            'min_length' => 'Username terlalu pendek',
            'max_length' => 'Maksimal 12 karakter!',
            'alpha_numeric' => 'Username hanya huruf dan angka!',
            
        ]);
           $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
               'is_unique' => 'email ini sudah terdaftar!'
           ]);
           $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
               'matches' => 'Password tidak cocok!',
               'min_length' => 'Password terlalu pendek!'
           ]);
           $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
    
           if ($this->form_validation->run() == false) {
               $this->load->view('auth/register');
           } else {
               $username = $this->input->post('username', true);
               $user_slug = slug($username);
               $email = $this->input->post('email', true);
               $data = [
                   'name' => htmlspecialchars($this->input->post('name', true)),
                   'username' => htmlspecialchars($username),
                   'user_slug' => htmlspecialchars($user_slug),
                   'email' => htmlspecialchars($email),
                   'image' => 'default.jpg',
                   'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                   'role_id' => 2,
                   'is_active' => 1,
                   'date_created' => time()
               ];
    
               // siapkan token
            //    $token = base64_encode(random_bytes(32));
            //    $user_token = [
            //        'email' => $email,
            //        'token' => $token,
            //        'date_created' => time()
            //    ];
    
               $this->db->insert('user', $data);
            //    $this->db->insert('user_token', $user_token);
    
            //    $this->_sendEmail($token, 'verify');

            $_SESSION['message'] = "
            Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Akun anda berhasil dibuat!'
            })";
            //    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun anda berhasil di buat. silahkan login</div>');
               redirect('login');
           }
       }
    
}