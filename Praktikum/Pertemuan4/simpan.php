<?php 
	include "connection.php";
	include "create_message.php";
	include "upload_process.php";

	$nama = $_POST['nama']; 
	$kelas = $_POST['kelas']; 
	$alamat = $_POST['alamat']; 
	$image = $_POST['image'];
	if(isset($_POST['id'])) {
		$sql = "UPDATE data SET nama='$nama', kelas='$kelas', alamat='$alamat', image='$image' WHERE id=".$_POST['id'];
		$edit = $conn->query($sql); 
		if($edit) { 
			$conn->close(); 
			create_message('Ubah data berhasil','success','check');
			header("location:".$_SERVER['HTTP_REFERER']); 
			exit(); 
		} else {
			$conn->close(); 
			create_message("Error: ".$sql." <br> ".$conn->error,"danger","warning");
			header("location:".$_SERVER['HTTP_REFERER']); 
			exit(); 
		} 
	} else { 
		$sql = "INSERT into data(nama, kelas, alamat, image) VALUES('$nama','$kelas','$alamat', '$image')"; 
		$add = $conn->query($sql); 
		if($add) { 
			$conn->close(); 
			create_message('Simpan data berhasil','success','check');
			header("location:".$_SERVER['HTTP_REFERER']); 
			exit(); 
		} else { 
			$conn->close(); 
			create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
			header("location:".$_SERVER['HTTP_REFERER']); 
			exit(); 
		} 
	} 
?> 