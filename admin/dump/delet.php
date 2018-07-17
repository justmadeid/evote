<?php
    include "koneksi.php";
      $id = $_GET['id'];
      $sql = mysql_query("DELETE FROM kategori WHERE id = '$id'");
      if ($sql) {
          echo "<metta http-equiv='refresh' content='0;url=main.php?pages=kategori'>";
      }
      else{
        echo "gagal";
      }




   
?>