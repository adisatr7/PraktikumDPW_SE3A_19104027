<?php
	include "connection.php";
	include "read_message.php";

	// menghubungkan / memasukkan file connection.php dengan delete_data.php
	$sql = "DELETE from data where id=".$_GET['id'];
	// menghapus data yang id nya sesuai dengan data yang dipanggil oleh parameter id
	if ($conn->query($sql) === TRUE) { 
	//  jika data yang dihapus sama dengan data yang ada pada database
		$conn->close();
		header("location:index.php"); 
		// kembali ke halaman index.php
		exit(); 
	} else { 
		$conn->close();
		create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
		header("location:index.php"); 
		exit(); 
	}
?>