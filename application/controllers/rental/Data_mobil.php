<?php


class Data_mobil extends CI_Controller{
	public function index(){
		$this->rental_model->rental_login();

		$where = array(
			'nama_rental'	=> $this->session->userdata('nama_rental')
		);
		$data['mobil'] = $this->rental_model->get_where($where,'mobil')->result();
		$data['type'] = $this->rental_model->get_data('type')->result();

		$this->load->view('templates_rental/header');
		$this->load->view('templates_rental/sidebar');
		$this->load->view('rental/Data_mobil',$data);
		$this->load->view('templates_rental/footer');
	}

	public function tambah_mobil(){ 
		$this->rental_model->rental_login();
		$data['type'] = $this->rental_model->get_data('type')->result();
		$this->load->view('templates_rental/header');
		$this->load->view('templates_rental/sidebar');
		$this->load->view('rental/form_tambah_mobil',$data);
		$this->load->view('templates_rental/footer');
	}

	public function tambah_mobil_aksi(){
		$this->rental_model->rental_login();
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah_mobil();
		}else{
			$nama_rental			= $this->input->post('nama_rental');
			$kode_type				= $this->input->post('kode_type');
			$merk					= $this->input->post('merk');
			$no_plat				= $this->input->post('no_plat');
			$warna					= $this->input->post('warna');
			$tahun					= $this->input->post('tahun');
			$status					= $this->input->post('status');
			$harga					= $this->input->post('harga');
			$denda					= $this->input->post('denda');
			$ac						= $this->input->post('ac');
			$supir					= $this->input->post('supir');
			$mp3_player				= $this->input->post('mp3_player');
			$central_lock			= $this->input->post('central_lock');
			$gambar					= $_FILES['gambar']['name'];
			
			if($gambar='0'){}else{
				$config['upload_path']		= './assets/upload';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff|webp';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('gambar')){
					echo "Gambar Mobil Gagal diupload!";
				}else{
					$gambar = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nama_rental'		=> $nama_rental,
				'kode_type'			=> $kode_type,
				'merk'				=> $merk,
				'no_plat'			=> $no_plat,
				'tahun'				=> $tahun,
				'warna'				=> $warna,
				'status'			=> $status,
				'harga'				=> $harga,
				'denda'				=> $denda,
				'ac'				=> $ac,
				'supir'				=> $supir,
				'mp3_player'		=> $mp3_player,
				'central_lock'		=> $central_lock,
				'gambar'			=> $gambar,
			);

			$this->rental_model->insert_data($data, 'mobil');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Mobil Berhasil Ditambahkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('rental/data_mobil');
		}
	}


	public function update_mobil($id){
		$this->rental_model->rental_login();

		$where = array('id_mobil' => $id);
		$data['mobil'] = $this->db->query("SELECT * FROM mobil mb, type tp WHERE mb.kode_type=tp.kode_type AND mb.id_mobil='$id'")->result();

		if($data['mobil']['0']->nama_rental != $this->session->userdata('nama_rental')){
			redirect('rental/data_mobil');
		}else{
		}

		$data['type'] = $this->rental_model->get_data('type')->result();

		$this->load->view('templates_rental/header');
		$this->load->view('templates_rental/sidebar');
		$this->load->view('rental/form_update_mobil',$data);
		$this->load->view('templates_rental/footer');

	}

	public function update_mobil_aksi(){
		$this->rental_model->rental_login();
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->update_mobil($this->input->post('id_mobil'));
		}else{
			$id 					= $this->input->post('id_mobil');
			$kode_type				= $this->input->post('kode_type');
			$merk					= $this->input->post('merk');
			$no_plat				= $this->input->post('no_plat');
			$warna					= $this->input->post('warna');
			$tahun					= $this->input->post('tahun');
			$status					= $this->input->post('status');
			$harga					= $this->input->post('harga');
			$denda					= $this->input->post('denda');
			$ac						= $this->input->post('ac');
			$supir					= $this->input->post('supir');
			$mp3_player				= $this->input->post('mp3_player');
			$central_lock			= $this->input->post('central_lock');
			$gambar					= $_FILES['gambar']['name'];
			
			if($gambar){
				$config['upload_path']		= './assets/upload';
				$config['allowed_types']	= 'jpg|jpeg|png|tiff|webp';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('gambar')){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar', $gambar);
				}else{
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'kode_type'			=> $kode_type,
				'merk'				=> $merk,
				'no_plat'			=> $no_plat,
				'tahun'				=> $tahun,
				'warna'				=> $warna,
				'status'			=> $status,
				'harga'				=> $harga,
				'denda'				=> $denda,
				'ac'				=> $ac,
				'supir'				=> $supir,
				'mp3_player'		=> $mp3_player,
				'central_lock'		=> $central_lock,
			);

			$where = array(
				'id_mobil' => $id
			);

			$this->rental_model->update_data('mobil', $data, $where);

			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Mobil Berhasil Diupdate
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('rental/data_mobil');
		}
	}

	public function _rules(){

		$this->form_validation->set_rules('kode_type','Kode Type','required');
		$this->form_validation->set_rules('merk','Merk','required');
		$this->form_validation->set_rules('no_plat','No Plat','required');
		$this->form_validation->set_rules('tahun','Tahun','required');
		$this->form_validation->set_rules('warna','Warna','required');
		$this->form_validation->set_rules('status','Status','required');
		$this->form_validation->set_rules('harga','Harga','required');
		$this->form_validation->set_rules('denda','Denda','required');
	}


	public function detail_mobil($id){
		$this->rental_model->rental_login();

		$where = array('id_mobil' => $id);
		$data['mobil'] = $this->db->query("SELECT * FROM mobil mb, type tp WHERE mb.kode_type=tp.kode_type AND mb.id_mobil='$id'")->result();

		if($data['mobil']['0']->nama_rental != $this->session->userdata('nama_rental')){
			redirect('rental/data_mobil');
		}else{
		}

		$data['detail'] = $this->rental_model->ambil_id_mobil($id);

		$this->load->view('templates_rental/header');
		$this->load->view('templates_rental/sidebar');
		$this->load->view('rental/detail_mobil',$data);
		$this->load->view('templates_rental/footer');

	}

	public function delete_mobil($id){
		$this->rental_model->rental_login();


		$where = array('id_mobil' => $id);
		$data['mobil'] = $this->db->query("SELECT * FROM mobil mb, type tp WHERE mb.kode_type=tp.kode_type AND mb.id_mobil='$id'")->result();

		if($data['mobil']['0']->nama_rental != $this->session->userdata('nama_rental')){
			redirect('rental/data_mobil');
		}else{
		}

		$this->rental_model->delete_data($where,'mobil');

		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Data Mobil Berhasil Dihapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('rental/data_mobil');
	}
}
?>