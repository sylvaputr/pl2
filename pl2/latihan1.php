<?php
	include 'koneksi.php';
	$db = new Database();
	$con=$db->Connect();

	$query=mysqli_query($con,"select * from tbl_mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Data Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Daftar Mahasiswa</h2>
                        <a href="latihan2.php" class="btn btn-success pull-right">Tambah Data</a>
                    </div>

                    <table class='table table-bordered table-striped'>
					    <tr>
					        <th>No</th> 
					        <th>NPM</th> 
					        <th>Nama</th>
					        <th>Aksi</th>
					    </tr>
                   		<?php
                            while($data=mysqli_fetch_array($query)){
                            	echo "<tr>";
                            		echo "<td>" . $data['id'] . "</td>";
                                    echo "<td>" . $data['nim'] . "</td>";
                                    echo "<td>" . $data['nama'] . "</td>";
                                    echo "<td><a href='latihan3.php?id=$data[id]'>Edit</a> | <a href='latihan4.php?id=$data[id]'>Delete</a></td></tr>";
                                echo "</tr>";
							}
						?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
