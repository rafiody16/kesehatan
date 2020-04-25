<?php
include '../koneksi.php';
include '../aset/header.php';

$id_odp=$_GET["id_odp"];

$query=mysqli_query($koneksi,"SELECT * FROM odp where id_odp='$id_odp'");
$s=mysqli_fetch_assoc($query);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Data ODP</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="pedit-odp.php">
                    <div class="form-group">
                            <input type="text" value="<?= $id_odp?>" name="id_odp"class="form-control" hidden>
                        </div>
                        <div class="form-group">
                            <label for="odp">Nama</label>
                            <input type="text" name="nama"value="<?= $s['nama'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="datepicker">Umur</label>
                            <input type="text" name="umur" value="<?= $s['umur'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="datepicker">Alamat</label>
                            <input type="text" name="alamat" value="<?= $s['alamat'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="datepicker">Suhu</label>
                            <input type="text" name="suhu" value="<?= $s['suhu'] ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="btnPinjam" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>