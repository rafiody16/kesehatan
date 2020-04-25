<?php


include "../koneksi.php";

$id_odp = $_GET["id_odp"]; 

$query = mysqli_query($koneksi, "DELETE FROM odp WHERE id_odp ='$id_odp' ");

// var_dump($query);

if ($query>0) {
    echo 
    "
    <script>
        alert('DATA BERHASIL DI HAPUS');
        document.location.href='odp.php'
    </script>
";
}

?>