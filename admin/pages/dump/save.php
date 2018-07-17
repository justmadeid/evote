<?php
    include "koneksi.php";

  if (isset($_POST['save'])) {
      $kategori = $_POST['kategori'];
      $sql = mysql_query("INSERT INTO kategori VALUES(null, '$kategori')");
      if ($sql) {
          echo "<meta http-equiv='refresh' content='0;url=main.php?pages=kategori'>";
      }
      else{
        echo "gagal";
      }
  }



   
?>