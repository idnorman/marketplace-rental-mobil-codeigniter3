<?php 
	class Laporan extends CI_Controller{

		public function index(){
			$this->rental_model->rental_login();

			$dari 			= $this->input->post('dari');
			$sampai 		= $this->input->post('sampai');
			$nama_rental	= $this->session->userdata('nama_rental');
			$this->_rules();

			if($this->form_validation->run() == FALSE){
				$this->load->view('templates_rental/header');
				$this->load->view('templates_rental/sidebar');
				$this->load->view('rental/filter_laporan');
				$this->load->view('templates_rental/footer');
			}else{

				$data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.nama_rental = '$nama_rental' AND tr.id_customer=cs.id_customer AND date(tanggal_rental) >= '$dari' AND date(tanggal_rental) <= '$sampai'")->result();

				$this->load->view('templates_rental/header');
				$this->load->view('templates_rental/sidebar');
				$this->load->view('rental/tampilkan_laporan',$data);
				$this->load->view('templates_rental/footer');
			} 
		}


		public function print_laporan(){
			$this->rental_model->rental_login();
			$dari 		= $this->input->get('dari');
			$sampai 	= $this->input->get('sampai');
			$nama_rental	= $this->session->userdata('nama_rental');

			$data['title']	 = "Print Laporan Transaksi";
			$data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND tr.nama_rental = '$nama_rental' AND date(tanggal_rental) >= '$dari' AND date(tanggal_rental) <= '$sampai'")->result();

				$this->load->view('templates_rental/header');
				$this->load->view('rental/print_laporan',$data);
		}

		public function _rules(){
			$this->form_validation->set_rules('dari', 'Dari Tanggal','required');
			$this->form_validation->set_rules('sampai', 'Sampai Tanggal','required');
		}
	}
?>