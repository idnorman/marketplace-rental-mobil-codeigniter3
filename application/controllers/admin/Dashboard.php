<?php
	
	class Dashboard extends CI_Controller{

		public function index(){
			$this->rental_model->admin_login();
			$data['total_data'] = $this->rental_model->total_data_admin();
			$data['transaksi']	= $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND tr.status_pembayaran='0'")->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/Dashboard',$data);
			$this->load->view('templates_admin/footer');
		}
	}
?>