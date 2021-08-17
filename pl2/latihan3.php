<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    $id     = $_GET['id'];

    $data   = mysqli_query($con,"select * from tbl_mahasiswa where id='$id'");
    while($query = mysqli_fetch_array($data)){
        $nim = $query['nim'];
        $nama = $query['nama'];
    }

    if(isset($_POST['update']))
    {    
        $id = $_POST['id'];
        
        $nim=$_POST['nim'];
        $nama=$_POST['nama'];
            
        $result = mysqli_query($con, "UPDATE tbl_mahasiswa SET nim='$nim', nama='$nama' WHERE id=$id");
        header("Location: latihan1.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Data Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Data</h2>
                    </div>
                    <form action="latihan3.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" name="nim" class="form-control" value=<?php echo $nim;?>>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value=<?php echo $nama;?>>
                        </div>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                        <input type="submit" class="btn btn-primary" name="update" value="Update">
                        <a href="latihan1.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>