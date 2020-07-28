<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model','admin');
        is_logged_in();
    }

    public function dashboard()
    {
        // Halaman dashboard admin terkait data data chart , demografi dll
        $getLakilaki = $this->admin->getLakilaki();
        $getPerempuan = $this->admin->getPerempuan();
        $data['title'] = 'Dashboard';
        $data['user'] = $this->admin->getProfilUtama();
        $data['active'] = 'class="active"';
        $data['demografi'] = $this->admin->getUserDemografi();
        $data['total_anggota'] = $this->admin->getTotalAnggota();
        $data['total_anggota_aktif'] = $this->admin->getTotalAnggotaAktif();
        $data['total_alumni'] = $this->admin->getTotalAlumni();
        $data['total_dosen'] = $this->admin->getTotalDosen();
        $data['color'] = '["#4c84ff", "#29cc97"]';
        $data['jenis_kelamin'] = '['.$getLakilaki.','.$getPerempuan.']';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/admin/footer');
    }

    public function dataseluruhanggota()
    {
        // Menampilkan data anggota keseluruhan 
        
        $data['title'] = 'Manajemen Data Seluruh Anggota';
        $data['user'] = $this->admin->getProfilUtama();
        $data['active'] = 'class="active"';
        $data['total_anggota'] = $this->admin->getTotalAnggota();
        $data['total_anggota_aktif'] = $this->admin->getTotalAnggotaAktif();
        $data['total_alumni'] = $this->admin->getTotalAlumni();
        $data['total_dosen'] = $this->admin->getTotalDosen();
        $data['data_seluruh_anggota'] = $this->admin->getDataSeluruhAnggota();
        $data['color'] = '["#4c84ff", "#29cc97"]';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/data-seluruh-anggota', $data);
        $this->load->view('templates/admin/footer');
    }

    public function dataanggotaaktif()
    {
        // Halaman data anggota aktif admin terkait data akun anggota aktif
        
        $data['title'] = 'Manajemen Data Anggota Aktif';
        $data['user'] = $this->admin->getProfilUtama();
        $data['active'] = 'class="active"';
        $data['total_anggota'] = $this->admin->getTotalAnggota();
        $data['total_anggota_aktif'] = $this->admin->getTotalAnggotaAktif();
        $data['total_alumni'] = $this->admin->getTotalAlumni();
        $data['total_dosen'] = $this->admin->getTotalDosen();
        $data['data_anggota_aktif'] = $this->admin->getDataAnggotaAktif();
        $data['color'] = '["#4c84ff", "#29cc97"]';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/data-anggota-aktif', $data);
        $this->load->view('templates/admin/footer');
    }

    public function dataalumni()
    {
        // Halaman data alumni terkait data akun alumni
        $data['title'] = 'Manajemen Data Alumni';
        $data['user'] = $this->admin->getProfilUtama();
        $data['active'] = 'class="active"';
        $data['total_anggota'] = $this->admin->getTotalAnggota();
        $data['total_anggota_aktif'] = $this->admin->getTotalAnggotaAktif();
        $data['total_alumni'] = $this->admin->getTotalAlumni();
        $data['total_dosen'] = $this->admin->getTotalDosen();
        $data['data_alumni'] = $this->admin->getDataAlumni();
        $data['color'] = '["#4c84ff", "#29cc97"]';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/data-alumni', $data);
        $this->load->view('templates/admin/footer');
    }
    
    public function datadosen()
    {
        // Halaman data alumni terkait data akun alumni
        $data['title'] = 'Manajemen Data Dosen';
        $data['user'] = $this->admin->getProfilUtama();
        $data['active'] = 'class="active"';
        $data['total_anggota'] = $this->admin->getTotalAnggota();
        $data['total_anggota_aktif'] = $this->admin->getTotalAnggotaAktif();
        $data['total_alumni'] = $this->admin->getTotalAlumni();
        $data['total_dosen'] = $this->admin->getTotalDosen();
        $data['data_dosen'] = $this->admin->getDataDosen();
        $data['color'] = '["#4c84ff", "#29cc97"]';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/data-dosen', $data);
        $this->load->view('templates/admin/footer');
    }
