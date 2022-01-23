<?php
    include "connection.php";
    include "create_message.php";

    $nama = $_POST['name'];
    $kelas = $_POST['class'];
    $alamat = $_POST['address'];

    $targetDir = "uploads/";
    $nama_file = time().$_FILES["file"]["name"];
    $file_temp = $_FILES["file"]["tmp_name"];

    if(isset($_POST['id'])) {
        move_uploaded_file($file_temp, $targetDir."/".$nama_file);
        $sql = "UPDATE data
                SET nama='$nama', kelas='$kelas', alamat='$alamat', foto='$nama_file'
                WHERE id=".$_POST['id'];
        $edit = $conn->query($sql);

        if($edit) {
            $conn->close();
            create_message('Ubah data berhasil','success','check');
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        }

        else {
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error, "danger", "warning");
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        }
    }

    else {
        move_uploaded_file($file_temp, $targetDir."/".$nama_file);
        $sql = "INSERT into data(nama, kelas, alamat, foto)
                VALUES('$nama','$kelas','$alamat', '$nama_file')";
        $add = $conn->query($sql);

        if($add) {
            $conn->close();
            // pesan simpan data berhasil
            create_message('Simpan data berhasil','success','check');
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        }

        else {
            $conn->close();
            // pesan simpan data error
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        }
    }
?>