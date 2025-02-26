<?php

include('koneksi.php');

$id=$_GET['id'];
$query="SELECT*FROM tbl_siswa WHERE id_siswa = $id LIMIT 1";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        EDIT SISWA
                    </div>
                    <div class="card-body">
                        <form action="update-siswa.php" method="POST">
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" name="nisn" value="<?php echo $row['nisn'] ?>" placeholder="Masukan NISN Siswa" class="form-control">
                                <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>" placeholder="Masukan Nama lengkap Siswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukan Nama lengkap Siswa" rows="4" value="<?php echo $row['nama_lengkap'] ?>"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>