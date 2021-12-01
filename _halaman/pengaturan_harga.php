<?php
$title="Pengaturan Harga";
include '_helpers/connect.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['edit'])){
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    $sql = "UPDATE `harga` SET `daftarharga`='$harga' WHERE `kategori` = '$jenis'";
    mysqli_query($conn, $sql);
}

$sqlAmbil = "SELECT * FROM `harga`";
$runAmbil = mysqli_query($conn, $sqlAmbil);

?>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<head>
 <style>
 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}

 </style>
</head>
<?php
echo'
<table class="table border table-hover bg-white">
<thead>
                    <tr role="row">
                        <th class="text-center">Nama</th>
                        <th class="text-center">Harga</th>
						<th class="text-center">Aksi</th>
                    </tr>
                </thead>
';

while($ambil = mysqli_fetch_assoc($runAmbil)){
    echo'
    <tr>
        <td class="text-center">'.$ambil['kategori'].'</td>
        <td class="text-center">Rp '. $ambil['daftarharga'].'</td>
        <td class="text-center">
            <a href="#edit_'.$ambil['kategori'].'" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
        </td>

        <div class="modal fade" id="edit_'.$ambil['kategori'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h4 class="modal-title" id="myModalLabel"></h4></center>
                    </div>
                    <div class="modal-body">
                    <div class="container-fluid">
                    <form method="POST" action="">
                        <div class="row form-group">
                            <div class="col-sm">
                                <label class="control-label" style="position:relative; top:7px;">Edit Harga '.$ambil['kategori'].':</label>
                            </div>
                            <div class="col-sm">
                                <input class="form-control" type="number" name="harga">
                                <input type="hidden" name="jenis" value="'.$ambil['kategori'].'">
                            </div>
                        </div>
                    </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                        <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Ubah</a>
                    </form>
                    </div>

                </div>
            </div>
        </div>

    </tr>
    ';
}

echo'</table>';
?>

<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>