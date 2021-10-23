<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Data Mahasiswa</title>
    
    <?php include 'templates/head.php'; ?>
</head> 

<body class="app">
	
    <?php include 'templates/navsidebar.php' ?>
    
    <div class="app-wrapper">
		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">
				<h1 class="app-page-title">Data Mahasiswa</h1>
			</div><!--//inner-->
		</div><!--//app-card-->
        <div class="container">
            <table id="datatables" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include '../koneksi.php';
                        $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                        while ($row = mysqli_fetch_array($mahasiswa) ){
                            echo "
                            <tr>
                                <td>".$row['nim']."</td>
                                <td>".$row['nama_mahasiswa']."</td>
                                <td>".$row['password']."</td>
                            </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <?php include 'templates/footer.php' ?>

    <?php include 'templates/scripts.php '?>

</body>
</html> 

