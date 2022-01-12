<?php 

class Rental extends CI_Controller
{
	
	public function tambah_rental($id)
	{
		
		$data['detail'] = $this->db->query("SELECT * FROM mobil mb, type tp, customer cs WHERE mb.id_mobil = '$id' AND tp.kode_type = mb.kode_type AND cs.nama_rental=mb.nama_rental")->result();
		$this->load->view('templates_customer/header');
		$this->load->view('customer/tambah_rental', $data);
		$this->load->view('templates_customer/footer');
	}

	public function tambah_rental_aksi(){

		if(empty($this->session->userdata('role_id'))){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Silakan Login Untuk Melanjutkan Transaksi
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('customer/rental/tambah_rental/' . $this->input->post('id_mobil'));
		}else{

		}

		$id_customer		= $this->session->userdata('id_customer');
		$id_mobil 			= $this->input->post('id_mobil');
		$nama_rental		= $this->input->post('nama_rental');
		$tanggal_rental 	= $this->input->post('tanggal_rental');
		$tanggal_kembali 	= $this->input->post('tanggal_kembali');
		$denda 				= $this->input->post('denda');
		$harga 				= $this->input->post('harga');

		$data = array(
			'id_customer'			=> $id_customer,
			'id_mobil'				=> $id_mobil,
			'nama_rental'			=> $nama_rental,
			'tanggal_rental'		=> $tanggal_rental,		
			'tanggal_kembali'		=> $tanggal_kembali,
			'denda'					=> $denda,
			'harga'					=> $harga,
			'tanggal_pengembalian'	=> '-',
			'status_rental'			=> 'Belum Selesai',
			'status_pengembalian'	=> 'Belum Kembali'
		);

		$this->rental_model->insert_data($data, 'transaksi');
		$status = array('status' => '0');
		$id = array('id_mobil' => $id_mobil);

		$this->rental_model->update_data('mobil',$status,$id);

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Transaksi Berhasil, Silakan Checkout
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('customer/transaksi');

	}
}

?>