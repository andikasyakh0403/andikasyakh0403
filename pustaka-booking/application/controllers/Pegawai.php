<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pegawai extends CI_Controller {
 
	public function index()
	{
		$this->load->view('vw_form');
	}
 
	public function save()
	{
		$data['name'] = $this->input->post('nama');
		$data['email'] = $this->input->post('email');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['agama'] = $this->input->post('agama');
		$data['alamat'] = $this->input->post('alamat');
		$this->load->view('vw_pegawai',$data);
	}
}