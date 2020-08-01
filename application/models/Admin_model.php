<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    //demografi
    public function getUserDemografi()
    {
        $query = 'SELECT user.name,user.username,user_demografi.jenis_kelamin FROM user JOIN user_demografi ON user.username = user_demografi.username';
    return $this->db->query($query)->row_array();
    }
      //Get jumlah seluruh anggota(user) didalam sistem
    public function getTotalAnggota()
    {
        $query = 'SELECT * FROM user WHERE role_id = "2" ';
        return $this->db->query($query)->num_rows();
    }
     //Get Jumlah anggota aktif
    public function getTotalAnggotaAktif()
    {
        $query = 'SELECT * FROM user WHERE status = "Anggota Aktif"';
        return $this->db->query($query)->num_rows();
    }
     //Get Jumlah Alumni
    public function getTotalAlumni()
    {
        $query = 'SELECT * FROM user WHERE status = "Alumni"';
        return $this->db->query($query)->num_rows();
    }
    //Get Jumlah Dosen
    public function getTotalDosen()
    {
        $query = 'SELECT * FROM user WHERE status = "Dosen"';
        return $this->db->query($query)->num_rows();
    }
     //Get Jumlah Laki laki
    public function getLakilaki()
    {
        $query ='SELECT * FROM user_demografi WHERE jenis_kelamin ="Laki-laki"' ;
        return $this->db->query($query)->num_rows();
    }
     //Get Jumlah Perempuan
    public function getPerempuan()
    {
        $query ='SELECT * FROM user_demografi WHERE jenis_kelamin ="Perempuan"' ;
        return $this->db->query($query)->num_rows();
    }

    
    //Get array data untuk tampilan profil utama
    public function getProfilUtama()
    {
    $table = [
        'user.name',
        'user.tanggal_lahir',
        'user.username',
        'user.email',
        'user.image',
        'user.password',
        'user.role_id',
        'user.status',
        'user.is_active',
        'user_profil_utama.nim',
        'user_profil_utama.jurusan',
        'user_profil_utama.tahun_masuk_univ',
        'user_profil_utama.no_hp',
        'user_profil_utama.alamat'
    ];
    $this->db->select($table);
    $this->db->from('user'); 
    $this->db->join('user_profil_utama', 'user_profil_utama.username=user.username', 'left');
    $this->db->join('user_profil_predatech', 'user_profil_predatech.username=user.username', 'left');
    $this->db->where('user_profil_utama.username', $this->session->userdata('username'));
    $query = $this->db->get();         
    return $query->row_array();
    }

     //Get Data array seluruh anggota(alumni,dosen,anggota aktif)
    public function getDataSeluruhAnggota()
    {
        $table = [
            'user.name',
            'user.tanggal_lahir',
            'user.username',
            'user.email',
            'user.image',
            'user.password',
            'user.role_id',
            'user.status',
            'user.is_active',
            'user_profil_utama.nim',
            'user_profil_utama.jurusan',
            'user_profil_utama.tahun_masuk_univ',
            'user_profil_utama.no_hp',
            'user_profil_utama.alamat'
        ];
        $this->db->select($table);
        $this->db->from('user'); 
        $this->db->join('user_profil_utama', 'user_profil_utama.username=user.username', 'left');
        $this->db->join('user_profil_predatech', 'user_profil_predatech.username=user.username', 'left');
        $this->db->where('status!=', 'Admin');
        $this->db->where('status!=', 'Dosen');
        $query = $this->db->get();         
        return $query->result_array();
    }
    //Get array data seluruh anggota aktif(hanya anggota aktif)
    public function getDataAnggotaAktif()
    {
        $table = [
            'user.name',
            'user.tanggal_lahir',
            'user.username',
            'user.email',
            'user.image',
            'user.password',
            'user.role_id',
            'user.status',
            'user.is_active',
            'user_profil_utama.nim',
            'user_profil_utama.jurusan',
            'user_profil_utama.tahun_masuk_univ',
            'user_profil_utama.no_hp',
            'user_profil_utama.alamat'
        ];
        $this->db->select($table);
        $this->db->from('user'); 
        $this->db->join('user_profil_utama', 'user_profil_utama.username=user.username', 'left');
        $this->db->join('user_profil_predatech', 'user_profil_predatech.username=user.username', 'left');
        $this->db->where('user.status', 'Anggota Aktif');
        $query = $this->db->get();         
        return $query->result_array();
    }
    //Get array data alumni (hanya alumni)
    public function getDataAlumni()
    {
        $table = [
            'user.name',
            'user.tanggal_lahir',
            'user.username',
            'user.email',
            'user.image',
            'user.password',
            'user.role_id',
            'user.status',
            'user.is_active',
            'user_profil_utama.nim',
            'user_profil_utama.jurusan',
            'user_profil_utama.tahun_masuk_univ',
            'user_profil_utama.no_hp',
            'user_profil_utama.alamat'
        ];
        $this->db->select($table);
        $this->db->from('user'); 
        $this->db->join('user_profil_utama', 'user_profil_utama.username=user.username', 'left');
        $this->db->join('user_profil_predatech', 'user_profil_predatech.username=user.username', 'left');
        $this->db->where('user.status', 'Alumni');
        $query = $this->db->get();         
        return $query->result_array();
    }

    //Get array data dosen (hanya dosen/belumfix)
    public function getDataDosen()
    {
        $table = [
            'user.name',
            'user.tanggal_lahir',
            'user.username',
            'user.email',
            'user.image',
            'user.password',
            'user.role_id',
            'user.status',
            'user.is_active',
            'user_profil_dosen.id',
            'user_profil_dosen.nip'
        ];
        $this->db->select($table);
        $this->db->from('user');
        $this->db->join('user_profil_dosen', 'user_profil_dosen.username=user.username', 'left');
        $this->db->where('user.status', 'Dosen');
        $query = $this->db->get();         
        return $query->result_array();
    }



    //Get array data anggota dengan username
    function getAnggotaByUname($username)
    {
        $table = [
            'user.name',
            'user.tanggal_lahir',
            'user.username',
            'user.email',
            'user.image',
            'user.password',
            'user.role_id',
            'user.status',
            'user.is_active',
            'user_profil_utama.nim',
            'user_profil_utama.jurusan',
            'user_profil_utama.tahun_masuk_univ',
            'user_profil_utama.no_hp',
            'user_profil_utama.alamat',
            'user_profil_predatech.no_anggota',
            'user_profil_predatech.puzzle',
            'user_profil_predatech.bidang_riset',
            'user_demografi.jenis_kelamin',
            'user_demografi.agama',
            'user_demografi.domisili',

        ];
        $this->db->select($table);
        $this->db->from('user'); 
        $this->db->join('user_profil_utama', 'user_profil_utama.username=user.username', 'left');
        $this->db->join('user_profil_predatech', 'user_profil_predatech.username=user.username', 'left');
        $this->db->join('user_demografi', 'user_demografi.username=user.username', 'left');
        $this->db->where('user_profil_utama.username', $username);
        $query = $this->db->get();         
        return $query->row_array();
    }

    //Get array data alumni dengan username
    function getAlumniByUname($username)
    {
        $table = [
            'user.name',
            'user.tanggal_lahir',
            'user.username',
            'user.email',
            'user.image',
            'user.password',
            'user.role_id',
            'user.status',
            'user.is_active',
            'user_profil_utama.nim',
            'user_profil_utama.jurusan',
            'user_profil_utama.tahun_masuk_univ',
            'user_profil_utama.no_hp',
            'user_profil_utama.alamat',
            'user_profil_predatech.no_anggota',
            'user_profil_predatech.puzzle',
            'user_profil_predatech.bidang_riset',
            'user_profil_pasca_tamat.tanggal_tamat',
            'user_profil_pasca_tamat.pekerjaan_pertama',
            'user_profil_pasca_tamat.tanggal_mulai_kerja_pertama',
            'user_profil_pasca_tamat.masa_tunggu',
            'user_profil_pasca_tamat.pekerjaan_saat_ini',
            'user_profil_pasca_tamat.jabatan',
            'user_profil_pasca_tamat.tempat_bekerja',
            'user_profil_pasca_tamat.alamat_kerja',
            'user_profil_pasca_tamat.mulai_kerja',
            'user_profil_pasca_tamat.penghasilan_saat_ini',
            'user_demografi.jenis_kelamin',
            'user_demografi.agama',
            'user_demografi.domisili',

        ];
        $this->db->select($table);
        $this->db->from('user'); 
        $this->db->join('user_profil_utama', 'user_profil_utama.username=user.username', 'left');
        $this->db->join('user_profil_predatech', 'user_profil_predatech.username=user.username', 'left');
        $this->db->join('user_profil_pasca_tamat', 'user_profil_pasca_tamat.username=user.username', 'left');
        $this->db->join('user_demografi', 'user_demografi.username=user.username', 'left');
        $this->db->where('user_profil_utama.username', $username);
        $query = $this->db->get();         
        return $query->row_array();
    }
}
