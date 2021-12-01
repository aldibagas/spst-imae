<?php

$title="Edit Data";
$id = $_GET['id'];
$servername = "localhost";
$database = "spst"; 
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}

$query = mysqli_query($conn, "SELECT * FROM transaksi WHERE id='$id' ");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Edit Data
            </div>
            <div class="card-body">
                <form action="update.php" method="POST">

                <input type="hidden" name="id" value="<?php echo $result[0] ['id']?>">
                    <div class="mb-3 row">
                        <label for="tanggal" class="col-sm-2 col-form-label">ID Transaksi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="$id" name="id" value="<?php echo $result[0] ['id'] ?>" disabled >
                    </div>

                    </div><div class="mb-3 row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo $result[0] ['tanggal'] ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="idp1" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="idp1" name="idp1" value="<?php echo $result[0] ['idp1'] ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="idp2" class="col-sm-2 col-form-label">Nama Petugas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="idp2" name="idp2" value="<?php echo $result[0] ['idp2'] ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="aktivitas" class="col-sm-2 col-form-label">Aktivitas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="aktivitas" name="aktivitas" value="<?php echo $result[0] ['aktivitas'] ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="data_sampah" class="col-sm-2 col-form-label">Data Sampah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="data_sampah" name="data_sampah" value="<?php echo $result[0] ['data_sampah'] ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="harga_total" class="col-sm-2 col-form-label">Harga Total</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="harga_total" name="harga_total" value="<?php echo $result[0] ['harga_total'] ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="metode_bayar" class="col-sm-2 col-form-label">Metode Bayar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="metode_bayar" name="metode_bayar" value="<?php echo $result[0] ['metode_bayar'] ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="metode_transaksi" class="col-sm-2 col-form-label">Metode Transaksi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="metode_transaksi" name="metode_transaksi" value="<?php echo $result[0] ['metode_transaksi'] ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status_setor" id="status_setor">
                                <option value="">- Pilih Status - </option>
                                <option value="0" <?php echo ($result[0] ['status_setor'] == '0') ? 'selected' :'';?>>Pending</option>  
                                <option value="1" <?php echo ($result[0] ['status_setor'] == '1') ? 'selected' :'';?>>Terima</option>
                                <option value="2" <?php echo ($result[0] ['status_setor'] == '2') ? 'selected' :'';?>>Tolak</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>