<?php

/**
 * 
 */
class Staff_model
{
	private $table = 'karyawan';
	private $db;

	public function __construct() 
	{
		$this->db = new Database;
	}

	public function get_all_staffs()
	{

		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function get_staff_by_id($id)
	{
		
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_karyawan=:id');
		$this->db->bind('id', $id);

		return $this->db->single();
	}

	public function get_staff_by_name($name)
	{
		
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama_karyawan=:nama');
		$this->db->bind('nama', $name);

		return $this->db->single();
	}

	public function detail_staff($id)
	{
		return self::get_staff_by_id($id);
	}

	public function add_staff($post, $files)
	{
		$_SESSION['error'] = "";

		if (self::get_staff_by_name($post['nama_karyawan'])) {
			Flasher::setFlash('Nama karyawan '. $post['nama_karyawan'], ' sudah ada.', 'danger');
			header('Location: ' . BASE_URL . '/staff/add_staff');
			exit();

		} else {
			$allowed = ['image/jpeg', 'image/jpg', 'image/png'];

			// upload the file
			if ($files['foto_karyawan']['name'] != "" && $files['foto_karyawan']['error'] == 0) {
				if (in_array($files['foto_karyawan']['type'], $allowed)) {
					
				} else {
					$_SESSION['error'] = "Only pictures are allowed!";
				}
			}
			

			if ($_SESSION['error'] == "") {

				$file_sementara = $files['foto_karyawan']['tmp_name'];

				$tujuan = "img/". $files['foto_karyawan']['name'];
				
				move_uploaded_file($file_sementara, $tujuan);

				$query = "INSERT INTO ". $this->table . " (nama_karyawan, no_induk_karyawan, foto_karyawan, peringkat_golongan, sk_pengangkatan, jabatan, jenis_kelamin, agama, status, tempat_lahir, tanggal_lahir, no_ktp, provinsi_ktp, kota_ktp, alamat_ktp, no_npwp, provinsi_domisili, kota_domisili, alamat_domisili, pendidikan_terakhir, no_ijazah) VALUES (:nama, :ni_karyawan, :foto_karyawan, :per_gol, :sk, :jab, :jk, :agama, :status, :tl, :tgl, :ktp, :prov_ktp, :kot_ktp, :alamat_ktp, :npwp, :prov_domisil, :kot_domisil, :alamat_domisil, :pend_terakhir, :no_ijazah)";

				$this->db->query($query);
				
				$this->db->bind('nama', $post['nama_karyawan']);
				$this->db->bind('ni_karyawan', $post['no_induk_karyawan']);
				$this->db->bind('per_gol', $post['peringkat']);
				$this->db->bind('sk', $post['sk_pengangkatan']);
				$this->db->bind('jab', $post['jabatan']);
				$this->db->bind('jk', $post['jenis_kelamin']);
				$this->db->bind('agama', $post['agama']);
				$this->db->bind('status', $post['status']);
				$this->db->bind('tl', $post['tempat_lahir']);
				$pecah = explode('-', $post['tanggal_lahir']);
				$tgl_lahir = $pecah[2].'-'.$pecah[1].'-'.$pecah[0];
				$this->db->bind('tgl', $tgl_lahir);
				$this->db->bind('ktp', $post['no_ktp']);
				$this->db->bind('prov_ktp', $post['provinsi_ktp']);
				$this->db->bind('kot_ktp', $post['kota_ktp']);
				$this->db->bind('alamat_ktp', $post['alamat_ktp']);
				$this->db->bind('npwp', $post['jenis_kelamin']);
				$this->db->bind('prov_domisil', $post['provinsi_domisili']);
				$this->db->bind('kot_domisil', $post['kota_domisili']);
				$this->db->bind('alamat_domisil', $post['alamat_domisili']);
				$this->db->bind('pend_terakhir', $post['pendidikan_terakhir']);
				$this->db->bind('no_ijazah', $post['no_ijazah']);
				
				$this->db->bind('foto_karyawan', $tujuan);
														
				$this->db->execute();

				return $this->db->rowCount();
			}
		}
	}

	public function edit_staff($data)
	{
		$query = "UPDATE ". $this->table ." SET post_title = :title, post_article = :article WHERE post_id = :id";

		$this->db->query($query);

		$this->db->bind('title', $data['title']);
		$this->db->bind('article', nl2br($data['article']));
		
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	
	}

	public function remove_post($id)
	{
		$query = "DELETE FROM " . $this->table . " WHERE post_id = :id";

		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->execute();
		
		return $this->db->rowCount();
	}
}