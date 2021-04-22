<?php

/******************************************
PRAKTIKUM RPL
******************************************/

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task.class.php");

// Membuat objek dari kelas task
$otask = new Task($db_host, $db_user, $db_password, $db_name);
$otask->open();

// Memanggil method getTask di kelas Task
$otask->getTask();

// Proses mengisi tabel dengan data
$data = null;
$no = 1;

while (list($id, $nama, $nik, $tempat_lahir, $tanggal, $gender, $email, $telepon, $pekerjaan, $bpjs, $vaksin) = $otask->getResult()) {
	if($vaksin == "Sudah"){
		$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $nama . "</td>
			<td>" . $nik . "</td>
			<td>" . $tempat_lahir . "</td>
			<td>" . $tanggal . "</td>
			<td>" . $gender . "</td>
			<td>" . $telepon . "</td>
			<td>" . $email . "</td>
			<td>" . $pekerjaan . "</td>
			<td>" . $bpjs . "</td>
			<td>" . $vaksin . "</td>
			<td>
			<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold; font-size:smaller;'>Hapus</a></button>
			</td>
			</tr>";
			$no++;
	}else{
		$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $nama . "</td>
			<td>" . $nik . "</td>
			<td>" . $tempat_lahir . "</td>
			<td>" . $tanggal . "</td>
			<td>" . $gender . "</td>
			<td>" . $telepon . "</td>
			<td>" . $email . "</td>
			<td>" . $pekerjaan . "</td>
			<td>" . $bpjs . "</td>
			<td>" . $vaksin . "</td>
			<td>
			<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold; font-size:smaller;'>Hapus</a></button>
			<button class='btn btn-warning' ><a href='index.php?id_status=" . $id .  "' style='color: white; font-weight: bold; font-size:smaller;'>Sudah Vaksin</a></button>
			</td>
			</tr>";
			$no++;
	}
}

if(isset($_POST['add'])){
	$otask->add($_POST);
	header('location: index.php');
}

if(isset($_GET['id_hapus'])){
	$otask->delete($_GET);
	header('location: index.php');
}

if(isset($_GET['id_status'])){
	$otask->status_vaksin($_GET);
	header('location: index.php');
}

// Menutup koneksi database
$otask->close();

// Membaca template skin.html
$tpl = new Template("templates/skin.htm");

// Mengganti kode Data_Tabel dengan data yang sudah diproses
$tpl->replace("DATA_TABEL", $data);

// Menampilkan ke layar
$tpl->write();