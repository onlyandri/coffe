<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['nav'] = 'home';
		//$data['cafe'] = $this->db->query("SELECT COUNT(id_cafe) as jumlah_cafe from cafe where id_kecamatan = $id_kec")->row_array();
		$data['cafe'] = $this->db->query("SELECT COUNT(id_cafe) as jumlah_cafe from cafe")->row_array();
		$data['menu'] = $this->db->query("SELECT count(id_menu) as jumlah_menu from menu")->row_array();
		$data['kecamatan'] = $this->db->query("SELECT * FROM kecamatan")->result();
		$data['kec'] = $this->db->query("SELECT count(id_kecamatan) as jumlah_kecamatan FROM kecamatan")->row_array();
		$data['kelurahan'] = $this->db->query("SELECT count(id_kelurahan) as jumlah_kelurahan FROM kelurahan")->row_array();
		$this->load->view('user/template/header', $data);
		$this->load->view('user/home', $data);
		$this->load->view('user/template/footer');
	}
	
	public function info_lanjut(){
		$data['nav'] = 'infoLanjut';
		$this->load->view('user/template/header', $data);
		$this->load->view('user/infoLanjut');
		$this->load->view('user/template/footer');
	}
	
	public function pengajuan()
	{
		$data['nav'] = 'form_pengajuan';
		$this->load->view('user/template/header', $data);
		$this->load->view('user/pengajuan');
		$this->load->view('user/template/footer');
	}
	public function form_pengajuan()
	{
		$data['nav'] = 'form_pengajuan';
		$que = $this->db->query("SELECT id_cafe from cafe order by id_cafe desc limit 1");

		if ($que->num_rows() > 0) {
			$dt = $que->row_array();
			$kode = intval($dt['id_cafe']) + 1;
		} else {
			$kode = 1;
		}

		$kode_max = str_pad($kode, 6, "0", STR_PAD_LEFT);
		$kode_jadi = "cafe-" . $kode_max;

		$data['kode'] = $kode_jadi;

		$data['kecamatan'] = $this->db->query("SELECT * FROM kecamatan")->result();

		$this->load->view('user/template/header', $data);
		$this->load->view('user/form_pengajuan',$data);
		$this->load->view('user/template/footer',$data);
	}

	public function insertPengajuan()
	{
		if (!empty($_FILES['ktp']['name']) & !empty($_FILES['foto']['name'])) {

			$email = $this->input->post('email');

			$id_otomatis = $this->input->post('password');
			$nik = $this->input->post('nik');

			$queryEmail = $this->db->query("SELECT * FROM cafe WHERE email_pemilik = '$email'")->num_rows();
			$queryNik = $this->db->query("SELECT * FROM cafe WHERE nik = '$nik'")->num_rows();

			if ($queryEmail > 0) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">email sudah terdaftar</div>');
				header('location:' . base_url() . 'user/form_pengajuan');
			} else {
				if ($queryNik > 0) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">nik sudah terdaftar</div>');
					header('location:' . base_url() . 'user/form_pengajuan');
				} else {
					$config['upload_path'] = 'upload/cafe';
					//restrict uploads to this mime types
					$config['allowed_types'] = 'jpg|jpeg|png|mp3|pdf|docx';
					$config['max_size'] = 999999999;
					$config['file_name1'] = $_FILES['ktp']['name'];
					$config['file_name3'] = $_FILES['foto']['name'];


					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					$this->upload->do_upload('ktp');
					$uploadKtp = $this->upload->data();
					$fileKtp = $uploadKtp['file_name'];

					$this->upload->do_upload('foto');
					$uploadFoto = $this->upload->data();
					$fileFoto = $uploadFoto['file_name'];

					$this->upload->do_upload('foto_ketua');
					$uploadFotoKetua = $this->upload->data();
					$fileFotoKetua = $uploadFotoKetua['file_name'];


					$this->upload->do_upload('berkas');
					$uploadBerkas = $this->upload->data();
					$fileBerkas = $uploadBerkas['file_name'];
					$data = [
						'nama_pemilik' => $this->input->post('nama_pemilik'),
						'nama_cafe' => $this->input->post('nama_cafe'),
						'nik' => $this->input->post('nik'),
						'id_otomatis' => $this->input->post('password'),
						'email_pemilik' => $this->input->post('email'),
						'id_kelurahan' => $this->input->post('kelurahan'),
						'longitude' => $this->input->post('longitude'),
						'latitude' => $this->input->post('latitude'),
						'ktp' => $fileKtp,
						'deskripsi' => $this->input->post('deskripsi'),
						'status' => 1,
						'foto' => $fileFoto,
						'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					];
					$query = $this->db->insert('cafe', $data);
					if ($query) {

						$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">berhasil diajukan</div>');
						header('location:' . base_url() . 'user/pengajuan/');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">file harus gambar</div>');
						header('location:' . base_url() . 'user/form_pengajuan');
					}
				}
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">file harus diisi</div>');
			header('location:' . base_url() . 'user/form_pengajuan');
		}
	}
	
	public function pengajuanDetail($id_otomatis,$nik){
		$data['nav'] ='pengajuan';
		$queryCafe = $this->db->query("SELECT * FROM cafe s join kelurahan kl on kl.id_kelurahan = s.id_kelurahan join kecamatan kc on kc.id_kecamatan = kl.id_kecamatan where s.id_otomatis = '$id_otomatis' and nik = '$nik'");
		$data['pengajuan'] = $queryCafe->row_array();

		if($queryCafe->num_rows() > 0){
			$this->load->view('user/template/header',$data);
			$this->load->view('user/pengajuanDetail');
			$this->load->view('user/template/footer');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger font-weight-bold" role="alert">data tidak ditemukan</div>');
			header('location:'.base_url().'user/info_lanjut');
		}
	}


	public function detail_menu($id_menu,$id_cafe)
	{
		$data['nav'] = 'list';
		$data['id_cafe'] = $id_cafe;
		$data['menu'] = $this->db->query("SELECT * FROM menu where id_menu = $id_menu")->row_array();

		$this->load->view('user/template/header',$data);
		$this->load->view('user/detail_menu');
		$this->load->view('user/template/footer');
	}
	public function menu($id_cafe, $id_komentar = null, $id_menu = null)
	{
		$data['nav'] = 'list';
		$data['id_cafe'] = $id_cafe;
		$data['menu'] = $this->db->query("SELECT * from menu where id_cafe = '$id_cafe'")->result();
		$data['galeri'] = $this->db->query("SELECT * from galeri where id_cafe = '$id_cafe'")->result();
		$data['cafe'] = $this->db->query("SELECT * from cafe c join kelurahan kl on kl.id_kelurahan = c.id_kelurahan join kecamatan kc on kc.id_kecamatan = kl.id_kecamatan where c.id_cafe = $id_cafe")->row_array();
		$data['koment'] = $this->db->query("SELECT * from komentar where id_cafe = '$id_cafe'")->result();
		$data['jumlah'] = $this->db->query("SELECT count(id_komentar) as jumlah_koment from komentar where id_cafe = '$id_cafe'")->row_array();
		$this->load->view('user/template/header', $data);
		$this->load->view('user/menu');
		$this->load->view('user/template/footer');
	}

	public function koment($id_cafe)
	{

		$data = [
			'nama_komentar' => $this->input->post('nama'),
			'email_komentar' => $this->input->post('email'),
			'komen' => $this->input->post('komentar'),
			'id_cafe' => $id_cafe

		];

		$query = $this->db->insert('komentar', $data);
		if ($query) {

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Komentar Terkirim</div>');
			header('location:' . base_url() . 'user/menu/' . $id_cafe . '/' . $id_menu);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Komentar tidak terkirim</div>');
			header('location:' . base_url() . 'user/menu/' . $id_cafe . '/' . $id_menu);
		}
	}


	public function getKelurahan()
	{
		$id_kec = $this->input->post('kecamatan_id');
		$output = '';
		if ($id_kec) {
			$data = $this->db->query("SELECT * FROM kelurahan where id_kecamatan = $id_kec")->result();

			foreach ($data as $dt) {

				$nama_kelurahan = $dt->nama_kelurahan;
				$id_kelurahan = $dt->id_kelurahan;

				$output .= ' <option style="background-color: #000 !important;" value="' . $id_kelurahan . '">' . $nama_kelurahan . '</option>';
			}

			echo json_encode($output);
		}
	}
	public function viewmarker($nama_kecamatan)
	{
		$nama = $nama_kecamatan;

		if ($nama == 'k') {
			$data = $this->db->query("SELECT * FROM cafe s join kelurahan k on k.id_kelurahan = s.id_kelurahan join kecamatan kc on kc.id_kecamatan = k.id_kecamatan where s.status = 2")->result();
		} else {
			$data = $this->db->query("SELECT * FROM cafe s join kelurahan k on k.id_kelurahan = s.id_kelurahan join kecamatan kc on kc.id_kecamatan = k.id_kecamatan where kc.id_kecamatan = $nama and s.status = 2")->result();
		}

		echo json_encode($data);
	}


	public function list_cafe()
	{	
		$data['nav'] = 'list';


		$data['cafe'] = $this->db->query("SELECT * FROM cafe c join kelurahan k on k.id_kelurahan = c.id_kelurahan join kecamatan kc on kc.id_kecamatan = k.id_kecamatan where c.status = 2")->result();
		//$data['menu'] = $this->db->query("SELECT count(id_menu) as jumlah_menu from menu where id_cafe = $id_cafe")->row_array();	$data['nav'] = 'List Cafe';
		$this->load->view('user/template/header', $data);
		$this->load->view('user/list_cafe');
		$this->load->view('user/template/footer');
	}

	public function termurah(){

		$data = $this->db->query("SELECT *, AVG(m.harga) as jumlah from menu m join cafe c on c.id_cafe = m.id_cafe group by c.id_cafe order by jumlah limit 1")->result();

		echo json_encode($data);

	}

	public function terdekat($lat,$long){
		$data = $this->db->query("SELECT *, SQRT(
			POW(69.1 * (latitude - $lat), 2) +
			POW(69.1 * ($long - longitude) * COS(latitude / 57.3), 2)) AS distance
			FROM cafe HAVING distance < 100 ORDER BY distance;")->result();

		echo json_encode($data);

	}

	public function populer(){

	}
}