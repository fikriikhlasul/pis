<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    public function getUserDemografi()
    {
        $query = 'SELECT user.name,user.username,user_demografi.jenis_kelamin FROM user JOIN user_demografi ON user.username = user_demografi.username';
    return $this->db->query($query)->row_array();
    }
     
    public function getTotalAnggota()
    {
        $query = 'SELECT * FROM user WHERE role_id = "2" ';
        return $this->db->query($query)->num_rows();
    }
    
    public function getTotalAnggotaAktif()
    {
        $query = 'SELECT * FROM user_profil_predatech WHERE status = "Anggota Aktif"';
        return $this->db->query($query)->num_rows();
    }

    public function getTotalAlumni()
    {
        $query = 'SELECT * FROM user_profil_predatech WHERE status = "Alumni"';
        return $this->db->query($query)->num_rows();
    }
   
    public function getTotalDosen()
    {
        $query = 'SELECT * FROM user_profil_predatech WHERE status = "Dosen"';
        return $this->db->query($query)->num_rows();
    }

    public function getLakilaki()
    {
        $query ='SELECT * FROM user_demografi WHERE jenis_kelamin ="Laki-laki"' ;
        return $this->db->query($query)->num_rows();
    }

    public function getPerempuan()
    {
        $query ='SELECT * FROM user_demografi WHERE jenis_kelamin ="Perempuan"' ;
        return $this->db->query($query)->num_rows();
    }


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
            'user.is_active',
            'user_profil_utama.nim',
            'user_profil_utama.jurusan',
            'user_profil_utama.tahun_masuk_univ',
            'user_profil_utama.no_hp',
            'user_profil_utama.alamat',
            'user_profil_predatech.status'
        ];
        $this->db->select($table);
        $this->db->from('user'); 
        $this->db->join('user_profil_utama', 'user_profil_utama.username=user.username', 'left');
        $this->db->join('user_profil_predatech', 'user_profil_predatech.username=user.username', 'left');
        $this->db->where('user.role_id', '2');
        $query = $this->db->get();         
        return $query->result_array();
    }

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
            'user.is_active',
            'user_profil_utama.nim',
            'user_profil_utama.jurusan',
            'user_profil_utama.tahun_masuk_univ',
            'user_profil_utama.no_hp',
            'user_profil_utama.alamat',
            'user_profil_predatech.status'
        ];
        $this->db->select($table);
        $this->db->from('user'); 
        $this->db->join('user_profil_utama', 'user_profil_utama.username=user.username', 'left');
        $this->db->join('user_profil_predatech', 'user_profil_predatech.username=user.username', 'left');
        $this->db->where('user_profil_predatech.status', 'Anggota Aktif');
        $query = $this->db->get();         
        return $query->result_array();
    }
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
            'user.is_active',
            'user_profil_utama.nim',
            'user_profil_utama.jurusan',
            'user_profil_utama.tahun_masuk_univ',
            'user_profil_utama.no_hp',
            'user_profil_utama.alamat',
            'user_profil_predatech.status'
        ];
        $this->db->select($table);
        $this->db->from('user'); 
        $this->db->join('user_profil_utama', 'user_profil_utama.username=user.username', 'left');
        $this->db->join('user_profil_predatech', 'user_profil_predatech.username=user.username', 'left');
        $this->db->where('user_profil_predatech.status', 'Alumni');
        $query = $this->db->get();         
        return $query->result_array();
    }
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
            'user.is_active',
            'user_profil_utama.nim',
            'user_profil_utama.jurusan',
            'user_profil_utama.tahun_masuk_univ',
            'user_profil_utama.no_hp',
            'user_profil_utama.alamat',
            'user_profil_predatech.status'
        ];
        $this->db->select($table);
        $this->db->from('user'); 
        $this->db->join('user_profil_utama', 'user_profil_utama.username=user.username', 'left');
        $this->db->join('user_profil_predatech', 'user_profil_predatech.username=user.username', 'left');
        $this->db->where('user_profil_predatech.status', 'Dosen');
        $query = $this->db->get();         
        return $query->result_array();
    }



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
        'user.is_active',
        'user_profil_utama.nim',
        'user_profil_utama.jurusan',
        'user_profil_utama.tahun_masuk_univ',
        'user_profil_utama.no_hp',
        'user_profil_utama.alamat',
        'user_profil_predatech.status'
    ];
    $this->db->select($table);
    $this->db->from('user'); 
    $this->db->join('user_profil_utama', 'user_profil_utama.username=user.username', 'left');
    $this->db->join('user_profil_predatech', 'user_profil_predatech.username=user.username', 'left');
    $this->db->where('user_profil_utama.username', $this->session->userdata('username'));
    $query = $this->db->get();         
    return $query->row_array();
    }


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
            'user.is_active',
            'user_profil_utama.nim',
            'user_profil_utama.jurusan',
            'user_profil_utama.tahun_masuk_univ',
            'user_profil_utama.no_hp',
            'user_profil_utama.alamat',
            'user_profil_predatech.no_anggota',
            'user_profil_predatech.puzzle',
            'user_profil_predatech.status',
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
}
