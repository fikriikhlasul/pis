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
    public function dataanggotabelumaktif()
    {
        // Halaman data alumni terkait data akun alumni
        $data['title'] = 'Manajemen Data Pendaftar';
        $data['user'] = $this->admin->getProfilUtama();
        $data['active'] = 'class="active"';
        $data['total_anggota'] = $this->admin->getTotalAnggota();
        $data['total_anggota_aktif'] = $this->admin->getTotalAnggotaAktif();
        $data['total_alumni'] = $this->admin->getTotalAlumni();
        $data['total_dosen'] = $this->admin->getTotalDosen();
        $data['data_anggota_belum_aktif'] = $this->admin->getDataAnggotaBelumAktif();
        $data['color'] = '["#4c84ff", "#29cc97"]';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/data-anggota-belum-aktif', $data);
        $this->load->view('templates/admin/footer');
    }

    public function verifikasi($username)
    {
            
              $status = $this->admin->getDataAnggotaBelumAktifByUname($username);
              $status =  $status['status'];
               $data = [
                   'is_active' => 1
               ];
               
              $dataal = [
                'username' => htmlspecialchars($username)
            ];
    
               // siapkan token
            //    $token = base64_encode(random_bytes(32));
            //    $user_token = [
            //        'email' => $email,
            //        'token' => $token,
            //        'date_created' => time()
            //    ];
    
               $this->db->update('user', $data,['username'=>$username]);
            //    $this->db->insert('user_demografi', $dataz);
            //    $this->db->insert('user_profil_utama', $datas);
            //    $this->db->insert('user_profil_predatech', $datax);
               if($status=="Alumni")
               {
                $this->db->delete('user_profil_pasca_tamat', ['username'=>$username]);
                $this->db->insert('user_profil_pasca_tamat', $dataal);
               }
            //    $this->db->insert('user_token', $user_token);
    
            //    $this->_sendEmail($token, 'verify');

            $_SESSION['message'] = "
            Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Berhasil mengaktifkan akun'
            })";
            redirect('admin/data-anggota-belum-aktif');

        
    }


//================ Function Tambah Akun User ===========//
public function tambahalumni()
      { 
          //tambah alumni
        $data['title'] = 'Manajemen Data Alumni';
        $data['user'] = $this->admin->getProfilUtama();
        $data['active'] = 'class="active"';
        $data['agama'] = $this->admin->getAgama();
        $data['jabatan'] = $this->admin->getJabatanPredatech();
        
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('domisili', 'Domisili', 'required|trim');
        // $this->form_validation->set_rules('role', 'Role', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/tambah-alumni', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $name = $this->input->post('name');
            $tanggal_lahir=$this->input->post('tanggal_lahir');
            $username = $this->input->post('username');
            $email=$this->input->post('email');
            $image = 'default.jpg';
            $password= password_hash('12345678', PASSWORD_DEFAULT);
            $role_id='2';
            $status='Dosen';
            $is_active='1';
            $date_created= time();
            
            $nip=$this->input->post('nip');
            $jabatan=$this->input->post('jabatan');

            $jenis_kelamin=$this->input->post('jenis_kelamin');
            $agama=$this->input->post('agama');
            $domisili=$this->input->post('domisili');
            $data = [
                'name' => $name,
                'tanggal_lahir' => $tanggal_lahir,
                'username' => $username,
                'email' => $email,
                'image' => $image,
                'password' => $password,
                'role_id' => $role_id,
                'status' => 'Dosen',
                'is_active' => $is_active,
                'date_created' => $date_created
            ];

            $datas = [
                'username' => $username,
                'nip' =>  $nip,
                'jabatan' =>  $jabatan
            ];

            $datax = [
                'username' => $username,
                'jenis_kelamin' =>  $jenis_kelamin,
                'agama' =>  $agama,
                'domisili' =>  $domisili
            ];
            

            $this->db->insert('user', $data,['username'=>$username]);
            $this->db->insert('user_profil_dosen', $datas,['username'=>$username]);
            $this->db->insert('user_demografi', $datax,['username'=>$username]);
            $_SESSION['message'] = "
            Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Berhasil menambah data dosen!'
            })";
            redirect('admin/data-dosen/');


    }
    
      }    
