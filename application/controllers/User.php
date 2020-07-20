<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['active'] = 'class="active"';
        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('templates/user/footer');
    }
    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['active'] = 'class="active"';
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('nim', 'Nim', 'required|trim');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');
        if ($this->form_validation->run() == false) {
        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/user/footer');
        } else {
            $name = $this->input->post('name');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $username=$this->input->post('username');
            $email=$this->input->post('email');
            $nim=$this->input->post('nim');
            $jurusan=$this->input->post('jurusan');
            $upload_image = $_FILES['image']['name'];
            
           
                
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else{
                    $_SESSION['message'] = "
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Format file salah atau gambar lebih dari 1MB!'
                      })";
                // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('user/profile');
                }
            
        }
                $data = [
                    'name' => $name,
                    'tanggal_lahir' => $tanggal_lahir,
                    'username' => $username,
                    'email' =>  $email,
                    'nim' => $nim,
                    'jurusan' => $jurusan
                ];
                $this->db->where('username', $username);
                $this->db->update('user', $data);
                $_SESSION['message'] = "
            Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Profil berhasil diubah!'
            })";
            redirect('user/profile');


        }
        

 }
 public function changepassword()
 {
    $data['title'] = 'My Profile';
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    $data['active'] = 'class="active"';
    
    $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim',[
        'required' => 'Masukkan password lama!'
    ]);
    $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[5]|matches[new_password2]',[
        'min_length' => 'Password baru minimal 5 karakter'
    ]);
    $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]',[
        'min_length' => 'Password  baru minimal 5 karakter'
    ]);
    if ($this->form_validation->run() == false) {
        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('user/changepassword', $data);
        $this->load->view('templates/user/footer');
    } else {
    $current_password = $this->input->post('current_password');
    $new_password = $this->input->post('new_password1');
    if(!password_verify($current_password, $data['user']['password'])){
        $_SESSION['message'] = "
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Password lama salah, mohon periksa kembali'
      })";
        redirect('user/profile');
    } else {
        if ($current_password == $new_password) {
            $_SESSION['message'] = "
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password baru tidak boleh sama dengan password lama, mohon periksa kembali'
        })";
        redirect('user/profile');
        }else {
            // password sudah ok
           $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

            $this->db->set('password', $password_hash);
            $this->db->where('username', $this->session->userdata('username'));
            $this->db->update('user');

            $_SESSION['message'] = "
            Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Berhasil mengganti password'
        })";
        redirect('user/profile');
    
}
}
}
}
public function removepicture()
{
    $image = $this->input->post('image');
    $this->db->set('image',$image);
    $this->db->where('username', $this->session->userdata('username'));
    $this->db->update('user');
    $_SESSION['message'] = "
            Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Berhasil menghapus foto'
        })";
        redirect('admin/profile');
}

}