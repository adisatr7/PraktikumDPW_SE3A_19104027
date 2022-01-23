<?php
    // Imports
    include "connection.php";
    include "create_message.php";

    // Query to delete data
    $sql = "DELETE FROM data WHERE id = ".$_GET['id'];

    // Successful data deletion
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        create_message('Hapus data berhasil','success','check');
        header("location:index.php");
        exit();
    }

    // Failed data deletion
    else {
        $conn->close();
        create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
        header("location:index.php");
        exit();
    }
?>