public function tambahdosen()
      { 
          //tambah dosen
        $data['title'] = 'Manajemen Data Dosen';
        $data['user'] = $this->admin->getProfilUtama();
        $data['active'] = 'class="active"';
        $data['agama'] = $this->admin->getAgama();
        $data['jabatan'] = $this->admin->getJabatanPredatech();
        
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('domisili', 'Domisili', 'required|trim');
        // $this->form_validation->set_rules('role', 'Role', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/tambah-dosen', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $name = $this->input->post('name');
            $tanggal_lahir=$this->input->post('tanggal_lahir');
            $username = $this->input->post('username');
            $email=$this->input->post('email');
            $image = 'default.jpg';
            $password= password_hash('12345678', PASSWORD_DEFAULT);
            $role_id='2';
            $status='Dosen';
            $is_active='1';
            $date_created= time();
            
            $nip=$this->input->post('nip');
            $jabatan=$this->input->post('jabatan');

            $jenis_kelamin=$this->input->post('jenis_kelamin');
            $agama=$this->input->post('agama');
            $domisili=$this->input->post('domisili');
            $data = [
                'name' => $name,
                'tanggal_lahir' => $tanggal_lahir,
                'username' => $username,
                'email' => $email,
                'image' => $image,
                'password' => $password,
                'role_id' => $role_id,
                'status' => 'Dosen',
                'is_active' => $is_active,
                'date_created' => $date_created
            ];

            $datas = [
                'username' => $username,
                'nip' =>  $nip,
                'jabatan' =>  $jabatan
            ];

            $datax = [
                'username' => $username,
                'jenis_kelamin' =>  $jenis_kelamin,
                'agama' =>  $agama,
                'domisili' =>  $domisili
            ];
            

            $this->db->insert('user', $data,['username'=>$username]);
            $this->db->insert('user_profil_dosen', $datas,['username'=>$username]);
            $this->db->insert('user_demografi', $datax,['username'=>$username]);
            $_SESSION['message'] = "
            Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Berhasil menambah data dosen!'
            })";
            redirect('admin/data-dosen/');


    }
    
      }    
