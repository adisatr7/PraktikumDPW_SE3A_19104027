<?php
	$target_dir = "uploads/"; 
		// target dir : untuk lokasi peletakkan gambar
	$target_file = $target_dir . basename($_FILES["gambar_contoh"]["name"]); 
		// target_file : alamat file jika nanti file sudah berhasil disimpan
	$error = false; 
		// sebagai tempat penyimpanan sementara ketika terjadi kesalahan
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		// menampung ekstensi file yang akan diupload (memvalidasi apakah file yang disubmit berupa gambar atau bukan)
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["gambar_contoh"]["tmp_name"]);
		// variable check untuk mengecek ukuran gambar yang ada pada variable Files yang memiliki parameter (gambar_contoh)(tmp_name)
		if($check !== false) {
			//  apabila yang diupload adalah file yang berektensi gambar (png/jpg/gif/jpeg)
			echo "File is an image - ".$check["mime"].".";
			//  mencetak kalimat "File is an image - nama file"
			$error = false; 
			if (file_exists($target_file)) { 
			//  apabila file yang diupload sudah tersimpan di dalam variable target_file
				echo "Sorry, file already exists."; 
				$error = true; 
			} elseif ($_FILES["gambar_contoh"]["size"] > 500000) { 
			//  apabila file yang diupload melebihi ukuran 500000
				echo "Sorry, your file is too large."; 
				$error = true; 
			} elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) { 
			//  apabila file yang diupload tidak sesuai format gambar
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."; 
				$error = true; 
			}
		} else {
		//  apabila yang diupload bukanlah file yang berekstensi gambar
			echo "File is not an image.";
			$error = false;
		}
	}

?>