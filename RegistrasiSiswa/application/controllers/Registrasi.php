<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
	public function index()
	{   
        $data['data']= $this->M_registrasi->ambil_data()->result();
		$this->load->view('v_tampil', $data);
    }
    function regist(){
        $this->load->view('v_registrasi');
    }
    function registrasi_siswa(){
        $nama=    $this->input->post('nama');
        $kelamin =    $this->input->post('kelamin');
        $jurusan =    $this->input->post('jurusan');
        $asal_sekolah =    $this->input->post('asal_sekolah');
        $data = array(
			'nama' => $nama,
			'kelamin' => $kelamin,
            'jurusan' => $jurusan,
            'asal_sekolah' => $asal_sekolah,
			);
        $this->M_registrasi->daftar($data, 'tb_mahasiswa');
        redirect('registrasi/index');
    }
    // function jurusan()
	// {   
    //     $data['data']= $this->M_registrasi->ambil_data()->result();
	// 	$this->load->view('v_jurusan', $data);
    // }
    // function kelamin()
	// {   
    //     $data['data']= $this->M_registrasi->ambil_data()->result();
	// 	$this->load->view('v_jenis_kelamin', $data);
    // }
    function asal_sekolah()
	{   
        $get= $this->M_registrasi->ambil_sekolah();
        $data = array(
			'NIM' => $get,
            'asal_sekolah' => $get
			);
		$this->load->view('v_asal_sekolah', $data);
    }
}
