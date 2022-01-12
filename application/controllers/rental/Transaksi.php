<?php  


	class Transaksi extends CI_Controller{
		
		public function index(){
			$this->rental_model->rental_login();
			$nama_rental = $this->session->userdata('nama_rental');	
			$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND tr.nama_rental='$nama_rental'")->result();
			$this->load->view('templates_rental/header');
			$this->load->view('templates_rental/sidebar');
			$this->load->view('rental/Data_transaksi',$data);
			$this->load->view('templates_rental/footer');
		}


		public function pembayaran($id){
			$this->rental_model->rental_login();

			$nama_rental = $this->session->userdata('nama_rental');	
			$where = array('id_rental' => $id);
			$data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental='$id' AND nama_rental='$nama_rental'")->result();
			$this->load->view('templates_rental/header');
			$this->load->view('templates_rental/sidebar');
			$this->load->view('rental/konfirmasi_pembayaran',$data);
			$this->load->view('templates_rental/footer');

		}

		public function cek_pembayaran(){
			$this->rental_model->rental_login();
			$id 				= $this->input->post('id_rental');
			$status_pembayaran	= $this->input->post('status_pembayaran');

			$data = array(
				'status_pembayaran'	=> $status_pembayaran
			);

			$where = array(
				'id_rental'		=> $id
			);

			$this->rental_model->update_data('transaksi',$data,$where);

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Pembayaran telah dikonfirmasi
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('rental/transaksi');
		}


		public function download_pembayaran($id){
			$this->rental_model->rental_login();
			$this->load->helper('download');
			$filePembayaran = $this->rental_model->downloadPembayaran($id);
			$file = 'assets/upload/' . $filePembayaran['bukti_pembayaran'];
			force_download($file, NULL);
		}

		public function transaksi_selesai($id){
			$this->rental_model->rental_login();
			$where = array('id_rental' => $id);
			$nama_rental = $this->session->userdata('nama_rental');	
			$data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental='$id' AND nama_rental='$nama_rental'")->result();



			$this->load->view('templates_rental/header');
			$this->load->view('templates_rental/sidebar');
			$this->load->view('rental/transaksi_selesai',$data);
			$this->load->view('templates_rental/footer');
		}

		public function transaksi_selesai_aksi(){
			$this->rental_model->rental_login();
			$id 					= $this->input->post('id_rental');
			$tanggal_pengembalian	= $this->input->post('tanggal_pengembalian');
			$status_rental 			= $this->input->post('status_rental');
			$status_pengembalian	= $this->input->post('status_pengembalian');
			$tanggal_kembali		= $this->input->post('tanggal_kembali');
			$denda					= $this->input->post('denda');

			$x						= strtotime($tanggal_pengembalian);
			$y						= strtotime($tanggal_kembali);
			$selisih				= abs($x - $y)/(60*60*24);
			$total_denda			= $selisih * $denda;
			

			$data = array(
				'tanggal_pengembalian'	=> $tanggal_pengembalian,
				'status_rental'			=> $status_rental,
				'status_pengembalian'	=> $status_pengembalian,
				'total_denda'			=> $total_denda
			);

			$where = array( 'id_rental' => $id);

			$this->rental_model->update_data('transaksi', $data, $where);

			if($status_rental == 'Selesai'){
				$id_mobil = $this->input->post('id_mobil');
				$data2	= array('status'   => '1');
				$where2 = array('id_mobil'  => $id_mobil );
				$this->rental_model->update_data('mobil', $data2, $where2);
			}else{
			}

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Transaksi selesai
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');

			redirect('rental/transaksi');
		}

		public function batal_transaksi($id){
			$this->rental_model->rental_login();
			$nama_rental = $this->session->userdata('nama_rental');	
			$where = array(
				'id_rental' => $id
			);
			$data  = $this->rental_model->get_where($where, 'transaksi')->row();

			$where2 = array(
				'id_mobil' => $data->id_mobil
			);
			$data2	= array('status'   => '1');

			if($data->nama_rental != $nama_rental){
				redirect('rental/transaksi');
			}else{
			}
			
			$this->rental_model->update_data('mobil', $data2, $where2);
			$this->rental_model->delete_data($where, 'transaksi');

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Transaksi Berhasil dibatalkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('rental/transaksi');

		}
	}

?>