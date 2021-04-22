<?php 

/******************************************
PRAKTIKUM RPL
******************************************/

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM pasien";

		// Mengeksekusi query
		return $this->execute($query);
	}

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

	function delete($data){
		$id = $data['id_hapus'];
		$query = "DELETE FROM pasien WHERE id_pasien = '$id'";

		return $this->execute($query);
	}
	
	function status_vaksin($data){
		$vaksin = "Sudah";
		$id = $data['id_status'];
		$query = "UPDATE pasien SET vaksin = '$vaksin' WHERE id_pasien = '$id'";

		return $this->execute($query);
	}
}



?>
