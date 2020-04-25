<?php


include "../koneksi.php";

$id_positif = $_GET["id_positif"]; 

$query = mysqli_query($koneksi, "DELETE FROM positif WHERE id_positif ='$id_positif' ");

// var_dump($query);

if ($query>0) {
    echo 
    "
    <script>
        alert('DATA BERHASIL DI HAPUS');
        document.location.href='positif.php'
    </script>
";
}

?>