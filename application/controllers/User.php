<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model','user');
        is_logged_in();
    }

    public function anggota()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->user->getProfilUtama();
        // $data['total_notif'] = sizeof($this->user->getTotalNotifAnggota());
        // $data['notifs'] = array_keys($this->user->getTotalNotifAnggota());
        // $array1 = ['tahun_masuk_univ','alamat','no_anggota','puzzle','bidang_riset'];
        // $array2 = ['Tahun Masuk Universitas','Alamat','Nomor Keanggotaan','Puzzle','Bidang Riset'];
        // $data['notif'] = str_replace($array1,$array2,$data['notifs']);
        $data['active'] = 'class="active"';
        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('templates/user/footer');
    }
    public function alumni()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->user->getProfilUtama();
        $data['active'] = 'class="active"';
        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('templates/user/footer');
    }
    public function dosen()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->user->getProfilDosen();
        $data['active'] = 'class="active"';
        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('templates/user/footer');
    }
    public function profileanggota()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->user->getProfilUtama();
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
            redirect('anggota/profile');
                }
            
        }
                $data = [
                    'name' => $name,
                    'tanggal_lahir' => $tanggal_lahir,
                    'username' => $username,
                    'email' =>  $email
                ];
                $dataz = [
                    'nim' => $nim,
                    'jurusan' => $jurusan
                ];
                $this->db->where('username', $username);
                $this->db->update('user', $data);
                $this->db->update('user_profil_utama', $dataz);
                $_SESSION['message'] = "
            Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Profil berhasil diubah!'
            })";
            redirect('anggota/profile');


        }
        

 }
 public function profilealumni()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->user->getProfilAlumni();
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
            redirect('alumni/profile');
                }
            
        }
                $data = [
                    'name' => $name,
                    'tanggal_lahir' => $tanggal_lahir,
                    'username' => $username,
                    'email' =>  $email
                ];
                $dataz = [
                    'nim' => $nim,
                    'jurusan' => $jurusan
                ];
                $this->db->where('username', $username);
                $this->db->update('user', $data);
                $this->db->update('user_profil_utama', $dataz);
                $_SESSION['message'] = "
            Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Profil berhasil diubah!'
            })";
            redirect('alumni/profile');


        }
        

 }

 public function profiledosen()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->user->getProfilDosen();
        $data['active'] = 'class="active"';
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
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
            $nip=$this->input->post('nip');
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
            redirect('dosen/profile');
                }
            
        }
                $data = [
                    'name' => $name,
                    'tanggal_lahir' => $tanggal_lahir,
                    'username' => $username,
                    'email' =>  $email
                ];
                $dataz = [
                    'nip' => $nip
                ];
                $this->db->where('username', $username);
                $this->db->update('user', $data);
                $this->db->update('user_profil_dosen', $dataz);
                $_SESSION['message'] = "
            Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Profil berhasil diubah!'
            })";
            redirect('dosen/profile');


        }
        

 }
 public function changepassword()
 {
    //ganti password user
    $data['title'] = 'My Profile';
    $data['title1'] = '';
    $data['user'] = $this->user->getProfilUtama();
    $data['active'] = 'class="active"';
    $status = $this->session->userdata('status');
    
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
      if($status=='Mahasiswa'){
          redirect('user/changepassword');
      }else{
        redirect('alumni/changepassword');
      }
    } else {
        if ($current_password == $new_password) {
            $_SESSION['message'] = "
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password baru tidak boleh sama dengan password lama, mohon periksa kembali'
        })";
        if($status=='Mahasiswa'){
            redirect('user/changepassword');
        }else{
          redirect('alumni/changepassword');
        }
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
        if($status=='Mahasiswa'){
            redirect('anggota/profile');
        }else{
          redirect('alumni/profile');
        }
    
}
}
}
}
 public function changepassworddosen()
 {
    //ganti password dosen
    $data['title'] = 'My Profile';
    $data['title1'] = '';
    $data['user'] = $this->user->getProfilDosen();
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
        redirect('dosen/profile');
    } else {
        if ($current_password == $new_password) {
            $_SESSION['message'] = "
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password baru tidak boleh sama dengan password lama, mohon periksa kembali'
        })";
        redirect('dosen/changepassword');
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
        redirect('dosen/profile');
    
}
}
}
}
public function removepicture()
{
    $status = $this->session->userdata('status');
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
        if($status =='Mahasiswa'){

            redirect('anggota/profile');

        }elseif($status=='Dosen'){
            redirect('dosen/profile');
        }else{
            redirect('alumni/profile');
        }
}

}