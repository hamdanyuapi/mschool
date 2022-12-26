<?php
class Ppdb extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_ppdb');
	}
	function index(){
		$this->load->view('depan/v_ppdb');
	}

	function simpan_ppdb(){

		$nama_lengkap=strip_tags($this->input->post('nama_lengkap'));
		$jenis_kelamin=strip_tags($this->input->post('jenis_kelamin'));
		$tempat_lahir=strip_tags($this->input->post('tempat_lahir'));
		$tgl_lahir=strip_tags($this->input->post('tgl_lahir'));
		$alamat=strip_tags($this->input->post('alamat'));
		$desa=strip_tags($this->input->post('desa'));
		$kecamatan=strip_tags($this->input->post('kecamatan'));
		$kabupaten=strip_tags($this->input->post('kabupaten'));
		$provinsi=strip_tags($this->input->post('provinsi'));
		$nama_ayah=strip_tags($this->input->post('nama_ayah'));
		$nama_ibu=strip_tags($this->input->post('nama_ibu'));
		$pekerjaan_ayah=strip_tags($this->input->post('pekerjaan_ayah'));
		$pekerjaan_ibu=strip_tags($this->input->post('pekerjaan_ibu'));
		$no_hp=strip_tags($this->input->post('no_hp'));

		$this->m_ppdb->simpan_ppdb($nama_lengkap,$jenis_kelamin,$tempat_lahir,$tgl_lahir,$alamat,$desa,$kecamatan,$kabupaten,$provinsi,$nama_ayah,$nama_ibu,$pekerjaan_ayah,$pekerjaan_ibu,$no_hp);
		echo $this->session->set_flashdata('msg','success');
		redirect('home');
		
		// $this->load->view('v_ppdb');
	}
	
}
