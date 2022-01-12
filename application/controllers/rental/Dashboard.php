<?php
	
	class Dashboard extends CI_Controller{

		public function index(){
			$this->rental_model->rental_login();

			$nama_rental		= $this->session->userdata('nama_rental');
			$data['total_data'] = $this->rental_model->total_data_rental();
			$data['transaksi']	= $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND tr.status_pembayaran='0' AND tr.nama_rental = '$nama_rental'")->result();
			$this->load->view('templates_rental/header');
			$this->load->view('templates_rental/sidebar');
			$this->load->view('rental/Dashboard',$data);
			$this->load->view('templates_rental/footer');
		}
	}
?>