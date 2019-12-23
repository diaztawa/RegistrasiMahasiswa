<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_registrasi extends CI_Model{

       function daftar($data,$table)
       {
            $this->db->insert($table,$data);
       }
       function ambil_data()
       {
            return $this->db->get('tb_mahasiswa');
       }
       function ambil_IF()
       {
            return $this->db->select_sum('NIM')
                            ->where('jurusan','IF')
                            ->get('tb_mahasiswa');
            
       }
       function ambil_SI()
       {
            return $this->db->select_sum('NIM')
                            ->where('jurusan','SI')
                            ->get('tb_mahasiswa');
            
       }
       function ambil_SIA()
       {
            return $this->db->select_sum('NIM')
                            ->where('jurusan','SIA')
                            ->get('tb_mahasiswa');
            
       }
       function ambil_sekolah()
       {
            return $this->db->query("SELECT asal_sekolah, COUNT(NIM) FROM `tb_mahasiswa` GROUP BY asal_sekolah");
       }
       function ambil_kelamin()
       {
            return $this->db->where('jurusan', 'IF')
                            ->get('tb_mahasiswa');
       }
  }