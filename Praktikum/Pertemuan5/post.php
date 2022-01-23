<?php
    // menyimpan data ke dalam database

    // import file koneksi database
    include "connection.php";

    // Tangkap data dari form
    $name = $_POST['nama'];
    $class = $_POST['kelas'];
    $address = $_POST['alamat'];

    // query insert data
    $sql = "INSERT into data(name, class, address) VALUES ('$name', '$class', '$address')";

    // eksekusi query
    $add = $conn -> query($sql);

    // Jika proses berhasil
    if($add){
        $conn -> close();

        // Kembali ke file index.php
        header("location:index.php");
        exit();
    }else{

        // Jika error tampilkan pesan error
        echo "Error : ".$conn->error;
        $conn->close();
        exit();
    }
    
?>