//================ Function edit akun user=================//
      public function editanggota($username)
      { 
          //ubahanggotaaktif
        $data['title'] = 'Manajemen Data Anggota Aktif';
        $data['user'] = $this->admin->getProfilUtama();
        $data['anggota'] = $this->admin->getAnggotaByUname($username);
        $data['jurusan'] = $this->admin->getAllJurusan();
        $data['status']=$this->admin->getAllStatus();
        $data['agama'] = $this->admin->getAgama();
        $data['jabatan'] = $this->admin->getJabatanPredatech();
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
            $jabatan=$this->input->post('jabatan');
            $alamat=$this->input->post('alamat');
            $bidang_riset=$this->input->post('bidang_riset');
            $jenis_kelamin=$this->input->post('jenis_kelamin');
            $agama=$this->input->post('agama');
            $domisili=$this->input->post('domisili');
            $data = [
                'name' => $name,
                'tanggal_lahir' => $tanggal_lahir,
                'username' => $username,
                'email' =>  $email,
                'status' => $status
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
                'bidang_riset' => $bidang_riset,
                'jabatan' => $jabatan
            ];
            $datax = [
                'jenis_kelamin' => $jenis_kelamin,
                'agama' => $agama,
                'domisili' => $domisili
            ];
            $dataal = [
                'username' => $username
            ];
            $this->db->update('user', $data,['username'=>$username]);
            $this->db->update('user_profil_utama', $dataz,['username'=>$username]);
            $this->db->update('user_profil_predatech', $datas,['username'=>$username]);
            $this->db->update('user_demografi', $datax,['username'=>$username]);
            if($status== 'Alumni')
            {
                $this->db->insert('user_profil_pasca_tamat', $dataal,['username'=>$username]);
            }
            if($status== 'Mahasiswa')
            {
                $this->db->delete('user_profil_pasca_tamat', ['username'=>$username]);
            }
            
            
            $_SESSION['message'] = "
        Swal.fire({
        icon: 'success',
        title: 'Selamat!',
        text: 'Data anggota berhasil diubah!'
        })";
        redirect('admin/ubah-anggota/'.$username);

    }
    
      }
      public function editalumni($username)
      { 
          //ubahaalumni
        $data['title'] = 'Manajemen Data Alumni';
        $data['user'] = $this->admin->getProfilUtama();
        $data['alumni'] = $this->admin->getAlumniByUname($username);
        $data['angkatan'] = $this->db->get('pis_angkatan_univ')->result_array();
        $data['puzzle'] = $this->db->get('pis_angkatan_puzzle')->result_array();
        $data['bidang_riset'] = $this->db->get('pis_bidang_riset')->result_array();
        $data['active'] = 'class="active"';
       
        
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('tanggal_tamat', 'Tanggal Tamat', 'required|trim');
        $this->form_validation->set_rules('pekerjaan_pertama', 'Pekerjaan Pertama', 'required|trim');
        $this->form_validation->set_rules('masa_tunggu', 'Masa Tunggu', 'required|trim');
        $this->form_validation->set_rules('pekerjaan_saat_ini', 'Pekerjaan Saat Ini', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('tempat_bekerja', 'Tempat Bekerja', 'required|trim');
        $this->form_validation->set_rules('alamat_kerja', 'Alamat Bekerja', 'required|trim');
        $this->form_validation->set_rules('mulai_kerja', 'Mulai Bekerja', 'required|trim');
        $this->form_validation->set_rules('penghasilan_saat_ini', 'Penghasilan Saat Ini', 'required|trim');
        // $this->form_validation->set_rules('role', 'Role', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/ubah-alumni', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $username = $this->input->post('username');
            $tanggal_tamat = $this->input->post('tanggal_tamat');
            $pekerjaan_pertama=$this->input->post('pekerjaan_pertama');
            $tanggal_mulai_kerja_pertama=$this->input->post('tanggal_mulai_kerja_pertama');
            $masa_tunggu=$this->input->post('masa_tunggu');
            $pekerjaan_saat_ini=$this->input->post('pekerjaan_saat_ini');
            $jabatan=$this->input->post('jabatan');
            $tempat_bekerja=$this->input->post('tempat_bekerja');
            $alamat_kerja=$this->input->post('alamat_kerja');
            $mulai_kerja=$this->input->post('mulai_kerja');
            $penghasilan_saat_ini=$this->input->post('penghasilan_saat_ini');
            $data = [
                'username' => $username,
                'tanggal_tamat' => $tanggal_tamat,
                'pekerjaan_pertama' => $pekerjaan_pertama,
                'tanggal_mulai_kerja_pertama' => $tanggal_mulai_kerja_pertama,
                'masa_tunggu' =>  $masa_tunggu,
                'pekerjaan_saat_ini' =>  $pekerjaan_saat_ini,
                'jabatan' =>  $jabatan,
                'tempat_bekerja' =>  $tempat_bekerja,
                'alamat_kerja' =>  $alamat_kerja,
                'mulai_kerja' =>  $mulai_kerja,
                'penghasilan_saat_ini' =>  $penghasilan_saat_ini
            ];
            
            $this->db->update('user_profil_pasca_tamat', $data,['username'=>$username]);
            $_SESSION['message'] = "
            Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Data Alumni berhasil diubah!'
            })";
            redirect('admin/ubah-alumni/'.$username);


    }
    
      }

      public function editdosen($username)
      { 
          //ubahdosen
        $data['title'] = 'Manajemen Data Dosen';
        $data['user'] = $this->admin->getProfilUtama();
        $data['status']=$this->admin->getAllStatus();
        $data['agama'] = $this->admin->getAgama();
        $data['jabatan'] = $this->admin->getJabatanPredatech();
        $data['dosen'] = $this->admin->getDosenByUname($username);
        $data['angkatan'] = $this->db->get('pis_angkatan_univ')->result_array();
        $data['puzzle'] = $this->db->get('pis_angkatan_puzzle')->result_array();
        $data['bidang_riset'] = $this->db->get('pis_bidang_riset')->result_array();
        $data['active'] = 'class="active"';
       
        
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('status', 'Status Organisasi', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('domisili', 'Domisili', 'required|trim');
        // $this->form_validation->set_rules('role', 'Role', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/ubah-dosen', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $name = $this->input->post('name');
            $tanggal_lahir=$this->input->post('tanggal_lahir');
            $username = $this->input->post('username');
            $status=$this->input->post('status');
            
            $nip=$this->input->post('nip');
            $jabatan=$this->input->post('jabatan');

            $jenis_kelamin=$this->input->post('jenis_kelamin');
            $agama=$this->input->post('agama');
            $domisili=$this->input->post('domisili');
            $data = [
                'name' => $name,
                'tanggal_lahir' => $tanggal_lahir,
                'username' => $username,
                'status' =>  $status
            ];

            $datas = [
                'nip' =>  $nip,
                'jabatan' =>  $jabatan
            ];

            $datax = [
                'jenis_kelamin' =>  $jenis_kelamin,
                'agama' =>  $agama,
                'domisili' =>  $domisili
            ];
            

            $this->db->update('user', $data,['username'=>$username]);
            $this->db->update('user_profil_dosen', $datas,['username'=>$username]);
            $this->db->update('user_demografi', $datax,['username'=>$username]);
            $_SESSION['message'] = "
            Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Data Dosen berhasil diubah!'
            })";
            redirect('admin/ubah-dosen/'.$username);


    }
    
      }
