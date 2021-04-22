<?php 

/******************************************
PRAKTIKUM RPL
******************************************/

class Pasien extends DB{
	
	// Mengambil data
	function getPasien(){
		// Query mysql select data ke pasien
		$query = "SELECT * FROM pasien";

		// Mengeksekusi query
		return $this->execute($query);
	}

	//Menambah data
	function add($data){
		$nama = $data['nama'];
		$nik = $data['nik'];
		$tempat_lahir = $data['tempat_lahir'];
		$tanggal = $data['tanggal'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telepon = $data['telepon'];
		$pekerjaan = $data['pekerjaan'];
		$bpjs = $data['bpjs'];
		$vaksin = "Belum";

		$query = "INSERT INTO pasien (nama, nik, tempatLahir, tanggalLahir, jenisKelamin, noTelepon, email, pekerjaan, bpjs, vaksin)
				VALUES ('$nama', '$nik', '$tempat_lahir', '$tanggal', '$gender', '$telepon', '$email', '$pekerjaan', '$bpjs', '$vaksin')";

		return $this->execute($query);
	}

	//Menghapus data
	function delete($data){
		$id = $data['id_hapus'];
		$query = "DELETE FROM pasien WHERE id_pasien = '$id'";

		return $this->execute($query);
	}
	
	//Mengupdate data
	function status_vaksin($data){
		$vaksin = "Sudah";
		$id = $data['id_status'];
		$query = "UPDATE pasien SET vaksin = '$vaksin' WHERE id_pasien = '$id'";

		return $this->execute($query);
	}
}



?>