//================ Function edit akun user=================//
      public function editanggota($username)
      { 
        $data['title'] = 'Manajemen Data Anggota Aktif';
        $data['user'] = $this->admin->getProfilUtama();
        $data['anggota'] = $this->admin->getAnggotaByUname($username);
        $data['angkatan'] = $this->db->get('pis_angkatan_univ')->result_array();
        $data['puzzle'] = $this->db->get('pis_angkatan_puzzle')->result_array();
        $data['bidang_riset'] = $this->db->get('pis_bidang_riset')->result_array();
        $data['active'] = 'class="active"';
       
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('nim', 'Nim', 'required|trim');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');
       // $this->form_validation->set_rules('role', 'Role', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/ubah-anggota', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $name = $this->input->post('name');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $username=$this->input->post('username');
            $email=$this->input->post('email');
            $nim=$this->input->post('nim');
            $jurusan=$this->input->post('jurusan');
            $tahun_masuk_univ=$this->input->post('tahun_masuk_univ');
            $no_hp=$this->input->post('no_hp');
            $no_anggota=$this->input->post('no_anggota');
            $puzzle=$this->input->post('puzzle');
            $status=$this->input->post('status');
            $alamat=$this->input->post('alamat');
            $bidang_riset=$this->input->post('bidang_riset');
            $data = [
                'name' => $name,
                'tanggal_lahir' => $tanggal_lahir,
                'username' => $username,
                'email' =>  $email
            ];
            $dataz = [
                'nim' => $nim,
                'jurusan' => $jurusan,
                'tahun_masuk_univ' => $tahun_masuk_univ,
                'no_hp' => $no_hp,
                'alamat'=>$alamat
            ];
            $datas = [
                'no_anggota' => $no_anggota,
                'puzzle' => $puzzle,
                'status' => $status,
                'bidang_riset' => $bidang_riset
            ];
            $this->db->update('user', $data,['username'=>$username]);
            $this->db->update('user_profil_utama', $dataz,['username'=>$username]);
            $this->db->update('user_profil_predatech', $datas,['username'=>$username]);
            
            
            $_SESSION['message'] = "
        Swal.fire({
        icon: 'success',
        title: 'Selamat!',
        text: 'Data anggota berhasil diubah!'
        })";
        redirect('admin/data-anggota-aktif');


    }
    
      }
//================ Function hapus akun user=================//
    public function hapusanggota($username)
    {
        $this->db->delete('user', ['username' => $username]);
        $this->db->delete('user_demografi', ['username' => $username]);
        $this->db->delete('user_profil_utama', ['username' => $username]);
        $this->db->delete('user_profil_predatech', ['username' => $username]);
        $_SESSION['message'] = "
                        Swal.fire({
                        icon: 'success',
                        title: 'Selamat!',
                        text: 'Anggota berhasil dihapus!'
                      })";
        redirect('admin/data-anggota-aktif');
    }
    public function hapusalumni($username)
    {
        $this->db->delete('user', ['username' => $username]);
        $this->db->delete('user_demografi', ['username' => $username]);
        $_SESSION['message'] = "
                        Swal.fire({
                        icon: 'success',
                        title: 'Selamat!',
                        text: 'Alumni berhasil dihapus!'
                      })";
        redirect('admin/data-alumni');
    }
    public function hapusdosen($username)
    {
        $this->db->delete('user', ['username' => $username]);
        $this->db->delete('user_demografi', ['username' => $username]);
        $_SESSION['message'] = "
                        Swal.fire({
                        icon: 'success',
                        title: 'Selamat!',
                        text: 'Dosen berhasil dihapus!'
                      })";
        redirect('admin/data-dosen');
    }
    

    public function profile()
    {   //menampilkan halaman profile admin
        $data['title'] = 'My Profile';
        $data['title1'] = "";
        $data['user'] = $this->admin->getProfilUtama();
        $data['active'] = 'class="active"';
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('nim', 'Nim', 'required|trim');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');
        if ($this->form_validation->run() == false) {
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templates/admin/footer');
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
            redirect('admin/profile');
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
            redirect('admin/profile');


        }
        

 }
 public function changepassword()
 {
     //ganti password admin
    $data['title'] = 'My Profile';
    $data['title1'] = '';
    $data['user'] = $this->admin->getProfilUtama();
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
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/changepassword', $data);
        $this->load->view('templates/admin/footer');
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
        redirect('admin/profile');
    } else {
        if ($current_password == $new_password) {
            $_SESSION['message'] = "
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password baru tidak boleh sama dengan password lama, mohon periksa kembali'
        })";
        redirect('admin/profile');
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
        redirect('admin/profile');
    
}
}
}
}
public function removepicture()
{
    //hapus gambar
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