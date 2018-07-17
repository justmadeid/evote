<?php
    include "koneksi.php";

  
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];


    $sql = mysql_query("UPDATE kategori SET kategori = '$kategori' WHERE id=$id");

    if ($sql) {

        echo"<meta http-equiv='refresh' content='0;url=main.php?pages=kategori'>";
    } else {

        echo "Gagal Melakukan Perubahan: ";
    }



   
?>