//================ Function hapus akun user=================//
    public function hapusanggota($username)
    {
        $this->db->delete('user', ['username' => $username]);
        $this->db->delete('user_demografi', ['username' => $username]);
        $this->db->delete('user_profil_utama', ['username' => $username]);
        $this->db->delete('user_profil_predatech', ['username' => $username]);
        $this->db->delete('user_profil_pasca_tamat', ['username' => $username]);
        $_SESSION['message'] = "
                        Swal.fire({
                        icon: 'success',
                        title: 'Selamat!',
                        text: 'Anggota berhasil dihapus!'
                      })";
        redirect('admin/data-anggota-aktif');
    }
    public function hapusanggotabelumaktif($username)
    {
        $this->db->delete('user', ['username' => $username]);
        $this->db->delete('user_demografi', ['username' => $username]);
        $this->db->delete('user_profil_utama', ['username' => $username]);
        $this->db->delete('user_profil_predatech', ['username' => $username]);
        $this->db->delete('user_profil_pasca_tamat', ['username' => $username]);
        $_SESSION['message'] = "
                        Swal.fire({
                        icon: 'success',
                        title: 'Selamat!',
                        text: 'Anggota berhasil dihapus!'
                      })";
        redirect('admin/data-anggota-belum-aktif');
    }
    public function hapusalumni($username)
    {
        $this->db->delete('user', ['username' => $username]);
        $this->db->delete('user_demografi', ['username' => $username]);
        $this->db->delete('user_profil_utama', ['username' => $username]);
        $this->db->delete('user_profil_predatech', ['username' => $username]);
        $this->db->delete('user_profil_pasca_tamat', ['username' => $username]);
        
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
        $this->db->delete('user_profil_utama', ['username' => $username]);
        $this->db->delete('user_profil_predatech', ['username' => $username]);
        $this->db->delete('user_profil_pasca_tamat', ['username' => $username]);
        $this->db->delete('user_profil_dosen', ['username' => $username]);
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