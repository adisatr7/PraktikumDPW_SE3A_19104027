<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session</title>
</head>
<body>
	<!--membuat form yang akan di proses pada file session_process.php-->
	<form action="session_process.php" method="post">
	<!--karena menggunakan method post artinya hasil pengisian form akan dikirimkan kepada file process (session_process.php)-->
		<input type="text" name="kolom_input_session1" required/></br>
		<!--jenis pengisian form berupa teks-->
		<!--nama yang akan digunakan untuk menghubungkan form dengan database yaitu "kolom_input_session1"-->
		<input type="text" name="kolom_input_session2" required/></br>
		<!--jenis pengisian form berupa teks-->
		<!--nama yang akan digunakan untuk menghubungkan form dengan database yaitu "kolom_input_session2"-->
		<button type="submit">Simpan</button>
		<!--jenis button submit yang artinya button tersebut akan digunakan untuk meng-submit pengisian form-->
	</form>


	<!--menambahkan button hapus-->
	<a href="session_process.php?process=hapus_session1"> <!--link dinamis-->
	<!--menuju ke session_process.php dengan variable process yang memiliki parameter hapus_session1-->
		<button>Hapus Session 1</button>
	</a><br/>
	
	<a href="session_process.php?process=hapus_session2"> <!--link dinamis-->
	<!--menuju ke session_process.php dengan variable process yang memiliki parameter hapus_session2-->
		<button>Hapus Session 2</button>
	</a><br/>
	
	<a href="session_process.php?process=hapus_semua_session"> <!--link dinamis-->
	<!--menuju ke session_process.php dengan variable process yang memiliki parameter hapus_semua_session-->
		<button>Hapus Session Semua</button>
	</a><br/>


	<?php 
		session_start(); // memanggil session yang ada pada session yang sudah ada pada session_process
	?>

	Session yang tersimpan 1 : 
		<?php
			echo isset($_SESSION['session_tersimpan1'])?$_SESSION['session_tersimpan1']:'Session 1 Kosong'; 
			/*
				==> isset($_SESSION['session_tersimpan1']) --> membaca apa yang tersimpan di dalam $_SESSION session_tersimpan1.
				==> session_tersimpan1 mendapatkan nilai dari pengisian form kolom_input_session1 yang telah di submit.
				==> apabila kosong / form tidak diisi maka $_SESSION session_tersimpan1 akan menyimpan dan mencetak nilai 'Session 1 kosong'
			*/
		?>

	<br/>

	Session yang tersimpan 2 :
		<?php
			echo isset($_SESSION['session_tersimpan2'])?$_SESSION['session_tersimpan2']:'Session 2 Kosong';
		?>
</body>
</html>