<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM log_obat WHERE id_log = '{$id}'";
	$result = mysqli_query($conn, $sql);
	header('location: obat.php');
?>