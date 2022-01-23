<?php
	session_start(); // memulai session di PHP
	/** session digunakan untuk menyimpan data yang diinputkan pada halaman web **/

	if(isset($_GET['process'])){ 
	//  isset digunakan untuk melakukan pemeriksaan apakah variable (process) sudah terbentuk atau belum
	//  $_GET berfungsi untuk mengambil data yang tersimpan pada variable yang dipanggil (process) 
		if($_GET['process'] == 'hapus_semua_session') { 
		//  apabila variable yang akan diambil datanya = hapus semua session
			session_start(); // memulai pengambilan data sesuai dengan nilai yang terpanggil pada session process
			session_destroy(); // menghancurkan / menghapus data yang ditunjuk sesuai dengan nilai yang terpanggil pada session process
			header("location:session_read.php"); // kembali ke halaman session_read.php
		} elseif ($_GET['process'] == 'hapus_session1') {
		//  apabila variable yang akan diambil datanya = hapus session1
			session_start();
			unset($_SESSION['session_tersimpan1']); // unset berfungsi untuk menghilangkan variable yang ditentukan (nilai yang tersimpan di dalam session_tersimpan1)
			header("location:session_read.php"); // kembali ke halaman session_read.php
		} elseif ($_GET['process'] == 'hapus_session2') {
		//  apabila variable yang akan diambil datanya = hapus session2
			session_start();
			unset($_SESSION['session_tersimpan2']); // unset berfungsi untuk menghilangkan variable yang ditentukan (nilai yang tersimpan di dalam session_tersimpan2)
			header("location:session_read.php"); // kembali ke halaman session_read.php
		} 
	} elseif (isset($_POST)) {
		//  isset : melakukan pemeriksaan apakah variable yang akan di POST sudah terbentuk atau belum
		//  $_POST : mengirimkan data yang ada pada variable yang terbentuk
			session_start(); 
			$_SESSION['session_tersimpan1'] = $_POST['kolom_input_session1']; // variable session_tersimpan1 akan menyimpan data sesuai dengan nilai yang diinputkan pada variable kolom_input_session1
			$_SESSION['session_tersimpan2'] = $_POST['kolom_input_session2']; // variable session_tersimpan2 akan menyimpan data sesuai dengan nilai yang diinputkan pada variable kolom_input_session2
			header("location:session_read.php"); // kembali ke halaman session_read.php
	}
?>