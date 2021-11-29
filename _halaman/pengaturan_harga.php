<?php
$servername = "localhost";
$database = "spst"; 
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['edit'])){
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    echo$sql = "UPDATE `harga` SET `daftarharga`='$harga' WHERE `kategori` = '$jenis'";
    mysqli_query($conn, $sql);
}

$sqlAmbil = "SELECT * FROM `harga`";
$runAmbil = mysqli_query($conn, $sqlAmbil);

?>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<head>
<?php
echo'
<table>
<tr>
    <td>kategori</td>
    <td>harga</td>
    <td>edit</td>
</tr>
';

while($ambil = mysqli_fetch_assoc($runAmbil)){
    echo'
    <tr>
        <td>'.$ambil['kategori'].'</td>
        <td>'.$ambil['daftarharga'].'</td>
        <td>
            <a href="#edit_'.$ambil['kategori'].'" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
        </td>

        <div class="modal fade" id="edit_'.$ambil['kategori'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
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
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
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