<?php 
	class Payment extends CI_Controller{

		public function index(){

			$this->rental_model->rental_login();

			
			$nama_rental	 = $this->session->userdata('nama_rental');
			$where = array(
				'nama_rental'	=> $nama_rental
			);
			$data['payment'] = $this->rental_model->get_where($where, 'payment')->result();

			$this->load->view('templates_rental/header');
			$this->load->view('templates_rental/sidebar');
			$this->load->view('rental/Payment',$data);
			$this->load->view('templates_rental/footer');
		}


		public function tambah_payment(){
			$this->rental_model->rental_login();
			$this->load->view('templates_rental/header');
			$this->load->view('templates_rental/sidebar');
			$this->load->view('rental/form_tambah_payment');
			$this->load->view('templates_rental/footer');
		}


		public function tambah_payment_aksi(){

			$this->rental_model->rental_login();

			$this->_rules();

			if($this->form_validation->run() == FALSE){
				$this->tambah_payment();
			}else{

				$nama_rental	 = $this->session->userdata('nama_rental');
				$nama_payment	 = $this->input->post('nama_payment');
				$key_payment	 = $this->input->post('key_payment');
				$atas_nama		 = $this->input->post('atas_nama');


				$data = array(
					'nama_payment'	=> $nama_payment,
					'key_payment'	=> $key_payment,
					'nama_rental'	=> $nama_rental,
					'atas_nama'		=> $atas_nama
				);

				$this->rental_model->insert_data($data, 'payment');
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  Data Alat Pembayaran Berhasil Ditambahkan
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
				redirect('rental/payment');
			}
		}


		public function update_payment($id){
			$this->rental_model->rental_login();
			

			$nama_rental	 = $this->session->userdata('nama_rental');
			$data['payment'] = $this->db->query("SELECT * FROM payment WHERE id_payment='$id' AND nama_rental='$nama_rental'")->result();

			$this->load->view('templates_rental/header');
			$this->load->view('templates_rental/sidebar');
			$this->load->view('rental/form_update_payment',$data);
			$this->load->view('templates_rental/footer');
		}

		public function update_payment_aksi(){
			$this->rental_model->rental_login();

			$this->_rules();

			if($this->form_validation->run() == FALSE){
				$this->update_payment($this->input->post('id_payment'));
			}else{
				$id_payment 	 = $this->input->post('id_payment');
				$nama_rental	 = $this->session->userdata('nama_rental');
				$nama_payment	 = $this->input->post('nama_payment');
				$key_payment	 = $this->input->post('key_payment');
				$atas_nama		 = $this->input->post('atas_nama');

				$data = array(
					'nama_payment'	=> $nama_payment,
					'key_payment'	=> $key_payment,
					'nama_rental'	=> $nama_rental,
					'atas_nama'		=> $atas_nama
				);

				$where = array(
					'id_payment' => $id_payment
				);

				$this->rental_model->update_data('payment', $data, $where);
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  Data Alat Pembayaran Berhasil Diupdate
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
				redirect('rental/payment');

			}
		}


		public function delete_payment($id){
			$this->rental_model->rental_login();

			$data['payment'] = $this->db->query("SELECT * FROM payment WHERE id_payment='$id'")->result();

			
			if($data['payment']['0']->nama_rental != $this->session->userdata('nama_rental')){
				redirect('rental/payment');

			}else{
			}

			
			$where = array(
				'id_payment'  => $id
			);
			$this->rental_model->delete_data($where, 'payment');

				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Data Alat Pembayaran Berhasil Dihapus
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
				redirect('rental/payment');

		}

		public function _rules(){
			$this->form_validation->set_rules('nama_payment', 'Nama Alat Pembayaran', 'required');
			$this->form_validation->set_rules('key_payment', 'Nomor/Key Alat Pembayaran', 'required');			
		}

	}
?>