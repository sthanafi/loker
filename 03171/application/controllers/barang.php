<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Barang extends CI_Controller {


       public function __construct(){

	       	parent::__construct();
			if (!$this->session->userdata('logged_in'))
			{
				redirect('login');
			}

	
		}

		public function index()
		{
			$this->load->model('transaksi');

			$data['barang'] = $this->transaksi->daftar();
			
			$this->load->view('daftar_barang', $data);
		}


		public function tambah() {
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('no_hp', 'No. Handphone', 'required|numeric');
			$this->form_validation->set_rules('keterangan', 'Keterangan Barang', 'required');
			$this->form_validation->set_rules('no_loker', 'Nomor Loker', 'required|alpha_numeric');
		
			//if ($this->input->post('submit')) {
			if($this->form_validation->run()){
					$data['nama_pengguna'] = $this->input->post('nama');
					$data['no_hp'] = $this->input->post('no_hp');
					$data['keterangan'] = $this->input->post('keterangan');
					$data['no_loker'] = $this->input->post('no_loker');

					$this->load->model('transaksi');
				
					if($this->transaksi->simpan($data)) {
					$this->index();
					} else {
					echo "input data tidak berhasil";
					}
					
				} else {
					$this->load->view('header');
					$this->load->view('form_penitipan');
					$this->load->view('footer');
				}

			}
		}