<?php


include "../koneksi.php";

$id_pdp = $_GET["id_pdp"]; 

$query = mysqli_query($koneksi, "DELETE FROM pdp WHERE id_pdp ='$id_pdp' ");

// var_dump($query);

if ($query>0) {
    echo 
    "
    <script>
        alert('DATA BERHASIL DI HAPUS');
        document.location.href='pdp.php'
    </script>
";
}

?>